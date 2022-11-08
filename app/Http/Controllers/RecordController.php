<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class RecordController
 * @package App\Http\Controllers
 */
class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::paginate();

        return view('record.index', compact('records'))
            ->with('i', (request()->input('page', 1) - 1) * $records->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $record = new Record();
        return view('record.create', compact('record'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        request()->validate(Record::$rules);

        $record = Record::create($request->all());

       

        return redirect()->route('records.index')
            ->with('success', 'Record created successfully.');
    }

    public function store_public(Request $request)
    { 
        request()->validate(Record::$rules);

        $record = Record::create($request->all());

        return response()->json("Registro creado.", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::find($id);

        return view('record.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::find($id);

        return view('record.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Record $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        request()->validate(Record::$rules);

        $record->update($request->all());

        return redirect()->route('records.index')
            ->with('success', 'Record updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $record = Record::find($id)->delete();

        return response()->json($record);
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
    
    public function getRecords() {
        $data = Record::all();
        return DataTables::of($data)->make(true);
    }
}
