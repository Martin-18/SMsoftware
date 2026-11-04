<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServiceController extends Controller
{
    // ─── Vistas públicas

    public function design(): View
    {
        $services = Service::where('category', 'diseno')->latest()->get();

        return view('design', compact('services'));
    }

    public function cybersecurity(): View
    {
        $services = Service::where('category', 'ciberseguridad')->latest()->get();

        return view('ciberseguridad', compact('services'));
    }

    public function technicalServices(): View
    {
        $services = Service::where('category', 'servicios_tecnicos')->latest()->get();

        return view('technical-services', compact('services'));
    }

    // ─── Panel admin

    public function index(): View
    {
        $services = Service::latest()->get();

        return view('admin.services', compact('services'));
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $data = $request->safe()->only(['title', 'description', 'category']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return back()->with('success', 'Servicio añadido con éxito');
    }

    public function show(Service $service): View
    {
        return view('admin.show', compact('service'));
    }

    public function destroy(Service $service): RedirectResponse
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return back()->with('success', 'Servicio eliminado');
    }
}
