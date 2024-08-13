@extends('admin.layout.main')
@section('title', 'Site Type Section')
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
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="uz">
                            <div class="form-group">
                                <label>Tel no'mer</label>
                                <input type="text" class="form-control" name="number1">
                                @error('number1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Qo'shimcha tel no'mer</label>
                                <input type="text" class="form-control" name="other_number">
                                @error('other_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Joylashuv</label>
                                <input type="text" class="form-control" name="location[uz]">
                                @error('location.uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="tab-pane" id="ru">
                            <div class="form-group">
                                <label>Joylashuv ru</label>
                                <input type="text" class="form-control" name="location[ru]">
                                @error('location.ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="tab-pane" id="en">
                            <div class="form-group">
                                <label>Joylashuv en</label>
                                <input type="text" class="form-control" name="location[en]">
                                @error('location.en')
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
