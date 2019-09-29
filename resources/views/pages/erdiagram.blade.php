@extends('layouts.app')

@section('title')
    Documentation
@endsection

@section('content')
    <div class="documentationTitle">
        <h3>Entity Relationship Diagram</h3>
    </div>
    <img src="{{ asset('images/erdiagram.png') }}" class="ERDiagram" alt="ERDiagram">
@endsection('content')