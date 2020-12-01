let form = document.getElementById('form2');  //get the form instance

/**validation function */
function validation() {
let capstone = form.elements["C_name"].value;
let first = form.elements["f_name"].value;
let last = form.elements["l_name"].value;
let emails = form.elements["email"].value;
let stid = form.elements["stid"].value;
let dob = form.elements["dob"].value;
let yr = form.elements["grad"].value;
let description = form.elements["desc"].value;


/**regex for email since it is an Ashesi email, it should end with @ashesi.edu.gh */
let Emailreg = /^[\w.\.+w.+\-]+@ashesi.edu.gh$/;  

/**validate inputs and make sure they are not empty */
if (capstone === "") {
    window.alert("capstone name can not be empty");
    return false;
}

        if (first === "" ) {
            window.alert(" student first name can not be empty ");
            return false;
        }

        if (last === "") {
            window.alert("student last name can not be empty");
            return false;
        }
        if (stid=== "") {
            window.alert("student id can not be empty");
            return false;
        }
 

        //this is only for ashesi students, so it should be ashesi email
        if (emails === "" || !Emailreg.test(emails)) {
            window.alert("Email is empty or invalid, it has to end with @ashesi.edu.gh");
            return false;  
        }

        if ($('#select').val() === '0') {
            window.alert("major can not be empty, select one from the drop down");
            return false;
        }

        if (dob=== "") {
            window.alert("date of birth can not be empty can not be empty");
            return false;
        }
        if (yr === "") {
            window.alert("year of graduation can not be empty");
            return false;
        }
        if (description === "") {
            window.alert("description can not be empty");
            return false;
        }
        else{  
           //if(confirm("User successfully edited")) window.history.back() ;
           window.alert("User successfully edited");
           
        }
}