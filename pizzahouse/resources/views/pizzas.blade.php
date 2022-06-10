@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        {{-- <p>{{ $type }} - {{ $base }} - {{ $price }}</p> --}}
        {{-- @for ($i = 0; $i < 5; $i++)
            <p>the value of i is {{ $i }}</p>
        @endfor --}}
        {{-- @for ($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }} - {{ $pizzas[$i]['base']}}</p>
        @endfor --}}

        @foreach ($pizzas as $pizza)
            <div>
                {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base']}}
            @if($loop->first)
                <span>- First one </span> 
            @endif
            @if($loop->last)
                <span>- Last one </span> 
            @endif
            </div>
        @endforeach
    </div>
</div>
@endsection