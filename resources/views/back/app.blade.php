<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <x-style-back></x-style-back>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <x-preloader-back></x-preloader-back>

        <!-- Navbar -->
        @include('back.partial.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('back.partial.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('back.partial.section-name')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->

        </div>

        <x-footer-mention></x-footer-mention>

    </div>

    <!-- ./wrapper -->
    <x-script-back></x-script-back>

    @if (session()->has('error') || session()->has('success'))
        <script>
            iziToast.{{ session()->has('error') ? 'error' : 'success' }}({
                title: '{{ session()->has('error') ? 'Erreur' : 'Succès' }}',
                message: '{{ session()->get(session()->has('error') ? 'error' : 'success') }}',
                position: 'topRight'
            });
        </script>
    @endif



    if

</body>

</html>
