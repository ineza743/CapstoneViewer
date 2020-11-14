let form = document.getElementById('form');  //get the form instance

/**validation function */
function validation() {
let first = form.elements["f_name"].value;
let last = form.elements["l_name"].value;
let emails = form.elements["email"].value;
let password = form.elements["pass"].value;

/**regex for email since it is an Ashesi email, it should end with @ashesi.edu.gh */
let Emailreg = /^[\w.\.+w.+\-]+@ashesi.edu.gh$/;   
/**validate inputs and make sure they are not empty */
        if (first === "" ) {
            window.alert("first name can not be empty ");
            return false;
        }

        if (last === "") {
            window.alert("last name can not be empty");
            return false;
        }

        //process only if the user has an Ashesi email
        if (emails === "" || !Emailreg.test(emails)) {
            window.alert("Email is empty or invalid, it has to be an Ashesi email!!");
            return false;  
        }

        if (password === "") {
            window.alert("password can not be empty");
            return false;
        }

}


    

    
 
   

