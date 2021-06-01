@extends('layouts.dashboard.master')

@section('menu')
    @include('dashboard.menu')
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Sweet Alert</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Sweet Alert</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Sweet Alert é uma maneira mais "chamosa" de alertas para a sua aplicação<br>
            Aprenda mais lendo a Documentação do <a target="_blank" href="https://realrashid.github.io/sweet-alert/"> >> Sweet Alert</a>
            .
        </div>
    </div>
    
</div>
@endsection
