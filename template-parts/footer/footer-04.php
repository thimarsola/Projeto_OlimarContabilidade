<footer class="footer-04">
    <!-- content -->
    <div class="footer-04__content t-center py-4">
        <div class="container">
            <!-- brand -->
            <div class="footer-04__content__brand mb-2">
                <img class="mx-auto" src="<?= image('logo.svg', 'svg'); ?>" alt="<?= SITE['name'];?>">
            </div>
            <!-- end of brand -->

            <small><?= date('Y'); ?> - <?= SITE['name']; ?> &COPY; - Todos os direitos reservados</small>
        </div>
    </div>
    <!-- end of content -->

    <!-- developer -->
    <div class="footer-04__developer py-1 bg-primary-500 clr-white-500">
        <div class="container">

            <!-- container -->
            <div class="footer-04__developer__container d-flex jc-between ai-center">
                <!-- content -->
                <div class="footer-04__developer__container__content">
                    <p><small>Desenvolvido por <a rel="nofollow noreferrer noopener" class="link-white-500" href="<?= DEV['url']; ?>" title="Agência Especializada em Marketing Digital no ABC - Goognet"><?= DEV['name']; ?></a></small></p>
                </div>
                <!-- end of content -->

                <!-- social -->
                 <div class="footer-04__developer__container__social">
                     <ul class="d-flex ai-center gp-4">
                         <li>
                             <a rel="nofollow noreferrer noopener" class="link-white-500 f-3" href="<?= CONTACT['facebook']; ?>" target="_blank">
                                 <i class="icon-facebook"></i>
                             </a>
                         </li>
                         <li>
                             <a rel="nofollow noreferrer noopener" class="link-white-500 f-3" href="<?= CONTACT['instagram']; ?>" target="_blank">
                                 <i class="icon-instagram"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
                <!-- end of social -->
            </div>
            <!-- end of container -->
        </div>
    </div>
    <!-- end of developer -->
</footer>