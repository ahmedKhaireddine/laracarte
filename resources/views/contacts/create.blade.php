@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <h2>Get In Touch</h2>
                <p>If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help.</a></p>
                <form action="{{ route('contact.store') }}" method="POST" >
                    {{-- novalidate une methode qui nous permet de blocker la validation coté client--}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name', '<small class="errors">:message</small>') !!}
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email', '<small class="errors">:message</small>') !!}
                    </div>
                    <div class="form-group ">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"> {{ old('message') }}</textarea>
                        {!! $errors->first('message', '<small class="errors">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop