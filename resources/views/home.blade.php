@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quod dolore sint ullam aperiam enim magni voluptas, optio deleniti fugit alias sequi veritatis aut sapiente autem obcaecati rerum voluptates nulla!</p>
@endsection

@section('sidebar')
@parent
<p>This is append to the sidebar</p>
@endsection