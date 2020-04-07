<?php
        include("simple_html_dom.php");
        $html=file_get_html("https://www.mohfw.gov.in/");
        $html2=file_get_html("https://www.worldometers.info/coronavirus/");

  ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <title>COVID-19 Counter!</title>
    <style type="text/css">
      .count{
        font-weight: bold;
        font-size:30px;
        color:red;
      }
      body{
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
        color:white;
        font-family: 'Rubik', sans-serif;
      }
      table{
        color:white;
      }
      .whole{
        color:white;
      }
      tr{
        color:white;

      }
      td{
        color:white;
      }
      thead{
        color:white;
      }
    </style>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CoronaVirus COVID-19 Counter.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#world">World Counter<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#state">State Data <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#graph">Graph</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>







    <div class="container">
      <div class="jumbotron bg-dark">
        <h1 class="display-4" style="text-align: center;">COVID-19 Counter</h1>
        <hr class="my-4">
        <p style="text-align: center;">Coronavirus Counter Page for India.<br>
        Made With ❤ by <span style="color:red;text-decoration: underline;font-size:30px;"><em>Ashish.</em></span></p>
        <center>
        <a class="btn btn-primary btn-lg" href="https://www.who.int/" role="button" >WHO Website.</a>
        <br>
        <hr>
    
          <a class="btn btn-primary btn-lg" href="http://devapp.cf/" role="button" >Visit My Website.</a>
        </center>
      </div>
      <div class="card text-center bg-dark">
        <div class="card-header">
          <h4>
          Live Counter.
          </h4>
        </div>

        <div class="card-body" id="world">
          <h5 class="card-title">WORLD TOTAL COUNT</h5>
          <p class="card-text">
            
            <?php 
            $worldc=$html2->find('div[class="maincounter-number"]',0);
            foreach( $worldc->find('span') as $z){
              echo $z->plaintext;
            }

             ?>
          </p>
          <h5 class="card-title">WORLD TOTAL DEATH</h5>
          <p class="card-text">
            
            <?php 
            $worldc=$html2->find('div[class="maincounter-number"]',1);
            foreach( $worldc->find('span') as $z){
              echo $z->plaintext;
            }

             ?>
          </p>
          <h5 class="card-title">WORLD TOTAL RECOVERED</h5>
          <p class="card-text">
            
            <?php 
            $worldc=$html2->find('div[class="maincounter-number"]',2);
            foreach( $worldc->find('span') as $z){
              echo $z->plaintext;
            }

             ?>
          </p>
        </div>






        <div class="card-body" id="state">
          <div class="card-group bg-dark">
        <?php
        $coun=$html->find('div[class="site-stats-count"]',0);
        $cardnames= array("Active Cases","Cured / Discharged","Deaths","Migrated");
        $imagenames = array("https://cdn.pixabay.com/photo/2020/02/12/04/19/coronavirus-4841637_960_720.png","https://png.pngtree.com/png-vector/20190929/ourlarge/pngtree-cure-bottle-icon-vector-png-image_1768104.jpg","https://i.dlpng.com/static/png/1800057--poison-skull-png-512_512_preview.webp","https://i7.pngguru.com/preview/464/992/27/human-migration-travel-visa-immigration-international-migration-refugee-students.jpg");
        $count=0;
        foreach( $coun->find('strong') as $c){
          echo '<div class="card bg-dark">';
          //echo '<img src="'.$imagenames[$count].'" class="card-img-top" alt="images" height="200" width="100">';
          echo '<div class="card-body">';
          echo '<h4 class="card-title">'.$cardnames[$count].'</h4>';
          echo '<p class="card-text"><span class="count">'.$c.'</span></p>';
          echo '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
          echo '</div>';
          echo '</div>';
          $count += 1;
        }

          ?>
      </div>
        </div>
        <div class="card-footer text-muted">
          Refreshed Every 10 Minutes...
        </div>
      </div>
      <hr>

      <h2 style="text-align: center;">State-wise Status Counter</h1>
      <div style="text-align: center;" class="table table-hover  table-striped whole text-white bg-dark">
            <?php
          //include("simple_html_dom.php");
          //$html=file_get_html("https://www.mohfw.gov.in/");
          $table=$html->find('table[class="table table-striped"]',0);
          echo $table;
          ?>

          
      </div>


      



      <div id="graph">
        <?php
        $graphdata=$html->find('tbody',0);
        //echo $graphdata;
        $stdata=array();
        foreach ($graphdata->find('td') as $key) {
          array_push($stdata, $key->plaintext);
          //echo $key->plaintext;
        }
        $len=count($stdata);
        //echo $len;
        //print_r($stdata);
        $safedata=array_slice($stdata,0,155);
        //print_r($safedata);
        $lastdata=array_chunk($safedata, 5);
        //print_r($lastdata);
        $tot=array();
        for ($cn=0; $cn < count($lastdata); $cn++) 
        {
          //array_push($death, $lastdata[$cn][2]);
          array_push($tot, array('y' =>$lastdata[$cn][2],"label"=>$lastdata[$cn][1]));
          

        }
        //echo "<br>";
        //print_r($tot);

        $migrated=array();
        for ($cn=0; $cn < count($lastdata); $cn++) 
        {
          //array_push($death, $lastdata[$cn][2]);
          array_push($migrated, array('y' =>$lastdata[$cn][3],"label"=>$lastdata[$cn][1]));
          

        }
        //echo "<br>";
        //print_r($migrated);

        $death=array();
        for ($cn=0; $cn < count($lastdata); $cn++) 
        {
          //array_push($death, $lastdata[$cn][2]);
          array_push($death, array('y' =>$lastdata[$cn][4],"label"=>$lastdata[$cn][1]));
          

        }
        //echo "<br>";
        //print_r($death);

          ?>

          <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div id="chartContainer" style="height: 350px; width: 100%;"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div id="chartContainer1" style="height: 350px; width: 100%;"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div id="chartContainer2" style="height: 350px; width: 100%;"></div>
            </div>
          </div>
        </div>
      </div>
        
      </div>



      <script>
    window.onload = function () {
 
  var chart = new CanvasJS.Chart("chartContainer", {
    title: {
      text: "Total Cases "
    },
    axisY: {
      title: "No of deaths."
    },
    data: [{
      type: "line",
      dataPoints: <?php echo json_encode($tot, JSON_NUMERIC_CHECK); ?>
    }] 

  });
  chart.render();



  var chart1 = new CanvasJS.Chart("chartContainer1", {
    title: {
      text: "Migrated"
    },
    axisY: {
      title: "No of migration."
    },
    data: [{
      type: "line",
      dataPoints: <?php echo json_encode($migrated, JSON_NUMERIC_CHECK); ?>
    }] 
  });
  chart1.render();



  var chart2 = new CanvasJS.Chart("chartContainer2", {
    title: {
      text: "Death Graph"
    },
    axisY: {
      title: "No of deaths."
    },
    data: [{
      type: "line",
      dataPoints: <?php echo json_encode($death, JSON_NUMERIC_CHECK); ?>
    }] 
  });
  chart2.render();
   
  }
  </script>





      <h6 class="text-align:center;">
        Website-Counter
        <!-- Start of WebFreeCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=gukqapp&nd=7&style=13" border="0" alt="free counter"></a>
<!-- End of WebFreeCounter Code -->
      </h6>
      <h6 class="text-align:center;">
        Website-User
        <!-- Start of WebFreeCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=gvvkqapc&nd=7&style=13" border="0" alt="visitor counter"></a>
<!-- End of WebFreeCounter Code -->
      </h6>




    </div>
    <!-- Footer -->
<footer class="page-footer font-small black">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://devapp.cf/" style="text-decoration: none;color:black;">Made With ❤ By Ashish</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    <script type="text/javascript">
      $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 7000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>