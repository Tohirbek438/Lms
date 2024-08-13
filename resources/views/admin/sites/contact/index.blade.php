@extends('admin.layout.main')
@section('title', 'Contact section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            <div class="d-flex justify-content-end">
                <a href="{{ route('contact.create') }}" class="btn btn-success">Qo'shish</a>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Kontakt ma'lumotlar</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive col-md-12">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tel no'mer</th>
                                <th>Qo'shimcha no'mer</th>
                                <th>Email</th>
                                <th>Manzil</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contact as $head)
                                <tr>
                                    <td>{{ $head->id }}</td>
                                    <td>
                                        {{ $head->number1 }}
                                    </td>
                                    <td> {{ $head->other_number }}</td>
                                    <td>{{ $head->getTranslation('location', app()->getLocale()) }}</td>

                                    <td class="row">
                                        <a href="{{ route('contact.show', $head->id) }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('contact.edit', $head->id) }}" class="btn btn-info btn-sm mx-1">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form action="{{ route('contact.destroy', $head->id) }}" method="POST">
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
