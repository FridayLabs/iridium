<?php

namespace Iridium\Http\Controllers;

use Illuminate\Http\Request;

use Iridium\Http\Requests;

class ServiceController extends Controller
{
    public function index()
    {
        $services = auth()->user()->services()->get()->keyBy('name')->all();
        foreach (config('iridium.services') as $name => $features) {
            if (array_key_exists($name, $services)) {
                $services[$name]['features'] = $features;
                $services[$name]['isConnected'] = true;
            } else {
                $services[$name] = [
                    'name' => $name,
                    'isConnected' => false,
                    'features' => $features
                ];
            }
        }
        return $services;
    }

    public function connect($service)
    {
        $service = auth()->user()->services()->firstOrNew(['name' => $service]);
        $service->is_active = true;
        $service->save();
    }

    public function disconnect($service)
    {
        $service = auth()->user()->services()->where('name', $service)->first();
        if ($service) {
            $service->is_active = false;
            $service->save();
        }
    }
}
