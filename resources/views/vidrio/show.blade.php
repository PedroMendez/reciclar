@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header"><h4>Vidrio</h4></div>

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
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header"><h4>Historial</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($vidrio->all() as $v)
                        <p>Reciclaste <span>{{ $v->cantidad }}</span> <span>{{ $v->cantidad === 1 ? rtrim($v->vidrio, 's') :  $v->vidrio}}</span>  el día <span>{{ date("d-m-Y", strtotime($v->created_at)) }}</span>
                    @endforeach

                </div>
            </div>
        </div>        
    </div>
</div>
@endsection