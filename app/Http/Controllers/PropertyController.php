<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    protected $limit_featured = 6;
    protected $limit_list = 9;
    public function index()
    {
      $props = Property::limit($this->limit_featured)->get();
      return view('index')->with(compact('props'));
    }

    public function property()
    {
      $props = Property::orderBy('created_at', 'desc')->paginate($this->limit_list);
      return view('frontend.properties')->with(compact('props'));;
    }
}
