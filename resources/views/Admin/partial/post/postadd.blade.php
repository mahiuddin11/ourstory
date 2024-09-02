@extends('Admin.master')


<style>

    input.form-control.px-2.image {
    height: 52px;
    /* justify-items: center; */
    padding: 10px;}

</style>

@section('content')


    {{-- header page  --}}
    <div class=" content-header">
        <div class=" container-fluid">
            <div class=" row mb-1 justify-between">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">posts</h5>
                </div>
                <div class="col-sm-6">
                    <ol class=" breadcrumb float-sm-right">
                        <li class=" breadcrumb-item"><a href="#">home</a></li>
                        <li class=" breadcrumb-item active">post list</li>
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
                                <h3 class="card-title">post</h3>
                                <a href="{{route('post.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class=" col-lg-11  ">
                                <form action="{{ Route('post.store')}}" method="POST" enctype="multipart/form-data"  >
                                    @csrf

                                        @include('Admin.component.errror')<!--  // The post name field is required. -->

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Post Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                                placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Discaption</label>
                                            <textarea name="discaption" class=" form-control" ></textarea>
                                        </div>

                                        @php
                                        
                                            $catagories = App\Models\Catagory::all();
                                            $tags = App\Models\Tag::all();
                                            $Status = App\Models\Status::all();

                                        @endphp

                                        <div class="form-group row justify-content-center">
                                            <div class="col-md-4">
                                                <label for="postCategory">Post Category</label>
                                               
                                              
                                                <select name="catagory_id" id="postCategory" class="form-control">
                                                  
                                                    <option value="">Select Catagory</option>
                                                    @foreach ($catagories as $catagorie)
                                                        <option value="{{$catagorie->id}}">{{$catagorie->CatagoryName}}</option>
                                                    
                                                    @endforeach 
                                                </select>
                                                    
                                               
                                            </div>
                                        
                                            <div class="col-md-4">
                                                <label for="postauthor">Post Tag</label>
                                                <select name="tag_id" id="postAuthor" class="form-control">
                                                    <option value="">Select Author</option>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                    
                                                    @endforeach 
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="poststatus">Status</label>
                                                <select name="status_id" id="postAuthor" class="form-control">
                                                    <option value="">select status</option>
                                                    @foreach ($Status as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>

                                        <div class=" mt-4  ">
                                            <input type="file" name="image" class=" form-control px-2 image " id="">
                                        </div>

                                        

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
