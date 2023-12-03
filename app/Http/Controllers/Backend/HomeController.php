<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Home::query();

            return DataTables::of($query)
                ->addColumn('checkbox', '<input type="checkbox" class="form-check-input" id="checkbox1" value="">')
                ->addColumn('DT_RowIndex', function ($row) {
                    return $row->id;
                })
                ->addColumn('action', function ($home) {
                    return '
                     <a href="' . route('admin.home.edit', $home->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                     <form action="' . route('admin.home.destroy', $home->id) . '" method="POST" onsubmit="return confirm(\'Are you sure?\');" style="display: inline;">
                         ' . method_field('delete') . csrf_field() . '
                         <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                     </form>';
                })
                ->rawColumns(['checkbox', 'action'])
                ->make(true);
        }

        return view('backend.home.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
