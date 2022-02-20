<h2>{{$forum->name}}</h2>
<span>{{$forum->content}}</span>

<form action="{{ route('destroy', ['forum' => $forum->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Удалить</button>
</form>
{{--{{ $errors }}--}}
<a href="{{ route("edit", ['forum' => $forum->id]) }}">Редактировать</a>


<form action="{{route('create_comment', ["forum" => $forum->id])}}" method="POST">
    @csrf
<div><label class="title_ger">Добавить коммнтарий</label></div>
    <input type="text" name="user_name">
    <input type="hidden" name="forum_id" value="{{$forum->id}}">
<textarea type="text" name="comment"></textarea>
    <button type="submit" class="btn btn-danger">Добавить</button>
</form>
@foreach($forum->comments as $comment)
    <div>{{$comment->name}}</div>
<div>{{$comment->comment}}</div>
@endforeach
