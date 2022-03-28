@extends('layouts.app')

@section('content')


    <form action ="{{route('emails')}}" class="DataForm" method="POST">
        {{csrf_field()}}

<div class="formular">
    <div class="form-input">
        <label for="ad_title">title:
            <input type="text"  name="ad_title" value={{$add['0']['ad_title']}} {{$value ?? ''}} readonly></label>
    </div>

    <div class="form-input">
        <label for="city">city:
            <input type="text" value={{$add['0']['city']}} {{$value ?? ''}}  name="city" readonly></label>
    </div>
    <div class="form-input">
        <label for="streetName">street Name:
            <input type="text" value={{$add['0']['streetName']}} {{$value ?? ''}}}  name="streetName" readonly></label>
    </div>
    <div class="form-input">
        <label for="price">price
            <input type="text" value={{$add['0']['price']}} {{$value ?? ''}} name="price" readonly></label>
    </div>
    <div class="form-input">
        <label for="quadrature">quadrature
            <input type="text" value={{$add['0']['quadrature']}} {{$value ?? ''}} name="quadrature" readonly></label>
    </div>
    <div class="form-input">
        <label for="price">estate types
            <input type="text" value={{$add['0']['estate_types']}} {{$value ?? ''}}name="Adddescription" readonly></label>
    </div>
    <div class="form-input">
        <label id="lbl" id="lbl" for="emil">e-mail
            <i class="fa fa-check" id="success"></i>
            <i class="fa fa-times" id="error"></i>
            <i class="fa fa-exclamation" id="warning"></i>
            <input type="email" class="emil" name="email" id="email"></label>
            <span id="spam1">Enter valid e-mail</span><br>
            <span id="spam2">This filed can not be empty</span>

    </div>
    <div class="form-input">
        <label for="comment">comment
            <input type="text" name="comment" required></label>
    </div>
    <div class="form-input">
    <input type="submit"    value="Send data in e-mail"><br/>
    </div>
</div>

    </form>

@endsection
