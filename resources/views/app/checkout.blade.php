@extends('layouts.app.app')

@section('title')
    {{ $Config->tittle}}
@stop

@section('keywords')
    {{ $Config->keywords}}
@stop

@section('description')
    {{$Config->meta_description}}
@stop

@section('style')
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    <div class="bg-image  overflow-hidden" style="background-image: url('{{ asset('img/banner/about-us.jpg')}}');">
        <div class="content content-full bg-black-op">
            <h1 class="h1 font-w700 text-center text-white push-50 push-50-t animated fadeInDown"
                data-class="animated fadeInDown">
                <i class="fa fa-shopping-cart"></i> Checkout
            </h1>
        </div>
    </div>
    <div class="content-boxed content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 bg-white remove-padding">
                <div class="js-wizard-classic-validation block block-bordered remove-margin">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Personal</a>
                        </li>
                        <li>
                            <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Details</a>
                        </li>
                    </ul>
                    {!! Form::open(['action'=> ['CheckoutController@store'],'class'=>'js-card-form js-form1 validation form-horizontal','novalidate','id'=>'form_stripe']) !!}
                    <div class="block-content block-content-mini block-content-full border-b">
                        <div class="wizard-progress progress progress-mini remove-margin-b">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="block-content block-content-mini block-content-narrow tab-content ">
                        <div class="tab-pane  push-30-t push-50 active" id="validation-classic-step1">
                            @for ($i = 0; $i < Session::get('adults'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">Adult {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Name</label>
                                                <input class="form-control" type="text"
                                                       name="full_name['adult'][{{$i}}]"
                                                       placeholder="Please enter your name">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email['adult'][{{$i}}]"
                                                       placeholder="Please enter your email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>Phone</label>
                                                <input class="form-control" type="text" name="phone['adult'][{{$i}}]"
                                                       placeholder="Please enter your phone">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>City</label>
                                                <input class="form-control" type="text" name="city['adult'][{{$i}}]"
                                                       placeholder="Please enter your City">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Country</label>
                                                <input class="form-control" type="text" name="country['adult'][{{$i}}]"
                                                       placeholder="Please enter your Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('children'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">Child {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Name</label>
                                                <input class="form-control" type="text"
                                                       name="full_name['child'][{{$i}}]"
                                                       placeholder="Please enter your name">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Age</label>
                                                <input class="form-control" type="number" name="age['child'][{{$i}}]"
                                                       placeholder="Please enter your age">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('infants'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">Infant {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Name</label>
                                                <input class="form-control" type="text"
                                                       name="full_name['infant'][{{$i}}]"
                                                       placeholder="Please enter your name">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Age</label>
                                                <input class="form-control" type="number" name="age['infant'][{{$i}}]"
                                                       placeholder="Please enter your age">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="tab-pane push-30-t push-50 " id="validation-classic-step2">
                            <div class="js-card-container hidden-xs push-50">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>Number</label>
                                            <input class="form-control" id="number" data-stripe="number" name="number"
                                                   type="text" value="4242424242424242" placeholder="**** **** **** ****">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>Full Name</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                   placeholder="JOHN DOE" value="mauricio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>Expiration (MM/YY)</label>
                                            <div class="form-inline">
                                                <input class="form-control" type="text" name="month" size="2"
                                                       data-stripe="exp_month" value="02">
                                                <span> / </span>
                                                <input class="form-control" type="text" name="year" size="4"
                                                       data-stripe="exp_year" value="2020">
                                            
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="checkout-cc-cvc">CVC</label>
                                            <input class="form-control" id="cvc" data-stripe="cvc" name="cvc"
                                                   type="text" placeholder="***" value="345">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default btn-minw disabled" type="button"><i
                                            class="fa fa-arrow-left"></i> Previous
                                </button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default btn-minw" type="button">Next <i
                                            class="fa fa-arrow-right"></i></button>
                                <button id="submit" class="wizard-finish btn btn-primary btn-minw" type="submit"
                                        style="display: none;"><i class="fa fa-check"></i> Submit
                                </button>
                            </div>
                        </div>
                    
                    </div>
                    {!! Form::close() !!}
                </div>
            
            </div>
        </div>
    
    </div>
    <div class="content-boxed content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 remove-padding">
                @include('app.partials.needhelp')
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/plugins/card/jquery.card.min.js')}}"></script>
    <script>var BaseFormWizard = function () {
            var a = function () {
                var e = jQuery(".js-form1");
                e.on("keyup keypress", function (e) {
                    var a = e.keyCode || e.which;
                    return 13 === a ? (e.preventDefault(), !1) : void 0
                });
                var i = e.validate({
                    errorClass: "help-block animated fadeInDown",
                    errorElement: "div",
                    errorPlacement: function (e, a) {jQuery(a).parents(".form-group > div").append(e)},
                    highlight: function (e) {jQuery(e).closest(".form-group").removeClass("has-error").addClass("has-error"), jQuery(e).closest(".help-block").remove()},
                    success: function (e) {jQuery(e).closest(".form-group").removeClass("has-error"), jQuery(e).closest(".help-block").remove()},
                    rules: {
                        "full_name['adult'][0]": {required: !0, minlength: 2},
                        "phone['adult'][0]": {required: !0, minlength: 2},
                        "email['adult'][0]": {required: !0, email: !0},
                        "country['adult'][0]": {required: !0},
                        "city['adult'][0]": {required: !0},
                        
                    },
                    messages: {
                        "full_name['adult'][0]": {
                            required: "Please enter a name",
                            minlength: "Your name must consist of at least 2 characters"
                        },
                        "phone['adult'][0]": {
                            required: "Please enter a phone",
                            minlength: "Your phone must consist of at least 2 numbers"
                        },
                        "email['adult'][0]": "Please enter a valid email address",
                        "country['adult'][0]": "Please enter a Country",
                        "city['adult'][0]": "Please enter a City"
                    }
                });
                jQuery(".js-wizard-classic-validation").bootstrapWizard({
                    tabClass: "",
                    previousSelector: ".wizard-prev",
                    nextSelector: ".wizard-next",
                    onTabShow: function (e, a, i) {
                        var r = a.find("li").length, s = i + 1, t = s / r * 100, n = a.parents(".block"), l = n.find(".wizard-progress > .progress-bar"), o = (n.find(".wizard-prev"), n.find(".wizard-next")), d = n.find(".wizard-finish");
                        l && l.css({width: t + "%"}), s >= r ? (o.hide(), d.show()) : (o.show(), d.hide())
                    },
                    
                    onNext: function () {
                        var a = e.valid();
                        return a ? void 0 : (i.focusInvalid(), !1)
                    },
                    onTabClick: function () {return !1}
                }), jQuery(".js-wizard-validation").bootstrapWizard({
                    tabClass: "",
                    previousSelector: ".wizard-prev",
                    nextSelector: ".wizard-next",
                    onTabShow: function (e, a, i) {
                        var r = a.find("li").length, s = i + 1, t = a.parents(".block"), n = t.find(".wizard-next"), l = t.find(".wizard-finish");
                        s >= r ? (n.hide(), l.show()) : (n.show(), l.hide())
                    },
                    onNext: function () {
                        var e = a.valid();
                        return e ? void 0 : (r.focusInvalid(), !1)
                    },
                    onTabClick: function () {return !1}
                })
            };
            return {init: function () { a()}}
        }();
        jQuery(function () {BaseFormWizard.init()});
    </script>
    <script>
        jQuery(function () {
            App.initHelpers('appear');
            jQuery('.js-card-form').card({
                container: '.js-card-container',
                formSelectors: {
                    numberInput: '#number',
                    expiryInput: 'input[name="month"], input[name="year"]',
                    cvcInput: '#cvc',
                    nameInput: '#name'
                }
            });
        });
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey("<?php echo env('STRIPE_KEY') ?>");
        jQuery(function($) {
            $('#form_stripe').submit(function(event) {
                var $form = $(this);
                $form.find('#submit').prop('disabled', true);
                Stripe.card.createToken($form, stripeResponseHandler);
                event.preventDefault();
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#form_stripe');
            if (response.error) {
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').addClass('alert alert-danger');
                $form.find('#submit').prop('disabled', false);
                $('#submit').button('reset');
            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                HTMLFormElement.prototype.submit.call($('#form_stripe')[0]);
            }
        };
    </script>
@stop