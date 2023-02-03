@extends('layouts.main')

@section('container')
<div class="row justify-content-md-center">
	<div class="mt-5 card text-bg-light col-md-8 justify-content-center">
		<div class="card-header"></div>
		<div class="card-body">
			<center><img src="{{ ('img/myResume.jpg') }}" style="max-width: 100%;"></center>
		</div>
		<div class="card-footer">
			<p class="font-bebas"><a href="/downloadFile"><i class="bi bi-download"></i> Download my resume</a></p>
		</div>
	</div>
</div>

@endsection