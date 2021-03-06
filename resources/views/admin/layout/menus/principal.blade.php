<p style="    color: #193b68; padding: 10px 10px 10px 10px; background: #f8f8f8; margin: 0;" class="w-100 text-center">
    <i class="fa fa-folder fa-fw"></i> ADMINISTRADOR
</p>
<ul class="nav" id="side-menu">
    {{-- Dashboard --}}
    @if(Sentinel::getUser()->role_id <= 1)
        {{-- Users --}}
        @php
            $route_module = 'users';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'user';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
                @if(Sentinel::getUser()->role_id <= 1)
                    <li>
                        <a href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                    </li>
                    <li>
                        <a href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                    </li>
                @endif
            </ul>
        </li>
    @endif


    @if(Sentinel::getUser()->role_id <= 2)
        {{-- Blog --}}
        @php
            $route_module = 'blogs';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'comments';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                </li>
            </ul>
        </li>
    @endif

    @if(Sentinel::getUser()->role_id <= 2 && 1==2)
        {{-- Countries --}}
        @php
            $route_module = 'countries';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'flag';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                </li>
            </ul>
        </li>
    @endif
    @if(Sentinel::getUser()->role_id <= 2 && 1==2)
        {{-- States --}}
        @php
            $route_module = 'states';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'flag';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                </li>
            </ul>
        </li>
    @endif
    @if(Sentinel::getUser()->role_id <= 2 && 1==2)
        {{-- Cities --}}
        @php
            $route_module = 'cities';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'flag';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                </li>
                <li>
                    <a href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                </li>
            </ul>
        </li>
    @endif

</ul>