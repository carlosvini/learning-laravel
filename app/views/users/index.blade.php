<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel PHP Framework</title>

</head>
<body>
  <div class="welcome">
    <h1>All Users</h1>

    @forelse ($users as $user)
      <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>

    @empty 
      NO USERS
    @endforelse

  </div>
</body>
</html>
