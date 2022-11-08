<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Municipio;
use App\Models\Record;
use App\Models\Subject;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use PhpParser\Node\Expr\AssignOp\Mul;
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
        return view('record.create', compact('record', 'municipios', 'asuntos', 'niveles'));
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

        // Folio consecutivo por municipio
        // $record->turno = Record::where('id_municipio', $record->id_municipio)->count();
        // // Encontrar municipio por id municipio
        // $municipio = Municipio::find($record->id_municipio)->nombre;
        // // Obtener longitud del numero maximo encontrado por municipio
        // $municipioLongitud = strlen(Record::where('id_municipio', $record->id_municipio)->count());
        // // Empezar folio por el nombre del municipio, ademas agregar 13 posiciones relativas al nombre y llenarlas de 0
        // $folio = str_pad($municipio, 13, '0', STR_PAD_RIGHT);
        // // Formar el folio completo
        // $folioCompleto = str_pad($folio, 13 + $municipioLongitud, Record::where('id_municipio', $record->id_municipio)->count(), STR_PAD_RIGHT);

        // $record->save();

        return redirect()->route('records.index')
            ->with('success', 'Record created successfully.');
    }

    public function store_public(Request $request)
    {
        request()->validate(Record::$rules);

        $record = Record::create($request->all());

        // // Folio consecutivo por municipio
        // $record->turno = Record::where('id_municipio', $record->id_municipio)->count();
        // // Encontrar municipio por id municipio
        // $municipio = Municipio::find($record->id_municipio)->nombre;
        // // Obtener longitud del numero maximo encontrado por municipio
        // $municipioLongitud = strlen(Record::where('id_municipio', $record->id_municipio)->count());
        // // Empezar folio por el nombre del municipio, ademas agregar 13 posiciones relativas al nombre y llenarlas de 0
        // $folio = str_pad($municipio, 13, '0', STR_PAD_RIGHT);
        // // Formar el folio completo
        // $folioCompleto = str_pad($folio, 13 + $municipioLongitud, Record::where('id_municipio', $record->id_municipio)->count(), STR_PAD_RIGHT);

        // $record->save();


        return response()->json($record, 200);
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

    public function editPublico($curp)
    {
        $municipios = Municipio::all();
        $asuntos = Subject::all();
        $niveles = Level::all();
        $record = Record::where('curp', $curp)->first();
        return view('record.editPublico', compact('record', 'municipios', 'asuntos', 'niveles'));
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

    public function updatePublic(Request $request, int $record) {
        request()->validate(Record::$rules);
        $record = Record::find($record);
        $record->update($request->all());

        return response()->json('Se ha editado con exito');
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

    public function exportPDF($id)
    {
        // Encontrar el registro por medio del id
        $record = Record::find($id);
        // Crear instancia de domPDF
        $pdf = App::make('dompdf.wrapper');
        $hoy = Carbon::now()->format('d-m-Y H:i:s');
        // Crear el qr
        $qrCode = QrCode::size(150)->generate(route('editPublico', $record->curp));
        $pdf->loadView('pdf.pdf', compact('record', 'hoy', 'qrCode'));
        return $pdf->stream();
    }

    public function encontrarCURP($curp)
    {
        $data = Record::where('curp', $curp)->first();
        if ($data != null)
            return response()->json($data);

        return response()->json('No encontrado', 404);
    }

    public function getRecords()
    {
        $data = Record::all();
        return DataTables::of($data)->make(true);
    }
}
