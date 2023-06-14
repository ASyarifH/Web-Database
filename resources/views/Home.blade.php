<!-- resources/views/farmers/create.blade.php -->
@extends('Template.template')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

     <link
      rel="stylesheet"
      href="style.css"
    />
  </head>
  <body class="body">
    <!-- carousel -->
    <section class="carousel1">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/engine 1.jpg" class="d-block w-100" alt="img/engine 1.jpg">
    </div>
    <div class="carousel-item">
      <img src="img/engine 2.jpg" class="d-block w-100" alt="img/engine 2.jpg">
    </div>
    <div class="carousel-item">
      <img src="img/engine 3.jpg" class="d-block w-100" alt="img/engine 3.img">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    <!-- carousel -->
    <!-- card -->
    <section id="showroom">
      <div class="container">
        <div class="row text-center mb-3 ">
          <div class="col">
            <h2>Showroom</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img
                src="img/4.jpg"
                class="card-img-top"
                alt="certificate 1"
              />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img
                src="img/5.jpg"
                class="card-img-top"
                alt="certificate 2"
              />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img
                src="img/7.jpg"
                class="card-img-top"
                alt="certificate 3"
              />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- card -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

@endsection