<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .card {
        width: 500px;
        margin: auto;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    @media screen and (max-width:500px) {
        .card {
            width: 300px;
        }
    }

    .validation {
        text-align: center;
    }

    .btn {
        width: 100px;
    }

    body {
        background-color: #3A98B9;
    }
</style>

<body>
    <div class="card">
        <h3 class="text-center fw-bold mt-3">LOGIN</h3>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><img src="../img/person.svg" alt="" srcset=""></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="npm" placeholder="Username" name="user">
                                <label for="npm">Username</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><img src="../img/key.svg" alt="" srcset=""></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="password" placeholder="Password"
                                    name="pass">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="validation">
                    <button class="btn btn-success" name="log_in">Log In</button>
                </div>
            </form>
            <?php
            include("cnnt.php");
            if (isset($_POST['log_in'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $sql = mysqli_query($conn, "select * from pegawai where username='$user' and password='$pass'");
                $data = mysqli_num_rows($sql);
                if ($data == 1) {
                    header("location:index.php");
                } else {
                    header("location:error.php");
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>