<form method="POST" action="{{route('user.store')}}">
    @csrf
    <input name="name" value="{{old('name')}}">
    <input name="email" type="email" value="{{old('email')}}">
    <input name="password" type="password">
    <input type="submit" value="créer">
</form>
