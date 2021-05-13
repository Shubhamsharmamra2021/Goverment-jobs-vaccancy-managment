<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content=" " name="keywords">
    <meta content=" " name="description">
        
    <title> Government Jobs</title>
    
       <?php  include('header.php') ?>
    <section>
        <!--POst Section 
    
    ================================================Results-->
     
    <div class = "fbox1">
      
        <h1>Results</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata  order by Title DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Title=<?php echo $res['Title']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
         <a target="_block" href="#"> View more</a></li>
        
    </div>     
    <div class = "fbox2">

      
        <h1>Admitcards</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobs order by job_id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res[' Nameofpost']; ?>  </a> LastDate:<?php echo $res[' Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
     
    </div>     
    <div class = "fbox3">
      
        <h1>Latestjobs</h1>
      <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
        

      
    </div>
    <aside >

       
  
  
  
  
  
  
  
  
  
  
        </aside>                          
    <div class = "fbox7">
      <div>
        <h1>answer key</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
    </div>
     <div class="fbox5">
        <h1>Syllabus</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
    </div>
    </div>
    <div class = "fbox6">
      
        <h1>Admission</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
     
    </div>
    <div class = "fbox7">
        <div>
        <h1> Imortant</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
     </div>
      <div class="fbox5">
        <h1>Certicicate verification</h1>
        <ul>
      <?php

          include 'connection2.php';
          $selectquery="select * from  latestjobsdata order by Id DESC ";
          $query= mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);
          if (mysqli_num_rows($query)>0)
          {
            while($res=mysqli_fetch_assoc($query)){
      ?>
          <li><a target="_block" href="latestjob.php?Id=<?php echo $res['Id']; ?>"> <?php echo $res['Nameofpost']; ?>  </a> LastDate:<?php echo $res['Lastdate']; ?></li>
          
          <?php } ?> 
           <?php } ?> 
         </ul>
    </div>     
    </div>





    <aside >

        
  
  
  
  
        </aside>



    </section>
    
  
 <?php  include('footer.php') ?>