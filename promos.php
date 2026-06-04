<?php include 'includes/header.php'; ?>

<main style="padding-top: 60px; min-height: 70vh;">
    <section class="promos-section">
        <div class="container">
            <h1 class="section-title">АКЦИИ И СПЕЦПРЕДЛОЖЕНИЯ</h1>
            
            <div class="promos-grid">
                <div class="promo-card" onclick="openModal('modal-1')">
                    <div class="promo-badge">-15%</div>
                    <div class="promo-content">
                        <h3>Первое знакомство</h3>
                        <p>Дарим скидку 15% на первое техническое обслуживание в нашем автосервисе для новых клиентов.</p>
                        <div class="promo-action">Подробнее <span class="arrow">→</span></div>
                    </div>
                </div>

                <div class="promo-card" onclick="openModal('modal-2')">
                    <div class="promo-badge">БЕСПЛАТНО</div>
                    <div class="promo-content">
                        <h3>Диагностика ходовой</h3>
                        <p>При записи на замену моторного масла и масляного фильтра — диагностика ходовой части в подарок.</p>
                        <div class="promo-action">Подробнее <span class="arrow">→</span></div>
                    </div>
                </div>

                <div class="promo-card" onclick="openModal('modal-3')">
                    <div class="promo-badge">ВЫГОДА</div>
                    <div class="promo-content">
                        <h3>Подготовка к сезону</h3>
                        <p>Комплексная проверка тормозной системы и замена колодок по специальной фиксированной цене.</p>
                        <div class="promo-action">Подробнее <span class="arrow">→</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal-overlay" id="modal-1">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('modal-1')">&times;</span>
            <h2>Первое знакомство -15%</h2>
            <p>Мы ценим доверие новых клиентов! При первом визите в автосервис «УРОВЕНЬ» вы получаете гарантированную скидку 15% на все виды слесарных работ и техническое обслуживание.</p>
            <p><strong>Условия акции:</strong> Скидка применяется только на стоимость работ и не суммируется с другими спецпредложениями. Акция не распространяется на покупку запчастей.</p>
            <div class="modal-call">📞 Записаться по акции: <strong>40-21-21</strong></div>
        </div>
    </div>

    <div class="modal-overlay" id="modal-2">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('modal-2')">&times;</span>
            <h2>Диагностика ходовой в подарок</h2>
            <p>Ходовая часть — залог вашей безопасности. Приезжайте к нам на плановую замену масла и масляного фильтра, и наши мастера абсолютно бесплатно проведут полную диагностику подвески.</p>
            <p><strong>Что входит:</strong> Проверка амортизаторов, сайлентблоков, рычагов, пыльников и рулевых наконечников на подъемнике.</p>
            <div class="modal-call">📞 Записаться по акции: <strong>40-21-21</strong></div>
        </div>
    </div>

    <div class="modal-overlay" id="modal-3">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('modal-3')">&times;</span>
            <h2>Подготовка к сезону</h2>
            <p>Не рискуйте на дороге. Мы предлагаем комплексную диагностику тормозной системы, проверку уровня тормозной жидкости и замену колодок (передних или задних) по специальной сниженной цене.</p>
            <p><strong>Бонус:</strong> Если при замене выяснится, что тормозные диски требуют проточки, мы сделаем скидку 10% на эту услугу.</p>
            <div class="modal-call">📞 Узнать цену и записаться: <strong>40-21-21</strong></div>
        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>