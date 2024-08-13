@extends('admin.layout.main')
@section('title', 'prefer. section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if ($education->count() < 1)
                <div class="d-flex justify-content-end">
                    <a href="{{ route('education.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Online ta'lim</h3>

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
                                <th>Sarlavha</th>
                                <th>Tavsif</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($education as $head)
                                <tr>
                                    <td>{{ $head->id }}</td>
                                    <td>
                                        <img width="100px" height="80px" alt="image"
                                            src="{{ Storage::url('public/' . $head->image) }}">

                                    </td>
                                    <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>
                                    <td>{{ $head->getTranslation('description', app()->getLocale()) }}</td>

                                    <td class="row">
                                        <a href="{{ route('education.show', $head->id) }}"
                                            class="btn btn-success btn-sm mx-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('education.edit', $head->id) }}" class="btn btn-info btn-sm mx-1">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{ route('education.destroy', $head->id) }}" method="POST">
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
            <a href="{{ route('media.index') }}" class="btn btn-info">Orqaga qaytish</a>
            <!-- /.card -->
        </div>
    </div>
@endsection
