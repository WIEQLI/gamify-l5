@extends('layouts.admin')

{{-- Web site Title --}}
@section('title')
    {{ trans('admin/user/title.user_show') }} :: @parent
@endsection

{{-- Content Header --}}
@section('header')
        {{ trans('admin/user/title.user_show') }}
        <small>{{ $user->username }}</small>
@endsection

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    <li>
        <a href="{{ route('admin.home') }}">
            <i class="fa fa-dashboard"></i> {{ trans('admin/site.dashboard') }}
        </a>
    </li>
    <li>
        <a href="{{ route('admin.users.index') }}">
            {{ trans('admin/site.users') }}
        </a>
    </li>
    <li class="active">
        {{ trans('admin/user/title.user_show') }}
    </li>
    @endsection

    {{-- Content --}}
    @section('content')

            <!-- Notifications -->
    @include('partials.notifications')
            <!-- ./ notifications -->

    @include('admin/user/_details', ['action' => 'show'])

@endsection
