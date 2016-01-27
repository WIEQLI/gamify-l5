@extends('layouts.admin')

{{-- Web site Title --}}
@section('title')
	{{ trans('admin/choice/title.question_update') }} :: @parent
@endsection

{{-- Content Header --}}
@section('header')
<h1>
    {{ trans('admin/choice/title.question_update') }}
    <small>{{ $question->name }}</small>
</h1>
@endsection

{{-- Content --}}
@section('content')

<!-- Notifications -->
@include('partials.notifications')
<!-- ./ notifications -->

@include('admin/choice/_form')

@endsection