@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Himoya qismi</h1>
                </div>
            </div>
        </div>
        <div class="row container">

            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-end">
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Himoya qismi</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Rasm</th>
                                <td>
                                    <a href="{{ Storage::url($protect->image) }}">
                                        <img width="150px" src="{{ Storage::url($protect->image) }}" alt="">
                                </td>
                                </a>
                            </tr>
                            <tr>
                                <th>Sarlavha uz</th>
                                <td>{{ $protect->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha ru</th>
                                <td>{{ $protect->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha en</th>
                                <td>{{ $protect->title['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Himoya foizi</th>
                                <td>{{ $protect->protect_procent }}%</td>
                            </tr>
                            <tr>
                                <th>Tavsif uz</th>
                                <td>{{ $protect->description['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif ru</th>
                                <td>{{ $protect->description['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif en</th>
                                <td>{{ $protect->description['en'] }}</td>
                            </tr>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <a href="{{ route('protect.index') }}" class="btn btn-info">Orqaga qaytish</a>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
