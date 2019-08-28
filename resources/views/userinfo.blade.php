@extends('layouts.adminheader')

@section('content')

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12 p-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block bg-register-image-new">
                    <div class="img-responsive">
                        <img src="{{$user->userdate->photo}}" alt="{{$user->name}}">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="user" id="form-user-update">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="First Name" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="Email Address" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="custom-file">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="file" name="file" class="custom-file-input form-control-user" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <button class="btn btn-primary btn-user btn-block" id="btn-form-user-update">
                                    Update
                                    <i id="preloader" class="preloader-img none"></i>
                                </button>
                            </div>
                            <hr>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection