<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer</title>
   
</head>
<body>
<h1 class="text-center"> Editer Etudiant</h1>

<div class="container">
<form action="update.php" method="post">
  <div class="form-group">
      <label for="firstname">firstname</label>
      <input type="text" name="firstname" class="form-control" >

      <label for="lastname">lastname</label>
      <input type="text" name="lastname" class="form-control" >
  </div>

  <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" name="email" class="form-control">

      <label for="phone">Phone</label>
      <input type="number" name="phone" class="form-control">
  </div>

  <div class="form-group">
 
  <button type="submit" class="btn btn-outline-enregistrer">Save</button>
 
  <button type="reset" class="btn btn-default">Return</button>
  </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>