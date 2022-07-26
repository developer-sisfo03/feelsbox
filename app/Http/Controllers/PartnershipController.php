<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use App\Http\Requests\StorePartnershipRequest;
use App\Http\Requests\UpdatePartnershipRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerships = Partnership::all();
        return view('admin.partnership.index-partnership', compact('partnerships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partnership.create-partnership');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnershipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnershipRequest $request)
    {   
        // return $request;
        $partnership = new Partnership;
        $partnership->name_partnership = $request['name_partnership'];
        $partnership->slug = Str::slug($request['name_partnership']);
        $partnership->image_partnership = $request->file('image_partnership')->store('partnership');
        $partnership->save();
        return redirect('/admin/partnership');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function show(Partnership $partnership)
    {
        return $partnership;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function edit(Partnership $partnership)
    {
        return view('admin.partnership.edit-partnership', compact('partnership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnershipRequest  $request
     * @param  \App\Models\Partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnershipRequest $request, Partnership $partnership)
    {
        if($request->file("image_partnership")){ 
            
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $partnership->image_partnership = $request->file('image_partnership')->store('partnership');
        }

        $partnership->name_partnership = $request['name_partnership'];
        $partnership->slug = Str::slug($request['name_partnership']);
        $partnership->save();
        return redirect('/admin/partnership');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partnership $partnership)
    {
        //
    }
}
