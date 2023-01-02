<?php
session_start();  
?>
<!DOCTYPE html>
<head>
	<title>adminpage</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	 <style type="text/css">
    body>div{
    min-height: 10vh;
    display: flex;
    font-family: 'Roboto', sans-serif;

}
div.table_responsive {
    
    
    background-color: #efefef33;
    
    overflow: auto;
    margin: auto;
    border-radius: 4px;

    
}
li.nav-item{
  padding: 10px;
}
table {
    width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
    text-align: center;
}
table>thead {
    background-color: cadetblue;
    color: #fff;
}
table>thead.a {
    background-color: brown;
    color: #fff;
}
table>thead th {
    padding: 15px;
}
table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}

.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}
.action_btn>a {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
    cursor: pointer;
}
.action_btn>a:nth-child(1) {
    border-color: #2640a6;
}
.action_btn>a:nth-child(2) {
    border-color: red;
}
.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}
table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}
table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}
table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
.add_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}


.grid-container {
  margin: 20px;
}

.dashboard-card {
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
}

.more-button {
  position: absolute;
  top: 5px;
  right: 10px;
}

a.az{
  color: cadetblue;
  text-decoration: none;
}
a.e{
  text-decoration: none;
  color: cadetblue;
}

div.card{
  width: 25%;
  height: 20%;
  display: inline-block;
  padding: 10px;
  margin-left: 70px;
  margin-bottom: 10px;

}
div#info{
  min-width: 100vh;
 min-height: 100vh;
}
div#in{
  display: inline-block;
  margin-left: 16px;
}
div.nav-sub{
  display:none;
}
div span:hover div{
  display: block;
}




  </style>

</head>
<body>
<nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
  	 <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
           <button class="btn btn-outline-success"> <a class="nav-link active" aria-current="page" href="addev.php">EVENEMENT</a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-outline-success"><a class="nav-link" href="addinfo.php">INFORMATION</a></button>
          </li>
          <li class="nav-item">
           <button class="btn btn-outline-success"> <a class="nav-link active" aria-current="page" href="addu.php">USER</a></button>
          </li>
          <li class="nav-item">
           <form  action="../logout.php" class="d-flex mt-3">
          <button class="btn btn-outline-danger" type="submit">logout</button>
        </form>
       </li>
        
      </div>
    </div>
    <span><button class="btn btn-outline"><a class="nav-link" href="adminpage.php">BTS AMICALE</a></button></span>
    <span><button class="btn btn-outline"><a class="nav-link" href="#actualite">ACTUALITE </a></button>
      <div class="nav-sub">
<button class="btn btn-outline"><a class="nav-link" href="#evenement">evenement </a></button>
<button class="btn btn-outline"><a class="nav-link" href="#info">information</a></button>
</div>
    </span>
       <span><button class="btn btn-outline"><a class="nav-link" href="historique.php">HISTORIQUE </a></button>
    </span>
    <button class="btn btn-outline"><a class="nav-link" href="prime.php">PRIME </a></button>
   
       
    <a class="navbar-brand" href="#">abouts</a>
   
  </div>
</nav>


</br></br></br></br>


<section id="actualite">
<section id="evenement">

  <h5 align="center">ACTUALITE</h5>

<?php
       // session_start();


       // $db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
        // mysqli_select_db($con, 'demo');
          $stmt=$db->prepare("SELECT * from validprime ");
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>
        <div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header">PRIME</div>
  <div class="card-body text-success">
    <h5 class="card-title"><a class="az" href="listPR.php?file_id=<?php echo $row['id']    ?>"><?php echo $row['titre'] ?></a></h5>
    <h6 class="card-title"><?php echo $row['montant'] ?> Dinart</h6>
    <p class="card-text"><?php echo $row['description'] ?></p>
     <span class="action_btn">

              <form >
             <button type="submit" class="btn btn-outline-danger"><span class="material-symbols-outlined">
edit
</span><a class="az" href="updatep.php?file_id=<?php echo $row['id']    ?>">update</a></button>
<button type="submit" class="btn btn-outline-danger"><span class="material-symbols-outlined">
delete
</span><a class="az" href="deletep.php?file_id=<?php echo $row['id']    ?>">delete</a></button>
           </form>
            </span>
  </div>
</div>
<?php
   }
   ?>

</br>

    <?php
       // session_start();


        //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
    include '../connexion.php';
        // mysqli_select_db($con, 'demo');
        $datii=date('Y-m-d');
          $stmt=$db->prepare("SELECT * from evenement Where dat>='$datii' ");
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>

<div class="card" align="center">
  <a href="listPE.php?file_id=<?php echo $row['id']    ?>" class="e">
  <img src="../file/photo.jpg" class="card-img-top" alt="...">
</a>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['titre']    ?></h5>
    <h6><?php echo $row['dat'] ?></h6>
    <p class="card-text"><?php echo $row['commentaire']    ?></p>
    <a href="evenement.php?file_id=<?php echo $row['id']    ?>" class="e"><?php echo $row['file']    ?></a>
    </br></br>
     <span class="action_btn">

              <form >
             <button type="submit" class="btn btn-outline-success"><span class="material-symbols-outlined">
arrow_downward
</span><a class="az" href="download.php?file_id=<?php echo $row['id']    ?>">download</a></button>
             <button type="submit" class="btn btn-outline-danger"><span class="material-symbols-outlined">
delete
</span><a class="az" href="delete.php?file_id=<?php echo $row['id']    ?>">delete</a></button>
           </form>
            </span>
  </div>

</div>
 <?php
   }
   ?>
</section>





  

</br></br></br>
<section id="info">
   <h5 align="center">information d'actualité</h5>


<?php
       // session_start();


       // $db = new PDO('mysql:dbname=demo;host=localhost','root','');
include '../connexion.php';
        // mysqli_select_db($con, 'demo');
          $stmt=$db->prepare("SELECT * from information");
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>


<div class="card border-success mb-3" id="in" style="max-width: 18rem;">
  <div class="card-header"><?php echo $row['pseudo']    ?></div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text"><?php echo $row['message']    ?></p>
  </div>
       <span class="action_btn">

              <form >
             <button type="submit" class="btn btn-outline-danger"><span class="material-symbols-outlined">
delete
</span><a class="az" href="deleteinf.php?file_id=<?php echo $row['id']    ?>">delete</a></button>
           </form>
            </span>
</div>
 <?php
      }
      ?>

 
  </section>
</section>
</body>
</html>
