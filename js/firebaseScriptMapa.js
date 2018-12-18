
$( document ).ready(function() {
    
//=========================  /*show noticias*/  ================================= 
    $(".load").show();
    var noticias = firebase.database().ref('mapas').orderByChild('estatus').equalTo(1);
    noticias.on('value', function(snapshot) {
        var arreglo = [];
        snapshot.forEach(function(childSnapshot) {
            arreglo.push(childSnapshot);
        });
        
        //arreglo.reverse();
        
        arreglo.forEach(function(childSnapshot) {
            //debugger;
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();

            var res = childData["titulo"];//.substring(0, 200);
            var id = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childKey+"</p></div><div class='col-xs-6 text-center visible-xs'><p style='font-size:16px;'>Id: "+childKey+"</p></div>";
            //var autor = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childData["autor"]+"</p></div><div class='col-xs-12 visible-xs'><p style='font-size:16px;'>Autor: "+childData["autor"]+"</p></div>";
            var nota = "<div class='col-md-4 text-center hidden-xs'><p style='font-size:18px;'>"+res+"</p></div><div class='col-xs-12 visible-xs'><p style='font-size:16px;'>Titulo: "+res+"</p></div>";
            var descripcion = "<div class='col-md-2 text-center hidden-xs'><p style='font-size:18px;'>"+childData["descripcion"]+"</p></div><div class='col-xs-6 visible-xs'><p style='font-size:16px;'>Descripciòn: "+childData["descripcion"]+"</p></div>";
            var img = "<div class='col-md-1 text-center hidden-xs'><a onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/admin/update.png' style='width: 45px; height:45px'></a></div>  <div class='col-xs-3 visible-xs text-rigth'><a onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/admin/update.png' style='width: 45px; height:45px; position: relative; top: -17px;'></a></div>";
            var delet = "<div class='col-md-1 text-center hidden-xs'><a onclick='deleteNote(\""+childKey+"\");'><img src='"+api+"images/admin/delete.png' style='width: 35px; height:35px'></a></div>  <div class='col-xs-3 visible-xs text-rigth'><a onclick='deleteNote(\""+childKey+"\");'><img src='"+api+"images/admin/delete.png' style='width: 35px; height:35px; position: relative; top: -17px;'></a></div>";
            var divisor = "<div class='col-xs-12 visible-xs'><hr></div>";
            $(".filas").append(
                "<div class='row'>"+
                //id+
                //autor+
                nota+
                descripcion+
                img+
                delet+
            "</div>");
        });
        $(".load").fadeOut('1500');
    });
    
    $(".addmapa").on("click",function(){
        window.location.href = api+"admin/nuevomapa";
        //post();
    }); 
});

function deleteNote(id){
    if(confirm('¿Deseas eliminar este mapa?')){
        var postData = {
            estatus: 0
            //likes:0
        };

        var fff = firebase.database().ref('/mapas/' + id).update(postData,
            function(error){
                if (error) {
                    // The write failed...
                    console.log("Error..."+error);
                } else {
                    // Data saved successfully!
                    console.log("Succesfully update...");
                    window.location.href = api+"admin/mapas";
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
        url: api+"admin/saveidmapa", // Url to which the request is send
        type: "post",             // Type of request to be send, called as method
        data: {idmapa : id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        success: function(data)   // A function to be called if request succeeds
        {
            //alert(data);
            window.location.href = api+"admin/editarmapa";
            //$('#loading').hide();
            //$("#message").html(data);
        },
        error: function(datae){
            alert("error");
        }
    });
    //idnota = id;    
}
        