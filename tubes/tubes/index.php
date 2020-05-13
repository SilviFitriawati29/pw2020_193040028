<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
      background: url('img/background.jpg');
    }

    .carousel-indicators {
      position: absolute;
      left: 60%;
    }

    .carousel-indicators li {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 10px;
      text-indent: 0;
      cursor: pointer;
      border: none;
      border-radius: 50%;
      background-color: gray;
    }

    .carousel-indicators .active {
      width: 10px;
      height: 10px;
      margin: 10px;
      background-color: black;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      position: absolute;
      bottom: 7%;
      height: 15px;
      width: 15px;
      outline: black;
      background-color: rgba(0, 0, 0, 0.8);
      background-size: 100%, 100%;
      border-radius: 50%;
      border: 1px solid black;
    }

    .carousel-control-prev-icon {
      left: 51rem;
    }

    .carousel-control-next-icon {
      right: 9rem;
    }
  </style>
  <title>Silviiifw</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #795548 ">

    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
      <img src="img/icon.png" width="30" height="30" alt="">
      SilBook
      </a>

      <div class="collapse navbar-collapse order-1" id="navbarTogglerDemo03">
        <form class="form-inline my-2 my-lg-0" method="POST">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Search free books" name="keyword" size="60" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-light" type="submit" name="cari">Search</button>
            </div>
          </div>
        </form>

        <div class="navbar-collapse w-100 order-2 dual-collapse2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <ul class="nav text-light " style="background-color: #6d4c41">
    <li class="nav-item">
      <a class="nav-link">Featured </a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">History</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Romance</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Adventure</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Horror</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Fantasy</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Short Story</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Political</a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link">Historical Fiction</a>
    </li>

  </ul>
  <div class="container mt-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col bg-light">
              <img src="img/cover1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="col bg-light">
              <div class="mt-5 text-justify">
                <h5>Hallo !!! Welcome Home</h5>
                <br>
                <br>
                <p>“Books are the carriers of civilization. Without books, history is silent, literature dumb, science crippled, thought and speculation at a standstill. They are engines of change, windows on the world, lighthouses erected in the sea of time.” — Barbara W. Tuchman</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col bg-light">
              <img src="img/cover2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="col bg-light">
              <div class="mt-5 text-justify">
              <h5>Hallo !!! Welcome Home</h5>
                <br>
                <br>
                <p>“Books are the carriers of civilization. Without books, history is silent, literature dumb, science crippled, thought and speculation at a standstill. They are engines of change, windows on the world, lighthouses erected in the sea of time.” — Barbara W. Tuchman</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col bg-light">
              <img src="img/cover3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="col bg-light">
              <div class="mt-5 text-justify">
              <h5>Hallo !!! Welcome Home</h5>
                <br>
                <br>
                <p>“Books are the carriers of civilization. Without books, history is silent, literature dumb, science crippled, thought and speculation at a standstill. They are engines of change, windows on the world, lighthouses erected in the sea of time.” — Barbara W. Tuchman</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <h3><center>Daftar Buku</center></h3>
    <div class="row justify-content-md-center">
      <?php if (empty($buku)) : ?>
        <div class="col text-center">
          <h1 class="" style="color: red; font-style: italic;">Data tidak ditemukan</h1>
        </div>
      <?php endif; ?>
      <?php foreach ($buku as $row) : ?>
        <div class="col-md-3 d-flex align-items-stretch mb-3">
          <div class="card" style="">
            <img class="card-img-top " src="img/<?php echo $row["cover"]; ?>" style="height: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $row['judul']; ?></h5>
              <a href="php/detail.php?id=<?= $row['id']; ?>" class="stretched-link" data-toggle="modal" data-target="#exampleModal" data-judul="<?php echo $row["judul"]; ?>" data-kategori="<?php echo $row["kategori"]; ?>" data-author="<?php echo $row["author"]; ?>" data-penerbit="<?php echo $row["penerbit"]; ?>" data-cover="<?php echo $row["cover"]; ?>"></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-3">
              <img class="modal-image img-fluid">
            </div>
            <div class="col-md-9">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong class="modal-judul"></strong></li>
                <li class="list-group-item modal-kategori"></li>
                <li class="list-group-item modal-author"></li>
                <li class="list-group-item modal-penerbit"></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var judul = button.data('judul') // Extract info from data-* attributes
      var kategori = button.data('kategori') // Extract info from data-* attributes
      var author = button.data('author') // Extract info from data-* attributes
      var penerbit = button.data('penerbit') // Extract info from data-* attributes
      var cover = button.data('cover') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Detail: ' + judul)
      modal.find('.modal-judul').text(judul)
      modal.find('.modal-kategori').text(kategori)
      modal.find('.modal-author').text(author)
      modal.find('.modal-penerbit').text(penerbit)
      modal.find('.modal-image').attr('src', `img/${cover}`)
    })
  </script>
</body>

</html>