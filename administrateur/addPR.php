<?php
session_start();  
?>
<!DOCTYPE html>
<head>
  <title>add type</title>
  <script type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <style type="text/css">
    a.e{
  text-decoration: none;
  color: cadetblue;
}
  a.az{
  text-decoration: none;
  color: cadetblue;
}
  </style>
</head>

<body>
 <form action="addP.php" method="post" >
  <div class="col-sm-3" style="margin:auto; margin-top: 20px;">
      <div class="mb-3" >
      
          <input type="text" class="form-control"   name="prime" placeholder="inserer la prime ici... ">
        </br>
         <button type="submit" class="btn btn-outline-success" name="add">add</button>
          <button class="btn btn-danger" margin="15px"><a class="e" href="prime.php">annuler</a></button>
       
      </div>
    </div> 
  </form>
</body>
</html>