@extends('layouts.common')
@section('title')
dashboard
@endsection
@section('header')
@include('layouts.header')
@endsection

@section('contents')
<article>
    {{$screenName}}
</article>
@endsection