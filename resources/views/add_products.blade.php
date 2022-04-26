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
      * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body,
html {
    height: 100%;
    font-family: SourceSansPro-Regular, sans-serif;
}

a {
    font-family: SourceSansPro-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
}

a:focus {
    outline: none !important;
}

a:hover {
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0px;
}

p {
    font-family: SourceSansPro-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
}

ul,
li {
    margin: 0px;
    list-style-type: none;
}

input {
    outline: none;
    border: none;
}

textarea {
    outline: none;
    border: none;
}

textarea:focus,
input:focus {
    border-color: transparent !important;
}


input::-webkit-input-placeholder {
    color: #999999;
}

input:-moz-placeholder {
    color: #999999;
}

input::-moz-placeholder {
    color: #999999;
}

input:-ms-input-placeholder {
    color: #999999;
}

textarea::-webkit-input-placeholder {
    color: #999999;
}

textarea:-moz-placeholder {
    color: #999999;
}

textarea::-moz-placeholder {
    color: #999999;
}

textarea:-ms-input-placeholder {
    color: #999999;
}

button {
    outline: none !important;
    border: none;
    background: transparent;
}

button:hover {
    cursor: pointer;
}

iframe {
    border: none !important;
}

.container {
    max-width: 1200px;
}

.container-contact100 {
    width: 100%;
    min-height: 90vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    position: relative;
    z-index: 1;
}

.container-contact100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
}

.contact100-map {
    position: absolute;
    z-index: -2;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.wrap-contact100 {
    width: 800px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 72px 150px 25px 150px;

    box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}



.contact100-form {
    width: 100%;
}

.contact100-form-title {
    display: block;
    font-family: SourceSansPro-Bold;
    font-size: 30px;
    color: #333333;
    line-height: 1.2;
    text-align: left;
    padding-bottom: 34px;
}


.wrap-input100 {
    width: 100%;
    position: relative;
    background-color: #fff;
    border-radius: 20px;
    margin-bottom: 30px;
}

.input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: SourceSansPro-Bold;
    font-size: 16px;
    color: #4b2354;
    line-height: 1.2;
}


input.input100 {
    height: 62px;
    padding: 0 20px 0 23px;
}


textarea.input100 {
    min-height: 90px;
    padding: 19px 20px 0 23px;
}


.focus-input100 {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    border-radius: 20px;
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.05);

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.input100:focus+.focus-input100 {
    box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.15);
}

.container-contact100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 10px;
    padding-bottom: 43px;
}

.contact100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 160px;
    height: 42px;
    background-color: #bd59d4;
    border-radius: 21px;

    font-family: JosefinSans-Bold;
    font-size: 14px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    padding-top: 5px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;

    box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
}

.contact100-form-btn:hover {
    background-color: #4b2354;
    box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
    -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
}

@media (max-width: 768px) {
    .wrap-contact100 {
        padding: 72px 50px 25px 50px;
    }
}

@media (max-width: 576px) {
    .wrap-contact100 {
        padding: 72px 15px 25px 15px;
    }
}


.validate-input {
    position: relative;
}

.alert-validate .focus-input100 {
    box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -moz-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -webkit-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -o-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
    -ms-box-shadow: 0 5px 20px 0px rgba(250, 66, 81, 0.1);
}

.alert-validate::before {
    content: attr(data-validate);
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    width: 100%;
    min-height: 62px;
    background-color: #fff;
    border-radius: 20px;
    top: 0px;
    left: 0px;
    padding: 0 45px 0 22px;
    pointer-events: none;

    font-family: SourceSansPro-Bold;
    font-size: 16px;
    color: #fa4251;
    line-height: 1.2;
}

.btn-hide-validate {
    font-family: Material-Design-Iconic-Font;
    font-size: 15px;
    color: #fa4251;
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    height: 62px;
    top: 0px;
    right: 28px;
}

.rs1-alert-validate.alert-validate::before {
    background-color: #fff;
}

.true-validate::after {
    content: "\f269";
    font-family: Material-Design-Iconic-Font;
    font-size: 15px;
    color: #57b846;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    height: 62px;
    top: 0px;
    right: 28px;
}

@media (max-width: 576px) {
    .alert-validate::before {
        padding: 0 30px 0 10px;
    }

    .true-validate::after,
    .btn-hide-validate {
        right: 10px;
    }
}

.contact100-more {
    font-family: SourceSansPro-Regular;
    font-size: 16px;
    color: #999999;
    line-height: 1.5;
    text-align: center;
}

.contact100-more-highlight {
    color: #bd59d4;
}
    </style>

       @php 
        $link = "product";
       @endphp

    @extends('layouts.app3')

    @section('content')
    <div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">
                Add Product
            </span>

            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                <input class="input100" type="text" name="name" placeholder="Full Name" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
                <input class="input100" type="text" name="email" placeholder="Email" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                <textarea class="input100" name="message" placeholder="Your Message" required></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Send Email
                </button>
            </div>
        </form>

    </div>
</div>
    @endsection
    <script>
              $(function() {
            $('#datepicker').datepicker({
              format:'dd-mm-yyyy',
            }).datepicker("setDate",'now');
        });

        function goFilter(){
        var dateControl = document.querySelector('input[name="charaf_date"]');
        console.log(dateControl.value);
          start_search(dateControl.value)
        }

       function getToday(){
        var today = new Date();
        var dd = today.getDate();

        var mm = today.getMonth()+1; 
        var yyyy = today.getFullYear();
        if(dd<10) 
        {
            dd='0'+dd;
        } 

        if(mm<10) 
        {
            mm='0'+mm;
        } 
        today = dd+'-'+mm+'-'+yyyy;
        return today;
       }

      function start_search(date){
        $('#row').html("");
        const db = firebase.database();
        const d = new Date();
        let time = d.getTime();
        var count = 0;
        if(document.getElementById("count_products")!=null)
        document.getElementById("count_products").innerHTML = count;
       // var queryText = "enceintes"
          var mRef = firebase.database().ref('Products').orderByChild('date').equalTo(date);
                 /**          var mRef = firebase.database().ref('Products').orderByChild('title').startAt(queryText)
                 .endAt(queryText+"\uf8ff"); */
        // Add ref of child if any
        mRef.once('value', function(snapshot) {
          snapshot.forEach(function(response) {
            var childKey = response.key;
            var childData = response.val();
            var type = childData.type;
            if(type==1){
              count++;
            document.getElementById("count_products").innerHTML = count;
              var pic = childData.imageURL;
            var title = childData.title;
            var price = childData.price;
            var store = childData.store;
            var date = childData.dateTime;
            var price_store = childData.price_store;
            var price_final = childData.price_final;
            if(date==null){
              var date = childData.date;
            }
            var rp = childData;
            var id = childData.id;
            //console.log(id);
            template = build(1);
            template += putPicture(pic);
            template += putData(title,rp,id,price,price_store,price_final,store,date,type,count);
            template += build(0);
            
            $('#row').append(template);
            }

          });
          
        });
       

            
      }


      function showLoadingBar(b){
  if(b){
    $('#work-in-progress').show();
    $(window).bind("load", function () {
  
    });
   }else{
    $('#work-in-progress').hide();
   }
}



    function build(order){
        if (order) {
            return '<div class="col-sm-3"><div class="card mt-4 mb-2" >';
        } 
        return '</div>';
    }

    function putPicture(img){
        return '<img src="'+img+'" class="card-img-top" alt="" width="300" height="300">';
    }
 

    function putData(title,rp,id,price,price_store,price_final,store,date,type,count){
      console.log(date);
        var pre_build = '';
        pre_build += '<div class="card-body" style="min-height: 180px;">';
            pre_build += '<b><p class="card-title">'+count+'- '+title+'</p></b>';
            pre_build += '<p class="card-title">Boutique : '+store+'</p>';
            pre_build += '<p class="card-title">Prix de Gros : '+price+' DA</p>';

            if(price_store!=null){
              pre_build += '<p class="card-title">Prix Détail : '+price_store+' DA</p>';
            }
            if(price_final!=null){
              pre_build += '<p class="card-title">Prix Anwi : '+price_final+' DA</p>';
            }

            pre_build += '<br><p class="card-title">Published At : '+date+'</p>';
            pre_build += '</div>';   
        
       

        return pre_build;
    }



    function PriceStore(id){
      const db = firebase.database();
      let p_store = prompt("Prix Détail", "");
      let text;
      if (p_store == null || p_store == "") {
        
      } else {
        db.ref("Products/"+id+"/price_store").set(parseFloat(p_store), function(error) {
      if (error) {
        alert("Data could not be saved." + error);
      } else {
        document.getElementById("btn_p_store_"+id).style.display = 'none';
      }
    });
      }
    }

    function PriceFinal(id){
      const db = firebase.database();
      let p_final = prompt("Prix Final", "");
      let text;
      if (p_final == null || p_final == "") {
        
      } else {
        db.ref("Products/"+id+"/price_final").set(parseFloat(p_final), function(error) {
      if (error) {
        alert("Data could not be saved." + error);
      } else {
        document.getElementById("btn_p_final_"+id).style.display = 'none';
      }
    });
      }
    }

    function ApproveProduct(id){
      const db = firebase.database();
      db.ref("Products/"+id+"/type").set("4", function(error) {
      if (error) {
        alert("Data could not be saved." + error);
      } else {
        document.getElementById("btn_p_approve_"+id).style.display = 'none';
      }
    });

    }

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
