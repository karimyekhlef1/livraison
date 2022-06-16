
@extends('layouts.app')
@section('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')


<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                <h2>
                    **** **** **** 1060
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Expiry date:</strong> 10/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> David
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                <h2>
                    **** **** **** 7002
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Expiry date:</strong> 10/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Anna Smith
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                <h2>
                    **** **** **** 3466
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Expiry date:</strong> 10/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Morgan
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-12">

            <div class="ibox">
                <div class="ibox-title">
                    Payment method
                </div>
                <div class="ibox-content">

                    <div class="panel-group payments-method" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-cc-paypal text-success"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PayPal</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-10">
                                            <h2>Summary</h2>
                                            <strong>Product:</strong>: {{ $product->title }} <br>
                                            <strong>Price once:</strong>: <span class="text-navy" id="price_once">{{ $product->price }}</span>
                                            <strong>Price Total:</strong>: <span class="text-navy" id="total1">{{ Request::get('quantity') * $product->price }}</span>

                                            <p class="m-t">
                                                Payment with PayPal
                                            </p>
                                            <a class="btn btn-success">
                                                <i class="fa fa-cc-paypal">
                                                    Purchase via PayPal
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                     </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-cc-amex text-success"></i>
                                    <i class="fa fa-cc-mastercard text-warning"></i>
                                    <i class="fa fa-cc-discover text-danger"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Credit Card</a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h2>Summary</h2>
                                            <strong>Product:</strong>: {{ $product->title }} <br>
                                            @if ($product->type_transaction == 'sale')
                                                <strong>Price once:</strong>: <span class="text-navy" id="price_once">{{ $product->price }}</span>
                                                <strong>Price:</strong>: <span class="text-navy" id="total2">{{ Request::get('quantity') * $product->price }} </span> (DZD)

                                                @else
                                                <strong>Price once:</strong>: <span class="text-navy" id="price_once">{{ $product->price }}</span>
                                                <strong>Price:</strong>: <span class="text-navy" id="total2">{{ Request::get('days') * $product->price }} </span> (DZD)

                                                @endif
        
                                            <p class="m-t">
                                                Payment with Credit card
                                            </p>
                                        </div>
                                        <div class="col-md-8">

                                            <form role="form" id="payment-form" action=" {{ route('products.payment.success', ['product'=> $product->id]) }} " method="GET">
                                                @if ($product->type_transaction == 'sale')
                                                    <div class="col form-group">
                                                        <label for="exampleFormControlTextarea1">Quantity : </label>
                                                        <input class="form-control" type="number" value="1" onchange="totalPrice()" id="quantity" name="quantity" required>
                                                    </div>
                                                @else
                                                    <div class="col form-group">
                                                        <label for="exampleFormControlTextarea1">Days (Jours) : </label>
                                                        <input class="form-control" type="number" id="days" onchange="totalPrice()" value="1" name="days" required>
                                                    </div>
                                                @endif
                                                
                                                
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label>CARD NUMBER</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="1234 5678 9123 1234" name="Number" placeholder="Valid Card Number" required="">
                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 col-md-7">
                                                        <div class="form-group">
                                                            <label>EXPIRATION DATE</label>
                                                            <input type="text" class="form-control" name="Expiry" value="06/22" placeholder="MM / YY" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                        <div class="form-group">
                                                            <label>CV CODE</label>
                                                            <input type="text" class="form-control" name="CVC" value="258" placeholder="CVC" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label>NAME OF CARD</label>
                                                            <input type="text" class="form-control" value="Amer Islam" name="nameCard" placeholder="NAME AND SURNAME">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="btn btn-primary" type="submit">Make a payment!</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection


@section('scripts')
@if ($product->type_transaction == 'sale')
<script>
    console.log('hello payment page');
    
    function totalPrice(){
        console.log('calculation');
        quantity = document.getElementById("quantity");
        price_once = document.getElementById("price_once");
    
        total1 = document.getElementById("total1");
        total1.innerText = quantity.value * price_once.innerText;
        
        total2 = document.getElementById("total2");
        total2.innerText = quantity.value * price_once.innerText;
    
    }
    </script>
    @else
    <script>
        console.log('hello payment page');
        
        function totalPrice(){
            console.log('calculation');
            days = document.getElementById("days");
            price_once = document.getElementById("price_once");
        
            total1 = document.getElementById("total1");
            total1.innerText = days.value * price_once.innerText;
            
            total2 = document.getElementById("total2");
            total2.innerText = days.value * price_once.innerText;
        
        }
        </script>
    @endif

@endsection