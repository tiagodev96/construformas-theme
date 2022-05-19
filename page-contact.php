<?php
//Template Name: Contato
?>

<?php get_header(); ?>
<main>
    <div class="center">
        <div class="card">
            <h3>Entre em Contato</h3>
            <p>Tem dúvidas ou deseja fazer um orçamento? Não perca tempo e envie uma mensagem diretamente para nosso WhatsApp! Estamos prontos para respondê-lo(a) com brevidade!</p>
            <div class="center">
                <div class="form-card">
                    <form class="form">
                        <h2>Nos envie uma mensagem</h2>
                        <div class="form-field">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" placeholder="Seu Nome" required>
                        </div>
                        <div class="form-field">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail">
                        </div>
                        <div class="form-field">
                            <label for="subject">Assunto</label>
                            <select name="subject" id="subject">
                                <option value="" disabled selected>Selecione o Assunto*</option>
                                <option value="duvidas">Dúvida</option>
                                <option value="orcamento">Orçamento</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <label for="message">Mensagem</label>
                            <textarea name="message" id="message" required placeholder="Mensagem que será enviada por WhatsApp..."></textarea>
                        </div>

                        <button class="send-button">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Enviar</span>
                        </button><!-- send button -->
                    </form><!-- form -->
                    <div class="informations">


                        <h2>Nossos Contatos</h2>
                        <div class="informations-grid">
                            <div class="information">
                                <div class="information-title">
                                    <i class="fa-solid fa-phone"></i>
                                    <h3>Telefones</h3>
                                </div>
                                <div class="information-content">
                                    <?php
                                    $telefonespost = new WP_Query(array(
                                        'post_type' => 'telefones',
                                    ));

                                    while ($telefonespost->have_posts()) {
                                        $telefonespost->the_post();
                                    ?>
                                        <p><?php the_title(); ?></p>
                                    <?php } ?>
                                </div>
                            </div><!-- information telefone -->
                            <div class="information">
                                <div class="information-title">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h3>Localização</h3>
                                </div>
                                <div class="information-content">
                                    <?php
                                    $addressposts = new WP_Query(array(
                                        'post_type' => 'endereco',
                                    ));

                                    while ($addressposts->have_posts()) {
                                        $addressposts->the_post();

                                    ?>
                                        <p><?php the_title(); ?></p>
                                    <?php } ?>
                                </div>
                            </div><!-- information localização -->
                            <div class="information">
                                <div class="information-title">
                                    <i class="fa-solid fa-at"></i>
                                    <h3>E-mails</h3>
                                </div>
                                <div class="information-content">
                                    <?php
                                    $emailsposts = new WP_Query(array(
                                        'post_type' => 'emails',
                                    ));

                                    while ($emailsposts->have_posts()) {
                                        $emailsposts->the_post();
                                    ?>
                                        <p><?php the_title(); ?></p>
                                    <?php } ?>
                                </div>
                            </div><!-- information emails -->
                            <div class="information">
                                <div class="information-title">
                                    <i class="fa-solid fa-clock"></i>
                                    <h3>Horário</h3>
                                </div>
                                <div class="information-content">
                                    <p>Seg-Sex: 08h - 17h</p>
                                    <p>Sab-Dom: Fechado</p>
                                </div>
                            </div><!-- information horário -->
                        </div><!-- informations -->
                    </div>
                </div><!-- form card -->
            </div><!-- center form div -->
        </div><!-- card -->
    </div><!-- geral card container -->
</main>
<?php get_footer(); ?>
