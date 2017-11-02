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
						<div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 100px">
                                                    
                                                    <!--img src="<?php echo base_url();?>images/facepage.png" alt="">
                                                    <!--h1>Cooperativa Autónoma Cimarronez</h1-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact" class="fh5co-section animate-box">
            <div class="container">
                    <div class="row animate-box">                        
                            <div class="row-fluid">
                                <div class="col-md-5">
                                    <p class="titleone"><b>Productos cimarronez</b></p>
                                    <p class="titletwo"><b>Flecha que busca la libertad</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 centered">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row-fluid hidden-xs">
                                <div class="col-md-12 row-header">
                                    <div class="col-md-2">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-8 paddingfive">
                                    Producto
                                    </div>
                                    <div class="col-md-2 paddingfive">
                                    Costo
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-2">
                        <br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a class="ligaprod" data-toggle="pill" href="#home" onclick="topFunction()">Chocolate</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu1" onclick="topFunction()">Cafe</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu2" onclick="topFunction()">Miel</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu3" onclick="topFunction()">Vainilla</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu4" onclick="topFunction()">Mezclas para infusiones</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu5" onclick="topFunction()">Mezcal</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu6" onclick="topFunction()">Sal</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu7" onclick="topFunction()">Cardamomo</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu8" onclick="topFunction()">Ajonjolí</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu9" onclick="topFunction()">Tabaco</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu10" onclick="topFunction()">Carne seca</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu11" onclick="topFunction()">Molinillos y jarritos</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu12" onclick="topFunction()">Playeras</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu13" onclick="topFunction()">Tazas</a></li>
                                <li><a class="ligaprod" data-toggle="pill" href="#menu14" onclick="topFunction()">Artesanías</a></li>
                                <li><br></li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <!--div class="col-md-2">
                                        <div class="vcenter">Chocolate</div>
                                    </div-->
                                    <!--Choclate-->
                                    <div class="col-md-9 col-xs-8 paddingfive">
                                        <p class="setheigth first-row">Tablillas de chocolate con: solo cacao, almendra, cacahuate, avellana, almendra, café, nuez, vainilla, mezcal, ron, amaranto, coco, menta, chile, sin azúcar, cardamomo, especias, sal, jengibre.</p>
                                        <p class="setheigth second-row">Cacao crudo</p>
                                        <p class="setheigth first-row">Cacao tostado</p>
                                        <p class="setheigth second-row">Cacao Tostado y descascarillado</p>
                                        <p class="setheigth first-row">Cacao en Polvo</p>
                                        <p class="setheigth second-row">Cacao en Polvo con Amaranto</p>
                                        <p class="setheigth first-row">Cacao en Polvo con Cardamomo</p>
                                        <p class="setheigth second-row">Cacao en Polvo con Menta</p>
                                        <p class="setheigth first-row">Cacao en Polvo con Vainilla</p>
                                        <p class="setheigth second-row">Cacao en Polvo con Coco</p>
                                        <p class="setheigth first-row">Cacao en Polvo con Almendra</p>                                    
                                    </div>
                                    <div class="col-md-3 col-xs-4 paddingfive">
                                        <p class="setheigth first-row hidden-sm hidden-md hidden-lg">$25.00 c/u<br><br><br><br><br><br></p>
                                        <p class="setheigth first-row hidden-xs">$25.00 c/u<br><br><br></p>
                                        <p class="setheigth second-row">1⁄4Kg x $40.00<br> 1⁄2Kg x $80.00<br> 1kg x $150.00</p>
                                        <p class="setheigth first-row"> 1/4Kg x $50.00<br> 1⁄2Kg x $100.00<br> 1kg x $200.00</p>
                                        <p class="setheigth second-row"> 1⁄4Kg x $60.00<br> 1⁄2Kg x $120.00<br> 1kg x $240.00</p>
                                        <p class="setheigth first-row"> 1kg x $180.00<br> 1⁄2 Kg x $90.00<br> 1⁄4 Kg x $45.00</p>
                                        <p class="setheigth second-row"> 1kg x $200.00<br> 1⁄2 Kg x $100.00<br> 1⁄4 Kg x $50.00</p>
                                        <p class="setheigth first-row"> 1kg x $220.00<br> 1⁄2 Kg x $110.00<br> 1⁄4 Kg x $55.00</p>
                                        <p class="setheigth second-row"> 1kg x $220.00<br> 1⁄2 Kg x $110.00<br> 1⁄4 Kg x $55.00</p>
                                        <p class="setheigth first-row"> 1kg x $220.00<br> 1⁄2 Kg x $110.00<br> 1⁄4 Kg x $55.00</p>
                                        <p class="setheigth second-row"> 1kg x $220.00<br> 1⁄2 Kg x $110.00<br> 1⁄4 Kg x $55.00</p>
                                        <p class="setheigth first-row"> 1kg x $220.00<br> 1⁄2 Kg x $110.00<br> 1⁄4 Kg x $55.00</p>
                                    </div>   
                                </div>                                    

                                    <!--cafe-->                                    
                                <div id="menu1" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-7 paddingfive">
                                        <p class="setheigth first-row">Café en grano.</p>
                                        <p class="setheigth second-row">Café (molido, 9 diferentes tipos)</p>
                                        <p class="setheigth first-row">Kawfé, (Cacao con café)</p>
                                        <p class="setheigth second-row">Mocca Cimarrón</p>
                                    </div>
                                    <div class="col-md-3 col-xs-5 paddingfive">
                                        <p class="setheigth first-row">1Kg x $180.00<br> 1⁄2 Kg x $90.00<br> 1⁄4 Kg x $45.00</p>
                                        <p class="setheigth second-row">1Kg x $180.00<br> 1⁄2 Kg x $90.00</p>
                                        <p class="setheigth first-row"> 30g x $20.00</p>
                                        <p class="setheigth second-row"> 35g x $20.00</p>
                                    </div>
                                </div>
                                    
                                    <!--miel-->
                                <div id="menu2" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Miel de abeja.</p>
                                        <p class="setheigth second-row">Miel de caña</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">1⁄4L x $45.00<br> 1⁄2L x $85.00<br> 1L x $170.00</p>
                                        <p class="setheigth second-row">1⁄4Lx $30.00<br> 1⁄2L x $60.00<br> 1L x $120.00 </p>
                                    </div>                           
                                </div>
                                    
                                    <!--vainilla-->
                                <div id="menu3" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Vainas de Vainilla.</p>
                                        <p class="setheigth second-row">Jarabe de vainilla orgánica</p>
                                        <p class="setheigth first-row">Extracto de vainilla orgánica</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">1 Vaina x $20.00</p>
                                        <p class="setheigth second-row">1/4L x 50.00 </p>
                                        <p class="setheigth first-row">1/4L x 150.00</p>
                                    </div>                           
                                </div>

                                        <!--mezcla infusuones-->
                                <div id="menu4" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Pinole (250g).</p>
                                        <p class="setheigth second-row">Taxcalate (250g)</p>
                                        <p class="setheigth first-row">Tejate (250g)</p>
                                        <p class="setheigth second-row">Pinolillo</p>
                                        <p class="setheigth first-row">Chilate</p>
                                        <p class="setheigth second-row">
                                            Mezclas con cacao para infusiones:<br>
                                            1. Menta y Canela,<br>
                                            2. Especias I. (Anís y clavo),<br>
                                            3. Yerbabuena,<br>
                                            4. Manzanilla-limón,<br>
                                            5. Lavanda
                                        </p>
                                        <p class="setheigth first-row">
                                            Mezclas con cacao para infusiones:<br>
                                                1. Té negro-cocolmeca,<br>
                                                2. Jazmín- té verde,<br>
                                                3. Jengibre,<br>
                                                4. Jamaica-canela,<br>
                                                5. Especias II. (Pimienta de Jamaica y
                                                cardamomo),<br>
                                                6. Para la tos vainilla, flor de manita y hoja
                                                santa.<br>
                                                7. Frutal
                                        </p>
                                        <p class="setheigth second-row">Cascarilla de cacao (250 g)</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">250g x $35.00</p>
                                        <p class="setheigth second-row">250g x $40.00 </p>
                                        <p class="setheigth first-row">250g x $40.00</p>
                                        <p class="setheigth second-row">250g x $40.00 </p>
                                        <p class="setheigth first-row">250g x $40.00</p>
                                        <p class="setheigth second-row">100g x $50.00<br><br><br><br><br><br> </p>
                                        <p class="setheigth first-row">70g x $50.00<br><br><br><br><br><br><br><br></p>
                                        <p class="setheigth second-row">250g x $75.00 </p>
                                    </div>                           
                                </div>
                                        
                                <!--mezcal-->
                                <div id="menu5" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Mezcal blanco. Pregunte por nuestras variedades: espadín, tobala, cuish.</p>
                                        <p class="setheigth second-row">Mezcal añejo 10 años</p>
                                        <p class="setheigth first-row">Cremas de mezcal (varios sabores)</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">1L $250.00</p>
                                        <p class="setheigth second-row">1L Mezcal Añejo 10 años x $300.00 </p>
                                        <p class="setheigth first-row">$270.00</p>
                                    </div>                           
                                </div> 
                                
                                <!--sal-->
                                <div id="menu6" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Sal de Mar</p>
                                        <p class="setheigth second-row">Sal de mar con cacao, con chile, con especias, con pimientas</p>
                                        <p class="setheigth first-row">Sal de Montaña</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">1Kg x $50.00<br> 1⁄2 Kg x $25.00<br> 1⁄4 Kg x $15.00</p>
                                        <p class="setheigth second-row">100g x $20.00 </p>
                                        <p class="setheigth first-row">1Kg x $60.00<br>1⁄2 Kg x $30.00</p>
                                    </div>                           
                                </div> 
                                
                                <!--cardamomo-->
                                <div id="menu7" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Cardamomo</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">15g x $20.00</p>
                                    </div>                           
                                </div> 
                                
                                <!--ajonjoli-->
                                <div id="menu8" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Ajonjolí</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">250g x $35.00</p>
                                    </div>                           
                                </div> 
                                
                                <!--tabaco-->
                                <div id="menu9" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Tabaco</p>
                                        <p class="setheigth second-row">Tabaco</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">Manojo con 18 hojas x $250.00</p>
                                        <p class="setheigth second-row">Presentación individual x $20.00</p>
                                    </div>                           
                                </div> 
                                
                                <!--carne-->
                                <div id="menu10" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Carne seca</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">100 g x $120.00</p>
                                    </div>                           
                                </div>
                                
                                <!--molinillos-->
                                <div id="menu11" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Molinillos</p>
                                        <p class="setheigth second-row">Jarritos</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">$50.00</p>
                                        <p class="setheigth second-row">$15.00 </p>
                                    </div>                           
                                </div>

                                 <!--sal-->
                                <div id="menu12" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Playera de tirantes para mujer</p>
                                        <p class="setheigth second-row">Playera de niño</p>
                                        <p class="setheigth first-row">Playera normal (cuello redondo, Tallas CH, M, G)</p>
                                        <p class="setheigth second-row">Playera tipo polo (para mujer y unisex)</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">$70.00</p>
                                        <p class="setheigth second-row">$70.00 </p>
                                        <p class="setheigth first-row">Tallas CH, M en $90.00.<br>Talla G en $120.00<br> Talla EG en $140.00</p>
                                        <p class="setheigth second-row">$100.00 </p>
                                    </div>                           
                                </div>
                                
                                <!--tazas-->
                                <div id="menu13" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Tazas normales</p>
                                        <p class="setheigth second-row">Tazas sublimadas</p>
                                        <p class="setheigth first-row">Tazas mágicas (cambian de color y aparece imagen)</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">$60.00</p>
                                        <p class="setheigth second-row">$80.00 </p>
                                        <p class="setheigth first-row">$100.00</p>
                                    </div>                           
                                </div>

                                <!--artesanias-->
                                <div id="menu14" class="tab-pane fade">
                                    <div class="col-md-9 col-xs-9 paddingfive">
                                        <p class="setheigth first-row">Cestería de Guerrero y Morelos.</p>
                                        <p class="setheigth second-row">Guajes decorados y jícaras de guaje talladas, de la montaña de Guerrero, y Tepelcingo Morelos.</p>
                                        <p class="setheigth first-row">Artesanía de barro de Amatenango, Chiapas</p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 paddingfive">
                                        <p class="setheigth first-row">Costo según la pieza.</p>
                                        <p class="setheigth second-row">Costo según la pieza. </p>
                                        <p class="setheigth first-row">Costo según la pieza.</p>
                                    </div>                           
                                </div> 
                                                                  
                                </div>
                            </div>
                        </div>
                                                    
                            <!--div class="col-md-2">
                                    <form action="#" id="form-wrap">
                                            <div class="row form-group">
                                                    <div class="col-md-12">
                                                            <label for="name">Nombre</label>
                                                            <input type="text" class="form-control" id="name">
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col-md-12">
                                                            <label for="email">Correo</label>
                                                            <input type="text" class="form-control" id="email">
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col-md-12">
                                                            <label for="message">Mensaje</label>
                                                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col-md-12">
                                                            <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Enviar">
                                                    </div>
                                            </div>

                                    </form>
                            </div-->                            
                    </div>
                
            </div>
	</div>
        
        

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

