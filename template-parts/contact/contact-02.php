<section id="contato" class="contact-02 bg-light-gray-500 py-10">
    <div class="container">

        <!-- header -->
        <header class="contact-02__header title title-center mb-6">
            <h2>Contato</h2>
            <span></span>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="contact-02__row grid">
             <!-- content -->
              <div class="contact-02__row__content">
                  <!-- map -->
                   <div class="contact-02__row__content__map mb-3">
                       <iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14617.83150816628!2d-46.5268063!3d-23.6595783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d6f571779038e33!2zT3JnYW5pemHDp8OjbyBPbGltYXI!5e0!3m2!1spt-BR!2sbr!4v1638276290756!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>
                  <!-- end of map -->

                  <!-- about -->
                   <div class="contact-02__row__content__about t-justify">
                       <img src="<?= image('logo.svg', 'svg') ?>" alt="Olimar contabilidade">
                       <p class="mt-2">Desde 1952 cuidando da saúde fiscal e financeira da sua empresa!</p>
                   </div>
                  <!-- end of about -->

                  <!-- contacts -->
                   <div class="contact-02__row__content__contacts mt-3">
                       <a rel="nofollow nooffer noreferrer" class="link-neutral-500 d-flex ai-center mb-2" href="<?= CONTACT['addressLink']; ?>" target="_blank">
                           <i class="icon-map mr-1 clr-primary-500 f-3"></i><?= CONTACT['address']; ?>
                       </a>

                       <a rel="nofollow nooffer noreferrer" class="link-neutral-500 d-flex ai-center mb-2" href="tel:<?= CONTACT['phone']['01']; ?>" target="_blank">
                           <i class="icon-phone mr-1 clr-primary-500 f-3"></i>
                           <?= CONTACT['phone']['01']; ?>
                       </a>

                       <a rel="nofollow nooffer noreferrer" class="link-neutral-500 d-flex ai-center mb-2" href="tel:<?= CONTACT['phone']['02']; ?>" target="_blank">
                           <i class="icon-phone mr-1 clr-primary-500 f-3"></i>
                           <?= CONTACT['phone']['02']; ?>
                       </a>

                       <a rel="nofollow nooffer noreferrer" class="link-neutral-500 d-flex ai-center" href="mailto:<?= CONTACT['mail']; ?>" target="_blank">
                           <i class="icon-mail mr-1 clr-primary-500 f-3"></i>
                           <?= CONTACT['mail']; ?>
                       </a>
                   </div>
                  <!-- end of contacts -->
              </div>
             <!-- end of content -->

             <!-- form -->
             <div class="contact-02__row__form">
                 <form id="form" method="post" class="grid" enctype="multipart/form-data">

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <input type="text" name="name" placeholder="Nome">
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <input type="email" name="mail" placeholder="E-mail">
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <input type="tel" name="phone" placeholder="Telefone">
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <input type="tel" name="cell" placeholder="Celular">
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <input type="text" name="subject" placeholder="Assunto">
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact-02__row__form__group">
                          <textarea name="message" cols="30" rows="5" placeholder="Mensagem"></textarea>
                      </div>
                     <!-- end of group -->

                     <!-- status -->
                     <div class="contact__form__status d-none">
                         <div class="contact__form__status--loading t-center f-5 a-rotate">
                             <i class="icon-spinner clr-primary-500"></i>
                         </div>
                     </div>
                     <!-- end of status -->

                     <!-- button -->
                     <div class="contact-02__row__form__group t-right">
                         <button id="button-contact" class="btn btn-primary-500" type="submit" name="submit" value="submit">Enviar mensagem</button>
                     </div>
                     <!-- end of button -->

                 </form>
             </div>
             <!-- end of form -->
         </div>
        <!-- end of row -->

    </div>
</section>