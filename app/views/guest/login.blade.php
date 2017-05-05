@section('content')
<div class="uk-text-center">
	<div class="uk-vertical-align-middle" style="width: 250px;">
	{{Form::open(array('url'=>'/authenticate','class'=>'uk-panel uk-panel-box uk-form'))}}
		<div class="uk-form-row">
			{{Form::text('email',null,array('class'=>'uk-width-l-l uk-form-large','placeholder'=>'Email'))}}
		</div>
		<div class="uk-form-row">
			{{Form::password('password',array('class'=>'uk-width-l-l uk-form-large','placeholder'=>'Password'))}}</div>
		<div class="uk-form-row">
			{{Form::submit('Login',array('class'=>'uk-width-l-l uk-button uk-button-primary uk-button-large'))}}
			</div>
			{{Form::close()}}
	</div>
</div>
@stop