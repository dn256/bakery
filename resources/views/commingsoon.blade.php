@extends('layouts.master')

@section('title')
    <title>Mew Bakery</title>
@stop

@section('commingSoonPressed')
    class="active"
@stop

@section('content')
    <section class="coming_soon_area">
        <div class="coming_soon">
            <div class="welcome-text-area">
                <div class="container">
                    <h2 class="coming-header">Comming Soon</h2>
                    <div id="clockdiv" class="coming_soon_counter">
                        <div class="counter-item">
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div class="counter-item">
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div class="counter-item">
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div class="counter-item">
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>
                    <p>Website is under construction. We'll be here soon with new<br> awesome site, Subscribe to be notified.</p>
                    <form action="#" class="c-search-form" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Enter your email address">
                            <span class="input-group-addon">
                                    <button type="submit">Submit now</button>
                                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @section('script')
    <script src="js/comingsoon.js"></script>
@stop
