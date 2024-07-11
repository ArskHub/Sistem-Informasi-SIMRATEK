<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Rent;
use App\Models\Building;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use Mpdf\MpdfException;
use TCPDF;

class DashboardRoomController extends Controller
{
    public function exportroom()
    {
        $rooms = Room::all();

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
        $html = '<h2 class="content-title text-center">Daftar Ruangan</h2>
                <table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kode Ruangan</th>
                            <th>Fasilitas</th>
                            <th>Kapasitas</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach ($rooms as $key => $rooms) {
            $html .= '<tr>
                        <td>' . $rooms->name . '</td>
                        <td>' . $rooms->code . '</td>
                        <td>' . $rooms->facility . '</td>
                        <td>' . $rooms->capacity . '</td>
                        <td>' . $rooms->description. '</td>
                    </tr>';
        }

        $html .= '</tbody></table>';

        // Output content
        $pdf->writeHTML($html, true, false, true, false, '');


        // Close and output PDF document
        $pdf->Output('rooms.pdf', 'D');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.rooms.index', [
            'title' => "Ruangan",
            'rooms' => Room::latest()->paginate(10),
            'buildings' => Building::all(),
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
        // $request->file('img')->store('room-image');
        // dd($request);
        $validatedData = $request->validate([
            'code' => 'required|max:4|unique:rooms',
            'name' => 'required',
            'img' => 'image',
            'facility' => 'required',
            'capacity' => 'required',
            'building_id' => 'required',
            'description' => 'required|max:250',
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('room-image/');
        } else {
            $validatedData['img'] = "room-image/roomdefault.jpg";
        }

        $validatedData['status'] = false;

        Room::create($validatedData);

        return redirect('/dashboard/rooms')->with('roomSuccess', 'Data ruangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('dashboard.rooms.show', [
            'title' => $room->name,
            'room' => $room,
            'rooms' => Room::all(),
            'rents' => Rent::where('room_id', $room->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return json_encode($room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        // dd($request);
        // return $request;
        $rules = [
            'name' => 'required',
            'img' => 'image',
            'facility' => 'required',
            'capacity' => 'required',
            'building_id' => 'required',
            'description' => 'required|max:250',
        ];

        if ($request->code != $room->code) {
            $rules['code'] = 'required|max:4|unique:rooms';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('room-image');
        } else {
            $validatedData['img'] = "room-image/roomdefault.jpg";
        }

        $validatedData['status'] = false;

        Room::where('id', $room->id)
            ->update($validatedData);

        return redirect('/dashboard/rooms')->with('roomSuccess', 'Data ruangan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/dashboard/rooms')->with('deleteRoom', 'Data ruangan berhasil dihapus');
    }
}
