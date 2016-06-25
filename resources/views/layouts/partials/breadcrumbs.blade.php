<div class="container">
    <ol class="breadcrumb">
        @section('breadcrumbs')
            <li class="active"><a href="{{Request::url()}}">{{Route::getCurrentRoute()->getName()}}</a></li>
        @show
    </ol>
</div>
