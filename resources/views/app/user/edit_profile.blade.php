<div class="block block-bordered block-rounded">
    <div class="block-header">
        <h3 class="block-title">@lang('dashboard_user.profile_info')</h3>
    </div>
    <!-- form -->
    {!! Form::open(['method' => 'POST', 'action'=> ['DashboardController@updateProfile'],'files' => 'true', 'class' => 'form-horizontal']) !!}
    
    <div class="block-content  block-content-full">
        <div class="row flex-center">
            <!-- user image -->
            <div class=" col-xs-4 flex-center">
                <div id="image-preview"
                     style="background-image: @if(Auth::user()->img !=null) url({{asset(Auth::user()->img)}}) @else url({{asset('img/default.png')}}) @endif">
                    <label for="image-upload" id="image-label">@lang('dashboard_user.choose')</label>
                    <input type="file" name="image" id="image-upload"
                           accept="image/png,image/jpeg,image/jpg"/>
                </div>
                {!! $errors->first('image','<span class="help-block">:message</span>') !!}
            </div>
            <!-- end user image -->
            <div class=" col-xs-8">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label(trans('dashboard_user.name').':', null, ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control','placeholder'=>trans('cabecera.placeholder_name')] ) !!}
                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label(trans('dashboard_user.email').':', null, ['class' => 'col-sm-3 control-label lbpd ']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('email', Auth::user()->email, ['class' => 'form-control','placeholder'=>trans('cabecera.placeholder_email')]) !!}
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            
            </div>
        </div>
    
    </div>
    <div class="block-content border-t">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="form-group">
                    <button class="btn btn-primary btn-minw" type="submit">@lang('dashboard_user.update_info')</button>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
<!-- form -->
</div>


