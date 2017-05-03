@extends('layouts.app.app')

@section('title')
    Checkout page
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
                @if (Auth::guest())
                    <div>
                        <div class="row content content-narrow content-full">
                            <div class="col-sm-6 text-center border-r"><a href="" data-toggle="modal"
                                                                          data-target="#loginModal"
                                                                          class="btn btn-primary btn-minw ">@lang('cabecera.Login')</a>
                            </div>
                            <div class="col-sm-6 text-center"><a href="#" data-toggle="modal"
                                                                 data-target="#registerModal"
                                                                 class="btn btn-primary btn-minw ">@lang('cabecera.Register')</a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="js-wizard-classic-validation block block-bordered remove-margin">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a class="inactive" href="#validation-classic-step1"
                               data-toggle="tab">1. @lang('general.personal information')</a>
                        </li>
                        <li>
                            <a class="inactive" href="#validation-classic-step2"
                               data-toggle="tab">2. @lang('general.credit card')</a>
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
                                        <h4 class="block-title">@lang('general.adult') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       value="{{is_null($contacts['adult']) ? '': $contacts['adult'][$i]['name']}}"
                                                       name="adult[full_name][{{$i}}]"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.email')</label>
                                                <input class="form-control" type="email" name="adult[email][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': $contacts['adult'][$i]['email']}}"
                                                       placeholder="@lang('cabecera.placeholder_email')">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>@lang('general.phone')</label>
                                                <input class="form-control" type="text" name="adult[phone][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': $contacts['adult'][$i]['phone']}}"
                                                       placeholder="@lang('general.placeholder phone')">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>@lang('general.city')</label>
                                                <input class="form-control" type="text" name="adult[city][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': $contacts['adult'][$i]['city']}}"
                                                       placeholder="@lang('general.enter_city')">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>@lang('general.country')</label>
                                                <input class="form-control" type="text"
                                                       name="adult[country][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': $contacts['adult'][$i]['country']}}"
                                                       placeholder="@lang('general.placeholder country')">
                                                @if(!is_null($contacts['adult']))
                                                    {!! Form::hidden('adult[contact_id]['.$i.']', $contacts['adult'][$i]['id']) !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('children'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">@lang('general.child') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       name="child[full_name][{{$i}}]"
                                                       value="{{is_null($contacts['child']) ? '': $contacts['child'][$i]['name']}}"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.age')</label>
                                                <input class="form-control" type="number" name="child[age][{{$i}}]"
                                                       value="{{is_null($contacts['child']) ? '': $contacts['child'][$i]['age']}}"
                                                       placeholder="@lang('general.placeholder age')">
                                                @if(!is_null($contacts['child']))
                                                    {!! Form::hidden('child[contact_id]['.$i.']', $contacts['child'][$i]['id']) !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('infants'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">@lang('general.infant') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       value="{{is_null($contacts['infant']) ? '': $contacts['infant'][$i]['name']}}"
                                                       name="infant[full_name][{{$i}}]"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.age')</label>
                                                <input class="form-control" type="number" name="infant[age][{{$i}}]"
                                                       value="{{is_null($contacts['infant']) ? '': $contacts['infant'][$i]['age']}}"
                                                       placeholder="@lang('general.placeholder age')">
                                                @if(!is_null($contacts['infant']))
                                                    {!! Form::hidden('infant[contact_id]['.$i.']', $contacts['infant'][$i]['id']) !!}
                                                @endif
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
                                            <label>@lang('general.number')</label>
                                            <input class="form-control" id="number" data-stripe="number"
                                                   name="number"
                                                   type="text" value="4242424242424242"
                                                   placeholder="**** **** **** ****">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>@lang('general.name')</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                   placeholder="JOHN DOE" value="mauricio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>@lang('general.expiration') (MM/YY)</label>
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
                                            class="fa fa-arrow-left"></i> @lang('general.previous')
                                </button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default btn-minw"
                                        type="button">@lang('general.next')
                                    <i
                                            class="fa fa-arrow-right"></i></button>
                                <button id="submit" class="wizard-finish btn btn-primary btn-minw" type="submit"
                                        style="display: none;"><i class="fa fa-check"></i> @lang('general.Submit')
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
                        "adult[full_name][0]": {required: !0, minlength: 2},
                        "adult[phone][0]": {required: !0, minlength: 2},
                        "adult[email][0]": {required: !0, email: !0},
                        "adult[country][0]": {required: !0},
                        "adult[city][0]": {required: !0},
                        
                    },
                    messages: {
                        "adult[full_name][0]": {
                            required: "Please enter a name",
                            minlength: "Your name must consist of at least 2 characters"
                        },
                        "adult[phone][0]": {
                            required: "Please enter a phone",
                            minlength: "Your phone must consist of at least 2 numbers"
                        },
                        "adult[email][0]": "Please enter a valid email address",
                        "adult[country][0]": "Please enter a Country",
                        "adult[city][0]": "Please enter a City"
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
        jQuery(function ($) {
            $('#form_stripe').submit(function (event) {
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
        }
        ;
    </script>
@stop