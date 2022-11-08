@extends('layouts.app')

@section('title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('records.create') }}" class="btn btn-blue btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover responsive" id="tabla_registros" style="width: 100%">
                                <thead class="thead">
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        
										<th>Nombre Realiza</th>
										<th>Curp</th>
										<th>Nombre</th>
										<th>Paterno</th>
										<th>Materno</th>
										<th>Telefono</th>
										<th>Celular</th>
										<th>Correo</th>
                                        {{-- <th>Estatus</th>
										<th>Turno</th> --}}
										<th>Id Nivel</th>
										<th>Id Municipio</th>
										<th>Id Asunto</th>

                                        <th style="width: 20%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($records as $record)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $record->nombre_realiza }}</td>
											<td>{{ $record->curp }}</td>
											<td>{{ $record->nombre }}</td>
											<td>{{ $record->paterno }}</td>
											<td>{{ $record->materno }}</td>
											<td>{{ $record->telefono }}</td>
											<td>{{ $record->celular }}</td>
											<td>{{ $record->correo }}</td>
											<td>{{ $record->id_nivel }}</td>
											<td>{{ $record->id_municipio }}</td>
											<td>{{ $record->id_asunto }}</td>

                                            <td>
                                                <form action="{{ route('records.destroy',$record->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-blue " href="{{ route('records.show',$record->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('records.edit',$record->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $records->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ @asset('js/records/index.js')}}"></script>
@endpush