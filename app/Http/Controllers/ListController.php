<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListRequest;
Use App\Models\Category;
use App\Models\Llist;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists =Llist::all();
        return view('list.index',compact('lists'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::paginate(5);
        return view('list.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListRequest $request)
    {
        // $request->validate([
        //     'name'=> 'required',
        //     'club'=>'required',
        //     'country'=>'required',
        //     'trophy'=> 'required',
        //     'status' => 'required'
        // ]);
        $list = new Llist();
        $list->name = $request->name;
        $list->club = $request->club;
        $list->country = $request->country;
        $list->trophy = $request->trophy;
        $list->status = $request->status;
        $list->category_id = $request->category_id;
        $list->save();
        return redirect()->route('list.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $list = Llist::find($id);
        return view('list.show',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $list=Llist::find($id);
        return view('list.edit',compact('list','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $list=Llist::find($id);
        $list->name = $request->name;
        $list->club = $request->club;
        $list->country = $request->country;
        $list->trophy = $request->trophy;
        $list->status = $request->status;
        $list->category_id = $request->category_id;
        $list->update();
        return redirect()->route('list.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $list=Llist::find($id);
        if($list){
            $list->delete();
            return back();
        }
    }
}
