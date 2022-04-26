<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet" />

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-database.js"></script>

    <script>
                const firebaseConfig = {
              apiKey: "AIzaSyABS-h7C52V6d3oZQA__MOy6Tnq41xAWz0",
              authDomain: "anwi-wproducts.firebaseapp.com",
              databaseURL: "https://anwi-wproducts-default-rtdb.europe-west1.firebasedatabase.app",
              projectId: "anwi-wproducts",
              storageBucket: "anwi-wproducts.appspot.com",
              messagingSenderId: "696372615063",
              appId: "1:696372615063:web:9148aeff98f643aaaf96d2",
              measurementId: "G-3Y99JREZ7Q"
            };

              // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();
    </script>

  </head>
  <body>
    <style>
      .center{
  display: flex;
      justify-content: center;
        margin:20px;
      }
    </style>

       @php 
        $link = "product";
       @endphp

    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row form-group">
                <label for="date" class="col-sm-1 col-form-label">Date</label>
                <div class="col-sm-12">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="charaf_date">
                        <span class="input-group-append">
                      
                        </span>
                        <button class="input-group-text bg-white" onclick="goFilter()">
                                <i class="fa fa-search"></i>
                            </button>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row" id="row">
       
        </div>
    </div>
    @endsection
   
  </body>
</html>
