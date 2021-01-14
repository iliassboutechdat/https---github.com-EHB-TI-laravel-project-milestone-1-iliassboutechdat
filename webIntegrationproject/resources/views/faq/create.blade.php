@extends('layouts.app')

@section('content')

<div class="container">

            <form method="POST" action="{{ route('faqs.store')}}">
                @csrf
                <div class="form-group card-header">What's happening?
                <label for="title"></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" rows="1"  value="{{ old('title') }}" required autofocus placeholder="Title..."></textarea>
                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label for="content"></label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="3"  value="{{ old('content') }}" ></textarea>
                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <br>
                    <button type="submit" class="btn btn-primary">Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </div>
                
            </form>
        </div>
@endsection