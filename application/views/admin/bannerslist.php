<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nosotros</title>
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
    
    h3{
        color: #000;
    }
</style>
        </head>
        <body onload="">
		
	<div class="fh5co-loader"></div>
	
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
                <div class="col-md-12 text-right">
                <form method="post" action="<?php echo base_url()?>admin/reorderbanner" id="uploadimage" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h3>Actualizar Banners</h3>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <p>
                                    Elige un banner y arrastralo a la posición que deseas que aparezca en la pantalla principal.
                                </p>
                            </div>
                        </div>

                        <ul id="sortable">
                        <?php
                            $indice = 1;
                            foreach($banners as $file){
                        ?>                
                        <!--Validar si existe su imagen, si no poner la default y habilitar para actualizar-->
                        <!--div class="row">                    
                            <p class="col-md-6 col-xs-6 text-center centered">       
                                <input type="file" value="Actualizar banner" name="foto<?=$indice?>" id="foto<?=$indice?>" onchange="validar(this,<?=$indice?>);"/>
                            </p>
                            <p class="col-md-6 col-xs-6 text-right right">       
                                <a class="btn btn-danger" onclick="eliminar(<?=$indice?>);">Eliminar banner</a>                    
                            </p>
                        </div-->
                        <div class="row">
                            <div class="col-md-3 col-xs-3"></div>
                            <div class="col-md-6 col-xs-6 text-center centered">
                                <li class="ui-state-default">
                                    <input type="hidden" name="foto<?=$indice;?>" value="<?=$file?>"/>
                                    <img id="previewing<?=$indice?>" src="<?php echo base_url();?><?=$urlfolder?>/<?=$file?>" alt="" class="style img-responsive" style="height:250px; width: 100%;">
                                    <br>
                                </li>
                            </div>
                            <div class="col-md-3 col-xs-3"></div>

                        </div>
                        <!--div class="row">
                            <div class="col-md-12 col-xs-12 text-center centered">
                                <hr>
                                <br><br>
                            </div>
                        </div-->
                        <?php 
                            $indice++;
                            }
                        ?>
                        </ul>             
                           <!-- <div class="row add_top_30">

                                    <div class="col-md-4">
                                    <h4><i class="icon-trophy" style="color:#a3d39c;"></i> Títulos/Finales</h4>
                                    <p>Qui at commune signiferumque. In mel labores moderatius, tantas saperet facilisi quo ut. Vero wisi civibus ea vim. An tota nostro sit, mel ei utinam ancillae, mutat dolores mea et. Homero iriure imperdiet eu mel. Ei enim viderer pri.</p>
                                    <p><a data-toggle="modal" href="#myModal" class="button_small add_bottom_15">Ver más</a></p>
                                </div>

                                <div class="col-md-4">
                                    <h4><i class="icon-bolt" style="color:#a3d39c;"></i> Partidos Ganados/Perdidos</h4>
                                    <p>Qui at commune signiferumque. In mel labores moderatius, tantas saperet facilisi quo ut. Vero wisi civibus ea vim. An tota nostro sit, mel ei utinam ancillae, mutat dolores mea et. Homero iriure imperdiet eu mel. Ei enim viderer pri.</p>
                                    <p><a href="#" class="button_small add_bottom_15">Ver más</a></p>
                                </div>

                                <div class="col-md-4">
                                    <h4><i class="icon-star" style="color:#a3d39c;"></i> Actividad</h4>
                                    <p>Qui at commune signiferumque. In mel labores moderatius, tantas saperet facilisi quo ut. Vero wisi civibus ea vim. An tota nostro sit, mel ei utinam ancillae, mutat dolores mea et. Homero iriure imperdiet eu mel. Ei enim viderer pri.</p>
                                    <p><a href="#" class="button_small add_bottom_15">Ver más</a></p>
                                </div> -->

                        </div><!-- End row -->

                        <div class="container">
                        <div class="modal-footer centered">
                            <input type="submit" class="btn btn-info btn-lg" data-dismiss="modal" value="Actualizar posición banners"/>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End container -->
		
    <script type="text/javascript">
    /*window.onload = function () {
        var fileupload = document.getElementById("FileUpload1");
        var filePath = document.getElementById("spnFilePath");
        var image = document.getElementById("imgFileUpload");
        image.onclick = function () {
            fileupload.click();
        };
        fileupload.onchange = function () {
            var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
            filePath.innerHTML = "<b>Selected File: </b>" + fileName;
        };
    };*/
    
    /*$("#uploadimage").on('submit',(function(e) {
        e.preventDefault();
        //$("#message").empty();
        //$('#loading').show();
        $.ajax({
            url: "<?php echo base_url()?>admin/uploadNewBanners", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
                $('#loading').hide();
                $("#message").html(data);
            }
        });
    }));*/
          
    $( function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    } );
    
    var indiceChange = "";
    var ideliminado = "";

    $('#eliminarbanner').click(function(){
        $.ajax
        ({
            url: '<?php echo base_url()?>admin/deletebanner/'+ideliminado,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result)
            {
                //alert(result);
                location.reload(true);
            }
        });
    });
    
    function eliminar(indice){
        //del elemento seleccionadosubo y actualizo foto del respectivo indice
        //alert(elemento);
        ideliminado = indice;
        //$("#message").empty(); // To remove the previous error message
        $('#modalborrar').modal('toggle');
    }
    
    function validar(elemento,indice){
        //del elemento seleccionadosubo y actualizo foto del respectivo indice
        //alert(elemento);
        indiceChange = indice;
        //$("#message").empty(); // To remove the previous error message
        var file = elemento.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
            $('#previewing'+indice).attr('src','<?php echo base_url();?>img/profile.jpg');
            //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
            return false;
        }
        else
        {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(elemento.files[0]);
        }
    }
    
    function imageIsLoaded(e) {
        $("#foto"+indiceChange).css("color","green");
        //$('#image_preview').css("display", "none");
        $('#previewing'+indiceChange).attr('src', e.target.result);
        //$('#previewing').attr('width', '250px');
        //$('#previewing').attr('height', '230px');
    };
    

</script>                
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
        <script src="<?php echo base_url()?>js/firebaseScriptRead.js"/>
	<?php $this->load->view('head');?>

	<!-- jQuery -->
	<?php $this->load->view('scripts');?>

          
          
</body>
</html>