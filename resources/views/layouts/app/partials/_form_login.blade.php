<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="block block-themed block-transparent ">
                <div class="block-header bg-primary text-center h3 text-white">
                    <ul class="block-options ">
                        <li>
                            <button class="text-white" data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                - @lang('cabecera.login_form') -
            </div>
            <br>
            <div class="block-content block-content-narrow block-content-full ">
                <form class="form-horizontal " method="POST" action="{{ route('login')  }}">
                    {{ csrf_field() }}
        
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-sm-12 text-left ">@lang('cabecera.form_email'):</label>
            
                        <div class="col-sm-12">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
        
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-12 ">@lang('cabecera.form_password'):</label>
            
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>
                
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
            
                        <div class="col-sm-12 text-right">
                            <a class=" btn btn-link" href="{{ route('password.request') }}">
                                @lang('cabecera.form_forgot')
                            </a>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary btn-minw">
                                @lang('general.Submit')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>