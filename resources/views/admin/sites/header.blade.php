@extends('admin.layout.main')
@section('title', 'Header section')
@section('content')


    <div class="row container">
        <div class="col-12 mx-auto">
            @if ($header->count() < 3)
                <div class="d-flex justify-content-end">
                    <a href="{{ route('header.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @endif

            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Asosiy ma'lumotlar</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    @if (!$header->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title uz</th>
                                    <th>Soni</th>
                                    <th>Tavsif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($header as $head => $key)
                                    <tr>
                                        <td>{{ $key->id }}</td>
                                        <td>{{ $key->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>{{ $key->count }}</td>
                                        <td>{{ $key->getTranslation('desc', app()->getLocale()) }}</td>
                                        <td class="row">
                                            <a href="{{ route('header.edit', $key->id) }}" class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('header.show', $key->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('header.destroy', $key->id) }}" method="POST">
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
                        <div class="col-md-12 alert alert-danger">
                            Ma'lumot mavjud emas!
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
