// =========================================
// 1. ГЛОБАЛЬНЫЕ ФУНКЦИИ (Должны быть снаружи)
// =========================================

// Функция открытия модального окна
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Убираем прокрутку сайта
    }
}

// Функция закрытия модального окна
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto'; // Возвращаем прокрутку
    }
}

// =========================================
// 2. СКРИПТЫ, ОЖИДАЮЩИЕ ЗАГРУЗКИ СТРАНИЦЫ
// =========================================
document.addEventListener("DOMContentLoaded", function() {

    // --- Кнопка "Наверх" ---
    const scrollBtn = document.getElementById("scrollTopBtn");
    if (scrollBtn) {
        window.onscroll = function() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        };

        scrollBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    // --- Мобильное меню (Бургер) ---
    const burgerBtn = document.getElementById("burgerBtn");
    const navLinks = document.getElementById("navLinks");
    if (burgerBtn && navLinks) {
        burgerBtn.addEventListener("click", function() {
            navLinks.classList.toggle("active");
            this.classList.toggle("open");
        });
    }

    // --- Закрытие окна по клику на темный фон ---
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal-overlay')) {
            event.target.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });

});