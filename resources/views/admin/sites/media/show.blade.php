@extends('admin.layout.main')
@section('title', 'Header View')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            @if (empty($mediaPortal))
                <a style="float:right;" href="{{ route('media.create') }}" class="btn btn-info mt-4 mr-3">Media qo'shish</a>
            @else
                <a style="float:right;" href="{{ route('media.edit', $mediaPortal->id) }}" class="btn btn-info mt-4 mr-3">Media
                    tahrirlash</a>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Medialar</h1>

                </div>
            </div>
        </div>
        <div class="row container">

            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-end">
                </div>
                @if (!empty($mediaPortal))
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Medialar</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Image</th>
                                    <td><img width="150px" src="{{ Storage::url($mediaPortal->image) }}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title uz</th>
                                    <td>{{ $mediaPortal->description['uz'] }}</td>
                                </tr>
                                <tr>
                                    <th>Title ru</th>
                                    <td>{{ $mediaPortal->description['ru'] }}</td>
                                </tr>
                                <tr>
                                    <th>Title en</th>
                                    <td>{{ $mediaPortal->description['en'] }}</td>
                                </tr>
                                <tr>
                                <tr>
                                    <th>Online ta'limlar</th>
                                    <td>
                                        <a href="{{ route('education.index') }}">
                                            Ko'rish
                                        </a>
                                    </td>
                                </tr>
                                <th>Status</th>
                                <td>
                                    @if ($mediaPortal->status !== 0)
                                        <span class="badge badge-success">active</span>
                                    @else
                                        <span class="badge badge-danger">noactive</span>
                                    @endif
                                </td>
                                </tr>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @else
                    <div class="col-md-12 alert alert-danger mt-3">Ma'lumot mavjud emas!</div>
                @endif
                <a href="{{ route('media.index') }}" class="btn btn-info">Orqaga qaytish</a>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
