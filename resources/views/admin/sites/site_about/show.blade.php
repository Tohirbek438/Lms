@extends('admin.layout.main')
@section('title', 'About show')
@section('content')
    <div class="row container">
        <div class="col-12 mx-auto">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Sayt ma'lumotlar</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    @if (!empty($about))
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <th>
                                        Rasm
                                    </th>
                                    <td>
                                        @if (isset($about->image))
                                            <img width="130px" height="60px" alt="image"
                                                src="{{ Storage::url('public/' . $about->image) }}">
                                        @else
                                        @endif
                                    </td>
                                <tr>
                                    <th>Tavsif uz</th>
                                    <td>{{ $about->desc['uz'] }}</td>
                                </tr>
                                <tr>
                                    <th>Tavsif ru</th>
                                    <td>{{ $about->desc['ru'] }}</td>
                                </tr>
                                <tr>
                                    <th>Tavsif en</th>
                                    <td>{{ $about->desc['en'] }}</td>
                                </tr>
                                <tr>
                                    <th>Faol foydalanuvchilar</th>
                                    <td>{{ $about->active_users }}</td>
                                </tr>
                                <tr>
                                    <th>Faol foydalanuvchilar sarlavha uz</th>
                                    <td>{{ $about->active_users_title['uz'] }}</td>
                                </tr>
                                <tr>
                                    <th>Faol foydalanuvchilar sarlavha ru</th>
                                    <td>{{ $about->active_users_title['ru'] }}</td>
                                </tr>
                                <tr>
                                    <th>Faol foydalanuvchilar sarlavha en</th>
                                    <td>{{ $about->active_users_title['en'] }}</td>
                                </tr>
                                <tr>
                                    <th>Tayyorlangan loyihalar</th>
                                    <td>{{ $about->prepared_projects }}</td>
                                </tr>
                                <tr>
                                    <th>Tayyorlangan loyihalar sarlavha uz</th>
                                    <td>{{ $about->prepared_projects_title['uz'] }}</td>
                                </tr>
                                <tr>
                                    <th>Tayyorlangan loyihalar sarlavha ru</th>
                                    <td>{{ $about->prepared_projects_title['ru'] }}</td>
                                </tr>
                                <tr>
                                    <th>Tayyorlangan loyihalar sarlavha en</th>
                                    <td>{{ $about->prepared_projects_title['en'] }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($about->status !== 0)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">InActive</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-danger col-md-12 my-4">Ma'lumot mavjud emas!</div>
                    @endif

                </div>
                <!-- /.card-body -->
            </div>
            <a href="{{ route('about.index') }}" class="btn btn-info mb-2">Orqaga qaytish</a>
            <!-- /.card -->
        </div>

    </div>
@endsection
