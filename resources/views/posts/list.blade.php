<table>
<tbody>
	@foreach($posts as $post)
	<tr>
		<td><img src="{{$post->user->profile->avatar}}"></td>
		<td>
			<h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
			<p>{{$post->description}}</p>
			<p class="meta">{{$post->user->name}}, 最后更新于 {{$post->updated_at->toDateTimeString()}}</p>
		</td>
	</tr>
	@endforeach
</tbody>
</table>