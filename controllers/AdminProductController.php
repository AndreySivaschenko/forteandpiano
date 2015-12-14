<?php

class AdminProductController extends AdminBase
{
	
	public function actionIndex()
	{
		self::checkAdmin();

		$productList = Product::getProductList();

		require_once(ROOT.'/views/admin_product/index.php');
		return true; 
	}

	public function actionCreate()
	{
		self::checkAdmin();
		$category = new Category();
		$product = new Product();

		$categoriesList = $category->getCategoriesListAdmin();
		$subCategoriesList = $category->getSubCategoriesListAdmin();

		if(isset($_POST['add_product']))
		{
			$options['title']=$_POST['title'];
			$options['code']=$_POST['code'];
			$options['price']=$_POST['price'];
			$options['category_id']=$_POST['category_id'];
			$options['subcategory_id']=$_POST['subcategory_id'];
			$options['brand']=$_POST['brand'];
			$options['info']=$_POST['info'];
			$options['description']=$_POST['description'];
			$options['availability']=$_POST['availability'];
			$options['sale']=$_POST['sale'];
			$options['is_new']=$_POST['is_new'];
			$options['is_recommended']=$_POST['is_recommended'];
			$options['status']=$_POST['status'];
			$errors=false;

			if(!isset($options['title']) || empty($options['title']))
			{
				$errors[]='Заполните поля';
			}
			if($errors == false)
			{
				$id = $product->createProduct($options);

				if($id)
				{
					if(is_uploaded_file($_FILES['image']['tmp_name']))
					{
						move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/upload/images/products/'.$id.'.jpg');
					}
				}
				header('Location: /admin/product');
			}

		}
		require_once(ROOT.'/views/admin_product/create.php');
		return true;

	}
	public function actionUpdate($id)
	{
		self::checkAdmin();
		$category = new Category();
		$products = new Product();

		$categoriesList = $category->getCategoriesListAdmin();
		$subCategoriesList = $category->getSubCategoriesListAdmin();

		$product=Product::getProductById($id);

		if(isset($_POST['save']))
		{
			$options['title']=$_POST['name'];
			$options['code']=$_POST['code'];
			$options['price']=$_POST['price'];
			$options['category_id']=$_POST['category_id'];
			$options['subcategory_id']=$_POST['subcategory_id'];
			$options['brand']=$_POST['brand'];
			$options['info']=$_POST['info'];
			$options['description']=$_POST['description'];
			$options['availability']=$_POST['availability'];
			$options['sale']=$_POST['sale'];
			$options['is_new']=$_POST['is_new'];
			$options['is_recommended']=$_POST['is_recommended'];
			$options['status']=$_POST['status'];


			if($products->updateProductById($id,$options))
			{
		

				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/upload/images/products/'.$id.'.jpg');
				}
			}

			header('Location: /admin/product');
		}
		require_once(ROOT.'/views/admin_product/update.php');
		return true;

	}


	public function actionDelete($id)
	{
		$product = new Product();
		self::checkAdmin();

		if(isset($_POST['delete']))
		{
			$product->deleteProductById($id);

			header("Location: /admin/product");
		}
		require_once(ROOT.'/views/admin_product/delete.php');
		return true;
	}
}