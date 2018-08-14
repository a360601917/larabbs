<?php

namespace App\Http\Controllers\Api;

//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Transformers\CategoryTransformer;

class CategoriesController extends Controller {

  public function index() {
    return $this->response->collection(Category::all(), new CategoryTransformer());
  }

}
