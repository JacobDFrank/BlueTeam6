function addPerson(className) {
    temp = className.split(" ");
	className = "name " + temp[0];
	var workshop = document.getElementsByClassName(className);
    var workshopName = workshop[0].innerText;
    $.ajax({
        type: 'POST',
        url: '/~blueteam/project/php/workshop-process.php',
        data: { type: "add", name: workshopName },
        success:function() {
            window.location.reload();
        },
        error:function() {
            window.location.reload();
            alert("Failed to add you to list.");
        }
    });
}

function removePerson(className) {
    temp = className.split(" ");
	className = "name " + temp[0];
	var workshop = document.getElementsByClassName(className);
    var workshopName = workshop[0].innerText;
    $.ajax({
        type: "POST",
        url: "php/workshop-process.php",
        data: { type: "remove", name: workshopName },
        success:function() {
            window.location.reload();
        },
        error:function() {
            window.location.reload();
            alert("Failed to remove you from list.");
        }
    });
}
