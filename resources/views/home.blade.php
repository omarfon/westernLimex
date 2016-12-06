@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Dashboard</div>

                @if(isset($edit))
                    @include('admin.blog.edit')
                @else
                    @include('admin.blog.form')
                    @include('admin.blog.tabla')
                @endif

            </div>

        </div>
    </div>
</div>
@endsection
