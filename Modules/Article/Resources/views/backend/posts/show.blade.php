@extends('backend.layouts.app')

@section('title')
{{ $module_action }} {{ $module_title }} | {{ app_name() }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.posts.index')!!}"><i class="icon-speedometer"></i>Blog Dashboard</a></li>
<li class="breadcrumb-item"><a href='{!!route("backend.$module_name.index")!!}'><i class="{{ $module_icon }}"></i> {{ $module_title }}</a></li>
<li class="breadcrumb-item active"> {{ $module_action }}</li>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
                </h4>
                <div class="small text-muted">
                    {{ ucwords($module_name) }} Management Dashboard
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="float-right">
                    <a href="{{ route("backend.$module_name.index") }}" class="btn btn-secondary mt-1 btn-sm" data-toggle="tooltip" title="{{ ucwords($module_name) }} List"><i class="fas fa-list"></i> List</a>
                    @can('edit_'.$module_name)
                    <a href="{{ route("backend.$module_name.edit", $$module_name_singular) }}" class="btn btn-primary mt-1 btn-sm" data-toggle="tooltip" title="Edit {{ Str::singular($module_name) }} "><i class="fas fa-wrench"></i> Edit</a>
                    @endcan
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col-12 col-sm-9">

                @include('backend.includes.show')

            </div>
            <div class="col-12 col-sm-3">

                <div class="text-center">
                    <a href="{{route("frontend.$module_name.show", [encode_id($$module_name_singular->id), $$module_name_singular->slug])}}" class="btn btn-success" target="_blank"><i class="fas fa-link"></i> Public View</a>
                </div>
                <hr>

                <h4>Category</h4>
                <ul>
                    <li>
                        <a href="{{route('backend.categories.show', $$module_name_singular->category_id)}}">{{$$module_name_singular->category_name}}</a>
                    </li>
                </ul>
                <hr>

                <hr>

                {{-- @include('article::backend.includes.activitylog') --}}
                <hr>

            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    Updated: {{$$module_name_singular->updated_at->diffForHumans()}},
                    Created at: {{$$module_name_singular->created_at->toCookieString()}}
                </small>
            </div>
        </div>
    </div>
</div>

@stop
