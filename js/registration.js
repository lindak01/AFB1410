$(document).ready(function() {
    $("#join").click(function() {
        var fname = $(".fname").val();
        var lname = $(".lname").val();
        var uname = $(".uname").val();
        var email = $(".email").val();
        var cemail = $(".cemail").val();
        var password = $(".password").val();
        var cpassword = $(".cpassword").val();
        if (fname == '' || lname == '' || uname == '' || email == '' || cemail == '' || password == '' || cpassword == '') {
            alert("Please fill in all fields!!")
        } else if ((password.length) < 8) {
            alert("Password should at least be 8 characters in length!!");
        } else if (!(password).match(cpassword)) {
            alert("Your passwords don't match. Try again.");
        } else if (!(email).match(cemail)) {
            alert("Your emails dont' match. Try again.");
        } else {
            $.post("../php/register.php", {
                fname1: fname,
                lname1: lname,
                uname1: uname,
                email1: email,
                password1: password
            }, function(data) {
                if (data == 'You have successfully registered!') {
                    $("form")[0].reset();
                }
                aler(data);
            });
        }
    });
});