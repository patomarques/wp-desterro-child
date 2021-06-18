<?php

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div id='map' class="map-responsive"></div>

<section id="intro" class="container content-section">
    <div class="row">
        <div class="col-12 col-md-6 text-center">
            <h2 class="title-section bold pt-4">Sobre</h2>
            <h3 class="title-sub">projeto desterro</h3>

            <p class="description pt-4">
                Com o que sonhamos quando desejamos outras realidades?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente facere, quos voluptates illum quae laboriosam odio nobis quas ut reprehenderit impedit debitis omnis, suscipit nam, animi vel architecto eveniet illo.                
            </p>
        </div>
        <div class="col-12 col-md-6">
            <div class="square-image square-border-effect">
                <!-- <img src="" alt=""> -->
            </div>
        </div>
    </div>
</section>

<section id="message-send-mail" class="container-full">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h3 class="text-information">Compartilhe conosco seu sonho, envie-nos um email contando <br/><a href="mailto: tiveumsonho@desterro.com.br" class="link-email bold">tiveumsonho@desterro.com.br</a> </h3>
      </div>
    </div>
  </div>
</section>

<section id="grid-images" class="container-full content-section grid-movies">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="title-section bold">Sonhos</h2>
                <h3 class="title-sub">Lorem ipsum dolor</h3>
            </div>
            <div class="col-12">
                <p class="description"></p>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="gallery">
              <li><h2 class="🐜-title">Dragonfly</h2></li>
              <li><h2 class="🐜-title">Bug</h2></li>
              <li><h2 class="🐜-title">Beetle</h2></li>
              <li><h2 class="🐜-title">Bee</h2></li>
              <li><h2 class="🐜-title">Grasshopper</h2></li>
              <li><h2 class="🐜-title">Monarch</h2></li>
              <li><h2 class="🐜-title">Fly</h2></li>
              <li><h2 class="🐜-title">Ladybug</h2></li>
              <li class="featured"><h2 class="🐜-title">Dragon fly</h2></li>
              <li><h2 class="🐜-title">Fake Ladybug</h2></li>
              <li><h2 class="🐜-title">Amazing-Looking Bug</h2></li>
              <!-- <li class="mantis"><h2 class="🐜-title">Praying Mantis</h2></li>
              <li><h2 class="🐜-title">Bee</h2></li>
              <li><h2 class="🐜-title">Grasshopper</h2></li>
              <li><h2 class="🐜-title">Butterfly or Moth</h2></li>
              <li><h2 class="🐜-title">Beetle</h2></li>
              <li><h2 class="🐜-title">Catepillar</h2></li>
              <li><h2 class="🐜-title">Ladybug</h2></li> -->
            </ul>
          </div>
      </div>
    </div>
</section>

<section id="expediente" class="container-full content-section mb-0">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="title-section bold">Expediente</h2>
        <h3 class="title-sub">Ficha Técnica </h3>
      </div>
    </div>
    <div class="row text-center">
    <div class="col-3">
        <div class="card-perfil">
            <div class="card-perfil__header ">
              <img class="card-perfil__img rounded-circle" src="https://picsum.photos/200/300" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">{name_lastname}</h5>
              <p class="card-text">Professional resume</p>
              <ul class="social-icons d-flex  justify-content-center text-center">
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link social-icons__link--actived"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-instagram"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>        
      </div>
      <div class="col-3">
        <div class="card-perfil">
            <div class="card-perfil__header ">
              <img class="card-perfil__img rounded-circle" src="https://picsum.photos/200/300" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">{name_lastname}</h5>
              <p class="card-text">Professional resume</p>
              <ul class="social-icons d-flex  justify-content-center text-center">
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link social-icons__link--actived"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-instagram"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>        
      </div>
      <div class="col-3">
        <div class="card-perfil">
            <div class="card-perfil__header text-center">
              <img class="card-perfil__img rounded-circle" src="https://picsum.photos/200/300" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">{name_lastname}</h5>
              <p class="card-text">Professional resume</p>
              <ul class="social-icons d-flex  justify-content-center text-center">
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link social-icons__link--actived"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-instagram"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>        
      </div>
      <div class="col-3">
        <div class="card-perfil">
            <div class="card-perfil__header text-center">
              <img class="card-perfil__img rounded-circle" src="https://picsum.photos/200/300" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">{name_lastname}</h5>
              <p class="card-text">Professional resume</p>
              <ul class="social-icons d-flex  justify-content-center text-center">
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link social-icons__link--actived"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-instagram"></i></a></li>
                  <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>        
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
