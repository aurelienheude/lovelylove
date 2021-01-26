
if(document.getElementById('name')){

    var button = document.getElementById("btn1");

    document.getElementById("name").addEventListener("keyup", function (event) {
        
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

    document.getElementById("lastname").addEventListener("keyup", function (event) {
        
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

    document.getElementById("mail").addEventListener("keyup", function (event) {
        
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

    document.getElementById("cp").addEventListener("keyup", function (event) {
        
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