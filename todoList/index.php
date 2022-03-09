<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
      a .btn-hapus{
        background-color: #FDAFAB;
        border: none;
        color: white;
        border-radius: 5px;
      }
      footer .card-footer{
        background-color: #FDAFAB;
        text-align: center;
        color: white; 
      }
    </style>

    <title>Todo List</title>

  </head>
  <body>
    <!-- Start Navigation -->
    <section>
      <nav class="navbar navbar-expand-lg navbar-dark navbar-todo">
          <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">My Todo List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active fw-bold" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active fw-bold" href="todos_tambah.php">Tambah todo</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </section>
    <!-- End Navigation -->

    <!-- Start content -->
    <div class="container">
      <!-- Strat judul -->
      <div class="judul">
        <h2 class="fw-bold text-center mt-5 mb-5">My Todo List</h2>
      </div>
      <!-- End judul -->

      <!-- Start todo -->
      <div class="container todo">
        <?php
        include("config.php");
        $queryTodos = mysqli_query($dbconnect,"SELECT * FROM todos");

        while ($dataTodos = mysqli_fetch_array($queryTodos)) {
          // tanggal
          $datatanggal = $dataTodos['todo_tanggal'];
          $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

          $var = explode("-", $datatanggal);
          $deadline = $var[2].' '.$bulanIndo[(int)$var[1]].' '.$var[0]; 
        ?>
          <div class="card mb-5">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9">
                  <h5 class="fw-bold text-secondary mt-2"><?= $dataTodos['todo_judul'] ?></h5>
                  <p class="text-secondary">Deadline: <?= $deadline; ?></p>
                  <p class="text-secondary">Status : <b><?= $dataTodos['todo_status'] ?></b></p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                  <a href="todos_edit.php?edit=<?= $dataTodos['todo_id'] ?>"><input type="button" class="btn-hapus p-2 mt-2" value="Edit"></a>
                  <a href="function.php?hapus=<?= $dataTodos['todo_id'] ?>"><input type="button" class="btn-hapus p-2 mt-2" value="Hapus"></a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <!-- End todo -->
    </div>
    <!-- End content -->

    <!-- Start footer -->
    <footer>
      <div class="card">
        <div class="card-footer">
          <p><b>MyTodoList</b></p>
        </div>
      </div>
    </footer>
    <!-- End footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  </body>
</html>