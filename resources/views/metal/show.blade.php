@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include ('show', [
                        'title' => 'Metal',
                        'svg' => asset('/svg/metal.svg')
                    ])  

        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header"><h4>Historial</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($metal->all() as $m)
                        <p>Reciclaste <span>{{ $m->cantidad }}</span> <span>{{ $m->cantidad === 1 ? rtrim($m->metal, 's') :  $m->metal}}</span>  el día <span>{{ date("d-m-Y", strtotime($m->created_at)) }}</span>
                    @endforeach

                </div>
            </div>
        </div>        
    </div>
</div>
@endsection