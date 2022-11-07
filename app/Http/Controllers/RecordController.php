<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Logica previa para almacenar un registro en la bd
        // ...
        // ...
        // ...


        // Crear pdf despues de haber sido registrado
        $this->exportPDF('$registro->id');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }

    public function exportPDF($id) {
        // Crear instancia de domPDF
        $pdf = App::make('dompdf.wrapper');
        $hoy = Carbon::now()->format('d-m-Y H:i:s');
        // Crear el qr
        $qrCode = QrCode::size(150)->generate("https://www.simplesoftware.io/#/docs/simple-qrcode");
        $pdf->loadView('pdf.pdf', compact('hoy', 'qrCode'));
        return $pdf->stream();
    }
}
