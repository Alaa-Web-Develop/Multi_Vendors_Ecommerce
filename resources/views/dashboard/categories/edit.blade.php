@extends('layouts.dashboard')

@section('title', 'Edit Categories')

@section('breadcrump')
    @parent
    <li class="breadcrumb-item active">Categories</li>
    <li class="breadcrumb-item active">Edit Categories</li>

@endsection

@section('content')

<form action="{{route('dashboard.categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

@include('dashboard.categories._Form',['btn_label'=>'Update'])
</form>
   
@endsection
