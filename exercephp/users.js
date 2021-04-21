
$('document').ready(function(e){
    $('#forme').on('submit',function(e){
        e.preventDefault();
        var name=$('#name').val();
        var prenom=$('#prenom').val();
        var mail=$('#mail').val();
        var password=$('#password').val();

        if (name !="" && prenom !="" && mail !="" && password !="") {
            $.ajax({
                url:"adduser.php",
                method:"POST",
                data:{
                    name:name,
                    prenom:prenom,
                    mail:mail,
                    password:password
                },
                dataType:"text",
                success:function(data){
                    if (data==0) {
                        alert("il existe");
                    }else{
                        alert("inserer avec succes");
                        $('#name').val("");
                        $('#prenom').val("");
                        $('#mail').val("");
                        $('#password').val("");
                    }
                }
            });
        }
    });
});