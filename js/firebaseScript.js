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

    /*var noticias = firebase.database().ref('noticias');
    noticias.on('value', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();
            $(".idfirebase").append( "<p style='font-size:12px;'>"+childKey+"</p>" );
            // ...
        });
        
    });*/
    
    
    $(".addnota").on("click",function(){
        window.location.href = api+"admin/nuevanota";
    });
});

/*var database = firebase.database();
  // Get a key for a new Post.
  var newPostKey = database.ref().child('noticias').push().key;
    // Write the new post's data simultaneously in the posts list and the user's post list.
  var updates = {};
    var postData = {
      author: "a",
      uid: "b",
      authorPic: "picture"
    };
    updates['/noticias/' + newPostKey] = postData;

  var fff =  firebase.database().ref().update(updates);*/
  
/*function writeUserData(userId, name, email, imageUrl) {
  firebase.database().ref('noticias/' + userId).set({
    username: name,
    email: email,
    profile_picture : imageUrl
  });
}*/
