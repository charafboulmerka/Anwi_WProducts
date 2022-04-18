<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ftechnique.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>





<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="bi bi-chevron-left" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="bi bi-chevron-right" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
















  <!--Main layout-->
  <main class="mt-1 pt-1">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-5 mb-4">
          <img src="{{$data->picture}}" class="img-fluid" alt="">
          <button type="button" class="btn btn-primary btn-sm">Small button</button>
          
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
            <b><a id="title" onclick="copyButton('title')">{{$data->title}}</a></b>
            <!--<p>{{$data->product_url}}-->
            <div class="mb-3">
              <a>
                <span class="badge purple mr-1">{{$data->category}}</span>
              </a>
            </div>

            <p class="lead">
          
              <a id="price" onclick="copyButton('price')">Price : {{str_replace(",","",$data->price)}}</a><br>
              
              <a id="weight" onclick="copyButton('weight')">
                
              Poids : {{
                
                (float)$data->poids
              
              }} Kg
            
            </a>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p id="description" >{{$data->description}}</p>
            
              <!-- Default input -->
              <button class="btn btn-primary btn-md my-0 p" onclick="copyButton('description')">Copy Description
              </button>

          

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>
              
        </div>
              @php
              echo(str_replace('col8 -pvs','col8 -pvs m-4',$data->f_technique));
              @endphp

              <script>
                var obsor = document.getElementsByTagName('article');
                for(let i=0;i<obsor.length;i++){
                  if(obsor[i].innerHTML.includes('Vendu avec')){
                    console.log(obsor[i].innerHTML);
                    obsor[i].remove();
                  }
                }
                console.log(obsor);
              </script>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

    function copyButton(data){
      if(data=="title"){
        navigator.clipboard.writeText(document.getElementById('title').text);
      }else if(data=="description"){
        //console.log(document.getElementById('description').innerHTML);
        navigator.clipboard.writeText(document.getElementById('description').innerHTML);
      }else if(data=="price"){
        navigator.clipboard.writeText(document.getElementById('price').text.split(":")[1].replace('DA',''));
      }else if(data=="weight"){
        navigator.clipboard.writeText(document.getElementById('weight').text.split(":")[1].replace('Kg',''));
      }
      alert("The text has been copied successfully");
      
      }

  </script>
</body>

</html>
