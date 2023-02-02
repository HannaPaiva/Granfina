<!-- <php ?> -->
<?php use core\classes\Studio; ?>

 <?php
?>
<div>
    <!--LOGADO -->
    <?php if(Studio::clienteLogado()) : ?>
        <?php include "cliente_logado.php"; ?>
    
<?php else : ?>
  
    <!-- 343148, cor escura  -->
    <!-- 49465B, escuro mais clarinho -->
    <!-- F7CAC9, o rosa -->
    <!-- C36F98, roxinho do botao de registar -->
               <!-- Hero Start -->
               <div class="hero">
            <div class="container-fluid">
               <br><br><br><br>
                    <center>
                        <div class="hero-text">
                            <h1> Studio de Beleza <span> Granfina</span></h1>
                            <p>
                                Venha já conhecer a melhor versão de você mesma.
                            </p>
                            <p>
                                Faça já a sua marcação!
                            </p>
                         
                            <div class="hero-btn">
                            
                                <a class="btn" href="?a=novo_cliente">Fazer Marcação!</a>
                            </div>
                
                    </center>
                </div>
            </div>
        </div>


        <!-- About Start -->
        <div id = "sobre">
        <div class="about wow fadeInUp" data-wow-delay="0.1s" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="assets/images/slides/slide4.jpg" alt="Image" style=" border-radius: 8px;  ">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p >Sobre nós</p>
                            <h2>Bem-vinda ao nosso espaço!</h2>
                        </div>
                        <div class="about-text">


                            <p style="text-align: justify;">
                            Há meses o Studio de Beleza Granfina vem a transformar a vida e autoestima de dezenas de mulheres no centro de Faro. 
                        Nós somos um grupo de profissionais da beleza cujo objetivo é fazer de você, a nossa cliente, a mais bonita e confiante possível.
                            </p>
                            <p style="text-align: justify;">
                            Pretendemos, num ambiente calmo e acolhedor, te dar um tratamento mais do que nobre, digno do nome "Granfina", e concretizando todos os seus objetivos. 
                        O limite da sua nova versão é apenas a sua vontade. 

                            </p>
                            <br><br><br>
                            <!-- <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service" id = "servicos" >
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>O que nós fazemos</p>
                    <h2>Os nossos serviços</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item" style=" position: relative;">
                            <div class="service-icon">
                            <i> <img src="assets/images/icons/salon.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Cabeleleiro</h3>
                            <p>
                                Os nossos produtos, tratamentos capilares, 
                                madeixas, novas colorações, progressivas e cortes irão te fascinar!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item active">
                            <div class="service-icon">
                            <i> <img src="assets/images/icons/manicura.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Manicura e pedicura</h3>
                            <p>
                               Fazemos alongamentos em unhas em gel ou em fibra, 
                               tratamento de cutículas e <span style = "font-style: italic;">nail art</span>. Todas as tecnologias mais recentes! 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                            <i> <img src="assets/images/icons/massagista.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Massagista</h3>
                            <p>
                            Pretendemos dar uma nova vida a sua pele e te relaxar ao mesmo tempo.
                             Deixe o estresse ir embora ao sentir o melhor que temos a oferecer.    
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                            <i> <img src="assets/images/icons/aromaterapia.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Perfumaria e aromaterapista</h3>
                            <p>
                               Conheça as propriedades curativas e terapêuticas dos óleos essenciais, e lave para casa os melhores e mais cheirosos produtos!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-icon">
                            <i> <img src="assets/images/icons/depilacao.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Depiladora</h3>
                            <p>
                                A sua pele livre de pelos, da forma que preferir: seja à laser, à luz pulsada, à linha ou à cera! Estamos preparadas para te atender!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i> <img src="assets/images/icons/cosmetics.png" width="45px" height="45px"></i>
                            </div>
                            <h3>Maquilhadora e limpeza de pele</h3>
                            <p>
                                Faça-se brilhar em qualquer evento com as nossas técnicas, produtos de maquilhagem e tratamentos para a sua pele!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        
        
        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Descontos e promoções</p>
                    <h2>Ganhe <span>30%</span> de desconto na primeira marcação</h2>
                </div>
             
            </div>
        </div>
        <!-- Discount End -->
        
        
        <!-- Price Start -->
        <div class="price" id = "precos">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Pacotes de beleza</p>
                    <h2>Planos e pacotes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Pack para cabelo</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small></small>60€<span></span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Lavagem especial</li>
                                        <li>Hidratação</li>
                                        <li>Corte</li>
                                        <li>Progressiva</li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="/?a=login">Ver agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-status">
                                    <span>Popular</span>
                                </div>
                                <div class="price-title">
                                    <h2>Unhas</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small></small>40€<span></span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                      <li>Pé & mão</li>
                                      <li>Remoção e tratamento de cutículas</li>
                                      <li>Alongamento: em gel ou fibra de vidro</li>
                                      <li><span style = "font-style: italic;">nail art</span></li>
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="/?a=login">Ver agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Depilação</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small></small>35€<span>/sessão</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>A laser de luz pulsada</li>
                                        <li>A laser de Alexandrite</li>
                                        <li>Cera quente</li>
                                        <li>Bandas de cera fria</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="/?a=login">Ver agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
        <!-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>O que os nossos clientes dizem!</p>
                    <h2>Testemunhos</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team" id = "equipa">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Conheça os nossos funcionários!</p>
                    <h2>A equipa Granfina </h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="assets/images/slides/simoni.png" alt="Blog">
                                <div class="team-social">
                               
                                    <!-- <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                                    <a href="https://www.instagram.com/s.b.r.nails/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Simoni Rodrigues</h2>
                                <p>Massagista e depiladora</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="assets/images/slides/angela.png" alt="Blog">
                                <div class="team-social">
                           
                                    <a href="https://www.instagram.com/mariaangelaprioste/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Maria Ângela Prioste</h2>
                                <p>Cabeleileira</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="assets/images/slides/sandra.png" alt="Blog">
                                <div class="team-social">
                            
                               
                                    <a href="https://www.instagram.com/sandrinhanails16/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Sandra</h2>
                                <p>Manicura e Pedicura</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                            <img src="assets/images/slides/brena.png" alt="Blog">
                                <div class="team-social">
                              
                                    <a href="https://www.facebook.com/brenateo" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                 
                                    <a href="https://www.instagram.com/brenateo/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Brena teodoro</h2>
                                <p>Cabeleileira, perfumista</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
        <div class="blog" id = "galeria">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Galeria: os nossos trabalhos</p>
                    <h2>Cabeleleiro</h2>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/slides/antes-depois-1.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Morena iluminada</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Cabeleleiro</p>
                                <p><i class="far fa-calendar-alt"></i>2022</p>
                                <!-- <p><i class="far fa-comments"></i>5</p> -->
                            </div>
                          
                            <a class="btn" href="/?a=login">Ver mais <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                        <img src="assets/images/slides/antes-depois-2.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Implante capilar</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Cabeleileiro</p>
                                <p><i class="far fa-calendar-alt"></i>2022</p>
                                <!-- <p><i class="far fa-comments"></i>5</p> -->
                            </div>
                            
                            <a class="btn" href="/?a=login">Ver mais <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                        <img src="assets/images/slides/antes-depois-3.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Madeixas loiras</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Cabeleileiro</p>
                                <p><i class="far fa-calendar-alt"></i>2022</p>
                                <!-- <p><i class="far fa-comments"></i>5</p> -->
                            </div>
                           
                            <a class="btn" href="/?a=login">Ver mais <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                        <img src="assets/images/slides/antes-depois-4.png" alt="Blog">
                        <!-- <img src="assets/images/slides/maquiagem.png" alt="Blog"> -->
                        </div>
                        <div class="blog-text">
                            <h2>Cortes</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Cabeleileiro</p>
                                <p><i class="far fa-calendar-alt"></i>2022</p>
                                <!-- <p><i class="far fa-comments"></i>5</p> -->
                            </div>
                           
                            <a class="btn" href="/?a=login">Ver mais <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="blog-item">
                        <div class="blog-img">
                        <img src="assets/images/slides/cabelo.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Cor e volume</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Cabeleileiro</p>
                                <p><i class="far fa-calendar-alt"></i>2022</p>
                                <!-- <p><i class="far fa-comments"></i>5</p> -->
                            </div>
                           
                            <a class="btn" href="/?a=login">Ver mais <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->





    














    <?php endif; ?> 




</div>


</body>
</html>



 

