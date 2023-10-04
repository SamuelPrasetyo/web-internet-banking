<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Saldo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand p-3"  href="#"><b>IT Perbankan</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="home">Home</a>
            <a class="nav-item nav-link" href="/profile">Profile</a>
            <a class="nav-item nav-link active" href="/ceksaldo">Cek Saldo</a>
          </div>
        </div>
  
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
          <li class="breadcrumb-item"><a href="#">Cek Saldo</a></li>
          <li class="breadcrumb-item active" aria-current="page">IT Perbankan</li>
        </ol>
      </nav>

      <div class="card" style="width: auto;">
        {{-- <img class="card-img-top" style="width: 15rem; "  src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap"> --}}
        <div class="card-body">
            <div class="card bg-dark text-white">
                <img class="card-img" style="width: 15rem" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title">BANK IT PERBANKAN</h5>
                  <p class="card-text p-5 shadow" style="text-color: red">0188281289812381293</p>
                  <p class="card-text">12/12/2028</p>
                </div>
              </div>
        </div>
      </div>
      
      









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>