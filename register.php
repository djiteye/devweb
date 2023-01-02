<!doctype html>
<head>
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action ="envoie.php" >
<div class="col-sm-3" style="margin:auto;">
        <h1 style="text-align:center;">register</h1>
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
<p>je me connecte à mon compte</p>
<a href="login.php">existant</a>
</div>
</form>
</body>
</html>