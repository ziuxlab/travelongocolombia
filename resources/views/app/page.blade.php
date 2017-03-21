@extends('layouts.app.app')

@section('title')
    {{$page->tittle or $Config->tittle}}
@stop

@section('keywords')
    {{$page->keywords or $Config->keywords}}
@stop

@section('description')
    {{$page->meta_description or $Config->meta_description}}
@stop

@section('style')
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    {!! $page->body !!}
    <div class="content content-boxed content-full">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <p>Travelongo&acute;s priority is to be known in the national and international market for not only its
               quality service, but also its &lsquo;sustainability model&rsquo; which employs eco-friendly activities
               and preserves cultural heritage while highlighting autogenous traditions and customs of Quind&iacute;o,
               Risaralda and Caldas.</p>
            
            <p>Travelongo Colombia encourages our customers and tour team to preserve and conserve natural resources,
               and to only offer tours that demonstrate a respect for all life and cultures. Compliance with current
               law, contribution to socioeconomic responsibility by offering employees and contractors fair salaries and
               payments, and offering employment opportunities first to local citizens are all goals established by
               Travelongo Colombia. In addition we will expose and denounce all illegal activities or behavior contrary
               to our cultural heritage or fauna and flora species, or that contributes to child exploitation or sexual
               trafficking.</p>
            <div class="row flex">
                <div class="col-sm-6">
                    <a href="#" class="block block-rounded block-transparent block-link-hover2" data-toggle="modal" data-target="#sexual">
                        <img class="img-responsive" src="{{asset('img/sustainability/VS.jpg')}}" alt="">
                        <div class="push-10-t ">
                            <h5>No to the sexual explotation of children and adolelescen</h5>
                        </div>
                    </a>
                    <div class="modal fade" id="sexual">
                        <div class="modal-dialog modal-dialog-popin">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent remove-margin-b">
                                    <div class="block-header bg-primary-dark">
                                        <ul class="block-options">
                                            <li>
                                                <button data-dismiss="modal" type="button"><i class="si si-close"></i>
                                                </button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">NO TO THE SEXUAL EXPLOITATION OF CHILDREN AND ADOLESCEN</h3>
                                    </div>
                                    <div class="block-content">
                                        <img class="img-responsive push-20" src="{{asset('img/sustainability/VS.jpg')}}"
                                             alt="">
                                        <p>Travelongo Colombia complying with law 679 of 2001 and 1336 of 2009 refuse every
                                           violent sexual act against boys, girls and teenagers of the country, for that
                                           reason we promote in our customers respect for children, refusing all action
                                           which affects their well being (child pornography and prostitution, and others)
                                           and at the same time we encourage the immediate denouncement of the crimes
                                           against our children.</p>
                                        <p>Call to: <br>
                                           Attention Phone number : 018000918080 –4 optión or
                                           Quindío (6) 745-79-01 <br>
                                           Police emergency number 123
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
                                        <i class="fa fa-check"></i> Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="col-sm-6">
                    <a href="#" class="block block-transparent block-rounded block-link-hover2" data-toggle="modal" data-target="#culture">
                        <img class="img-responsive" src="{{asset('img/sustainability/pc.jpg')}}" alt="">
                        <div class="push-10-t">
                            <h5>Cultural goods commercialization and damage</h5>
                        </div>
                    </a>
                    <div class="modal fade" id="culture">
                        <div class="modal-dialog modal-dialog-popin">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent remove-margin-b">
                                    <div class="block-header bg-primary-dark">
                                        <ul class="block-options">
                                            <li>
                                                <button data-dismiss="modal" type="button"><i class="si si-close"></i>
                                                </button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">CULTURAL GOODS COMMERCIALIZATION AND DAMAGE</h3>
                                    </div>
                                    <div class="block-content">
                                        <img class="img-responsive push-20" src="{{asset('img/sustainability/pc.jpg')}}"
                                             alt="">
                                        <p>Travelongo Colombia refuses commercialization and damage to cultural goods, Law
                                           103 of 1991
                                           If you know of any action against colombian cultural and archaeological heritage,
                                           please call.</p>
                                        <p>Call to: <br>
                                           National Police: 123
                                        </p>
                                        <h4>Tourist</h4>
                                        <p>Wherever you leave Colombia carrying any object which is classified as cultural
                                           heritage, You must ask for an export authorization to the appropriate
                                           institutions:</p>
                                        <ul>
                                            <li>Written documents: General Archive of the Nation Web: <a
                                                        href="www.archivogeneral.gov.co">www.archivogeneral.gov.co</a></li>
                                            <li>Every kind of cultural goods: Minister of Culture – Division of heritage
                                                Web <a href="www.mincultura.gov.co">www.mincultura.gov.co</a></li>
                                            <li>Archaeological heritage or replicas: Colombian Institute of Anthropology and
                                                History Web: <a href="www.icanh.gov.co">www.icanh.gov.co</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
                                        <i class="fa fa-check"></i> Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="col-sm-6">
                    <a href="#" class="block block-transparent  block-rounded block-link-hover2" data-toggle="modal" data-target="#flora">
            
                        <img class="img-responsive" src="{{asset('img/sustainability/TFF.jpg')}}"
                             alt="flora and fauna colombia">
                        <div class="push-10-t ">
                            <h5>Fauna and Flora</h5>
                        </div>
                    </a>
        
                    <div class="modal fade" id="flora">
                        <div class="modal-dialog modal-dialog-popin">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent remove-margin-b">
                                    <div class="block-header bg-primary-dark">
                                        <ul class="block-options">
                                            <li>
                                                <button data-dismiss="modal" type="button"><i class="si si-close"></i>
                                                </button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">FAUNA AND FLORA</h3>
                                    </div>
                                    <div class="block-content">
                                        <img class="img-responsive push-20" src="{{asset('img/sustainability/TFF.jpg')}}"
                                             alt="fauna and flora travleongo colombia">
                                        <p>Travelongo Colombia promotes respect and preservation of colombian flora and
                                           fauna (Law 17 of 1981, resolution 1367 de 2000) .</p>
                                        <p><strong>Denounce: </strong><br>
                                            National Police 123<br>
                                            C.R.Q phone numbers 018000916625 – 7460600
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
                                        <i class="fa fa-check"></i> Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="col-sm-6">
                    <a href="#" class="block  block-transparent block-rounded block-link-hover2" data-toggle="modal"
                       data-target="#explotation">
            
                        <img class="img-responsive" src="{{asset('img/sustainability/EI.jpg')}}" alt="">
                        <div class="push-10-t ">
                            <h5>Child Explotation</h5>
                        </div>
                    </a>
        
                    <div class="modal fade" id="explotation">
                        <div class="modal-dialog modal-dialog-popin">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent remove-margin-b">
                                    <div class="block-header bg-primary-dark">
                                        <ul class="block-options">
                                            <li>
                                                <button data-dismiss="modal" type="button"><i class="si si-close"></i>
                                                </button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">CHILD EXPLOITATION</h3>
                                    </div>
                                    <div class="block-content">
                                        <img class="img-responsive push-20" src="{{asset('img/sustainability/EI.jpg')}}"
                                             alt="">
                                        <p>Travelongo Colombia refuses and denounces all kind of exploitative child labor
                                           for porpose of profit or other benefit.</p>
                                        <p>Call to: <br>
                                           Calling to Bienestar Familiar (ICBF) 01-8000-91-80-80<br>
                                           Police emergency number 123
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">
                                        <i class="fa fa-check"></i> Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop