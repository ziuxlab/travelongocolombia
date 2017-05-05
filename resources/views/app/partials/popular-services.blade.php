<div class="bg-white">
    <div class="content-boxed ">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2 text-capitalize">Popular additional Services</h2>
            <h4 class="h5 ">"We have a unique way at meeting your adventures expectational" </h4>
        </div>
    </div>
    <div class="content-boxed content content-full">
        <div class="row">
            <?php $services = $products->where('local',App::getLocale())->where('type',4) ?>
            @foreach($services->random(count($products) >8 ? 8 :count($products)) as $product)
                <div class="col-sm-6">
                    <div class="block block-themed block-bordered  flex overflow-hidden">
                        <div class="col-sm-3 col-xs-12  bg-image remove-padding"
                             style="background-image: url('{{asset(count($product->photos)>0 ? $product->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
                            <div class="mheight-100">
                            </div>
                        </div>
                        <div class=" col-sm-9 col-xs-12  border-black-op-r border-black-op-b  content-mini content-mini-full">
                            <h2 class="text-capitalize h4">{{$product->tittle}}</h2>
                            <p class="push-5">{{substr($product->description,0,171)}}...</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


