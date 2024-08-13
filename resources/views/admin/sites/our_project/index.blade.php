@extends('admin.layout.main')
@section('title', 'Sites section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if ($site->count() != 2)
                <div class="d-flex justify-content-end">
                    <a href="{{ route('site.create') }}" class="btn btn-success">Loyiha qo'shish</a>
                </div>
            @else
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">
                        Loyihalar</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive col-md-12">
                    @if (!$site->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Sarlavha</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($site as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td><img width="150px" src="{{ Storage::url($head->image) }}" alt=""></td>
                                        <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>

                                        <td class="row">
                                            <a href="{{ route('site.show', $head->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('site.edit', $head->id) }}" class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <form action="{{ route('site.destroy', $head->id) }}" method="POST">
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
                                <span>Loyihalar mavjud emas!</span>
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
