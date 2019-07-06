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
}