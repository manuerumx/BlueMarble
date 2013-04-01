function bmcheckuser(user){    
    $.ajax({
        type: 'POST',
        url:'inc/bm_functionality.php',        
        data: {usr: user},
        dataType: "html",
        statusCode:{
            404: function(){
                alert("Page not found");
                Resp = "Error";
            }
        },
        success:function(response){
            Resp = response;
        }
    });    
}

function bmcheckemail(){}