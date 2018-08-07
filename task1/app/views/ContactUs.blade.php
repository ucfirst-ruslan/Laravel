@extends('layouts.master')

@section('title')
    Contact Us Page
@stop

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1>Contact Us Page</h1>
        </div>
    </div>

    @if(isset($error))
        <div class="alert alert-danger" role="alert">
            <p class="text-center">{{$error}}</p>
        </div>
    @endif

    <div class="row justify-content-lg-center">
        <div class="col-lg-auto">
            <form method="POST" action="<?= URL::route('ContactUs'); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@stop