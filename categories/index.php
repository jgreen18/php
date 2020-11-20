<?php
include "../app/CategoryController.php";
$categoryController = new CategoryController();

$categories = $categoryController->get();

#echo json_encode($categories);
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Categories
	</title>

	<style type="text/css">
		
		.he th,tr,thead,tbody,td{
			border-style: solid;
		}
	</style>
</head>
<body>
	<div class="he">
		<h1>categories</h1>
		<table>
			<thead>
				<th>
					#
				</th>
				<th>
					name
				</th>
				<th>
					description
				</th>

			</thead>
			<tbody>

				<?php 
				foreach ($categories as $category) {
					echo "<tr>
						<td>
							".$category['id']."
						</td>
						<td>
							".$category['name']."
						</td>
						<td>
							".$category['description']."
						</td>
					</tr>";
				}
				 ?>


					
			</tbody>
		</table>

		<form action="../app/categoryController.php" method="POST">
            <fieldset>

                <legend>
                    Add new Category
                </legend>

                <label>
                    Name
                </label>
                <input type="text"  name="name" placeholder="terror" required=""> 
                <br>

                <label>
                    Description
                </label>
                <textarea placeholder="write here" name="description" rows="5" required=""></textarea>
                <br>

                <label>
                    Status
                </label>
                <select name="status">
                    <option> active </option>
                    <option> inactive </option>
                </select>
                <br>

                <button type:="submit">Save Category</button>

                <input type=hidden name="action" value="store">

            </fieldset>
        </form>
	</div>

</body>
</html>