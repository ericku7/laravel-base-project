<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eric ku">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | {{ config('app.subtitle') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/back/node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/back/node_modules/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./assets/back/node_modules/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/back/node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/back/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="./assets/back/node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/back/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="./assets/back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="./assets/back/node_modules/datatables/buttons.bootstrap4.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/back/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./assets/back/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('layouts.Admin_navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
        @include('layouts.Admin_sidebar')
        <!-- partial -->
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Our Customers</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table">
                                        <thead>
                                        <tr>
                                            <th>N0.#</th>
                                            <th>profile</th>
                                            <th>Names</th>
                                            <th>Email</th>
                                            <th>Phone Num</th>
                                            <th class="text-center">Orders</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; ?>
                                        @foreach($customers As $row)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>
                                                    <img data-name="{{$row->fname}}" class="profile">
                                                </td>
                                                <td>{{$row->fname}} {{$row->lname}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>{{$row->phone}}</td>
                                                <td class="text-center">0</td>
                                                <td>
                                                    <button class="btn btn-success">Card Info</button>
                                                    <button class="btn btn-primary">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center">Copyright © <?php echo date("Y"); ?> <a href="https://www.swiftrendrend.com">Swiftrend</a>. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- row-offcanvas ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="./assets/back/node_modules/jquery/dist/jquery.min.js"></script>
<script src="./assets/back/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/back/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/back/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="./assets/back/node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="./assets/back/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="./assets/back/js/off-canvas.js"></script>
<script src="./assets/back/js/hoverable-collapse.js"></script>
<script src="./assets/back/js/misc.js"></script>
<script src="./assets/back/js/settings.js"></script>

<script src="./assets/back/node_modules/datatables/dataTables.buttons.min.js"></script>
<script src="./assets/back/node_modules/datatables/buttons.bootstrap4.min.js"></script>
<script src="./assets/back/node_modules/datatables/jszip.min.js"></script>
<script src="./assets/back/node_modules/datatables/pdfmake.min.js"></script>
<script src="./assets/back/node_modules/datatables/vfs_fonts.js"></script>
<script src="./assets/back/node_modules/datatables/buttons.html5.min.js"></script>
<script src="./assets/back/node_modules/datatables/buttons.print.min.js"></script>
<script src="./assets/back/node_modules/datatables/buttons.colVis.min.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
{{--<script src="./assets/back/js/data-table.js"></script>--}}
<script src="./assets/back/js/letter_initial.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.profile').initial({width:40,height:40});
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".nav li a").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });
    // NAVIGATION HIGHLIGHT & OPEN PARENT
    $(".nav ul li a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
</script>


</body>
</html>