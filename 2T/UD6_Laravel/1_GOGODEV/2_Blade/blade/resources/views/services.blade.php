@extends('layouts.landing')

@section('title', 'services')


@section('body')
<h1>Services</h1>

@component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent

@component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent


@component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent

@component('_components.card')
        @slot('title', 'Service 4')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent

@component('_components.card')
        @slot('title', 'Service 5')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent


@component('_components.card')
        @slot('title', 'Service 6')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod')
@endcomponent



@endsection