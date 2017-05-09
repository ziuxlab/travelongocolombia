<?php $file = json_decode(json_encode($file),true) ; ?>
<?php $file_name = $file['name']; ?>
<?php $thumb_src = $file['thumb']; ?>



<div class="block block-bordered  block-rounded animated fadeIn">
    <div class="block-header">
        <ul class="block-options text-center">
            <li>
                <button type="button" onclick="javascript:rename('{{ $file_name }}')"><i class="fa fa-edit"></i>
                </button>
            </li>
            <li>
                <button type="button" onclick="javascript:download('{{ $file_name }}')"><i class="fa fa-download"></i>
                </button>
            </li>
            <li>
                <button type="button" onclick="javascript:fileView('{{ $file_name }}', '{{ $file["updated"] }}')">
                    <i class="fa fa-image"></i>
                </button>
            </li>
            <li>
                <button type="button" onclick="javascript:resizeImage('{{ $file_name }}')">
                    <i class="fa fa-arrows"></i></button>
            </li>
            <li>
                <button type="button" onclick="javascript:cropImage('{{ $file_name }}')">
                    <i class="fa fa-crop"></i></button>
            </li>
            <li>
                <button type="button" onclick="javascript:trash('{{ $file_name }}')">
                    <i class="fa fa-trash"></i></button>
            </li>
        </ul>
    </div>
    <div class="text-center">
        <div class=" img-thumb" onclick="useFile('{{ $file_name }}')">
            <div class="" id="{{ $file_name }}" data-url="{{ $file['url'] }}">
                @if($thumb_src)
                    <img class="img-responsive" src="{{ $thumb_src }}">
                @else
                    <div class="icon-container">
                        <i class="fa {{ $file['icon'] }} fa-5x"></i>
                    </div>
                @endif
            </div>
        </div>
    
    </div>
    <div class="block-content block-content-full text-center">
        
        <h4 class="font-w300 push-5">  {{ str_limit($file_name, $limit = 20, $end = '...') }}</h4>
        <span class="text-gray">{{ $file['type'] }} | {{ $file['size'] }}</span>
    
    </div>
</div>




