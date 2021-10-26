<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class OsnovniController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data["menu"] = Menu::getMenu();
        $this->data['sidebar'] =Product::sidebar();

    }
}
