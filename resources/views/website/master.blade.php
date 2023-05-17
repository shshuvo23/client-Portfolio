<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sadi Mahmud Foysal Ovi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Load Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/butler?styles=20996" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('/') }}website/css/fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/fontawesome-free-6.4.0-web/css/fontawesome.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('/') }}website/css/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/basic.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/css/layout.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/css/blogs.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/css/ionicons.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/css/animate.css" />

    <!--[if lt IE 9]>
 <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}website/images/favicons/sign-png-Foysalsstudio.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125314689-11');
    </script>

</head>

<body>

    <!-- Page -->
    <div class="page">

        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <div class="fw">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('/') }}website\images\Foysal.png" alt=""
                            height="60" width="100%"></a>
                </div>
                <a href="#" class="menu-btn"><span></span></a>
                <div class="top-menu">
                    <ul>
                        <li><a href="#about-section">About</a></li>
                        <li><a href="#services-section">What I Do</a></li>
                        <li><a href="#works-section">Works</a></li>
                        <li><a href="#blog-section">Work type</a></li>
                        <li><a href="#client">client</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                    </ul>
                    <a href="#" class="close"></a>
                </div>
            </div>
        </header>

        <!-- Container -->
        <div class="container">

            <!-- Section Started -->
            @yield('slide')


            <!-- Section About -->
            @yield('body')
            <!-- Footer -->
            <footer class="align-center">
                <div class="socials">
                    <a target="blank" href="https://www.facebook.com/sadimahmudfoysalovi?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                    <a target="blank" href="https://instagram.com/sadimahmudfoysal?igshid=OTk0YzhjMDVlZA=="><i class="fa-brands fa-instagram"></i></a>
                    <a target="blank" href="https://www.linkedin.com/in/sadimahmudfoysalovi"><i class="fa-brands fa-linkedin"></i></a>
                    <a target="blank" href="https://dribbble.com/SadiFoysal"><i class="fa-brands fa-dribbble"></i></a>
                    <a target="blank" href="https://www.behance.net/sadimahmudfoysalovi"><i class="fa-brands fa-behance"></i></a>
                    <a target="blank" href=""><i class="fa-brands fa-flickr"></i></a>
                </div>
                <div class="copy">© 2023 <a target="blank" href="https://github.com/shshuvo23">@shshuvo</a> <a href="https://www.facebook.com/profile.php?id=100006838690187">For contact</a>. all
                    rights reserved.</div>
            </footer>

        </div>

    </div>

    <!-- jQuery Scripts -->
    {{-- <script src="{{ asset('/') }}website/js/jquery-3.3.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            })
        </script>

    <script src="{{ asset('/') }}website/js/jquery.validate.js"></script>
    <script src="{{ asset('/') }}website/js/masonry.pkgd.js"></script>
    <script src="{{ asset('/') }}website/js/imagesloaded.pkgd.js"></script>
    <script src="{{ asset('/') }}website/js/masonry-filter.js"></script>
    <script src="{{ asset('/') }}website/js/magnific-popup.js"></script>
    <script src="{{ asset('/') }}website/js/jquery.mb.YTPlayer.js"></script>
    <script src="{{ asset('/') }}website/js/particles.js"></script>
    <script src="{{ asset('/') }}website/js/typed.js"></script>


    <!-- Main Scripts -->
    <script src="{{ asset('/') }}website/js/main.js"></script>
</body>

</html>
