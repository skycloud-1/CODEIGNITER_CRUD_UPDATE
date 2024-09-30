<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container mt-5 w-50 justify-content-center">
    <div class="input-group mb-3">
  <span class="input-group-text">FIRST NAME:</span>
  <input type="text" class="form-control" name="Fname" value="<?=$u['Fname']?>">
  <span class="input-group-text">SURNAME</span>
  <input type="text" class="form-control" name="Lname" value="<?=$u['Lname']?>">
  <span class="input-group-text">MI</span>
  <input type="text" class="form-control" name="Mi" value="<?=$u['Mi']?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Birth Date</span>
  <input type="date" class="form-control" name="Bdate" value="<?=$u['Bdate']?>">
  <span class="input-group-text">Gender</span>
  <select name="Gender">
            <option value="<?=$u['Gender']?>"><?=$u['Gender']?></option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
        </select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Address</span>
  <input type="text" class="form-control" name="Address" value="<?=$u['Address']?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">ContactNo</span>
  <input type="number" class="form-control" name="ContactNo" value="<?=$u['ContactNo']?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Email</span>
  <input type="email" class="form-control" name="Email" value="<?=$u['Email']?>">
  <span class="input-group-text">Password</span>
  <input type="password" class="form-control" name="Password" value="<?=$u['Password']?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Role</span>
  <select name="Role">
            <option value="<?=$u['Role']?>"><?=$u['Role']?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
</div>

</div>
</body>
</html>