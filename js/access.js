/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var config = {
  apiKey: "AIzaSyCDIAgpAbKjKaAz7b6tPVU-6LQ3yxqC3L8",
  authDomain: "cimarronez.firebaseapp.com",
  databaseURL: "https://cimarronez.firebaseio.com",
  projectId: "cimarronez",
  storageBucket: "cimarronez.appspot.com",
  messagingSenderId: "636958785849"
};

firebase.initializeApp(config);

firebase.auth().signInWithEmailAndPassword("cristobaljohn00@gmail.com", "KIRAyagami90").catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  alert(errorCode);
  // ...
});