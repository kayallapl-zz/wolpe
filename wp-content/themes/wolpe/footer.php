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
            <div class="search">
                <form action="search">
                    <input type="search" name="" id="" placeholder="Pesquisar...">
                    <button type="submit" value=""><i class="fas fa-search"></i></button>
                </form>
                <div class="sitemap">
                    <ul class="sitemap-list">
                        <li class="sitemap-item-parent"><a href="#">Home</a></li>
                        <li class="sitemap-item-parent"><a href="#">Sobre nós</a></li>
                        <li class="sitemap-item-parent"><a href="#">Galeria</a></li>
                        <li class="sitemap-item-parent"><a href="#">Artigos</a></li>
                        <li class="sitemap-item-parent"><a href="#">Contato</a></li>
                    </ul>
                    <ul class="sitemap-list">
                        <li class="sitemap-item-parent"><a href="#">Tratamentos</a></li>
                        <li class="sitemap-item-child"><a href="#">Ansiedade</a></li>
                        <li class="sitemap-item-child"><a href="#">Depressão</a></li>
                        <li class="sitemap-item-child"><a href="#">Insônia</a></li>
                        <li class="sitemap-item-child"><a href="#">Disfunção</a></li>
                        <li class="sitemap-item-child"><a href="#">Hiperatividade</a></li>
                        <li class="sitemap-item-child"><a href="#">Dependência</a></li>
                        <li class="sitemap-item-child"><a href="#" class="saiba-mais">Mais <i class="fas fa-plus"></i></a></li>
                    </ul>
                    <ul class="sitemap-list">
                        <li class="sitemap-item-parent"><a href="#">Cursos</a></li>
                        <li class="sitemap-item-child"><a href="#">Curso 1</a></li>
                        <li class="sitemap-item-child"><a href="#">Curso 2</a></li>
                        <li class="sitemap-item-child"><a href="#">Curso 3</a></li>
                        <li class="sitemap-item-child"><a href="#" class="saiba-mais">Mais <i class="fas fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column col-2">
            <div class="address">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.267779016627!2d-43.117008185034415!3d-22.903491985013503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9983e72df40cd7%3A0x2f213fd1605e5af0!2sRua+Coronel+Moreira+C%C3%A9sar%2C+26+-+Icara%C3%AD%2C+Niter%C3%B3i+-+RJ%2C+24230-060!5e0!3m2!1sen!2sbr!4v1562021676538!5m2!1sen!2sbr" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p>Rua Coronel Moreira César, 26 - Sala 622</p>
                <p>Icaraí, Niterói - RJ</p>
            </div>
            <ul class="action-bar-footer">
                <li><i class="fas fa-phone"></i>(21)99999-9999</li>
                <li><i class="fas fa-envelope"></i>contato@consultoriowolpe.com</li>
                <li><i class="fas fa-headset"></i>Atendimento de segunda a sexta</li>
            </ul>
            <a href="#" class="saiba-mais">Marque uma consulta <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="column col-3">
            <form action="contact">
                <p>Agende uma conversa!</p>
                <input type="text" placeholder="Nome">
                <input type="text" placeholder="Telefone">
                <input type="text" placeholder="Email">
                <button type="submit" value="">Enviar</button>
            </form>
        </div>
    </wrapper>
</footer>

<?php wp_footer(); ?>

</body>

</html>