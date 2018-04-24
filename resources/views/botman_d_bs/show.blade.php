<?php $mytime = Carbon\Carbon::now();?>
    @if($bot->webTemplate === 'Art')
        @include('botman_d_bs.art')
    @elseif($bot->webTemplate === 'Social Media')
        @include('botman_d_bs.social')
    @elseif($bot->webTemplate === 'Blog')
        @include('botman_d_bs.blog')
    @elseif($bot->webTemplate === 'PortFolio')
        @include('botman_d_bs.port')        
    @elseif($bot->webTemplate === 'Food')
        @include('botman_d_bs.food')
    @elseif($bot->webTemplate === 'StartUp')
        @include('botman_d_bs.start')
    @endif