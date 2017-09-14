#EXTM3U

@foreach($list as $Channel)

#EXTINF:-1 tvg-name="{{$Channel->name}}" tvg-logo="{{ url($Channel->logo) }}" group-title="{{ $Channel->group->name }}",{{$Channel->name}}
{{$Channel->url_stream}}
@endforeach