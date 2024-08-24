@php
    $adminRoute = Filament\Facades\Filament::getPanel()->getPath();
    $route = Str::of(url()->current())->contains($adminRoute) ? $adminRoute : "home";

    ($route != $adminRoute ? $layout = 'layout' : $layout = 'simple')
@endphp

@extends("errors::$layout")
@section('title', __('http-statuses.403.title
.message'))
@section('code', '403')
@section('message', 'http-statuses.403.message')
