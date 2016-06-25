@if (Session::has('error') || Session::has('warning') || Session::has('info'))
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                @if (Session::has('info'))
                    <div class="alert fade in alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Info:</strong> {{Session::get('info')}}
                    </div>
                @endif

                @if (Session::has('warning'))
                    <div class="alert fade in alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning:</strong> {{Session::get('warning')}}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert fade in alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Error:</strong> {{Session::get('error')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
