@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include ('card', [
                'title' => 'Plástico',
                'option1' => 'tapas',
                'option2' => 'botellas',
                'option3' => 'envases',
                'option4' => 'sillas',
                'option5' => 'mesas',
                'svg' => asset('/svg/plastico.svg'),
                'singular' => 'plastico',
                'plural' => 'plasticos',
                'modal' => 'Plastico'
            ])

        @include ('card', [
                'title' => 'Cartón',
                'option1' => 'formularios',
                'option2' => 'cajas',
                'option3' => 'envases',
                'option4' => 'carpetas',
                'option5' => 'biblioratos',
                'svg' => asset('/svg/carton.svg'),
                'singular' => 'carton',
                'plural' => 'cartons',
                'modal' => 'Carton'
            ])

        @include ('card', [
                'title' => 'Papel',
                'option1' => 'sobres',
                'option2' => 'diarios',
                'option3' => 'revistas',
                'option4' => 'hojas',
                'option5' => 'guías',
                'svg' => asset('/svg/papel.svg'),
                'singular' => 'papel',
                'plural' => 'papels',
                'modal' => 'Papel'
            ])

        @include ('card', [
                'title' => 'Metal',
                'option1' => 'latas',
                'option2' => 'envases',
                'option3' => 'cables',
                'option4' => 'copas',
                'option5' => 'vasos',
                'svg' => asset('/svg/metal.svg'),
                'singular' => 'metal',
                'plural' => 'metals',
                'modal' => 'Metal'
            ])                                    

        @include ('card', [
                'title' => 'Vidrio',
                'option1' => 'botellas',
                'option2' => 'frascos',
                'option3' => 'envases',
                'option4' => 'copas',
                'option5' => 'vasos',
                'svg' => asset('/svg/vidrio.svg'),
                'singular' => 'vidrio',
                'plural' => 'vidrios',
                'modal' => 'Vidrio'
            ]) 

    </div>
</div>
@endsection
