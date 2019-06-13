<div class="third_about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<h2 class="title">{{$one['third_section']['collections']['title']['en']}}</h2>
				<p>{!!$one['third_section']['collections']['description']['en']!!}</p>
			</div>
			<div class="col-md-6 no_padding">
				<img src="{{ URL::to('/img/manjakos/' . $one['third_section']['collections']['image'])}}">
			</div>
		</div>
	</div>
</div>