<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    @foreach ($users as $user)
        {{ $user->title }}
        <br>
    @endforeach
</div>

{{ $users->links() }}
</body>
</html>