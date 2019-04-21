@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">Plástico</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/plastico.svg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">Cartón</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/carton.svg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">Papel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/papel.svg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header">Metal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/metal.svg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Vidrio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/vidrio.svg') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
