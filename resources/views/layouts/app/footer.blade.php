<div class="bg-primary">
    <div class="content-boxed overflow-hidden">
        <div class=" row content text-white">
            <div class="col-sm-6   ">
                <h4 class="h3"> Signup for Newsletter</h4>
                <p>Affronting everything discretion men now own did. Still round match we to. Frankbness
                   pronounce daughters remainder extensive has but.</p>
            </div>
            <div class="col-sm-6 overflow-hidden">
                <form class="form-horizontal push-20-t">
                    <div class="form-group  ">
                        <div class="input-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn btn-minw btn-primary-darkest" type="button">@lang('general.Submit')</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="content-boxed">
    <div class="col-sm-12 text-gray">
        <div class="col-md-6 push-10-t text-center">
            <img class="logo img-responsive" src="{{asset('img/logo-naranja.svg')}}">
            <p class="push-15-t text-justify">
                Travelongo está comprometida con el cumplimiento de la ley 679 del 2001, y rechaza todo tipo de
                explotación, pornográfica, turismo sexual y violencia sexual a los menores de edad*
                Ley 17 de 1981 - Resolución Ministerial No. 1367 de 2000 (Trafico ilícito de especies de fauna y flora
                silvestre)*
                Ley 103 de 1991, Decreto 904 de 1941, Ley 397 de 1997 Decreto 833 de 2002, Ley 1185 de 2008 (Trafico
                ilícito de bienes culturales)*
                Rechaza la explotación laboral infantil y rechaza toda forma de discriminación racial*
                Los datos personales que se han recogido por medio de este canal serán tratados de conformidad con lo
                establecido en la ley 1581 2012 y sus decretos reglamentarios.
            </p>
            <div class="item-social">
                <a class="item item-social push-10-r item-circle bg-gray-lighter" href="{{$Config->facebook}}">
                    <i class="fa fa-facebook text-gray-dark"></i>
                </a>
                
                <a class="item item-circle push-10-r bg-gray-lighter" href="{{$Config->twitter}}">
                    <i class="fa fa-twitter text-gray-dark"></i>
                </a>
                <a class="item item-circle push-10-r bg-gray-lighter" href="{{$Config->google}}">
                    <i class="fa fa-google-plus text-gray-dark"></i>
                </a>
                <a class="item item-circle push-10-r bg-gray-lighter" href="{{$Config->youtbe}}">
                    <i class="fa fa-youtube text-gray-dark"></i>
                </a>
                <a class="item item-circle  bg-gray-lighter" href="{{$Config->instagram}}">
                    <i class="fa fa-instagram text-gray-dark"></i>
                </a>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 text-left  push-20-t">
            <p class="h3 text-white "> @lang('general.about')</p>
            <br>
            <ul class="list-unstyled">
                <li><a>About us</a></li>
                <li><a>Resposability Child</a></li>
                <li><a>FAQ</a></li>
                <li><a>Login</a></li>
                <li><a>Register</a></li>
                <li><a>Terms and conditions</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-6 text-center push-20-t">
            <h4 class="h3 text-white font-w600">@lang('general.Questions')</h4>
            <span class="item push-20-t item-circle bg-gray-lighter">
            <i class="fa fa-phone text-gray-dark"></i>
        </span>
            <p class="push-20-t h3">{{$Config->phone}}</p>
            <p class="">
                {{$Config->email}}
                <br>
                {{$Config->address}}
            </p>
        </div>
    </div>
    
    <div class="">
        <div class="col-sm-12 border-white-op-t push-15-t content-mini content-mini-full ">
       
            <span class="text-white">
                Copyright © 2017 Travelongo Colombia All Rights Reserved.
            </span>
            
            <span class="text-white pull-right">
                Made with <i class="fa fa-heart text-city"></i> in Colombia by <a
                        href="http://ziuxlab.com">Ziuxlab.com</a>
            </span>
        
        
        </div>
    </div>
</div>

