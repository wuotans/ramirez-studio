    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="<?php echo SITE_URL; ?>" class="logo">
                        <span>Ramirez</span>Studio
                    </a>
                    <p class="footer-description">
                        Transformamos ideias em experiências visuais memoráveis. 
                        Especialistas em produção audiovisual, edição de vídeo, fotografia 
                        e marketing digital para elevar sua marca ao próximo nível.
                    </p>
                    <div class="footer-social">
                        <a href="<?php echo INSTAGRAM; ?>" target="_blank" title="Instagram">
                            📷
                        </a>
                        <a href="<?php echo YOUTUBE; ?>" target="_blank" title="YouTube">
                            🎬
                        </a>
                        <a href="<?php echo WHATSAPP; ?>" target="_blank" title="WhatsApp">
                            💬
                        </a>
                        <a href="mailto:<?php echo EMAIL; ?>" title="E-mail">
                            📧
                        </a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Contato</h3>
                    <p>📧 <?php echo EMAIL; ?></p>
                    <p>📞 <?php echo PHONE; ?></p>
                    <p>📍 <?php echo ADDRESS; ?></p>
                    <div class="business-hours">
                        <p><strong>Horário de Atendimento</strong></p>
                        <p>Segunda a Sexta: 9h às 18h</p>
                        <p>Sábado: 9h às 13h</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados.</p>
                <p class="dev-credit">
                    Desenvolvido por <a href="https://prismatecnologia.com.br" target="_blank" rel="noopener">Prisma Tecnologia</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/js/script.js"></script>
    
    <script>
        // Inicializar AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Inicializar Particles.js
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#8b5cf6" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#8b5cf6",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                }
            }
        });
    </script>
</body>
</html>