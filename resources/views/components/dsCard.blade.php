<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 slide-fwd-center">
    <a href="{{$slot}}" class="text-dark">
        <div class="box-card text-center">
            <div class="title">
                <h4>{{ $nome }}</h4>
            </div>
            <h2 class="text-dark">{{ $valor }}</h2>
            <a href="{{$slot}}">Detalhes</a>
        </div>
    </a>
</div>
