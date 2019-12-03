document.getElementById("guestbook-form").onsubmit = validate;
function validate() {
    let isValid = true;

    var errors = document.getElementsByClassName("err");
    for (var i=0; i<errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    var first = document.getElementById("firstName").value;
    if (first == "") {
        var errfirst = document.getElementById("err-fname");
        errfirst.style.visibility = "visible";
        isValid = false;
    }




    var last = document.getElementById("lastName").value;
    if (last == "") {
        var errlast = document.getElementById("err-lname");
        errlast.style.visibility = "visible";
        isValid = false;
   
    }
    


    var size = document.getElementById("size-selection").value;
    if (size == "none") {
        var errSize = document.getElementById("err-size");
        errSize.style.visibility = "visible";
        isValid = false;
        
    }



    var method = document.getElementsByName("delivery-method");
    var methodValue="";
    for (let index = 0; index < method.length; index++) {
        if (method[index].checked) {
            methodValue = method[index].value;
        }
        
    }
    if (methodValue =="") {
        var errMethod = document.getElementById("err-method");
        errMethod.style.visibility = "visible";
        isValid = false;
    }



    var address = document.getElementById("address").value;
    
    if (address == "" && methodValue == "delivery"){
        var errAddress = document.getElementById("err-address");
        errAddress.style.visibility = "visible";

        isValid = false;
    }
    

    return isValid;
}

