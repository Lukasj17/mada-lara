@foreach ($outfits as $outfit)
  <a href="{{route('outfit.edit',[$outfit])}}">{{$outfit->type}} size: {{$outfit->size}} color: {{$outfit->color}}</a>
  <span>{{$outfit->outfitMaster->name}} {{$outfit->outfitMaster->surname}}</span>
  <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
