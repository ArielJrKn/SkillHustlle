@php
	$likeLastPost = $lastPost->likes->where('type', 'post')
@endphp
<h2 id="like-count-{{ $lastPost->id }}">{{ $likeLastPost->count() }} like(s)</h2>
