<!-- 
     © Designed by Jhon Anthony Moreira Baltodano
     Mail : jonh.m.10@gmail.com
     PHP 5.5
     Laravel Framework 5.0

-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Pyrsa es una compañia profesional que entre sus servicios ofrece presupuestaciones,
        construcción de planos,home inspection,tramitología, administracion de proyectos entre otros,todo basado en el area de construcciones y remodelaciones."/>
    <meta name='keywords' content='presupuesto,presupuestacion,home inspection,pyrsa,planos,remodelacion
        construccion,construcciones,asesoria,barato,profesional,casa,construccion de casa,administracion,tramitologia
        consulturia , arquitectura , arquitecto ,dibujo '/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pyrsa</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="/css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

     {{--Slider--}}
     <link href="/slider/jquery.bxslider.css" rel="stylesheet">  

     <!-- icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo.ico" />

    <!-- Jquery -->
    <script src="/js/jquery.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function(){
    
        $('.bxslider').bxSlider({
          mode: 'horizontal',
          useCSS: false,
          infiniteLoop: false,
          hideControlOnEnd: true,
          easing: 'swing',
          speed: 2000
        });
          });
    </script>


</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="/"><img style="margin-top: -11px; height: 40px;" src="images/logo.ico" alt=""></a>
	                  </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="#HOME">Inicio</a></li>
	                    <li><a href="#SERVICE">Servicios</a></li>
	                    <li><a href="#ABOUT">Acerca</a></li>
	                    <li><a href="#WORK">Trabajos</a></li>
	                    <li><a href="#CONTACT">Contacto</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>Bienvenido a Pyrsa</h2>
	                            <p>Consultoría para el éxito de su construcción</p>
	                            <img src="images/shape.png" alt="">                        
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="scroll_down">
                            <a href="#SERVICE"><img src="images/scroll.png" alt=""></a>
	                            <h4>Deslizar</h4>
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>


    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>Planos</h2>
                        <p class="text-justify">Servicio en diseños de planos , anteproyectos , perspectivas 3D , especificaciones y tramitología</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Control de obra</h2>
                        <p class="text-justify">Programa general de construccion (flujo de cajas) , programa de inversion detallada e informe de seguimiento semanal </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-magnifying-glass"></i>
                        <h2>Presupuestos</h2>
                        <p class="text-justify">Resumen de capitulos , listado de recursos, presupuesto por frente de trabajo y Formulario de cantidades y precios.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-camera"></i>
                        <h2>Home Inspection</h2>
                        <p class="text-justify">Conosca más acerca de nuestros servicios en Home Inspection <a href="">Aquí</a>.</p>
                    </div>
                </div>
            </div>            
        

             <div class="row">
            <div class="col-md-7">

                <ul class="bxslider">
                  <li><img src="/images/slider/4.jpg" /></li>
                  <li><img src="/images/slider/3.jpg" /></li>
                  <li><img src="/images/slider/2.jpg" /></li>
                  <li><img src="/images/slider/1.jpg" /></li>
                  
                </ul>



            </div>

            <div class="col-md-5 text-center" >

             <h2 style="color: #CC0A0C;font-family: cursive;vertical-align: middle">Asesorías , estudios basicos y preliminares</h2>

             <a style="margin-top:90px;" href="#WORK" class="btn btn-primary cs-btn">Proyectos Recientes</a>

             <p style="color:#0C77C2; margin-top:40px;">&copy; Pyrsa S.A</p>



            </div>

        </div>



        </div>{{-- End Container services--}}
    </section>
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>Sobre nosotros</h2>
                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>Home Inspection - 90% Solicitudes</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">90% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>Planos - 80% Solicitudes</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>Control de obra - 85% Solicitudes</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            <span class="sr-only">85% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>Presupuestaciones - 95% Solicitudes</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">95% Complete</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInRight animated text-justify">
                    <p class="about_us_p">Somos una empresa dedicada a cubrir una necesidad urgente en el ámbito de la construcción. Esta necesidad se proyecta como la búsqueda de la adecuada asesoría que procura el razonable éxito de todo proceso constructivo. Pyrsa pretende en la mejor forma, brindar al cliente -conforme a sus necesidades y requerimientos-</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated text-justify">
                    <p class="about_us_p">todo el respaldo y la correcta guía que oriente en la toma de decisiones durante el proceso constructivo. Iniciando desde los conceptos preliminares y desarrollo de ideas en el anteproyecto, así como planos, presupuestos y hasta el mismo final de la obra materializada.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>Nuestro trabajo refleja el interes de lo que hacemos con cada proyecto.</p>
                    <h4>&copy; Pyrsa S.A</h4>
                </div>
                 <div class="single_testimonial text-center">
                    <p>Calculo de los costos unitarios en la mano de obra</p>
                    <h4>&copy; Pyrsa S.A</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Asesorías , estudios basicos y preliminares</p>
                    <h4>&copy; Pyrsa S.A</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Calidad en nuestros trabajos garantizada</p>
                    <h4>&copy; Pyrsa S.A</h4>
                </div>
            </div>            
        </div>
    </section>


    <div class="fun_facts">
    	<section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
	        <div class="section_overlay">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 wow fadeInLeft animated">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-toolbox"></i>
	                                    <h3>50</h3>
	                                    <p>Proyectos Realizados</p>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-clock"></i>
	                                    <h3>1000+</h3>
	                                    <p>Horas Trabajadas</p>
	                                </div>                            
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-trophy"></i>
	                                    <h3>37</h3>
	                                    <p>Recomendaciónes</p>
	                                </div>                            
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
	                        <div class="imac">
	                            <img src="images/imac.png" alt="">
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>
	    </section>    
    </div>
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Ultimos Trabajos</h1>
                        <img src="images/shape.png" alt="">
                        <p>Nuestros proyectos son de calidad , contamos con personal sumamente experimentado y capaz de hacer posible la visión que el cliente tenga.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/ultimos proyectos/7.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/ultimos proyectos/6.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/ultimos proyectos/5.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/ultimos proyectos/4.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/ultimos proyectos/3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
                        <img src="/images/ultimos proyectos/1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Aumentar</a>
                            <h2>&copy; Pyrsa S.A</h2>
                            
                        </div>                        
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>¿Buscando nuestro servicios?</h2>
                        <p>Deje que uno de nuestro arquitectos le atienda con gusto detallaremos las ventajas de adquirir nuestros servicios y la calidad que brinda nuestro trabajo.</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
	                    <a href="#CONTACT">
	                        <button type="button" class="btn btn-primary cs-btn">Conversemos</button>
	                    </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Contactenos</h1>
                        <img src="images/shape.png" alt="">
                        <p>Gracias por comunicarse con nosotros. Responderemos a la mayor brevedad</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Llameme</h2>
                        <p>+506 8348-4864</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Escribame</h2>
                        <p>contactopyrsa@gmail</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Dirección</h2>
                        <p>Heredia , San José Costa Rica</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Nombre">
                                <input type="email" class="form-control" id="email" placeholder="Correo Electronico">
                                <input type="text" class="form-control" id="subject" placeholder="Asunto">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Mensaje..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">Enviar Mensaje</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>¡Lo Esperamos!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="/images/logo.ico" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Siganos</h2>
                        <ul class="icon_list">
                            <li><a href="https://www.facebook.com/pyrsaSA" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a style="cursor:pointer;"><i class="fa fa-twitter"></i></a></li>
                            <li><a style="cursor:pointer;"><i class="fa fa-google-plus"></i></a></li>
                            <li><a style="cursor:pointer;"><i class="fa fa-linkedin"></i></a></li>
                            <li><a style="cursor:pointer;"><i class="fa fa-dribbble"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>Copyright <a href="/"target="_blank">&copy; Pyrsa S.A</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>






<!-- =========================
     SCRIPTS 
============================== -->


    
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/script.js"></script>

    {{--Custom Slider --}}
     <script src="/slider/jquery.easing.1.3.js"></script>
     <script src="/slider/jquery.bxslider.js"></script>
     <script src="/slider/jquery.bxslider.min.js"></script>



</body>

</html>