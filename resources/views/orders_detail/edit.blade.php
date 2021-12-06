@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Detalles de Pedidos</a></li>
                      <li class="breadcrumb-item "><a href="#">Index</a></li>
                      <li class="breadcrumb-item active">Editar</li>
                  </ol>                 
              
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>
<div class="container ">
    <div class="card">
        <div class="card-header">
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
        </div>
          <form action="{{route('orders_detail.update', $Orders_detail->id)}}" method="POST"  autocomplete="off">
                @method('PATCH')
                @csrf            
         <div class="card-body">
            <div class="row">                    
                    <div class="form-group col-md-6">
                        <label for="articulo">ARTICULO</label>
                        <input type="text" name="articulo" class="form-control" placeholder="Ingrese El nombre del articulo" value="{{ $Orders_detail->articulo }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cantidad">CANTIDAD</label>
                        <input type="number" name="cantidad" class="form-control" placeholder="Ingrese la cantidad" value="{{ $Orders_detail->cantidad }}">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-6">
                        <label for="precio">PRECIO</label>
                        <input type="number"  name="precio" class="form-control" required placeholder="Ingrese El precio" value="{{ $Orders_detail->precio }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="total">TOTAL</label>
                       <input type="number"  name="total" class="form-control" required placeholder="Ingrese El total" value="{{ $Orders_detail->total }}">
                    </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row"> 
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a  href="{{ url('orders_detail') }}" class="btn btn-danger">Cancelar</a>
                </div>                
            </div>
        </div>
      </form>
    
    </div>   
</div>
@endsection
