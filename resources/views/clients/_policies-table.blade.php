<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>{{trans('messages.name')}}</th>
            <th>{{trans('messages.insurer')}}</th>
            <th>{{trans('messages.price')}}</th>
            <th>{{trans('messages.type')}}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($client->policies as $policy)
            <tr>
                <td>
                    {{$policy->name}}
                </td>
                <td>{{$policy->insurer->name}}</td>
                <td>{{$policy->priceFormatted}}</td>
                <td>{{$policy->policyType->name}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    <center><b>{{trans('messages.noData')}}</b></center>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
