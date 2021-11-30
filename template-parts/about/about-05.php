<section id="sobre-nos" class="about-05 py-10">
    <div class="container">

        <!-- row -->
         <div class="about-05__row grid">
             <!-- content -->
              <div class="about-05__row__content">

                  <!-- header -->
                   <header class="about-05__row__content__header title title-left">
                       <h2>Escritório de Contabilidade Olimar</h2>
                       <span></span>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="about-05__row__content__body t-justify">
                       <p>A contabilidade Olimar é uma empresa que está no mercado há 65 anos prestando serviços de contabilidade, escrita fiscal, departamento pessoal, assessoria fiscal, legalização de empresas, visando sempre o menor custo/beneficio tanto na parte de prestação de serviços como na área fiscal</p>
                       <br>
                       <p>Constantemente fazemos análises fiscais para que sua empresa esteja sempre dentro dos padrões da legalidade e com resultados favoráveis para o seu crescimento.</p>
                       <br>
                       <p>Fundada em 1952 pelos contadores Antonio Debessa e Icchok Guz, que visaram criar uma empresa de assessoria contábil para ter os seus clientes como parceiros e ajuda-los a ter sucesso empresarial. Temos até hoje clientes que começaram junto com nosso escritório.</p>
                       <br>
                       <p>Hoje, o seus filhos e sucessores, Fabio Nogueira Debessa e Rafael Guz continuam com o mesmo objetivo que seus pais, assessorar, orientar e obter soluções para que seus parceiros tenham sucesso e cresçam junto com a gente.</p>

                       <!-- cta -->
                        <div class="about-05__row__content__body__cta mt-6">
                            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], 'Fale conosco','btn btn-primary-500', 'Vamos conversar?') ?>
                        </div>
                       <!-- end of cta -->
                   </div>
                  <!-- end of body -->
              </div>
             <!-- end of content -->

             <!-- image -->
             <div class="about-05__row__image">
                 <?= picture('imagem-quem-somos', 'Escritório de Contabilidade Olimar', 'img-fluid'); ?>
             </div>
             <!-- end of image -->
         </div>
        <!-- end of row -->

    </div>
</section>