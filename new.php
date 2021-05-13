<div class="container">

<form  action=" " method="POST"  >
<fieldset>

 

<!-- Text input-->

 
<label > Name</label>  
 
 
 <input  name="name" placeholder="Name"  type="text">
 

<!-- Text input-->

 
<label  >degree</label> 
 
 
 <input name="degree" placeholder=" degree"  type="text">
 

 
 
<!-- Button -->
  <button name="submit" type="submit"   >  SUBMIT     </button>
 

</fieldset>
</form>
</div>
</div><!-- /.container -->
 

<?php  
include 'connection.php';
 
  if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $degree=$_POST['degree'];
       
       $insertquery="insert into  myfirst(name,date ) 
       values( '$name','$degree' ) ";

       $res=mysqli_query($con, $insertquery);
       if($res){
        ?>

        <script>
        alert(' data inserted');
        </script>
       
        <?php
       }
       else{

        ?>

     <script>
     alert(' not inserted');
     </script>
    
     <?php
       }
 
 
  }
 ?>