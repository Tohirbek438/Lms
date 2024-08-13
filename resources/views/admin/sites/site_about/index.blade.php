@extends('admin.layout.main')
@section('title', 'Header section')
@section('content')
    <div class="row container">
        <div class="col-12 mx-auto">
            @if ($abouts->isEmpty())
                <div class="d-flex justify-content-end">
                    <a href="{{ route('about.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Sayt haqida qismi</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    @if (!$abouts->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Rasm</th>
                                    <th>Tavsif</th>
                                    <th>Holati</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $head => $key)
                                    <tr>
                                        <td>{{ $key->id }}</td>
                                        <td>
                                            <img width="120px" height="80px" alt="image"
                                                src="{{ Storage::url('public/' . $key->image) }}">

                                        </td>

                                        <td>{{ $key->getTranslation('desc', app()->getLocale()) }}</td>
                                        <td>
                                            @if ($key->status == 0)
                                                <span class="badge badge-danger">NoActive</span>
                                            @else
                                                <span class="badge badge-success">Active</span>
                                            @endif

                                        </td>
                                        <td class="row">
                                            <a href="{{ route('about.edit', $key->id) }}" class="btn btn-info btn-sm mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('about.show', $key->id) }}"
                                                class="btn btn-success btn-sm mx-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('about.destroy', $key->id) }}" method="POST">
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
