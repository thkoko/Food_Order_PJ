<?php
include_once __DIR__.'/../layouts/sidebar.php';
include_once __DIR__.'/../controller/productController.php';

$prod_controller=new ProductController();
$products=$prod_controller->getProducts();
?>

            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Product</strong> Dashboard</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=1;
                                        foreach($products as $product)
                                        {
                                            echo "<tr>";
                                            echo "<td>".$count++."</td>";
                                            echo "<td>".$product['name']."</td>";
                                            echo "<td>".$product['price']."</td>";
                                            echo "<td>".$product['image']."</td>";
                                            echo "<td>".$product['description']."</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
					

					

				</div>
			</main>