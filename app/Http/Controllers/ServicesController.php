<?php

namespace App\Http\Controllers;

use App\Models\services;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = services::latest()->paginate(5);
        return view('dashboard.services.index',compact('services'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'location' => 'required|nullable|string|min:3',
            'description' => 'nullable|string',
            'is_active' => 'in:on|string',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png'
        ]);
        
        services::create($request->all());

        return redirect()->route('admin.index')->with('success', 'service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(services $services)
    {
        return view('dashboard.services.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(services $services)
    {
        return view('dashboard.services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, services $service)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'location' => 'required|string|min:3',
            'description' => 'nullable|string',
            'is_active' => 'in:on|string',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png'
        ]);

        $updated = $service->update($request->all());

        if($updated){
            return redirect()->route('admin.index')->with('success','Service updated successfully');
        }else{
            return HttpResponse::HTTP_BAD_REQUEST ;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(services $service)
    {
        $deleted = $service->delete();

        if($deleted){
            return redirect()->route('admin.index')->with('success','Service deleted successfully');
        }else{
            return HttpResponse::HTTP_BAD_REQUEST ;
        }
        
    }
}
