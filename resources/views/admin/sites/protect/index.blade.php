@extends('admin.layout.main')
@section('title', 'Competitors section')
@section('content')
    <div class="row container mb-4">
        <div class="col-12 mx-auto">
            @if ($protect->isEmpty())
                <div class="d-flex justify-content-end">
                    <a href="{{ route('protect.create') }}" class="btn btn-success">Qo'shish</a>
                </div>
            @else
            @endif
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">
                        Juda kuchli himoya bilan ajralib turing</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive col-md-12">
                    @if (!$protect->isEmpty())
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Rasm</th>
                                    <th>Sarlavha</th>
                                    <th>Havfsiglig foizi</th>
                                    <th>Tavsif</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($protect as $head)
                                    <tr>
                                        <td>{{ $head->id }}</td>
                                        <td>
                                            <img width="120px" height="80px" alt="image"
                                                src="{{ Storage::url($head->image) }}">
                                        </td>
                                        <td>{{ $head->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>{{ $head->protect_procent }}%</td>
                                        <td>
                                            <p> {{ $head->getTranslation('description', app()->getLocale()) }}</p>
                                        </td>

                                        <td class="row">
                                            <a href="{{ route('protect.show', $head->id) }}"
                                                class="btn btn-success   mx-1"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('protect.edit', $head->id) }}" class="btn btn-info  mx-1">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <form action="{{ route('protect.destroy', $head->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger  mx-1 my-1">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="col-md-12 alert alert-danger">Ma'lumot mavjud emas!</div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
