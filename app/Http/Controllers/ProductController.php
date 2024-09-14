<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        $input = [
            "name" => "Silver",
            "details" => [
                "brand" => "Jawellery",
                "tags" => ["Silver", "Money", "jawellery"]
            ]
        ];

        return Product::create($input);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function search()
    {
        $products = Product::whereJsonContains("details->tags", "24K")->get();

        return $products;
    }
}
