@extends('src.template.parent.master')

@section('title', 'welcome')

@section('content')
    <h1>Selamat Datang! {{$firstName}} {{$lastName}} </h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama</h2>
@endsection