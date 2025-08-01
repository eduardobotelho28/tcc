<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if (!$session->has('user')) {
            return redirect()->to('/'); 
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //nada por aqui!
    }
}
