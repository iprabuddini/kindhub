<?php
namespace App\Repositories;

interface TeacherRepositoryInterface
{
    public function all();

    public function delete($id);

    public function store($data);

}