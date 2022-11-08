@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-12 col-md-6">
            {{-- Chart 1 Tickets by status --}}
            <div style="width: 25rem; height: 25rem">
                <h3 class="text-center fs-4">Tickets status</h3>
                <canvas id="completed" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>

        <div class="col-12 col-md-6">
            {{-- Chart 2 Tickets by cities --}}
            <div style="width: 25rem; height: 25rem">
                <h3 class="text-center fs-4">Tickets municipio</h3>
                <canvas id="ticketsByCity" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ @asset('js/dashboard/index.js') }}"></script>
@endpush
