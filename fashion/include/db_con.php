<?php

      $server = "127.0.0.1";
      $username = "root";
      $password = "19932010";
      $db_name = "ecommerce";

      @$db_con = mysql_pconnect($server, $username, $password);

      if ($db_con) {

                     if(!mysql_select_db($db_name)) {  die('Sorry we are running maintenace right now');


                       } else { $db_connection=mysql_select_db($db_name); }


                } else{ die("Sorry we are currently running maintenace right now.. try again."); }

             
?>
