<?php

namespace App\Models;

class Car
{
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public static function create($brand, $model, $year)
    {
        return new self($brand, $model, $year);
    }
}

?>