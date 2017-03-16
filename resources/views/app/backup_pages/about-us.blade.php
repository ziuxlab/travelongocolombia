@extends('layouts.app.app')

@section('title')
    {{$page->tittle}}
@stop

@section('keywords')
    {{$page->keywords}}
@stop

@section('description')
    {{$page->meta_description}}
@stop

@section('style')
    {{$Config->css}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    <div class=" bg-white ">
        <div class="content-boxed content">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
                    <div class="block ">
                        <h2 class="h2 ">Who we are</h2>
                        <div class="block-content">
                            <p>
                                Travelongo Colombia is a privately-owned company based in the city of Armenia, Colombia
                                (Department
                                of Quindío). We are dedicated to showing the world this gorgeous mountainous coffee
                                region, with its
                                semi tropical climate, tremendous biodiversity, tourist friendly infrastructure, and
                                welcoming Latin
                                population.
                            </p>
                            <p>
                                Travelongo Colombia was founded by a Colombian from Armenia Quindío, with a Bachelor of
                                Science
                                degree in International Trade and a U.S. citizen physician entrepreneur who visited
                                Armenia Quindío
                                in 2016, fell in love with its land and its people and now desires that other world
                                travelers enjoy
                                this country of extraordinary natural and cultural wealth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex">
        <div class="col-sm-6 bg-primary text-center content">
            <div class="block block-transparent ">
                <h2 class="h2 ">Our Mision</h2>
                <div class="block-content">
                    <p>
                        To create a truly unique and carefree vacation experience, especially for foreign travelers, by
                        engaging the scenic beauty, vibrant culture and historical landmarks of this Colombian coffee
                        area.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  text-center content text-white bg-secondary">
            <div class="block block-transparent">
                <h2 class="h2 ">Our Vision</h2>
                <div class="block-content">
                    <p>
                        To become a leading international corporation which provides highest quality tourist services at
                        competitive prices and with a high degree of social and environmental responsibility.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-boxed ">
    
        <div class="col-sm-7 content col-md-9 col-lg-10 ">
        
            <div class="block block-transparent">
                <h2 class="h2 text-center ">Our Creators</h2>
                <div class="block-content">
                    <p>
                        Liliana Betancurt Castañeda was born and university educated in Armenia, Colombia
                        and
                        Malaysia. She is fluent in English as well as her native Spanish and has partnered
                        with
                        Dr O'Connell to bring you the best of what central Colombia has to offer. She
                        understands the concept of "single resource tour planning" for visitors to this
                        rapidly
                        modernizing, high mountain region. At the customer’s direction, her tours can
                        concentrate on historical or scientific education, recreation, focused instruction
                        or a
                        combination of all.
                    </p>
                    <p>
                        Dr O'Connell, a U.S. citizen, retired physician and frequent traveler, has long
                        recognized the shortcomings of travel agencies, especially in Latin America – many
                        fraught with incomplete services and persistent language barriers.
                    </p>
                    <p>
                        Together, Travelongo Colombia recognizes the mismatch between what English speakers
                        want and what other agencies typically provide. By simply choosing from a checklist
                        of desired accommodations, activities and an assortment of additional tailored
                        services, Travelongo Colombia can make it all happen. Finally, a truly complete
                        vacation coordinator.
                    </p>
                </div>
            </div>
    
    
        </div>
        <div class="col-sm-5 remove-padding col-md-3 col-lg-2">
            <div class="img-container remove-padding col-sm-12 col-xs-6 fx-img-zoom-in">
                <img class="img-responsive "
                     src="https://s3.amazonaws.com/uifaces/faces/twitter/nzcode/128.jpg" alt="">
            
                <div class="img-options-content-about ">
                    <div class="content-mini content-mini-full bg-black-op push-20-t">
                        <h5 class="font-w400  text-white push-5">Liliana Betancurt Castañeda </h5>
                    </div>
                </div>
        
        
            </div>
            <div class="img-container remove-padding col-sm-12 col-xs-6 fx-img-zoom-in">
                <img class="img-responsive"
                     src="https://s3.amazonaws.com/uifaces/faces/twitter/jm_denis/128.jpg" alt="">
                <div class="img-options-content-about text-left">
                    <div class="content-mini content-mini-full bg-black-op">
                        <h5 class="font-w400  text-white push-5">Dr O'Connell</h5>
                    </div>
                </div>
            </div>
    
        </div>


    </div>

@stop

@section('scripts')
@stop