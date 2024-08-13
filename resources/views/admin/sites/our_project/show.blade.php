@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Loyihalar</h1>
                </div>
            </div>
        </div>
        <div class="row container">

            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-end">
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Loyihalar</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Image</th>
                                <td><img width="150px" src="{{ Storage::url($service->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>Title uz</th>
                                <td>{{ $service->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Title ru</th>
                                <td>{{ $service->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Title en</th>
                                <td>{{ $service->title['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Kategoryasi (uz)</th>
                                <td>{{ $service->site_type->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Kategoryasi (ru)</th>
                                <td>{{ $service->site_type->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Kategoryasi (en)</th>
                                <td>{{ $service->site_type->title['en'] }}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    @endsection
