<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class BaseController extends Controller
{
    protected $viewData;

    public function __construct()
    {
        $this->viewData = [];
        $this->viewData['nav'] = $this->routeArray();
    }

    public function checkPermission($permission, $msg = null)
    {
        return abort_if(Gate::denies('permission', $permission), 403, $msg);
    }

    public function routeArray()
    {
        $currentRoute = Route::getCurrentRoute();
        $routeArray = Str::parseCallback($currentRoute ? $currentRoute->getActionName() : '', null);
        if (!is_null(last($routeArray))) {
            $controller = str_replace('Controller', '', class_basename(head($routeArray)));
            $action = str_replace(['get', 'post', 'patch', 'put', 'delete'], '', last($routeArray));

            return [
                'controller' => Str::lower($controller),
                'action' => Str::lower($action),
            ];
        }

        return [];
    }
}
