<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Here is where the resource   Role
|
|@autor : 
|@email : 
|
|
|
|--Generated with ❤❤❤❤ by slugger---
|*/


class Role extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

        'name'=>$this->name,'description'=>$this->description
        
        ];
    }
}
