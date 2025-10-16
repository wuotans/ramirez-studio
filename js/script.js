// ===== MAIN SCRIPT - RAMIREZ STUDIO =====

// Aguardar o DOM carregar completamente
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// Função principal de inicialização
function initializeApp() {
    initializePreloader();
    initializeCursor();
    initializeNavigation();
    initializeAnimations();
    initializeParticles();
    initializeScrollEffects();
    initializeFormHandlers();
    initializePortfolioFilter();
    initializeCounters();
    initializeTestimonialsSlider();
    initializeMagneticEffects();
    initializePageTransitions();
    initializePerformanceOptimizations();
    initializeServiceCards(); // Nova função para os cards de serviço
}

// ===== SERVICE CARDS FLIP =====
function initializeServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('flipped');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('flipped');
        });
        
        // Click para mobile
        card.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                this.classList.toggle('flipped');
            }
        });
    });
}

// ===== PRELOADER =====
function initializePreloader() {
    const preloader = document.querySelector('.preloader');
    
    if (!preloader) return;
    
    // Simular carregamento
    setTimeout(() => {
        preloader.classList.add('fade-out');
        
        setTimeout(() => {
            preloader.style.display = 'none';
            document.body.classList.add('loaded');
            
            // Iniciar animações após o preloader
            startPageAnimations();
        }, 500);
    }, 2000);
}

// ===== CURSOR PERSONALIZADO =====
function initializeCursor() {
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');
    
    if (!cursorDot || !cursorOutline) return;
    
    let mouseX = 0;
    let mouseY = 0;
    let outlineX = 0;
    let outlineY = 0;
    
    // Atualizar posição do cursor
    function updateCursor(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    }
    
    // Animação suave do cursor outline
    function animateCursor() {
        // Suavizar o movimento do outline
        outlineX += (mouseX - outlineX) * 0.1;
        outlineY += (mouseY - outlineY) * 0.1;
        
        // Atualizar posições
        cursorDot.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
        cursorOutline.style.transform = `translate(${outlineX}px, ${outlineY}px)`;
        
        requestAnimationFrame(animateCursor);
    }
    
    // Efeitos de hover
    function handleCursorHover() {
        const hoverElements = document.querySelectorAll('a, button, [data-magnetic], .service-card, .portfolio-card');
        
        hoverElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursorDot.style.transform = `translate(${mouseX}px, ${mouseY}px) scale(1.5)`;
                cursorOutline.style.transform = `translate(${outlineX}px, ${outlineY}px) scale(1.5)`;
                cursorOutline.style.background = 'rgba(139, 92, 246, 0.1)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursorDot.style.transform = `translate(${mouseX}px, ${mouseY}px) scale(1)`;
                cursorOutline.style.transform = `translate(${outlineX}px, ${outlineY}px) scale(1)`;
                cursorOutline.style.background = 'transparent';
            });
        });
    }
    
    // Inicializar
    document.addEventListener('mousemove', updateCursor);
    animateCursor();
    handleCursorHover();
}


// ===== NAVEGAÇÃO =====
function initializeNavigation() {
    const header = document.getElementById('header');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
    
    // Header scroll effect
    function handleHeaderScroll() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Mobile menu toggle
    function toggleMobileMenu() {
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        
        // Animação do botão hamburger
        const spans = mobileMenuBtn.querySelectorAll('span');
        if (mobileMenu.classList.contains('active')) {
            spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    }
    
    // Fechar menu ao clicar em um link
    function closeMobileMenu() {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
        
        const spans = mobileMenuBtn.querySelectorAll('span');
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
    }
    
    // Smooth scroll para links
    function handleSmoothScroll(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#' || !targetId.startsWith('#')) return;
        
        const targetElement = document.querySelector(targetId);
        if (!targetElement) return;
        
        const headerHeight = header.offsetHeight;
        const targetPosition = targetElement.offsetTop - headerHeight;
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
        
        // Fechar menu mobile se estiver aberto
        if (mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    }
    
    // Navegação ativa
    function setActiveNavigation() {
        const sections = document.querySelectorAll('section');
        const headerHeight = header.offsetHeight;
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - headerHeight - 100;
            const sectionHeight = section.offsetHeight;
            
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
    }
    
    // Event listeners
    window.addEventListener('scroll', () => {
        handleHeaderScroll();
        setActiveNavigation();
    });
    
    mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    mobileMenuClose.addEventListener('click', closeMobileMenu);
    
    navLinks.forEach(link => {
        link.addEventListener('click', handleSmoothScroll);
    });
    
    // Inicializar
    handleHeaderScroll();
    setActiveNavigation();
}

// ===== ANIMAÇÕES =====
function initializeAnimations() {
    // Inicializar AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }
    
    // Inicializar GSAP
    initializeGSAP();
}

function initializeGSAP() {
    // Registrar plugins do GSAP
    gsap.registerPlugin(ScrollTrigger, TextPlugin);
    
    // Animações do hero section
    animateHeroSection();
    
    // Animações de entrada das seções
    animateSections();
    
    // Animações de hover
    animateHoverEffects();
}

function animateHeroSection() {
    const heroTitle = document.querySelector('.hero-title');
    const heroSubtitle = document.querySelector('.hero-subtitle');
    const heroButtons = document.querySelector('.hero-buttons');
    
    if (!heroTitle) return;
    
    // Timeline do hero
    const heroTimeline = gsap.timeline();
    
    heroTimeline
        .from('.hero-badge', {
            y: -50,
            opacity: 0,
            duration: 1,
            ease: 'back.out(1.7)'
        })
        .from('.title-line', {
            y: 100,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: 'power3.out'
        }, '-=0.5')
        .from(heroSubtitle, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        }, '-=0.3')
        .from(heroButtons, {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        }, '-=0.2')
        .from('.hero-stats .stat', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: 'power2.out'
        }, '-=0.2');
    
    // Animar elementos flutuantes
    gsap.to('.floating-card', {
        y: -20,
        rotation: 5,
        duration: 3,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut',
        stagger: 1
    });
}

function animateSections() {
    // Animar elementos com data-aos
    const animatedElements = document.querySelectorAll('[data-aos]');
    
    animatedElements.forEach(element => {
        ScrollTrigger.create({
            trigger: element,
            start: 'top 80%',
            onEnter: () => element.classList.add('aos-animate')
        });
    });
}

function animateHoverEffects() {
    // Efeito de levantar cards
    const cards = document.querySelectorAll('.service-card, .portfolio-card, .testimonial-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -10,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
}

// ===== PARTICLES.JS =====
function initializeParticles() {
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#8b5cf6'
                },
                shape: {
                    type: 'circle',
                    stroke: {
                        width: 0,
                        color: '#000000'
                    }
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#8b5cf6',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3
                    },
                    repulse: {
                        distance: 100,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    },
                    remove: {
                        particles_nb: 2
                    }
                }
            },
            retina_detect: true
        });
    }
}

// ===== EFEITOS DE SCROLL =====
function initializeScrollEffects() {
    // Scroll to top button
    initializeScrollToTop();
    
    // Parallax effects
    initializeParallax();
    
    // Lazy loading
    initializeLazyLoading();
}

function initializeScrollToTop() {
    const scrollBtn = document.createElement('button');
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.innerHTML = '↑';
    document.body.appendChild(scrollBtn);
    
    function toggleScrollButton() {
        if (window.scrollY > 500) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    }
    
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    window.addEventListener('scroll', toggleScrollButton);
    toggleScrollButton();
}

function initializeParallax() {
    const parallaxElements = document.querySelectorAll('.hero-background');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
}

function initializeLazyLoading() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
}

// ===== FORMULÁRIOS =====
function initializeFormHandlers() {
    const contactForm = document.getElementById('contactForm');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', handleFormSubmit);
    initializeFormValidation();
}

function handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('.btn-submit');
    const formData = new FormData(form);
    
    // Mostrar estado de carregamento
    submitBtn.classList.add('loading');
    
    // Simular envio (substituir por AJAX real)
    setTimeout(() => {
        submitBtn.classList.remove('loading');
        
        // Mostrar mensagem de sucesso
        showFormMessage('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        
        // Limpar formulário
        form.reset();
    }, 2000);
}

function initializeFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('blur', validateField);
            input.addEventListener('input', clearFieldError);
        });
    });
}

function validateField(e) {
    const field = e.target;
    const value = field.value.trim();
    
    clearFieldError(e);
    
    // Validações básicas
    if (field.hasAttribute('required') && !value) {
        showFieldError(field, 'Este campo é obrigatório');
        return false;
    }
    
    if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            showFieldError(field, 'Por favor, insira um e-mail válido');
            return false;
        }
    }
    
    return true;
}

function showFieldError(field, message) {
    field.style.borderColor = '#ef4444';
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.style.cssText = 'color: #ef4444; font-size: 14px; margin-top: 5px;';
    errorDiv.textContent = message;
    
    field.parentNode.appendChild(errorDiv);
}

function clearFieldError(e) {
    const field = e.target;
    field.style.borderColor = '';
    
    const errorDiv = field.parentNode.querySelector('.field-error');
    if (errorDiv) {
        errorDiv.remove();
    }
}

function showFormMessage(type, message) {
    const form = document.getElementById('contactForm');
    const existingMessage = form.querySelector('.form-message');
    
    if (existingMessage) {
        existingMessage.remove();
    }
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `form-message ${type}-message`;
    messageDiv.textContent = message;
    
    form.appendChild(messageDiv);
    
    // Remover mensagem após 5 segundos
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}

// ===== FILTRO DE PORTFÓLIO =====
function initializePortfolioFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    if (!filterBtns.length || !portfolioItems.length) return;
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remover classe active de todos os botões
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Adicionar classe active ao botão clicado
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            // Filtrar itens do portfólio
            portfolioItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'block';
                    
                    // Animação de entrada
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    // Animação de saída
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

// ===== CONTADORES ANIMADOS =====
function initializeCounters() {
    const counters = document.querySelectorAll('.stat-number[data-count]');
    
    if (!counters.length) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
}

function startCounter(element) {
    const target = parseInt(element.getAttribute('data-count'));
    const hasPlus = element.getAttribute('data-count').includes('+');
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
        current += increment;
        
        if (current >= target) {
            element.textContent = target + (hasPlus ? '+' : '');
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

// ===== SLIDER DE DEPOIMENTOS =====
function initializeTestimonialsSlider() {
    const track = document.querySelector('.testimonials-track');
    
    if (!track) return;
    
    // Duplicar os depoimentos para criar efeito de loop infinito
    const testimonials = track.innerHTML;
    track.innerHTML += testimonials;
    
    // Configurar animação
    gsap.to(track, {
        x: '-50%',
        duration: 40,
        repeat: -1,
        ease: 'linear'
    });
}

// ===== EFEITOS MAGNÉTICOS =====
function initializeMagneticEffects() {
    const magneticElements = document.querySelectorAll('[data-magnetic]');
    
    magneticElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const deltaX = (x - centerX) / centerX;
            const deltaY = (y - centerY) / centerY;
            
            gsap.to(this, {
                x: deltaX * 10,
                y: deltaY * 10,
                duration: 0.5,
                ease: 'power2.out'
            });
        });
        
        element.addEventListener('mouseleave', function() {
            gsap.to(this, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: 'elastic.out(1, 0.3)'
            });
        });
    });
}

// ===== TRANSIÇÕES DE PÁGINA =====
function initializePageTransitions() {
    const links = document.querySelectorAll('a[href^="' + window.location.origin + '"]:not([target="_blank"])');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === window.location.pathname) {
                return;
            }
            
            e.preventDefault();
            const href = this.getAttribute('href');
            
            // Animação de saída
            document.body.style.opacity = '0';
            
            setTimeout(() => {
                window.location.href = href;
            }, 300);
        });
    });
}

// ===== OTIMIZAÇÕES DE PERFORMANCE =====
function initializePerformanceOptimizations() {
    // Debounce para eventos de scroll
    const optimizedScroll = debounce(() => {
        // Código que será executado após o scroll parar
    }, 10);
    
    window.addEventListener('scroll', optimizedScroll);
    
    // Preload de imagens críticas
    preloadCriticalImages();
    
    // Service Worker (se disponível)
    registerServiceWorker();
}

function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            timeout = null;
            if (!immediate) func(...args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func(...args);
    };
}

function preloadCriticalImages() {
    const criticalImages = [
        // Adicione URLs de imagens críticas aqui
    ];
    
    criticalImages.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

function registerServiceWorker() {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    }
}

// ===== ANIMAÇÕES DE PÁGINA =====
function startPageAnimations() {
    // Animar elementos em sequência
    const staggerElements = document.querySelectorAll('.stagger-item');
    
    if (staggerElements.length) {
        gsap.to(staggerElements, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: 'power2.out',
            delay: 0.2
        });
    }
    
    // Animar background elements
    animateBackgroundElements();
}

function animateBackgroundElements() {
    const bgElements = document.querySelectorAll('.bg-circle, .bg-shape');
    
    bgElements.forEach((element, index) => {
        gsap.to(element, {
            y: -20,
            rotation: 10,
            duration: 3 + index,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    });
}

// ===== UTILITÁRIOS =====

// Detectar dispositivo
function isMobile() {
    return window.innerWidth <= 768;
}

function isTouchDevice() {
    return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
}

// Formatar números
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Gerar ID único
function generateId() {
    return '_' + Math.random().toString(36).substr(2, 9);
}

// ===== INICIALIZAÇÃO FINAL =====

// Exportar funções para uso global (se necessário)
window.RamirezStudio = {
    initializeApp,
    initializeAnimations,
    initializeParticles,
    // ... outras funções que você queira expor
};

// Inicializar quando a página estiver totalmente carregada
window.addEventListener('load', () => {
    // Garantir que tudo foi carregado
    setTimeout(() => {
        document.body.classList.add('fully-loaded');
    }, 100);
});

// Manipular erros não capturados
window.addEventListener('error', (e) => {
    console.error('Erro não capturado:', e.error);
});

// Manipular promessas rejeitadas não tratadas
window.addEventListener('unhandledrejection', (e) => {
    console.error('Promessa rejeitada não tratada:', e.reason);
});