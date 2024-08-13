@extends('admin.layout.main')
@section('title', 'Service section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">
                        Bog'lanishlar</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive col-md-12">
                    @if (!$users->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>F.I.SH</th>
                                    <th>Tel no'mer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>{{ $head->name }}</td>
                                        <td>{{ $head->number }}</td>
                                        <td class="row">
                                            <form action="{{ route('delete-user', $head->id) }}" method="POST">
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
                    @else
                        <div class="d-flex justify-content-center">
                            <div class="col-md-12 alert alert-danger ">
                                <span>Bog'lanishlar mavjud emas!</span>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
