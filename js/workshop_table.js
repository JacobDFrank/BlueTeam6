function addPerson(className) {
	className = "name " + className.charAt(0);
	var workshop = document.getElementsByClassName(className);
    var workshopName = workshop[0].innerText;
    $.ajax({
        type: 'POST',
        url: '/~blueteam/project/php/workshop-process.php',
        data: { type: "add", name: workshopName }
    });
}

function removePerson(className) {
	className = "name " + className.charAt(0);
	var workshop = document.getElementsByClassName(className);
    var workshopName = workshop[0].innerText;
    $.ajax({
        type: "POST",
        url: "php/workshop-process.php",
        data: { type: "remove", name: workshopName }
    });
}
