<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="admin">
    <meta name="author" content="">
    <title>AdminYUMMY</title>
    <base href="{{asset('')}}">
    <a class="navbar-brand text-center nav-type" href="homepage"><div class="hi"></div></a>
    <link rel="icon" href="https://img.icons8.com/dusk/64/000000/chef-hat.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrapk.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2s.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/mainy.css')}}">
    <link rel="stylesheet" href="{{asset('css/detaile.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/css/maink.css')}}">
</head>

<body>
    <style>
        * {
            color: black !important;
            /* background-color: brown !important;  */
        }

        #back_admin {
            width: 100px !important; 
            /* height: 10px !important; */
            /* margin: 0px 500px 0 30px !important; */
            /* margin-left:1px; */
            display: inline-block;
            /* background-color: brown !important;  */
            color: brown !important;
            /* padding: 20px !important; */
            font-weight: bold;
            font-size: 39px;
            margin: 0 0 0 20px;
            
        }
        #back_homepage {
            width: 160px !important; 
            /* height: 47px !important; */
            
            float: right;
            background-color: brown;
            color: #fff !important;
            padding-left: 20px ;
            
            
            /* display: block; */
            line-height: 40px;
        }
        #back_logout {
            width: 100px !important; 
            /* height: 47px !important; */
            margin: 0px 30px 0 0px !important;
            background-color: brown; 
            color: #fff !important;
            padding: 0 0 0 16px !important;
            line-height: 40px;
            float: right;
            text-decoration: none;
            margin-top: 20px;
        }
        .nav3 {
            padding: 20px 20px;
        }
        /* .reflect {
            transform: rotate(180deg)!important;
        } */
        .fa.arrow:before {
    content: "\f054" !important;
}

        th {
            background-color: brown;
            color: white !important;
        }

        tr{
            
        }
        </style>

    <div id="wrapper">
        @include('admin.layout.header')

        @yield('content')

        @yield('script')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    $('#choose').click(function(){
        $(this).siblings('select').toggle();
    });
    </script>
</body>

</html>
