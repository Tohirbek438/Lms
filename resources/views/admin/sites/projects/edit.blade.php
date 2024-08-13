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
                <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="tab-content">
                        @csrf
                        @method('PUT')
                        <div class="tab-pane active" id="activity">
                            <div class="form-group">
                                <label>Title uz</label>
                                <input type="text" class="form-control" name="title_uz" value="{{ $project->title_uz }}">
                                @error('title_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
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
                                <label>Description uz</label>
                                <textarea name="desc_uz" class="form-control" id="" cols="3" rows="3">{{ $project->desc_uz }}</textarea>
                                @error('desc_uz')
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
                                <label>Title ru</label>
                                <input type="text" class="form-control" name="title_ru" value="{{ $project->title_ru }}">
                                @error('title_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description ru</label>
                                <textarea name="desc_ru" class="form-control" id="" cols="3" rows="3">{{ $project->desc_ru }}</textarea>
                                @error('desc_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="tab-pane" id="settings">
                            <div class="form-group">
                                <label>Title en</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ $project->title_en }}">
                                @error('title_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description en</label>
                                <textarea name="desc_en" class="form-control" id="" cols="3" rows="3">{{ $project->desc_en }}</textarea>
                                @error('desc_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <button type="submit" class="btn btn-success">Yangilash</button>
                </form>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
