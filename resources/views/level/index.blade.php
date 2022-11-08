@extends('layouts.app')

@section('title')
    Nivel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nivel') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('levels.create') }}" class="btn btn-blue btn-sm float-right"  data-placement="left"><i class="fas fa-plus-circle"></i>
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
                            <table class="table table-striped table-hover" id="tabla_niveles">
                                <thead class="thead">
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($levels as $level)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $level->nombre }}</td>

                                            <td>
                                                <form action="{{ route('levels.destroy',$level->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-blue " href="{{ route('levels.show',$level->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('levels.edit',$level->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $levels->links() !!} --}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/levels/index.js')}}"></script>
@endpush