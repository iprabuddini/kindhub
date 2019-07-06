<?php
namespace App\Repositories;

use App\Post;

class StudentRepository implements StudentRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Post::find($post_id);
    }
}