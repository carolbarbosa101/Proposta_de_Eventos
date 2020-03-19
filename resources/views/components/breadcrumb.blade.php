@if ($items)
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    @foreach ($items as $key => $value)
      @if ($value->url)
        <li class="breadcrumb-item"><a href="{{$value->url}}">{{$value->title}}</a></li>
      @else
        <li class="breadcrumb-item active" aria-current="page">{{$value->title}}</li>
      @endif
    @endforeach
  </ol>
</nav>
@endif
