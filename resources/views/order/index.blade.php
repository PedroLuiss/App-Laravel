@extends('layouts.app')
@section('content')

    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">               
                      <a href="{{ route('order.create') }}" class="btn btn-outline-primary btn-rounded mt-2"><i class="mdi mdi-plus"></i>Agregar</a> 
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Pedidos</a></li>
                      <li class="breadcrumb-item active">Index</li>
                  </ol>                 
              
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>
    <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">LISTA DE PEDIDOS</h4>
              <div class="table-responsive-sm ">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;">
                        <input type="text" tabindex="0"></div>
                        <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 11.7344px;">#</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 70.2617px;">Nº Orden</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.4883px;">Fecha</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 65.4883px;">Monto</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65.4883px;">Estado</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width:140.688px;">Detalle Articulo</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65.4883px;">Usuario</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 40.4883px;">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>                    
                     @foreach($orders as $orders)
                        <tr>
                            <td>{{ $orders->id }}</td>
                            <td>{{ $orders->number_orden }}</td>
                            <td>{{$orders->fecha}}</td>
                            <td>{{$orders->monto}}</td>
                            <td>{{$orders->estado}}</td>
                            <td>{{$orders->articulo}}</td>
                            <td>{{$orders->name}}</td>
                            <td>
                                {!! Form::open(['action' => ['OrderController@destroy', $orders->id],'method' => 'DELETE']) !!}
                                {{ Form::token() }}
                                    <button class="btn btn-outline-danger" onclick="return confirm('Estas Seguro de Eliminar Esta Producto?')">
                                        <i class="mdi mdi-window-close"></i>
                                    </button>
                                {!! Form::close() !!}
                                <a href="{{URL::action('OrderController@edit',$orders->id)}}">
                                    <button type="button" class="btn btn-outline-info">
                                        <i class="mdi mdi-pencil-outline"></i>
                                    </button> 
                                </a> 
                            </td>
                        </tr>
                        @endforeach
                         </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

 
</div>
@endsection