<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

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
        $services = services::orderBy('id')->simplePaginate(15);
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
            // 'location' => 'required|string',
            'description' => 'string|required',
            // 'is_active' => 'in:on|string',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png'
        ]);

        services::create($request->all());
        // Storage::put('file.jpg', $service);

        return redirect()->route('admin.index')->with('success', 'service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = services::findOrFail($id);
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            // 'location' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            // 'is_active' => 'in:on|string',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png'
        ]);

        $updated = services::whereId($id)->update($validatedData);

        if ($updated) {
            return redirect()->route('admin.index')->with('success', 'Service updated successfully');
        } else {
            return HttpResponse::HTTP_BAD_REQUEST;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = services::findOrFail($id)->delete();

        if ($deleted) {
            return redirect()->route('admin.index')->with('success', 'Service deleted successfully');
        } else {
            return HttpResponse::HTTP_BAD_REQUEST;
        }
    }
}
