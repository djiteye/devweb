<?php
session_start();  
?>
<!DOCTYPE html>
<head>
  <title>liste des postulants</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <style type="text/css">
     body>div{
    min-height: 100vh;
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
    background-color: blueviolet;
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
  </style>
</head>
<body>
<h5 align="center">historique des 3 derniers mois</h5>
  <mat-card-content>
      <div class="table_responsive" align-content= "center";>

      <table>

        <thead>
        <tr>
          <th>Titre</th>
           <th>date</th>
          <th>description</th>
          <th>Pièce jointe</th>
          <th>action</th>
        </tr>
        </thead>
      <tbody>
        <?php
       // session_start();

         
       // $db = new PDO('mysql:dbname=demo;host=localhost','root','');
        include '../connexion.php';
       /* $con = mysqli_connect('localhost','root','');
          mysqli_select_db($con, 'demo');*/
          include '../connecter.php';
        // mysqli_select_db($con, 'demo');
         //if(isset($_GET['file_id'])){
          // $id=$_GET["file_id"];
          // $p="SELECT titre from evenement Where id=$id";  
             $datii=date('Y-m-d');
             
          $stmt=$db->prepare("SELECT * from evenement Where dat<'$datii' "); 
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>

        <tr>
          <td><a href="listPEH.php?file_id=<?php echo $row['id']    ?>" class="e"><?php echo $row['titre']    ?></a></td>
         <td><?php echo $row['dat']    ?></td>
          <td><?php echo $row['commentaire']    ?></td>
           <td><a href="evenement.php?file_id=<?php echo $row['id']    ?>" class="e"><?php echo $row['file']    ?></a></td>
          <td>
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
          </td>
        </tr>
       
        <?php
      }
  // }
      ?>
      </tbody>
    </table>
  </br>
    <button class="btn btn-danger" margin="15px"><a class="e" href="adminpage.php">retour</a></button>
    </br>
  </div>
  </mat-card-content>
  </body>
  </html>