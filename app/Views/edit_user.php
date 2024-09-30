<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05);
            max-width: 700px;
            margin: 100px auto;
            border:solid 3px #0d6efd;
        }

        .input-group-text {
            background-color: #f0f0f0;
            color: #333333;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: #0d6efd;
        }

        .form-select, .form-control {
            box-shadow: none;
            border: 1px solid #e0e0e0;
        }

        .btn {
            width: 140px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: red;
        }

        .btn-outline-secondary {
            color: #333333;
            border: 1px solid #333333;
        }

        .btn-outline-secondary:hover {
            background-color: red;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h1>Edit User</h1>
        <form action="<?= base_url('/updateUser') ?>" method="POST">
            <input type="hidden" name="userID" value="<?= $u['userID'] ?>">

            <div class="input-group mb-3">
                <span class="input-group-text">Username</span>
                <input type="text" class="form-control" name="Username" value="<?= $u['Username'] ?>" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">First Name</span>
                <input type="text" class="form-control" name="Fname" value="<?= $u['Fname'] ?>">
                <span class="input-group-text">Surname</span>
                <input type="text" class="form-control" name="Lname" value="<?= $u['Lname'] ?>">
                <span class="input-group-text">MI</span>
                <input type="text" class="form-control" name="Mi" value="<?= $u['Mi'] ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Birth Date</span>
                <input type="date" class="form-control" name="Bdate" value="<?= $u['Bdate'] ?>">
                <span class="input-group-text">Gender</span>
                <select class="form-select" name="Gender">
                    <option value="<?= $u['Gender'] ?>"><?= $u['Gender'] ?></option>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Address</span>
                <input type="text" class="form-control" name="Address" value="<?= $u['Address'] ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Contact No</span>
                <input type="number" class="form-control" name="ContactNo" value="<?= $u['ContactNo'] ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="email" class="form-control" name="Email" value="<?= $u['Email'] ?>">
                <span class="input-group-text">Password</span>
                <input type="password" class="form-control" name="Password" value="<?= $u['Password'] ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Role</span>
                <select class="form-select" name="Role">
                    <option value="<?= $u['Role'] ?>"><?= $u['Role'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Status</span>
                <select class="form-select" name="STATUS">
                    <option value="<?= $u['STATUS'] ?>"><?= $u['STATUS'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <input class="btn btn-primary" type="submit" value="Update" name="submit">
                <a class="btn btn-outline-secondary ms-3" href="/user/">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
