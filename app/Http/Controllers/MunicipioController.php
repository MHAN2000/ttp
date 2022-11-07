<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class MunicipioController
 * @package App\Http\Controllers
 */
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::paginate();

        return view('municipio.index', compact('municipios'))
            ->with('i', (request()->input('page', 1) - 1) * $municipios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipio = new Municipio();
        return view('municipio.create', compact('municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Municipio::$rules);

        $municipio = Municipio::create($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipio::find($id);

        return view('municipio.show', compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipio::find($id);

        return view('municipio.edit', compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Municipio $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        request()->validate(Municipio::$rules);

        $municipio->update($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $municipio = municipio::find($id)->delete();

        return response()->json($municipio);
    }

    public function getMunicipios() {
        $data = Municipio::all();
        return DataTables::of($data)->make(true);
    }
}
