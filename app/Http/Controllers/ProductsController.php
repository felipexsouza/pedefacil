<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function create()
    {
        return view('products.create');
    }

    public function index()
    {
        return 'all products';
    }


}
