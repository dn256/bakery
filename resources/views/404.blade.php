@extends('layouts.master')
@section('title')
    <title>Mew Bakery</title>
@stop

@section('content')
    <section class="error_area">
        <div class="container">
            <div class="error_inner">
                <div class="error_inner_text">
                    <h4>Oops! That page can’t be found</h4>
                    <h5>Sorry, but the page you are looking for does not existing</h5>
                    <a class="pink_btn" href="{{route('home')}}">Trở lại trang chủ</a>
                </div>
            </div>
        </div>
    </section>
@stop