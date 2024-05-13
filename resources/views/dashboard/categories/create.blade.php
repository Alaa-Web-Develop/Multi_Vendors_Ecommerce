@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrump')
    @parent
    <li class="breadcrumb-item active">Starter Page</li>
@endsection

@section('content')

<form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
@csrf

@include('dashboard.categories._Form')
</form>
   
@endsection
