@extends('admin.layout.main')

@section('title', 'About create')

@section('content')
    <section class="content container">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Haqida ma'lumotlar</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputFile">Rasm</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tavsif uz</label>
                                    <textarea name="desc[uz]" id="" cols="3" rows="3" class="form-control"></textarea>
                                    @error('desc.uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tavsif ru</label>
                                    <textarea name="desc[ru]" id="" cols="3" rows="3" class="form-control"></textarea>
                                    @error('desc.ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tavsif en</label>
                                    <textarea name="desc[en]" id="" cols="3" rows="3" class="form-control"></textarea>
                                    @error('desc.en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch" style="width:100%;">
                                        <input type="checkbox" class="custom-control-input col-md-12" name="status"
                                            id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1">Status</label>
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-secondary collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Qolgan ma'lumotlar</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    title="Collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body" style="display: none;">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Faol Foydalanuvchilar soni</label>
                                                    <input name="active_users" type="number" class="form-control">
                                                    @error('active_users')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Aktiv foydalanuvchilar sarlavhasi</label>
                                                    <input name="active_users_title[uz]" class="form-control">
                                                    @error('active_users_title.uz')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Tayyor yechimlar soni</label>
                                                    <input name="prepared_projects" type="number" class="form-control">
                                                    @error('prepared_projects')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tayyor yechimlar sarlavhasi</label>
                                                    <input name="prepared_projects_title[uz]" class="form-control">
                                                    @error('prepared_projects_title.uz')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Tayyor yechimlar sarlavhasi ru</label>
                                                    <input name="prepared_projects_title[ru]" class="form-control">
                                                    @error('prepared_projects_title.ru')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Doimiy mijozlar title ru</label>
                                                    <input name="active_users_title[ru]" class="form-control">
                                                    @error('active_users_title.ru')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Tayyor yechimlar sarlavhasi en</label>
                                                    <input name="prepared_projects_title[en]" class="form-control">
                                                    @error('prepared_projects_title.en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Doimiy mijozlar title en</label>
                                                    <input name="active_users_title[en]" class="form-control">
                                                    @error('active_users_title.en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- /.card -->
                                </div>

                                <button type="reset" class="btn btn-danger">Tozalash</button>
                                <button type="submit" class="btn btn-success">Saqlash</button>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
