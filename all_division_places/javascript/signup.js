const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e)=>{
	e.preventDefault(); /*preventing form form submitting*/
}

continueBtn.onclick = ()=>{
	/*console.log("Hello")*/


	/*here starts Ajax*/
	let xhr = new XMLHttpRequest(); /*creating XML object*/
	xhr.open("POST", "php/signup.php", true); /*xhr.open takes many paramaters here i use only pass method, url and async*/
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;/*xhe.response gives us response of that passed URL*/
				if(data == "success"){
					location.href = "users.php"; /*akhan theke user e cole jabe seta holo static atake dynamic korbo ..*/

				}else{
					errorText.textContent = data;
					errorText.style.display = "block";
				}
			}
		}

	}
	/*here we have to send the form data through ajax to php*/
	let formData = new FormData(form); /*creating new formData object*/
	xhr.send(formData); /*sending the form data to php*/
}