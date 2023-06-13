<?php

namespace Core;

abstract class Controller
{
    public function renderView(string $viewName, array $viewData = [])
    {
        require VIEW . "{$viewName}.php";
    }
}