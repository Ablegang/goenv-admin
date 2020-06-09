<?php

namespace App\Http\Controllers;

use Dcat\Admin\Layout\Content;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->full()
            ->row();
    }
}