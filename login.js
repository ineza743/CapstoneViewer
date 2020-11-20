let form = document.getElementById('login-form');  //get the form instance

/**validation function */
function validation() {
let emails = form.elements["email"].value;
let password = form.elements["password"].value;
let Emailreg = /^[\w.\.+w.+\-]+@ashesi.edu.gh$/;  
  
/**validate inputs and make sure they are not empty */
        if (emails === "" || !Emailreg.test(emails)) {
            window.alert("Email is empty or invalid, it has to end with @ashesi.edu.gh");
            return false;  
        }

        if (password === "") {
            window.alert("password can not be empty");
            return false;
        }

}



    

    
 
   

