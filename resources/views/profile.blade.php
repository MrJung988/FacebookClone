<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pdata->fname}} | Facebook</title>
    <script src="https://kit.fontawesome.com/bc607b3e78.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/profile.css') }}" rel="stylesheet">
</head>
<body>
    {{-- HEADER BEGINS --}}
    <div class="header">
        <div class="header-left">
            @include('fblogo')                
            <div class="header-input">
                <span class="material-icons"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" placeholder="Search Facebook">
            </div>
        </div>
        <div class="header-middle">
            <div class="header-option">
                <a href="{{route('facebook')}}"><span class="material-icons" style="color: black"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 g28tu32o" fill="currentColor" height="35" width="35"><path d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"></path></svg></span></a>
            </div>
            <div class="header-option">
                <span class="material-icons"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path></svg></span>
            </div>
            <div class="header-option">
                <span class="material-icons"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M17.5 23.75 21.75 23.75C22.164 23.75 22.5 23.414 22.5 23L22.5 14 22.531 14C22.364 13.917 22.206 13.815 22.061 13.694L21.66 13.359C21.567 13.283 21.433 13.283 21.34 13.36L21.176 13.497C20.591 13.983 19.855 14.25 19.095 14.25L18.869 14.25C18.114 14.25 17.382 13.987 16.8 13.506L16.616 13.354C16.523 13.278 16.39 13.278 16.298 13.354L16.113 13.507C15.53 13.987 14.798 14.25 14.044 14.25L13.907 14.25C13.162 14.25 12.439 13.994 11.861 13.525L11.645 13.35C11.552 13.275 11.419 13.276 11.328 13.352L11.155 13.497C10.57 13.984 9.834 14.25 9.074 14.25L8.896 14.25C8.143 14.25 7.414 13.989 6.832 13.511L6.638 13.351C6.545 13.275 6.413 13.275 6.32 13.351L5.849 13.739C5.726 13.84 5.592 13.928 5.452 14L5.5 14 5.5 23C5.5 23.414 5.836 23.75 6.25 23.75L10.5 23.75 10.5 17.5C10.5 16.81 11.06 16.25 11.75 16.25L16.25 16.25C16.94 16.25 17.5 16.81 17.5 17.5L17.5 23.75ZM3.673 8.75 24.327 8.75C24.3 8.66 24.271 8.571 24.238 8.483L23.087 5.355C22.823 4.688 22.178 4.25 21.461 4.25L6.54 4.25C5.822 4.25 5.177 4.688 4.919 5.338L3.762 8.483C3.729 8.571 3.7 8.66 3.673 8.75ZM24.5 10.25 3.5 10.25 3.5 12C3.5 12.414 3.836 12.75 4.25 12.75L4.421 12.75C4.595 12.75 4.763 12.69 4.897 12.58L5.368 12.193C6.013 11.662 6.945 11.662 7.59 12.193L7.784 12.352C8.097 12.609 8.49 12.75 8.896 12.75L9.074 12.75C9.483 12.75 9.88 12.607 10.194 12.345L10.368 12.2C11.01 11.665 11.941 11.659 12.589 12.185L12.805 12.359C13.117 12.612 13.506 12.75 13.907 12.75L14.044 12.75C14.45 12.75 14.844 12.608 15.158 12.35L15.343 12.197C15.989 11.663 16.924 11.663 17.571 12.197L17.755 12.35C18.068 12.608 18.462 12.75 18.869 12.75L19.095 12.75C19.504 12.75 19.901 12.606 20.216 12.344L20.38 12.208C21.028 11.666 21.972 11.666 22.62 12.207L23.022 12.542C23.183 12.676 23.387 12.75 23.598 12.75 24.097 12.75 24.5 12.347 24.5 11.85L24.5 10.25ZM24 14.217 24 23C24 24.243 22.993 25.25 21.75 25.25L6.25 25.25C5.007 25.25 4 24.243 4 23L4 14.236C2.875 14.112 2 13.158 2 12L2 9.951C2 9.272 2.12 8.6 2.354 7.964L3.518 4.802C4.01 3.563 5.207 2.75 6.54 2.75L21.461 2.75C22.793 2.75 23.99 3.563 24.488 4.819L25.646 7.964C25.88 8.6 26 9.272 26 9.951L26 11.85C26 13.039 25.135 14.026 24 14.217ZM16 23.75 16 17.75 12 17.75 12 23.75 16 23.75Z"></path></svg></span>
            </div>
            <div class="header-option">
                <span class="material-icons"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="35" width="35"><path d="M23.5 9.5H10.25a.75.75 0 00-.75.75v7c0 .414.336.75.75.75H17v5.5H4.5v-19h19v5zm0 14h-5v-6.25a.75.75 0 00-.75-.75H11V11h12.5v12.5zm1.5.25V4.25C25 3.561 24.439 3 23.75 3H4.25C3.561 3 3 3.561 3 4.25v19.5c0 .689.561 1.25 1.25 1.25h19.5c.689 0 1.25-.561 1.25-1.25z"></path></svg></span>
            </div>            
        </div>
        <div class="header-right">
            
            <div class="header-info">
                <a href="profile" style="display: flex; text-decoration: none; color:black;"><img class="user-profile" src="/images/uploads/profile-picture/{{$pdata->profilePic}}" alt="">
                <h4 class="profile-name">{{$pdata->fname}}</h4></a>
            </div>
            
            <div class="header-icons">
                <span class="material-icons"><svg fill="currentColor" viewBox="0 0 44 44" width="1.5em" height="1.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 q66pz984 jnigpg78 odw8uiq3"><circle cx="7" cy="7" r="6"></circle><circle cx="22" cy="7" r="6"></circle><circle cx="37" cy="7" r="6"></circle><circle cx="7" cy="22" r="6"></circle><circle cx="22" cy="22" r="6"></circle><circle cx="37" cy="22" r="6"></circle><circle cx="7" cy="37" r="6"></circle><circle cx="22" cy="37" r="6"></circle><circle cx="37" cy="37" r="6"></circle></svg></span>
            </div>
            <div class="header-icons">
                <span class="material-icons"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c" fill="currentColor" height="25" width="25"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg></span>
            </div>
            <div class="header-icons">
                <span class="material-icons"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c" fill="currentColor" height="25" width="25"><path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"></path></svg></span>
            </div>
            <div class="header-icons">
                <span class="material-icons" data-bs-toggle="modal" data-bs-target="#logoutButton" ><svg fill="currentColor" viewBox="0 0 20 20" width="1.5em" height="1.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 rs22bh7c jnigpg78 odw8uiq3"><path d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z"></path></svg></span>
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons"><i class="fa-solid fa-caret-down"></i></span></button> --}}
            </div>  
        </div>
    </div>
    {{-- HEADER ENDS --}}

    {{-- Body Begins --}}
    <div class="container">
        <div class="upperpart">
            <div class="cv-profile">
                <img data-imgperflogname="profileCoverPhoto" alt="Cover Photo" class="i09qtzwb rq0escxv n7fi1qx3 datstx6m pmk7jnqg j9ispegn kr520xx4 k4urcfbm" referrerpolicy="origin-when-cross-origin" src="images/uploads/cover-photo/{{$pdata->coverPic}}">
            </div>
            <div class="edit-pp-button">
                <div class="edit-pp-camera">
                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/-rFArur6XCS.png&quot;); background-position: 0px -856px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block; margin-bottom: -3px;"></i>
                </div>
                <div class="edit-pp-text">
                    <span>Edit cover photo</span>
                </div>
            </div>
        </div>
        <div class="lowerpart">

            <div class="profile-1">
                <img src="/images/uploads/profile-picture/{{$pdata->profilePic}}" alt="ProfilePic">   {{--user-profile--}}
                <div class="camera-icon">
                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" data-bs-toggle="modal" data-bs-target="#ppupdate" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/0Y-lDUkZv4T.png?_nc_eui2=AeGBWnstU8tcrGN2vRgqfezGWw5hm4Pt1W1bDmGbg-3VbVeozteS_gj76CPeJsyObD6rSmXX9TAFfFnlsbAVX_Vm&quot;); background-position: 0px -364px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                </div>
            </div>
            <div class="col-md-4 profile-2">
                <div class="cv-name">
                    <h3>{{$pdata->fname}} {{$pdata->lname}}</h3>
                </div>
                <div class="cv-frn">
                    <p>410 friends</p>
                </div>
                <div class="friends">
                    <div class="frn frn1">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/277814387_502216224938013_7301033993856422464_n.jpg?_nc_cat=110&ccb=1-6&_nc_sid=0debeb&_nc_ohc=wburyuOnKF0AX9cVSfX&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT9Xtv_AtDJYJBqXT1jJTvqhACNSxToAE2mLQMJmCYPsrQ&oe=627DE1D2" alt="">
                    </div>
                    <div class="frn frn2">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/271704166_449431480216488_914421274574774811_n.jpg?_nc_cat=110&ccb=1-6&_nc_sid=0debeb&_nc_ohc=Lkg3WBs6secAX9xLnti&tn=4W4xWJq-ZrrfX8MM&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT9aNVAzmotvoVhANQFIZHFoQKFcZbIvRZY9-vhM9Vn7fw&oe=627E827E" alt="">
                    </div>
                    <div class="frn frn3">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/271705731_449431443549825_6461733420240259758_n.jpg?_nc_cat=101&ccb=1-6&_nc_sid=0debeb&_nc_ohc=fa5z27g98bAAX9CYEUH&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_F3iO2SqGnVTpK5dJ3SxS1mVEH_UQMKQreCscNXT3a9w&oe=627E890E" alt="">
                    </div>
                    <div class="frn frn4">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/270458515_444323127393990_7651172922469900597_n.jpg?_nc_cat=108&ccb=1-6&_nc_sid=0debeb&_nc_ohc=4WO80yjtbPwAX-PnJay&_nc_oc=AQkEkIyhFTtUMUf3uWc0iLW6WU33KGVKd5QBL8KARvGEg50UO-VCl5gZ_RQQ9OdLZI8&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_4dK_4ge7VDhAa1o4t9eT95a0sSl5_tvyExSRW5OJDog&oe=627ECC0E" alt="">
                    </div>
                    <div class="frn frn5">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/263853056_435259251633711_1894524251502781093_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=174925&_nc_ohc=P-2OlRp8NmUAX96zIN1&tn=4W4xWJq-ZrrfX8MM&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT88yUDO212H_yHqXw_FEVfYW0NlWMHaDgyiJv2srRwj3A&oe=627E569B" alt="">
                    </div>
                    <div class="frn frn6">
                        <img src="https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/267468612_432156285277341_3596418653864011387_n.jpg?_nc_cat=109&ccb=1-6&_nc_sid=0debeb&_nc_ohc=FmCFhX4tT4MAX8wN_JE&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_NrxoN0y0q_PyTUPNTpaeDtDvPMtej5Hbd3jHhKtVMSQ&oe=627F4539" alt="">
                    </div>
                </div>
            </div>
            <div class="profile-3">
                <div class="profile3-div">
                    <div class="plus-circle">
                        <i class="fa-solid fa-circle-plus"></i>
                    </div>
                    <div class="add-story">
                        <span>Add to story</sp>
                    </div>
                </div>
            </div>
            <div class="profile-4">
                <div class="profile4-div">
                    <div class="pen">
                        <i class="fa-solid fa-pen"></i>
                    </div>
                    <div type="button" class="edit-profile" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span>Edit profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="hrline">
    
    {{-- Body Ends --}}

    {{-- Profile Picture Update Model Begins--}}
    <div class="modal fade" id="ppupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 27%;">Update profile picture</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('profileUpdate')}}" method="POST" enctype="multipart/form-data"> 
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <div class="upload-pp">
                        <label class="" for="uploadPP">Select Image</label>
                        <input name="profilePic" type="file" id="uploadPP" style="display: none;">
                    </div>                  
                    <div class="preview-pp">
                        <div class="preview-image" id="previewPP" style="border-radius: 50%; overflow: hidden;">
                            
                        </div>
                        {{-- <img src="/images/uploads/default.jpg" alt=""> --}}
                    </div>
                    <div class="update-pp">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    {{-- Profile Picture Update Model Ends--}}



    {{-- Logout Button Modal Begins--}}
    {{-- Log out Model Begins --}}
<div class="modal fade logout" id="logoutButton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="upper-post logoutbar">
                    <img class="user-profile" src="/images/uploads/profile-picture/{{$pdata->profilePic}}" alt="">
                    <div class="logbar">
                        <h5>{{$pdata->fname}} {{$pdata->lname}}</h5>
                        <p style="margin: 0;">See your profile</p>
                    </div>
                </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
        <div class="modal-body">
            
            <div class="logoutbar">
                <div class="logbar">
                    <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/QnBF2xVFFiX.png?_nc_eui2=AeENxmeANpWqYx99gZNhKsd8_qJ7DKUFU4b-onsMpQVThn5-KBKBVuPWgQVxYkjhhYFXADnhzcv0E795KZnL-wwb&quot;); background-position: 0px -25px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                </div>
                <p>Give Feedback</p>
            </div>
            <div class="logoutbar">                        
                <div class="logbar">
                    <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/-56R6vKcX9g.png?_nc_eui2=AeHl21Otv6_aY9BU1NKCD63bM5jhPKEU0WIzmOE8oRTRYkX6elHf2eDxxRVn0jXAjDxnL7FEQDq7L_x5BOGqNiEK&quot;); background-position: -42px -228px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                </div>
                <p>Setting & Privacy</p>
            </div>
            <div class="logoutbar">
                <div class="logbar">
                    <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/5hWWM5G_3AH.png?_nc_eui2=AeEkK3dUq2GGRn7VDMgRvKzJPcZ9rW6hj_U9xn2tbqGP9Zi9VW6hT1MY1o6erXrUi9bU5LmtNMfIQTPvlLl5FWDP&quot;); background-position: 0px -42px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                </div>
                <p>Help & Support</p>
            </div>
            <div class="logoutbar">
                <div class="logbar">
                    <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/kR05M3TZffj.png?_nc_eui2=AeEHUdurRN1fqR_nTDhhuGf9h04TZyNcGjmHThNnI1waOU_lruyPWQOc9H5a8u61ryJwsuatQiDgRD7JTMrubc0H&quot;); background-position: 0px -573px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                </div>
                <p>Display & Accessiblity</p>
            </div>
            <div class="logoutbar">
                <div class="logbar">
                    <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/QnBF2xVFFiX.png?_nc_eui2=AeENxmeANpWqYx99gZNhKsd8_qJ7DKUFU4b-onsMpQVThn5-KBKBVuPWgQVxYkjhhYFXADnhzcv0E795KZnL-wwb&quot;); background-position: 0px -46px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                </div>
                <p><a href="logout">Logout</a></p>
            </div>
            <p style="font-size: small;">Privacy  · Terms  · Advertising  · Ad Choices   · Cookies  ·   · facebook © 2022</p>
        </div>
      </div>
    </div>
  </div>
{{-- Log out Model Ends --}}
    {{-- Logout Button Modal Ends--}}
 

    {{-- Edit Profile Modal begins  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:gray; border-radius:50%;"></button>
            </div>

            <div class="modal-body">

                <div class="modal-profile">
                    <div class="profile-header">
                        <h5>Profie Picture</h5>
                        <button class="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Edit</button>
                    </div>                    
                    <div>
                        <img src="/images/uploads/{{$pdata->profilePic}}" alt="">
                    </div>
                </div>
                <br>
                <div class="modal-cover">
                    <div class="cover-header">
                        <h5>Cover Photo</h5>
                        <a href="#">Edit</a>
                    </div>
                    <div>
                        <img src="/images/uploads/{{$pdata->coverPic}}" alt="">
                    </div>
                </div>
                <br>
                <div class="bio">
                    <div class="bio-header">
                        <h5>Bio</h5>
                        <a href="#">Add</a>
                    </div>
                    <span>Describe yourself...</span>
                </div>
                <br>
                <div class="intro">
                    <div class="">
                        <h5>Feature</h5>
                        <i data-visualcompletion="css-img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/gL1slwup025.png?_nc_eui2=AeHn2wWHkencWJ6FPODksIKca6NX3R4FPQBro1fdHgU9ACpDhe4nSWhMqh7nc3DRai1ergQGeefnNTMtayfG-k-W&quot;); background-position: 0px 0px; background-size: auto; width: 334px; height: 192px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                    <span class="">Feature your favorite photos and stories here for all your friends to see.</span> 
                </div>  

                <div class="modal-foot">
                    <button>Edit your about info</button>
                </div>

            </div>
            
          </div>
        </div>
      </div>


      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update profile picture</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal2-body">
              <div class="icons part-first">
                  <div class="icon">
                    <i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/0Y-lDUkZv4T.png?_nc_eui2=AeGBWnstU8tcrGN2vRgqfezGWw5hm4Pt1W1bDmGbg-3VbVeozteS_gj76CPeJsyObD6rSmXX9TAFfFnlsbAVX_Vm&quot;); background-position: 0px -1094px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block; color:blue"></i>
                    <label for="uploadFile" style="cursor: pointer;">Upload Photo</label>
                  </div>
                  <div class="font">
                      <input type="file" class="inputFile" id="uploadFile" style="display: none"></input>
                  </div>
              </div>
              <div class="icons part-second">
                <div class="icon">
                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/yjMM_zV3tZ1.png?_nc_eui2=AeHk88EtBIg5F6DRBXanCb1waWxC265YI2RpbELbrlgjZEQyLMTrhv8je1__WJJsSsZXDz1DjXOcK-dpoV_ZE9i4&quot;); background-position: 0px -92px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
                </div>
                <div class="font">
                    <span>Add Frame</span>
                </div>
              </div>
              <div class="icons part-third">
                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/0Y-lDUkZv4T.png?_nc_eui2=AeGBWnstU8tcrGN2vRgqfezGWw5hm4Pt1W1bDmGbg-3VbVeozteS_gj76CPeJsyObD6rSmXX9TAFfFnlsbAVX_Vm&quot;); background-position: 0px -1060px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
              </div>
            </div>
              
                <h5>Suggested Photos</h5>
                <div class="photos-section">
                    <div class="pic">

                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                </div>
                <div class="photos-section">
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                    <div class="pic">
                        
                    </div>
                </div>
            <div class="modal2-buttom">
                <button>See more</button>
            </div>
            
          </div>
        </div>
      </div>
    {{-- Edit Profile Modal ends --}}



    {{-- Preview image js begins--}}
    <script type="text/javascript">
        
        function previewImages() {
        var preview = document.querySelector('#previewPP');

        if (this.files) {
        [].forEach.call(this.files, readAndPreview);
        }

        function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            } // else...
            
            var reader = new FileReader();
            
            reader.addEventListener("load", function() {
                var image = new Image();
                image.height = 100;
                image.title  = file.name;
                image.src    = this.result;
                preview.appendChild(image);
            });
            
            reader.readAsDataURL(file);
        }
        }
        document.querySelector('#uploadPP').addEventListener("change", previewImages);


    </script>
    {{-- Preview image js end--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>