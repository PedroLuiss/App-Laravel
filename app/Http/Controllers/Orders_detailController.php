<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateOrders_detailRequest;
use App\Http\Requests\SaveOrders_detailRequest ;

use App\Models\Orders_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class Orders_detailController extends Controller
{
    public function index(){

        $orders_details = Orders_detail::all();
        return view('orders_detail.index', compact('orders_details')); 
        
    }

    public function create(){

        return view('orders_detail.create');

    }

    public function store(SaveOrders_detailRequest  $request){
        
        $Orders_detail = Orders_detail::create([
            'articulo' => $request->get('articulo'),
            'cantidad' => $request->get('cantidad'),
            'precio' => $request->get('precio'),
            'total' => $request->get('total')
        ]);

        $messege = $Orders_detail ? 'Agregado correctamente' : 'Error al agregar';
        return redirect()->route('orders_detail.index')->with('mensaje', $messege);
    }

    public function edit($id){

        $Orders_detail = Orders_detail::findOrFail($id);

        return view('orders_detail.edit' ,compact('Orders_detail'));
    }

    public function update(UpdateOrders_detailRequest $request, $id){

        $orders_detail = Orders_detail::findOrFail($id);
        $orders_detail->articulo = $request->get('articulo');
        $orders_detail->cantidad = $request->get('cantidad');
        $orders_detail->precio = $request->get('precio');
        $orders_detail->total = $request->get('total');
        $orders_detail->update();

        $messege = $orders_detail ? 'Actualizado correctamente' : 'Error al agregar';

        return redirect('/orders_detail')->with('mensaje', $messege);
    }

    public function destroy($id){
        
        Orders_detail::find($id)->delete();
        return back()->with('mensaje', 'Eliminado Correctamente');
     }
}
