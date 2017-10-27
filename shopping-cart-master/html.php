
<div class="container">

<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
$connect=mysqli_connect('localhost','root','','ecom');
$dynamicList = "";
$sql = mysqli_query($connect,"SELECT * FROM products ");
$productCount = mysqli_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysqli_fetch_array($sql))
	{
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 
			 $dynamicList .=  <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                             <?php <a href= "product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '"  /></a> ?>
                              </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                              <?php ' . $product_name . ' ?></h5>
                                            <h5 class="price-text-color">
                                              <?php  ' . $price . '  ?></h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                       
             
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i> <a href=<?php "product.php?id=' . $id . '" ?> >View Product Details</a</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
</div>
</div>
</div>