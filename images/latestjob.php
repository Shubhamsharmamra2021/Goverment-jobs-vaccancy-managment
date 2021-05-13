<?php

include 'connection2.php';
 $Id =$_GET['Title'];
 $Id=mysqli_real_escape_string($con,$Id);
 $Id=htmlentities($Id);
 $sql="select * from latestjobs where Title=$Id";
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
    <title><?php echo $row['Headerofpost']; ?></title>
     
    <link rel=" stylesheet" target="_blank" href="style1.css">
    <?php  include('header.php') ?>
 

<div class="table">
  <table>
    <thead>
         <tr>
            <th colspan="2">
                <h1><?php echo $row['Headerofpost']; ?></h1> 
                <h2><?php echo $row['Departmentofpost']; ?></h2> 
                <h1> short disclimar of notification</h1> 
                <h3>www.Govermentjobs.com</h3>
           </th>
         </tr>
         <tr>
             <th> Name of post:</th>
             <td><?php echo $row['Nameofpost']; ?></td>
        </tr>
        <tr >
             <th > Date of post:</th>
             <td ><?php echo $row['Dateofpost']; ?></td>
        </tr >
        <tr >
            <th > Short Discription:</th>
            <td > <?php echo $row['Shortdisclimar']; ?> </td>
        </tr>
    </thead>
    <tbody> 
        <tr class="tr2">
            <th  rowspan="5"> Important dates: </th>
            <td>Apply Start: <?php echo $row['Applydate']; ?></td>
        <tr>
            <td>Last Date of Apply:   <span style="color: rgb(236, 24, 24) ;
                font-weight: 600;"> <?php echo $row['Lastdate']; ?></span></td>
        </tr>
        <tr>
            <td>Last Date of fee submit:<?php echo $row['Lastpaydate']; ?></td>
        </tr>
        <tr>
            <td>Admit card :<?php echo $row['Admitcarddate']; ?></td>
        </tr>
        <tr>
           <td>Exam Date:<?php echo $row['Examdate']; ?></td>
         </tr>
         <tr class="tr3">
            <th >  Age limit: </th>
              <td>
            <ul style="padding:30px;">
                <li><?php echo $row['MInage']; ?> </li>
                <li><?php echo $row['MAXage']; ?> </li>
                <li> <?php echo $row['Agepoint']; ?></li>
            
                 
            </ul> 
              </td>
        </tr>
        <tr class="tr3">
            <th > Exam fees: </th>
              <td>
            <ul style="padding:30px;">
                <li> <?php echo $row['Examfee1']; ?></li>
                <li><?php echo $row['Examfee2']; ?></li>
                <li><?php echo $row['Examfee3']; ?></li>
                <li>Pay the Examination Fee Through Debit Card, Credit Card, Net Banking or Pay Offline Fee Payment Mode Only</li>
                 
            </ul> 
              </td>
        </tr> 
        <tr class="tr4">
           <th>  Qualification:  </th>
               <td>
                  <ol  >
                     <li  ><?php echo $row['Qualification1']; ?> </li>
                     <li  style="padding:12px;"> </li>
                     <li>Read carefully all instruction in official notfication</li>
                  </ol>
               </td>
        </tr>
        <tr>
            <th colspan="2">Total Vaccency:<?php echo $row['Totalpost']; ?> </th>
        </tr> 
       
        <tr>
            <th colspan="2">For Detailed Vacancy Details Read Notification.
 </th>
        </tr>
                            
        <tr class="tr4">
            <th  >  How fill form step us: </th>
                <td>
                    <ol>
                        <li><?php echo $row['Apply1']; ?>  </li>
                        <li style="padding:12px;"><?php echo $row['Apply2']; ?> <span font=bold>Apply -<?php echo $row['Applydate']; ?> to <?php echo $row['Lastdate']; ?> </span></li>
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
               <th class="tda1"><a target="_blank" href="<?php echo $row['Downloadlink']; ?>">Click here</a></th>
        </tr >
        <tr class="tra1">
               <th class="tha1"> Apply online</th>
               <th class="tda1"><a target="_blank" href="<?php echo $row['Applylink']; ?>">Restration</a>|<a target="_blank" href="#">Apply npw</th>
        </tr >
        <tr class="tra1">
               <th class="tha1"> official website:</th>
               <th class="tda1"><a target="_blank" href="<?php echo $row['Officialwebsite']; ?>">Click here</a></th>
        </tr >
        <?php    }?>
  </table>
</div>  
</div>
 
 
                          

  <?php  include('footerr2.php')
  
                ?>
                 
  