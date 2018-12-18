    
var indiceChange;
var idnota;
var borrarfoto = false;

$( document ).ready(function() {    
    
//=========================  /*if nota get */  ================================= 
    if (idnota != "" && idnota != undefined){
        //debugger;
        //var userId = firebase.auth().currentUser.uid;
        firebase.database().ref('/mapas/' + idnota).once('value').then(function(snapshot) {
            //debugger;
            var titulo = snapshot.val().titulo;
            $("#titulo").val(titulo);
            $("#descripcion").val(snapshot.val().descripcion);
            $("#poblacion").val(snapshot.val().poblacion);
            $("#imagenMapa").val(snapshot.val().imagen);
            
            if(snapshot.val().imagen != ""){
                indiceChange = "1";//snapshot.val().imagen;
                $("#deleteImage").show();

                //cargar la imgen de firebfirebase.storagease en img
                var storage = firebase.storage();
                var storageRef = storage.ref();
                var uploadTask = storageRef.child('mapas/'+snapshot.val().imagen).getDownloadURL().then(function(url) {
                // `url` is the download URL for 'images/stars.jpg'

                // This can be downloaded directly:
                /*var xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = function(event) {
                  var blob = xhr.response;
                };
                xhr.open('GET', url);
                xhr.send();*/

                // Or inserted into an <img> element:
                //$('#previewing').attr('src', e.target.result);
                var img = $('#previewing');//document.getElementById('myimg');
                $('#previewing').attr('src', url);
                $(".load").fadeOut('1500');

                //img.src = url;
              }).catch(function(error) {
                // Handle any errors
                alert(error);
                $(".load").fadeOut('1500');

              });
            }    
            else{
                $(".load").fadeOut('1500');
            }        
        });        
    }
    else{
        $(".load").fadeOut('1500');        
    }
    
    $("#deleteImage").on("click",function(){
        //borramos imagene y ponemos indice en undefined
        indiceChange = undefined;
        borrarfoto = true;
        $("#deleteImage").hide();
        $('#previewing').attr('src','<?php echo base_url();?>images/galaxy.jpg');
    });
    
//=========================  /*agregar nota*/  =================================  
    $(".addnotice").on("click",function(){  
        
        //si idnota es != "", entonces es actualizar
        //si no agregar...
        var database = firebase.database();
        // Get a key for a new Post.
        var titulo = $("#titulo").val();
        var descripcion = $("#descripcion").val();
        var noticia = $("#poblacion").val();
        //var categoria = $("#categoria").val();

        var imagen = "";
        if (indiceChange != undefined){        
            imagen = $("#imagenMapa").val();
            //$("#foto0").files[0];
        }

        //var fullDate = new Date(); 
        //var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
        //var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
        $(".load").show();
        
        if (idnota != "" && idnota != undefined){
            var postData = {
                id: idnota,
                //autor: autor,
                titulo: titulo,
                descripcion: descripcion,
                estatus: 1,
                imagen: imagen,
                //categoria:parseInt(categoria),
                poblacion: noticia
                //likes:0
            };
            var updates = {};
            updates['/mapas/' + idnota] = postData;
            
            var fff = firebase.database().ref().update(updates,
                function(error){
                    if (error) {
                        // The write failed...
                        console.log("Error..."+error);
                    } else {
                        // Data saved successfully!
                        console.log("Succesfully update...");
                        //window.location.href = api+"admin/inicio";
                    }
                }
            );
        }else{
            var newPostKey = database.ref().child('mapas').push().key;
              // Write the new post's data simultaneously in the posts list and the user's post list.
            var updates = {};
            var postData = {
                id: newPostKey,
                //autor: autor,
                titulo: titulo,
                poblacion: noticia,
                estatus: 1,
                imagen: imagen,
                //categoria:parseInt(categoria),
                descripcion: descripcion,
                //likes:0
            };

            updates['/mapas/' + newPostKey] = postData;
            
            var fff =  firebase.database().ref().update(updates,
                function(error){
                    if (error) {
                        // The write failed...
                        debugger;
                        console.log("Error..."+error);
                    } else {
                        // Data saved successfully!
                        console.log("Succesfully loaded...");
                        //window.location.href = api+"admin/inicio";
                        //window.location.href = api+"admin/inicio";
                    }
                }
            );
        }
//=========================  /*upload imagen*/ =================================
        
        if(borrarfoto){
            borrarfoto = false;
            // Create a reference to the file to delete
            var storage = firebase.storage();
            if (idnota != "" && idnota != undefined){
                newPostKey = idnota;
            }
            // Create a storage reference from our storage service
            var storageRef = storage.ref(); 
            var desertRef = storageRef.child('mapas/'+newPostKey+'/foto0.jpg');//.getDownloadURL().then(function(url) {

            // Delete the file
            desertRef.delete().then(function() {
              // File deleted successfully
            }).catch(function(error) {
              // Uh-oh, an error occurred!
            });
        }

//============================= after delete photo and save iamge, now launch push==========        
        
        if (imagen != "" && indiceChange != "1"){

            var storage = firebase.storage();

            // Create a storage reference from our storage service
            var storageRef = storage.ref();        
            if (idnota != "" && idnota != undefined){
                newPostKey = idnota;
            }
            var uploadTask = storageRef.child('mapas/'+imagen).put(indiceChange);

            // Register three observers:
            // 1. 'state_changed' observer, called any time the state changes
            // 2. Error observer, called on failure
            // 3. Completion observer, called on successful completion
            uploadTask.on('state_changed', function(snapshot){
              // Observe state change events such as progress, pause, and resume
              // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
              var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              console.log('Upload is ' + progress + '% done');
              switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                  console.log('Upload is paused');
                  break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                  console.log('Upload is running');
                  break;
              }
            }, function(error) {
              // Handle unsuccessful uploads
              $(".load").fadeOut('1500');
            }, function() {
              // Handle successful uploads on complete
              // For instance, get the download URL: https://firebasestorage.googleapis.com/...
              uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                console.log('File available at', downloadURL);
                $(".load").fadeOut('1500');
              });

              //wheb complete upload, back page
            window.location.href = api+"admin/mapas";

            });
        }else{
            $(".load").fadeOut('1500');
            window.location.href = api+"admin/mapas";
        }

        console.log(fff);
    });    
});

function validar(elemento){
    //del elemento seleccionadosubo y actualizo foto del respectivo indice
    //alert(elemento);
    //indiceChange = indice;
    //$("#message").empty(); // To remove the previous error message
    indiceChange = elemento.files[0];
    $("#imagenMapa").attr('value',elemento.files[0].name);
    var file = elemento.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
        $('#previewing').attr('src','<?php echo base_url();?>img/profile.jpg');
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
    //$("#foto"+indiceChange).css("color","green");
    //$('#image_preview').css("display", "none");
    
    $("#deleteImage").show();
    $('#previewing').attr('src', e.target.result);

    //$('#previewing').attr('width', '250px');
    //$('#previewing').attr('height', '230px');
};