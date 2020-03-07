@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                   @foreach($questions as $question)
						<div class="media">
							<div class="media-body">
							<h3 class="mt-0">{{ $question->title }}</h3>
								{{ Str::limit($question->body, 250)}}
								
							</div>
						</div>
				   @endforeach
				   <div class="justify-content-center">
				   {{$questions->links()}}
				   </div>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
