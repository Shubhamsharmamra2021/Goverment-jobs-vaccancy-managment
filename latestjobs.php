
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goverment jobs | Latest Jobs</title>
    
    <?php  include('header.php') ?>
    <link rel=" stylesheet" target="_block" href="style1.css">
     
    
 
    <section>

    
    <div class = "listcontent">
      
        <h1>Latest Jobs</h1>
      <ul>
      <?php

include 'connection2.php';
$selectquery="select * from  latestjobs,jobs order by  jobs.id desc ";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
if (mysqli_num_rows($query)>0)
{
  while($res=mysqli_fetch_assoc($query)){
?>
<li><a target="_block" href="latestjob.php?latestjobs.Id=<?php echo $res[' jobs.Id']; ?>"> <?php echo $res['Name']; ?> <?php echo $res['Nameofpost']; ?>  </a><br>LastDate:<?php echo $res['Lastdate']; ?></li>

<?php } ?> 
 <?php } ?> 
     
    </div>
</section>  
 
 
<?php  include('footer.php') ?>