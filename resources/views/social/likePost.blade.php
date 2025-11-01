<h2 id="like-count-{{ $post->id }}">{{ $post->likes()->where('type', 'post')->count() }} like(s)</h2>
