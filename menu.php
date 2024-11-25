<?php include_once('header.php');
include('hms/include/config.php');

?>

<div class="about_us">
<div class="card bg-dark text-white" >
  <img src="images/banner.jpg" class="card-img" alt="Stony Beach" width="1200" height="250" />
  <div class="card-img-overlay" >
    <h1 class="card-title-1">MENU</h1>
    
  </div>
</div>
</div>




<div class="container">
	
	<div class="menu-1">
	<h2><b>Pizza</b></h2>
    </div>
	
     
	<div class="menu-box">
  <div class="row">
    

  <?php
             $procat='pizza';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
    <div class="col-md-3">
    <div class="box">
      <img src="hms/images/<?php echo $row['proimg'];?>" width="250" height="150" > <br> <br>
      <h4> <?php echo $row['proname'];?> </h4> 
      <p><b> Rs. <?php echo $row['proprice'];?></b></p> 
       <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

        <button   type="button" class="btn btn-success " id="addItem">Add</button> 
   
                                        
                                                                              <div class="alert-message"></div>

                                      </form>
      
      </div>
  </div>
   <?php } ?>
</div>
</div>


    <div class="menu-2">
	   <h2><b>Pasta</b></h2>
    </div>


    <div class="menu-box">
  <div class="row">
	
     
	<?php
             $procat='pasta';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
    <div class="col-md-3">
    <div class="box">
      <img src="hms/images/<?php echo $row['proimg'];?>" width="250" height="150" > <br> <br>
      <h4> <?php echo $row['proname'];?> </h4> 
      <p><b> Rs. <?php echo $row['proprice'];?></b></p> 
       <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

        <button   type="button" class="btn btn-success " id="addItem">Add</button> 
   
                                        
                                                                              <div class="alert-message"></div>

                                      </form>
      
      </div>
  </div>
   <?php } ?>
</div>
</div>






<div class="menu-3">
	<h2><b>Sides</b></h2>
</div>
	
     
	<div class="menu-box">
  <div class="row">
    

<?php
             $procat='sides';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
    <div class="col-md-3">
    <div class="box">
      <img src="hms/images/<?php echo $row['proimg'];?>" width="250" height="150" > <br> <br>
      <h4> <?php echo $row['proname'];?> </h4> 
      <p><b> Rs. <?php echo $row['proprice'];?></b></p> 
       <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

        <button   type="button" class="btn btn-success " id="addItem">Add</button> 
   
                                        
                                                                              <div class="alert-message"></div>

                                      </form>
      
      </div>
  </div>
   <?php } ?>
</div>
</div>



<div class="menu-4">
	<h2><b>Beverages</b></h2>
</div>
	
     
	<div class="menu-box">
  <div class="row">
    


    <?php
             $procat='beverages';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
    <div class="col-md-3">
    <div class="box">
      <img src="hms/images/<?php echo $row['proimg'];?>" width="250" height="150" > <br> <br>
      <h4> <?php echo $row['proname'];?> </h4> 
      <p><b> Rs. <?php echo $row['proprice'];?></b></p> 
       <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

        <button   type="button" class="btn btn-success " id="addItem">Add</button> 
   
                                        
                                                                              <div class="alert-message"></div>

                                      </form>
      
      </div>
  </div>
   <?php } ?>
</div>
</div>



</div>



</div>
</div>
<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  alertmsg.html(response);

  // $this.closest('.alert-message').html(response)
  //$(this).closest('.alert-message').html(response);
 //alertmsg.html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
<?php include_once("footer.php"); ?>


