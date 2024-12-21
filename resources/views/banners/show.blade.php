@extends('banners.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show banner</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('banners.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>title:</strong>

                {{ $banner->title }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>heading:</strong>

                {{ $banner->heading }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $banner->detail }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>btnname:</strong>

                {{ $banner->btnname }}

            </div>

        </div>

    </div>

@endsection
