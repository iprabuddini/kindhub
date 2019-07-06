<?php
namespace App\Repositories;

use App\Models\SchoolClass;

class ClassRepository implements ClassRepositoryInterface
{
    public function all()
    {
        return SchoolClass::all();
    }

    public function delete($id)
    {
        $class = SchoolClass::findOrFail($id);
        $class->delete();
        return response()->json(null);
    }

    public function store($data)
    {

        $class = SchoolClass::create($data);
        return $class;
    }
}