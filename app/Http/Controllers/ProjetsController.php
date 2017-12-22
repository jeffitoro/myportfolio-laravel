<?php
namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        // foreach ($projets as $projet) {
        //     $projet->img_url = $projet->getFirstMediaUrl();
        // }
        return $projets;
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
        $projet = Projet::create($request->all());
        $projet->save();
        return $projet;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->title = request('title');
        $projet->description = request('description');
        $projet->deadline = request('deadline');

        $projet->clearMediaCollection();
        
        $projet
            ->addMediaFromBase64(request('image'))
            ->usingFileName($projet->img_url)
            ->toMediaCollection();

        // echo $projet->getFirstMediaUrl();
        $projet->img_url = $projet->getFirstMedia()->getUrl('thumb');
        $projet->save();
        return $projet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();
    }
}
