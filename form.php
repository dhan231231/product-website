

<?php 
include "connection.php";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$mobilenum=$_POST['mobilenum'];
$message=$_POST['message'];




$query=mysqli_query($con, "insert into  clues ( name, mobilenum, message) value ('$name','$mobilenum','$message')");
if ($query) {
echo "<script>alert('Thanks For contacting! We will get Back to you soon.');</script>"; 
echo "<script>window.location.href = './'</script>"; 
} else {
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
} }
?>




<section class="latest spad">
<div class="container">

<div class="row">
<div class="col-lg-5">
<div class="contact__form__text">
<div class="section-title">
<span>Form</span>
<h2>Get in touch</h2>
</div>
<p>As you might expect of a company that began as a high-end interiors contractor, we pay strict
attention.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="contact__form">
<form class=""  action="" method="POST">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<input class="form-input" type="text" name="name" value="" placeholder="Please Enter Name" required autocomplete="off">
</div>
<div class="col-lg-6 col-md-6 col-sm-6">

 <input type="text" class="form-input"  name="mobilenum" placeholder="Mobile Number" value="" required="true" maxlength="10" pattern="[0-9]+"required>
</div>
<div class="col-lg-12">
<input type="form-input" type="text" name="message" value=""  placeholder="Enter Your Message" required autocomplete="off"></textarea>
<button type="submit" class="site-btn" name="submit" value="Submit">Send Message</button>
</div>
</div>
</form>
</div>
</div>
</div>






</div>
</section>