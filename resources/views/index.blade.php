@extends('layouts.master')
@section('title', 'Index')
@section('content')
    <div class="text-center">
        <h1>Indofood Restaurants</h1><br>
    </div>
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="images/img-1.jpg" alt="">
                <div class="slider-caption">Salted Egg Chicken</div>
            </div>
            <div class="slide">
                <img src="images/img-2.jpg" alt="">
                <div class="slider-caption">Iga Bakar</div>
            </div>
            <div class="slide">
                <img src="images/img-3.jpg" alt="">
                <div class="slider-caption">Sup Daging Tomat Jamur</div>
            </div>
            <div class="slide">
                <img src="images/img-4.jpg" alt="">
                <div class="slider-caption">Nasi Goreng Udang</div>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn-1"></div>
                <div class="auto-btn-2"></div>
                <div class="auto-btn-3"></div>
                <div class="auto-btn-4"></div>
            </div>
        </div>
        <div class="navigation-mannual">
            <label for="radio1" class="mannual-btn"></label>
            <label for="radio2" class="mannual-btn"></label>
            <label for="radio3" class="mannual-btn"></label>
            <label for="radio4" class="mannual-btn"></label>
        </div>
    </div>
    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;

            if (counter > 4) {
                counter = 1
            }

        }, 5000);
    </script>
@endsection
