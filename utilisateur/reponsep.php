 <?php
session_start();  
?>
 <!DOCTYPE html>
<head>
	<title>reponse prime formulaire</title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<style type="text/css">
		 a.e{
  text-decoration: none;
  color: cadetblue;
}
	</style>
</head>

<body>
 

	<form action="respo.php" method="post" enctype="multipart/form-data">
		<div class="col-sm-6" style="margin:auto;">
      <h1 align="center">POSTULER A LA PRIME</h1>
      <div class="mb-3">
  <select class="form-control" id="titre" name="titre" placeholder="titre ">
      <?php
       // session_start();


        //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
      include '../connexion.php';
        // mysqli_select_db($con, 'demo');
         if(isset($_GET['file_id'])){
          $id=$_GET['file_id'];
          $stmt=$db->prepare("SELECT titre from validprime Where id=$id");
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>
    <option value="<?php echo $row['titre'] ?>"><?php echo $row['titre']    ?></option>
    <?php
  }
}
  ?>
  </select> 
</div>  
<div class="mb-3">
  <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom et Prenom ">
</div>	
<div class="mb-3">
  <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule ">
</div>	
<div class="mb-3">
  <input type="text" class="form-control" id="division" name="division" placeholder="Division/CR ">
</div>	
<div class="mb-3">
  <input type="number" class="form-control" id="tel" name="tel" placeholder="Numero Tel ">
</div>
<div class="mb-3">
  <input type="text" class="form-control" id="rib" name="rib" placeholder="RIB">
</div>	
<div class="mb-3">
  <input type="date" class="form-control" id="dat" name="dat" placeholder="Date ">
</div>	

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">inserer votre pièce d'identité</label>
  <input type="file" class="form-control" name="file" id="file" placeholder="insert reservation">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-outline-success" name="add" value="valider">valider</button>
 
</div>
</div>
</form>
<div class="mb-3" align="center">
   <button class="btn btn-danger" margin="15px"><a class="e" href="userspage.php">retour</a></button>
</div>
</body>
</html>