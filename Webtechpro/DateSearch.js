function get(id) {
    return document.getElementById(id);
}

function DateStudent(e) {
    if (e.value == "") {
        get("suggesstion2").innerHTML = "";
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "DateSearch.php?key=" + e.value, true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            get("suggesstion2").innerHTML = this.responseText;
        }
    };
    xhr.send();
}