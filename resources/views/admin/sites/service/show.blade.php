@extends('admin.layout.main')
@section('title', 'Service section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if (!isset($protect))
                <div class="d-flex justify-content-end">
                    <a href="{{ route('service.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @else
            @endif
            <div class="card mt-2">

                <div class="card-body table-responsive col-md-12">
                    <table class="table table-hover text-nowrap">
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
                            <th>Image</th>
                            <td>
                                <img width="120px" src="{{ Storage::url($service->image) }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Descpription uz</th>
                            <td>{{ $service->description['uz'] }}</td>
                        </tr>
                        <tr>
                            <th>Descpription ru</th>
                            <td>{{ $service->description['ru'] }}</td>
                        </tr>
                        <tr>
                            <th>Descpription en</th>
                            <td>{{ $service->description['en'] }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
