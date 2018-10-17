<?php

namespace App\Http\Controllers;

use App\ClienteNaturalOld;
use App\NaturalCustomer;
use Illuminate\Http\Request;

class NaturalCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = NaturalCustomer::orderBy('cedula', 'ASC')->get();
        return $customers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $customer = new NaturalCustomer();
        $customer->cedula = $request->cedula;
        $customer->firstName = strtoupper($request->firstName);
        $customer->lastName = strtoupper($request->lastName);
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cellphone1 = $request->cellphone1;
        $customer->cellphone2 = $request->cellphone2;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->department = $request->department;
        $customer->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $customer = NaturalCustomer::findOrFail($request->id);
        $customer->cedula = $request->cedula;
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->cellphone1 = $request->cellphone1;
        $customer->cellphone2 = $request->cellphone2;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->department = $request->department;
        $customer->save();
    }

    public function deactivate(Request $request)
    {
        $customer = NaturalCustomer::findOrFail($request->id);
        $customer->delete();
    }

    public function activate(Request $request)
    {
        $customer = NaturalCustomer::findOrFail($request->id);
        $customer->restore();
    }

    public function migrate()
    {
        $clientes = ClienteNaturalOld::all();
        foreach ($clientes as $cliente) {
            $customer = new NaturalCustomer();
            $customer->cedula = $cliente->cedula;
            $customer->firstName = $cliente->nombres;
            $customer->lastName = $cliente->apellidos;
            $customer->email = $cliente->email;
            $customer->phone = $cliente->telefono;
            $customer->cellphone1 = $cliente->celular;
            $customer->cellphone2 = $cliente->otroTel;
            $customer->address = $cliente->direccion;
            $customer->city = $cliente->ciudad;
            $customer->department = $cliente->departamento;
            $customer->save();
        }
    }
}
