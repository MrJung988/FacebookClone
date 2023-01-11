<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password | Can't log in | Facebook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background: #e9ebee; margin-top: 10%;">
    <div class="container">
        <div class="modal-dialog">
            <form action="">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reset your password</h5>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <label for="">Email</label><br>
                            <input type="text" name="email" class="form-control" placeholder="Enter email address">
                            <span>@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="col-12 mt-4">
                            <label for="">New Password</label><br>
                            <input type="text" name="new_password" class="form-control" placeholder="Enter new password">
                            <span>@error('new_password') {{ $message }} @enderror</span>
                        </div>
                        <div class="col-12 mt-4">
                            <label for="">Confirm Password</label><br>
                            <input type="text" name="confirm_password" class="form-control" placeholder="Enter confirm password">
                            <span>@error('confirm_password') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w- m-3">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>