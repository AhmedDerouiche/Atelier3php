<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>création</title>
</head>
<body>
<fieldset>
<h1>Nouvel Etudiant</h1>

<div class="container">
<form action="store.php" method="post">  

<div class="form-group">  
    <label for="firstname">firstname</label>
    <input type="text" name="firstname"   class="form-control" id="firstname">
</div>
<div class="class="form-group"">  
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname"   class="form-control" id="lastname">
</div>

    <br>
    <div class="class="form-group"">  
    <label for="email">E-mail</label>
    <input type="text" name="email"   class="form-control"id="email">
    </div>
    <br>
    <div class="class="form-group"">  
    <label for="phone">Phone</label>
    <input type="text" name="phone"   class="form-control"id="phone">
    </div>
    
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
    <button type="reset" class="btn btn-danger">Retour</button>

</form>
</div>
</fieldset>






















    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>