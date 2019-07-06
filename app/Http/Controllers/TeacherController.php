<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    private $teacherRepositoryInterface;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TeacherRepositoryInterface $teacherRepositoryInterface)
    {
        $this->middleware('auth');
        $this->teacherRepositoryInterface = $teacherRepositoryInterface;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('class.list');
    }

    public function getAll()
    {
        return $this->teacherRepositoryInterface->all();
    }

    public function delete($id)
    {
        return $this->teacherRepositoryInterface->delete($id);
    }

    public function store(Request $request)
    {
        return $this->teacherRepositoryInterface->store($request->all());
    }
}
