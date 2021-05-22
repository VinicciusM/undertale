<link href="underhome.css" type="text/css" rel="stylesheet">

      <?php
      $bd_host="localhost";
      $bd_user="root";
      $bd_password="";
      $bd_database="undertale_14957";


	  $sql = new mysqli($bd_host,$bd_user,$bd_password,$bd_database);
	  if ($sql->connect_error) {
		die();
  }

            if (isset($_SESSION["login"]))
            {
              $tp=$_SESSION["tipo"];
            }
            else
            {
              $tp=0;
            }

					$men = "SELECT idmenu, nomeop, link,permissao, target FROM menu WHERE permissao=?";
					$statement = $sql->prepare($men);
          $statement->bind_param('i',$tp);

					// Ligar os parametros aos ?, onde (s = string, i = integer, d = double,  b = blob)

					// Executar o query
					$statement->execute();

					// Ligar o resultado a variáveis
					$statement->bind_result($idmenu,$nomeop,$link,$per,$target);
					while($statement->fetch())
					{
					?>
            <?php
            if ($nomeop=='<i class="fas fa-user-circle"></i>') {
             ?>
             <a class="text-white aument" style="font-size:150%;margin-top:-10px;" id="<?php  echo $idmenu; ?>" onclick="window.open('<?php  echo $link; ?>','<?php  echo $target; ?>')" cellspacing="2" ><?php  echo $nomeop; ?></a>

             <?php
           }

             else{ ?>
            <a class="text-white aument" id="<?php  echo $idmenu; ?>" onclick="window.open('<?php  echo $link; ?>','<?php  echo $target; ?>')" cellspacing="2" ><?php  echo $nomeop; ?></a>

          <?php } ?>



		<?php 		}
					$statement->close();

          //href='<?php  echo $link; ?>
