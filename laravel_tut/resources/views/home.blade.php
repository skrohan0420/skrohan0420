@php
    $arr = [
        'a',
        'b',
        'c'
    ];
@endphp

{{-- @include('pages/header', ['key' => 'Value']) --}}
@includeWhen(true,'pages/header', ['key' => 'Value'] )
<h1>home</h1>
<a href="{{route('about')}}">about</a>
<a href="{{route('post')}}">post</a>
@includeUnless(false,'pages/footer', ['key2' => $arr])
{{-- @include('pages/footer', ['key2' => $arr])  --}}

@includeIf('pages/isExist') 



