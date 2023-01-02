<?php
session_start();  
?>
<!DOCTYPE html>
<head>
	<title>addev</title>
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

		<div class="col-sm-10" style="margin:auto;" align="center">
			<div class="mb-3">
 <?php
//session_start();

  //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
        // mysqli_select_db($con, 'demo');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');
   if(isset($_GET['file_id'])){
   $id=$_GET['file_id'];
   $db="SELECT * from evenement Where id=$id";

  $result=mysqli_query($con,$db);
    $file=mysqli_fetch_assoc($result);
 $filePath= "../file/".$file['file'];
 if(file_exists($filePath)){
 
        ?>
        <embed type="application/pdf" src="../file/<?php echo $file['file']  ?>" width="1000px" height="500px"></embed>
       </br></br>
         <?php
       
           $num=mysqli_num_rows($result);
         
          if($num == 1){
             $db = new PDO('mysql:dbname=demo;host=localhost','root','');
        // mysqli_select_db($con, 'demo');
          $stmt=$db->prepare("SELECT * from evenement Where id=$id");
          $stmt->execute();

            while ($row=$stmt->fetch()) {
              $tit=$row['titre'];
              // code...
          //$row=$stmt->fetch()
         ?>
          <textarea class="form-control" id="commentaire" name="commentaire" rows="3"><?php echo $row['commentaire']    ?></textarea>
          </br></br>
    <?php
      }}}
      else{
      	echo "file not exit";
      }
    }
      ?>
        </div>
<div class="mb-3">
  <label for="commentaire" class="form-label">description</label>
  <textarea class="form-control" id="commentaire" name="commentaire" rows="3"></textarea>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-outline-success" name="add" value="add">add</button>
  <button class="btn btn-outline-danger" margin-left="10px"><a class="e" href="userspage.php">retour</a></button>
</div>
</div>
</body>
</html>