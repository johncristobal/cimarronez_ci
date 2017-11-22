<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Productos cimarronez" />
	<meta name="author" content="cimarronez" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<?php $this->load->view('head');?>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


        <style type="text/css">
            
                .setheigth{
                    color: #6c4836 !important;
                    height: auto;
                    min-height: 110px !important;
                }
                
                .headertable{
                    
                }
                
                .separated-row{
                    
                }
                
                .first-row{
                    background: #ffffff;
                    margin-bottom: 1px !important;
                    
                }
                
                .second-row{
                    background: #fae4d6;
                    margin-bottom: 1px !important;
                }
                
                .title-product{
                    
                }
                
                .paddingfive{
                    padding-left: 1px;
                    padding-right: 1px;
                }
                
                .vcenter {
                    display: inline-block;
                    vertical-align: middle;
                    float: none;
                }
                
                .row-header{
                    background-color: #ce7c28;
                    color: #fff !important;
                    font-size: 25px;     
                }
                
                .titleone{
                    font-size: 35px !important;
                    color: #ff0008 !important;
                    margin-bottom: 1px;
                }
                .titletwo{
                    font-size: 25px !important;
                    color: #000 !important;        
                }
                .ligaprod{
                    color:#fff !important;
                }
                
                
                .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{

                    background-color: #ce7c28 !important;
                }
                                
        </style>
        
            
        <script>

            

            function topFunction() {
            var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };
                        
            if(isMobile.any()) {
               // It is mobile
                document.body.scrollTop = 900; // For Chrome, Safari and Opera 
                document.documentElement.scrollTop = 900; // For IE and Firefox
            }else{
                
                document.body.scrollTop = 300; // For Chrome, Safari and Opera 
                document.documentElement.scrollTop = 300; // For IE and Firefox
            }
            
            }
        </script>
            
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php $this->load->view('menu');?>

        <!--Header...-->    
	<header id="fh5co-header" class="fh5co-cover " role="banner" style="background: #3b1e07;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t" style="height: 100px">
						<div class="display-tc animate-fast" data-animate-effect="fadeIn" style="height: 100px">
                                                    
                                                    <!--img src="<?php echo base_url();?>images/facepage.png" alt="">
                                                    <!--h1>Cooperativa Autónoma Cimarronez</h1-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
        <div class="animate-box">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-5">
                        <p class="titleone"><b>Productos cimarronez</b></p>
                        <p class="titletwo"><b><?=$desc;?></b></p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="fh5co-featured-menu" class="">
            <div class="container">
                
                <?php
                    $i=0;
                    foreach ($productos as $value) {                                                           
                ?>
                <div class="row" style="border-bottom:1px solid red">
                    <div class="col-xs-4 col-md-4">
                        <h2 style="color:white; margin-top: 10px;"><?=$value->nombre;?></h2>
                    </div>
                    <div class="col-xs-4 col-md-4" data-toggle="collapse" data-target="#demo<?=$value->id;?>">
                        <h4 style="color:white; margin-top: 10px; padding-left: 8px;"><?=$value->descripcion;?></h4>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <h3 style="color:white; margin-top: 10px;">
                            <?php 
                            $va = str_replace(",","<br/>",$value->precio);    
                            echo $va;                            
                            ?>
                        </h3>  
                    </div>
                </div>
                
                <?php
                    }
                ?>
                
                <!--div class="row">				
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/mezcal.png" class="img-responsive" alt="" style="height: 175px;">
                                <h3>Mezcal</h3>
                                <p>La palabra mezcal se deriva de los vocablos náhuatl metl e ixcalli, que significan...</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/avellana.jpg" class="img-responsive" alt="">
                                <h3>Avellana</h3>
                                <p>Las avellanas, como todos los vegetales, no tienen colesterol.</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/cacahuate1.jpg" class="img-responsive" alt="">
                                <h3>Cacahuate</h3>
                                <p>Los manís o cacahuetes son alimentos naturales con propiedades alimentarias ampliamente reconocidas.</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/almendra1.jpg" class="img-responsive" alt="">
                                <h3>Almendra</h3>
                                <p>La almendra tiene un elevado valor nutritivo....</p>
                                </a>

                            </div>
                        </div>                                        
                </div>
                				
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/mezcal.png" class="img-responsive" alt="" style="height: 175px;">
                                <h3>Mezcal</h3>
                                <p>La palabra mezcal se deriva de los vocablos náhuatl metl e ixcalli, que significan...</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/avellana.jpg" class="img-responsive" alt="">
                                <h3>Avellana</h3>
                                <p>Las avellanas, como todos los vegetales, no tienen colesterol.</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/cacahuate1.jpg" class="img-responsive" alt="">
                                <h3>Cacahuate</h3>
                                <p>Los manís o cacahuetes son alimentos naturales con propiedades alimentarias ampliamente reconocidas.</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-fast">
                            <div class="fh5co-item">
                                <a href="<?php echo base_url();?>productos">
                                <img src="<?php echo base_url();?>images/almendra1.jpg" class="img-responsive" alt="">
                                <h3>Almendra</h3>
                                <p>La almendra tiene un elevado valor nutritivo....</p>
                                </a>

                            </div>
                        </div>                                        
                
            </div-->
	</div>
            <br>
        
        <!--div class="row contact">
            <div class="col-md-4 col-xs-4">
                Te interesa saber màs.
            </div>
            <div class="col-md-4 col-xs-4">
                <a href="<?php echo base_url();?>contacto" style="color: #441f05;">Clic aquì para contactarnos</a>
            </div>
        </div-->
        <?php $this->load->view('footer');?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
        <?php $this->load->view('scripts');?>

	</body>
</html>

