//Get reference to the password input
const passwordE1 = document.querySelector(".form-input--password");

//Get reference to the container for the eye image 
const eyeContainerE1 = document.querySelector(".password-eye-container");

//Get reference for the eye image
const eyeImgE1 = eyeContainerE1.getElementsByTagName("img")[0];

//Show/hide the eye
passwordE1.addEventListener("keyup", (e) => {
    e.target.value.length ? eyeContainerE1.classList.remove("hidden") : eyeContainerE1.classList.add("hidden");
});



//Show/hide the password
eyeContainerE1.addEventListener("click",()=>{
    if (eyeImgE1.classList.contains("eye-off")){
    eyeImgE1.scr = "images/eye.png"; 
    eyeImgE1.classList.remove("eye-off"); 
    passwordE1.type = "text";
}else{
    eyeImgE1.src = "images/eye-off.png"; 
    eyeImgE1.classList.add("eye-off");
    passwordE1.type = "password";
}
});

