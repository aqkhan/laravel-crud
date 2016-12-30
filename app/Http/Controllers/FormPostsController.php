<?php

namespace App\Http\Controllers;

use App\FormPost;
use App\Http\Requests\CreateFormPostRequest;
use Illuminate\Http\Request;

class FormPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = FormPost::all();
        $posts = FormPost::OrderByName();
        return view('formposts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formposts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormPostRequest $request)
    {
        // One way to validate (without making request is commented below)

        /*
        $this->validate($request,[
            'title' => 'required|max:5'
        ]);
        */

        FormPost::create($request->all());
        return redirect('/form-posts');
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
        $post = FormPost::findOrFail($id);
        return view('formposts.edit', compact('post'));
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
        FormPost::findOrFail($id)->update($request->all());
        return redirect('/form-posts');
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
        FormPost::findOrFail($id)->delete();
        return redirect('/form-posts');
    }
}
