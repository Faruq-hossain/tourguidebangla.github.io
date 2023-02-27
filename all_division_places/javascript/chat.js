/*chat gulake dynamic korbo*/
const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
	e.preventDefault(); /*preventing form form submitting*/
}

/*sendbtn er kaj korbo*/
sendBtn.onclick = ()=>{
	/*console.log("Hello")*/


	/*here starts Ajax*/
	let xhr = new XMLHttpRequest(); /*creating XML object*/
	xhr.open("POST", "php/insert-chat.php", true); /*xhr.open takes many paramaters here i use only pass method, url and async*/
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				inputField.value = ""; /*once messafe inserted into database then blank the input field*/
				scrollToBottom();
			}
		}

	}
	/*here we have to send the form data through ajax to php*/
	let formData = new FormData(form); /*creating new formData object*/
	xhr.send(formData); /*sending the form data to php*/
}


/*stop the scrolling function when user try to scroll up*/
chatBox.onmouseenter = ()=>{
	chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
	chatBox.classList.remove("active");
}

/*chat box e message send korar por show korar jonno*/
/*users dynamic korbo*/

setInterval(()=>{
	/*here starts Ajax*/
	let xhr = new XMLHttpRequest(); /*creating XML object*/
	/*here use GET method because we need to receive data not to send*/
	xhr.open("POST", "php/get-chat.php", true); /*xhr.open takes many paramaters here i use only pass method, url and async*/
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;/*xhe.response gives us response of that passed URL*/
				chatBox.innerHTML = data;
				/*scrollToBottom();*/
				if(!chatBox.classList.contains("active")){/*if active class not contains in chatbox the scroll to bottom*/
					scrollToBottom();
				}


				/*ata akhane dorkar nai sudhu 2nd line dorkar    if(!searchBar.classList.contains('active')){  if active not contains in search bar then add this data
					usersList.innerHTML = data;
				}*/



				/*added 3 and 22 line then show output users are shown and now these are dynamic data but user can see his own 
				account in users list right. so now i'll remove the current logged in user account from users list
				because that user can't chat his own account*/
			}
		}

	}

	/*here we have to send the form data through ajax to php*/
	let formData = new FormData(form); /*creating new formData object*/
	xhr.send(formData); /*sending the form data to php*/

}, 500); /*this function will run frequently after 500ms*/

/*msg scroll autometacilly*/
function scrollToBottom(){
	chatBox.scrollTop = chatBox.scrollHeight;

}