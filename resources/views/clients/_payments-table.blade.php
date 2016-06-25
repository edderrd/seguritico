<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>{{trans('messages.policy')}}</th>
            <th>{{trans('messages.date')}}</th>
            <th>{{trans('messages.amount')}}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($client->payments as $payment)
            <tr>
                <td>{{$payment->policy->name}}</td>
                <td>{{$payment->paid_at->format('d-m-Y h:i A')}}</td>
                <td>{{$payment->amountFormatted}}</td>
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
