@php
    $adminRoute = Filament\Facades\Filament::getPanel()->getPath();
    $route = Str::of(url()->current())->contains($adminRoute) ? $adminRoute : "home";

    ($route != $adminRoute ? $layout = 'layout' : $layout = 'simple')
@endphp

@extends("errors::$layout")

@section('title', __('http-statuses.404.title'))
@section('code', '404')
@section('message', __('http-statuses.404.message'))
