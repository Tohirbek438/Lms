@extends('admin.layout.main')
@section('title', 'OnlineDars section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if (!isset($lesson))
                <div class="d-flex justify-content-end">
                    <a href="{{ route('lesson.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @else
                <div class="d-flex justify-content-end">
                    <a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-success">Tahrirlash</a>
                </div>
            @endif
            <div class="card mt-2">

                <div class="card-body table-responsive col-md-12">
                    @if (isset($lesson))
                        <table class="table table-hover text-nowrap">

                            <tr>
                                <th>Image</th>
                                <td>
                                    @if (isset($lesson->image))
                                        <img width="120px" src="{{ Storage::url($lesson->image) }}" alt="">
                                    @else
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Descpription uz</th>
                                <td>{{ $lesson->description['uz'] }}</td>
                            </tr>
                            <tr>
                                <th>Descpription ru</th>
                                <td>{{ $lesson->description['ru'] }}</td>
                            </tr>
                            <tr>
                                <th>Descpription en</th>
                                <td>{{ $lesson->description['en'] }}</td>
                            </tr>
                        </table>
                    @else
                        <div class="col-md-12 alert alert-danger">Not available content</div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
