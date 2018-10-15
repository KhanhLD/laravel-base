<?php

namespace App\Http\Controllers\Admin;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->viewData['title'] = trans('home.title');
    }

    public function index()
    {
        return view('layouts.admin.default', $this->viewData);
    }
}
