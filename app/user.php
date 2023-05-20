<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/phone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    nav {
        background-color: #454545 !important;
    }

    img {
        width: 30px;
        margin-right: 5px;
    }

    h4 {
        text-align: center;
        margin-top: 15%;
        text-shadow: 1px 1px white;

    }

    @media screen and (max-width:500px) {
        h4 {
            margin-top: 50%;
        }

    }

    footer {
        width: 100%;
        bottom: 0;
        position: absolute;
        color: white;
        background-color: #454545 !important;

    }
</style>

<body>
    <nav class="navbar navbar-expand-lg  fw-bold navbar-dark">
        <div class="container">
            <a class="navbar-brand " href="#"> <img src="../img/phone.png" alt="" srcset="">WEBSITE SPK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="alternatif.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="normalisasi.php">Normalisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="bobot.php">Bobot</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container ">
        <h1 class="text-center fw-bold mt-3 mb-2">DATA KARYAWAN</h1>
        <table class="table table-striped   text-center">
            <thead>
                <tr class="table-dark">
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("cnnt.php");
                $sql = mysqli_query($conn, "select * from pegawai");
                while ($data = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <?= $data['username'] ?>
                        </td>
                        <td>
                            <?= $data['password'] ?>
                        </td>
                        <td>
                            <a data-toggle="modal" data-target="#edit" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#edit<?= $data['id_pegawai'] ?>">Edit</a>
                            <!--     modal -->
                            <div class="modal fade" id="edit<?= $data['id_pegawai'] ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Edit User</h1>
                                        </div>
                                        <form action="" method="POST">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><img src="../img/key.svg" alt=""
                                                                    srcset=""></span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control"
                                                                    placeholder="id pegawai" name="id"
                                                                    value="<?= $data['id_pegawai'] ?>">
                                                                <label for="id">Id Pegawai</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><img src="../img/person.svg"
                                                                    alt="" srcset=""></span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="Username" name="user"
                                                                    value="<?= $data['username'] ?>">
                                                                <label for="name">Username</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><img src="../img/key.svg" alt=""
                                                                    srcset=""></span>
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="password"
                                                                    placeholder="Password" name="pass"
                                                                    value="<?= $data['password'] ?>">
                                                                <label for="password">Password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="hapus_user.php?id=<?= $data['id_pegawai'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <!--   edit -->
        <?php
        if (isset($_POST['simpan'])) {
            $id = $_POST['id'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $sql = mysqli_query($conn, "update pegawai set username='$user',password='$pass' where id_pegawai='$id'");
            if ($sql == true) {
                echo " <meta http-equiv='refresh' content='0.1' url=?page=user>";
            }
        }
        ?>
    </div>

    <footer>
        <div class="container text-center">
            &copy;2023
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>