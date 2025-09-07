<?php
namespace App\Http\Request;

use System\Request\Request;

class ProductRequest extends Request
{
    public function rules()
    {
        if($this->isMethod('put'))
        {
            return
                [
                    'name' => 'max:191',
                    'price' => 'max:191',
                    'description' => 'max:2000',
                    'image' => 'file|mimes:png,jpg,jpeg',
                    'cat_id' => 'max:191',
                ];
        }
        else
        {
            return
                [
                    'name' => 'required|max:191',
                    'price' => 'required|max:191',
                    'description' => 'required|max:2000',
                    'image' => 'file|required|mimes:png,jpg,jpeg',
                    'cat_id' => 'required|max:191',
                ];
        }
    }
}