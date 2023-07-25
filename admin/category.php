<?php
include_once __DIR__.'/../layouts/sidebar.php';
include_once __DIR__.'/../controller/categoryController.php';

$cat_controller=new CategoryController();
$categories=$cat_controller->getCategories();
?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Category</strong> Dashboard</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=1;
                                        foreach($categories as $category)
                                        {
                                            echo "<tr>";
                                            echo "<td>".$count++."</td>";
                                            echo "<td>".$category['name']."</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
					

					

				</div>
			</main>

<?php
include_once __DIR__.'/../layouts/app_footer.php';
?>