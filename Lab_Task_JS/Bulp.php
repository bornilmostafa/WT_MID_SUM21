<html>
<body>

<form action="">
 <input id="uname" onkeyup="viewOutput(this)" type="text" placeholder="Username"><br>
 <span id="op"></span> <br>
 <input type="password" placeholder="password">

</form>
<button id="btn_g" onclick="viewGoogle()" >Login With Google</button>

<form id="g-form" style="display:none" action="">
<input type="text" placeholder="gmail"> <br/>
<input type="password" placeholder="gamail password">
</form>
    
<form action="">

<button  onclick="turnOn()" >Turn On</button>
<img id="bulb" src="image2.gif">
<button onclick="turnOff()" >Turn Off</button>
<br/>
<span onmouseover="showinfo()" onmouseout="hideout()" ></span>
<br/>
<p id="info" style="display:none" >American International University-Bangladesh, commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh. The university is an independent organization with own Board of Trustees.
</p>
</form>


</body>

<script>
var g_flag=false;

function viewOutput(e){
    var op=e.value;
    get("op").innerHTML=op;
}
function hideinfo()
{
    get("info").style.display="none";
}
function showinfo()
{
    get("info").style.display="block";

}



function turnOn()
{

    var buld_i=get("bulb");
    buld_i.src="image1.gif";
}
function turnOff()
{
  var buld_i=get("bulb");
  buld_i.src="image2.gif";
}

function get(id)
{
    return document.getElementByid(id);
}

function viewGoogle(){

    var g_f=get("g_form");
    var btn_g=get("btn_g");
   if(g_flag)
   {
   g_f.style.display="none";
   btn_g.innerHTML="Login with google";


   }
   else{
    g_f.style.display="block";
    btn_g.innerHTML="Hide Google Login";
    g_flag=true;

   }


}

</script>

</html>