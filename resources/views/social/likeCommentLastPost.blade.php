@php
	$likeComment = $comment->likes->where('type', 'comment')
@endphp
<h4 id="likeComment-{{ $comment->id }}" class="flex items-center">{{$likeComment->count()}}</h4>