<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Stasiun" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/images/favicon.ico">
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/css/style.css" rel="stylesheet" type="text/css">

    {{-- Data Tables --}}
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('notif.index')
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!-- Navigation Bar-->
