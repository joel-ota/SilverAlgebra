<?php

namespace App\Controller;

class SiteController
{
    public function contact()
    {
        return 'Contact';
    }

    public function about()
    {
        $this->renderView('app', [
            'title' => 'About'
        ]);
    }
}