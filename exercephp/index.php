<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="style/style.css">
	  <!-- <script src="libs/jquery-3.2.1.slim.min.js"></script> -->
	  <script src="libs/bootstrap.min.js"></script>
</head>
<body>
    <nav id="menu" class="navbar navbar-expand-md  navbar-danger fixed-top bg-dark">
        <u class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About-us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Precing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Futures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </u>
    </nav><br><br>
    <br>
    <div class="container">
        <h1>EXERCICE AVEC JQUERY ET AJAX</h1>
         <div class="row" id="con">
           <div class="col-md-8">
             <form class="wow fadeInLeftBig" id="forme">
       
             <div class="row">
                <div class="col-md-10">
                   <div class="form-group">
                   <label class="col-md-2">Nom</label>
                   <input type="text" class="form-control " name="name" id="name" placeholder="votre nom..."
                   required />
                 </label>
               </div>
                </div>
             </div>
       
             <div class="row">
               <div class="col-md-10">
                 <div class="form-group">
                 <label class="col-md-2">Email</label>
                 <input type="text" class="form-control " name="email" id="email" placeholder="example@example.com"
                 required />
       
               </div>
               </div>
             </div>
       
             <div class="row">
               <div class="col-md-10">
                 <div class="form-group">
                 <label class="col-md-2"> Sujet</label>
                   <input type="text" class="form-control" name="subject" id="subject" placeholder="sujet..."
                   required/>
       
               </div>
               </div>
             </div>
       
             <div class="row">
               <div class="col-md-10">
                 <div class="form-group">
                 <label class="col-md-2">Message</label>
                   <textarea class="form-control" name="feedback" id="feedback" placeholder="Votre message ici..."
                   required ></textarea><br>
                   <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Enregistrer" />
               </div>
               </div>
             </div>
           </form>
         </div>   
</body>
<script src="jquery.min.js"></script>
<script type="text/javascript">
    $('document').ready(function(e){
      $('#forme').on('submit',function(e){
        e.preventDefault();
          
      var name=$('#name').val();
      var email=$('#email').val();
      var subject=$('#subject').val();
      var feedback=$('#feedback').val();

      if (name !="" && email !="" && subject !="" && feedback !="") {
        $.ajax({
          url:"insert.php",
          method:"POST",
          data:{
            name:name,
            email:email,
            subject:subject,
            feedback:feedback
          },
          dataType:"text",
         success:function(data){
           if (data==0) {
             alert("il existe");
           }
           else{
              alert("inserer avec succes");
              $('#name').val("");
              $('#email').val("");
              $('#subject').val("");
              $('#feedback').val("");
           }
         }
        });
      }
    });
    });
</script>
</html>