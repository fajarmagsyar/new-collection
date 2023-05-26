<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/user/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/user/assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Get Shit Done Kit by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/user/bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="/user/assets/css/gsdk.css" rel="stylesheet" />
    <link href="/user/assets/css/demo.css" rel="stylesheet" />

    <!--     Font Awesome     -->
    <link href="/user/bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="navbar-full">
        <div class="container">
            <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">

                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="http://creative-tim.com">
                            <div class="logo-container">
                                <div class="logo">
                                    <img src="/user/assets/img/new_logo.png">
                                </div>
                                <div class="brand">
                                    NEW Collection
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="components.html">Pakaian</a></li>
                            <li><a href="components.html">Sewa Pakaian</a></li>
                            <li><a href="components.html">Aksesoris HP dan Komputer</a></li>

                            <li><a href="http://www.creative-tim.com/product/get-shit-done-kit"
                                    class="btn btn-round btn-default">Buat Akun</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!--  end container-->

        @yield('content')

        <!-- end main -->

        <div class="parallax-pro">
            <div class="img-src"
                style="background-image: url('http://get-shit-done-pro.herokuapp.com//user/assets/img/bg6.jpg');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-12">
                        <h1 class="hello">
                            <a href="#"><strong>Cek Juga</strong></a>
                            <small>
                                <a href="/Sewa Pakaian">Thrift</a> <br>
                                <a href="/Sewa Pakaian">Sewa Pakaian</a> <br>
                                <a href="/aksesoris">Aksesoris HP dan Komputer</a> <br>
                            </small>
                        </h1>
                        <div class="actions">
                            <a class="btn btn-lg btn-warning btn-fill"
                                href="http://gsdk.creative-tim.com/?ref=get-shit-done"><i
                                    class="fa-brands fa-whatsapp"></i> Whatsapp</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6989616950646!2d112.71890917587878!3d-7.160759270259422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8035c91c302a1%3A0x3ae050a3431f242a!2sNew%20Cell%20%26%20Tech!5e0!3m2!1sen!2sid!4v1685071557588!5m2!1sen!2sid"
                            style="width: 100% !important; border: none; border-radius: 10px" height="450"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="space-30"></div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="credits">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> NEW Collection, Jln. Jambu Raya No. 179, Perumnas, Kamal,
                            Bangkalan
                            <br>
                            Dibuat dengan 💕 oleh New Tech Dev
                        </div>
                    </div>
                </div>
            </div>

        </div>

</body>
<script src="https://kit.fontawesome.com/af029991ac.js" crossorigin="anonymous"></script>
<script src="/user/jquery/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/user/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="/user/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
<script src="/user/assets/js/gsdk-checkbox.js"></script>
<script src="/user/assets/js/gsdk-radio.js"></script>
<script src="/user/assets/js/gsdk-bootstrapswitch.js"></script>
<script src="/user/assets/js/get-shit-done.js"></script>
<script src="/user/assets/js/custom.js"></script>

<script type="text/javascript">
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function() {
        var new_class = $(this).attr('new-class');
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if (display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
        }
    });
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
    });
    $("#slider-default").slider({
        value: 70,
        orientation: "horizontal",
        range: "min",
        animate: true
    });
    $('.carousel').carousel({
        interval: 4000
    });
</script>

</html>
