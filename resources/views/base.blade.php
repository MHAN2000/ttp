<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- CSRF Token meta tag --}}
    <meta id='csrf' name='csrf-token' content='{{ csrf_token() }}'>
    {{-- Include modal --}}
    @include('modal.modal')
    {{-- LIBRARIES --}}
    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset('lib/bootstrap/bootstrap.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('lib/dataTables/dataTables.bootstrap5.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('lib/dataTables/responsive.dataTables.min.css') }}'>
    <!-- JAVASCRIPT -->
    <!-- Fontawesome -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js'
        integrity='sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=='
        crossorigin='anonymous'></script>
    <!-- JQUERY -->
    <script src='{{ asset('lib/jquery/jquery.min.js') }}' defer></script>
    <!-- BOOTSTRAP -->
    <script src='{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}' defer></script>
    <!-- SWEETALERT 2 -->
    <script src='{{ asset('lib/sweetalert/sweetalert2.all.min.js') }}' defer></script>
    <!-- Datatables -->
    <script src='{{ asset('lib/dataTables/datatables.min.js') }}' defer></script>
    <!-- Datatables Bootstrap 5-->
    <script src='{{ asset('lib/dataTables/dataTables.bootstrap5.min.js') }}' defer></script>
    <!-- DATATABLES SPANISH -->
    <script src='{{ asset('lib/dataTables/jquery.dataTables.spanish.js') }}' defer></script>
    <!-- Datatables Responsive-->
    <script src='{{ asset('lib/dataTables/dataTables.responsive.min.js') }}' defer></script>
    <!-- SCRIPT TABLE EDIT -->
    <script src='{{ asset('lib/tabledit/jquery.tabledit.min.js') }}' defer></script>

</head>

<body>
    @yield('body')
</body>

</html>
