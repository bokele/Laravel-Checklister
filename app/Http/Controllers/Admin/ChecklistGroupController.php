<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChacklistGroupRequest;
use App\Models\ChecklistGroup;
use Illuminate\Http\Request;

class ChecklistGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checklist_groups = ChecklistGroup::lastet();

        return view('admin.checklist_groups.index', compact('checklist_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.checklist_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChacklistGroupRequest $request)
    {
        ChecklistGroup::create($request->validated());

        return redirect()->route('dashboard');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  ChecklistGroup $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistGroup $checklistGroup)
    {
        return view('admin.checklist_groups.edit', compact('checklistGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ChecklistGroup $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function update(StoreChacklistGroupRequest $request, ChecklistGroup $checklistGroup)
    {
        $checklistGroup->update($request->validated());

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ChecklistGroup $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup)
    {
        $checklistGroup->delete();

        return redirect()->route('dashboard');
    }
}
