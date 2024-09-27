<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="-" />
    <meta name="keywords" content="-" />
    <meta name="author" content="-" />
    <title>Aplikasi SolarSight</title>
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/ico/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet" />
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet" />
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/vendors.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/css/forms/icheck/icheck.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/css/forms/icheck/custom.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/app.css" />
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/css/core/menu/menu-types/horizontal-menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/core/colors/palette-gradient.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/pages/login-register.css" />
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css" />
    <!-- END Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column menu-expanded blank-page blank-page"
    data-open="click" data-menu="horizontal-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">

                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>Aplikasi Stroom</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form id="login" class="form-horizontal form-simple" novalidate>
                                            <button type="button" id="masuk" class="btn btn-success btn-lg btn-block">
                                                <i class="ft-unlock"></i> Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url() ?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="<?php echo base_url() ?>assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url() ?>assets/js/scripts/forms/form-login-register.js"
        type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/js/extensions/sweetalert.min.js"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>

<script type="text/javascript">
    function validation() {
        if ($('#user-name').val() == "" || $('#user-name').val() == null) {
            $('#user-name').addClass('is-invalid');
            swal("", "Mohon Memasukkan NISN", "warning");
            return false;
        }
        $('#user-name').removeClass('is-invalid');
        if ($('#user-password').val() == "" || $('#user-password').val() == null) {
            $('#user-password').addClass('is-invalid');
            swal("", "Mohon Memasukkan Password", "warning");
            return false;
        }
        $('#user-password').removeClass('is-invalid');

        return true;
    }
    $(document).on('click', '#masuk', function (e) {
        e.preventDefault();
        //if (!validation()) return;

        let formElem = $("#login");
        let formdata = new FormData(formElem[0]);
        $.ajax({
            "url": "<?php echo site_url('verification') ?>",
            "method": "POST",
            "data": formdata,
            "dataType": "json",
            "contentType": false,
            "processData": false,
            success: function (result) {
                if (result['status']) {
                    swal("", result['text'], result['type']).then(function () {
                        window.location = "<?php echo site_url('dashboard') ?>";
                    });
                } else {
                    swal("", result['text'], result['type']);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                swal("System Error..!!!", "", "error");
            }
        });


    });
</script>