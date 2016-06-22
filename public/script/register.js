$(document).ready( function() {

    $('#register').click(function() {

        var name = document.getElementById('fullname').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('password').value;
        var conpass = document.getElementById('conPassword').value;
        var gender = document.getElementsByName('gender');
        var genderData = "";
        if(gender[0].checked) {
            genderData = gender[0].value;
        }
        else {
            genderData = gender[1].value;
        }
        var grade = document.getElementsByName('radio');
        var gradeData = "";
        if(grade[0].checked) {
            gradeData = grade[0].value;
        }
        else if(grade[1].checked){
            gradeData = grade[1].value;
        }
        else {
            gradeData = grade[2].value;
        }
        var dob = document.getElementById('dob').value;

        if(name=="" || email=="" || pass=="" || conpass=="" || genderData=="" || gradeData=="" || dob=="") {
            swal({
                title: "Invalid!",
                text: "form not complete",
                timer: 1500,
                showConfirmButton: false
            });
        }
        else if(conpass!=pass) {
            swal({
                title: "Invalid!",
                text: "confirm password must same with password",
                timer: 1500,
                showConfirmButton: false
            });
        }
        else {
            alert(dob);
        }

    });
});
