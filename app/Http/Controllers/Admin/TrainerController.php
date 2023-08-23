<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerStoreRequest;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TrainerController extends Controller
{
    //
    public function index()
    {
        $trainers = Trainer::all();
        return view('admin.trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerStoreRequest $request)
    {
        $image = $request->file('image')->store('public/trainers');

        Trainer::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image
        ]);

        return to_route('admin.trainers.index')->with('success', 'Trainer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('admin.trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $image = $trainer->image;
        if ($request->hasFile('image')) {
            Storage::delete($trainer->image);
            $image = $request->file('image')->store('public/trainers');
        }

        $trainer->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image
        ]);
        return to_route('admin.categories.index')->with('success', 'Trainer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        Storage::delete($trainer->image);
        $trainer->menus()->detach();
        $trainer->delete();

        return to_route('admin.trainers.index')->with('danger', 'Trainer deleted successfully.');
    }
}
