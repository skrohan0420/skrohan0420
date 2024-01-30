@forelse ($key2 as $k )
    <i>{{$k}}</i>
@empty
    <i>not found</i>    
@endforelse
<h1>footer</h1>