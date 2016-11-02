@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(Session::has('sucess'))
	<div class="alert alert-success">
        <h3>{{ Session::get('sucess') }}</h3>
    </div>
@endif

@if(Session::has('faill'))
	<div class="alert alert-waring">
        <h3>{{ Session::get('faill') }}</h3>
    </div>
@endif
