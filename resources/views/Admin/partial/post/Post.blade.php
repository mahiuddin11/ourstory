@extends('Admin.master')

<style>
    img.img-fluid {
        width: 261px;
        height: 103px;
    }
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
                                <h3 class="card-title">post List</h3>
                                <a href="{{ Route('post.create') }}" class="btn btn-primary">Create post</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th>Image </th>
                                        <th>Post Title</th>
                                        <th>Post Discaption</th>
                                        <th>catagory</th>
                                        <th>tag</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>

                                            <td>{{ $post->id }}</td>

                                            <td>
                                                <img src="{{ asset('images/' . $post->image) }}" class=" img-fluid"
                                                    alt="image">

                                            </td>

                                            <td>{{ $post->title }}</td>
                                            <td>
                                                {{ $post->discaption }}
                                            </td>
                                            <td>
                                                {{ $post->catagory_id }}
                                            </td>
                                            <td>
                                                {{ $post->tag_id }}
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ Route('post.show', [$post->id]) }}"
                                                    class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                                                <a href="{{ Route('post.edit', [$post->id]) }}"
                                                    class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>

                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
