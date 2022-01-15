const form = document.querySelector(".signup form"),
 continueBtn = form.querySelector("button"),
 errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    //lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
       if(xhr.status === 200){
          let data = xhr.response.trim();
            console.log(data);
             if(data == "success"){
                window.location.href = "users.php";
             }else{
                 errorText.style.display = "block";
                 errorText.textContent = data;                  
           }
          }
      }
    }
    // have to send the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData);
}