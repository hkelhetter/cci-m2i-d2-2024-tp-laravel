{{$user->name}}
{{$user->email}}
@if($isUser)
    <a href="{{route('user.delete',$user->id)}}">supprimer utilisateur</a>
@endif
