<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
            <a class="nav-item nav-link active" href="home">Home</a>
            <a class="nav-item nav-link" href="/profile">Profile</a>
            <a class="nav-item nav-link" href="/ceksaldo">Cek Saldo</a>
          </div>
        </div>
  
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">IT Perbankan</li>
        </ol>
      </nav>

      <div class="card" style="width: auto;">
        <img class="card-img-top" style="width: 15rem; "  src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Login Berhasil, Selamat Datang</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <!-- <a href="{{ url('api/logout') }}" class="btn btn-primary">Logout</a> -->

        <form action="{{ url('api/logout') }}" method="post">
            <button type="submit" class="btn btn-danger p-2">Logout</button>
            <a href="/profile" class="btn btn-warning p-2">Profile</a>
        </form>
        
        </div>
      </div>
      
      









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>