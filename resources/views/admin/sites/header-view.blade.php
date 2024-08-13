@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Asosiy ma'lumot</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row container">

            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-end">

                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Asosiy ma'lumot</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Sarlavha uz</th>
                                <td>{{ $header->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha ru</th>
                                <td>{{ $header->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha en</th>
                                <td>{{ $header->title['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif uz</th>
                                <td>{{ $header->desc['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif ru</th>
                                <td>{{ $header->desc['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif en</th>
                                <td>{{ $header->desc['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Soni</th>
                                <td>{{ $header->count }}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
