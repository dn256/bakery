<?php


namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    function all();
    function find($id);
    function delete($id);
    function update($id, array $attribute);
}