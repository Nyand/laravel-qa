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
						<div class="row">
							<div class="col-4">
								<div class="ml-auto">
								 @can('update', $answer)
			
							    <a href="{{route('questions.answers.edit',[$question->id, $answer->id])}}" class="btn btn-sm btn-outline-info">Edit</a>
								@endcan
								@can('delete', $answer)
								<form method="post" class="form-delete" action="{{route('questions.answers.destroy',[$question->id, $answer->id])}}">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure')">Delete</button>
								</form>
								 @endcan
								
							</div>
							</div>
							<div class="col-4"></div>
							<div class="col-4">
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
								
						</div>
						
						<hr>
						</div>
					</div>
					
				@endforeach
			</div>
		</div>
	</div>