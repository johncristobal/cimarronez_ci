
$( document ).ready(function() {

    //Initialize Firebase
    var config = {
      apiKey: "AIzaSyCDIAgpAbKjKaAz7b6tPVU-6LQ3yxqC3L8",
      authDomain: "cimarronez.firebaseapp.com",
      databaseURL: "https://cimarronez.firebaseio.com",
      projectId: "cimarronez",
      storageBucket: "cimarronez.appspot.com",
      messagingSenderId: "636958785849"
    };

    firebase.initializeApp(config);

    firebase.auth().signInWithEmailAndPassword("cristobaljohn00@gmail.com", "KIRAyagami99").catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      alert(errorCode);
      // ...
    });

//=========================  /*agregar categorias*/  =========================== 
    var optionsHTML = "";
    var noticias = firebase.database().ref('categorias');
    noticias.on('value', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();

            var select  = $("#categoria");
            select.html("");
            optionsHTML += "<option value='"+childKey+"' style='color:gray;'>" + childData + "</option>";

            select.html(optionsHTML);
        });
    });
    
//=========================  /*if nota get */  ================================= 
    if (idnota != "" && idnota != undefined){
        debugger;
        //var userId = firebase.auth().currentUser.uid;
        firebase.database().ref('/noticias/' + idnota).once('value').then(function(snapshot) {
            debugger;
            var titulo = snapshot.val().titulo;
            $("#titulo").val(titulo);
            $("#autor").val(snapshot.val().autor);
            $("#noticia").val(snapshot.val().descripcion);
            $("#categoria").val(snapshot.val().categoria).change();
            
            if(snapshot.val().imagen != ""){
                //cargar la imgen de firebase en img
                var storage = firebase.storage();
                var storageRef = storage.ref();
                var uploadTask = storageRef.child('noticias/'+idnota+'/foto0.jpg').getDownloadURL().then(function(url) {
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
                //img.src = url;
              }).catch(function(error) {
                // Handle any errors
              });

            }            
        });        
    }

//=========================  /*show noticia*/  ================================= 
    $(".load").show();
    var noticias = firebase.database().ref('noticias');
    noticias.on('value', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();

            var res = childData["descripcion"].substring(0, 200);
            var id = "<div class='col-md-2 text-center'><p style='font-size:12px;'>"+childKey+"</p></div>";
            var autor = "<div class='col-md-2 text-center'><p style='font-size:12px;'>"+childData["autor"]+"</p></div>";
            var nota = "<div class='col-md-4 text-center'><p style='font-size:12px;'>"+res+"</p></div>";
            var fecha = "<div class='col-md-2 text-center'><p style='font-size:12px;'>"+childData["fecha"]+"</p></div>";
            var img = "<div class='col-md-2 text-center'><a href='#' onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/red.png' style='width: 35px; height:35px'></a></div>";
            $(".filas").append(
                "<div class='row'>"+
                id+
                autor+
                nota+
                fecha+
                img+
            "</div>");
        });
        $(".load").fadeOut('1500');
    });

//=========================  /*agregar nota*/  =================================  
    $(".addnotice").on("click",function(){  
        
        //si idnota es != "", entonces es actualizar
        //si no agregar...
        var database = firebase.database();
        // Get a key for a new Post.
        var titulo = $("#titulo").val();
        var autor = $("#autor").val();
        var noticia = $("#noticia").val();
        var categoria = $("#categoria").val();

        var imagen = "";
        if (indiceChange != undefined){        
            var imagen = "foto0.jpg";//$("#foto0").files[0];
        }

        var fullDate = new Date(); 
        var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
        var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
        $(".load").show();
        
        if (idnota != "" && idnota != undefined){
            var postData = {
                id: idnota,
                autor: autor,
                titulo: titulo,
                fecha: currentDate,
                estatus: 1,
                imagen: imagen,
                categoria:parseInt(categoria),
                descripcion: noticia
                //likes:0
            };
            var updates = {};
            updates['/noticias/' + idnota] = postData;
            
            var fff =  firebase.database().ref().update(updates,
                function(error){
                    if (error) {
                        // The write failed...
                        console.log("Error..."+error);
                    } else {
                        // Data saved successfully!
                        console.log("Succesfully...");
                        //window.location.href = api+"admin/inicio";
                    }
                }
            );
        }else{

            var newPostKey = database.ref().child('noticias').push().key;
              // Write the new post's data simultaneously in the posts list and the user's post list.
            var updates = {};
            var postData = {
                id: newPostKey,
                autor: autor,
                titulo: titulo,
                fecha: currentDate,
                estatus: 1,
                imagen: imagen,
                categoria:parseInt(categoria),
                descripcion: noticia,
                likes:0
            };

            updates['/noticias/' + newPostKey] = postData;
            
            var fff =  firebase.database().ref().update(updates,
                function(error){
                    if (error) {
                        // The write failed...
                        debugger;
                        console.log("Error..."+error);
                    } else {
                        // Data saved successfully!
                        console.log("Succesfully...");
                        //window.location.href = api+"admin/inicio";
                        //window.location.href = api+"admin/inicio";
                    }
                }
            );
    //=========================  /*upload imagen*/ ================================= 
            if (imagen != ""){

                var storage = firebase.storage();

                // Create a storage reference from our storage service
                var storageRef = storage.ref();        
                if (idnota != "" && idnota != undefined){
                    newPostKey = idnota;
                }
                var uploadTask = storageRef.child('noticias/'+newPostKey+'/foto0.jpg').put(indiceChange);

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
                window.location.href = api+"admin/inicio";

                });
            }else{
                $(".load").fadeOut('1500');
                window.location.href = api+"admin/inicio";
            }

            console.log(fff);
        }
    });
    
    $(".detalles").on("click",function(){
        //var id = $(this).closest('idfirebase').find('p').attr(id)
    });
    
    $(".addnota").on("click",function(){
        window.location.href = api+"admin/nuevanota";
    }); 
});

var indiceChange;
var idnota;

function validar(elemento){
    //del elemento seleccionadosubo y actualizo foto del respectivo indice
    //alert(elemento);
    //indiceChange = indice;
    //$("#message").empty(); // To remove the previous error message
    indiceChange = elemento.files[0];
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
    $('#previewing').attr('src', e.target.result);
    //$('#previewing').attr('width', '250px');
    //$('#previewing').attr('height', '230px');
};

function readDetails(id){
    
    //ajax to save in session id nota
    //$("#message").empty();
    //$('#loading').show();
    $.ajax({
        url: api+"admin/saveidnota", // Url to which the request is send
        type: "post",             // Type of request to be send, called as method
        data: {idnota : id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        success: function(data)   // A function to be called if request succeeds
        {
            //alert(data);
            window.location.href = api+"admin/editarnota";
            //$('#loading').hide();
            //$("#message").html(data);
        },
        error: function(datae){
            alert("error");
        }
    });
    //idnota = id;    
}
