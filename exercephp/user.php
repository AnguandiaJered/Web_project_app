<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <script src="libs/bootstrap.min.js"></script>
</head>
<body>
<h1>EXERCICE AVEC AJAX</h1><br>
    <form id="forme" autocomplete="off">
        <input type="text" class="col-md-4 offset-1 form-control" id="name" name="name" placeholder="votre nom" required/><br>
        <input type="text" class="col-md-4 offset-1 form-control" id="prenom" name="prenom" placeholder="votre prenom" required/><br>
        <input type="email" class="col-md-4 offset-1 form-control" id="mail" name="mail" placeholder="votre mail" required/><br>
        <input type="text" class="col-md-4 offset-1 form-control" id="password" name="password" placeholder="votre password" required/><br>
        <input type="submit" name="submit" id="submit" class="btn btn-primary col-md-2 offset-1" value="Envoyer" />
    </form>
    <br>
    <div class="container">
    <table class="table table-stripped table-bordered">
    <thead>
    <tr>
    <th>ID</th>
    <th>NOM</th>
    <th>PRENOM</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
    </tr>
    </thead>
    </table>
    </div>
</body>
<script src="jquery.min.js"></script>
<script type="text/javascript" src="users.js"></script>
</html>
