@extends('errors::minimal')

@section('title', __('Acceso Denegado | Forbidden | Défendu'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Acceso Denegado | Forbidden | Défendu'))
