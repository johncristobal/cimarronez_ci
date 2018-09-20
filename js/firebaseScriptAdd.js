/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {
  // Handler for .ready() called.
// Initialize Firebase    
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
      // ...
    });
    
    /*leer las categorias y ponerlas en el combo*/
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

            /*$.each(optionList, function(a, b){
               optionsHTML += "<option>" + childData + "</option>";
            });*/
            select.html(optionsHTML);
            
            /*$(".idfirebase").append( );
            $(".autorfirebase").append( "" );
            $(".fechafirebase").append( "<p style='font-size:12px;'>"+childData["fecha"]+"</p>" );
            $(".descripcionfirebase").append( "<p style='font-size:12px;max-height: 15px;'>"+res+"</p>" );
            $(".updatefirebase").append( "<a href='#' onclick='readDetails();'><img src='"+api+"images/red.png' style='width: 35px; height:35px'></a>");*/
            // ...
        });
        
    });
    
    /*agreaar nota*/    
    $(".addnotice").on("click",function(){        
        var database = firebase.database();
          // Get a key for a new Post.
          var titulo = $("#titulo").val();
          var autor = $("#autor").val();
          var noticia = $("#noticia").val();
          var categoria = $("#categoria").val();
          var fullDate = new Date(); 
          
          var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
 
          var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();

          var newPostKey = database.ref().child('noticias').push().key;
            // Write the new post's data simultaneously in the posts list and the user's post list.
          var updates = {};
            var postData = {
              autor: autor,
              titulo: titulo,
              fecha: currentDate,
              estatus: 1,
              imagen: "",
              categoria: categoria,
              descripcion: noticia
            };
            updates['/noticias/' + newPostKey] = postData;

        var fff =  firebase.database().ref().update(updates,
            function(error){
                if (error) {
                    // The write failed...
                    console.log("Error..."+error);
                } else {
                    // Data saved successfully!
                    console.log("Succesfully...");
                    window.location.href = api+"admin/inicio";
                }
            }
        );
          
          console.log(fff);
    });
});

  
/*function writeUserData(userId, name, email, imageUrl) {
  firebase.database().ref('noticias/' + userId).set({
    username: name,
    email: email,
    profile_picture : imageUrl
  });
}*/

