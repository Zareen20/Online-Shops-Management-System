<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "user-registration";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
<HTML>
<HEAD>
<TITLE>Order Product</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="../index.php">Home</a> | <a href="login.php">Login</a> | <a href="user-registration.php">New User</a>
			</div>
			<div class="">
				<form name="sign-up" action="product_order.php" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Product Order </div>
		<p align="center">		   
<?php
if(isset($_POST['signup-btn']))
{	 
	 $name = $_POST['name'];
	 $contact = $_POST['contact'];
	 $product = $_POST['product'];
	 $sql = "INSERT INTO tbl_order (name,contact,product)
	 VALUES ('$name','$contact','$product')";
	 if (mysqli_query($conn, $sql)) {
		echo "Thank you. We will contact you immediately!";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
</p>
			<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Your Name<span class="required error" id="name-info"></span>
							</div>
							<input class="input-box-330" type="text" name="name" id="name">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Mobile Number<span class="required error" id="contact-info"></span>
							</div>
							<input class="input-box-330" type="text" name="contact" id="contact">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Product Details<span class="required error" id="product-info"></span>
							</div>
							<input class="input-box-330" type="text" name="product" id="product">
						</div>
					</div>
					
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Order Confirm">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function signupValidation() {
	var valid = true;

	$("#name").removeClass("error-field");
	$("#contact").removeClass("error-field");
	$("#product").removeClass("error-field");

	var Name = $("#name").val();
	var Contact = $("#name").val();
	var Product = $("#name").val();
	

	$("#name-info").html("").hide();
	$("#contact-info").html("").hide();
	$("#product-info").html("").hide();

	if (Name.trim() == "") {
		$("#name-info").html("required.").css("color", "#ee0000").show();
		$("#name").addClass("error-field");
		valid = false;
	}
	if (Contact.trim() == "") {
		$("#contact-info").html("required.").css("color", "#ee0000").show();
		$("#contact").addClass("error-field");
		valid = false;
	}
	if (Product.trim() == "") {
		$("#product-info").html("required.").css("color", "#ee0000").show();
		$("#product").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
