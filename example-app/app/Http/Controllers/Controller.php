<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('welcome', compact('header'), compact('footer'));
    }

    public function corporativeClients()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('corporative-clients', compact('header', 'footer'));
    }

    public function privateClients()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('private-clients', compact('header', 'footer'));
    }

    public function news()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('news', compact('header', 'footer'));
    }

    public function support()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('support', compact('header', 'footer'));
    }

    public function company()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('company', compact('header', 'footer'));
    }

    public function vacancies()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('vacancies', compact('header', 'footer'));
    }

    public function contacts()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('contacts', compact('header', 'footer'));
    }

    public function info()
    {
        $header = view('layouts/header');
        $footer = view('layouts/footer');
        return view('info', compact('header', 'footer'));
    }

}
