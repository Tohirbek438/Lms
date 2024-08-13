@extends('admin.layout.main')
@section('title', 'Projects section')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Uz</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ru</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">En</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="tab-content">
                        @csrf
                        <div class="tab-pane active" id="activity">
                            <div class="form-group">
                                <label>Sarlavha uz</label>
                                <input type="text" class="form-control" name="title[uz]">
                                @error('title.uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
                                <textarea name="desc[uz]" class="form-control" id="" cols="3" rows="3"></textarea>
                                @error('desc.uz')
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
                        </div>

                        <div class="tab-pane" id="timeline">
                            <div class="form-group">
                                <label>Sarlavha ru</label>
                                <input type="text" class="form-control" name="title[ru]">
                                @error('title.ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tavsif ru</label>
                                <textarea name="desc[ru]" class="form-control" id="" cols="3" rows="3"></textarea>
                                @error('desc.ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="tab-pane" id="settings">
                            <div class="form-group">
                                <label>Sarlavha en</label>
                                <input type="text" class="form-control" name="title[en]">
                                @error('title.en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tavsif en</label>
                                <textarea name="desc[en]" class="form-control" id="" cols="3" rows="3"></textarea>
                                @error('desc_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <button type="submit" class="btn btn-success">Saqlash</button>
                </form>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
