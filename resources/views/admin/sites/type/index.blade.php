@extends('admin.layout.main')
@section('title', 'Service section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if ($type->count() != 2)
                <div class="d-flex justify-content-end">
                    <a href="{{ route('type_site.create') }}" class="btn btn-success">Xizmat qo'shish</a>
                </div>
            @else
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">
                        Loyiha turlari</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive col-md-12">
                    @if (!$type->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Soni</th>
                                    <th>Sarlavha</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($type as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>{{ $head->count }}</td>
                                        <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>
                                        <td class="row">
                                            <a href="{{ route('type_site.edit', $head->id) }}"
                                                class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <form action="{{ route('type_site.destroy', $head->id) }}" method="POST">
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
