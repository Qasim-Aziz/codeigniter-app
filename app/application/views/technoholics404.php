<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon2.png">
    <title>Page not found</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->config->base_url() ?>assets/monster/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= $this->config->base_url() ?>assets/monster/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= $this->config->base_url() ?>assets/monster/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header card-no-border">
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper" class="error-page">
    <div class = "error-box">
        <div class="error-body text-center">
            <h1>404</h1>
            <h3 class="text-uppercase">Page Not Found!</h3>
            <p class="text-muted m-t-30 m-b-30"><i>You seem to be trying to find your way home.</i></p>
            <a href="javascript:history.go(-1)" class="btn btn-info btn-rounded waves-effect waves-light m-b-40" style = "background-color: #31bbe0; border-color: #31bbe0">Go back to previous page</a>
        </div>
        <footer class="footer text-center">2017 &copy; TECHNOHOLICS</footer>
    </div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= $this->config->base_url() ?>assets/monster/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= $this->config->base_url() ?>assets/monster/tether.min.js"></script>
<script src="<?= $this->config->base_url() ?>assets/monster/bootstrap.min.js"></script>
<!--Wave Effects -->
<script src="<?= $this->config->base_url() ?>assets/monster/waves.js"></script>
</body>

</html>
