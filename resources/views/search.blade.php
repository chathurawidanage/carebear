@extends('layouts.base')
@section('title',"Search")
@section('style')
    <link rel="stylesheet" href="sass/search.css">
    <link rel="stylesheet" href="jrating/jRating.jquery.css">
@endsection
@section('body')
    <div class="container">
        <div class="row cb_panel">
            <div class="col-xs-12 col-sm-3">
                <h1>{{$zip}}</h1>
            </div>
            <div class="col-xs-12 col-sm-9">

            </div>
        </div>
        @for($i=0;$i<5;$i++)
            @include('layouts.dcsearch')
        @endfor
    </div>

@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="jrating/jRating.jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.rating').jRating({
                step: true,
                rateMax: 5,
                isDisabled: true
            });
        })
    </script>
@endsection