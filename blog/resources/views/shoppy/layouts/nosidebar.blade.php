<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("title")</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset("web/css/bootstrap.css") }}" rel="stylesheet" />
    <!-- DEMO PAGE-->
    <link href="{{ asset("web/css/demo-page.css") }}" rel="stylesheet" />
    <!-- examples-->
    <link href="{{ asset("web/css/examples.css") }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset("web/css/font-awesome.css") }}" rel="stylesheet" />
    <!-- geochart-->
    <link href="{{ asset("web/css/geochart.css") }}" rel="stylesheet" />
    <!-- hover-->
    <link href="{{ asset("web/css/hover.css") }}" rel="stylesheet" />
    <!-- magnific-popup-->
    <link href="{{ asset("web/css/magnific-popup.css") }}" rel="stylesheet" />
    <!-- style-->
    <link href="{{ asset("web/css/style.css") }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



<div id="wrapper">

@include("shoppy.partials.header")
<!-- /. NAV TOP  -->
    <!-- /. NAV SIDE  -->
@yield("content")
<!-- /. PAGE WRAPPER  -->

    @include("shoppy.partials.footer")
</div>



<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{ asset("bs-simple-admin/assets/js/jquery-1.10.2.js") }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset("bs-simple-admin/assets/js/bootstrap.min.js") }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset("bs-simple-admin/assets/js/custom.js") }}"></script>


</body>
</html>

