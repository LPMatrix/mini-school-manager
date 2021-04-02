const edit = document.querySelectorAll(".edit");
const close = document.querySelector(".close-icon");
const editPopup = document.querySelector("#edit-section");
const link = document.querySelector(".link");
const menue = document.querySelector(".icon");
const aside = document.querySelector(".aside");

menue.addEventListener("click", function(e){
     aside.classList.toggle("show-aside");
     menue.classList.toggle("icon-color");
})

link.addEventListener("click", function(){
     link.classList.add("link-color");
})

close.addEventListener("click", function(){
     editPopup.style.display = "none";
})
