<script>
 function get(id){
  return doctument.getElementById(id);
 }

 function loadDoc()
 {
    var xhr= new XMLHttpRequest();
    xhr.open("GET","My_proffie.php",true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            get("demo").innerHTML=this.responseText;
        }

    };
   xhr.send();

 }


</script>
<button onclick="loadDoc()" >CLICK ME</button>
<div id="demo"> </div>