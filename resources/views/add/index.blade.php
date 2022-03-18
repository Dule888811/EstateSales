@extends('layouts.app')

@section('content')



<div class="formular">
    <div class="form-input">
        <label for="ad_title">title:
            <input type="text"  name="ad_title" value={{$add['0']['ad_title']}} {{$value ?? ''}}></label>
    </div>

    <div class="form-input">
        <label for="city">city:
            <input type="text" value={{$add['0']['city']}} {{$value ?? ''}} name="city"></label>
    </div>
    <div class="form-input">
        <label for="streetName">street Name:
            <input type="text" value={{$add['0']['streetName']}} {{$value ?? ''}}} name="streetName"></label>
    </div>
    <div class="form-input">
        <label for="price">price
            <input type="text" value={{$add['0']['price']}} {{$value ?? ''}} name="price"></label>
    </div>
    <div class="form-input">
        <label for="quadrature">quadrature
            <input type="text" value={{$add['0']['quadrature']}} {{$value ?? ''}} name="quadrature"></label>
    </div>
    <div class="form-input">
        <label for="price">estate types
            <input type="text" value={{$add['0']['estate_types']}} {{$value ?? ''}}name="Adddescription"></label>
    </div>
</div>


@endsection
