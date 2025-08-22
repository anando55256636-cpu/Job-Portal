@extends('layouts.app')

@section('content')
<h1>Daftar Lowongan</h1>
<a href="{{ route('jobs.create') }}">+ Tambah Lowongan</a>
<ul>
@foreach($jobs as $job)
    <li>
        <a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a> - {{ $job->location }}
    </li>
@endforeach
</ul>
@endsection
