<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        // You can redirect back to the form or display an error message
        exit;
    }

    // Name validation
    if (empty($name)) {
        echo "Name is required";
        exit;
    }

    // Password validation
    if (empty($password)) {
        echo "Password is required";
        exit;
    }

    // All fields passed validation, proceed with further processing
    // e.g., check credentials against a database, perform login logic, etc.
    // ...
}
?>





<html>

<head>
    <title>
        My Ticket project
    </title>
    <style>
        td.pic {
            background-image: url(volcano.PNG);
            color: black;
            font-size: 40px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        .form {
            text-align: center;
        }
        
        .img {
            position: absolute;
            height: 20px;
            top: 330px;
            right: 60px;
            cursor: pointer;
        }
    </style>
</head>

<body bgcolor="grey">

    <table border="0" width="100%" height="100%">
        <tr>
            <td class="pic" colspan="6">
                <header>
                    <h1 align="center"> <b> WE LINK PEOPLE TO THE PLACE </b> </h1>

                </header>
            </td>
        </tr>
        <tr height="25" style="background-color: wheat;">
            <td width="150"><a href="technology.html" target="">HOME</a></td>
            <td width="150"><a href="signup.html" target="">REGISTRATION</a></td>
            <td width="150"><a href="login.html" target="">LOGIN</a></td>
            <td width="150">
                <a href="booking.html" target="">BOOKING</a>
            </td>
            <td width="150"><a href="service.html" target="">SERVICES</a></td>

            <td><a href="about.html" target="">About Us</a></td>


        </tr>
        <tr height="35">
            <td colspan="4">
                <!--Headings-->

                <h2 align="center">
                    <marquee  direction="left">
                        <em> My VOLCANO Online Ticket project </em>
                    </marquee> </h2>


            </td>

        </tr>
        <tr height="300">
            <td colspan="2" width="25%">
                <img src="nziza.JPG" width=100%px>

            </td>
            <td colspan="4">
                <form class="form" action="booking.html" method="POST">
                    FIRSTNAME: <input type="text" name="name" value="" id="fname" onkeyup="changed()" placeholder="Firstname">
                    <br>
                    <br> LASTNAME: <input type="text" name="name" placeholder="Lastname">
                    <br>
                    <br> EMAIL: <input type="email"  value="" placeholder="Your@email" name="email" id="email" onkeyup="change()">
                    <br>
                    <br> PASSWORD:<input oninput="return formvalid()" type="password" required name="password" placeholder="Password" id="pass">
                    <img class="img" src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png" onclick="show()" id="showimg">

                    <span id="vaild-pass"></span> <br>

                    <p class="message"><a href="#">Forgot your password?</a></p>
                    <div class=>
                        <p>Create an Account <a href="signup.html">Sign up</a>.</p>
                    </div>





                    <input type="submit" onclick="submission()">
                    <script>
                        function submission() {
                            confirm("Are you sure you enter correct details !");
                        }
                    </script>
                </form>
                </div>
            </td>


        </tr>

        <tr height="70">
            <td colspan="6">
                <footer style="background-color:rgb(5, 15, 14); color: white; height:100% ; align:center;">&copy;copyright Mr.Donatien</footer>
            </td>
        </tr>
    </table>

</body>
<script>
    function formvalid() {
        var vaildpass = document.getElementById("pass").value;

        if (vaildpass.length <= 8 || vaildpass.length >= 20) {
            document.getElementById("vaild-pass").innerHTML = "Minimum 8 characters";
            return false;
        } else {
            document.getElementById("vaild-pass").innerHTML = "";
        }
    }

    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
            document.getElementById("showimg").src =
                "https://static.thenounproject.com/png/777494-200.png";
        } else {
            x.type = "password";
            document.getElementById("showimg").src =
                "https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png";
        }
    }

    function change() {
        var em = document.getElementById("email");
        em.value = em.value.toLowerCase();
    }

    function changed() {
        var em = document.getElementById("fname");
        em.value = em.value.toUpperCase();
    }
</script>


</html>