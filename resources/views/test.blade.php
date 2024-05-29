@extends('main')
@section('content')

    <x-nav-link href="/about">About</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>

<div style="background-color:#cbd5e0 ; min-height: 400px; ">
    <h1>Hello from the testing blade template</h1>

@foreach($dogs as $dog)

@if($loop->first !== false || $loop->last === true)
            <p style="display: inline">nope</p>
            <h2 style="font-size: 2em; display: inline">{{$dog}} </h2>
        @else
            <h2 style="font-size: 2em">{{$dog}} </h2>

@endif

@endforeach

@verbatim
    <script>
        const dogName = "Vego";
        const clicking = function() {
            alert(`Hello ${dogName} from the testing blade template`)
        }
    </script>
@endverbatim


        <div class="container" >
<p onclick="clicking()">xxxxx</p>
        </div>

</div>
@endsection

@section('banner')
    <h1>The Banner</h1>
@endsection
