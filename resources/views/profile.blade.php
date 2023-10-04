<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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
            <a class="nav-item nav-link active" href="/profile">Profile</a>
            <a class="nav-item nav-link" href="/ceksaldo">Cek Saldo</a>
          </div>
        </div>
  
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">IT Perbankan</li>
        </ol>
      </nav>

      <div class="card" style="width: auto;">
        
        <div class="card-body">
            <img class="card-img-top" style="width: 10rem; "  src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap">
            {{-- <h5 class="card-title">Login Berhasil, Selamat Datang</h5> --}}
          <p class="card-text">Profile IT Perbankan</p>
                  {{-- <!-- <a href="{{ url('api/logout') }}" class="btn btn-primary">Logout</a> --> --}}
                  <form>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text"  placeholder="Masukan Nama Anda" class="form-control" id="nama" value="Nama Anda">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="**********">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text"  placeholder="Masukan Alamat Anda" class="form-control" id="alamat" value="Alamat Anda">
                        </div>
                      </div>

                      <button type="button" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-danger">Hapus</button>
                  </form>
       
        
        </div>
      </div>
      
      









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>