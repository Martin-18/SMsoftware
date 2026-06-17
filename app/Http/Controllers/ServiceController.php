<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:1000',
        'category' => 'required|in:diseno,ciberseguridad',
    ]);

    Service::create($request->all());
    return back()->with('success', 'Servicio añadido con éxito');
}

public function index()
{
    $services = Service::all();
    return view('admin.services', compact('services'));
}

public function destroy(Service $service)
{
    $service->delete();
    return back()->with('success', 'Servicio eliminado');
}

public function show(Service $service)

{    return view('admin.show', compact('service'));
}
}


