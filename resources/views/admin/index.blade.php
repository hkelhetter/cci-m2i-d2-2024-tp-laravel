<h1> Admin</h1>
@if(@session('isAdmin'))

    @table({{$users}})

@else
    <form action="{{route('admin.login')}}" method="post">
        @csrf
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="go admin">
    </form>
@endif
