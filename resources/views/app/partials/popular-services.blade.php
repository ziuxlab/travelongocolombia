<div class="bg-white">
    <div class="content-boxed ">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2 text-capitalize">Popular additional Services</h2>
            <h4 class="h5 ">"We offer these additional services to make your vacation easier, more comfortable and even more enjoyable”</h4>
        </div>
    </div>
    <div class="content-boxed content content-full">
        <div class="row">
            <?php $services = $products->where('local', App::getLocale())
                                       ->where('type', 4)
                                       ->chunk(8) ?>
            <div class="js-slider border  col-sm-12" data-slider-autoplay="true" data-slider-arrows="true" >
                @foreach($services as $productos_8)
                    <div class="content">
                        @foreach($productos_8->split(2) as $productos)
                            <div class="col-sm-6">
                                @foreach($productos as $product)
                                    <div class="block block-themed block-bordered  flex overflow-hidden">
                                        <div class="col-sm-3 col-xs-12  bg-image remove-padding"
                                             style="background-image: url('{{asset(count($product->photos)>0 ? $product->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
                                            <div class="mheight-100">
                                            </div>
                                        </div>
                                        <div class=" col-sm-9 col-xs-12  border-black-op-r border-black-op-b flex-center  content-mini content-mini-full">
                                            <h2 class="text-left text-capitalize h4">{{$product->tittle}}</h2>
                                            <!--<p class="push-5">{{substr($product->description,0,171)}}...</p>-->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


