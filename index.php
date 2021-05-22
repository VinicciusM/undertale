
          <?php
          //session_start();
          //$_SESSION["tipo"]=3;
          /*if ($_SESSION["login"]!=1 ) {
            session_unset();
            session_destroy();
            exit();
            header('location: loginanim.php');

          }*/

          include "cabeca.php";
          include "menu.php";
           ?>
     <a  id="hamburg " href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i>
     </a>
  </div>


  <?php

     if(isset($_GET['op']))
     {
       $filename = $_GET['op'] . '.php';

       if (file_exists($filename)) {
         include($filename);
       }
       else
       {
         include('home.php');
       }

     }
     else
       include('home.php');

   ?>


  <!-- Some quick example text to build on the card title and make up the bulk of the card's content.<br>  -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>
