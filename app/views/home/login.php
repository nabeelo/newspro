<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>

<form action="postlogin" method="POST">

            <input type="text" placeholder="username" name="email">
            <input type="password" placeholder="password" name="password">
            <input type="submit" placeholder="OK">

    </form>

</body>
</html>