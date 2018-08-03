@extends('admin.admin_layouts.master')

@section('title')
    {{ __('information') }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/admin-custom.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">{{ __('specializes') }}</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="{{ route('adminDashboard') }}" class="breadcrumb-item">
                            <i class="ti-home p-r-5"></i>{{ __('admin dashboard') }}
                        </a>
                        <a href="{{ route('specializes.index') }}" class="breadcrumb-item">
                            {{ __('specializes') }}
                        </a>
                    <span class="breadcrumb-item active">{{ __('update existed specialize') }}</span>
                    </nav>
                </div>
            </div>
            <div class="card">
                    <div class="card-header border bottom">
                        <h4 class="card-title">{{ __('update existed specialize') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ Form::model($specialize, ['route' => ['specializes.update', $specialize->id], 'method' => 'put', 'class' => 'form-inline']) }}

                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger fix-alert">{{ $error }}</p>
                            @endforeach
                           
                            {{ Form::text('name', null, ['class' => 'form-control m-b-20 m-r-15', 'id' => 'name']) }}
                                   
                            {{ Form::text('teaching_grade', null, ['class' => 'form-control m-b-20 m-r-15', 'id' => 'teaching_grade']) }}

                            {{ Form::submit(__('update'), ['class' => 'btn btn-gradient-success m-b-20']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
