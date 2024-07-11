<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use TCPDF;
class DashboardRentController extends Controller
{
    public function exportrent()
    {

        $rents = Rent::all();
        $user = User::all();
        $room = Room::all();

        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Author Name');
        $pdf->SetTitle('PDF Title');
        $pdf->SetSubject('PDF Subject');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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
        $html = '<h2 class="content-title text-center">Daftar Peminjaman</h2>
                <table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <th>Nama Peminjam</th>
                            <th>Kode Ruangan</th>
                            <th>Mulai Pinjam</th>
                            <th>Selesai Pinjam</th>
                            <th>Tujuan</th>
                            <th>Waktu Transaksi</th>
                            <th>Waktu Pengembalian</th>
                            <th>Status Pinjam</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach ($rents as $key => $rents) {
            $html .= '<tr>
                        <td>' . $rents->user->name . '</td>
                        <td>' . $rents->room->code . '</td>
                        <td>' . $rents->time_start_use . '</td>
                        <td>' . $rents->time_end_use . '</td>
                        <td>' . $rents->purpose. '</td>
                        <td>' . $rents->transaction_start. '</td>
                        <td>' . $rents->transaction_end. '</td>
                        <td>' . $rents->status. '</td>
                        </tr>';
        }

        $html .= '</tbody></table>';

        // Output content
        $pdf->writeHTML($html, true, false, true, false, '');


        // Close and output PDF document
        $pdf->Output('rents.pdf', 'D');
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.rents.index', [
            'adminRents' => Rent::latest()->get(),
            'userRents' => Rent::where('user_id', auth()->user()->id)->get(),
            'title' => "Peminjaman",
            'rooms' => Room::all(),
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
            'room_id' => 'required',
            'time_start_use' => 'required',
            'time_end_use' => 'required',
            'purpose' => 'required|max:250',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['transaction_start'] = now();
        $validatedData['status'] = 'pending';
        $validatedData['transaction_end'] = null;

        Rent::create($validatedData);

        return redirect('/dashboard/rents')->with('rentSuccess', 'Peminjaman diajukan. Harap tunggu konfirmasi admin.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        Rent::destroy($rent->id);
        return redirect('/dashboard/rents')->with('deleteRent', 'Data peminjaman berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function endTransaction($id)
    {
        $transaction = [
            'transaction_end' => now(),
            'status' => 'selesai',
        ];

        Rent::where('id', $id)->update($transaction);

        return redirect('/dashboard/rents');
    }
}
