<?php

namespace App\Http\Controllers;

use App\Models\landingPage;
use App\Http\Requests\StorelandingPageRequest;
use App\Http\Requests\UpdatelandingPageRequest;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landingPages = landingPage::all()[0];
        try {
            if(auth()->user()->role == 'admin'){
                return view('admin.landing-page.index-landing-page', compact('landingPages'));
            }
        }
        catch (\Exception $e) {
            return view('about-us', compact('landingPages'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelandingPageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelandingPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\landingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function show(landingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function edit(landingPage $landingPage)
    {
        return view('admin.landing-page.edit-landing-page',[
            'landingPage' => $landingPage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelandingPageRequest  $request
     * @param  \App\Models\landingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelandingPageRequest $request, landingPage $landingPage)
    {   
        $landingPage->update($request->all());
        return redirect()->route('landing-page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(landingPage $landingPage)
    {
        //
    }
}
