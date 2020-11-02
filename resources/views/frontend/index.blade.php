<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stars Seguros</title>

    <link rel="icon" type="image/png" href="{{  asset('favicon.png') }}"/>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">


    <!-- Estilos pagina -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/easy-responsive-tabs.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flexslider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/estilo.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cookieconsent.css') }}"/>

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
                            {{--  <li><a href="#"><i class="fa fa-twitter"></i></a></li>  --}}
                            {{--  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>  --}}
                            <li><a href="https://www.instagram.com/josesanchezseguros2020/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100047240031956" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
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
                    <a class="navbar-brand" href="{{ route('index') }}">
                        Stars<span>Seguros</span>
                    </a>
                    <p>Llámanos ahora<b>+1 (475) 266-1141</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('index') }}">Inicio</a>
                        </li>
                        <li>
                            <a href="#productos">Productos</a>
                        </li>
                        <li>
                            <a href="#servicios">Servicios</a>
                        </li>
                        <li>
                            <a href="#contacto">Contactécnos</a>
                        </li>
                        <li>
                            <a href="{{ route('formulario') }}" class="text-center btn-default">Inscribirse</a>
                        </li>
                        <li>
                            <a href="{{ route('english') }}">English</a>
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
                            <b>Cuida tu Salud</b>
                            <h3>Seguros de Salud</h3>
                            <p>StarsSeguros. Pone a su disposición opciones de seguros de salud, al alcance de su bolsillo, a través del OBAMACARE.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider2.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Cuida a los tuyos</b>
                            <h3>Seguros Complementarios</h3>
                            <p>En StarsSeguros. Ayudamos a personas, familias y empleadores a estar preparados con nuestras pólizas complementarias de salud</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider3.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Proteje tu vida</b>
                            <h3>Seguro de vida</h3>
                            <p>En StarsSeguros, los llamamos seguros de inversión. asegura a tus familiares a partir de los 14 días de nacidos.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider4.jpg" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Años Dorados</b>
                            <h3>Medicare Advantage</h3>
                            <p>Si cumple 65 años o planea jubilarse después de los 65, StarsSeguros tiene planes que le ayudaran a ahorrar dinero.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/slider5.jpg" />
                    <div class="slide-info">
                        <div class="slide-con ">
                            <b>Nuestro Aliado</b>
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
                            <b>Nuestro Aliado</b>
                            <h3>ASEGURADORA</h3>
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
                        <h2>Bienvenidos a StarsSeguros</h2>
                        <hr>
                        <p class="text-justify">Nuestro principal compromiso es "hacerlo facil para usted". Entendemos lo confuso que puede ser el tema de los seguros, es por ello que en stars seguros manejamos cuales son las interrogantes a formular, para establecer cual es
                            la poliza que se ajusta a la solución de sus necesidades.</p>
                        <h4>Estamos aquí para ayudarlo</h4>
                        <p class="text-justify">La crisis de salud que ha generado el coronavirus(COVID-19) impone desafios, que repercuten en todo el mundo y nuestras comunidades. es por ello que en stars seguros tomamos las medidas optimas para protejera nuestros empleados
                            y a sus familias, mientras trabajan para mantener los estandares óptimos de servicio y soporte para nuestros clientes.</p>
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
                        <h2>Productos</h2>
                        <ul class="resp-tabs-list hor_1 col-sm-3 col-md-3 col-lg-3">
                            <li><i class="fa fa-medkit"></i> Seguros de Salud</li>
                            <li><i class="fa fa-ambulance"></i> Seguros Complementarios</li>
                            <li><i class="ti-heart-broken"></i> Seguros de Vida</li>
                            <li><i class="fa fa-user-md"></i> Medicare Advantage</li>
                        </ul>
                        <div class="col-sm-5 col-md-5 col-lg-5 resp-tabs-container hor_1">
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-medkit"></i></span> Seguros de Salud
                                    </h4>
                                    <p class="text-justify">StarsSeguros. Pone a su disposición opciones de seguros de salud, al alcance de su bolsillo, a través de la Ley de Protección al Paciente y Cuidado de Salud Asequible (ACA) , mejor conocido como OBAMACARE. Nuestros
                                        planes están agrupados en Bronce, Plata y Oro, para que elija el que mejor se adapte a sus necesidades, sin importar cual sea su elección, usted contara con acceso a atención integral de alta calidad.</p>
                                    <br>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contactános</a>
                                </div>
                                <img src="img/segurosalud.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-ambulance"></i></span> Seguros Complementarios
                                    </h4>
                                    <p class="text-justify">Un accidente o un problema de salud inesperado, puede desajustar nuestra economía, en StarsSeguros. Ayudamos a personas, familias y empleadores a estar preparados con nuestras pólizas complementarias de salud, puede
                                        cubrir sus deducibles, copagos y hasta sus gastos Diarios, nuestros seguros cubren los gastos que su seguro primario no hace y es dinero que va directamente a su bolsillo. Tenemos coberturas complementarias para
                                        cualquier enfermedad o accidente.</p>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contactános</a>
                                </div>
                                <img src="img/segurocomple.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-heart-broken"></i></span> Seguros de Vida
                                    </h4>
                                    <p class="text-justify">En StarsSeguros, los llamamos seguros de inversión. asegura a tus familiares a partir de los 14 días de nacidos, El seguro a término proporciona un beneficio por fallecimiento durante un tiempo limitado y el permanente
                                        proporciona un beneficio por muerte, beneficios en vida y el potencial de generar valor en efectivo de la póliza al que puede acceder mediante préstamos y retiros de la póliza que puedes usar para pagar lo que necesite,
                                        ofrece la flexibilidad de aumentar o disminuir su beneficio y reducir u omitir el pago de primas.</p>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contactános</a>
                                </div>
                                <img src="img/segurovida.jpg" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion "><i class="fa fa-user-md "></i></span> Medicare Advantage
                                    </h4>
                                    <p>Si cumple 65 años o planea jubilarse después de los 65, StarsSeguros podemos recomendarles planes Medicare Advantage que pueden ahorrarle dinero. Ofrecemos una variedad de opciones de Medicare para protegerlo a usted
                                        y a sus ahorros para la jubilación, con primas tan bajas como $ 0 en algunas áreas, cuidados dentales y visión, medicamentos recetados y muchos beneficios más.</p>
                                    <br>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=+1475266-1141&text=¡Hola! Necesito Información" class="btn btn-success btn-lg fa fa-whatsapp" style=" color: #fff; " target="-blank "> Contactános</a>
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
            <h2 class="text-center">Servicios</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-calendar"></span>
                        <h3 class="text-black">Atención 24x7</h3>
                        <p>Lunes a Viernes: 7:00 am - 8:00 pm</p>
                        <p>Resto del dia Atención Teléfonica</p>
                    </div>
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-file-text"></span>
                        <h3>Reclamación</h3>
                        <br>
                        <!-- <p><a href="#">Descargue aqui sus planillas</a></p> -->
                        <a href="#" class="btn btn-primary">Descargue aquí sus planillas</a>
                    </div>
                    <div class="col-sm-4 services-dtl text-center">
                        <span class="fa fa-briefcase"></span>
                        <h3>Trabaja con nosotros</h3>
                        <br>
                        <a href="#" class="btn btn-primary">Solicitar</a>
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
                                <b>Nuestros</b> Socios
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
                                <h3>Contacto</h3>
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
                            <h2>Envienos un Mensaje</h2>
                            <form action="{{ route('mensajes.store') }}" method="POST" class="form-content">

                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre y Apellido:</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono">Teléfono:</label>
                                        <input type="text" id="telefono" name="telefono" placeholder="Escriba su nombre" required />
                                    </div>
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="text" id="email" name="email" placeholder="Email" required/>
                                </div>
                                <div>
                                    <label for="asunto">Asunto:</label>
                                    <input type="text" id="asunto" name="asunto" placeholder="Asunto" required/>
                                </div>
                                <div>
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea rows="1" cols="1" id="mensaje" name="mensaje" minlength="3" required></textarea>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn-default" value="Enviar" />
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
                        <h2>Redes <span>Sociales</span></h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="https://www.instagram.com/josesanchezseguros2020/" target="_blank"><i class="fa fa-instagram fa-3x" style="color: #fff; margin: 10px;"></i></a>
                                {{--  <a href="#"><i class="fa fa-twitter-square fa-3x" style="color: #fff; margin: 10px;"></i></a>  --}}
                                <a href="https://www.facebook.com/profile.php?id=100047240031956" target="_blank"><i class="fa fa-facebook-square fa-3x" style="color: #fff; margin: 10px;"></i></a>
                                {{--  <a href="#"><i class="fa fa-linkedin-square fa-3x" style="color: #fff; margin: 10px;"></i></a>  --}}
                            </div>
                        </div>
                        <div class="row">
                            <img src="img/ssl.png" alt="">
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
                            </script> Todos los derechos reservados | Este sitio web fue creado Por: <a href="https://ragrtics.com.ve " target="_blank ">Raúl González</a>
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

        <script src="{{ asset('frontend/js/cookieconsent.js') }}"></script>

        <script>
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#00B2CE"
                    }
                }
            });
        </script>

</body>

</html>
