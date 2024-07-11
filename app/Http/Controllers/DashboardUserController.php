<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use Mpdf\MpdfException;

    use TCPDF;

class DashboardUserController extends Controller
{
    public function exportuser()
    {
        $users = User::all();

        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Author Name');
        $pdf->SetTitle('PDF Title');
        $pdf->SetSubject('PDF Subject');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // Set default header data
        
        // Path to the logo file
        $logoPath = url('public/logo.png');
        $pdf->SetHeaderData(
            $logoPath,       // path to the logo file
            0,              // logo width in mm
            'SIMRATEK', // header title
            'SIM Ruangan Tempat Event Kampus', // header string
            array(0, 0, 0),     // header text color array(R, G, B)
            array(0, 0, 0)      // header line color array(R, G, B)
                
        );

        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Add a page
        $pdf->AddPage();

        // Set content
        $html = '<h2 class="content-title text-center">Daftar Users</h2>
                <table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Nomor Induk</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach ($users as $key => $user) {
            $html .= '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $user->name . '</td>
                        <td>' . $user->nomor_induk . '</td>
                        <td>' . $user->email . '</td>
                        <td>' . $user->role->name . '</td>
                    </tr>';
        }

        $html .= '</tbody></table>';

        // Output content
        $pdf->writeHTML($html, true, false, true, false, '');


        // Close and output PDF document
        $pdf->Output('users.pdf', 'D');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'title' => 'User',
            'roles' => Role::all(),
            'users' => User::latest()->paginate(10),
            'admins' => User::where('role_id', 1)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'nomor_induk' => 'required|min:7|max:18|unique:users,nomor_induk',
            'email' => 'required|email:dns',
            'password' => 'required|min:4',
            'role_id' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('userSuccess', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request;
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|email:dns',
            'role_id' => 'required'
        ];

        if ($request->nomor_induk != $user->nomor_induk) {
            $rules['nomor_induk'] = 'required|min:7|max:18|unique:users,nomor_induk';
        }

        $validatedData = $request->validate($rules);
        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/users')->with('userSuccess', 'Data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('deleteUser', 'Hapus data user berhasil');
    }

    public function makeAdmin($id)
    {
        $userData = [
            'role_id' => 1,
        ];

        User::where('id', $id)->update($userData);

        return redirect('/dashboard/admin')->with('adminSuccess', 'Data admin berhasil ditambahkan');
    }
}
