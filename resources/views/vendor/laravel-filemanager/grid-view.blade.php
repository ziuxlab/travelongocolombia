<div class="row">

  @if((sizeof($files) > 0) || (sizeof($directories) > 0))

  @foreach($directories as $directory)
  <div class="col-sm-4 ">
    @include('laravel-filemanager::folders')
  </div>
  @endforeach

  @foreach($files as $key => $file)
  <div class="col-sm-4 ">
    @include('laravel-filemanager::item')
  </div>
  @endforeach

  @else
  <div class="col-md-12">
    <p>{{ Lang::get('laravel-filemanager::lfm.message-empty') }}</p>
  </div>
  @endif

</div>
