@extends('Admin.master')

@section('content')
    {{-- header page  --}}
    <div class=" content-header">
        <div class=" container-fluid">
            <div class=" row mb-1 justify-between">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">Tag</h5>
                </div>
                <div class="col-sm-6">
                    <ol class=" breadcrumb float-sm-right">
                        <li class=" breadcrumb-item"><a href="#">home</a></li>
                        <li class=" breadcrumb-item active">Tag edit</li>
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
                                <h3 class="card-title">Edit Tag</h3>
                                <a href="{{Route('tag')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>

                        <div class="row ">
                            <div class=" col-lg-12 ">
                                <form action="{{ Route('tags.update',[$tag->id])}}" method="POST" enctype="multipart/form-data"  >
                                    @csrf
                                        @method('PUT')
                                        @include('Admin.component.errror')<!--  // The tag name field is required. -->

                                        <input type="hidden" name="id" value="{{$tag->id}}">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tag Name</label>
                                            <input type="text" name="tagname" class="form-control" value="{{$tag->tagname}}"
                                                placeholder="tag name">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputEmail1">Parent tag</label>
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
                                            <textarea name="discaption"  class=" form-control" > {{$tag->discaption}}</textarea>
                                        </div>



                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tag Update</button>
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
