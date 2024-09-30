<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS INFO</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; 
            background-color: #f8f9fa; 
        }
        .w-auto {
            
            width: 100%; 
            max-width: 1200px;
            
        }
        .action-buttons {
            display: flex; 
            justify-content: space-evenly;
        }
        .btn.btn-danger{
            margin-left:10px;     
        }
        .btn.btn-info{
            background-color:#0d6efd;
            color:#ffff;
        }
        .btn.btn-danger:hover{
            background-color:#a11725;
        }
        .btn.btn-info:hover{
            background-color:#1158c1;
            
        }
    </style>
</head>
<body>
    <div class="w-auto">
        <h1 class="text-primary">USERS INFORMATION</h1>
        <a class="btn btn-success mb-3" href="/insert">Add User</a> 
        <table class="table w-75 table-primary table-sm table-hover p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
            <tr>
                <td>Username</td> 
                <td>Fname</td>
                <td>Lname</td>
                <td>Mname</td>
                <td>Birthday</td>
                <td>Gender</td>
                <td>Address</td>
                <td>ContactNo</td>
                <td>Email</td>
                <td>Password</td>
                <td>Role</td>
                <td>Status</td>
                <td>Actions</td>
            </tr>
            <?php foreach($usr as $user): ?>
            <tr class="table-light">
                <td><?= $user['Username'] ?></td> 
                <td><?= $user['Fname'] ?></td>
                <td><?= $user['Lname'] ?></td>
                <td><?= $user['Mi'] ?></td>
                <td><?= $user['Bdate'] ?></td>
                <td><?= $user['Gender'] ?></td>
                <td><?= $user['Address'] ?></td>
                <td><?= $user['ContactNo'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['Password'] ?></td>
                <td><?= $user['Role'] ?></td>
                <td><?= $user['STATUS'] ?></td>
                <td>
                    <div class="action-buttons">
                        <a class="btn btn-info" href="/editUser/<?= $user['userID'] ?>">EDIT</a>
                        <a class="btn btn-danger" href="/delete/<?= $user['userID'] ?>">DELETE</a>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>
