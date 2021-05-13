<?php

include 'connection2.php';
 $Id =$_GET['jobs.id'];
 $Id=mysqli_real_escape_string($con,$Id);
 $Id=htmlentities($Id);
 $sql="select * from latestjobs ,jobs where  jobs.id=$Id";
 $res=mysqli_query($con,$sql);
 if(mysqli_num_rows($res))
 {
      $row=mysqli_fetch_assoc($res);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['latestjobs.Headerofpost']; ?></title>
     
    <link rel=" stylesheet" target="_blank" href="style1.css">
    <?php  include('header.php') ?>
 

<div class="table">
  <table>
    <thead>
         <tr>
            <th colspan="2">
                <h1><?php echo $row['latestjobs.Headerofpost']; ?></h1> 
                <h2><?php echo $row['latestjobs.Departmentofpost']; ?></h2> 
                <h1> short disclimar of notification</h1> 
                <h3>www.Govermentjobs.com</h3>
           </th>
         </tr>
         <tr>
             <th> Name of post:</th>
             <td><?php echo $row['latestjobs.Nameofpost']; ?></td>
        </tr>
        <tr >
             <th > Date of post:</th>
             <td ><?php echo $row['latestjobs.Dateofpost']; ?></td>
        </tr >
        <tr >
            <th > Short Discription:</th>
            <td > <?php echo $row['latestjobs.Shortdisclimar']; ?> </td>
        </tr>
    </thead>
    <tbody> 
        <tr class="tr2">
            <th  rowspan="5"> Important dates: </th>
            <td>Apply Start: <?php echo $row['latestjobs.Applydate']; ?></td>
        <tr>
            <td>Last Date of Apply:   <span style="color: rgb(236, 24, 24) ;
                font-weight: 600;"> <?php echo $row['latestjobs.Lastdate']; ?></span></td>
        </tr>
        <tr>
            <td>Last Date of fee submit:<?php echo $row['latestjobs.Lastpaydate']; ?></td>
        </tr>
        <tr>
            <td>Admit card :<?php echo $row['latestjobs.Admitcarddate']; ?></td>
        </tr>
        <tr>
           <td>Exam Date:<?php echo $row['latestjobs.Examdate']; ?></td>
         </tr>
         <tr class="tr3">
            <th >  Age limit: </th>
              <td>
            <ul style="padding:30px;">
                <li><?php echo $row['latestjobs.MInage']; ?> </li>
                <li><?php echo $row['latestjobs.MAXage']; ?> </li>
                <li> <?php echo $row['latestjobs.Agepoint']; ?></li>
            
                 
            </ul> 
              </td>
        </tr>
        <tr class="tr3">
            <th > Exam fees: </th>
              <td>
            <ul style="padding:30px;">
                <li> <?php echo $row['latestjobs.Examfee1']; ?></li>
                <li><?php echo $row['latestjobs.Examfee2']; ?></li>
                <li><?php echo $row['latestjobs.Examfee3']; ?></li>
                <li>Pay the Examination Fee Through Debit Card, Credit Card, Net Banking or Pay Offline Fee Payment Mode Only</li>
                 
            </ul> 
              </td>
        </tr> 
        <tr class="tr4">
           <th>  Qualification:  </th>
               <td>
                  <ol  >
                     <li  ><?php echo $row['latestjobs.Qualification1']; ?> </li>
                     <li  style="padding:12px;"> </li>
                     <li>Read carefully all instruction in official notfication</li>
                  </ol>
               </td>
        </tr>
        <tr>
            <th colspan="2">Total Vaccency:<?php echo $row['latestjobs.Totalpost']; ?> </th>
        </tr> 
       
        <tr>
            <th colspan="2">For Detailed Vacancy Details Read Notification.
 </th>
        </tr>
                            
        <tr class="tr4">
            <th  >  How fill form step us: </th>
                <td>
                    <ol>
                        <li><?php echo $row['latestjobs.Apply1']; ?>  </li>
                        <li style="padding:12px;"><?php echo $row['latestjobs.Apply2']; ?> <span font=bold>Apply -<?php echo $row['latestjobs.Applydate']; ?> to <?php echo $row['latestjobs.Lastdate']; ?> </span></li>
                        <li  >Kindly Check and College the All Document - Eligibility, ID Proof, Address Details, Basic Details</li>
                        <li  style="padding:12px;">Kindly Ready Scan Document Related to Recruitment Form - Photo, Sign, ID Proof, Etc.</li>
                        <li >Before Submit the Application Form Must Check the Preview and All Column Carefully.</li>
                        <li  style="padding:12px;">If Candidate Required to Paying the Application Fee Must Submit. If You have Not the Required Application Fees Your Form is Not Completed.</li>
                        <li  >Take A Print Out of Final Submitted Form.</li>
                        <li style="padding:12px;">Read carefully all instruction in official notfication</li>
                     </ol>
                </td>
        </tr>
        <tr >
            <th >  Video how apply:</th>
                <td class="td7"> <iframe width="310" height="170" src="https://www.youtube.com/embed/OhJWg-0qdI0?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
        </tr >
        <tr>
            <th colspan="2">Interested Candidate Can Read the Full Notification Before Apply Online.
            </th>
        </tr>
    </tbody>
  </table>
  <table> 
    <tr>
        <th colspan="2"  >  <img src="images/logo.png" width=100px heght=200px></th>
    </tr>
  
        <tr class="tra1">
              <th class="tha1" colspan="2" >Some Useful Important Links
              </th>
        </tr>
        <tr class="tra1">
               <th class="tha1"> Download Notfication:</th>
               <th class="tda1"><a target="_blank" href="<?php echo $row['latestjobs.Downloadlink']; ?>">Click here</a></th>
        </tr >
        <tr class="tra1">
               <th class="tha1"> Apply online</th>
               <th class="tda1"><a target="_blank" href="<?php echo $row['latestjobs.Applylink']; ?>">Restration</a>|<a target="_blank" href="#">Apply npw</th>
        </tr >
        <tr class="tra1">
               <th class="tha1"> official website:</th>
               <th class="tda1"><a target="_blank" href="<?php echo $row['latestjobs.Officialwebsite']; ?>">Click here</a></th>
        </tr >
        <?php    }?>
  </table>
</div>  
</div>
 
 
                          

  <?php  include('footerr2.php')
  
                ?>
                 
  