<div class="col-md-4 mb-5">
    <div class="card">
        <div class="card-header"><h4>{{ $title }}</h4></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <img src="{{ $svg }}">

        </div>
    </div>
</div>