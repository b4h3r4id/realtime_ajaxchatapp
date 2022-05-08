const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
            go("#result","login.php",4);
function go(ID,Address, second){
if(second===0){
window.location.href=Address;
}
document.querySelector(ID).textContent= second+" saniye sonra giris Sehifesine yonelir";
second--;
setTimeout(function(){
go(ID,Address,second);
},1000);
}
                alert("Registration successful, please log in");
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}