@extends('master')
@section('content')

<div class="custom-products">
    
<div class="trending-wrapper">
  <h1>Trending Products</h1>
    @foreach ($products as $item)
    <div class="trending-items">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}" >
      <div class="">
        <h3>{{$item['name']}}</h3>
      </div>
</a>
    </div>
    @endforeach
   </div>

</div>

@endsection('content')