#EXTM3U

@foreach($list as $Channel)

<<<<<<< HEAD
#EXTINF:-1 tvg-id="{{$Channel->number}}" tvg-name="{{$Channel->name}}" tvg-logo="{{ url($Channel->logo) }}" group-title="{{ $Channel->group->name }}",{{$Channel->name}}
=======
#EXTINF:-1 tvg-name="{{$Channel->name}}" tvg-logo="{{ url($Channel->logo) }}" group-title="{{ $Channel->group->name }}",{{$Channel->name}}
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
{{$Channel->url_stream}}
@endforeach