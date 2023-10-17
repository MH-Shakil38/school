@extends('admin.layouts.admin-master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button data-toggle="modal" data-target=".bd-example-modal-lg" type="button"
                                class="breadcrumb-item" style="padding: 5px;background: #007bff;"><a href="#"
                                                                                                     class="text-white">
                                <i class="fa fa-plus"></i> Create Admin</a></button>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbodt>
                        <tr>
                            <td>1</td>
                            <td>Maynuddin</td>
                            <td>Maynuddinhsn@gmail.com</td>
                            <td>1234345</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbodt>
                </table>

            </div>
        </div>

    </div>

    {{--modal--}}
    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h3>Admin Create</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <lable>Name</lable>
                                <input type="text" class="form-control" name="name" placeholder="Enter admin name" required>
                            </div>

                            <div class="col-md-6">
                                <lable>Email</lable>
                                <input type="text" class="form-control" name="email" placeholder="Enter admin email" required>
                            </div>

                            <div class="col-md-6">
                                <lable>Password</lable>
                                <input type="text" class="form-control" name="password" placeholder="*******">
                            </div>

                            <div class="col-md-6">
                                <lable>Password Again</lable>
                                <input type="text" class="form-control" name="password_confirmation" placeholder="*******">
                            </div>

                            <div class="col-md-6">
                                <lable>Role</lable>
                                <input type="text" class="form-control" name="name" placeholder="Enter admin name">
                            </div>

                            <div class="col-md-6">
                                <lable>Status</lable>
                                <input type="text" class="form-control" name="name" placeholder="Enter admin name">
                            </div>
                            <div class="col-md-12 bt-4">
                                <label for=""></label>
                                <Button type="submit" class="w-100 btn btn-primary" > Submit </Button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
