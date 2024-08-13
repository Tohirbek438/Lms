@extends('admin.layout.main')
@section('title', 'project show')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Online dars afzalligi</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <th>
                                    Rasm
                                </th>
                                <td>
                                    <img width="100px" height="80px" alt="image"
                                        src="{{ Storage::url('public/' . $project->image) }}">
                                </td>
                            <tr>
                                <th>Tavsif uz</th>
                                <td>{{ $project->desc['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif ru</th>
                                <td>{{ $project->desc['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Tavsif en</th>
                                <td>{{ $project->desc['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha uz</th>
                                <td>{{ $project->title['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha ru</th>
                                <td>{{ $project->title['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Sarlavha en</th>
                                <td>{{ $project->title['en'] }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if ($project->status !== 0)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">InActive</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->

            </div>
            <a href="{{ route('prefer.index') }}" class="btn btn-info mb-2">Orqaga qaytish</a>
            <!-- /.card -->
        </div>

    </div>
@endsection
