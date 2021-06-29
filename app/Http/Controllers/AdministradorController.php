<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Venta;
use App\Models\User;
use App\Models\Departamento;

class AdministradorController extends Controller
{
    public function getUsuarios(){
        $usuarios = User::all();

        return view('usuarios', compact('usuarios'));
    }

    public function getDepartamentos(){     
        $departamentos = Departamento::withCount('user')->get();
        return view('departamentos', compact('departamentos'));
    }

    public function getCompras(){

        $usuarios = User::all();
        $compras = Compra::all();

        return view('compras', compact('usuarios'), compact('compras'));
    }

    public function nuevaCompra(Request $request){
        $compra = new Compra();
        $compra->cantidad = $request->get('cantidad');
        $compra->precio = $request->get('precio');
        $compra->user_id = $request->get('user_id');
        $compra->save();

        $usuarios = User::all();
        $compras = Compra::all();

        return view('compras', compact('usuarios'), compact('compras'));
    }

    public function getVentas(){
        $ventas = Venta::all();
        $usuarios = User::all();

        return view('ventas', compact('usuarios'), compact('ventas'));
    }

    public function nuevaVenta(Request $request){
        $venta = new Venta();
        $venta->cantidad = $request->get('cantidad');
        $venta->precio = $request->get('precio');
        $venta->user_id = $request->get('user_id');
        $venta->save();

        $ventas = Venta::all();
        $usuarios = User::all();

        return view('ventas', compact('usuarios'), compact('ventas'));
    }

    public function nuevoDepartamento(){
        $departamento = new Departamento();
        $departamento->nombre = $request->get('nombre');
        $departamento->save();

        $departamentos = Departamento::withCount('user')->get();
        return view('departamentos', compact('departamentos'));
    }
}
