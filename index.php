<?php

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div id='map' class="map-responsive"></div>

<section id="intro" class="container content-section">
  <div class="row">
      <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
        <h2 class="title-section bold pt-2">Sobre</h2>
        <h3 class="title-sub">projeto desterro</h3>

        <h4 class="pt-5 pb-5">
          Aprendemos muito sobre os limites de nossas capacidades comunicativas quando contamos e ouvimos relatos de sonho. Se prestarmos atenção vamos descobrir que são muito elaborados os mecanismos que acionamos para relatar um sonho tal qual ele nos acometeu. Nos diz muito sobre a capacidade humana de contar histórias. E, por isso, nos fala sobre quem somos.
        </h4>
        <h4 class="pb-5">
          Ao reunirmos num mapa relatos de sonhos de diversos habitantes de uma mesma cidade criamos uma outra geografia? É possível conhecer algo da pessoa apenas por aquilo que ela sonhou? Com o que sonhamos quando desejamos outras realidades? Com o que sonhamos quando dormimos em meio à luta? Não pretendemos encontrar respostas, mas estamos muito interessados em ver onde algumas perguntas são capazes de nos levar.          
          </h4>
          <h4 class="">
          Financiado pela Lei Aldir Blanc, o Projeto Desterro é uma plataforma  colaborativa para o compartilhamento de vídeos com relatos de sonho, ancorados na região em que a pessoa habita. Por enquanto montamos o mapa com relatos apenas de moradores da Região Metropolitana do Recife, mas em breve vamos expandir nossa cartografia por outros espaços. Nos interessa, sobretudo, multiplicar e amplificar narrativas que reforcem a pluralidade de subjetividades, considerando todo o potencial simbólico, pessoal e reflexivo dos sonhos. </h4>
      </div>
      <!-- <div class="col-12 col-md-6">
          <div class="about-box">
              <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo-art.png" alt="" class="img-fluid about-box__image pt-5 mt-5">
          </div>
      </div> -->
  </div>
</section>

<section id="message-send-mail" class="container-full">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-lg-2 col-lg-8 text-center">
        <hr class="pb-5" />
        <h3 class="text-information pb-4">Para embarcar nessa jornada com a gente é só enviar um vídeo (em tela horizontal) contando um sonho seu, qualquer sonho, para o email <br/><a href="mailto: desterroprojeto@gmail.com" class="link-email bold">desterroprojeto@gmail.com</a> </h3>
        <hr class="mt-5" />
      </div>
    </div>
  </div>
</section>

<?php 
  $dreams = array( 'post_type' => 'sonhos', 'posts_per_page' => 99 );
  $queryDreams = new WP_Query( $dreams ); 
?>

<section id="grid-images" class="container-full content-section grid-movies">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h2 class="title-section bold">Sonhos</h2>
                <h3 class="title-sub">galeria de vídeos</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="gallery">

              <?php while ( $queryDreams->have_posts() ) : $queryDreams->the_post(); ?>

                <li class="gallery__item" style="background-image: url(<?= the_post_thumbnail_url() ?>)">
                  <a href="<?= get_post_custom()['link'][0] ?>" target="_blank" class="gallery__item__link">
                    <h2 class="🐜-title"></h2>
                  </a>
                </li>

              <?php 
                endwhile;
                wp_reset_postdata(); 
              ?>
           
            </ul>
          </div>
      </div>
    </div>
</section>

<?php 
  $members = array( 'post_type' => 'equipe', 'posts_per_page' => 99 );
  $queryMembers = new WP_Query( $members ); 
?>

<section id="expediente" class="container-fluid content-section mt-5 mb-5 pt-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="title-section bold">Expediente</h2>
        <h3 class="title-sub">Ficha Técnica </h3>
      </div>
    </div>
    <div class="row text-center cards-carousel">
      
        <?php while ( $queryMembers->have_posts() ) : $queryMembers->the_post(); ?>

          <div class="col-12 col-sm-6 col-md-4 col-lg-4 cards-carousel__item">
            <button class="card-perfil card-button" type="button" data-toggle="modal" data-target="#teamMembersModal" 
              data-title="<?= get_the_title() ?>" data-resume="<?= the_content() ?>" data-cargo="<?= get_post_custom()['Função'][0] ?>" data-img="<?= the_post_thumbnail_url() ?>">
                <div class="card-perfil__header">
                  <img class="card-perfil__img rounded-circle" src="<?= the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
                </div>
                <div class="card-body text-center pt-2">
                  <h5 class="card-title mb-0"><?= the_title() ?></h5>
                  <h6 class="card-title bold "><?= get_post_custom()['Função'][0] ?></h6>
                  <ul class="social-icons d-none justify-content-center text-center">
                      <li class="social-icons__item d-flex"><a href="#" class="social-icons__link social-icons__link--actived"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-instagram"></i></a></li>
                      <li class="social-icons__item d-flex"><a href="#" class="social-icons__link"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </button>        
          </div>

        <?php 
          endwhile;
          wp_reset_postdata(); 
        ?>
    </div>
  </div>
</section>

<!-- basic modal -->
<div class="modal fade " id="teamMembersModal" tabindex="-1" role="dialog" aria-labelledby="teamMembersModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="member-resume">Modal Body</h3>
        <h4 class="member-cargo"></h4>
        <img src="" alt="" class="member-img img-fluid" >
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
