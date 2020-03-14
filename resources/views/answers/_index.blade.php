<div class='row mt-4'>
		<div class='col-md-12'>
			<div class='card'>
				<div class='card-title ml-4 mt-4 mb-0'>
					<h2>{{$answersCount." ".Str::plural('Answer', $answersCount)}}</h2>
				</div>
				<hr>
				@include('layouts._messages')
				
				@foreach($answers as $answer)
					<div class='media'>
					
					<div class="d-fex flex-column vote-controls">
						<a title="This answer is useful" class="vote-up">
							<i class="fas fa-caret-up fa-3x"></i>
						</a>
						<span class="vote-count">1230</span>
						<a title="This answer is not useful" class="vote-down off">
							<i class="fas fa-caret-down fa-3x"></i>
						</a>
						<a title="Mark this answer as best answer"
						class="vote-accepted mt-2"><i class="fas fa-check fa-2x"></i>

						</a>
						
					</div>
						<div class='media-body m-4'>
						{!! $answer->body_html !!}
						<div class="float-right">
							<span class="text-muted">Answered {{$answer->created_date}}</span>
							<div class="media">
								<a href="{{$answer->user->url}}" class="pr-2">
								<img src="{{$answer->user->avator}}">
								</a>
								<div class="media-body">
									<a href="{{$answer->user->url}}">{{$answer->user->name}}</a>
								</div>
							</div>
						</div>
						<hr>
						</div>
					</div>
					
				@endforeach
			</div>
		</div>
	</div>