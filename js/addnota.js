    
var indiceChange;
var idnota;
var borrarfoto = false;
var tempIndex = 0;

$( document ).ready(function() {    

//=========================  /*agregar categorias*/  =========================== 
    $(".load").show();
    $("#deleteImage").hide();
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
        //debugger;
        //var userId = firebase.auth().currentUser.uid;
        firebase.database().ref('/noticias/' + idnota).once('value').then(function(snapshot) {
            //debugger;
            var titulo = snapshot.val().titulo;
            $("#titulo").val(titulo);
            $("#autor").val(snapshot.val().autor);
            $("#noticia").val(snapshot.val().descripcion);
            $("#categoria").val(snapshot.val().categoria).change();
            
            if(snapshot.val().imagen != ""){
                indiceChange = "1";
                $("#deleteImage").show();

                //cargar la imgen de firebfirebase.storagease en img
                var storage = firebase.storage();
                var storageRef = storage.ref();
                var uploadTask = storageRef.child('noticias/'+idnota+'/foto0.jpg').getDownloadURL().then(function(url) {
                // `url` is the download URL for 'images/stars.jpg'
                
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
        var autor = $("#autor").val();
        var noticia = $("#noticia").val();
        var categoria = $("#categoria").val();

        var imagen = "";
        if (indiceChange != undefined){
            for(var i=0;i<indiceChange.length;i++){
                if(indiceChange[i] != undefined){
                    imagen += "foto"+i+".jpg,";
                }
            }
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
                        console.log("Succesfully loaded...");
                        //window.location.href = api+"admin/inicio";
                        //window.location.href = api+"admin/inicio";
                    }
                }
            );
        }
//=========================  /*delete imagen*/ =================================
        if(borrarfoto){
            borrarfoto = false;
            // Create a reference to the file to delete
            var storage = firebase.storage();
            if (idnota != "" && idnota != undefined){
                newPostKey = idnota;
            }
            // Create a storage reference from our storage service
            var storageRef = storage.ref(); 
            var desertRef = storageRef.child('noticias/'+newPostKey+'/foto0.jpg');//.getDownloadURL().then(function(url) {

            // Delete the file
            desertRef.delete().then(function() {
              // File deleted successfully
            }).catch(function(error) {
              // Uh-oh, an error occurred!
            });
        }        
//==============================upload image================================================
        if (imagen != "" && indiceChange != "1"){

            var storage = firebase.storage();

            // Create a storage reference from our storage service
            var storageRef = storage.ref();        
            if (idnota != "" && idnota != undefined){
                newPostKey = idnota;
            }
            var tempind = indiceChange.length;
            for(var i=0;i<indiceChange.length;i++){
                if(indiceChange[i] != undefined){
                    var uploadTask = storageRef.child('noticias/'+newPostKey+'/foto'+i+'.jpg').put(indiceChange[i]);

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
                        if(tempind == i)
                        {
                            post(noticia,titulo);
                        }
                      //post(noticia,titulo);
                    }, function() {
                        // Handle successful uploads on complete
                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                          console.log('File available at', downloadURL);

                          if(tempind == i)
                          {
                              post(noticia,titulo);
                          }
                           
                        });
                    });
                }
            }
        }else{
            post(noticia,titulo);
            //$(".load").fadeOut('1500');
            //window.location.href = api+"admin/inicio";
        }

        console.log(fff);
    });    
});

function validar(elemento){
    //del elemento seleccionadosubo y actualizo foto del respectivo indice
    //alert(elemento);
    //indiceChange = indice;
    //$("#message").empty(); // To remove the previous error message
    if(indiceChange == undefined){
        tempIndex = 0;
        indiceChange = elemento.files;
    }else{
        indiceChange.dataTransfer.files.push(elemento.files);
        tempIndex = indiceChange.lenght;
    }
    //$("#imagenes").empty();
    //var file = elemento.files[0];
    for(var i=0;i<elemento.files.length;i++){
    //elemento.files.forEach(function(file) {
        var file = elemento.files[i];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
            //$('#previewing').attr('src','<?php echo base_url();?>img/profile.jpg');
            //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
            //return false;
            console.log("nothing");
        }
        else
        {
            //tempIndex = i;
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            //reader.readAsDataURL(elemento.files[0]);
            reader.readAsDataURL(file);
        }
    }//);
}
 
    
function imageIsLoaded(e) {
    //$("#foto"+indiceChange).css("color","green");
    //$('#image_preview').css("display", "none");

    //$("#deleteImage").show();
    $("#imagenes").append(
        "<div class='row' id='row"+tempIndex+"'>"+
            "<div class='col-xs-4 col-sm-4'>"+
                "<img src='"+e.target.result+"' width='100%' height='30%' id='imagen"+tempIndex+"'>"+   
            "</div>"+
            "<div class='col-xs-6 col-sm-6'><button class='btn btn-danger' onclick='borrariamgen("+tempIndex+")'>Borrar imagen</button></div>"+
        "</div><br>");
    tempIndex++;
    
    //$('#previewing').attr('src', e.target.result);
    
    //$('#previewing').attr('width', '250px');
    //$('#previewing').attr('height', '230px');
};

function borrariamgen(i){
    indiceChange[i] = undefined;
    $("#row"+i).hide();
}

//============================= after delete photo and save iamge, now launch push==========        
function post(mensaje, titulo) {
    var tokens = [];

    var noticias = firebase.database().ref('tokens').orderByChild('estatus').equalTo(1);
    noticias.on('value', function(snapshot) {

        snapshot.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();

            var res = childData["token"];
            tokens.push(res);
        });

        $.ajax({
            type : 'POST',
            url : "https://fcm.googleapis.com/fcm/send",
            headers : {
                Authorization : 'key=' + 'AIzaSyAbS9ED0SyTkBaBlE_KQUupo5dPYMCtUto'
            },
            contentType : 'application/json',
            data : 
                JSON.stringify(
                    {
                        "registration_ids": tokens,//["dBa2H8mVbKQ:APA91bE5RVk6ZxqV_b1btSUh3zS2DBkc9S-96iOsT4Az1qKlJoIQxRYcvKxojh3R4FDQq1B_CEGkru9PhLxNJl1DxqwVMrwVZFI1EHmBgo-rz2KHpT92WwM17SWNms9JglRLNEU1mWqt","f1qdQHnfMWY:APA91bEgdAYvm6-jAUJNUdlFzWBzaGL-8xMcrCus7ALNIcxY4n6ZLy5K0vX-VWS71L3VMpI2DL6j3ywhnHeeLRWIMpxRQs0MJ25fJmEEW9LMQ95OYsPKGnjxdCogU22MuAFkDBqPYUuc"],
                        //"topic" : "foo-bar",            
                        //"to" : "/topics/foo-bar",
                        "priority" : "high",
                        /*"notification" : {
                            "body" : "This is a Firebase Cloud Messaging Topic Message!",
                            "title" : "FCM Message",
                        }*/
                        "data":
                        {
                            "text": mensaje,
                            "title" : titulo
                        }
                    }
                ),            
            success : function(response) {

                console.log("push yes");
                console.log(response);
                //wheb complete upload, back page
                $(".load").fadeOut('1500');
                window.location.href = api+"admin/inicio";

            },
            error : function(xhr, status, error) {
                console.log("push no");
                console.log(xhr.error);                   
            }
        }); 
    });
}
       