<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Consent Example</title>
    <style>
        #cookieConsent {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgb(56,83,216);;
            color: white;
            text-align: center;
            padding: 20px;
            display: none;
        }
        #cookieConsent button {
            margin: 10px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div id="cookieConsent">
    
        <p style=" font-family: 'Montserrat', sans-serif;  ">This website uses cookies to enhance your experience. Do you accept the use of cookies?</p>
        <button id="acceptCookies">Accept</button>
        <button id="denyCookies">Deny</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (!getCookie("userConsent")) {
                document.getElementById('cookieConsent').style.display = 'block';
            }

            document.getElementById('acceptCookies').addEventListener('click', function() {
                setCookie("userConsent", "accepted", 365);
                document.getElementById('cookieConsent').style.display = 'none';
            });

            document.getElementById('denyCookies').addEventListener('click', function() {
                setCookie("userConsent", "denied", 365);
                document.getElementById('cookieConsent').style.display = 'none';
            });
        });

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
    </script>
</body>
</html>
<?php
if (!isset($_COOKIE["userConsent"])) {
    // User hasn't accepted or denied cookies
    echo '<div id="cookieConsent">
            <p>This website uses cookies to enhance your experience. Do you accept the use of cookies?</p>
            <form method="POST">
                <button name="cookieConsent" value="accepted">Accept</button>
                <button name="cookieConsent" value="denied">Deny</button>
            </form>
          </div>';
}
?>
