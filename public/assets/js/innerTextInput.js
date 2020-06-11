/*
    * Add Of Image Name In Input
*/

let image = document.getElementById("myImage");
let label = document.getElementById("myLabel");
    image.addEventListener("change", function(){
        let imageName = image.value;
        let onlyName = imageName.split("\\");
        label.innerText = onlyName[2];
    });

    
