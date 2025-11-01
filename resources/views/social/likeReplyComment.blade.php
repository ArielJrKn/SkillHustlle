@php
	$likeReplyComment = $replyComment->likes->where('type', 'replyComment')
@endphp
<h4 id="likeReplyComment-{{ $replyComment->id }}" class="flex items-center">{{$likeReplyComment->count()}}</h4>