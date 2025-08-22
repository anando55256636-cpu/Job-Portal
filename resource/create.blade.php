@extends('layouts.app')

@section('content')
<h1>Buat Lowongan Baru</h1>
<form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Judul">
    <textarea name="description" placeholder="Deskripsi"></textarea>
    <input type="text" name="location" placeholder="Lokasi">
    <input type="text" name="salary" placeholder="Gaji">
    <button type="submit">Simpan</button>
</form>
@endsection
