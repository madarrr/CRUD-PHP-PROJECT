<?php
include_once(__DIR__.'/../config/app.php');
include_once(__DIR__.'/../admin/authentification.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
    
                <div class="card">
                    <div class="card-header">
                    <h4>REGISTER PAGE</h4>
                    </div>
                    <?php
                    include('message.php');
                     ?>
                    <div class="card-body">
    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="nom" id="" class="form-control">
                        </div>      
                        <div class="mb-3">  
                            <label for="">Surname</label>
                            <input type="text" name="surname" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Confirm password</label>
                            <input type="text" name="confirm_password" id="" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </div>
    </form>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>