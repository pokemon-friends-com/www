@extends('anonymous.default')

@section('title', trans('errors.503_title'))

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{ trans('errors.503_title') }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning">503</h2>
            <div class="error-content">
                <h3>
                    <i class="fas fa-exclamation-triangle text-warning"></i> {{ trans('errors.503_title') }}
                </h3>
                <p>
                    {{ trans('errors.503_description') }}
                </p>
                @if (app()->bound('sentry') && !empty(app('sentry')->getLastEventID()))
                    <div>Error ID: {{ app('sentry')->getLastEventID() }}</div>
                    <sentry-dialog-component event-id="{{ app('sentry')->getLastEventID() }}"></sentry-dialog-component>
                @endif
                <p>
                    <a class="btn btn-primary btn-sm" href="{{ route('anonymous.dashboard') }}">{{ trans('home') }}</a>
                </p>
            </div>
        </div>
    </section>
@endsection
