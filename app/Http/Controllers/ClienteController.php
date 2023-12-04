<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Illuminate\Contracts\Http\Kernel;

class ClienteController extends Controller
{
    
    public function index()
    {
        //

        $clients = Cliente::all();
        return response()->json($clients);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Cliente $cliente)
    {
        //
    }

    
    public function edit(Cliente $cliente)
    {
        //
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    
    public function destroy(Cliente $cliente)
    {
        
    }
}
