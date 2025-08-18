<!DOCTYPE html>
<html>
<head>
<title>My MVC App</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
<nav class="bg-blue-600 text-white p-4">
<a href="/" class="mr-4">Home</a>
<a href="/login" class="mr-4">Login</a>
<a href="/register" class="mr-4">Register</a>
<a href="/upload" class="mr-4">Upload</a>
</nav>
<div class="container mx-auto p-6">
<?= $content ?>
</div>
</body>
</html>