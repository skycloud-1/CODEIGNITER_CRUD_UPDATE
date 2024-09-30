<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT USER INFORMATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 50px auto;
            border:solid 3px #0d6efd;
         
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-custom {
            width: 100%;
        }
        .btn-custom:hover {
            background-color:red;
        }
        
    </style>
</head>

<body>

    <div class="container form-container">
        <h1 class="form-title text-primary">INSERT USER INFORMATION</h1>
        <form action="/actionInsert" method="post">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="Fname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="Fname" id="Fname" required>
                </div>
                <div class="col-md-6">
                    <label for="Lname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="Lname" id="Lname" required>
                </div>
                <div class="col-md-6">
                    <label for="Mi" class="form-label">Middlename</label>
                    <input type="text" class="form-control" name="Mi" id="Mi">
                </div>
                <div class="col-md-6">
                    <label for="Bdate" class="form-label">Birthdate</label>
                    <input type="text" class="form-control" name="Bdate" id="Bdate" placeholder="YYYY-MM-DD" required>
                </div>
                <div class="col-md-6">
                    <label for="Gender" class="form-label">Gender</label>
                    <select class="form-select" name="Gender" id="Gender" required>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="Address" id="Address" required>
                </div>
                <div class="col-md-6">
                    <label for="ContactNo" class="form-label">Contact No</label>
                    <input type="number" class="form-control" name="ContactNo" id="ContactNo" required>
                </div>
                <div class="col-md-6">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email" id="Email" required>
                </div>
                <div class="col-md-6">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="Username" id="Username" required>
                </div>
                <div class="col-md-6">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password" id="Password" required>
                </div>
                <div class="col-md-6">
                    <label for="Role" class="form-label">Role</label>
                    <select class="form-select" name="Role" id="Role" required>
                    <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="STATUS" class="form-label">Status</label>
                    <select class="form-select" name="STATUS" id="STATUS" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-custom">Save Data</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
