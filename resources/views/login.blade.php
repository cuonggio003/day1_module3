<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Dang nhap</h1>
    <form action="/login" method="POST">
        @csrf
        <p>
            <input type="text" name="username" placeholder="Ten dang nhap">
        </p>
        <p> 
            <input type="password" name="password" placeholder="mat khau">
        </p>
        <p> 
            <button type="submit">Dang nhap</button>   
</form> 
</body>             
</html>

