<?php
	require '../assets/functions.php';
	require '../assets/products.php';
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$products = new Products();
	$SearchCategoryphp = $_POST['Search_CategoryPHP'];
	$SearchCategory = $_POST['Search_Category'];
	$SearchSubCategory = $_POST['Search_SubCategory'];

	if(isset($SearchCategoryphp)){
		$icategory = $products->get_product_info_by_category($SearchCategoryphp);
	}elseif (isset($SearchCategory)) {
		$icategory = $products->get_product_info_by_category($SearchCategory);
		echo json_encode($icategory);
		return;
	}elseif(isset($SearchSubCategory)){
		$icategory = $products->get_product_info_by_subcategory($SearchSubCategory);
		echo json_encode($icategory);
		return;
	}else{
		$icategory = $products->get_product_info_by_category('Buketter'); //THIS IS NOT ASYNCHRONOUS UPDATE!!!!
	}

	include 'sortiment_view.php';
?>


