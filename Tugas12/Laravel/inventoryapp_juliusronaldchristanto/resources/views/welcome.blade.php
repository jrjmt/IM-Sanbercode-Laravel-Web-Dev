@extends('layouts.master')
@section ('title')
    Dashboard
@endsection

@section('content')
    <h1>Selamat Datang {{ $first_name }} {{ $last_name }}</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social media kita bersama!</h2>
@endsection