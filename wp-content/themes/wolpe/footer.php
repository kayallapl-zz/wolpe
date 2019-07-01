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
                        <input type="search" name="" id="">
                        <input type="submit" value="">
                    </form>
                    <div class="site-map">
                        <a href="#">Home</a>
                        <a href="#">Sobre nós</a>
                        <a href="#">Tratamentos</a>
                        <a href="#">Cursos</a>
                        <a href="#">Galeria</a>
                        <a href="#">Artigos</a>
                        <a href="#">Contato</a>
                    </div>
                </div>
            </div>
            <div class="column col-2">
                <img src="substituir por mapa" alt="">
                <ul id="action-bar-menu">
                    <li><i class="fas fa-phone"></i>(21)99999-9999</li>
                    <li><i class="fas fa-envelope"></i>contato@consultoriowolpe.com</li>
                    <li><i class="fas fa-headset"></i>Atendimento de segunda a sexta</li>
                </ul>
                <a href="#" class="button">Marque uma consulta</a>
            </div>
            <div class="column col-3">
                <form action="contact">
                    <p>Agende uma conversa!</p>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="submit" value="">
                </form>
            </div>
        </wrapper>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
