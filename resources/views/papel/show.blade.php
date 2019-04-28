@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header"><h4>Papel</h4></div>

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
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header"><h4>Historial</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($papel->all() as $p)
                        <p>Reciclaste <span>{{ $p->cantidad }}</span> <span>{{ $p->cantidad === 1 ? rtrim($p->papel, 's') :  $p->papel}}</span>  el día <span>{{ date("d-m-Y", strtotime($p->created_at)) }}</span>
                    @endforeach

                </div>
            </div>
        </div>        
    </div>
</div>
@endsection