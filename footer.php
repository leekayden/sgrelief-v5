<!-- <footer id="contactus" style="background-color: #272727;">
    <div class="container" style="width: 100%;">
				<div class="row justify-content-center">
					<div class="col text-center">
                        <img src="img/ftrlg.svg" style="width:60px;" alt="">
                        <h2 class="footer-heading"> 
                        <a href="index.php" style="color: #ffffff; font-family: 'Sora', sans-serif; font-size: 50px; text-decoration: none;"> SGrelief </a> 
                        </h2>
                    </div>	
                                                
                    <div class="menu text-center">
                    <p>
                    <a href="index.php" style="color: #ffd6a5; padding-top: 50px; padding-right: 40px; font-family:Comfortaa;"> HOME </a> 
                    <a href="#jbs" style="color: #ffd6a5; padding-top: 50px; padding-right: 40px; font-family:Comfortaa;"> JOBS </a> 
                    <a href="mailto: rakshith.19cs121@sode-edu.in" style="color: #ffd6a5; padding-top: 50px; font-family:Comfortaa;"> CONTACT </a>
                    </p>
                    </div>
					
				</div>
				
                <div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyrigt">
                        <a style="color: #9FA4A9; text-decoration: none;"> &copy; 2022 CloudserveTech | All rights reserved | Developped by </a> 
                        <a href="https://www.linkedin.com/in/rakshixh" style="color: #FDFFAC;">Kayden Lee</a>
					    </p>
					</div>
				</div>
    </div>
</footer> -->
<style>
    * {
        user-select: none;
    }

    /* basic styling */
    body {
        background-color: #888888;
    }

    /* end basic styling */
    .btn-primary,
    .btn-primary:active,
    .btn-primary:visited {
        background-color: #888888;
        border-color: #808080;
    }

    .btn-primary:hover {
        background-color: #808080 !important;
        border-color: #808080 !important;
    }

    /* footer */
    footer>a {
        color: #6c757d;
    }

    footer>a:hover {
        color: #fec503;
        text-decoration: none;
    }

    ::selection {
        background: #fec503;
        text-shadow: none;
    }

    footer {
        padding: 2rem 0;
        background-color: #212529;
    }

    .footer-column:not(:first-child) {
        padding-top: 2rem;
    }

    @media (min-width: 768px) {
        .footer-column:not(:first-child) {
            padding-top: 0rem;
        }
    }

    .footer-column {
        text-align: center;
    }

    .footer-column .nav-item .nav-link {
        padding: 0.1rem 0;
    }

    .footer-column .nav-item span.nav-link {
        color: #6c757d;
    }

    .footer-column .nav-item span.footer-title {
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
    }

    .footer-column .nav-item .fas {
        margin-right: 0.5rem;
    }

    .footer-column ul {
        display: inline-block;
    }

    @media (min-width: 768px) {
        .footer-column ul {
            text-align: left;
        }
    }

    ul.social-buttons {
        margin-bottom: 0;
    }

    ul.social-buttons li a:active,
    ul.social-buttons li a:focus,
    ul.social-buttons li a:hover {
        background-color: #0056b3;
    }

    ul.social-buttons li a {
        font-size: 20px;
        line-height: 40px;
        display: block;
        width: 40px;
        height: 40px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        color: #fff;
        border-radius: 100%;
        outline: 0;
        background-color: #1a1d20;
    }

    footer .quick-links {
        font-size: 90%;
        line-height: 40px;
        margin-bottom: 0;
        text-transform: none;
        font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .copyright {
        color: white;
        background-color: #212529;
    }

    .fa-ellipsis-h {
        color: white;
        padding: 2rem 0;
    }

    .line-top {
        background-color: rgb(158, 158, 158);
        color: rgba(0, 0, 0, 1);
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        height: 10px;
        left: -1px;
        position: absolute;
        top: -1px;
        width: calc(100% + 2px);
    }

    .spin {
        animation: w3-spin 2s infinite linear;
    }

    @keyframes w3-spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(359deg);
        }
    }

    .animate-fading {
        animation: fading 10s infinite;
    }

    @keyframes fading {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    .animate-opacity {
        animation: opac 0.8s;
    }

    @keyframes opac {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animate-top {
        position: relative;
        animation: animatetop 0.4s;
    }

    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0;
        }

        to {
            top: 0;
            opacity: 1;
        }
    }

    .animate-left {
        position: relative;
        animation: animateleft 0.4s;
    }

    @keyframes animateleft {
        from {
            left: -300px;
            opacity: 0;
        }

        to {
            left: 0;
            opacity: 1;
        }
    }

    .animate-right {
        position: relative;
        animation: animateright 0.4s;
    }

    @keyframes animateright {
        from {
            right: -300px;
            opacity: 0;
        }

        to {
            right: 0;
            opacity: 1;
        }
    }

    .animate-bottom {
        position: relative;
        animation: animatebottom 0.4s;
    }

    @keyframes animatebottom {
        from {
            bottom: -300px;
            opacity: 0;
        }

        to {
            bottom: 0;
            opacity: 1;
        }
    }

    * {
        animation: animatezoom 0.6s;
    }

    @keyframes animatezoom {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }

    .animate-input {
        transition: width 0.4s ease-in-out;
    }

    .animate-input:focus {
        width: 100% !important;
    }

    .label-float {
        position: relative;
        padding-top: 13px;
    }

    .label-float input {
        border: 1px solid lightgrey;
        border-radius: 5px;
        outline: none;
        min-width: 250px;
        padding: 15px 20px;
        font-size: 16px;
        transition: all 0.1s linear;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        -webkit-appearance: none;
    }

    .label-float input:focus {
        border: 2px solid #808080;
    }

    .label-float input::placeholder {
        color: transparent;
    }

    .label-float label {
        pointer-events: none;
        position: absolute;
        top: calc(50% - 8px);
        left: 15px;
        transition: all 0.1s linear;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        background-color: white;
        padding: 5px;
        box-sizing: border-box;
    }

    .label-float input:required:invalid+label {
        color: red;
    }

    .label-float input:focus:required:invalid {
        border: 2px solid red;
    }

    .label-float input:required:invalid+label:before {
        content: "*";
    }

    .label-float input:focus+label,
    .label-float input:not(:placeholder-shown)+label {
        font-size: 13px;
        top: 0;
        color: #808080;
    }
</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Services</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://forms.cloudservetechcentral.com" target="_blank">CloudserveForms</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Site</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/learn">Learn more</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Contact & Support</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sgrelief.cloudservetechcentral.com/learn"><i class="fas fa-comments"></i>Support articles (Not available yet)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i>Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/feedback"><i class="fas fa-star"></i>Give feedback (Not available yet)</a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br>

        <div class="row text-center">
            <div class="col-md-4 box">
                <span class="copyright quick-links">&copy;&nbsp;Copyright&nbsp;<script>
                        document.write(new Date().getFullYear())
                    </script>&nbsp;<strong>SGreliefteaching</strong>
                </span>
            </div>
            <div class="col-md-4 box">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/cloudserve_tech/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://wa.me/6581133596" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/kaydenlee-/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 box">
                <ul class="list-inline quick-links">
                    <li class="list-inline-item">
                        <a href="/privacy-policy">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/terms-of-use">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>