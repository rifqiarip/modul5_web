<?php

namespace App\Routes;

include "app/Controller/ProductController.php";

use App\Controller\ProductController;

class ProductRoutes {
    public function handle($method, $path) {
        // Jika request method get dan path sama dengan "/api/product"
        if ($method === "GET" && $path === "/api/modul5") {
            $controller = new ProductController();
            echo $controller->index();
        }

        // Jika request method get dan path mengandung "/api/product/
        if ($method === "GET" && strpos($path, "/api/modul5/") === 0) {
            // Extract id dari path
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        // Jika request method post dan path sama dengan "/api/product"
        if ($method === "POST" && $path === "/api/modul5") {
            $controller = new ProductController();
            echo $controller->insert();
        }

        // Jika request method put dan path mengandung "/api/product/
        if ($method === "PUT" && strpos($path, "/api/modul5/") === 0) {
            // Extract id dari path
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController;
            echo $controller->update($id);
        }

        // Jika request method delete dan path mengandung "/api/product/"
        if ($method === "DELETE" && strpos($path, "/api/modul5/") === 0) {
            // Extract id dari path
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}