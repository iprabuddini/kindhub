<?php
namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    /**
     * Get's a student by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($student_id)
    {
        return Student::find($student_id);
    }
}