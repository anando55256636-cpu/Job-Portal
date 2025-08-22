@extends('layouts.app')

@section('content')
<h1>{{ $job->title }}</h1>
<p>{{ $job->description }}</p>
<p>Lokasi: {{ $job->location }}</p>
<p>Gaji: {{ $job->salary }}</p>

<form action="{{ route('applications.store', $job) }}" method="POST">
    @csrf
    <textarea name="cover_letter" placeholder="Tulis cover letter..."></textarea>
    <button type="submit">Lamar</button>
</form>
@endsection
