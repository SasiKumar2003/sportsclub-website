function joinClub(){
    var a = document.getElementById("email");
    if (a.value == ''){
        alert("Please enter the required details...");
        return false;
    }
    if(!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(a.value))){
        alert("please enter a valid email id");
        return false;
    }
    else{
        alert("you have joined");
        document.getElementById("hi").innerHTML="";
    }
}
