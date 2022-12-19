<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Empleado extends Model
{
    use  HasFactory;
    protected function Nombre(): Attribute
    {
        return new Attribute(
            // get: function($value){
            //     return ucwords($value);
            // },
            set: function ($value) {
                return strtolower($value);
            }
        );
        
    }
    protected function ApellidoP(): Attribute
    {
        return new Attribute(
            // get: function($value){
            //     return ucwords($value);
            // },
            set: function ($value) {
                return strtolower($value);
            }
        );
    }
    protected function ApellidoM(): Attribute
    {
        return new Attribute(
            // get: function($value){
            //     return ucwords($value);
            // },
            set: function ($value) {
                return strtolower($value);
            }
        );
    }
}
