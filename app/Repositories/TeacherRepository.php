<?php
namespace App\Repositories;

use App\Models\Teacher;

class TeacherRepository implements TeacherRepositoryInterface
{
    /**
     * Get's a teacher by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($teacher_id)
    {
        return Teacher::find($teacher_id);
    }

    public function all()
    {
        return Teacher::all();
    }

    public function delete($id)
    {
        $class = Teacher::findOrFail($id);
        $class->delete();
        return response()->json(null);
    }

    public function store($data)
    {

        $class = Teacher::create($data);
        return $class;
    }
}