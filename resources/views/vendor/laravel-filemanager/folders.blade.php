<?php $folder_name = $directory->name; ?>
<?php $folder_path = $directory->path; ?>


<div class="block block-bordered  block-rounded animated fadeIn">
    <div class="block-header">
        <ul class="block-options text-center">
            <li>
                <button type="button" onclick="javascript:rename('{{ $folder_name }}')"><i class="fa fa-edit"></i>
                </button>
            </li>
            
            <li>
                <button type="button" onclick="javascript:trash('{{ $folder_name }}')">
                    <i class="fa fa-trash"></i></button>
            </li>
        </ul>
    </div>
    
    <div class="block-content block-content-full  text-center">
        <div data-id="{{ $folder_path }}" class="folder-item square">
            <img class="img-responsive" src="{{ asset('vendor/laravel-filemanager/img/folder.png') }}">
        </div>
    </div>
    
    <div class="block-content block-content-full text-center">
    
        <h4 class="font-w300 push-5">  {{ str_limit($folder_name, $limit = 20, $end = '...') }}</h4>
        <span class="text-gray">Carpeta</span>
    </div>
</div>
