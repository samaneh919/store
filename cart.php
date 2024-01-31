<!-- start of Header -->
<?php
include('includes/Header.php');
?>
<!-- end of Header -->



<!-- start of content -->
<div id="templatemo_content">

	<!-- start of ocntent left -->
	<div id="templatemo_content_left">
		<h1>به سایت فروشگاه ما خوش آمدید </h1>
		<div class="cleaner_with_height">&nbsp;</div>
		
		<?php
//operator button chekout ,continue , update_cart
	

//creating or using cookie </span>
if(isset($_COOKIE["ipUserEcommerce"]))
{
		$ip	= $_COOKIE["ipUserEcommerce"];
}else{
		$ip=getIp();
		setcookie('ipUserEcommerce',$ip,time()+1206900);
}
	if(isset($_POST['update_cart']))
	{
		if(isset($_POST['remove']))
		{
		foreach($_POST['remove'] as $remove_id)
			{
				$delete_product = "delete from cart where ip_add='$ip' AND p_id='$remove_id'";
				$run_delet =@mysqli_query($con,$delete_product);
				if ($run_delet){
					echo "<script>window.open('cart.php','_self')</script>";							
				}
			}
		}
	}
 
	if(isset($_POST['continue']))
	{
		echo "<script>window.open('index.php','_self')</script>";
	}	
?>
<form action="cart.php" method="post" enctype="multipart/form-data">

			<table align="center" width="100%" bgcolor="#be457c" style="border-collapse: collapse;">

				<tr align="center" style="border: 1px solid black;">

					<td colspan="5" style="border: 1px solid black;text-align:center;background:#440522;">
						<h2> محصولاتی که تا اکنون شما خریده اید </h2>
					</td>

				</tr>


				<tr style="border: 1px solid black;">
					<th colspan="2" style="border: 1px solid black;padding: 15px;text-align:center;">محصول</th>
					<th style="border: 1px solid black;padding: 15px;text-align:center;">تعداد</th>
					<th style="border: 1px solid black;padding: 15px;text-align:center;">قیمت</th>
					<th style="border: 1px solid black;padding: 15px;text-align:center;">حذف</th>
				</tr>

				<?php
				$total	=	0;

				global $con;
				//creating or using cookie 
				if (isset($_COOKIE["ipUserEcommerce"])) {
					$ip	= $_COOKIE["ipUserEcommerce"];
				} else {
					$ip = getIp();
					setcookie('ipUserEcommerce', $ip, time() + 1206900);
				}
				$sel_price	=	"select * from cart where ip_add='$ip'";

				// @mysqli_query($con,"SET NAMES SET utf8");

				@mysqli_query($con, "SET CHARACTER SET utf8");

				$run_price	=	@mysqli_query($con, $sel_price);

				while ($p_price 	=	@mysqli_fetch_array($run_price)) {
					$pro_qty = $p_price['qty'];

					$pro_id	=	$p_price['p_id'];

					$pro_price	=	"select * from products where product_id='$pro_id'";

					$run_pro_price	=	@mysqli_query($con, $pro_price);

					while ($pp_price	=	@mysqli_fetch_array($run_pro_price)) {

						$product_title	=	$pp_price['product_title'];

						$product_image	=	$pp_price['product_image'];

						$single_price	=	$pp_price['product_price'];
						
						// $product_id     =   $pp_price('product_id');


				?>

						<tr align="center" style="border: 1px solid black;">

							<td style="padding: 15px;">
								<?php echo $product_title ?>
							</td>

							<td style="padding: 15px;">
								<img src="Admin_area/<?php echo $product_image ?>" width="60" height="45">
							</td>

							<td style="padding: 15px;">
							<?php
	//enter qty user in table cart
	
	if(isset($_POST['update_cart']))
	
	{
	
		$str_ip = str_replace(".", "", "$ip");
		
		$qty = $_POST["$str_ip$product_id"];
		
		$update_qty = "update cart set qty='$qty' where p_id='$product_id' ";
		
		$run_qty=@mysqli_query($con,$update_qty);
		
		$_SESSION["$str_ip"]["$product_id"]=$qty;
	
	}	
	
 

		$str_ip = str_replace(".", "", "$ip");

		if(isset($_SESSION["$str_ip"]["$product_id"]))

		{

			echo "<input type='text' size='4' name='$str_ip$product_id' value='". $_SESSION["$str_ip"]["$product_id"]."'>";
			
			$quantity = $_SESSION["$str_ip"]["$product_id"];
			
			$total +=($single_price*$quantity);
			
			
		
		}else
		
		{
		
			echo "<input type='text' size='4' name='$str_ip$product_id' value='$pro_qty'>";
			
			$total+=($single_price*$pro_qty);
			
	
		}

?>      
							</td>

							<td style="padding: 15px;">
								<?php echo $single_price ?>
							</td>

							<td style="padding: 15px;">
								<input type="checkbox" name="remove[]" value="<?php echo $product_id;?>" />
							</td>

						</tr>

				<?php

					}
				}

				?>

				<tr align="center" style="border:1px solid black;">
					<td colspan="4" style="padding: 15px;">
						<b>جمع کل</b>
					</td>
					<td style="padding: 15px;">
						<b><?php echo $total . " تومان "; ?></b>
					</td>
				</tr>
				<tr align="left" style="border:1px solid black;">
					<td style="padding: 15px;">
						<input type="submit" name="continu" value="ادامه خرید" />
					</td>
					<td></td>
					<td>
						<button name="checout">تسویه حساب</button>
					</td>



					<td></td>
					<td>
						<input type="submit" name="update_cart" value="به روز رسانی خریدهای شما " />
					</td>
				</tr>
							
						
			</table>

		</form>
		<div class="cleaner_with_height">&nbsp;</div>
		<!-- end of ocntent left -->
		<div class="cleaner_with_height">&nbsp;</div>

		<!-- <h2>New Products</h2> -->
		<!-- <div class="product_box"> -->
		<!-- <h3>Product One</h3> -->
		<!-- <img src="images/templatemo_image_01.jpg" alt="image" /> -->
		<!-- <p>Aliquam tristique lacus in sapien. Suspendisse potenti.</p> -->
		<!-- <div class="price">PRICE:<span>$14.00</span></div>                            -->
		<!-- <div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a> -->
		<!-- </div> -->
		<!-- <div class="product_box"> -->
		<!-- <h3>Product Title</h3> -->
		<!-- <img src="images/templatemo_image_02.jpg" alt="image" /> -->
		<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p> -->
		<!-- <div class="price">PRICE:<span>$18.00</span></div>                            -->
		<!-- <div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a> -->
		<!-- </div> -->
		<!-- <div class="product_box"> -->
		<!-- <h3>Product Title</h3> -->
		<!-- <img src="images/templatemo_image_03.jpg" alt="image" /> -->
		<!-- <p>Suspendisse potenti. Ut sed pede. Nullam vitae tellus. </p> -->
		<!-- <div class="price">PRICE:<span>$26.00</span></div>                            -->
		<!-- <div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a> -->
		<!-- </div> -->

		<div class="cleaner_with_height">&nbsp;</div>
	</div>

	<!-- start of right content -->
	<?php
	include('includes/Right_Sidebar.php')
	?>
	<!-- end of right content -->

	<div class="cleaner">&nbsp;</div>
</div>
<!-- end of content -->
<!-- start of footer -->
<?php include('includes/Footer.php');	?>
<!-- end of footer -->