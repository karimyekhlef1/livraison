
<form role="form" id="payment-form">
    @csrf

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

        <div class="col-md-6">
            <input id="email" type="number" class="form-control" name="quantity" value="1" max="10" required>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label>CARD NUMBER</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="Number" placeholder="Valid Card Number" required="">
                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-7 col-md-7">
            <div class="form-group">
                <label>EXPIRATION DATE</label>
                <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required="">
            </div>
        </div>
        <div class="col-xs-5 col-md-5 pull-right">
            <div class="form-group">
                <label>CV CODE</label>
                <input type="text" class="form-control" name="CVC" placeholder="CVC" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label>NAME OF CARD</label>
                <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-primary" type="submit">Make a payment!</button>
        </div>
    </div>
</form>