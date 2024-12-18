<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج POST</title>
</head>
<body>
    <h2>يرجى إدخال البريد الإلكتروني:</h2>
    <form action="post_response.php" method="POST">
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="إرسال">
    </form>
</body>
</html>
