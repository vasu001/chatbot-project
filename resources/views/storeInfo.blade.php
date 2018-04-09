<?php $mytime = Carbon\Carbon::now();?>
@if(count($bots) > 0)
        @foreach($bots as $bot)
            @if($bot->webact === 'Art')
                @include('botman_d_bs.art')
            @elseif($bot->webact === 'Social Media')
                @include('botman_d_bs.social')
            @elseif($bot->webact === 'Blog')
                @include('botman_d_bs.blog')
            @elseif($bot->webact === 'Portfolio')
                @include('botman_d_bs.port')        
            @elseif($bot->webact === 'Food')
                @include('botman_d_bs.food')
            @elseif($bot->webact === 'StartUp')
                @include('botman_d_bs.start')
            @endif
        @endforeach
@endif
