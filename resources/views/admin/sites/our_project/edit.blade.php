@extends('admin.layout.main')
@section('title', 'Sites Section')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#uz" data-toggle="tab">Uz</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ru" data-toggle="tab">Ru</a></li>
                    <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">En</a></li>
                </ul>
            </div>
            <div class="card-body">
                <form action="{{ route('site.update', $site->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="tab-content">
                        <div class="tab-pane active" id="uz">
                            <div class="form-group">
                                <label>Title (Uz)</label>
                                <input type="text" class="form-control" name="title[uz]"
                                    value="{{ $site->title['uz'] }}">
                                @error('title.uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <br>
                                <img width="100px" src="{{ Storage::url($site->image) }}" alt="rasm">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Turi</label>
                                <select class="form-control" name="type" id="">
                                    @foreach (App\Models\TypeSiteModel::all() as $type)
                                        <option value="{{ $type->id }}">{{ $type->title['uz'] }}</option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="tab-pane" id="ru">
                            <div class="form-group">
                                <label>Title (Ru)</label>
                                <input class="form-control" type="text" name="title[ru]"
                                    value="{{ $site->title['ru'] }}">
                                @error('title.ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="tab-pane" id="en">
                            <div class="form-group">
                                <label>Title (en)</label>
                                <input class="form-control" type="text" name="title[en]"
                                    value="{{ $site->title['en'] }}">
                                @error('title.en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>



@endsection
