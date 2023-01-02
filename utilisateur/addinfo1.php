 <?php 
session_start();
 ?>
 <!DOCTYPE html>
<head>
	<title>add info1</title>
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

	<form action="oper2.php" method="post">
		<div class="col-sm-6" style="margin:auto;">
	<div class="mb-3">
  <label for="username" class="form-label">username</label>
  <select class="form-control" id="username" name="username" placeholder="username ">
  	<option value="<?php echo $_SESSION['username'] ?>"><?php echo $_SESSION['username'] ?></option>
  </select>
</div>
<div class="mb-3">
  <label for="msg" class="form-label">rediger votre message à passer</label>
  <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-outline-success" name="add" vlaue="add">
  
   <button class="btn btn-outline-danger" margin="15px"><a class="e" href="addinfo1.php">annuler</a></button>
</div>
</div>
</form>

</body>
</html>