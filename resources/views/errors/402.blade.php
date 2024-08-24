@php
    $adminRoute = Filament\Facades\Filament::getPanel()->getPath();
    $route = Str::of(url()->current())->contains($adminRoute) ? $adminRoute : "home";

    ($route != $adminRoute ? $layout = 'layout' : $layout = 'simple')
@endphp

@extends("errors::$layout")
@section('title', __('http-statuses.402.title'))
@section('code', '402')
@section('message', __('http-statuses.402.message'))
