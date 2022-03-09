<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
      .btn-hapus{
        background-color: #FDAFAB;
        border: none;
        color: white;
        border-radius: 5px;
      }
    </style>

    <title>Tambah Todo</title>
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
        <h2 class="fw-bold text-center mt-5 mb-5">Tambah Todo List</h2>
      </div>
      <!-- End judul -->

      <!-- Start form tambah todo -->
      <div class="container">
        <div class="card">
          <div class="card-body">
            <form action="function.php" method="POST">
              <div class="mb-3 pl-3 ps-3 pe-3">
                <label class="form-label text-secondary fw-bolder">Judul todo list</label>
                <input type="text" class="form-control" name="judul">
              </div>
              <div class="mb-3 pl-3 ps-3 pe-3">
                <label class="form-label text-secondary fw-bolder">Deadline</label>
                <input type="date" class="form-control" name="tanggal">
              </div>
              <div class="mb-3 pl-3 ps-3 pe-3">
                <label class="form-label text-secondary fw-bolder">Status</label>
                <select class="form-select" name="status">
                  <option value="selesai">Selesai</option>
                  <option value="belum" selected>Belum</option>
                </select>
              </div>
              <div class="ps-3 pe-3"> 
                <input type="submit" class="btn-hapus p-2 mt-2" name="tambah" value="Tambah">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End form tambah todo -->
    </div>
    <!-- End content -->

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  </body>
</html>