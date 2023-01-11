<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password | Can't log in | Facebook</title>
    <link rel="stylesheet" href="{{ asset('css/otp-send.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<a href="/forgot-password">Forgot password page</a>

<body style="background: #e9ebee;">
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset your password</h5>
                </div>
                <div class="modal-body d-flex">
                    <div class="left">
                        <p class="mb-n1">How do you want to get the code to reset your password?</p>
                        <div class="d-flex emailInfo">
                            <input type="radio" checked="1">
                            <div class="text">
                                <p class="m-0">Send code via email</p>
                                <p class="m-0 text-secondary small">{{ $user->mobOrMail }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="right">
                        <img src="/images/uploads/profile-picture/{{$user->profilePic}}" alt="">
                        <p class="mb-0 mt-3">{{ $user->mobOrMail }}</p>
                        <p class="small text-secondary">{{ $user->fname }} {{ $user->lname }}</p>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <div class="leftside">
                        <a href="">No longer have access to these?</a>
                    </div>
                    <div class="rightside">
                        <button type="button" class="btn btn-secondary">Not you?</button>
                        <button type="button" class="btn btn-primary">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>