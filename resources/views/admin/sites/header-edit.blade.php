@extends('admin.layout.main')

@section('title', 'Header Edit')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bosh qism</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bosh sahifa</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <section class="content mt-2">
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
                    <div class="card-body my-3">
                        <div class="row">
                            <div class="col-md-12 ">
                                <form action="{{ route('header.update', $header->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>Foydaluvchilar soni</label>
                                        <input type="number" class="form-control" name="count"
                                            value="{{ $header->count }}">
                                        @error('count')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Sarlavha uz</label>
                                        <input type="text" class="form-control" name="title.uz"
                                            value="{{ $header->title['uz'] }}">
                                        @error('title.uz')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Sarlavha ru</label>
                                        <input type="text" class="form-control" name="title[ru]"
                                            value="{{ $header->title['ru'] }}">
                                        @error('title.ru')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Sarlavha en</label>
                                        <input type="text" class="form-control" name="title.en"
                                            value="{{ $header->title['en'] }}">
                                        @error('title.en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tavsif uz</label>
                                        <textarea name="desc[uz]" id="" cols="3" rows="3" class="form-control">{{ $header->desc['uz'] }}</textarea>
                                        @error('desc.uz')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tavsif ru</label>
                                        <textarea name="desc[ru]" id="" cols="3" rows="3" class="form-control">{{ $header->desc['ru'] }}</textarea>
                                        @error('title.ru')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tavsif en</label>
                                        <textarea name="desc[en]" id="" cols="3" rows="3" class="form-control">{{ $header->desc['en'] }}</textarea>
                                        @error('title.en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success">Yangilash</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection
