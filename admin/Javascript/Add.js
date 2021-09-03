//Check if the member exist or not based on fullname and date of birth
function addProject() {
    var name = document.getElementById("name").value;
    alert(name);
    var value = document.getElementById("catagory");
    var catagory = value.options[value.selectedIndex].value;
    alert(catagory);
    var client = document.getElementById("client").value;
    var date = document.getElementById("date").value;
    var description = document.getElementById("description").value;
    var link = document.getElementById("link").value;
    var toAdd = name + '_' + catagory + '_' + client + '_' + date + '_' + description + '_' + link;
  
    if (toAdd.length == 0) {
        document.getElementById("validatorProject").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //Receive result from Member.php
                document.getElementById("validatorProject").innerHTML = this.responseText;
            }
        };
        //Send phoneNo and type to Contributor.php
        xmlhttp.open("GET", "../admin/Register.php?addProject=" + toAdd, true);
        xmlhttp.send();
    }
}

//Check if the member exist or not based on fullname and date of birth
function addTeam() {
    var name = document.getElementById("tname").value;
    alert(name);
    var value = document.getElementById("trole");
    var role = value.options[value.selectedIndex].value;
    alert(role);
    var telegram = document.getElementById("ttelegram").value;
    var linkedin = document.getElementById("tlinkedin").value;
    var twitter = document.getElementById("ttwitter").value;
    var toAdd = name + '_' + role + '_' + telegram + '_' + linkedin + '_' + twitter;
  
    if (toAdd.length == 0) {
        document.getElementById("validatorTeam").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //Receive result from Member.php
                document.getElementById("validatorTeam").innerHTML = this.responseText;
            }
        };
        //Send phoneNo and type to Contributor.php
        xmlhttp.open("GET", "../admin/Register.php?addTeam=" + toAdd, true);
        xmlhttp.send();
    }
}