@extends('layouts.dashboard')

@section('title', 'Starter Page');

@section('breadcrump')
@parent
<li class="breadcrumb-item active">Starter Page</li>
@endsection


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div><!-- /.card -->
                </div>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

{{-- push append on stack not override as yield section ================== --}}
@push('styles')
<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">	
@endpush

@push('styles')
<link rel="stylesheet" href="{{asset('dist/css/style2.css')}}">	
@endpush

@push('scripts')
<script src="{{asset('dist/js/scripts.js')}}"></script>
	
@endpush
