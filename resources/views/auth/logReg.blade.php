<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook-log in or sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Moo+Lah+Lah&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bc607b3e78.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/media-queries.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/registration.css') }}" rel="stylesheet">
    
</head>
<body>
    <main class="container">
        {{-- TITLE --}}
        <div class="title-container">
            <span class="title-logo"><h1 style="margin-bottom:1.6rem; font-size:6rem">facebook</h1></span>
            {{-- <img src="images/logo.svg" class="title-logo"> --}}
            <p class="title-paragraph">Connect with friends and the world around you on Facebook.</p>
        </div>
        
        {{-- Login FORM --}}
        <div class="form-container">
            <form action="{{route('login-user')}}" class="form" method="POST">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>                    
                @endif
                @if (session()->has('fail'))
                    <div class="alert alert-danger">{{session('fail')}}</div>                    
                @endif
                @csrf
                <div class="input-container">
                    <input type="text" placeholder="Email or phone number" class="form-input form-input--email" name="mobOrMail" value="{{old('mobOrMail')}}">
                </div>
                <span class="text-danger">@error('mobOrMail') {{$message}} @enderror</span>

                <div class="input-container input-container--password">
                    <input type="password" placeholder="Password" class="form-input form-input--password"  name="password">
                    <div class="password-eye-container hidden">
                        <img src="images/eye-off.png" class="password-eye eye-off">
                        <img src="images/eye.png" class="password-eye eye">
                    </div> 
                </div>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                <button class="form-log-in-btn">Log In</button>
                <a href="#" class="form-forgot-password">Forgot Password?</a>

                <div class="divider"></div>
                {{-- <a href="#" class="form-create-account-btn" id="myBtn" >Create New Account</a> --}}
                {{-- <button type="button" class="btn btn-primary form-create-account-btn" data-bs-toggle="modal" data-bs-target=".exampleModal">Create New Account</button> --}}
                <button type="button" class="btn form-create-account-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create New Account</button>
                
                
                
                
            </form>
            <p class="create-page-paragraph">
                <a href="#" class="create-page-link">Create a Page</a> for a celebrity, brand or business.
            </p>
        </div>
        {{-- Login Form --}}


        {{-- SignUp Modal Begins --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">  
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>    
                    <form action="{{route('register-user')}}" method="POST">
                        @csrf
                        <div class="upperpart">
                            <h1 class="signup-head">Sign Up</h1>
                            <p class="signup-para">It's quick and easy.</p>
                        </div>                                    
                        <div class="divider-signup"></div>
                        <div class="lowerpart">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="fname" id="fname" placeholder="First name" class="form-control form-input-signup" value="{{old('fname')}}">
                                    <span class="text-danger error small mt-0">@error('fname') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="lname" id="lname" placeholder="Last name" class="form-control form-input-signup" value="{{old('lname')}}">
                                    <span class="text-danger">@error('lname') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" name="mobOrMail" id="mobile" class="form-control form-input-signup" placeholder="Mobile number or email" value="{{old('mobOrMail')}}">
                                    <span class="text-danger">@error('mobOrMail') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-12">
                                    <input type="password" name="password" id="password" class="form-control form-input-signup" placeholder="New password">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>  
                           
                  
                                
                                    <p class="contents">Birthday <i class="fa-solid fa-circle-question question-mark" title="Click for the more information"></i></p>
                                    <div class="col-md-6 col-12">
                                        <select name="month" class="form-control form-input-date" id="month" value="month">
                                                @php
                                                    $date= ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'];
                                                @endphp
                                                    <option value="">Please select Month</option>
                                                @for ($i = 0; $i < count($date); $i++)
                                                    <option value="{{$date[$i]}}">{{$date[$i]}}</option>                                                                
                                                @endfor                                           
                                            </select>
                                            <span class="text-danger">@error('month') {{$message}} @enderror</span>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <select class="form-control form-input-date" name="day" id="day">
                                            <option value="">Day</option>
                                            @for ($i = 1; $i < 32; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        <span class="text-danger">@error('day') {{$message}} @enderror</span>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <select  class="form-control form-input-date" name="year" id="year" value="year">
                                            <option value="">Year</option>
                                            @for ($i = 2022; $i > 1950; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        <span class="text-danger">@error('year') {{$message}} @enderror</span>
                                    </div>
                                    
                                    <p class="contents">Gender <i class="fa-solid fa-circle-question question-mark" title="Click for the more information"></i></p>
                                    <div class=" radio-div form-input-gender">
                                        <label for="female" class="gender-text">Female</label>
                                        <input type="radio" id="female" name="gender" class="radio" value="female">
                                    </div>
                                    <div class=" radio-div form-input-gender">
                                        <label for="male" class="gender-text">Male</label>
                                        <input type="radio" id="male" name="gender" class="radio" value="male">
                                    </div>
                                    <div class=" radio-div form-input-gender">
                                        <label for="custom" class="gender-text">Other</label>
                                        <input type="radio" id="custom" name="gender" class="radio" value="other">
                                    </div>
                                    <span class="text-danger">@error('gender') {{$message}} @enderror</span> 
                                </div>
                                <br>
                                <p class="signup-policy">By clicking Sign Up, you agree to our <span class="policy-span">Terms, Data Policy</span> and <span class="policy-span">Cookies Policy</span>. You may receive SMS Notifications from us and can opt out any time.</p>

                                <button class="signup-button">Sign Up</button>
                        </div>
                    </form>



                </div>
                
              </div>
            </div>
        </div>
        {{-- The SignUp Modal Ends --}}
    </main>
      

    <footer>
        <div class="footer">
                samir &copy 2022.
        </div>
    </footer>

    

    <script type="text/javascript" src="{{url::asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>