@extends('layouts.master')
@section('page_title', 'Mi Panel')

@section('content')
    <h2>BIENVENIDO {{ Auth::user()->name }}. ESTE ES TU PANEL</h2>
    @endsection