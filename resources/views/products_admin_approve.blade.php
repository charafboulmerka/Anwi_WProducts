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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

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
       <div id="work-in-progress"><div class="work-spinner"><script>$('#work-in-progress').hide();</script></div></div>


    @extends('layouts.app2')

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
        console.log(getToday());
        let time = d.getTime();
        var count=0;
        if(document.getElementById("count_products")!=null)
        document.getElementById("count_products").innerHTML = count;
          var mRef = firebase.database().ref('Products').orderByChild('date').equalTo(date);
        // Add ref of child if any
        mRef.once('value', function(snapshot) {
          snapshot.forEach(function(response) {
            var childKey = response.key;
            var childData = response.val();
           // console.log(childKey);
            var type = childData.type;
            if(type==1 || type==4){
              count++;
        document.getElementById("count_products").innerHTML = count;
              var pic = childData.imageURL;
            var title = childData.title;
            var price = childData.price;
            var store = childData.store;
            var date = childData.dateTime;
            var price_store = childData.price_store;
            var price_final = childData.price_final;
            var description = childData.description;
            if(date==null){
              var date = childData.date;
            }
            var rp = childData;
            var id = childData.id;
            //console.log(id);
            template = build(1);
            template += putPicture(pic);
            template += putData(title,rp,id,price,price_store,price_final,description,store,date,type,count);
            template += build(0);
            
            $('#row').append(template);
            }

          });
          
        });
       
            
      }

      start_search(getToday());

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
 

    function putData(title,rp,id,price,price_store,price_final,description,store,date,type,count){
      console.log(date);
        var pre_build = '';
        pre_build += '<div class="card-body" style="min-height: 200px;">';
            pre_build += '<b><p class="card-title">'+count+'- '+title+'</p></b>';
            pre_build += '<p class="card-title">Boutique : '+store+'</p>';
            pre_build += '<p class="card-title">Prix de Gros : '+price+' DA</p>';

            if(price_store!=null){
              pre_build += '<p class="card-title">Prix Détail : '+price_store+' DA</p>';
            }else{
              pre_build += '<p class="card-title">Prix Détail :  Not Yet</p>';
            }
            if(price_final!=null){
              pre_build += '<p class="card-title text-danger">Prix Anwi : '+price_final+' DA</p>';
            }else{
              pre_build += '<p class="card-title text-danger">Prix Anwi :  Not Yet</p>';
            }
            
            /*
            if(description==null){
              pre_build += '<button id="btn_description_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="productDescription(\'' + id + '\');">Description</button><br><br>';
            }


            if(price_store==null){
              pre_build += '<button id="btn_p_store_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="PriceStore(\'' + id + '\');">Prix Détail</button><br><br>';
            }
        

            if(price_final==null){
              pre_build += '<button id="btn_p_final_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="PriceFinal(\'' + id + '\');">Prix Final</button><br><br>';
            }else{
              pre_build += '<button id="btn_p_final_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="PriceFinal(\'' + id + '\');">Modifer Prix Final</button><br><br>';

            }
                */

            if(type==1){
              pre_build += '<button id="btn_p_approve_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="ApproveProduct(\'' + id + '\');">Approuver</button><br>'
            }else if(type==4){
              pre_build += '<button id="btn_p_approve_'+id+'" style="font-size : 15px;" class="btn btn-danger btn-lg col-12" type="button" onclick="unApproveProduct(\'' + id + '\');">Désapprouver</button><br>'

            }
            
            pre_build += '<br><p class="card-title">Published At : '+date+'</p>';
            
            pre_build += '</div>';   
        
       

        return pre_build;
    }


    function productDescription(id){
      const db = firebase.database();
      bootbox.prompt({
      title: "Description",
      inputType: 'textarea',
          callback: function (des) {
              console.log(des);
        if (des == null || des == "") {
        
        } else {
          db.ref("Products/"+id+"/description").set(des, function(error) {
        if (error) {
          alert("Data could not be saved." + error);
        } else {
          document.getElementById("btn_p_store_"+id).style.display = 'none';
        }
      });
        }
          }
      });

    }

    function PriceStore(id){
      const db = firebase.database();
      bootbox.prompt({
      title: "Prix Détail",
      inputType: 'number',
          callback: function (p_store) {
              console.log(p_store);
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
      });

    }

    function PriceFinal(id){
      const db = firebase.database();
      bootbox.prompt({
        title: "Prix Final",
        inputType: 'number',
        callback: function (p_final) {
            console.log(p_final);
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
          });

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

    function unApproveProduct(id){
        const db = firebase.database();
        db.ref("Products/"+id+"/type").set("1", function(error) {
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
