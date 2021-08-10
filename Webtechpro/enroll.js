function get(id) {
    return document.getElementById(id);
}

function enroll_Student(e) {
    if (e.value == "") {
        get("suggesstion1").innerHTML = "";
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "searchStudent.php?key=" + e.value, true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            get("suggesstion1").innerHTML = this.responseText;
        }
    };
    xhr.send();
}