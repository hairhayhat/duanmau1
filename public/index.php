<?php
require_once '../connect/connect.php';
require_once '../controllers/admin/CategoriesAdminControllers.php';
require_once '../models/admin/CategoriesAdminModels.php';



$action = isset($_GET['act']) ? $_GET['act'] : 'client';

switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'client':
        include '../views/client/index.php';
        break;

    case 'products':
        include '../views/admin/products/products.php';
        break;
    case 'add-products':
        include '../views/admin/products/add-products.php';
        break;

    case 'list-categories':
        (new CategoryAdminController)->listCategories();
        break;
    case 'add-categories':
        include '../views/admin/categories/add-categories.php';
        break;
}