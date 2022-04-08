var closeButtons = document.querySelectorAll(".close");
var addButton = document.querySelector(".add-btn");
var formCard = document.querySelector("#form-card");
var submit = document.querySelector("#submit");
var title = document.querySelector("#title");
var note = document.querySelector("#note");
var flexContainer = document.querySelector(".flex-container");

closeButtons.forEach(function(button){
	button.addEventListener("click", function(){
		var card = this.parentElement.parentElement.parentElement;
		card.classList.add("animated");
		card.classList.add("fadeOut");
		setTimeout(function(){ card.outerHTML = ""; }, 650);
	});
});

addButton.addEventListener("click", function(){
	formCard.classList.toggle("hide");
})

submit.addEventListener("click", function(event){
	event.preventDefault()
	var noteTitle = title.value;
	var noteBody = note.value;
	console.log(Date());
	var card = makeNewCard(noteTitle, noteBody);
	console.log(card);
	flexContainer.prepend(card);
	title.value = "";
	note.value = "";
});

function makeNewCard(noteTitle, noteBody){
	var cardDiv = document.createElement("div");
	var contentDiv = document.createElement("div");
	cardDiv.classList.add("card", "hoverable", "z-depth-2", "note");
	contentDiv.classList.add("card-content");
	contentDiv.innerHTML += "<span class=\"card-title\">" + noteTitle + "<a class=\"btn-flat right close\"><i class=\"material-icons\">close</i></a></span>";
	contentDiv.innerHTML += "<div class=\"divider\"></div>";
	contentDiv.innerHTML += "<p>" + noteBody + "</p>";
	cardDiv.appendChild(contentDiv); 
	console.log(cardDiv);
	return cardDiv;
}

M.AutoInit();

var elem = document.querySelector('.add-btn');
var instance = M.FloatingActionButton.init(elem, {
	hoverEnabled: false,
});

var elem = document.querySelector('.collapsible');
var instance = M.Collapsible.init(elem, options);