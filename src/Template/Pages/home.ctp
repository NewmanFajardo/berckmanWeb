<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>Berckman C.A</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> 
        addEventListener("load", function(){ 
            setTimeout(hideURLbar, 0); 
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1); 
        } 
    </script>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap-3.3.7','style-home','font-awesome','nav','smoothbox','slick','slick-theme','estilos_carrusel']) ?>
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>

<div class="Main-agile">
    <?= $this->element('home_menu') ?>
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="w3layouts-banner-top banner">
                                <div class="fondo">
                                    <div class="container">
                                        <div class="agileits-banner-info">
                                            <h3>DESARROLLO <span>TECNOLOGICO</span></h3>
                                            <p>software y hardware de vanguardia</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>


                                <div class="w3layouts-banner-top banner-2">
                                    <div class="fondo">
                                        <div class="container">
                                            <div class="agileits-banner-info">
                                                <h3>Industria <span>Petrolera</span></h3>
                                                <p>Supervision, control y gestion de equipos petroleros</p>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top banner-3">
                                <div class="fondo">
                                    <div class="container">
                                        <div class="agileits-banner-info">
                                            <h3>servicio al cliente las <span>24 horas</span></h3>
                                            <p>Ofrecemos acesoramiento online en vivo 24/7</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!-- //banner-text -->
            </div>
            
        <div class="header">
            <div class="col-md-6 w3l_header_left">
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:contacto@berckman.com">contacto@berckman.com</a></p>
            </div>
            <div class="col-md-6 w3l_header_right">
                <div class="navbar-right social-icons"> 
                    <ul>
                        <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                        <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                    </ul>  
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
</div>

<!-- contenido -->

<!-- nosotros -->
<div class="about-w3l" id="about">
    <div class="container">
        <div class="about-main-w3l">
            <div class="about-top-w3l">
               <h3>Nosotros</h3>
                <?php foreach ($empresa as $empresas): ?>
                    <p><?= h($empresas->descripcion) ?></p>
                <?php endforeach; ?>
            </div>      
        </div>
    </div>
</div>
<!-- cierre de nosotros -->

<!-- productos y servicios -->
    <div class="gallery" id="gallery">
        <h3 id="productos">Productos y Servicios</h3>
        <span>Investigar, innovar y crear son parte de la cultura de nuestra empresa</span>

        <div class="container">    
            <div class="w3agile_gallery_grids">

                <?php 
                    $numero = 0;
                    foreach ($servicio as $servicios):
                        $numero = $numero+1;
                    endforeach;

                    $off = 6;
                    $off = $off - $numero;
                ?>

                <?php $i = 0;?>
                <?php foreach ($servicio as $servicios): ?>
                    <?php
                        if ($i == 0) {
                    ?>
                        <div class="col-md-2 <?= "col-md-offset-".$off ?> w3agile_gallery_grid">
                            <div class="w3agile_gallery_image">
                                <a class="sb" title="<?= $servicios->descripcion ?>" href="<?= dirname($_SERVER['PHP_SELF']).'/img/home/servicios/'.$servicios->box.'';?>">
                                    <figure>
                                        <?= $this->Html->image('home/servicios/'.$servicios->img.'',['alt' => 'RPS','class' => 'class="responsive redimencionar']); ?>
                                        <figcaption>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    <?php
                        }else{
                    ?>
                        <div class="col-md-2 w3agile_gallery_grid">
                            <div class="w3agile_gallery_image">
                                <a class="sb" title="<?= $servicios->descripcion ?>" href="<?= dirname($_SERVER['PHP_SELF']).'/img/home/servicios/'.$servicios->box.'';?>">
                                    <figure>
                                        <?= $this->Html->image('home/servicios/'.$servicios->img.'',['alt' => 'RPS','class' => 'class="responsive redimencionar']); ?>
                                        <figcaption>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                        $i++;
                    ?>    
                <?php endforeach; ?>

               <div class="clearfix"> </div>
            </div>
        </div>
        
    </div>
<!-- cierre de productos y servicios -->

<!-- noticias -->
    <div class="agile-w3" id="news" style="background: #fff;">
        <div class="container">
            <div class="agileits-w3-2">
                <div class="col-md-8 w3-nature">
                    <p><a href="#">Ultimas Noticias</a></p>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="wthree_banner_info">
                <?php foreach ($noticia as $noticias): ?>
                    <div class="col-md-4 wthree_banner_info_left">
                        <div class="col-xs-4 wthree_banner_info_left_grid">
                            <div class="wthree_banner_info_left_grid1">
                                <?= $this->Html->image('home/noticias/'.$noticias->img.'',['alt' => 'noticias3', 'class' => 'img-responsive']);?>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_banner_info_left_grid_left">
                            <h3><?= $noticias->titulo; ?></h3>
                            <span> <?= $noticias->created; ?> </span>
                            <?php
                              if (strlen($noticias->descripcion) > 100) {
                                $descripcion = substr($noticias->descripcion, 0,100);
                                $descripcion = $descripcion." <a href='#'>ver mas...</a>";
                              }else
                                $descripcion = $noticias->descripcion;

                            ?>
                            <p> <?= $descripcion ?> </a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                <?php endforeach; ?>

                <div class="clearfix"> </div>
            </div>
            
        </div>
    </div>
<!-- cierre de noticias -->

<!-- nuestros clientes -->
    <div class="team" id="team">
        <div class="container">
            <h3>Clientes</h3>
            <span>Trabajamos con y para los mejores</span>
            <div class="container" style="margin: 20px auto;">
                <div class="row">
                    <div class="col-md-12">
                        <section class="center slider">
                            <?php foreach ($cliente as $clientes): ?>
                            <div>
                                <?= $this->Html->image("home/clientes/".$clientes->img.""); ?>
                            </div>
                            <?php endforeach; ?>
                        </section>
                    </div>
                </div>
            </div>
    <br><br>
        </div>
    </div>
<!-- nuestros clientes -->

<!-- //Contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="tittle" id="titulo_contacto">Contactanos</h3>
                <?php foreach ($empresa as $empresas): ?>
                    <span><?= h($empresas->direccion) ?></span>
                <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= $this->Html->image('curriculo.png',['alt' => 'secretaria','class' => 'img-cirruculo pull-right']); ?>
            </div>
            <div class="col-md-6">

                <h4>
                    <a data-toggle="modal" data-target=".bs-example-modal-lg" style="cursor: pointer;">
                        &#191;Deseas formar parte de nuestro equipo?
                    </a>
                </h4>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Ingresa tu curriculo</h4>
                            </div>
                            <div class="modal-body">
                                <?php
                                    echo $this->Form->create($curriculo, ['type' => 'file']);
                                    echo $this->Form->input('cedula');
                                    echo $this->Form->input('nombre');
                                    echo $this->Form->input('apellido');
                                    echo $this->Form->input('link',['type' => 'file']);
                                    echo $this->Form->input('profesiones.profecion');
                                    echo $this->Form->button('enviar');
                                    echo $this->Form->end();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

<!-- certificaciones-->
    <div class="team" id="certificaciones">
        <div class="container">
            <h3 id="certificacion_title">Certificaciones</h3>
            <span>Estamos certificados bajo los mas altos estandares</span>
            <div class="container">
                <div class="row">
                    <?php  foreach ($certificacion as $certificaciones): ?>
                        <div class="col-md-6">
                            <?= $this->Html->image("home/certificaciones/".$certificaciones->img."",['class' => 'img-certificaciones']); ?>
                        </div>
                    <?php  endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<!-- cierre de certificaciones-->


    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15730.889346700622!2d-63.26730791189444!3d9.7047225887852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c3339a96694cf1d%3A0x5b3b2690fff5e13c!2sMercado+de+Mayoristas%2C+Av.+Zona+Industrial%2C+Matur%C3%ADn%2C+Monagas!5e0!3m2!1ses!2sve!4v1512661625503"></iframe>
    </div>      
<!-- //Contact -->

<!-- fin del contenido -->


    <?= $this->element('home_footer') ?>
    <?= $this->Html->script(['jquery-2.1.4.min','bootstrap','responsiveslides.min','smoothbox.jquery2','jquery.flexslider','classie-home','nav','main','waypoints.min','counterup.min','move-top','easing','efectos','jsCarousel-2.0.0','slick']) ?>

            <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
            </script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider3").responsiveSlides({
                    auto: true,
                    pager:false,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
             </script>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
            <script type="text/javascript">
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>

            <script>
                jQuery(document).ready(function( $ ) {
                    $('.counter').counterUp({
                        delay: 100,
                        time: 1000
                    });
                });
            </script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>        
            <script type="text/javascript">
                $(document).on('ready', function() {
                    var ancho = $(window).width();
                    if (ancho < 720) {
                        mostrar = 1;
                    }else{
                        mostrar = 3;
                    }
                    
                    $(".center").slick({
                        dots: false,
                        infinite: true,
                        centerMode: true,
                        slidesToShow: mostrar,
                        slidesToScroll: 3
                    });

                });
            </script>

</body>
</html>
