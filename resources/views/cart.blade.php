<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ade Rami | XI RPL 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SHOWROOM MOTOR | MOBIL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="layout.blade.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="layout.blade.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Shop
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex ms-auto">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-primary ms-1 rounded-pill">0</span>
                </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row mt-2">
          <div class="col-4 mt-3">
            <img class="card-img-top" src="img/bmw.jpg" alt="..." />
          </div>
          <div class="col-6 mt5">
            <p class="text-dark mb-1 mt-4">SKU:BMW-2022</p>
            <h1 class="fw-bold mb-2">BAYERISCHE MOTOREN WERKE</h1>
            <span class="text-muted text-decoration-line-through">Rp. 1.000.000.000,00</span>
            Rp. 900.000.000,00
            <h5 class="mt-lg-5">BMW Adalah sebuah perusahaan otomotif Jerman yang memproduksi mobil dan sepeda motor.BMW didirikan pada tahun 1916 oleh Franz Josef Popp</h5>
            <div class="d-flex">
              <input class="form-control text-center me-3 mt-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem;">
              <button class="btn btn-outline-primary mt-3" type="button">
                <i class="bi-cart-fill me-1"></i>
                Add to cart
                <p class="text-center">&copy; 2023 <a href="https://www.instagram.com/ramiaminulloh1/" target="_blank" class="fw-bold
                text-decoration-none">Ade Rami Aminulloh</a></p>
        </footer>
              </button>
            </div>
          </div>
        </div>
      </div>
      </section> 
      
      <div class="container-fluid">
    </div>
</body>
</html>