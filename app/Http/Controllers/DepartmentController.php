<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = DB::table('departments')->where('status', 1)->where('isDeletable', 2)->get();
        return view('department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'depName' => 'required| min:3'
            ]);

            $depName = Str::upper($request->depName);
            $val1 = Department::where('depName', $depName)->orderBy('depName', 'Asc')->get();
            //dd($val1);
            if($val1 == 0){
                $success = Department::create($data);
                return redirect(route('departments.index'));
            }else{
                return redirect(route('departments.index'));
            }
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
