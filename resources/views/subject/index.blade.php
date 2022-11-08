@extends('layouts.app')

@section('title')
    Asunto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asunto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subjects.create') }}" class="btn btn-blue btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover" id="tabla_asuntos">
                                <thead class="thead">
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subject->nombre }}</td>

                                            <td>
                                                <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-blue " href="{{ route('subjects.show',$subject->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subjects.edit',$subject->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $subjects->links() !!}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ @asset('js/subjects/index.js')}}"></script>
@endpush