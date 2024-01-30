<h1>hello world</h1>

{{
    "<h1>HEllO</h1>"
}}

{!!
    "<h1>Hello</h1>"
!!}

{{-- 
{!!
    "<script>alert('hello')</script>"
!!} --}}

@php
    $a = 10;
    $b = ["a","b","c","d","e"];
    $c = "rohan";
@endphp
{{
    $a;
}}
@{{$c}}
 
<ul>
    @foreach ($b as $num)    

        @if ($loop->first)
            <li style="color: red">{{$loop->index}}{{$num}}</li>
        @elseif ($loop->last)
            <li style="color: green">{{$loop->index}}{{$num}}</li>
        @else
            <li>{{$loop->index}}{{$num}}</li>
        @endif
    @endforeach
</ul>


