@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Lista de usuario</h4>
              <div class="table-responsive-sm mt-4">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;">
                        <input type="text" tabindex="0"></div>
                        <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 17.7344px;">#</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 53.2617px;">Nombre</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 123.457px;">Apellido</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 174.688px;">Email</th>
                    </tr>
                  </thead>
                  <tbody>                    
                          @foreach($users as $user)
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->email}}</td>
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