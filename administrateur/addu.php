<!doctype html>
<head>
    <title>add users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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


  </style>
</head>
<body>
<form method="post" action ="envoi.php" >
<div class="col-sm-3" style="margin:auto;">
        <h1 style="text-align:center;">ajouter d'utilisateur</h1>
<div class="mb-3">
  <label for="username" class="form-label"> username</label>
  <input type="text" class="form-control" name="username" placeholder="username" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input type="password" class="form-control" name="password" placeholder="password" required>
</div>
<div class="mb-3">
<label for="role" class="form-label">role</label>
<select class="form-control" name="role">
  <option value="admin" >administrateur</option>
  <option value="users" >utilisateur</option>
</select>
</div>
<div>
  <input type="submit" class="btn btn-outline-success" name="login" >
</div>
</div>


</form>
</br></br></br>

  
      <div class="table_responsive" align-content= "center" ;>

      <table>

        <thead>
        <tr>
          <th>username</th>
          
          <th>email</th>
          <th>password</th>
          <th>role</th>
          <th>action</th>
        </tr>
        </thead>
      <tbody>
        <?php
       // session_start();


        //$db = new PDO('mysql:dbname=demo;host=localhost','root','');
        include '../connexion.php';
        // mysqli_select_db($con, 'demo');
          $stmt=$db->prepare("SELECT * from user");
          $stmt->execute();
        // $result=mysqli_query($con,$s);
         while($row= $stmt->fetch()){
        ?>

        <tr>
          <td><span class="material-symbols-outlined" style="margin-right: 20px;">
person
</span><?php echo $row['username']    ?></td></td>
         
          <td><?php echo $row['email']    ?></td>
           <td><?php echo $row['password']    ?></td>
           <td><?php echo $row['role']    ?></td>
          <td>
              <span class="action_btn">
              <form >
             <button type="submit" class="btn btn-outline-danger"><span class="material-symbols-outlined">
delete
</span><a class="az" href="deleteu.php?file_id=<?php echo $row['id']    ?>">delete</a></button>
           </form>
            </span>
          </td>
        </tr>
       
        <?php
      }
      ?>
      </tbody>
    </table>

  </div>

  
  


</br></br></br> 
   <button class="btn btn-outline-danger" margin-left="1000px"  ><a class="e" href="adminpage.php">retour</a></button>

</body>
</html>