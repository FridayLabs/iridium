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
                $services[$name] += [
                    'features' => $features,
                    'isConnected' => true,
                ];
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
        sleep(10);
    }

    public function disconnect($service)
    {
        sleep(10);
    }
}
