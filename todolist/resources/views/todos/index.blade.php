
@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if (count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="card bg-light mb-2">
            <div class="card-body">
                <h3 class="span-2">
                    <a href="todo/{{ $todo->id }}">
                        {{ $todo->text }}
                    </a>
                    <span class=" badge badge-danger"> {{ $todo->due }}</span>
                </h3>
            </div>
        </div>
        @endforeach
    @endif
    @endsection