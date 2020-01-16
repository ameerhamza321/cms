<head>
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="x-ua-compatible" content="IE=edge">

    <meta name="msapplication-TileColor" content="#0f75ff">
    <meta name="theme-color" content="#9d37f6">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />



    <meta name="csrf-token" content="{{ csrf_token() }}">




    <!-- Title -->
    <title>Claylist – Clean & Modern Admin Dashboard Bootstrap 4  HTML Template</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/fonts/font-awesome.min.css">

    <!-- Sidemenu Css -->
    <link href="{{ asset('assets') }}/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

    <!-- Slect2 css -->
    <link href="{{ asset('assets') }}/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('assets') }}/css/dashboard.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/admin-custom.css" rel="stylesheet" />

    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets') }}/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- Morris.js Charts Plugin -->
    <link href="{{ asset('assets') }}/plugins/morris/morris.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets') }}/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="{{ asset('assets') }}/plugins/iconfonts/plugin.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/plugins/iconfonts/icons.css" rel="stylesheet" />


    <link href="../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />


    <!-- Data table css -->
        <link href="{{ asset('assets') }}/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="{{ asset('assets') }}/plugins/datatable/jquery.dataTables.min.css" rel="stylesheet" />


    <!-- sumernot Editor css -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
