<div class="panel panel-default">
    <div class="panel-heading">{{ tans('messages.topClients') }}</div>

    @unless($topClients->isEmpty())
        <ul class="list-group">
            @foreach($topClients as $topClient)
                <li class="list-group-item">{{ $topClient->name }}</li>
            @endforeach
        </ul>
    @else
        <h4>
            <center><b>{{ trans('messages.noData') }}</b></center>
        </h4>
    @endunless
</div>
