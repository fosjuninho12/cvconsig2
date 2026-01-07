<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="mit" content="2021-09-09T21:08:44-03:00+53178">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<!--HEADER-->
<header class="main_header gradient gradient-green">
    <div class="container">
        <div class="main_header_logo">
            <h1><a class="transition" title="Home" href="<?= url(); ?>">Cv<b>Consig</b></a></h1>
        </div>

        <nav class="main_header_nav">
            <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
            <div class="main_header_nav_links j_menu_mobile_tab">
                <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                <a class="link transition radius" title="Home" href="<?= url(); ?>">Home</a>
                <a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Sobre</a>
                <a class="link transition radius" title="Termos" href="<?= url("/termos"); ?>">Termos</a>
                <a class="link transition radius" title="Privacidade" href="<?= url("/privacidade"); ?>">Privacidade</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>

                <?php if (\Source\Models\Auth::user()): ?>
                    <a class="link login transition radius icon-coffee" title="Controlar"
                       href="<?= url("/app"); ?>">Controlar</a>
                <?php else: ?>
                    <a class="link login transition radius icon-sign-in" title="Entrar"
                       href="<?= url("/entrar"); ?>">Entrar</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</header>

<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<?php if ($v->section("optout")): ?>
    <?= $v->section("optout"); ?>
<?php else: ?>
    <article class="footer_optout">
        <div class="footer_optout_content content">
            <span class="icon icon-coffee icon-notext"></span>
            <h2>Comece a controlar suas contas agora mesmo</h2>
            <p>É rápido, simples e gratuito!</p>
            <a href="<?= url("/cadastrar"); ?>"
               class="footer_optout_btn gradient gradient-green gradient-hover radius icon-check-square-o">Quero
                controlar</a>
        </div>
    </article>
<?php endif; ?>

<!--FOOTER-->

<footer class="main_footer">
    <div class="container content">
        <section class="main_footer_content">
            <article class="main_footer_content_item">
                <h2>CvConsig</h2>
                <p><strong>Correspondente Bancário</strong></p>
                <p>Tradição, confiança e crédito com responsabilidade.</p>
                <p><small>Há mais de 20 anos conectando você às melhores soluções financeiras.</small></p>
            </article>

            <article class="main_footer_content_item">
                <h2>Atendimento</h2>
                <p><strong>WhatsApp:</strong> <a target="_blank" rel="noopener" href="https://wa.me/5561996049078?text=Ol%C3%A1%21+Vim+pelo+site+da+CvConsig+e+quero+consultar+meu+aumento+de+margem+em+janeiro.">(61) 99604-9078</a></p>
                <p><strong>Horário:</strong> atendimento em horário comercial</p>
                <p><strong>Abrangência:</strong> atendimento em todo o Brasil</p>
            </article>

            <article class="main_footer_content_item">
                <h2>Institucional</h2>
                <p><a href="<?= url("/sobre"); ?>">Sobre</a></p>
                <p><a href="<?= url("/termos"); ?>">Termos de uso</a></p>
                <p><a href="<?= url("/privacidade"); ?>">Política de Privacidade</a></p>
            </article>
        </section>
    </div>

    <div class="main_footer_rights">
        <div class="container content">
            <p>&copy; <?= date("Y"); ?> <strong>CvConsig</strong> - Todos os direitos reservados.</p>
        </div>
    </div>
</footer>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53658515-18"></script>
<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>