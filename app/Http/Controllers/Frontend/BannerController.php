<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BannerController extends Controller
{

    public function index(): View

    {

        $banners =Banner::latest()->paginate(5);



        return view('banners.index',compact('banners'))

                    ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {

        return view('banners.create');

    }



    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request): RedirectResponse

    {

        $request->validate([

            'title' => 'required',
            'heading' => 'required',
            'detail' => 'required',
            'btnname' => 'required',


        ]);



        Banner::create($request->all());



        return redirect()->route('banners.index')

                        ->with('success','Banner created successfully.');

    }



    /**

     * Display the specified resource.

     */


    public function show(Banner $banner): View

    {

        return view('banners.show',compact('banner'));

    }



    /**

     * Show the form for editing the specified resource.

     */

    public function edit(Banner $banner): View

    {

        return view('banners.edit',compact('banner'));

    }



    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, Banner $banner): RedirectResponse

    {

        $request->validate([

            'tilte' => 'required',
            'heading' => 'required',

            'detail' => 'required',
            'btnname' => 'required',


        ]);



        $banner->update($request->all());



        return redirect()->route('banners.index')

                        ->with('success','Banner updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     */

    public function destroy(Banner $banner): RedirectResponse

    {

        $banner->delete();



        return redirect()->route('banners.index')

                        ->with('success','Banner deleted successfully');

    }
}
