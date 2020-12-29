<h2>您有新的评论</h2>

<h3>{{ $comment->user->name }} 对您的博客 [{{ $comment->blog->title }}] 进行了评论:</h3>

<div>
    {{ $comment->content }}
</div>
