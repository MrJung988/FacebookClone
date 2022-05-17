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




// Preview Images Begins

// function previewImages() {
//     var preview = document.querySelector('#preview');
    
//     if (this.files) {
//       [].forEach.call(this.files, readAndPreview);
//     }
  
//     function readAndPreview(file) {
  
//       // Make sure `file.name` matches our extensions criteria
//       if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
//         return alert(file.name + " is not an image");
//       } // else...
      
//       var reader = new FileReader();
      
//       reader.addEventListener("load", function() {
//         var image = new Image();
//         image.height = 100;
//         image.title  = file.name;
//         image.src    = this.result;
//         preview.appendChild(image);
//       });
      
//       reader.readAsDataURL(file);
      
//     }
  
//   }
  
//   document.querySelector('#file-input').addEventListener("change", previewImages);









// var images = [];
// function image_select(){
//     var image = document.getElementById('uploadImage').files;
//     for(i = 0; i < image.length; i++){
//         images.push({
//             "name" : image[i].name,
//             "url" : URL.createObjectURL(image[i]),
//             "file" : image[i],
//         })
//     } 
//     document.getElementById('form').reset();
//     // console.log(image);
// }  
// function image_show(){
//     var image = "";
//     images.forEach((i) => {
//         image += `<div class="image-container">
//         <img src="`+ i.url+`" alt="Image">
//         <span onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
//     </div> `;
//     })
//     return image;
// }
// function delete_image(e){}


// Preview Images Ends
