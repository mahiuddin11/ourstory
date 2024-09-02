@extends('Admin.master')

@section('content')
    {{-- header page  --}}
    <div class=" content-header">
        <div class=" container-fluid">
            <div class=" row mb-1 justify-between">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">status</h5>
                </div>
                <div class="col-sm-6">
                    <ol class=" breadcrumb float-sm-right">
                        <li class=" breadcrumb-item"><a href="#">home</a></li>
                        <li class=" breadcrumb-item active">status Show</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title"> status Show</h3>
                                <a href="{{route('status.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class=" col-lg-12 ">
                                <form action="#" method="" enctype="multipart/form-data"  >
                                    @csrf
                                        @include('Admin.component.errror')<!--  // The status name field is required. -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">status Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$status->name}}"
                                                placeholder="status name">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputEmail1">Parent status</label>
                                            <select class="custom-select">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Discaption</label>
                                            <textarea name="discaption"  class=" form-control" > {{$status->discaption}}</textarea>
                                        </div>



                                    <div class="card-footer">
                                        <button  class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- /.card-body -->
                        {{-- <div class="card-footer d-flex justify-content-center">
                        link
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
