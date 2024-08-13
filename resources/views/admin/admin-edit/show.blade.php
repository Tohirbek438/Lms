@extends('admin.layout.main')
@section('title', 'User show')
@section('content')
    <div class="row container mb-4">

        <div class="col-12 mx-auto">
            <a style="float: right;" href="{{ route('admin.edit', Auth::user()->id) }}" class="btn btn-success">Tahrirlash</a>
            <br>
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Shaxsiy Kabinet</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <th>F.I.SH</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Parol</th>
                                <td>{{ Auth::user()->password }}</td>
                            </tr>
                            <tr>
                                <th>Yaratilgan vaqti</th>
                                <td>{{ Auth::user()->created_at->format('d.m.Y') }}</td>
                            </tr>
                            <tr>
                                <th>Yangilangan vaqti</th>
                                <td>{{ Auth::user()->created_at->format('d.m.Y') }}</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->

            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-info mb-2">Orqaga qaytish</a>
            <!-- /.card -->
        </div>

    </div>
@endsection
