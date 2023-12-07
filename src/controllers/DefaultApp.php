<?php

namespace MyApp\Controllers;

use MyApp\Core\BaseController;

class DefaultApp extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        $this->view('template/header', $data);
        $this->view('template/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('template/js', $data);
    }
}
