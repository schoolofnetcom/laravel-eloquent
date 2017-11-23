<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name']; //categories
    protected $table = 'categorias';

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

//tabela sing. _ tabela sing.
//
// category_product


/** @var Builder $category */
/*$category = new Category();

$query = $category->where()
                ->where()
                ->where()

$query->where()

    $results = $query->get();*/

/** @var Collection $results */
/*$results = Category::all();

$results->pluck()*/

