<?php

namespace App\Controller;

use App\Model\Customers;

class CustomersController
{
    public function index()
    {
        
        $customers = new customers();
        
        return $customers->findAll();
    }
}