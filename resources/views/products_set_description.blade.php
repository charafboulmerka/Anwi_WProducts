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

       <!--
    <div class="s003">

      <form>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select id="mSelect" data-trigger="" name="choices-single-defaul">
                <option placeholder="">All Categories</option>
                <option >maison cuisine jardin</option>
                <option>beaute hygiene sante</option>
                <option>fashion mode</option>
                <option>electronique</option>
                <option>sports loisirs</option>
                <option>telephone tablette</option>
                <option>bebe puericulture</option>
                <option>ordinateurs accessoires informatique</option>
                <option>mlp jeux jouets gaming</option>
                <option>automobile outils</option>
                <option>terrasse jardin exterieur</option>
              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input id="search_keyword" type="text" placeholder="Enter Keywords?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="button" onclick="start_search()">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
           
            


          </div>
          
          
        </div>
      </form>
      
    </div>
    -->
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
        console.log(time);
          var mRef = firebase.database().ref('Products').orderByChild('date').equalTo(date);
        // Add ref of child if any
        mRef.once('value', function(snapshot) {
          snapshot.forEach(function(response) {
            var childKey = response.key;
            var childData = response.val();
           // console.log(childKey);
            var type = childData.type;
            if(type==1){
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
            template += putData(title,rp,id,price,price_store,price_final,description,store,date,type);
            template += build(0);
            
            $('#row').append(template);
            }

          });
          
        });
       
   /*
          $.ajax({
            url: "{{route('find')}}",
            data:{
                keyword:keyword,
                category:category,
                _token:token
            },
            type: 'post',
            beforeSend: function(){
              //$("#loading_screen").show();
              showLoadingBar(true);
            },
 
            
            success: function(response){
                //console.log(response);
                var template = '';
                var count = 0;
                console.log(response);
                $('#row').html("");
                for(let i=0;i<response.length;i++){
                    var pic = response[i].picture;
                    var title = response[i].title;
                    var rp = response[i];
                    var id = response[i].id;
                    console.log(id);
                    template = build(1);
                    template += putPicture(pic);
                    template += putTitle(title,rp,id);
                    template += build(0);
                    
                    $('#row').append(template);
                  
                }
                
                console.log(template);
                
                },
                complete: function(){
              //$("#loading_screen").hide();
              showLoadingBar(false);
            }

            });*/
            
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
 

    function putData(title,rp,id,price,price_store,price_final,description,store,date,type){
      console.log(date);
        var pre_build = '';
        pre_build += '<div class="card-body" style="min-height: 180px;">';
            pre_build += '<b><p class="card-title">'+title+'</p></b>';
            pre_build += '<p class="card-title">Boutique : '+store+'</p>';
            pre_build += '<p class="card-title">Prix de Gros : '+price+' DA</p>';
            if(description!=null){
              pre_build += '<p class="card-title text-danger">Description : Done</p>';
            }
            
/*
            if(price_store!=null){
              pre_build += '<p class="card-title">Prix Détail : '+price_store+' DA</p>';
            }
            if(price_final!=null){
              pre_build += '<p class="card-title">Prix Anwi : '+price_final+' DA</p>';
            }
*/          
            pre_build += '<p class="card-title">Published At : '+date+'</p>';


            if(description==null){
              pre_build += '<br><button id="btn_description_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="productDescription(\'' + id + '\');">Description</button>';
            }else{
              pre_build += '<br><button id="btn_description_'+id+'" style="font-size : 15px;" class="btn btn-primary btn-lg col-12" type="button" onclick="productDescription(\'' + id + '\');">Modifier Description</button>';
            }

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
          document.getElementById("btn_description_"+id).style.display = 'none';
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

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
