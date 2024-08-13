@extends('admin.layout.main')

@section('title', 'Header create')

@section('content')
    <section class="content container">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Bosh qism ma'lumotlari</h3>
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
                            <form action="{{ route('header.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Foydaluvchilar soni</label>
                                    <input type="text" class="form-control" name="count">
                                    @error('count')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha uz</label>
                                    <input type="text" class="form-control" name="title[uz]">
                                    @error('title.uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha ru</label>
                                    <input type="text" class="form-control" name="title[ru]">
                                    @error('title.ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha en</label>
                                    <input type="text" class="form-control" name="title[en]">
                                    @error('title.en')
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
                                    @error('title.ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tavsif en</label>
                                    <textarea name="desc[en]" id="" cols="3" rows="3" class="form-control"></textarea>
                                    @error('title.en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
