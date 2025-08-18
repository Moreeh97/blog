<!-- app/views/posts/index.php -->
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>المنشورات</title>
</head>
<body>
    <h1>📄 قائمة المنشورات</h1>
    <ul>
    <?php
        // Assuming $posts is an array of posts passed to this view
        foreach ($posts as $post) {
            echo "<li>" . htmlspecialchars($post['title']) . "</li>";
        }
    ?>
    </ul>
</body>
</html>
