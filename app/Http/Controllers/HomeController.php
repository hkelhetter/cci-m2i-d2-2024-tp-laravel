<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index', [
                'title' => 'Accueil',
                'app_name' => env('APP_NAME'),
                'routes' => [
                    [
                        'url' => route('home'),
                        'name' => 'Accueil'
                    ],
                    [
                        'url' => route('user'),
                        'name' => 'index Associer'
                    ]
                    /* [
                         'url' => route('about'),
                         'name' => 'A propos'
                     ],
                     [
                         'url' => route('contact'),
                         'name' => 'Contact',

                     ]*/
                ]
            ]
        );
    }
}

