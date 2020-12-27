@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>

                <div class="card-body">
                    @if (Session::has('user_update'))
                        <div class="alert alert-success" role="alert">
                        {{Session::get('user_update') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('profiles.update')}}" >
                    @csrf
                        <!--first-->
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                            <input id="firstname" name="firstname" class="form-control" type="text" value='{{ __($user->firstname) }}' >
                            </div>
                        </div>
                        <!--name-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <input id="name" name="name" class="form-control" type="text" value='{{ __($user->name) }}' >
                            </div>
                        </div>
                        <!--username-->
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                            <input id="username" name="username" class="form-control" type="text" value='{{ __($user->username) }}' >
                            </div>
                        </div>
                        <!--email-->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                            <input id="email" name="email" class="form-control" type="email" value='{{ __($user->email) }}' >
                            </div>
                        </div>
                        <!--birthday-->
                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-md-6">
                            <input id="birthday" name="birthday" class="form-control" type="date" value='{{ __($user->birthday) }}' >
                            </div>
                        </div>
                        <!--Button update-->
                        <button type="submit" class="btn btn-primary" href="{{ route('profile.update') }}">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection