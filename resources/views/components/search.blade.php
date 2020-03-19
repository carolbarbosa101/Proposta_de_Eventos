<form class="form-inline" method="GET" action="{{route($routeName.'.index')}}">
  <div class="form-group mb-2">
    <a href="{{route($routeName.'.create')}}">@lang('bolao.add')</a>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="search" class="form-control" name="search" placeholder="@lang('bolao.search')" value="{{$search}}">
  </div>
  <button type="submit" class="btn btn-primary mb-2">@lang('bolao.search')</button>
  <a class="btn btn-warning mb-2" href="{{route($routeName.'.index')}}">@lang('bolao.clean')</a>
</form>
