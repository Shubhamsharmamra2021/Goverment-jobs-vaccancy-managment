<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input results jobs</title>
    <link rel="stylesheet" href="inputstyle.css">
</head>
<body>
     
      <div class=" center">
             <h1>UPDATE Results JOB VACCENCY</h1>
                 <form action="" method="POST">
                     <input type="text"   name="title"     placeholder=" Enter your title"/><br>
                     <input type="text"   name="hop"       placeholder=" Enter your header"/><br>
                     <input type="text"   name="dop"       placeholder=" Enter your department post"/><br>
                     <input type="text"   name="nop"       placeholder=" Enter your namepost"/><br>
                     <input type="text"   name="shortd"    placeholder=" Enter your shortdisclimar"/><br>
                     <input type="text"   name="applyd"    placeholder=" Enter your applydate"/><br>
                     <input type="text"   name="lastd"     placeholder=" Enter your lastdate"/><br>
                     <input type="text"   name="payd"      placeholder=" Enter your lastpaydate"/><br>
                     <input type="text"   name="admitd"    placeholder=" Enter your admitcarddate"/><br>
                     <input type="text"   name="examd"     placeholder=" Enter your examdate"/><br>
                     <input type="text"   name="age1"      placeholder=" Enter your minage"/><br>
                     <input type="text"   name="age2"      placeholder=" Enter your maxage"/><br>
                     <input type="text"   name="age3"      placeholder=" Enter your date how before"/><br>
                     <input type="text"   name="fee1"      placeholder=" Enter your feec1"/><br>
                     <input type="text"   name="fee2"      placeholder=" Enter your feec2"/><br>
                     <input type="text"   name="fee3"      placeholder=" Enter your feec3"/><br>
                     <input type="text"   name="quali1"    placeholder=" Enter your qulification1"/><br>
                     <input type="text"   name="tpost"    placeholder=" Enter your totalpost"/><br>
                     <input type="text"   name="apply1"    placeholder=" Enter your how apply"/><br>
                     <input type="text"   name="apply2"    placeholder=" Enter your how apply"/><br>
                     <input type="text"   name="downotice" placeholder=" Enter your notice link"/><br>
                     <input type="text"   name="applylink" placeholder=" Enter your applylink"/><br>
                     <input type="text"   name="offiweb"   placeholder=" Enter your official weblink"/><br>
                     <input type="text"   name="result" placeholder=" Enter your result link"/><br>
                     <input type="submit" name="submit"    placeholder=" submit data"  onclick="return mess();"/>
                 </form> 
                <script> 
                 function mess()
                    {
                  alert ("your record is sucess fully saved");
                   return true;
                   } 
                </script>   
      </div>
      
</body>
</html>
<?php
include ('connection2.php');
 $slug='';
   if(isset($_POST['submit'])){
                 $slug=preg_replace('/[^a-z0-9]+/i', '-', trim (strtolower($_POST['title'])));
                                   
                    $hop        =  $_POST['hop'];
                    $dop        =  $_POST['dop'];
                    $nop        =  $_POST['nop'];
                    $shortd     =  $_POST['shortd'];
                    $applyd     =  $_POST['applyd'];
                    $lastd      =  $_POST['lastd'];
                    $payd       =  $_POST['payd'];
                    $admitd     =  $_POST['admitd'];
                    $examd      =  $_POST['examd'];
                    $age1       =  $_POST['age1'];
                    $age2       =  $_POST['age2'];
                    $age3       =  $_POST['age3'];
                    $fee1       =  $_POST['fee1'];
                    $fee2       =  $_POST['fee2'];
                    $fee3       =  $_POST['fee3'];
                    $quali1     =  $_POST['quali1'];
                    $tpost     =  $_POST['tpost'];
                    $apply1     =  $_POST['apply1'];
                    $apply2     =  $_POST['apply2'];
                    $downotice  =  $_POST['downotice'];
                    $applylink  =  $_POST['applylink'];
                    
                    $offiweb    =  $_POST['offiweb'];
                    $resul    =  $_POST['result']; 

                     $insertquery="insert into Radhe( `Title`, `Headerofpost`, `Departmentofpost`, 
                     `Nameofpost`, `Shortdisclimar`, `Applydate`, `Lastdate`, `Lastpaydate`, 
                     `Admitcarddate`, `Examdate`, `MInage`, `MAXage`, `Agepoint`, `Examfee1`, `Examfee2`, `Examfee3`,  
                     `Qualification1`, `Totalpost`, `Apply1`, `Apply2`, `Downloadlink`, `Applylink`, `Officialwebsite`,`Admitcard`) 
                     values('$slug','$hop','$dop','$nop','$shortd','$applyd','$lastd','$payd','$admitd','$examd' 
                     ,' $age1','$age2','$age3','$fee1','$fee2','$fee3','$quali1','$tpost','$apply1','$apply2'
                     ,'$downotice',' $applylink',' $offiweb',' $resul ')";


                     $res1=mysqli_query($con,$insertquery);
                     if($res1){
                          header("Location:inputresults.php");
                          exit;


                     }
                     else{

                         echo die(mysqli_error($db));
                     }
 }


?>
