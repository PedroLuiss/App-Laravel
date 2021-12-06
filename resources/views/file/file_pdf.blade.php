@extends('layouts.app')
@section('content')
  @if (session('error'))
    <div class="alert alert-danger">
      <strong>{{ session('error') }}</strong>
    </div>
  @endif
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">File PDF</a></li>
                      <li class="breadcrumb-item active">Agregar</li>
                  </ol>                 
              
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>

    <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Agregas Archivos PDF</h4>
                                        <p class="text-muted m-b-30">Puedes agregar multiples archivos.</p>
        
                                        <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
                                          @csrf
                                                
                                            <div class="form-group mb-0">
                                              <input class="form-control" type="file" multiple name="files[]" name="" required>
                                            </div>
                                            <div class="form-group mb-0">
                                              <button type="submit" class="btn btn-outline-primary m-sm-2">
                                                  Agregar
                                              </button>
                                            </div>
                                                              
                                        </form>
                                    </div>
                                </div>
@endsection