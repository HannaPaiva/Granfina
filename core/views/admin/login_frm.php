

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

<div class="heroheadadmin" style="background-color:#F5F7FF">
   <div class="container-fluid">

   </div>
</div>



<!-- Hero Start -->






<!-- Class Start -->
<div class="class">
   <div class="container">



      <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">


         <p>Inicie a sua sessão de admin</p>
         <h2>Fazer Login </h2>
      </div>

      <div class="row class-container">
         <div class="col-lg-12 col-md-12 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
            <div class="class-wrap">

            

                  <div class="col-md-5 mx-auto">
                     <div class="myform form ">

                     <form action="?a=admin_login_submit" method="post">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Admin </label>
                              <input type="email" name="text_admin" id="" placeholder="Admin" required class="form-control">
                              <br>
                           </div>
                           <div class="form-group">
                              <label for="">Password</label>
                              <p>
                              <input type="password" name="text_password" id="pass" placeholder="Password" required class="form-control" style="display:inline-block">
                                  
                                 <i class="bi bi-eye-slash" id="togglePassword"></i>
                              </p>
                           </div>
                           <div class="form-group">
                 
              
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>

                     </div>

                     </form>

              <br><br><br>

                     <div class="col-md-12 ">
                   
                   <p class="text-center ">Ao fazer login você aceita os nossos <a href="#">Termos de utilização</a></p>
                     </div>
                    
                    


                  </div>


                  <?php if (isset($_SESSION['erro'])) : ?>
                    <div class="alert alert-danger text-center">
                        <?= $_SESSION['erro'] ?>
                        <?php unset($_SESSION['erro']) ?>
                    </div>


                    <?php endif; ?>




               </div>
            </div>
           
         </div>

      </div>
   </div>
</div>
</div>
<!-- Class End -->







<script>
   const togglePassword = document.querySelector("#togglePassword");
   const password = document.querySelector("#pass");

   togglePassword.addEventListener("click", function() {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
   });
</script>