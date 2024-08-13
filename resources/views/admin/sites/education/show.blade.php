@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Online ta'lim</h1>

                </div>
            </div>
        </div>
        <div class="row container">

            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-end">
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Online ta'lim</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Rasm</th>
                                <td><img width="150px" src="{{ Storage::url($lesson->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>Tavsif uz</th>
                                <td>{{ $lesson->description['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif ru</th>
                                <td>{{ $lesson->description['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif en</th>
                                <td>{{ $lesson->description['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha uz</th>
                                <td>{{ $lesson->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha ru</th>
                                <td>{{ $lesson->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha en</th>
                                <td>{{ $lesson->title['en'] }}</td>
                            </tr>
                            <tr>
                        </table>
                    </div>
                </div>
                <a href="{{ route('education.index') }}" class="btn btn-info">Orqaga qaytish</a>
            </div>
        </div>
    </div>
@endsection
