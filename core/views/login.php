<?php

// $email_log = $_POST["email"];
// $senha_log = $_POST["senha"];

// $select_login="SELECT * FROM tb_login where email_login='$email_log' and senha_login='$senha_log' ";
// $query_login=mysqli_query($conexao,$select_login); 
// $result=mysqli_fetch_array($query_login);

// if ($result>0){
// 	$logado=1; 
// 	$_SESSION['logado']=$logado;
// 	$_SESSION['email_user']=$email_log;
// 	$_SESSION['id_login']=$result["id_login"];
// 	echo '<script>window.location.href = "index.php"</script>';
// }

// else{
// 	echo "E-mail ou/e senha incorretos!";
// }

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!-- Hero Start -->
<div class="herohead">
   <div class="container-fluid">

   </div>
</div>





<!-- Class Start -->
<div class="class">
   <div class="container">



      <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">


         <p>Inicie a sua sessão</p>
         <h2>Fazer Login</h2>
      </div>

      <div class="row class-container">
         <div class="col-lg-12 col-md-12 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
            <div class="class-wrap">

            

                  <div class="col-md-5 mx-auto">
                     <div class="myform form ">

                        <form action="?a=login_submit" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email </label>
                              <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="email">
                              <br>
                           </div>
                           <div class="form-group">
                              <label for="">Password</label>
                              <p>
                                 <input type="password" id="pass" name="senha" class="form-control" style="display:inline-block" aria-describedby="emailHelp" placeholder="senha">
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