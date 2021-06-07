<!DOCTYPE html> 
<html>
   <head>
      <title>Login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/loader.css">
      <link rel="stylesheet" href="css/sky-forms.css">
   </head>
   <body class="bg-cyan">
      <div id="loader"></div>
      <div class="body body-s">
         <form action="login_php.php" name="login" class="sky-form">
            <header>Login form</header>
            <fieldset>
               <section>
                  <div class="row">
                     <label class="label col col-4">UserName</label>
                     <div class="col col-8">
                        <label class="input">
                        <i class="icon-append icon-user"></i>
                        <input type="text" name="user_name">
                        </label>
                     </div>
                  </div>
               </section>
               <section>
                  <div class="row">
                     <label class="label col col-4">Password</label>
                     <div class="col col-8">
                        <label class="input">
                        <i class="icon-append icon-lock"></i>
                        <input type="password" name="user_password">
                        </label>
                     </div>
                  </div>
               </section>
               <section>
                  <div class="row">
                     <div class="col col-8">
                        <div class="note"><a href="forgot_pass.html">Forgot password?</a></div>
                     </div>
                  </div>
               </section>
            </fieldset>
            <footer>
               <a href="registration.php" class="button button-secondary">Create An account</a>
               <button type="submit" class="button">Log in</button>
            </footer>
         </form>
      </div>
      <script src="js/loader.js"></script>
   </body>
</html>