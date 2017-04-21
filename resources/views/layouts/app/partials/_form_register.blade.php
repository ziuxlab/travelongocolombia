<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="block-header bg-primary text-center h3 text-white">
                - @lang('cabecera.Register_form') -
            </div>
            <br>
            <div class="block-content block-content-full ">
                <form action="{{url('/register')}}" method="POST" id="registerForm" class="form-horizontal">
                    <div class="form-group" id="register-name">
                        <label for="name" class="col-md-4 control-label text-black">@lang('cabecera.form_name'):</label>
                        <div class="col-md-6">
                            <div class="input-group">
                        <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="@lang('cabecera.placeholder_name')">
                            </div>
                        <span class="help-block">
                            <strong id="register-errors-name"></strong>
                        </span>
                        </div>
                    </div>
                    <div class="form-group" id="register-email">
                        {{ csrf_field() }}
                        <label for="email" class="col-md-4 control-label text-black">@lang('cabecera.form_email')
                            :</label>
                        <div class="col-md-6">
                            <div class="input-group">
                        <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('cabecera.placeholder_email')">
                            </div>
                        <span class="help-block">
                            <strong id="register-errors-email"></strong>
                        </span>
                        </div>
                    </div>
                    <div class="form-group" id="register-password">
                        <label for="password" class="col-md-4 control-label text-black">@lang('cabecera.form_password')
                            :</label>
                        <div class="col-md-6">
                            <div class="input-group">
                            <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="@lang('cabecera.placeholder_password')">
                            </div>
                            <span class="help-block">
                                <strong id="register-errors-password"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="form-group" id="register-repeat">
                        <label for="password-confirm"
                               class="col-md-4 control-label text-black">@lang('cabecera.form_password_repeat'):</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="@lang('cabecera.placeholder_repeat')">
                            </div>
                                <span class="help-block">
                                    <strong id="register-errors-repeat"></strong>
                                </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <button type="submit" class="btn btn-primary" name="ingresar"> @lang('cabecera.Register')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>