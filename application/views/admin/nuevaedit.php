<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar editorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Acerca de C.A.C.A.O." />
	<meta name="keywords" content="chocolate, cacao, cooperativa, cimarronez, originario" />
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

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
    .infoplay{
        background: rgba(0, 0, 0,0.7);
        font-size: 24px;
    }
</style>

        <?php $this->load->view('head');?>

        </head>
        <body>
		
	<div class="load"></div>
	
	<div id="page">
	<?php $this->load->view('admin/menuadmin');?>

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

        <div class="container" style="padding: 2em 0;">
            <div class="row">                
                <div class="col-md-6 idfirebase">
                    <div class="form-group">
                        <label>Titulo editorial:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo...">
                    </div>                    
                </div>
                <div class="col-md-6 idfirebase">
                    <div class="form-group">
                        <label>Autor editorial:</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor...">
                    </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-6 idfirebase">  
                    <div class="form-group">
                        <label>Subtitulo editorial:</label>
                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo...">
                    </div>
                </div>
                <div class="col-md-6 idfirebase">
                    <div class="form-group">
                    <label>Imagen:</label>
                    <input type="file" value="Imagen para la noticia" name="foto0" id="foto0" onchange="validar(this,0);"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 idfirebase">
                    <div class="form-group">
                        <label>Texto editorial:</label> 
                        <br>
                        Nota: Si solo agregara imagen, no incluya texto...
                        <br>
                        <textarea class="form-control" id="noticia" rows="10" name="noticia" placeholder="Escribe la editorial aqui..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <div class="form-group text-right">
                        <button class="btn-lg btn-default addnotice">Agregar editorial</button>
                    </div>
                </div>
            </div>
        </div>
                     	
	<?php $this->load->view('footer');?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
        <script>
            var api = '<?php echo base_url();?>';
        </script>
        <script src="<?php echo base_url()?>js/firebaseScriptEditorial.js"></script>

	<!-- jQuery -->
	<?php $this->load->view('scripts');?>


	</body>
</html>

