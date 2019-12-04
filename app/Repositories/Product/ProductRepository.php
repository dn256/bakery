<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{

    function all()
    {
        return Product::all();
    }

    function find($id)
    {
        return Product::findOrFail($id);
    }

    function delete($id)
    {
        Product::destroy($id);
    }

    function update($id, array $attribute)
    {
        Product::find($id) -> update($attribute);
    }
}