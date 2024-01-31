<!-- start of Header -->
<?php 
	include('includes/Header.php');
?>
<!-- end of Header -->  
<!---- Start Online Shopping Cart ----> 
<?php	include('includes/Shopping_Cart.php');	?>
<!---- end Online Shopping Cart ---->

        <!-- start of content -->   
        <div id="templatemo_content">

            <!-- start of ocntent left -->
            <div id="templatemo_content_left">
                <h1>به سایت فروشگاه ما خوش آمدید </h1>
                <!-- <p>امروزه با افزایش روز افزون تولیدکنندگان مطرح داخلی و خارجی انواع لوازم، قدرت انتخاب مشتری به شدت بالا رفته است. اما با توجه به اینکه هیچ فروشگاهی به طور فیزیکی، گنجایش تمامی این محصولات را نداشته و نیز هیچ فروشنده‌ای اطلاعات کاملی از تمامی محصولات موجود در فروشگاه خود ندارد و حتی در صورت داشتن تمامی اطلاعات، توضیح تک تک آنها، نیازمند صرف انرژی و زمان بسیار زیادی خواهد بود، جهانگیر پچکم دات کام بر آن شد تا یک مرجع جامع و کامل تخصصی ارزیابی، مشاوره و فروش محصولات تولید داخل و خارج کشور را بصورت یک فروشگاه اینترنتی در اختیار عموم مردم ایران قرار دهد.</p> -->
                <div class="cleaner_with_height">&nbsp;</div>

                <?php
                getPro();		
                getCatPro(); 
                   getBrandPro(); 
                ?>

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















