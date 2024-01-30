@php
    $str = "name";
    $arr = ['a','b','c','d'];
@endphp

<script>
    var str = @json($str);
    var arr = @json($arr);
    // var arr = {{ Js::from($arr) }};
    
    console.log(str)
    console.log(arr)
</script>

<h1>{{$user}}</h1>
{!! $script!!}