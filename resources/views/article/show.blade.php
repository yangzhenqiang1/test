@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">文章展示</div>

                    <div class="panel-body">

                       <p>{{ $a->title }}</p>
                       <p>{{ $a->body }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection