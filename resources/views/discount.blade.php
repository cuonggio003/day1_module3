<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<style type="text/css">
    .login {
        height: 400px;
        width: 600px;
        margin: 0;
        padding: 10px;
        border: 3px red solid;
        border-radius: 15px;
    }
    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<form method="post">
    <p>@csrf</p>
    <div class="login" style="margin-left: 500px">
        <h2 style="color: green ; text-align: center" >Máy tính chiết khấu sản phẩm </h2>
        <p style="color: green"><b>Mô tả Sản phẩm :</b><input type="text" name="Product Description"
                                                                   size="25" style="margin-left: 10px"/></p>
        <p style="color: green"><b>Bảng giá: </b><input type="text" name="Price" size="25" style="margin-left: 105px"></p>
        <p style="color: green"><b>Phần trăm chiết khấu: </b><input type="text" name="Discount Percent"
                                                                size="25" style="margin-left: 30px"></p>
        <input type="submit" value="ấn đi ơ hay">
    </div>
</form>
</body>
</html>
