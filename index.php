<?php
include 'env.php';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MycroLinks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include All CSS here-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css" />
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/icofont.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/preset.css" />

    <link rel="stylesheet" type="text/css" href="css/settings.css" />
    <link rel="stylesheet" type="text/css" href="css/navigation.css" />

    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/presets/color1.css" id="colorChange" />
    <!-- End Include All CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kreon:wght@300..700&display=swap" rel="stylesheet">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/hi_logo.png" />
</head>

<body>
    <!-- Preloading -->
    <div class="preloader text-center">
        <div class="la-ball-scale-multiple la-2x">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloading -->

    <section class="topbar">
        <div class="header-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-3 noPadding">
                    <div class="logo text-left">
                        <a href="index.html" class="kreon-font">
                            <img src="images/hi_logo.png" alt="MycroLinks" id="logo-image">
                            <span id="logo-text"></span>
                        </a>
                        <script>
                            function updateLogoText() {
                                var logoText = document.getElementById('logo-text');
                                if (window.innerWidth < 992) {
                                    logoText.innerHTML = '';
                                } else {
                                    logoText.innerHTML = 'MycroLinks';
                                }
                            }

                            window.addEventListener('resize', updateLogoText);
                            window.addEventListener('load', updateLogoText);
                        </script>
                        </script>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-9">
                    <div class="topbar_right text-right">
                        <div class="topbar_element info_element">
                            <i class="fa fa-envelope"></i>
                            <h5>Email Address</h5>
                            <p><a href="mailto:mail@mycrolinks.com">mail@mycrolinks.com</a></p>
                        </div>
                        <div class="topbar_element info_element">
                            <i class="fa fa-phone"></i>
                            <h5>Phone Number</h5>
                            <p><a href="tel:+919787677667">+91 97876 77667</a></p>
                        </div>
                        <div class="topbar_element settings_bar">
                            <a href="#" class="hamburger" id="open-overlay-nav"><i class="fal fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nav_bar" id="fix_nav">
        <div class="header-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="mobileMenuBar">
                        <a href="javascript: void(0);"><span>Menu</span><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="mainmenu">
                        <ul>
                            <li class="current-menu-item">
                                <a href="javascript:scrollToSection('visionSection');">Our Vision</a>
                            </li>
                            <li>
                                <a href="javascript:scrollToSection('servicesSection');">Services</a>
                            </li>
                            <li>
                                <a href="javascript:scrollToSection('commitmentsSection');">Commitments</a>
                            </li>
                            <li>
                                <a href="javascript:scrollToSection('solutionsSection');">Solutions</a>
                            </li>
                            <li>
                                <a href="javascript:scrollToSection('projectSection');">Projects</a>
                            </li>
                            <li>
                                <a href="javascript:scrollToSection('contactSection');">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- <div class="col-xl-4 col-lg-3">
                    <div class="top_social text-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        <span class="right_bgs"></span>
    </section>

    <!-- Overlay Menu -->
    <div class="popup popup__menu">
        <div class="header-container mobileContainer">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <div class="popup_logos">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="" id="close-popup" class="close-popup"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popup-inner">
                        <div class="dl-menu__wrap dl-menuwrapper">
                            <ul class="dl-menu dl-menuopen">
                                <li>
                                    <a href="javascript:scrollToSection('visionSection');">Our Vision</a>
                                </li>
                                <li>
                                    <a href="javascript:scrollToSection('servicesSection');">Services</a>
                                </li>
                                <li>
                                    <a href="javascript:scrollToSection('commitmentsSection');">Commitments</a>
                                </li>
                                <li>
                                    <a href="javascript:scrollToSection('solutionsSection');">Solutions</a>
                                </li>
                                <li>
                                    <a href="javascript:scrollToSection('projectSection');">Projects</a>
                                </li>
                                <li>
                                    <a href="javascript:scrollToSection('contactSection');">Contact</a>
                                </li>
                            </ul>
                            <script>

                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                    <ul class="footer__contacts">
                        <li>Phone: <a href="tel:+919787677667">+91 97876 77667</a></li>
                        <li>Email: <a href="mailto:mail@mycrolinks.com">mail@mycrolinks.com</a></li>
                        <li>Address: Hinjewadi, Pune, India</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                    <div class="foo_social popUp_social text-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Overlay Menu -->

    <section class="slider_01">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3045" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="images/slider/t_1.jpg" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                        data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="images/slider/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption  tp-resizeme" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']"
                            data-voffset="['13', '-140', '-110', '-110']" data-fontsize="['16','16','16','15']"
                            data-fontweight="500" data-lineheight="['16','16','16','16']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-color="['#FFF']" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"}, {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; text-transform: uppercase;">
                            At
                        </div>
                        <div class="tp-caption barlow tp-resizeme rs-parallaxlevel-3 elemnt_3"
                            data-x="['left', 'left', 'left', 'left']" data-hoffset="['0', '0', '0', '0']"
                            data-y="['top','middle','middle','middle']" data-voffset="['41','-40','-50','-50']"
                            data-fontsize="['100','90','60','50']" data-lineheight="['110','90','60','50']"
                            data-fontweight="600" data-letterspacing="['-3', '-3', '-2', '-1']"
                            data-width="['700','100%','100%','100%']" data-height="['auto']"
                            data-whitesapce="['normal', 'normal', 'normal', 'normal']" data-color="['#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"}, {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: normal;">
                            MycroLinks Consultancies
                        </div>
                        <div class="tp-caption tp-resizeme textRes" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['55','80','30','30']" data-fontsize="['18','18','18','15']"
                            data-fontweight="400" data-lineheight="['22','22','22','22']"
                            data-width="['auto', '100%', '100%', '100%']" data-height="['auto']"
                            data-whitesapce="['normal', 'normal', 'normal', 'normal']" data-color="['#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1800,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"}, {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; word-break: break-all;  white-space: nowrap; text-transform: none;">
                            We are the link between you and technology.
                        </div>
                        <div class="tp-caption  tp-resizeme" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['135','140','100','100']" data-fontsize="['18','18','18','18']"
                            data-fontweight="400" data-lineheight="['22','22','22','22']" data-width="auto"
                            data-height="none" data-whitespace="nowrap" data-color="['#FFF', '#FFF', '#FFF', '#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"}, {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; text-transform: none;">
                            <a href="javascript:scrollToSection('contactSection');" class="ind_btn">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </li>
                    <li data-index="rs-3047" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="images/slider/t_2.jpg" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                        data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="images/slider/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption  tp-resizeme" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']"
                            data-voffset="['13', '-140', '-110', '-110']" data-fontsize="['16','16','16','15']"
                            data-fontweight="500" data-lineheight="['16','16','16','16']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-color="['#FFF']" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; text-transform: uppercase;">
                            At
                        </div>
                        <div class="tp-caption barlow tp-resizeme rs-parallaxlevel-3 elemnt_3"
                            data-x="['left', 'left', 'left', 'left']" data-hoffset="['0', '0', '0', '0']"
                            data-y="['top','middle','middle','middle']" data-voffset="['41','-40','-50','-50']"
                            data-fontsize="['100','90','60','50']" data-lineheight="['110','90','60','50']"
                            data-fontweight="600" data-letterspacing="['-3', '-3', '-2', '-1']"
                            data-width="['700','100%','100%','100%']" data-height="['auto']"
                            data-whitesapce="['normal', 'normal', 'normal', 'normal']" data-color="['#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: normal;">
                            MycroLinks Consultancies
                        </div>
                        <div class="tp-caption  tp-resizeme textRes" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['55','80','30','30']" data-fontsize="['18','18','18','15']"
                            data-fontweight="400" data-lineheight="['22','22','22','22']"
                            data-width="['auto', '100%', '100%', '100%']" data-height="['auto']"
                            data-whitesapce="['normal', 'normal', 'normal', 'normal']" data-color="['#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1800,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; word-break: break-all; white-space: nowrap; text-transform: none;">
                            We democratize technology. We make cutting-edge tech accessible to all.
                        </div>
                        <div class="tp-caption  tp-resizeme" data-x="['left','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['135','140','100','100']" data-fontsize="['18','18','18','18']"
                            data-fontweight="400" data-lineheight="['22','22','22','22']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-color="['#FFF', '#FFF', '#FFF', '#FFF']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; text-transform: none;">
                            <a href="javascript:scrollToSection('contactSection');" class="ind_btn">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="commonSection" id="visionSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 noPaddingRight">
                    <div class="video_01 mrm15 text-right">
                        <!-- Consider updating these images to reflect the vision theme -->
                        <img src="images/home/vision_1.jpg" alt="Our Vision at MycroLinks" />
                        <!-- <div class="vp" style="border:black">
                            <img src="images/home/vision_2.jpg" alt="Future of Technology with MycroLinks" />
                            <a class="videoPlayer" href="https://media.istockphoto.com/id/1474198714/video/global-digital-grid-growing-over-earth-looped-net-3d-animation-ai-neural-networks-covering.mp4?s=mp4-640x640-is&k=20&c=zU_cA1DvL9PLx1TMM1p0A_mlbTSciufs1zf9G7R-3No="><i class="fa fa-play"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_us_content">
                        <h6 class="sub_title">Our Vision</h6>
                        <h2 class="sec_title">
                            A Future Where Technology Empowers Everyone.
                        </h2>
                        <p class="ind_lead">Envisioning a world where every individual has access to cutting-edge
                            technology.</p>
                        <p class="mb28">
                            At MycroLinks, we believe in a future where technology is a right, not a luxury. Our vision
                            is to make digital tools accessible to all, breaking down the barriers that prevent many
                            from leveraging the digital revolution. Through innovative solutions and dedicated outreach,
                            we aim to foster a more inclusive world where everyone can benefit from the advancements in
                            technology, ensuring no one is left behind in the digital age.
                        </p>
                        <!-- Consider updating this image to something more aligned with your vision -->
                        <!-- <img src="images/profile-pic.jpg" alt="Signature of CEO/Founder of MycroLinks" style="max-height: 125px;" /> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="commonSection graySection" id="servicesSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h6 class="sub_title gray_sub_title">Join the Movement</h6>
                    <h2 class="sec_title with_bar">
                        <span><i class="fal fa-users"></i><span>Empowering Change Together</span></span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-computer"></i>
                        <i class="smaller icofont-computer"></i>
                        <span></span>
                        <h3>Custom Software Development</h3>
                        <p>
                            Bespoke software solutions tailored to your needs. We bring your ideas to life with a focus
                            on innovation and quality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-chart-growth"></i>
                        <i class="smaller icofont-chart-growth"></i>
                        <span></span>
                        <h3>Digital Transformation</h3>
                        <p>
                            Modernizing operations with the latest technologies. We help you streamline your business
                            for efficiency and growth.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-ui-love"></i>
                        <i class="smaller icofont-ui-love"></i>
                        <span></span>
                        <h3>Accessibility Services</h3>
                        <p>
                            Creating products usable by everyone. Our aim is to make technology accessible, fostering a
                            more inclusive world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="funfactSection" id="commitmentsSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 noPadding">
                    <div class="tw-stretch-element-inside-column straceImg"></div>
                </div>
                <div class="col-xl-6 text-left pdt120 pdl115 pdb38">
                    <h6 class="sub_title dark_sub_title">Why Choose Us</h6>
                    <h2 class="sec_title with_bar dark_sec_title">
                        <span>Our Commitments</span>
                    </h2>
                    <div class="row mrm110px">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="icon_box_02">
                                <i class="fal fa-tags"></i>
                                <h3>Affordability</h3>
                                <p>
                                    Quality tech at affordable prices. We believe in making technology accessible to
                                    everyone without breaking the bank.
                                </p>
                            </div>
                            <div class="icon_box_02">
                                <i class="fal fa-users"></i>
                                <h3>User-Centric Design</h3>
                                <p>
                                    Intuitive products, designed for everyone. Our designs are focused on ease of use to
                                    enhance user experience.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="icon_box_02 ">
                                <i class="fal fa-award"></i>
                                <h3>Commitment to Excellence</h3>
                                <p>
                                    Enhancing your productivity and satisfaction daily. We're dedicated to continuous
                                    improvement and excellence.
                                </p>
                            </div>
                            <div class="icon_box_02">
                                <i class="fal fa-balance-scale"></i>
                                <h3>Uncompromised Expertise</h3>
                                <p>
                                    Our expertise ensures that affordability does not compromise on quality. We deliver
                                    top-notch solutions that cater to your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="commonSection graySection" id="solutionsSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h6 class="sub_title gray_sub_title">What We Do</h6>
                    <h2 class="sec_title with_bar">
                        <span><i class="fal fa-lightbulb-on"></i><span>Innovative Solutions</span></span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-code-alt"></i>
                        <i class="smaller icofont-code-alt"></i>
                        <span></span>
                        <h3>Software Development</h3>
                        <p>
                            Tailoring cutting-edge.
                        </p>
                        <ul>
                            <li>Agile development practices</li>
                            <li>Customizable solutions</li>
                            <li>Post-launch support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-cloud-upload"></i>
                        <i class="smaller icofont-cloud-upload"></i>
                        <span></span>
                        <h3>Hosting & DevOps</h3>
                        <p>
                            Streamlining deployment and operations.
                        </p>
                        <ul>
                            <li>Scalable hosting solutions</li>
                            <li>Continuous integration & deployment</li>
                            <li>Database management and optimization</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="icon_box_01 text-center">
                        <i class="bigger icofont-live-support"></i>
                        <i class="smaller icofont-live-support"></i>
                        <span></span>
                        <h3>Support & Maintenance</h3>
                        <p>
                            Ensuring the reliability and security.
                        </p>
                        <ul>
                            <li>24/7 technical support</li>
                            <li>Regular software updates</li>
                            <li>Security monitoring and compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="commonSection projectPage" id="projectSection">
        <?php
        include 'fetch_projects_data.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h6 class="sub_title">Works</h6>
                    <h2 class="sec_title with_bar">
                        <span>Projects</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="filterMenu emptyStyle">
                        <ul class="text-center clearfix shafful_filter">
                            <li class="active" data-group="all"><i class="far fa-bars"></i>All Cases</li>
                            <li data-group="machine_learning"><i class="far fa-robot"></i>Machine Learning</li>
                            <li data-group="web_application"><i class="far fa-globe"></i>Web App</li>
                            <li data-group="iot"><i class="far fa-wifi"></i>Internet of Things</li>
                            <li data-group="mobile_application"><i class="far fa-mobile-android"></i>Mobile App</li>
                            <li data-group="python_scripting"><i class="far fa-code"></i>Python Scripting</li>
                            <li data-group="misc"><i class="far fa-cogs"></i>Misc</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row project-container" id="project-container">
                        <?php
                        $counter = -1;
                        foreach ($projects as $project) {
                            $counter++;
                            // Calculate the relative creation date from today
                            $creationDate = new DateTime($project['created_at']);
                            $now = new DateTime();
                            $interval = $creationDate->diff($now);
                            $relativeCreationDate = $interval->format('%R%a days');
                            $category = $project['category'];
                            if ($category == "") {
                                $category = "misc";
                            }
                            // Construct the project details URL
                            $projectDetailsUrl = "project_details.php?name=" . urlencode($project['name']);
                            $description = $project['description'];
                            echo "<div class=\"col-xl-4 col-md-6 col-lg-4 shaf_itme project\"  data-groups='[\"all\", \"$category\"]' id=\"project_$counter\">
                                    <div class=\"singleFolio_05 text-center\">
                                        <div class=\"sf5_img\">
                                            <img src=\"images/works/30.jpg\" alt=\"\">
                                            <div class=\"sf5_meta clearfix\">
                                                <a href=\"#\" class=\"pull-left\">$relativeCreationDate</a>
                                                <a href=\"#\" class=\"pull-right\"><i class=\"far fa-code\"></i></a>
                                            </div>
                                        </div>
                                        <div class=\"sf5_det\">
                                            <h3><a href=\"$projectDetailsUrl\">{$project['name']}</a></h3>
                                            <p class=\"sf5_cat\"><a href=\"javascript:updateProjects(true, '$category')\">$category</a></p>
                                            <div class=\"sf5_con\" style='min-height:3em;'>
                                                $description
                                            </div>

                                            <a href=\"{$project['html_url']}\">Know More</a>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        ?>
                    </div>
                    <style>
                        .sf5_det {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-between;
                            align-items: center;
                            height: 100%;
                        }

                        .sf5_con {
                            padding-bottom: 70px;
                            /* Adjust this value as needed */
                        }

                        .sf5_det>a {
                            width: 100%;
                            text-align: center;
                            font-size: 14px;
                            font-weight: 500;
                            text-transform: uppercase;
                            letter-spacing: 0;
                            background: #ff5e14;
                            color: #FFF;
                            height: 60px;
                            line-height: .9;
                            padding: 25px 0;
                            margin-bottom: -1px;
                        }
                    </style>
                </div>
            </div>
            <?php
            // Ensure that $projects is defined and contains data
            if (isset($projects) && count($projects) > 0) {
                // Get the total number of projects
                $totalProjects = count($projects);

                // Define the number of projects per page
                $perPage = 9;

                // Calculate the total number of pages
                $pages = ceil($totalProjects / $perPage);
            } else {
                // If $projects is not defined or is empty, set $pages to 1
                $pages = 1;
            }
            ?>
            <div class="row mt25">
                <div class="col-lg-12">
                    <div class="ind_pagination text-center">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="js/project.section.pagination.js"></script> -->
    <section class="calltoactions" id="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="cta_left_02">
                        <i class="fal fa-headphones-alt"></i>
                        <h6>24/7 We Are available</h6>
                        <h2>We Are Here to be your bridge to Technology</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 text-right pdt29">
                    <a href="javascript:scrollToSection('contactSection');" class=" ind_btn id_dark2"><span>Contact
                            Now</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection contactInfoSection noPaddingBottom bgtp">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="icon_box_05">
                        <i class="fal fa-map-marker-alt"></i>
                        <div class="ib5_inner">
                            <h3>Office Location</h3>
                            <p>
                                Hinjewadi, Pune <span>India - 411057</span>
                            </p>
                            <a href="https://maps.app.goo.gl/ibp4Nr6pTnWVAmR6A">Find Us On Map</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="icon_box_05">
                        <i class="fal fa-clock"></i>
                        <div class="ib5_inner">
                            <h3>Office Hours</h3>
                            <p>
                                Mon - Fri: 09:00am to 07.00pm <span>Sat - Sun: Off Day</span>
                            </p>
                            <a href="https://maps.app.goo.gl/ibp4Nr6pTnWVAmR6A">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="icon_box_05">
                        <i class="fal fa-phone"></i>
                        <div class="ib5_inner">
                            <h3>Call Us</h3>
                            <p>
                            <p>
                                <a href="tel:+919787677667">+91 97876 77667</a> <br />
                                <a href="tel:+918248478079">+91 82484 78079</a>
                            </p>
                            </p>
                            <a href="tel:+919787677667">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="icon_box_05">
                        <i class="fal fa-envelope"></i>
                        <div class="ib5_inner">
                            <h3>Email Address</h3>
                            <p>
                                <a href="mailto:mail@mycrolinks.com">mail@mycrolinks.com</a> <br /><a
                                    href="mailto:support@mycrolinks.com">support@mycrolinks.com</a>
                            </p>
                            <a href="mailto:mail@mycrolinks.com">Mail Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="formSections">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h6 class="sub_title dark_sub_title ">Get In Touch</h6>
                    <h2 class="sec_title dark_sec_title mb45">
                        <span>Contact Form</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cotactForm">
                        <form id="contactForm" method="post" action="sendmail.php" class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_name" id="con_name"
                                        placeholder="ENTER YOUR NAME HERE" />
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_phone" id="con_phone"
                                        placeholder="ENTER YOUR NUMBER HERE" />
                                    <i class="fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_email" id="con_email"
                                        placeholder="ENTER YOUR EMAIL HERE" />
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_subject" id="con_subject"
                                        placeholder="ENTER YOUR SUBJECT HERE" />
                                    <i class="fal fa-edit"></i>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="iconInput">
                                    <textarea class="required" name="con_message" id="con_message"
                                        placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                                    <i class="fal fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-12 text-center">
                                <input type="submit" value="Send Message" id="con_submit" name="con_submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="googleMapSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 noPadding">
                    <div class="gmap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121006.00020823091!2d73.63481731774851!3d18.599381337939867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbc048041bef%3A0xd0c9eb5ac3c3dee5!2sHinjawadi%2C%20Pune%2C%20Pimpri-Chinchwad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1715710443016!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_01">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 noPaddingRight">
                    <aside class="widget">
                        <div class="about_widget">
                            <a href="index.html"><img src="images/logo.png" alt="" class="footer_logo" /></a>
                            <p>
                                MycroLinks advocates for technology as a fundamental right, aiming to make digital tools
                                universally accessible. Through innovation and outreach, we ensure inclusivity in
                                benefiting from technology, leaving no one behind in the digital age.
                            </p>
                            <div class="caller">
                                <i class="fal fa-headphones"></i>
                                <span>Talk to Our Officers</span>
                                <a href="tel:+919787677667">+91 97876 77667</a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2 pdl45 noPaddingRight">
                    <aside class="widget">
                        <h3 class="widget_title">Important Links<span>.</span></h3>
                        <ul>
                            <li><a href="javascript:scrollToSection('visionSection');">Our Vision</a></li>
                            <li><a href="javascript:scrollToSection('servicesSection');">Our Services</a></li>
                            <li><a href="javascript:scrollToSection('commitmentsSection');">Our Commitments</a></li>
                            <li><a href="javascript:scrollToSection('solutionsSection');">Our Solutions</a></li>
                            <li><a href="javascript:scrollToSection('projectSection');">Our Projects</a></li>
                            <li><a href="javascript:scrollToSection('contactSection');">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 pdl65">
                    <aside class="widget">
                        <h3 class="widget_title">Our Solutions<span>.</span></h3>
                        <div class="recentServices">
                            <div class="serviceItem clearfix">
                                <img class="float-left rounded-border-image" src="images/widget/1.jpg" alt="" />
                                <h5><a href="#">Custom Software Development</a></h5>
                                <span>Tailoring cutting-edge</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <img class="float-left rounded-border-image" src="images/widget/2.jpg" alt="" />
                                <h5><a href="#">Hosting & DevOps</a></h5>
                                <span>Streamlining deployment</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <img class="float-left rounded-border-image" src="images/widget/3.jpg" alt="" />
                                <h5><a href="#">Support & Maintenance</a></h5>
                                <span>Ensuring reliability</span>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <aside class="widget subscribe_widget">
                        <h3 class="widget_title">Subscribe Now<span>.</span></h3>
                        <div class="subscribForm">
                            <form method="post" action="#">
                                <input type="email" name="email" placeholder="Enter your email" />
                                <button type="submit">Submit Now</button>
                            </form>
                        </div>
                    </aside>
                    <aside class="widget footer_social">
                        <h3 class="widget_title">Get More Here<span>.</span></h3>
                        <div class="socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i>
                            </a><a href="#"><i class="fab fa-behance"></i></a><a href="#"><i class="fab fa-youtube"></i>
                            </a><a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="siteinfo">
                        Copyright By &COPY;<a href="#">MycroLinks</a> - 2024
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" id="backtotop"><i class="fal fa-angle-double-up"></i></a>
    <!-- Include All JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pagination.js"></script>

    <script src="js/modernizr.custom.js"></script>
    <script src="js/dlmenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/project.section.pagination.js"></script>
    <script src="js/theme.js"></script>
    <!-- Include All JS -->
    <script>

        function scrollToSection(sectionName) {
            document.getElementById('close-popup').click();
            document.querySelector('.mainmenu').style.display = 'none';
            $('html, body').animate({
                scrollTop: $('#' + sectionName).offset().top
            }, 1000);
        }

        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'sendmail.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (this.status == 200 && this.responseText == 'Success') {
                    alert('Mail sent successfully');
                } else {
                    alert('Mail sending failed');
                    alert(this.responseText);
                }
            };

            var formData = new FormData(event.target);
            var params = new URLSearchParams(formData).toString();
            xhr.send(params);
        });

    </script>
</body>

</html>