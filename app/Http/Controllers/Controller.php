<?php 

namespace App\Http\Controllers;
use Jenssegers\Blade\Blade;

class Controller 
{
    protected function view($view, $data = []) 
    {
        $blade = new Blade('./app/Views', 'storage');
        echo $blade->make($view, $data)->render();
    }
}