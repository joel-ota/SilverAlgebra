<?php

namespace App\Controller;

use App\Model\Customers;
use Core\Controller;

class CustomersController extends Controller
{
    public function home()
    {
        $this->renderView('app', [
            'title' => 'Customers'
        ]);
    }

    public function index()
    {
        $customers = new Customers();

        $this->renderView('customers', [
            'title' => 'Customers',
            'data' => $customers->findAll()
        ]);
    }
}