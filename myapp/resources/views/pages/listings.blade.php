<h1> {{$heading}}</h1>

{{--@if(count($listings)==0)--}}
{{--    <p> No Listing Found!</p>--}}
{{--@endif--}}

@unless(count($listings)==0)

    @foreach($listings as $list)

        <h2><a href="/listing/{{$list['id']}}">{{$list['title']}} </a></h2>
        <p>{{$list['description']}}</p>
    @endforeach

@else
    <p> No Listings Found</p>
@endunless

