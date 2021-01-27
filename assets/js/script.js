
if(document.getElementById('name')){

    var button = document.getElementById("btn1");
    var firstname = document.getElementById("name");
    var lastname = document.getElementById("lastname");
    var mail = document.getElementById("mail");
    var cp = document.getElementById("cp");
    button.disabled = true;
    button.addEventListener("mouseenter", function (event) {
        
        if (firstname.style.backgroundColor == 'green' && lastname.style.backgroundColor == 'green' &&
        mail.style.backgroundColor == 'green' && mail.style.backgroundColor == 'green' &&
        cp.style.backgroundColor == 'green'){
            event.preventDefault();
            button.disabled = false;
        }   
        else {
            button.disabled = true;
        }
    })
    

    firstname.addEventListener("keyup", function (event) {
        
        var nameRegex = new RegExp("^([a-zA-Z]+)$", "g")
        if (nameRegex.test(this.value) == false){
            event.preventDefault();
            this.style.backgroundColor = 'red'
            button.disabled = true;
        }   
        else {
            this.style.backgroundColor = 'green'
            button.disabled = false;
            
        }
    })

    lastname.addEventListener("keyup", function (event) {
        
        var nameRegex = new RegExp("^([a-zA-Z]+)$", "g")
        if (nameRegex.test(this.value) == false){
            event.preventDefault();
            this.style.backgroundColor = 'red'
            button.disabled = true;
            
        }
        else {
            this.style.backgroundColor = 'green'
            button.disabled = false;
        }
    })

    mail.addEventListener("keyup", function (event) {
        
        var nameRegex = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, "i")
        if (nameRegex.test(this.value) == false){
            event.preventDefault();
            this.style.backgroundColor = 'red'
            button.disabled = true;
          
        }
        else {
            this.style.backgroundColor = 'green'
            button.disabled = false;
           
        }

    })

    cp.addEventListener("keyup", function (event) {
        
        var nameRegex = new RegExp('^(([0-8][0-9])|(9[0-5]))[0-9]{3}$')
        if (nameRegex.test(this.value) == false){
            event.preventDefault();
            this.style.backgroundColor = 'red'
            button.disabled = true;
          
        }
        else {
            this.style.backgroundColor = 'green'
            button.disabled = false;
            
        }

    })
}