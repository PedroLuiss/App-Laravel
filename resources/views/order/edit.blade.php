@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Pedidos</a></li>
                      <li class="breadcrumb-item ">Index</li>
                      <li class="breadcrumb-item active">Editar</li>
                  </ol>      
                </div> <!-- end card body-->
            </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
    <div class="card">
        <div class="page">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div> 
        <div class="card-header">
            <h4>Editar Pedido</h4>
        </div>
        <div class="card-body">
       {!! Form::open(['action' => ['OrderController@update', $Order->id],'method' => 'PATCH','files'=>'true']) !!}
            {{ Form::token() }}
            <div class="row">                    
                    <div class="form-group col-md-6">
                        <label for="number-orden">Nº ORDEN</label>
                        <input type="number" name="number_orden" class="form-control" placeholder="Ingrese El numero de orden" value="{{ $Order->number_orden }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha">FECHA</label>
                        <input type="date" name="fecha" class="form-control" value="{{ $Order->fecha }}">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-6">
                        <label for="monto">MONTO</label>
                        <input type="number" step="any" name="monto" class="form-control" required placeholder="Ingrese El precio" value="{{ $Order->monto }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Estado</label>
                        <select class="form-control" name="estado"><option selected="selected" value="">Selecciona un detalle para du pedido</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-6">
                        <label  class="control-label" for="id_detalle">DETALLE</label>
                         {{  Form::select('id_detalle', $orders_detail,null,['class' => 'form-control','placeholder' => 'Selecciona un detalle para du pedido'])}}
                    </div>
                    <div class="form-group col-md-6">
                        <label  class="control-label" for="id_usuario">USUARIO</label>
                        {{  Form::select('id_usuario', $user,null,['class' => 'form-control','placeholder' => 'Selecciona un Usuario Para El Pedido'])}}
                    </div>
            </div>
            <div class="row"> 
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a  href="{{ url('order') }}" class="btn btn-danger">Cancelar</a>
                </div>                
            </div>
        {!! Form::close() !!}
    </div>
    </div>

</div>

@endsection
