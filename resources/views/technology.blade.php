@extends('layouts.adminheader')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        
                        <div class="card-body">
                            @foreach($technologis as $technology)
                                <div class="col-md-12">{{$technology->technology}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
