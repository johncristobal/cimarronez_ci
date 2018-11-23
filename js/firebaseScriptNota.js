
$( document ).ready(function() {
    
//=========================  /*show noticias*/  ================================= 
    $(".load").show();
    var noticias = firebase.database().ref('noticias').orderByChild('estatus').equalTo(1);
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
            var img = "<div class='col-md-1 text-center'><a href onclick='readDetails(\""+childKey+"\");'><img src='"+api+"images/red.png' style='width: 35px; height:35px'></a></div>";
            var delet = "<div class='col-md-1 text-center'><a href onclick='deleteNote(\""+childKey+"\");'><img src='"+api+"images/red.png' style='width: 35px; height:35px'></a></div>";
            $(".filas").append(
                "<div class='row'>"+
                id+
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
