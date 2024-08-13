@extends('admin.layout.main')
@section('title', 'prefer. section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            <div class="d-flex justify-content-end">
                <a href="{{ route('media.create') }}" class="btn btn-success">Qo'shish</a>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Media Bo'limi qo'shish</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive col-md-12">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rasm</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medias as $head)
                                <tr>
                                    <td>{{ $head->id }}</td>
                                    <td>
                                        <img width="100px" height="80px" alt="image"
                                            src="{{ Storage::url($head->image) }}">
                                    </td>
                                    <td>
                                        @if ($head->status == 0)
                                            <span class="badge badge-danger">NoActive</span>
                                        @else
                                            <span class="badge badge-success">Active</span>
                                        @endif

                                    </td>
                                    <td class="row">
                                        <a href="{{ route('media.edit', $head->id) }}" class="btn btn-info btn-sm mx-1">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="{{ route('media.show', $head->id) }}" class="btn btn-success btn-sm mx-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('media.destroy', $head->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm mx-1">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
