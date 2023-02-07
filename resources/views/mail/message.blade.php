<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hr>
    <h3>Reset Password</h3>
    <hr>
    <p>Hello {{ $username }},</p>

    <p>You are requested to reset your password. So, you have to enter the following code to reset your password.</p>
    <p>Please enter the code as soon as possible.</p>

    <p>Your verification code:</p>

    <h2>{{ $otp }}</h2>


    <p>Facebook Team.</p>
</body>

</html>