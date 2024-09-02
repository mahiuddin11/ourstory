@extends('Admin.master')

@section('content')
    {{-- header page  --}}
    <div class=" content-header">
        <div class=" container-fluid">
            <div class=" row mb-1 justify-between">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">post Status</h5>
                </div>
                <div class="col-sm-6">
                    <ol class=" breadcrumb float-sm-right">
                        <li class=" breadcrumb-item"><a href="#">home</a></li>
                        <li class=" breadcrumb-item active">status list</li>
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
                                <h3 class="card-title">Status List</h3>
                                <a href="{{route('status.create')}}" class="btn btn-primary">Create status</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Post Counnt</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($status as $item)
                                        <tr>
                                            <td>
                                                {{ $item->id }}
                                            </td>

                                            <td>{{ $item->name }}</td>
                                            
                                            <td>
                                                {{ $item->id }}
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ Route('status.show', [$item->id]) }}"
                                                    class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                                                <a href="{{route('status.edit',[$item->id] )}}"
                                                    class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>

                                                <form action="{{ route('status.destroy', $item->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this status?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
