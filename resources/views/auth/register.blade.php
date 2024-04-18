<form method="POST" action="{{ route('register.store') }}">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="Submit Data">
</form>
