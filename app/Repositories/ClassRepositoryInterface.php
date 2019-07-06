<?php
namespace App\Repositories;

interface ClassRepositoryInterface
{
    public function all();

    public function delete($id);

    public function store($data);
}