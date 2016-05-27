<?php
require_once 'dbconnect.php';

class Products {
	public function __construct(){
		try{
            $this->dbh = new DBconnect();
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
	}

	public function get_product_info_by_category($category){
		try {
			$stmt = $this->dbh->getConnection()->prepare(
				"SELECT * FROM product
				LEFT JOIN product_text
				ON Product.category = product_text.category
				WHERE product.category = :category
				 ");
			$stmt->execute(array(':category'=> $category));
			return $stmt->fetchAll(PDO::FETCH_OBJ);

		}catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function get_product_info_by_subcategory($subcategory){
		try {
			$stmt = $this->dbh->getConnection()->prepare(
				"SELECT * FROM product
				 WHERE Sub_category
				 LIKE :subcategory
				");

			$stmt->execute(array(':subcategory'=> $subcategory));
			return $stmt->fetchAll(PDO::FETCH_OBJ);

		}catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>
