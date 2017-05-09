<div class="block block-bordered block-rounded">
    <div class="block-header">
        <h3 class="block-title">@lang('dashboard_user.password')</h3>
    </div>
    <!-- form -->
    {!! Form::open([ 'method' => 'POST', 'action'=> ['DashboardController@storePassword'], 'class' => 'form-horizontal']) !!}
    
    <div class="block-content  block-content-full">
        <!-- form -->
        <div class="form-group {{ $errors->has('current') ? ' has-error' : '' }}">
            {!! Form::label(trans('dashboard_user.current_password').':', null, ['class' => 'lbpd col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                <input type="password" class="form-control" name="current" placeholder="@lang('cabecera.placeholder_currentpassword')">
                {!! $errors->first('current','<span class="help-block">:message</span>') !!}
            </div>
    
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::label(trans('dashboard_user.new_password').':', null, ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" placeholder="@lang('cabecera.placeholder_newpassword')">
                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {!! Form::label(trans('dashboard_user.repeat_password').':', null, ['class' => 'lbpd col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password_confirmation" placeholder="@lang('cabecera.placeholder_repeatpassword')">
                {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
            </div>
    
        </div>
    </div>
    <div class="block-content border-t">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="form-group">
                    <button class="btn btn-primary btn-minw" type="submit">@lang('dashboard_user.change_password')</button>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
<!-- form -->
</div>
