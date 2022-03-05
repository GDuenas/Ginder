var Simlulator = (function() {

	entity.simulate = function() {
		var firstname = document.getElementById("firstname");
		var lastname = document.getElementById("lastname");
		var email = document.getElementById("email");
		var gamertag = document.getElementById("gamertag");
		var gameconsole = document.getElementById("console");

		var submitbutton = document.getElementById("submit-info");


		firstname.value = "Joe";
		lastname.value = "Mama";
		email.value = "joe@mama.ca";
		gamertag.value = "mamaphone";
		gameconsole.value = "pc";

		submitbutton.click();

	}



}());