<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formarisan;
use Illuminate\Support\Facades\Storage;

class FormarisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tablearisan = Formarisan::all();
        return view('formarisan.tablearisan', compact(
            'tablearisan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Formarisan() ;
        
        return view('formarisan', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // $path = $request->photo->path();
        // // $extension = $request->photo->extension();
        // $image = $request->file('file');
        // $gambarnama = time().'.'.$image->extension();
        // $image->move(public_path('img'),$gambarnama);
        
        
        if(!$request->hasFile('file'))
            return response()->json(['success' => false, 'errors' => ['file' => ['Payment proof file is required']]], 400);
        // chheck if folder(id) has uploaded before, if exists then delete old file
        $files = Storage::files('public'.$request->id.'/');
        foreach($files as $file)
            Storage::delete($file);
        // Store uploaded file       
        Storage::put('public'.$request->id, $request->file);

        $model = new Formarisan();        
        $model->openslot = $request->openslot;
        $model->keteranganopenslot = $request->keteranganopenslot;
        $model->gambaropenslot = $file; 
        $model->save();
        return redirect('tablearisan');
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
        $model = Formarisan::find($id);
        return view('formarisan.editarisan', compact(
            'model'
        ));
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
        $model = Formarisan::find($id);

        $model->openslot = $request->openslot;
        $model->keteranganopenslot = $request->keteranganopenslot;
        $model->gambaropenslot = $request->gambaropenslot; 
        $model->save();
        return redirect('tablearisan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Formarisan::find($id);
        $model->delete();
        return redirect('tablearisan');
    }
}
