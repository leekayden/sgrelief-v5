<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css">

    <title>SGreliefteachers Home</title>
</head>

<body>
    <div class="container">
        <aside class="container-aside">
            <div class="containerAside-header">
                <div class="asideHeader-userInformations">
                    <img src="" alt="" class="asideHeader-imgUserImage">
                    <h3 class="asideHeader-lblUserName">SGreliefteachers</h3>
                    <div class="asideHeader-socialsBox">
                        <a href="#" class="asideHeader-btnSocial"><i class="bi-twitter"></i></a>
                        <a href="#" class="asideHeader-btnSocial"><i class="bi-facebook"></i></a>
                        <a href="#" class="asideHeader-btnSocial"><i class="bi-instagram"></i></a>
                        <a href="#" class="asideHeader-btnSocial"><i class="bi-skype"></i></a>
                        <a href="#" class="asideHeader-btnSocial"><i class="bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="containerAside-main">
                <div class="asideMain-menuItemsBox">
                    <div class="asideMain-menuItem">
                        <a href="#" class="mainMenu-btnMenuItemSelected"><i class="bi-house"></i> <span
                                class="mainMenu-lblMenuItem">Home</span></a>
                    </div>
                    <div class="asideMain-menuItem">
                        <a href="/jobs" class="mainMenu-btnMenuItem"><i class="bi-book"></i> <span
                            class="mainMenu-lblMenuItem">Jobs</span></a>
                    </div>
                    <div class="asideMain-menuItem">
                        <a href="#" class="mainMenu-btnMenuItem"><i class="bi-hdd"></i> <span
                            class="mainMenu-lblMenuItem">Resources</span></a>
                    </div>
                    <div class="asideMain-menuItem">
                        <a href="#" class="mainMenu-btnMenuItem"><i class="bi-server"></i> <span
                            class="mainMenu-lblMenuItem">App Database</span></a>
                    </div>
                    <div class="asideMain-menuItem">
                        <a href="#" class="mainMenu-btnMenuItem"><i class="bi-translate"></i><span class="mainMenu-lblMenuItem">华文版本</span></a>
                    </div>
                    <div class="asideMain-menuItem">

                        <a href="#" class="mainMenu-btnMenuItem"><i class="bi-envelope"></i> <span
                            class="mainMenu-lblMenuItem">Contact</span></a>
                    </div>
                </div>
            </div>
            <div class="containerAside-footer">
                <p class="asideFooter-lblCopyRight">&copy; Copyright <strong>Cloudserve Tech</strong></p>
            </div>
        </aside>
        <main class="container-main">
            <div class="containerMain-backgroundFilter"></div>
            <h1 class="containerMain-lblName">SGreliefteachers</h1>
            <p class="containerMain-lblAbility">We are matchmakers for <span>teachers</span></p>
            <button onclick="ShowMenu()" class="containerMain-ShowMenu"><i class="bi-list"></i></button>
            <br/>
            <p class="containerMain-lblAbility" style="max-width: 500px;">At SGreliefteachers, we help teachers who needs relief teachers that can carry out lessons for them. We also help relief teachers find jobs from teachers who require them as well!</p>
        </main>
    </div>
</body>

</html>

<script src="./script.js"></script>