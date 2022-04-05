@extends("layout.master")
@section("title", "Halaman Dosen")

@section("navbar")
    <a href = "{{route('prodi')}}">Program Studi<a/>
@endsection

@section("content")
    <h1>Dosen</h1>
    Ini Adalah Halaman Dosen
@endsection
