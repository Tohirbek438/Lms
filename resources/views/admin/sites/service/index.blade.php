@extends('admin.layout.main')
@section('title', 'Service section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if ($service->count() != 2)
                <div class="d-flex justify-content-end">
                    <a href="{{ route('service.create') }}" class="btn btn-success">Xizmat qo'shish</a>
                </div>
            @else
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">
                        Bizning xizmatlar</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive col-md-12">
                    @if (!$service->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($service as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>
                                            <img width="100px" height="80px" alt="image"
                                                src="{{ Storage::url($head->image) }}">
                                        </td>
                                        <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>{{ $head->getTranslation('description', app()->getLocale()) }}</td>

                                        <td class="row">
                                            <a href="{{ route('service.show', $head->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('service.edit', $head->id) }}"
                                                class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <form action="{{ route('service.destroy', $head->id) }}" method="POST">
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
                                <span>Xizmatlar mavjud emas!</span>
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
