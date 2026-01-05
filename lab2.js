alert("welcome to Movie Blast");
var userinput=document.querySelector("input");
let movienameinput=document.querySelector("input");
let emailinput=document.querySelector("input");
let passwordinput=document.querySelector("input");
let mobileinput=document.querySelector("input");
let reviewinput=document.querySelector("input");

function downloadMovie(){
    let username=userinput.value;
    let moviename=movienameinput.value;
    if (username==" "||moviename==" " )
    {
        alert("Please fill username and Movie name");
    }
    let otp =prompt("Enter your otp?");
    if (otp==""||otp==null){
        alert("otp is required to download the movie");
    }
    let confirmDownload=confirm("Do you want to download"+ moviename +"?");
    if(confirmDownload){
        alert("download successfully");
    }
    else{
        alert("Download cancelled");
    }
    console.log("username:" + username);
    console.log("moviename:"+ moviename);
    console.log(moviename +" movie downloaded");
}
function submitform(){
    alert("successfully form submitted");
    console.log("successfully form submitted");
}
function downloadForm(){
    alert(" form is downloaded");
}


