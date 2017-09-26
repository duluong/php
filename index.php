<?php
	// set page headers
	$page_title = "Upload and Handle image with PHP";
	include_once 'view/header.php';



/*	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

	// define variables and set to empty values
	$action = $prodId = $prodName = $description = $price = "";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if ($_POST["action"] != null) {
			$action = $_POST["action"] ;
			$action = test_input($action);
		}
		if ($_POST["prodId"]  != null) {
			$prodId = $_POST["prodId"] ;
			$prodId = test_input($prodId);
		} 
		if ($_POST["prodName"]  != null) {
			$prodName = $_POST["prodName"] ;
			$prodName = test_input($prodName);
		} 
		if ($_POST["description"]  != null) {
			$description = $_POST["description"] ;
			$description = test_input($description);
		} 
		if ($_POST["price"]  != null) {
			$price = $_POST["price"] ;
			$price = test_input($price);
		}
	}
*/
/*	include_once 'model/product.php';
	$productCRUD = new Product();
	$products = null;

	switch ($action) {
		case 'Search':
			$products = $productCRUD->searchProduct($prodName, $description, $price);
			break;
		
		case 'Create':
			$ret = $productCRUD->addProduct($prodName, $description, $price);
			$products = $productCRUD->getAllProducts();
			break;

		case 'Update':
			$ret = $productCRUD->updateProduct($prodId, $prodName, $description, $price);
			$products = $productCRUD->getAllProducts();
			break;

		case 'Delete':
			$ret = $productCRUD->deleteProduct($prodId);
			$products = $productCRUD->getAllProducts();
			break;

		default:
			$products = $productCRUD->getAllProducts();
			break;
	}*/

	$tmp_name = $_FILES['upImg']['tmp_name'];
	$path = getcwd() . DIRECTORY_SEPARATOR . 'images';
	$name = $path . DIRECTORY_SEPARATOR . $_FILES['upImg']['name'];
	$ret = move_uploaded_file($tmp_name, $name);
	if (!$ret) {
		echo "upload error" ;
	}
?>

<form class="form-horizontal" method="POST">
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="upImg">Select img for upload:</label>
	    <div class="col-sm-5">
	        <input type="file" class="form-control" id="upImg" name="upImg">
	    </div>
	    <div class="col-sm-3">
	      <input type = "submit" class="btn btn-primary btn-sm" name = "upload" value = "Upload"> 
	    </div>
	  </div>

</form>



<?php
include_once 'view/footer.php';
?>
