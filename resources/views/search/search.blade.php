@extends('admin.layout.main')
@section('title', 'Qidiruv tizimi')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">


            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Bizning Loyihalar</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                @if (!$results->isEmpty())
                    <div class="card-body table-responsive">

                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sarlavha</th>
                                    <th>Rasm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>
                                            <img width="120px" height="80px" alt="image"
                                                src="{{ Storage::url('public/' . $head->image) }}">

                                        </td>

                                        <td class="row">
                                            <a href="{{ route('project.edit', $head->id) }}"
                                                class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('project.show', $head->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('project.destroy', $head->id) }}" method="POST">
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
                    </div>
                    </table>
                @else
                    <div class="col-md-11 mt-4 mx-4 alert alert-danger">Loyihalar mavjud emas!</div>
                @endif
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>

@endsection
