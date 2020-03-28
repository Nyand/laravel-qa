<span class="text-muted">{{$label . " " . $model->created_date}}</span>
<div class="media">
	<a href="{{$model->user->url}}" class="pr-2">
		<img src="{{$model->user->avator}}">
	</a>
	<div class="media-body">
		<a href="{{$model->user->url}}">{{$model->user->name}}</a>
	</div>
</div> 