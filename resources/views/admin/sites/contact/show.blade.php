@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bog'lanish</h1>

                </div>

            </div>
        </div>
        <div class="row container">
            @if (!empty($contact))
                <div class="col-md-12 mx-auto">
                    <div class="d-flex justify-content-end">
                        <a style="float: right;" href="{{ route('contact.edit', $contact->id) }}"
                            class="btn btn-info">Tahrirlash</a>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Bog'lanish</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Tel no'mer</th>
                                    <td>{{ $contact->number1 }}</td>
                                </tr>
                                <tr>
                                    <th>Qo'shimcha tel</th>
                                    <td>{{ $contact->other_number }}</td>
                                </tr>
                                <tr>
                                    <th>Title uz</th>
                                    <td>{{ $contact->location['uz'] }}</td>
                                </tr>
                                <tr>
                                    <th>Title ru</th>
                                    <td>{{ $contact->location['ru'] }}</td>
                                </tr>
                                <tr>
                                    <th>Title en</th>
                                    <td>{{ $contact->location['en'] }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('contact.create') }}" class="btn btn-success my-2">Qo'shish</a>
                </div>
                <div class="alert alert-danger col-md-12 my-4">Ma'lumot mavjud emas!</div>
            @endif
        </div>
    </div>
@endsection
