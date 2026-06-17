<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // ─── Vistas públicas 

    public function design()
    {
        $services = Service::where('category', 'diseno')->latest()->get();
        return view('design', compact('services'));
    }

    public function cybersecurity()
    {
        $services = Service::where('category', 'ciberseguridad')->latest()->get();
        return view('ciberseguridad', compact('services'));
    }

    // ─── Panel admin 

    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:1000'],
            'category'    => ['required', 'in:diseno,ciberseguridad'],
        ]);

        Service::create($request->only('title', 'description', 'category'));

        return back()->with('success', 'Servicio añadido con éxito');
    }

    public function show(Service $service)
    {
        return view('admin.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Servicio eliminado');
    }
}