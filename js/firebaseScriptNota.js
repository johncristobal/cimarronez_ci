
$( document ).ready(function() {
    
//=========================  /*show noticias*/  ================================= 
    $(".load").show();
    var noticias = firebase.database().ref('noticias').orderByChild('estatus').equalTo(1);
    noticias.on('value', function(snapshot) {
        var arreglo = [];
        snapshot.forEach(function(childSnapshot) {
            arreglo.push(childSnapshot);
        });
        
        arreglo.reverse();
        
        arreglo.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();

            var res = childData["titulo"];//.substring(0, 200);
            var id = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childKey+"</p></div><div class='col-xs-6 text-center visible-xs'><p style='font-size:16px;'>Id: "+childKey+"</p></div>";
            var autor = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childData["autor"]+"</p></div><div class='col-xs-12 visible-xs'><p style='font-size:16px;'>Autor: "+childData["autor"]+"</p></div>";
            var nota = "<div class='col-md-4 text-center hidden-xs'><p style='font-size:18px;'>"+res+"</p></div><div class='col-xs-12 visible-xs'><p style='font-size:16px;'>Titulo: "+res+"</p></div>";
            var fecha = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childData["fecha"]+"</p></div><div class='col-xs-6 visible-xs'><p style='font-size:16px;'>"+childData["fecha"]+"</p></div>";
            var img = "<div class='col-md-1 text-center hidden-xs'><a onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/admin/update.png' style='width: 45px; height:45px'></a></div>  <div class='col-xs-3 visible-xs text-rigth'><a onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/admin/update.png' style='width: 45px; height:45px; position: relative; top: -30px;'></a></div>";
            var delet = "<div class='col-md-1 text-center hidden-xs'><a onclick='deleteNote(\""+childKey+"\");'><img src='"+api+"images/admin/delete.png' style='width: 35px; height:35px'></a></div>  <div class='col-xs-3 visible-xs text-rigth'><a onclick='deleteNote(\""+childKey+"\");'><img src='"+api+"images/admin/delete.png' style='width: 35px; height:35px; position: relative; top: -30px;'></a></div>";
            var divisor = "<div class='col-xs-12 visible-xs'><hr></div>";
            $(".filas").append(
                "<div class='row'>"+
                //id+
                autor+
                nota+
                fecha+
                img+
                delet+
            "</div>");
        });
        $(".load").fadeOut('1500');
    });
    
    $(".addnota").on("click",function(){
        window.location.href = api+"admin/nuevanota";
        //post();
    }); 
});

function deleteNote(id){
    if(confirm('¿Deseas eliminar la noticia?')){
        var postData = {
            estatus: 0
            //likes:0
        };

        var fff = firebase.database().ref('/noticias/' + id).update(postData,
            function(error){
                if (error) {
                    // The write failed...
                    console.log("Error..."+error);
                } else {
                    // Data saved successfully!
                    console.log("Succesfully update...");
                    window.location.href = api+"admin/inicio";
                }
            }
        );
    }
}

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

function post() {
        $.ajax({
            type : 'POST',
            url : "https://fcm.googleapis.com/fcm/send",
            headers : {
                Authorization : 'key=' + 'AIzaSyAbS9ED0SyTkBaBlE_KQUupo5dPYMCtUto'
            },
            contentType : 'application/json',
            data : JSON.stringify({"to": "videos", "data": {"message": "This is push for video!"}})
            /*data : {
              "to": "/topics/videos",
              "data": {
                "message": "This is push for video!"
               }
            }*/,
            success : function(response) {
                console.log(response);
            },
            error : function(xhr, status, error) {
                console.log(xhr.error);                   
            }
        }); 
        }
        