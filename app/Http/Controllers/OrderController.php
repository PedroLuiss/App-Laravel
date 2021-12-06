<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Requests\SaveOrderRequest;
use App\Models\Orders;
use App\Models\Orders_detail;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index(){ 

        $orders = Orders::select('orders.id','orders.number_orden','orders.fecha','orders.monto','orders.estado','orders_detail.articulo','users.name')
                ->join('orders_detail', 'orders_detail.id', '=', 'orders.id_detalle')->join('users','orders.id_usuario','=','users.id')->get();

        return view('order.index',compact('orders'));
    }

    public function create(){
        $user = User::orderBy('id' , 'desc')->pluck('name', 'id');
        $orders_details = Orders_detail::orderBy('id' , 'desc')->pluck('articulo', 'id');
        return view('order.create', compact('orders_details','user'));
    }

    public function store(SaveOrderRequest $request){

        $order = new Orders();
            
        $order->number_orden  = request('number_orden');
        $order->fecha          = request('fecha');
        $order->monto  = request('monto');
        $order->estado       = request('estado');
        $order->id_detalle  = $request->get('id_detalle');
        $order->id_usuario  = $request->get('id_usuario');
 
    //dd($producto);
        $order->save();
        return redirect('order/')->with('mensaje','Agregado correctamente');
    } 

    public function edit($id)
    {
        $user = User::orderBy('id' , 'desc')->pluck('name', 'id');
        $orders_detail = Orders_detail::orderBy('id' , 'desc')->pluck('articulo', 'id');
        return view('order.edit',['Order' => Orders::findOrFail($id),'user' => $user,'orders_detail'=> $orders_detail]);
    } 

    public function update(UpdateOrderRequest $request,$id)
    {
        $order = Orders::findOrFail($id);

        $order->number_orden  = $request->get('number_orden');
        $order->fecha          = $request->get('fecha');
        $order->monto          = $request->get('monto');
        $order->estado        = $request->get('estado');
        $order->id_detalle     = $request->get('id_detalle');
        $order->id_usuario     = $request->get('id_usuario');
        $order->update(); 
        return redirect('order/')->with('mensaje','Actualizado correctamente');
    }
    public function destroy($id){
        $order = Orders::find($id);
        $order->delete();
        return redirect('order/')->with('mensaje','Eliminado Correctamente');
    }
}

