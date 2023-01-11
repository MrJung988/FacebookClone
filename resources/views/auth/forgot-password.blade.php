<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password | Can't log in | Facebook</title>
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background: #e9ebee;">
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Find your account</h5>
                </div>
                <form action="{{ route('searchId') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div id="popupMessage">
                            @if (session()->has('success'))
                            <div class="small alert alert-success">{{session('success')}}</div>
                            @endif
                            @if (session()->has('fail'))
                            <div class="small alert alert-danger">{{session('fail')}}</div>
                            @endif
                        </div>
                        <p>Please enter your email or mobile number to search for your account.</p>
                        <input type="text" class="form-control" name="mobOrMail" placeholder="Email or mobile number">
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('authCheck') }}"><button type="button" class="btn btn-secondary">Cancel</button></a>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>