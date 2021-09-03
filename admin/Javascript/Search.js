//Check if the member exist or not based on fullname and date of birth
function Search() {
    var keyword = document.getElementById("keyword").value;
    var project = document.getElementById("project");
    var picture = document.getElementById("picture");
    var team = document.getElementById("team");
    var toSearch;
    if(project.checked){
        toSearch = keyword + "_" + project.value
    }
    else if(picture.checked){
        toSearch = keyword + "_" + picture.value
    }
    else if(team.checked){
        toSearch = keyword + "_" + team.value
    }

    if (keyword.length == 0) {
        document.getElementById("validator").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //Receive result from Member.php
                document.getElementById("validator").innerHTML = this.responseText;
            }
        };
        //Send phoneNo and type to Contributor.php
        xmlhttp.open("GET", "../admin/Search.php?searchBy=" + toSearch, true);
        xmlhttp.send();
    }
}