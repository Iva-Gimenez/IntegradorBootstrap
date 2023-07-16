<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthAdmin implements FilterInterface
{
     public $aliases = [
        'authAdmin' => \App\Filters\AuthAdmin::class,
    ];
    public function before(RequestInterface $request, $arguments = null)
    {
       

        if (!session()->logged_in && session()->get('perfil_id') != 1) {
            return redirect()->to('/')->with('error', 'Sin Autorización ');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}