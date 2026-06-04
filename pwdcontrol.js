function passwordsMatch() {
    const pwd1 = document.getElementById("pwd").value;
    const pwd2 = document.getElementById("pwd-repeat").value;
    
    if (pwd1 !== pwd2){
        document.getElementById("pwd-alert").style.display="block";
        // v takovém případě neodesílat formulář
    }
    else{
        document.getElementById("pwd-alert").style.display="none";
    }
}