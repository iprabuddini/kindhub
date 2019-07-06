<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClassRepositoryInterface;

class ClassController extends Controller
{
    private $classRepositoryInterface;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ClassRepositoryInterface $classRepositoryInterface)
    {
        $this->middleware('auth');
        $this->classRepositoryInterface = $classRepositoryInterface;
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
        return $this->classRepositoryInterface->all();
    }

    public function delete($id)
    {
        return $this->classRepositoryInterface->delete($id);
    }

    public function store(Request $request)
    {
        return $this->classRepositoryInterface->store($request->all());
    }
}
