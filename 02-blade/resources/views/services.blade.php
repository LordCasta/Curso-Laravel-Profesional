@extends('layouts.landing')

@section('title', 'Services')

@section('content')

    <h1>Services</h1>
    @component('_components.card')

        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor')    
       
    @endcomponent

    @component('_components.card')

        @slot('title', 'Service 2')
        @slot('content')
            <h4>Xd</h4>
            <p>Aprendiendi</p>
        @endslot    
       
    @endcomponent

    @component('_components.card')

        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum dolor 3')    
       
    @endcomponent

@endsection