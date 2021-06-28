<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>JersiPedia</title>
  </head>
  <body>
    <div class="card text-center">
      <div class="card-header">
      </div>
      <div class="card-body">
        <h5 class="card-title">Selamat Datang di Jersi Pedia</h5>
        <p>klik login untuk masuk</p>
        <div class="shadow p-3 mb-5 bg-body rounded">
          @if (Route::has('login'))
          <div class="row mt-4">
            <div class="col-mr-4">
              <div class="card">
                <div class="card-body text-center">
                  @auth
                    <a class="btn btn-primary" href="{{ url('login') }}" class="btn btn-dark btn-block">Home</a>
                  @else
                    <a class="btn btn-primary" href="{{ route('login') }}" class="btn btn-dark btn-block">Log in</a>

                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-danger" type="button">Register</a>
                    @endif
                  @endauth
                </div>
              </div>
            </div>
          </div>
          @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-5 mb-2 bg-primary text-white text-center">www.jersipedia.com</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
