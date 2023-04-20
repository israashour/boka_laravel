<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Service;
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
        $services = Service::orderBy('id')->simplePaginate(15);
        return view('dashboard.services.index', compact('services'));
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
            'location' => 'required|string',
            'description' => 'string|required',
            'start_time' => 'date_format:h:i',
            'end_time' => 'date_format:h:i',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png',
            'is_active' => 'in:1,0',
        ]);

        Service::create($request->all());
        $service = new Service();
        if($request->has('image')){
            $cover = $request->file('image');
            $imagename = time().$service->name.'.'.$cover->getClientOriginalExtension();
            $request->file('image')->storePubliclyAs('Service',$cover,['disk'=>'public']);
            $service->image = $imagename;
        }

        return redirect()->route('services.index')->with('success', 'service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'location' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'is_active' => 'in:1,0',
            'start_time' => 'date_format:h:i',
            'end_time' => 'date_format:h:i',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png'
        ]);

        $updated = Service::whereId($id)->update($validatedData);
        $service = new Service();

        if($request->has('image')){
            $cover = $request->file('image');
            $imagename = time().$service->name.'.'.$cover->getClientOriginalExtension();
            $request->file('image')->storePubliclyAs('services',$cover,['disk'=>'public']);
            $service->image = $imagename;
        }
        if ($updated) {
            return redirect()->route('services.index')->with('success', 'Service updated successfully');
        } else {
            return HttpResponse::HTTP_BAD_REQUEST;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Service::findOrFail($id)->delete();

        if ($deleted) {
            return redirect()->route('services.index')->with('success', 'Service deleted successfully');
        } else {
            return HttpResponse::HTTP_BAD_REQUEST;
        }
    }
}


