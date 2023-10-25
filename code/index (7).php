<!DOCTYPE html><head><meta property="og:image" content="https://hexjs.vercel.app/banner.jpg" />
<link rel="shortcut icon" type="image/jpg" href="https://hexjs.vercel.app/logo.jpg">
<meta data-react-helmet="true" name="description" content="HEX.js (HyperText EXecution JavaScript) is a JavaScript Framework that uses short and direct tags & attributes to integrate customized Js functions, libraries, and sync CSS stylings"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta name="twitter:card" content="HEX.js (HyperText EXecution JS) is a JavaScript Framework that uses short and direct tags & attributes to integrate customized Js functions, libraries, and sync CSS stylings">
<meta property="twitter:title" content="HEX.js">
<meta property="twitter:description" content="HEX.js (HyperText EXecution JS) is a JavaScript Framework that uses short and direct tags & attributes to integrate customized Js functions, libraries, and sync CSS stylings">
  <meta property="twitter:image" content="https://hexjs.vercel.app/banner.jpg">	
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta property="og:type" content="website"/>
  <title>HEX.js</title>
<noscript>Enable JavaScript To View This WebPage</noscript>
</head>
</head>
<body>
<style>
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{ display: none; }
html, body {
margin: 0px;
height: auto;
}

#allfiles in{
font-family: courier;
font-weight:700;
margin-left: 5px;
margin-right: 6px;
}

#delfile {
color: red;
font-size: 25px;
}

.filecon {
font-family: 'Source Code Pro';
line-height: 20.1px;
font-size: 15px;
height: calc(100vh - 105px);
overflow: scroll;
outline: none; 
font-weight: 200;
border: none;
}
.s-pop {
min-height: 100px !important;
}

#numline {
white-space: wrap;
padding-top: 12px;
}

#num {
width: 40px;
display: block;
font-size: 13px;
text-align: center;
font-family: Rubik;
height: 20.2px;
}

#hexplay, #allfiles {
}
#write {
z-index: 1;
}
</style>   
<use src="https://kit.fontawesome.com/e73524a371.js" />
<use src="https://fonts.googleapis.com/css?family=Source+Code+Pro"  />
<div relative  index="9">
<div back="white" id="hexplay" width="100%" fixed push="top">
    <div relative flex theme="shadow" padding="10px,0,10px,0">
<img src="/Sum/files/sumjs.png" width="30px" margin="5px,10px,0,5px">
<input id="newfile" placeholder="New file..." margin="0px top" theme="light shadow" width="100px">
<size onclick="addFile();" style="z-index: 4"; id="addfile" margin="5px,0,auto,10px" up="7">+</size>
<size onclick="dwdFile();" style="z-index: 4"; id="addfile" margin="5px,0,auto,10px" up="5"><i class="fa fa-download"></i></size>

<button onclick="playFile();" margin="10px right" absolute push="right" theme="smart" back-gradient="to bottom, teal, teal" color="black" padding="5px,12px,5px,12px"><size up="5">Run <i class="fa fa-play"></i></size></button>
</div>
</div>
<div back="white" style="overflow: scroll; white-space: nowrap;" theme="shadow" noscroll id="allfiles" fixed push="top" margin="55px top" width="100%" padding="5px,0,5px,0" height="30px">
    
<in id="hex.html"><in onclick="openFile('hex.html');">Hex.html</in> <can id="delfile">×</can></in>
    
</div>
</div>
<div id="write" width="100vw" margin="100px top" style=" height: calc(100vh-105px)">
<div noscroll height="100%" style="overflow: scroll;" id="numline" absolute push="left" width="40px" back-gradient="to bottom, #e6e5e3, #e6e5e3"></div>    
<div contenteditable style="outline: none; border: none;" spellcheck="false" padding="10px" id="filecon" file="ini" class="filecon" left width="calc(100%-40px)" margin="40px left">
    
</div>    
 
    
</div>


<div absolute push="top" index="9"



<div pop="saved"><p>File Created Successfully!</p></div>
<div pop="delete CANCEL">
<div>
<p center font="Rubik"><size up="6">Are You Sure You Want To Delete This File? (<in id="filedel"></in>)</size></p>

<button width="150px min" theme="night shadow pulse" padding="5px,15px,5px,15px" page-middle-h id="kick"><size up="5">Delete</size></button>
<br>
    
</div>  
  
    
</div>


<di id="play" hidden absolute push="top" index="11" width="100%" height="100vh" back="white">
    
<div back="#e6e5e3" fixed width="100%" flex style="align-items: center" height="40px"> 
<size onclick="document.getElementById('play').style.display = 'none';" index="3" up="5" margin="10px left"><i class="fa fa-arrow-left"></i></size>
<p margin="10px left" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: calc(100% - 40px); font-size: 15px;" id="playname" opacity="0.8" font="Poppins"></p>
</div>    
 <iframe name="result" allow-same-origin src="" id="result" style ="height: calc(100% - 20px);" margin="40px top" noborder width="100%"></iframe>     
 
</div>

  <script src="/Sum/hex.js?v=<?php echo(rand()); ?>"></script>
<script> 

function addFile(thefileh) {
var thefiled = thefileh; 
if(thefiled == null) {
var filename = document.getElementById('newfile').value; 
} else {
var filename = thefiled;
}
if(filename == "") {} else {
const addfiles = document.getElementById('allfiles');
const fileadd = document.createElement("in");
fileadd.id = filename;
fileadd.innerHTML = `<in onclick="openFile('`+filename+`')">` + filename + `</in> <can id="delfile" onclick="delFile('`+filename+`')">×</can>`;
addfiles.appendChild(fileadd);
newFile(filename);
openFile(filename);
}}

function newFile(filenameh) {
var filename = filenameh; 
var filestore = "dataFile-"+filename;
if(localStorage.getItem(filestore) == null) {
const storeit = localStorage.setItem(filestore, filename); 
if(storeit !== null) {
 hexPop("saved");   
} 
}
document.getElementById('newfile').value = ""; 
fileadd.scrollIntoView();

}

for (var key in localStorage) {
  if (key.includes("dataFile-")) {
var thefile =  localStorage.getItem(key);
addFile(thefile);
  }
}


function delFile(filenameh) {
var filename = filenameh;
document.getElementById('filedel').innerText = filename; 
document.getElementById('kick').setAttribute("onclick", "kickFile('"+filename+"')");
hexPop('delete');
    
}

function kickFile(filenameh) {
var filename = filenameh; 
var filestore = "dataFile-"+filename;
localStorage.removeItem(filestore);
hexPop('delete');
document.getElementById(filename).remove();
}


function saveFile() {
var code = document.getElementById('filecon');
var filename = code.getAttribute("file");
var filestore = "dataStore-"+filename;
var filecontent = code.innerText;
localStorage.setItem(filestore, filecontent);
}


function openFile(filenameh) {
saveFile();
var filename = filenameh; 
var filestore = "dataStore-" + filename; 
var code = document.getElementById('filecon');
var filesrc = code.setAttribute("file", filename);
var filecon = localStorage.getItem(filestore);
code.innerText = filecon;
}




window.onload = function() {
var hashex = localStorage.getItem('dataStore-hex.html'); 
if(hashex !== null) {
openFile('hex.html');   
} else {
document.getElementById('filecon').setAttribute("file", "hex.html");
}    
};


setInterval(function() {
var code = document.getElementById('filecon'); 
var numline = document.getElementById('numline');
var codeline = code.scrollHeight; 
var linenum =  codeline / 20; 
var linenum = Math.round(linenum);
const innernum = document.createElement("div");
for(var i = 0; i < linenum; i++) {
const newline = document.createElement("in");
newline.id = "num";
newline.innerText = i;
innernum.appendChild(newline);
}
numline.innerHTML = innernum.innerHTML;
saveFile();
},1000);




document.getElementById('newfile').addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("addfile").click();
  }
});


function playFile() {
saveFile();
var filecon = document.getElementById('filecon').innerText;
var filename = document.getElementById('filecon').getAttribute("file"); 
var filetype = filename.split(".").pop(); 
if(filetype == "js") {

var filecon = "<script>" + filecon + "<\/script>";
    
}
if(filetype == "css") {

var filecon = "<style>" + filecon + "<\/style>";
    
}

if(filetype == "html") {
var filecon = "<!DOCTYPE html><html>" + filecon; 
}

var usage = filecon;
const regex = /<play play="([^"]+)"/g;
const matches = [];
let match; while ((match = regex.exec(usage))) {
  matches.push(match[1]);
}

for(var i = 0; i < matches.length; i++) {
var usename = matches[i];
var usesrc = localStorage.getItem("dataStore-"+usename);
if(usesrc == null) {
var usesrc = "";
}
var usetype = usename.split(".").pop(); 
var usecon = "";
if(usetype == "js") {
var usecon = '<script>' + usesrc + '<\/script>';
}
if(usetype == "css") {
var usecon = '<style>' + usesrc + '<\/style>';
}
var filecon = filecon + usecon;
}


const regexed = /<play play="([^"]+)">/g;

var filecon = filecon.replace(regexed, '');

var filecon = filecon.replace(/src="\//g, 'src="https://pixelcorp.000webhostapp.com/');
var filecon = filecon.replace(/href="\//g, 'href="https://pixelcorp.000webhostapp.com/');


var hexjs = '<script src="/Sum/hex.js?v=1.0"><\/script>';
var filecon = filecon + hexjs;
var result = document.getElementById('result');
document.getElementById('play').style.display = 'block'
result.srcdoc = filecon;
 
const matcho = /<title>(.*?)<\/title>/i.exec(filecon);
var title = matcho ? matcho[1] : null;
if(title == null) {
var title = "hex:root/"+filename; 
}
document.getElementById('playname').innerText = title; 
}

function dwdFile() {
var filename = document.getElementById('filecon').getAttribute("file");
var filestore = "dataStore-" + filename; 
var filecon = localStorage.getItem(filestore); 
var filetype = filename.split(".").pop(); 


var usage = filecon;
const regex = /<play play="([^"]+)"/g;
const matches = [];
let match; while ((match = regex.exec(usage))) {
  matches.push(match[1]);
}

for(var i = 0; i < matches.length; i++) {
var usename = matches[i];
var usesrc = localStorage.getItem("dataStore-"+usename);
if(usesrc == null) {
var usesrc = "";
}
var usetype = usename.split(".").pop(); 
var usecon = "";
if(usetype == "js") {
var usecon = '<script>' + usesrc + '<\/script>';
}
if(usetype == "css") {
var usecon = '<style>' + usesrc + '<\/style>';
}
var filecon = filecon + usecon;
}


const regexed = /<play play="([^"]+)">/g;

var filecon = filecon.replace(regexed, '');
var hexjs = '<script src="/Sum/hex.js?v=1.0"><\/script>';
var filecon = filecon + hexjs;


var filecon = filecon.replace(/src="\//g, 'src="https://pixelcorp.000webhostapp.com/');
var filecon = filecon.replace(/href="\//g, 'href="https://pixelcorp.000webhostapp.com/');


const blob = new Blob([filecon], {type: filetype});
    const fileUrl = URL.createObjectURL(blob);
    const link = document.createElement("a");
    link.download = filename;
    link.href = fileUrl;
    link.click();
    
}

function lover() {
    const formed = document.createElement("form");
formed.action = "result.php";
formed.target = "result";
formed.style.display='none';
formed.method = "POST";
const buyc = document.createElement("textarea");
buyc.name = "thecode"; 
buyc.value = filecon;
formed.appendChild(buyc);
const buyss = document.createElement("input");
buyss.type = "submit";
buyss.name = "buyss";
formed.appendChild(buyss);
document.body.appendChild(formed);
buyss.click();
}




</script>
  
  
  
  </body>



