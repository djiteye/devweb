<?php
session_start();  
?>
<!DOCTYPE html>
<head>
	<title>updatep</title>
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

	<form action="oper3.php" method="post" enctype="multipart/form-data">
		<div class="col-sm-6" style="margin:auto;">
      <h1 align="center">MODIFICATION DE LA PRIME</h1>
      
       <?php
       // session_start();


        //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
       include '../connexion.php';
        // mysqli_select_db($con, 'demo');
         if(isset($_GET['file_id'])){
   $id=$_GET['file_id'];
    $stmt=$db->prepare("SELECT * from validprime Where id=$id ");
          $stmt->execute();
            while($row= $stmt->fetch()){
        ?>
        <div class="mb-3">
  
  <input type="hidden" class="form-control" name="file_id" id="file_id" value="<?php echo $row['id']   ?>" hide>
</div>
<div class="mb-3">
  <label for="titre" class="form-label">type de prime</label>
  <select class="form-select" aria-label="Default select example" name="titre">
  <option selected>choisicez votre type de prime</option>
   <?php
       // session_start();


        //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
   include '../connexion.php';
        // mysqli_select_db($con, 'demo');
          $stmt1=$db->prepare("SELECT titre from prime ");
          $stmt1->execute();
        // $result=mysqli_query($con,$s);
         while($row1= $stmt1->fetch()){
        ?>
  <option name="titre" value="<?php echo $row1['titre'] ?>"><?php echo $row1['titre'] ?></option>
  <?php 
}

  ?>
</select>
  
</div>


<div class="mb-3">
  <label for="description" class="form-label">description</label>
  <textarea class="form-control" id="description" name="description" rows="3">votre prime est prête</textarea>
</div>


<div class="mb-3">
  <label for="montant" class="form-label">Montant</label>
  <input type="number" class="form-control" name="montant" id="montant" placeholder="insert montant...">
</div>

<div class="mb-3">
  <label class="form-check-label" for="fr" >formulaire à remplir: </label>
  <input class="form-check-input" type="checkbox" id="fr" name="ch[]" value="fr">oui
  <input class="form-check-input" type="checkbox" id="fr" name="ch[]" value="">non
</div>
<div class="mb-3">
  <label class="form-check-label" for="pj" >pièce jointe:          </label>
  <input type="file" class="form-control" name="file" id="file" placeholder="insert file">
  <input class="form-check-input" type="checkbox" id="pj" name="ch[]" value="pj">oui
  <input class="form-check-input" type="checkbox" id="pj" name="ch[]" value="">non
</div>


<div class="mb-3">

  <input type="submit" class="btn btn-outline-success" margin="15px" value="valider">
   <button class="btn btn-outline-danger" margin="15px"><a class="e" href="updatep.php?file_id=<?php echo $row['id']   ?>">annuler</a></button>
 <?php
  }
}
 ?>
</div>
</div>
</form>
<div class="mb-3" align="center">
   <button class="btn btn-danger" margin="15px"><a class="e" href="adminpage.php">retour</a></button>
</div>
</body>
</html>