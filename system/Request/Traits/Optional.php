<?php
namespace System\Request\Traits;

trait Optional
{
    public function isMethod($method)
    {
        if (methodField() == $method)
            return true;
        else
            return false;
    }
}