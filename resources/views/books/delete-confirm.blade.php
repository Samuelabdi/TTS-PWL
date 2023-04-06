@extends('layout.main')

@section('title', 'Hapus Buku')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('books.delete') }}">
                @csrf
                <input type="hidden" value="{{ $book->id }}" name="id" />
                <p>
                    Kode : <br>
                    <input type="text" name="code" required value="{{ $book->code }}" disabled />
                </p>
                <p>
                    Judul : <br>
                    <input type="text" name="title" required value="{{ $book->title }}" disabled />
                </p>

                <button class="btn btn-secondary" type="button" onclick="location.href='{{ route('books.index') }}'">
                    <i class="fa fa-arrow-circle-left"></i> Kembali
                </button>
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-floppy-o"></i> Hapus
                </button>
            </form>
        </div>
    </div>
@endsection
