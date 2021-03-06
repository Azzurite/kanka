<?php /** @var \App\Models\Release $model */?>
@extends('layouts.front', [
    'title' => trans('front/news.show.title', ['name' => $model->title]),
    'description' => '',
])

@section('og')
    <meta property="og:description" content="{{ $model->excerpt }}" />
    <meta property="og:url" content="{{ route('front.news.show', $model->getSlug()) }}" />
@endsection

@section('content')
    <header class="masthead reduced-masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">{{ trans('front/news.title') }}</h1>
                        <p class="mb-5">{{ trans('front/news.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="releases">
        <div class="container">
            @admin
            <a href="{{ route('voyager.posts.edit', $model) }}" style="float: right;" title="{{ __('crud.edit') }}">
                <i class="fas fa-pencil-alt"></i>
            </a>
            @endadmin
            <h2>{{ $model->title }}</h2>

            <p class="text-muted" title="{{ $model->updated_at }} UTC">
                {{ trans('front/news.post.footer', ['date' => $model->updated_at->diffForHumans(), 'name' => $model->authorId->name]) }}
            </p>

            {!! $model->body !!}
            <p><a href="{{ route('front.news.index') }}">{{ trans('front/news.show.return') }}</a></p>
        </div>
    </section>
@endsection
