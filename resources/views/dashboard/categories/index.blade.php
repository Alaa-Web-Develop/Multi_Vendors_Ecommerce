@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrump')
    @parent
    <li class="breadcrumb-item active">Starter Page</li>
@endsection

@section('content')

<div class="mb-5">
    <a href="{{route('dashboard.categories.create')}}" class="btn btn-sm btn-primary">Create</a>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div> 
@endif

@if (session()->has('info'))
    <div class="alert alert-warning">{{session('info')}}</div> 
@endif


    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Create On</th>
                <th colspan="2"></th>

            </tr>
        </thead>
        <tbody>

            {{-- @if ($categories->count())
            @foreach ($categories as $category)
            
            @endforeach
            @else
            <tr>
                <td colspan="7">No Categories Found..!</td>
            </tr>
            @endif --}}
      
                @forelse ($categories as $category)
                <tr>
                    <td><img src="{{asset('storage/'.$category->image)}}" height="50" alt=""></td>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent_id }}</td>
                    <td>{{ $category->created_at }}</td>

                    <td>
                        <a href="{{ route('dashboard.categories.edit',$category->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.categories.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No Categories Found..!</td>
                </tr>
                @endforelse
             
                
                
        </tbody>
    </table>
@endsection
