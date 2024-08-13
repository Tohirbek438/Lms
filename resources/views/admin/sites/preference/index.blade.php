@extends('admin.layout.main')
@section('title', 'prefer. section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            <div class="d-flex justify-content-end">
                <a href="{{ route('prefer.create') }}" class="btn btn-success">Qo'shish</a>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Online dars afzalliklari</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive col-md-12">
                    @if (!$projects->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sarlavha</th>
                                    <th>Rasm</th>
                                    <th>Tavsif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>{{ $head->getTranslation('title', App::getLocale()) }}</td>
                                        <td>
                                            <img width="100px" height="80px" alt="image"
                                                src="{{ Storage::url('public/' . $head->image) }}">

                                        </td>
                                        <td>{{ $head->getTranslation('desc', App::getLocale()) }}</td>

                                        <td class="row">
                                            <a href="{{ route('prefer.edit', $head->id) }}"
                                                class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('prefer.show', $head->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('prefer.destroy', $head->id) }}" method="POST">
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
                        <div class="col-md-12 alert alert-danger">Ma'lumot mavjud emas!</div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
