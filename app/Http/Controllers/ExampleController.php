<?php

namespace App\Http\Controllers;

use App\Models\ExampleForm;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'This Is An Example Form';
        return view('example.form',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $example = new ExampleForm();
        if ($request->picture) {
            $validatedData = $request->validate([
                'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

               ]);

               $name = $request->picture->getClientOriginalName();
               $path = $request->picture->store('public/images');

            $example->first_name = $request->first_name;
            $example->last_name = $request->last_name;
            $example->city = $request->city;
            $example->country = $request->country;
            $example->company = $request->company;
            $example->email = $request->email;
            $example->picture = $path;
        }
        else{
            $example->first_name = $request->first_name;
            $example->last_name = $request->last_name;
            $example->city = $request->city;
            $example->country = $request->country;
            $example->company = $request->company;
            $example->email = $request->email;
        }
        $example->save();
        return redirect()->back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
