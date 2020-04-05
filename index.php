
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <div class="container">
      <div class="jumbotron bg-dark">
        <h1 class="display-4" style="text-align: center;">COVID-19 Counter</h1>
        <hr class="my-4">
        <p style="text-align: center;">Coronavirus Counter Page for India.<br>
        Made With ❤ by <span style="color:red;text-decoration: underline;font-size:30px;"><em>Ashish.</em></span></p>
        <center>
        <a class="btn btn-primary btn-lg" href="https://www.who.int/" role="button" >WHO Website.</a>
          <br>
          <a class="btn btn-primary btn-lg" href="https://devapp.cf/" role="button" >Visit My Website.</a>
        </center>
      </div>
      <div class="card text-center bg-dark">
        <div class="card-header">
          <h4>
          Live Counter.
          </h4>
        </div>
        <div class="card-body">
          <div class="card-group bg-dark">
        <?php
        include("simple_html_dom.php");
        $html=file_get_html("https://www.mohfw.gov.in/");
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
        duration: 3000,
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
