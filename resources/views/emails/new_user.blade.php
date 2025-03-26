<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Our Platform</title>
</head>

<body>
    <h2>Welcome, {{ $user->name }}!</h2>
    <p>Your account has been created successfully.</p>
    <p><strong>Website URL:</strong> <a href="{{ $websiteUrl }}">{{ $websiteUrl }}</a></p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>
    <p>Please log in and change your password as soon as possible.</p>
    <p>Thank you!</p>
</body>

</html>