{{-- <!-- @extends('layouts.app') --}}

@extends('layouts.app')
@section('content')


<div class="container">
    
    <table class="table table-striped">
        
  <thead>
    <tr>
        
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
  @foreach ($products as $product)
  <tbody>
    <tr>
    <th scope="row">{{$product->id}}</th>
    <td>{{$product->name}}</td>
    <td>{{$product->details}}</td>
    <td>{{$product->price}}</td></td>
    </tr>
    @endforeach
      </tbody>
</table>

</div>





@section('content') -->
<!-- {{-- @include('inc.navbar') --}} -->
<div class="container">
    <h1 style="padding-left:30px">Posts</h1>
    {{-- < @include('inc.messages') --> --}}
    @if(count($products)>0)
    <ol>
        @foreach ($products as $product)
        <div class="well">
            <div class="col-md-4 col-sm-4">
                {{-- <!-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> --> --}}
            </div>

            <div class="col-md-8 col-sm-8">
                <li>
                    <h5> <a href="/products/{{$product->id}}"> {{$product->name}} </a></h5>
                </li><br>
                <small> Written on {{ $product->created_at}}</small>
                <h5>{{ $product->details}}</h5>
            </div>
        </div>

        <br>
        <hr>

        @endforeach
        {{-- {{ $product->links() }} --}}
    </ol>

    @else
    <p>Sorry ! No post found</p>
    @endif
</div>
@endsection