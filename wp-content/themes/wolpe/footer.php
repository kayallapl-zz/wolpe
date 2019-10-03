<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wolpe
 */

?>
<footer>
    <wrapper>

        <div class="column col-1">
            <img src="<?= get_template_directory_uri() ?>/images/logo-full.png" alt="logo Wolpe" class="logo">
            <div class="sitemap">
                <ul class="sitemap-list">
                    <li class="sitemap-item-parent"><a href="/">Home</a></li>
                    <li class="sitemap-item-parent"><a href="/quem-somos">Quem somos</a></li>
                    <li class="sitemap-item-parent"><a href="/galeria">Galeria</a></li>
                    <li class="sitemap-item-parent"><a href="/artigos">Artigos</a></li>
                    <li class="sitemap-item-parent"><a href="/contato">Contato</a></li>
                </ul>
                <ul class="sitemap-list">
                    <li class="sitemap-item-parent"><a href="/tratamentos">Tratamentos</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/ansiedade">Ansiedade</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/depressao">Depressão</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/insonia">Insônia</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/disfuncao">Disfunção</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/hiperatividade">Hiperatividade</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos/dependência">Dependência</a></li>
                    <li class="sitemap-item-child"><a href="/tratamentos" class="saiba-mais">Mais <i class="fas fa-plus"></i></a></li>
                </ul>
                <ul class="sitemap-list">
                    <li class="sitemap-item-parent"><a href="/cursos">Cursos</a></li>
                    <li class="sitemap-item-child"><a href="/cursos" class="saiba-mais">Mais <i class="fas fa-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="column col-2">
            <div class="address">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.267779016627!2d-43.117008185034415!3d-22.903491985013503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9983e72df40cd7%3A0x2f213fd1605e5af0!2sRua+Coronel+Moreira+C%C3%A9sar%2C+26+-+Icara%C3%AD%2C+Niter%C3%B3i+-+RJ%2C+24230-060!5e0!3m2!1sen!2sbr!4v1562021676538!5m2!1sen!2sbr" width="100%" height="auto" frameborder="0" style="border:0; margin: 8px 0;" allowfullscreen></iframe>
                <p>Rua Coronel Moreira César, 26 - Sala 622</p>
                <p>Icaraí, Niterói - RJ</p>
            </div>
            <ul class="action-bar-footer">
                <li><i class="fas fa-phone"></i>(21)2719-7421</li>
                <li><i class="fas fa-envelope"></i>consultoriowolpe@gmail.com</li>
                <li><i class="fas fa-headset"></i>Atendimento de segunda a sexta</li>
            </ul>
        </div>
    </wrapper>
</footer>

<?php wp_footer(); ?>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("header-top");
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
            navbar.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
            navbar.classList.remove("sticky");
        }
    }

    var button = document.getElementsByClassName("hamburg")[0];
    var menu = document.getElementsByClassName("navbar-menu")[0];

    button.onclick = function(event) {
        this.classList.toggle('is-active');
        menu.classList.toggle('is-active');
    }

</script>

</body>

</html>