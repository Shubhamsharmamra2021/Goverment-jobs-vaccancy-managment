<?php
   
   $username="root";
   $password="";
   $server='localhost';
   $db='govermentjobdata';

$con= mysqli_connect($server, $username,$password,$db);

if($con){
    ?>

     <script>
     alert('connection succesful');
     </script>
    
     <?php
}else{
  // echo"no connection";
   die("no connection".mysqli_connect_error());
}


?>