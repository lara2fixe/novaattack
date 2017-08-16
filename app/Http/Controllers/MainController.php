<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
	{
        return view('layouts.secondary', [
            'page' => 'pages.main',
            'title' => 'Блог :: Татьяна Красикова — PHP разработчик, иллюстратор, графический дизайнер',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
		]);
	}

    public function blog()
	{
        return view('layouts.primary', [
            'page' => 'pages.blog',
            'title' => 'Блог :: Татьяна Красикова — PHP разработчик, иллюстратор, графический дизайнер',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
		]);
	}

    public function post()
	{
        return view('layouts.tertiary', [
            'page' => 'pages.post',
            'title' => 'Блог :: Татьяна Красикова — PHP разработчик, иллюстратор, графический дизайнер',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
		]);
	}

    public function folio()
	{
        return view('layouts.secondary', [
            'page' => 'pages.folio',
            'title' => 'Блог :: Татьяна Красикова — PHP разработчик, иллюстратор, графический дизайнер',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
		]);
	}

}
