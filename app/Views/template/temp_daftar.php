<html>
    <head>
        <title><?=$title;?> </title>
        <!-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex flex-column p-5">
            <div class="container-fluid">
                <?=$this->renderSection('content');?>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>



        <!-- Page level custom scripts -->
        <script src="assets/js/demo/chart-pie-demo.js"></script>
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/dist/angular.min.js"></script>
        <script src="apps/apps.js"></script>
        <script src="apps/controller/atmin.controllers.js"></script>
        <script src="apps/service/admin.service.js"></script>
        <script src="apps/service/helperService.js"></script>
    </body>
</html>
