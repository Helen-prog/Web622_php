<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        dump(route('admin.products.index'));
        return 'Admin product list';
    }

    public function create(){
        return 'Admin product create';
    }

    public function show($product){
        return "Admin product show: $product";
    }
}
