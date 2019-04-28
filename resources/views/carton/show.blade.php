@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h4>Cartón</h4></div>

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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h4>Historial</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($carton->all() as $c)
                        <p>Reciclaste <span>{{ $c->cantidad }}</span> <span>{{ $c->cantidad === 1 ? rtrim($c->carton, 's') :  $c->carton}}</span>  el día <span>{{ date("d-m-Y", strtotime($c->created_at)) }}</span>
                    @endforeach

                </div>
            </div>
        </div>        
    </div>
</div>
@endsection