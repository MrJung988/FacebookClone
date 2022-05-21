<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook</title>
    <script src="https://kit.fontawesome.com/bc607b3e78.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">

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
                <div class="header-option" style="color: blue; border-bottom: 3px solid blue; ">
                    <span class="material-icons"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 g28tu32o" fill="currentColor" height="35" width="35"><path d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"></path></svg></span>
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
                    <a href="profile" style="display: flex; text-decoration: none; color:black;"><img class="user-profile" src="/images/uploads/profile-picture/{{auth()->user()->profilePic}}" alt="">
                    <h4 class="profile-name">{{auth()->user()->fname}}</h4></a>
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
        

        {{-- MAIN BODY BEGINS --}}
        <div class="main-body">
            {{-- SIDEBAR BEGINS --}}
            <div class="sidebar">
                <div class="sidebarRow">
                    <a href="profile" style="text-decoration: none; display:flex; color:black;"><img class="user-profile" src="/images/uploads/profile-picture/{{auth()->user()->profilePic}}" alt="">
                    <h4>{{auth()->user()->fname}} {{auth()->user()->lname}}</h4></a>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/S0U5ECzYUSu.png?_nc_eui2=AeG0W5UR97-MUjMDkaLexexcqfpKmA4GtxSp-kqYDga3FGQbxd3HLn5loIF6KbZLVH-Q0bx6mgiMTF33dq1cx39z" style="height:36px;width:36px" alt=""></span>
                    <h4>Friends</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png?_nc_eui2=AeGVaPFGXO4lt6yoApa_6y6kZ3xAUM5_bWpnfEBQzn9tanKWP_dMbRBi6oOgq_dyjLSwW633jRw7vPVn58uGWHcX" style="height:36px;width:36px" alt=""></span>
                    <h4>Groups</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png?_nc_eui2=AeGwf0mhP3xboAp2ThtdeRx4-vsl1K9A-9v6-yXUr0D724X0BEFXZHr6xmdPrtv5UQlnG86MATvRZQc9-wDDjPyb" style="height:36px;width:36px" alt=""></span>
                    <h4>Marketplace</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="28" width="28"><path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path></svg></i></span>
                    <h4>Watch</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/lVijPkTeN-r.png?_nc_eui2=AeEs23MJXLQekwDT02NXHBm7-5kYScafj0T7mRhJxp-PRIPoyeEdc6UIHaoHfpBV1Hi8MLy8T-PzAl7K4IjK5_jR" style="height:36px;width:36px" alt=""></span>
                    <h4>Saved</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><img class="hu5pjgll bixrwtb6" src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/he-BkogidIc.png?_nc_eui2=AeGgUftPWYdlOESOzRbkNUJaa4YXxTz5jX9rhhfFPPmNfyri7JCcqBlvXh7lswDDZaXJNXOV1JhVKRGpdKY5rIbd" style="height:36px;width:36px" alt=""></span>
                    <h4>Memories</h4>
                </div>
                <div class="sidebarRow">
                    <span class="material-icons"><i class="fa-solid fa-caret-down"></i></span>
                    <h4>See More</h4>
                </div>
            </div>
            {{-- SIDEBAR ENDS --}}

            {{-- FEED SECTION BEGINS --}}
            <div class="feed">
                <div class="storyReel">
                    {{-- STORY BEGINS --}}
                    <div style="background-image: url('/images/uploads/profile-picture/{{auth()->user()->profilePic}}')"  class="story create-story">
                        {{-- <img class="user-profile story-profile create-story" src="/images/uploads/default.jpg" alt=""> --}}
                        <h4 class="">Create Story</h4>
                        <svg fill="currentColor" viewBox="0 0 20 20" width="2.5em" height="2.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 ljqsnud1 jnigpg78 odw8uiq3 __web-inspector-hide-shortcut__"><g fill-rule="evenodd" transform="translate(-446 -350)"><g fill-rule="nonzero"><path d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z" transform="translate(354.5 159.5)"></path><path d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z" transform="translate(354.5 159.5)"></path></g></g></svg>
                    </div>
                    <div style="background-image: url('https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/279278588_517377436755225_5341282755031214748_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=5b7eaf&_nc_eui2=AeGRV6MNyFbhu_cladJjJVGAmTVWDjUQhK2ZNVYONRCErXGKQjzmaVqCh0xalwQTHDITFFNuVgtgevx2HPSZo97Q&_nc_ohc=0-IEtfydGogAX8NmKYK&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT_XI1lT3DnJXAH1yUKlZfHaH5hF2zCB98FNV3qJGZqy7A&oe=6271CC19')"  class="story">
                        <img class="user-profile story-profile" src="https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/269600665_456575882835381_3686843976647157600_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeF6QuV-8318wmfJPuGni3uVuWSCuFVl7dK5ZIK4VWXt0i_fUKqBQRZJHN9PRuNsvYhbzkdQMjR25BvGmbBGdQaj&_nc_ohc=ubikt0KUQ0UAX8AhLgj&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8A4hM4jNVaJ5OC3WBta7zBD8H7BEjnGQi7dV1di1UxQw&oe=62764BB6" alt="">
                        <h4>Ram</h4>
                    </div>
                    <div style="background-image: url('https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/266762798_434401251719511_2478015891928289109_n.jpg?_nc_cat=107&ccb=1-6&_nc_sid=0debeb&_nc_ohc=NgrCP83CAOUAX-eiPmB&_nc_oc=AQl8JhsP6-IyaR51d4U0htto1mfWtlslKzYXeYxkWfwA5LNjCVJ_bh_eLO_t9KkJLNs&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8BEdQJoN1aByqXqubR4r0-p0s2FamrNyCRspkqqNAONw&oe=627E8DE3')"  class="story">
                        <img class="user-profile story-profile" src="https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/269600665_456575882835381_3686843976647157600_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeF6QuV-8318wmfJPuGni3uVuWSCuFVl7dK5ZIK4VWXt0i_fUKqBQRZJHN9PRuNsvYhbzkdQMjR25BvGmbBGdQaj&_nc_ohc=ubikt0KUQ0UAX8AhLgj&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8A4hM4jNVaJ5OC3WBta7zBD8H7BEjnGQi7dV1di1UxQw&oe=62764BB6" alt="">
                        <h4>Shyam</h4>
                    </div>
                    <div style="background-image: url('https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/279370614_516723860153916_3849930853374008291_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=5b7eaf&_nc_eui2=AeHdC6YjsWfkP8wFbeRElw4w5XINpdu6Ydnlcg2l27ph2X3iU6eztfwWUkT8b-9KJbO0OUAR0SOJLN3SokWzLonE&_nc_ohc=fO2HyQU8lLwAX_wRTX4&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT9zO-RUYJsTNEl6zy58avHUx-bgxV_Y1AJDiE4J2tLOVg&oe=6270FE51')"  class="story">
                        <img class="user-profile story-profile" src="https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/269600665_456575882835381_3686843976647157600_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeF6QuV-8318wmfJPuGni3uVuWSCuFVl7dK5ZIK4VWXt0i_fUKqBQRZJHN9PRuNsvYhbzkdQMjR25BvGmbBGdQaj&_nc_ohc=ubikt0KUQ0UAX8AhLgj&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8A4hM4jNVaJ5OC3WBta7zBD8H7BEjnGQi7dV1di1UxQw&oe=62764BB6" alt="">
                        <h4>Hari</h4>
                    </div>
                    <div style="background-image: url('https://scontent.fpkr1-1.fna.fbcdn.net/v/t39.30808-6/263853056_435259251633711_1894524251502781093_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGGhlXArg7POpvXJlOF233aK87htUP_iykrzuG1Q_-LKSfAXZ-XzoCKX0Us-uL2nTx52kULW02TYqKS9nCXOD3g&_nc_ohc=EgXRsMxDXhIAX_vBo-K&_nc_ht=scontent.fpkr1-1.fna&oh=00_AT8jQ-LZcmdHPTh-2amXXaznAxABVG-rnbC4PZ8FKLOtIA&oe=6272791B')"  class="story">
                        <img class="user-profile story-profile" src="https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/269600665_456575882835381_3686843976647157600_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeF6QuV-8318wmfJPuGni3uVuWSCuFVl7dK5ZIK4VWXt0i_fUKqBQRZJHN9PRuNsvYhbzkdQMjR25BvGmbBGdQaj&_nc_ohc=ubikt0KUQ0UAX8AhLgj&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8A4hM4jNVaJ5OC3WBta7zBD8H7BEjnGQi7dV1di1UxQw&oe=62764BB6" alt="">
                        <h4>Srijan</h4>
                    </div>                    
                    {{-- STORY ENDS --}}
                </div>

                {{-- MESSAGE SENDER BEGINS --}}
                <div class="messageSender">
                    <div class="messageSender-top">
                        <img class="user-profile" src="/images/uploads/profile-picture/{{auth()->user()->profilePic}}" alt="">
                        <form>
                            {{-- <input type="text" class="messageSender-input" placeholder="What's on you mind?"> --}}
                            <button type="button" class="messageSender-input create-post" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                What's on your mind, {{auth()->user()->fname}}?
                              </button>
                        </form>
                    </div>
                    
                    <div class="messageSender-bottom">
                        <div class="messageSender-option">
                            <span style="color:red" class="material-icons"><svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 fxtw5amg rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M113.029 2.514c-.363-.088-.746.014-1.048.234l-2.57 1.88a.999.999 0 0 0-.411.807v8.13a1 1 0 0 0 .41.808l2.602 1.901c.219.16.477.242.737.242.253 0 .508-.077.732-.235.34-.239.519-.65.519-1.065V3.735a1.25 1.25 0 0 0-.971-1.22m-20.15 6.563c.1-.146 2.475-3.578 5.87-3.578 3.396 0 5.771 3.432 5.87 3.578a.749.749 0 0 1 0 .844c-.099.146-2.474 3.578-5.87 3.578-3.395 0-5.77-3.432-5.87-3.578a.749.749 0 0 1 0-.844zM103.75 19a3.754 3.754 0 0 0 3.75-3.75V3.75A3.754 3.754 0 0 0 103.75 0h-10A3.754 3.754 0 0 0 90 3.75v11.5A3.754 3.754 0 0 0 93.75 19h10z" transform="translate(354 158.5)"></path><path d="M98.75 12c1.379 0 2.5-1.121 2.5-2.5S100.129 7 98.75 7a2.503 2.503 0 0 0-2.5 2.5c0 1.379 1.121 2.5 2.5 2.5" transform="translate(354 158.5)"></path></g></g></svg></span>
                            <h3>Live video</h3>
                        </div>
                        <div class="messageSender-option">
                            <span style="color:green" class="material-icons"><svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 j58f7537 rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="m96.968 22.425-.648.057a2.692 2.692 0 0 1-1.978-.625 2.69 2.69 0 0 1-.96-1.84L92.01 4.32a2.702 2.702 0 0 1 .79-2.156c.47-.472 1.111-.731 1.774-.79l2.58-.225a.498.498 0 0 1 .507.675 4.189 4.189 0 0 0-.251 1.11L96.017 18.85a4.206 4.206 0 0 0 .977 3.091s.459.364-.026.485m8.524-16.327a1.75 1.75 0 1 1-3.485.305 1.75 1.75 0 0 1 3.485-.305m5.85 3.011a.797.797 0 0 0-1.129-.093l-3.733 3.195a.545.545 0 0 0-.062.765l.837.993a.75.75 0 1 1-1.147.966l-2.502-2.981a.797.797 0 0 0-1.096-.12L99 14.5l-.5 4.25c-.06.674.326 2.19 1 2.25l11.916 1.166c.325.026 1-.039 1.25-.25.252-.21.89-.842.917-1.166l.833-8.084-3.073-3.557z" transform="translate(352 156.5)"></path><path fill-rule="nonzero" d="m111.61 22.963-11.604-1.015a2.77 2.77 0 0 1-2.512-2.995L98.88 3.09A2.77 2.77 0 0 1 101.876.58l11.603 1.015a2.77 2.77 0 0 1 2.513 2.994l-1.388 15.862a2.77 2.77 0 0 1-2.994 2.513zm.13-1.494.082.004a1.27 1.27 0 0 0 1.287-1.154l1.388-15.862a1.27 1.27 0 0 0-1.148-1.37l-11.604-1.014a1.27 1.27 0 0 0-1.37 1.15l-1.387 15.86a1.27 1.27 0 0 0 1.149 1.37l11.603 1.016z" transform="translate(352 156.5)"></path></g></g></svg></span>
                            <h3>Photo/video</h3>
                        </div>
                        <div class="messageSender-option">
                            <span style="color:orange" class="material-icons"><svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 mu8pnim0 rgmg9uty b73ngqbp"><g fill-rule="evenodd" transform="translate(-444 -156)"><g><path d="M107.285 13c.49 0 .841.476.712.957-.623 2.324-2.837 4.043-5.473 4.043-2.636 0-4.85-1.719-5.473-4.043-.13-.48.222-.957.712-.957h9.522z" transform="translate(353.5 156.5)"></path><path fill-rule="nonzero" d="M114.024 11.5c0 6.351-5.149 11.5-11.5 11.5s-11.5-5.149-11.5-11.5S96.173 0 102.524 0s11.5 5.149 11.5 11.5zm-2 0a9.5 9.5 0 1 0-19 0 9.5 9.5 0 0 0 19 0z" transform="translate(353.5 156.5)"></path><path d="M99.524 8.5c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m8.5 0c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m-.739 4.5h-9.522c-.49 0-.841.476-.712.957.623 2.324 2.837 4.043 5.473 4.043 2.636 0 4.85-1.719 5.473-4.043.13-.48-.222-.957-.712-.957m-2.165 2c-.667.624-1.592 1-2.596 1a3.799 3.799 0 0 1-2.596-1h5.192" transform="translate(353.5 156.5)"></path></g></g></svg></span>
                            <h3>Feeling/activity</h3>
                        </div>
                    </div>
                </div>
                {{-- MESSAGE SENDER ENDS --}}



                {{-- Create room Section Begins --}}
                <div class="createRoom">
                    <div class="createRoom1">
                        <i data-visualcompletion="css-img" class="hu5pjgll" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/5zaboDASSye.png');background-position:0 -219px;background-size:auto;width:24px;height:24px;background-repeat:no-repeat;display:inline-block"></i>
                        <h6>Create Room</h6>
                    </div>
                    <div class="createRoom2">
                        <div class="room room1">
                            <img src="/images/uploads/friend-list/1.jpg" alt="">
                        </div>
                        <div class="room room2">
                            <img src="/images/uploads/friend-list/2.jpg" alt="">
                        </div>
                        <div class="room room3">
                            <img src="/images/uploads/friend-list/3.jpg" alt="">
                        </div>
                        <div class="room room4">
                            <img src="/images/uploads/friend-list/4.jpg" alt="">
                        </div>
                        <div class="room room5">
                            <img src="/images/uploads/friend-list/5.jpg" alt="">
                        </div>
                        <div class="room room6">
                            <img src="/images/uploads/friend-list/6.jpg" alt="">
                        </div>
                        <div class="room room7">
                            <svg fill="currentColor" viewBox="0 0 20 20" width="20px" height="20px" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp"><path d="M7.8 4.53 13.273 10 7.8 15.47a.75.75 0 0 0 1.061 1.06l6-6a.751.751 0 0 0 0-1.06l-6-6A.75.75 0 0 0 7.8 4.53z"></path></svg></div>
                    </div>
                </div>
                {{-- Create room Section Ends --}}



                
                {{-- POST SECTION BEGINS --}}
                <div class="post">
                    <div class="post-top">
                        <img class="user-profile post-profile" src="/images/uploads/friend-list/6.jpg" alt="">
                        <div class="post-topInfo">
                            <h5>Samir Karki</h5>
                            <p>28 April at 8:30 PM.</p>
                        </div>
                    </div>

                    <div class="post-bottom">
                        <p>Caption Reloading.......</p>
                    </div>
    
                    <div class="post-image">
                        <img class="post-profile" src="/images/uploads/friend-list/6.jpg" alt="">
                    </div>


                    <div class="likeCount">
                        <div class="emoji">
                            <div class="like">
                                <img class="j1lvzwm4" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e" width="18">
                            </div>
                            <div class="love">
                                <img class="j1lvzwm4" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e" width="18">
                            </div>&nbsp;
                            <p>101K</p>
                        </div>
                        <div class="commentShare">
                            <div class="comment">
                                <p>103K Comments</p>
                            </div>
                            <div class="share">
                                <p>1.3K Shares</p>
                            </div>
                        </div>
                    </div>


    
                    <div class="post-options">
                        <div class="post-option"> {{--like button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -297px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></span>
                            <p>Like</p>
                        </div>
                        <div class="post-option"> {{--comment button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -259px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></i></span>
                            <p>Comment</p>
                        </div>
                        <div class="post-option"> {{--share button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -316px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></span>
                            <p>Share</p>
                        </div>
                    </div>
                </div>


                <div class="post">
                    <div class="post-top">
                        <img class="user-profile post-profile" src="https://scontent.fktm1-2.fna.fbcdn.net/v/t39.30808-6/269600665_456575882835381_3686843976647157600_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeF6QuV-8318wmfJPuGni3uVuWSCuFVl7dK5ZIK4VWXt0i_fUKqBQRZJHN9PRuNsvYhbzkdQMjR25BvGmbBGdQaj&_nc_ohc=ubikt0KUQ0UAX8AhLgj&_nc_ht=scontent.fktm1-2.fna&oh=00_AT8A4hM4jNVaJ5OC3WBta7zBD8H7BEjnGQi7dV1di1UxQw&oe=62764BB6" alt="">
                        <div class="post-topInfo">
                            <h5>{{auth()->user()->fname}} {{auth()->user()->lname}}</h5>
                            <p>28 April at 8:30 PM.</p>
                        </div>
                    </div>

                    <div class="post-bottom">
                        <p>Post Without Caption</p>
                    </div>
    
                    <div class="post-image">
                        <img class="post-profile" src="" alt="">
                    </div>


                    <div class="likeCount">
                        <div class="emoji">
                            <div class="like">
                                <img class="j1lvzwm4" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e" width="18">
                            </div>
                            <div class="love">
                                <img class="j1lvzwm4" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e" width="18">
                            </div>&nbsp;
                            <p>101K</p>
                        </div>
                        <div class="commentShare">
                            <div class="comment">
                                <p>103K Comments</p>
                            </div>
                            <div class="share">
                                <p>1.3K Shares</p>
                            </div>
                        </div>
                    </div>


    
                    <div class="post-options">
                        <div class="post-option"> {{--like button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -297px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></span>
                            <p>Like</p>
                        </div>
                        <div class="post-option"> {{--comment button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -259px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></i></span>
                            <p>Comment</p>
                        </div>
                        <div class="post-option"> {{--share button--}}
                            <span class="material-icons"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/zz_vrFBDgEM.png&quot;); background-position: 0px -316px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i></span>
                            <p>Share</p>
                        </div>
                    </div>
                </div>


                            
                {{-- POST SECTION ENDS --}}

            </div>
            {{-- FEED SECTION ENDS --}}

            {{-- WIDGETS BEGIN --}}
            <div class="widgets">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="500" data-height="1000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Meta</a></blockquote>
                </div>
            </div>
            {{-- WIDGETS ENDS --}}
        </div>
        {{-- MAIN BODY ENDS --}}

        
        {{-- Log out Model Begins --}}
        <div class="modal fade logout" id="logoutButton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="upper-post logoutbar">
                            <img class="user-profile" src="/images/uploads/profile-picture/{{auth()->user()->profilePic}}" alt="">
                            <div class="logbar">
                                <a href="profile" style="text-decoration: none; color:black;"><h5>{{auth()->user()->fname}} {{auth()->user()->lname}}</h5></a>
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
                        <label class="logbar" for="logOut">
                            <span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/QnBF2xVFFiX.png?_nc_eui2=AeENxmeANpWqYx99gZNhKsd8_qJ7DKUFU4b-onsMpQVThn5-KBKBVuPWgQVxYkjhhYFXADnhzcv0E795KZnL-wwb&quot;); background-position: 0px -46px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                        </label>
                        <p><a href="/logout" id="logOut">Logout</a></p>
                    </div>
                    <p style="font-size: small;">Privacy  · Terms  · Advertising  · Ad Choices   · Cookies  ·   · facebook © 2022</p>
                </div>
              </div>
            </div>
          </div>
        {{-- Log out Model Ends --}}
        

        {{-- Post-Section Modal Begins --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="" method="POST" id="form" enctype="multipart/form-data">
                    <div class="create-post">
                        <div class="upper-post">
                            <img class="user-profile" src="/images/uploads/profile-picture/{{auth()->user()->profilePic}}" alt="">
                            <div class="name-post">
                                <h5>{{auth()->user()->fname}} {{auth()->user()->lname}}</h5>
                                <button disabled><i class="fa-solid fa-user-group"></i> Friends <i class="fa-solid fa-caret-down"></i></button>
                            </div>
                        </div>
                        <div class="middle-post">
                            <div id="textarea">
                                <textarea name="caption" placeholder="What's on your mind, {{auth()->user()->fname}}?"></textarea>
                                <div id="preview">
                                    {{-- <img src="images/abc.jpg" alt="">
                                    <span> &times; </span> --}}
                                </div>
                                
                            </div>
                        </div>
                        {{-- <input type="file" name="image" class="inputFile" multiple> --}}
                        <div class="lower-post">
                            <div class="lpfirst">
                                <label for="" style="color:black; cursor: pointer;">Add to your post</label>
                            </div>
                            <div class="lpsecond">
                                <div class="icon icon1">
                                    <label for="uploadImage"><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="cursor: pointer; height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/pPMrpR3Akbv.png&quot;); background-position: 0px -183px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i></label>
                                    <input type="file" name="postImage" class="inputFile" id="uploadImage" style="display: none;" onchange="previewFiles()" multiple>
                                </div>
                                <div class="icon icon2">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/pPMrpR3Akbv.png&quot;); background-position: 0px -158px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="icon icon3">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/pPMrpR3Akbv.png&quot;); background-position: 0px -133px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class=" icon icon4">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yE/r/HyeXO0sd7uk.png&quot;); background-position: 0px -225px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="icon icon5">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/IUYFS2LyvHB.png&quot;); background-position: 0px -100px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="icon icon6">
                                    <i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/pPMrpR3Akbv.png&quot;); background-position: 0px -108px; background-size: auto; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                            </div>
                        </div>
                        <button class="post-button">Post</button>
                    </div>
                </form>
                </div>
                
            </div>
            </div>
        </div>
        {{-- Post-Section Modal Ends --}}

        {{-- Widgets Js--}}
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="MB2KILGa"></script>
        {{-- Widgets Js--}}



        {{-- Preview image js begins--}}
            <script type="text/javascript">


            function previewFiles() {

            var preview = document.querySelector('#preview');
            var files   = document.querySelector('input[type=file]').files;

            function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                var reader = new FileReader();

                reader.addEventListener("load", function () {
                var image = new Image();
                image.height = 100;
                image.title = file.name;
                image.src = this.result;
                preview.appendChild( image );
                }, false);

                reader.readAsDataURL(file);
            }

            }

            if (files) {
            [].forEach.call(files, readAndPreview);
            }

            }


            </script>
        {{-- Preview image js end--}}



    <script src="{{URL::asset('js/script.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>