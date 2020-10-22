<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stars Seguros</title>
    <link rel="shortcut icon" href="img/favicon2.png" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">


    <!-- Estilos pagina -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/easy-responsive-tabs.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flexslider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/estilo.css') }}"/>
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        <i class="ti-location-pin"></i> 7600 W Tidwell Rd, Office 709, Houston TX 77040. United States
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('english') }}">
                        Stars<span>Seguros</span>
                    </a>
                    <p>Call us now<b>+1 (475) 266-1141</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="english.html">Home</a>
                        </li>
                        <li>
                            <a href="#productos">Products</a>
                        </li>
                        <li>
                            <a href="#servicios">Services</a>
                        </li>
                        <li>
                            <a href="#contacto">Contact Us</a>
                        </li>
                        <li>
                            <a href="#" class="text-center btn-default">Register</a>
                        </li>
                        <li>
                            &nbsp &nbsp &nbsp
                        </li>
                        <li>
                            <a href="{{ route('index') }}">Spanish</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>
    <div id="page-content">
        <section class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/slider1.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Watch your health</b>
                            <h3>Health Insurance</h3>
                            <p>StarsSeguros. It makes health insurance options available to you, at your fingertips, through OBAMACARE.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider2.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Take care of yours</b>
                            <h3>Complementary Insurance</h3>
                            <p>n StarsSeguros. We help individuals, families and employers to be prepared with our complementary health policies.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider3.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Protect your life</b>
                            <h3>Life insurance</h3>
                            <p>At StarsSeguros, we call it investment insurance. insure your relatives from 14 days old.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider4.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Golden Years</b>
                            <h3>Medicare Advantage</h3>
                            <p> you turn 65 or plan to retire after 65, StarsSeguros has plans that will help you save money.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider5.jpg" />
                    <div class="slide-info">
                        <div class="slide-con ">
                            <b>Our ally</b>
                            <h3>PANAMERICANA</h3>
                            <h4>Family Medicine Center</h4>
                            <div class="text-center">
                                <img src="img/panamericanaclinic.png" alt="" class="img-responsive center-block" style="height: 130px; width: 130px;">
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider6.jpg" />
                    <div class="slide-info">
                        <div class="slide-con ">
                            <b>Our ally</b>
                            <h3>INSURANCE CARRIER</h3>
                            <h4>COMBINED</h4>
                            <div class="text-center">
                                <img src="img/combined.png" alt="" class="img-responsive center-block" style="height: 76px; width: 300px;">
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-sm-5 col-md-4 col-lg-4">
                    <div>
                        <div class="container" style="margin-top: 50px;">
                            <img class="thumbnail" src="img/negrito2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8 col-lg-8" style="padding-left: 40px;">
                    <div class="intro">
                        <h2>Welcome to StarsSeguros</h2>
                        <hr>
                        <p class="text-justify">Our main commitment is "to make it easy for you". We understand how confusing the insurance issue can be, that is why at stars Seguros we handle what are the questions to ask, to establish which is the policy that fits the solution
                            of your needs.</p>
                        <h4>We are here to help you</h4>
                        <p class="text-justify">The health crisis that the coronavirus (COVID-19) has generated imposes challenges, which affect the whole world and our communities. That is why at stars Segura we take the optimal measures to protect our employees and their families,
                            while they work to maintain optimal standards of service and support for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="productos">
            <h1>&nbsp</h1>
            <br>
            <br>
        </div>
        <section class="product-tab">
            <div class="container">
                <div class="row">
                    <div id="parentVerticalTab">
                        <h2>Products</h2>
                        <ul class="resp-tabs-list hor_1 col-sm-3 col-md-3 col-lg-3">
                            <li><i class="fa fa-medkit"></i>Health insurance</li>
                            <li><i class="fa fa-ambulance"></i>Complementary Insurance</li>
                            <li><i class="ti-heart-broken"></i>Life insurances</li>
                            <li><i class="fa fa-user-md"></i>Medicare Advantage</li>
                        </ul>
                        <div class="col-sm-5 col-md-5 col-lg-5 resp-tabs-container hor_1">
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-medkit"></i></span> Health insurance
                                    </h4>
                                    <p class="text-justify">StarsSeguros. It makes health insurance options available to you, at your fingertips, through the Patient Protection and Affordable Care Act (ACA), better known as OBAMACARE. Our plans are grouped in Bronze, Silver
                                        and Gold, so that you can choose the one that best suits your needs, no matter what your choice is, you will have access to high quality comprehensive care.</p>
                                    <br>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contact Us</a>
                                </div>
                                <img src="img/segurosalud.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-ambulance"></i></span> Complementary Insurance
                                    </h4>
                                    <p class="text-justify">An accident or an unexpected health problem can upset our economy at StarsSeguros. We help people, families and employers to be prepared with our complementary health policies, you can cover your deductibles, copays
                                        and even your daily expenses, our insurance covers the expenses that your primary insurance does not make and it is money that goes directly to your pocket. We have complementary coverage for any illness or accident.</p>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contact Us</a>
                                </div>
                                <img src="img/segurocomple.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-heart-broken"></i></span> Life insurances
                                    </h4>
                                    <p class="text-justify">At StarsSeguros, we call it investment insurance. insure your family members after 14 days of birth, Term insurance provides a death benefit for a limited time and permanent provides a death benefit, life benefits and
                                        the potential to generate cash value of the policy when Accessed through policy loans and withdrawals that you can use to pay for whatever you need, it offers the flexibility to increase or decrease your benefit
                                        and reduce or skip premium payments.</p>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contact Us</a>
                                </div>
                                <img src="img/segurovida.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion "><i class="fa fa-user-md "></i></span> Medicare Advantage
                                    </h4>
                                    <p>If you turn 65 or plan to retire after 65, StarsSeguros can recommend Medicare Advantage plans that can save you money. We offer a variety of Medicare options to protect you and your retirement savings, with premiums
                                        as low as $ 0 in some areas, dental and vision care, prescription drugs, and many more benefits.</p>
                                    <br>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contact Us</a>
                                </div>
                                <img src="img/medicare.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="servicios">
            <h1>&nbsp</h1>
            <br>
            <br>
        </div>
        <section class="services">
            <h2 class="text-center">Services</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-calendar"></span>
                        <h3 class="text-black">24x7 attention</h3>
                        <p>Monday to Friday: 7:00 am - 8:00 pm</p>
                        <p>Rest of the day, Saturdays and Sundays</p>
                        <p>Telephone Attention</p>
                    </div>
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-file-text"></span>
                        <h3>Claim</h3>
                        <br>
                        <!-- <p><a href="#">Descargue aqui sus planillas</a></p> -->
                        <a href="#" class="btn btn-primary">Download your forms here</a>
                    </div>
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-briefcase"></span>
                        <h3>Work with us</h3>
                        <br>
                        <a href="#" class="btn btn-primary">Apply for</a>
                    </div>
                    <!-- <div class="col-sm-3 services-dtl">
                        <span class="fa fa-money"></span>
                        <h3>Comodas cuotas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div> -->
                </div>
        </section>
        <!-- <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">Know what people says</h2>
                        <div class="testimonial-tab">
                            <div class="testimonials-tab-list">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab1"><img src="images/people-01.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab2"><img src="images/people-02.jpg" alt="Client" /></a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:void(0);" data-tab="tab3"><img src="images/people-03.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab4"><img src="images/people-04.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab5"><img src="images/people-05.jpg" alt="Client" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="testimonials-tab-content">
                                <div class="clearfix testimonial-con" id="testimonial-tab1">
                                    <h3>John<br /><span>Developer</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ante purus, aliquet ut urna id, blandit lobortis nisl. Phasellus varius velit sed placerat euismod. Duis nisi massa, pretium at luctus.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab2">
                                    <h3>Roger<br /><span>Baseball Player</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Cras vitae justo eu tellus maximus rutrum. Vestibulum nibh nibh, varius nec vehicula sed, finibus in tortor. Aliquam dictum, ligula vel euismod eleifend, libero est elementum</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab3">
                                    <h3>Victoria<br /><span>CEO</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Vivamus faucibus magna vitae purus blandit, rutrum aliquam turpis bibendum. Ut sit amet sapien dolor. Integer eget orci id leo consectetur iaculis ut vitae neque. Interdum et malesuada fames ac ante ipsum primis in
                                        faucibus.
                                    </p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab4">
                                    <h3>Liang<br /><span>Photographer</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Pellentesque feugiat suscipit quam, quis dignissim massa. Suspendisse potenti. Donec porta tempus ipsum id rhoncus. Aliquam hendrerit leo erat, non accumsan massa venenatis vitae.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab5">
                                    <h3>Adam<br /><span>Student</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Vivamus faucibus magna vitae purus blandit, rutrum aliquam turpis bibendum. Ut sit amet sapien dolor. Integer eget orci id leo consectetur iaculis ut vitae neque.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="parner-slider-mn">
                        <div class="col-sm-3">
                            <h2>
                                <b>Our</b> Partners
                            </h2>
                        </div>
                        <div class="col-sm-9">
                            <div class="partner-slider owl-carousel">
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.panamericanaclinic.com/" target="_blank"><img src="img/partnerlogo5.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www2.combinedinsurance.com/es/" target="_blank"><img src="img/partnerlogo7.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www-es.ambetterhealth.com/" target="_blank"><img src="img/partnerlogo1.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.bcbs.com/" target="_blank"><img src="img/partnerlogo2.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.hioscar.com/?locale=es" target="_blank"><img src="img/partnerlogo3.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.molinahealthcare.com/" target="_blank"><img src="img/partnerlogo4.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.uhc.com/es/latino" target="_blank"><img src="img/partnerlogo8.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.amerihealth.com/" target="_blank"><img src="img/partnerlogo9.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.cigna.com/" target="_blank"><img src="img/partnerlogo10.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.aetna.com/" target="_blank"><img src="img/partnerlogo11.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.ameritas.com/" target="_blank"><img src="img/partnerlogo12.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                    <div class="partner-logo">
                                        <p>
                                            <a href="https://www.humana.com/" target="_blank"><img src="img/partnerlogo13.jpg" alt="Partner" /></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <div id="contacto" class="container">
            <h1>&nbsp</h1>
            <br>
            <br>
        </div>

        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-dtl">
                                <h3>Contact</h3>
                                <div>
                                    <i class="icon ti-home"></i>
                                    <p>7600 W Tidwell Rd, Office 709, Houston TX 77040. United States</p>
                                </div>
                                <div>
                                    <i class="icon fa fa-phone"></i>
                                    <p>+1 (475) 266-1141</p>
                                </div>
                                <div>
                                    <i class="icon ti-email"></i>
                                    <p><a href="#">info@starsseguros.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-box">
                            <h2>Send us a message</h2>
                            <form action="#" method="GET" class="form-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nombre">Name and surname:</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="Write your name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono">Phone:</label>
                                        <input type="text" id="telefono" name="telefono" placeholder="Write your phone" required />
                                    </div>
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="text" id="email" name="email" placeholder="Email" required/>
                                </div>
                                <div>
                                    <label for="asunto">Subject:</label>
                                    <input type="text" id="asunto" name="asunto" placeholder="subject" required/>
                                </div>
                                <div>
                                    <label for="mensaje">Message:</label>
                                    <textarea rows="1" cols="1" id="mensaje" name="mensaje" minlength="3" required></textarea>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn-default" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <div class="clear"></div>

        <footer>
            <div class="container">
                <div class="row contact-sec">
                    <div class="col-md-5 col-lg-5 text-center">
                        <h2>Stars<span>Seguros</span></h2>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <i class="fa fa-home fa-2x" style="color: #fff;"></i>
                                <p>7600 W Tidwell Rd, Office 709, Houston TX 77040. United States</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <i class="fa fa-phone fa-2x" style="color: #fff;"></i>
                                <p>+1 (475) 266-1141</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-envelope-o fa-2x" style="color: #fff;"></i>
                                <p>info@starsseguros.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2 text-center">
                        <h2>Social <span>Media</span></h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#"><i class="fa fa-instagram fa-3x" style="color: #fff; margin: 10px;"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-3x" style="color: #fff; margin: 10px;"></i></a>
                                <a href="#"><i class="fa fa-facebook-square fa-3x" style="color: #fff; margin: 10px;"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square fa-3x" style="color: #fff; margin: 10px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This website was created by: <a href="https://ragrtics.com.ve " target="_blank ">Raúl González</a>
                        </div>

                    </div>
                </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script src="{{ asset('frontend/js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('frontend/js/easyResponsiveTabs.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
