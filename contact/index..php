<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact us</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="center">
<button class="form__btn" onclick="history.back()">
  <i class="material-icons">home</i>&nbsp;&nbsp;Back&nbsp;&nbsp;
</button>
<form action="https://forms.cloudservetechcentral.com/process.php" method="post">
  <input type="hidden" name="form_tools_form_id" value="10" />
  <div class="container">
  
      <h1 class="title">Contact us</h1>
    
      <div class="form form__1">
        <label for="name" class="form__label">Full name</label>
        <input type="text" class="form__input" placeholder="" id="name" name="name">
      </div>
    
      <div class="form form__2">
        <label for="email" class="form__label">Email address</label>
        <input type="email" class="form__input" placeholder="" id="email" name="email">
      </div>
    
      <div class="form form__3">
        <label for="message" class="form__label">Your message</label>
        <input type="text" class="form__input" placeholder="" id="message" name="message">
      </div>
    
      <button class="form__btn" type="submit">
        <span class="form__btn--visible"><p>Submit</p> 
          <i class="material-icons">arrow_forward</i>
        </span>
        <span class="form__btn--invisible">Message sent! Thanks!</span>
      </button>
  
    <div class="container-mail">
      <div class="mail">
        <div class="mail__back"></div>
        <div class="mail__top"></div>
        <div class="mail__letter">
          <div class="mail__letter-square">
          </div>
          <div class="mail__letter-lines">
          </div>
        </div>
        <div class="mail__left"></div>
        <div class="mail__right"></div>
        <div class="mail__bottom"></div>
      </div>
    </div>
    
  </div>
  
</form>
<button class="form__btn" onclick="location.href='https://wa.me/6581133596'">
  <i class="material-icons">whatsapp</i>&nbsp;&nbsp;WhatsApp us instead&nbsp;&nbsp;
</button>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script src="./script.js"></script>

</body>
</html>
