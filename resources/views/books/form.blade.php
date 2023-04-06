@extends('layout.main')

@section('title', 'Tambah Buku')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div class="form-group">
                    <label for="">Kode</label>
                    <input class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" type="text" name="code" />
                    @error('code')
                        <span class="invalid-feedback"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control @error('title') is-invalid @enderror" value="{{ old('judul') }}" type="text" name="title" />
                    @error('title')
                        <span class="invalid-feedback"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Authors</label>
                    <select class="js-example-basic-multiple form-control @error('id_author') is-invalid @enderror" name="id_author[]"
                        multiple="multiple">
                        @foreach ($authors as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>
                    @error('id_author')
                        <span class="invalid-feedback"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Publisher</label>
                    <select class="form-control @error('id_publisher') is-invalid @enderror" name="id_publisher">
                        <option value="" disabled selected>Pilih Publisher</option>
                        @foreach ($publishers as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>
                    @error('id_publisher')
                        <span class="invalid-feedback"> {{ $message }}</span>
                    @enderror
                </div>


                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i>Simpan
                </button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
