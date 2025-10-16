<?php
require_once 'config.php';
define('PAGE_TITLE', 'Home');
?>
<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background">
            <div class="hero-particles" id="particles-js"></div>
            <div class="hero-gradient"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge" data-aos="fade-down">
                    <span class="badge-text">🎬 Studio Criativo Premium</span>
                </div>
                
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">
                    <span class="title-line">
                        <span class="text-reveal">Produção</span>
                    </span>
                    <span class="title-line">
                        <span class="text-gradient text-reveal">audiovisual</span>
                    </span>
                    <span class="title-line">
                        <span class="text-reveal">que transforma</span>
                    </span>
                </h1>
                
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="400">
                    Criamos experiências visuais memoráveis através de edição de vídeo, fotografia 
                    e estratégias de marketing que engajam e convertem.
                </p>
                
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="600">
                    <a href="#portfolio" class="btn btn-primary btn-hero" data-magnetic>
                        <span class="btn-icon">✨</span>
                        Ver Portfólio
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-hero" data-magnetic>
                        <span class="btn-icon">🎯</span>
                        Falar com Especialista
                    </a>
                </div>
                
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="800">
                    <div class="stat">
                        <div class="stat-number" data-count="200">0</div>
                        <div class="stat-label">Projetos</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number" data-count="5">0</div>
                        <div class="stat-label">Anos Exp</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number" data-count="15">0</div>
                        <div class="stat-label">Prêmios</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="floating-elements">
                    <div class="floating-card card-1" data-aos="fade-left" data-aos-delay="400">
                        <div class="card-inner">
                            <div class="card-icon">🎬</div>
                            <h4>Edição Profissional</h4>
                            <p>Vídeos que impressionam</p>
                        </div>
                    </div>
                    <div class="floating-card card-2" data-aos="fade-left" data-aos-delay="600">
                        <div class="card-inner">
                            <div class="card-icon">📸</div>
                            <h4>Fotografia Criativa</h4>
                            <p>Imagens que contam histórias</p>
                        </div>
                    </div>
                    <div class="floating-card card-3" data-aos="fade-left" data-aos-delay="800">
                        <div class="card-inner">
                            <div class="card-icon">📱</div>
                            <h4>Marketing Digital</h4>
                            <p>Estratégias que convertem</p>
                        </div>
                    </div>
                </div>
                
                <div class="hero-image" data-aos="zoom-in" data-aos-delay="1000">
                    <div class="image-container">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Estúdio Ramirez Studio" 
                             class="main-image">
                        <div class="image-overlay"></div>
                        <div class="floating-element element-1">✨</div>
                        <div class="floating-element element-2">🎨</div>
                        <div class="floating-element element-3">⚡</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="scroll-text">Scroll</div>
        </div>
        
        <div class="hero-waves">
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
            <div class="wave wave-3"></div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Confiado por marcas incríveis</p>
            </div>
            <div class="clients-slider">
                <div class="clients-track">
                    <div class="client-logo" data-aos="fade-up" data-aos-delay="100">
                        <span>🏢 TechCorp</span>
                    </div>
                    <div class="client-logo" data-aos="fade-up" data-aos-delay="200">
                        <span>👗 FashionCo</span>
                    </div>
                    <div class="client-logo" data-aos="fade-up" data-aos-delay="300">
                        <span>💄 BeautyLab</span>
                    </div>
                    <div class="client-logo" data-aos="fade-up" data-aos-delay="400">
                        <span>🚀 StartUp</span>
                    </div>
                    <div class="client-logo" data-aos="fade-up" data-aos-delay="500">
                        <span>🏦 FinancePro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <?php foreach($stats as $index => $stat): ?>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="stat-icon"><?php echo $stat['icon']; ?></div>
                    <div class="stat-content">
                        <div class="stat-number" data-count="<?php echo $stat['number']; ?>">0</div>
                        <div class="stat-label"><?php echo $stat['label']; ?></div>
                    </div>
                    <div class="stat-glow"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="section-title">
                            O <span class="text-gradient">Ramirez Studio</span>
                        </h2>
                        <p class="section-subtitle">Excelência em produção criativa</p>
                    </div>
                    
                    <p class="about-description">
                        Há mais de 5 anos no mercado, somos um estúdio criativo que combina 
                        <strong>tecnologia de ponta</strong> com <strong>criatividade sem limites</strong>. 
                        Nossa missão é transformar ideias em experiências visuais que cativam, 
                        engajam e convertem.
                    </p>
                    
                    <div class="about-features">
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="200">
                            <div class="feature-icon">⚡</div>
                            <div class="feature-content">
                                <h4>Produção Ágil</h4>
                                <p>Workflow otimizado para entregas rápidas sem comprometer a qualidade</p>
                            </div>
                        </div>
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="300">
                            <div class="feature-icon">🎯</div>
                            <div class="feature-content">
                                <h4>Foco em Resultados</h4>
                                <p>Estratégias data-driven para maximizar seu ROI</p>
                            </div>
                        </div>
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="400">
                            <div class="feature-icon">💎</div>
                            <div class="feature-content">
                                <h4>Qualidade Premium</h4>
                                <p>Equipamentos profissionais e equipe especializada</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-cta" data-aos="fade-up" data-aos-delay="500">
                        <a href="#contact" class="btn btn-primary" data-magnetic>
                            <span class="btn-icon">🚀</span>
                            Iniciar Projeto
                        </a>
                    </div>
                </div>
                
                <div class="about-visual" data-aos="fade-left">
                    <div class="about-image-container">
                        <div class="main-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                                 alt="Equipe Ramirez Studio" 
                                 class="about-image">
                            <div class="image-frame"></div>
                        </div>
                        
                        <div class="floating-badge experience" data-aos="zoom-in" data-aos-delay="600">
                            <div class="badge-content">
                                <span class="badge-number">5+</span>
                                <span class="badge-text">Anos de Experiência</span>
                            </div>
                        </div>
                        
                        <div class="floating-badge projects" data-aos="zoom-in" data-aos-delay="800">
                            <div class="badge-content">
                                <span class="badge-number">200+</span>
                                <span class="badge-text">Projetos Entregues</span>
                            </div>
                        </div>
                        
                        <div class="floating-badge team" data-aos="zoom-in" data-aos-delay="1000">
                            <div class="badge-content">
                                <span class="badge-number">12</span>
                                <span class="badge-text">Especialistas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">
                    Nossos <span class="text-gradient">Serviços</span>
                </h2>
                <p class="section-subtitle">Soluções completas em produção audiovisual e marketing</p>
            </div>
            
            <div class="services-grid">
                <?php foreach($services as $index => $service): ?>
                <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="service-card-inner">
                        <!-- Frente do Card -->
                        <div class="service-front">
                            <div class="service-header">
                                <div class="service-icon" style="background: <?php echo $service['color']; ?>">
                                    <?php echo $service['icon']; ?>
                                </div>
                                <div class="service-badge">Premium</div>
                            </div>
                            
                            <h3 class="service-title"><?php echo $service['title']; ?></h3>
                            <p class="service-description"><?php echo $service['description']; ?></p>
                            
                            <div class="service-features">
                                <span class="feature">✅ Edição 4K</span>
                                <span class="feature">✅ Efeitos Visuais</span>
                                <span class="feature">✅ Entrega Rápida</span>
                            </div>
                            
                            <div class="service-cta">
                                <span class="service-link">
                                    <span class="link-text">Saiba mais</span>
                                    <span class="link-arrow">→</span>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Verso do Card -->
                        <div class="service-back" style="background: linear-gradient(135deg, <?php echo $service['color']; ?> 0%, <?php echo $service['color']; ?>dd 100%)">
                            <div class="service-back-content">
                                <h3 class="service-back-title"><?php echo $service['title']; ?></h3>
                                <div class="service-back-features">
                                    <div class="back-feature">
                                        <span class="back-feature-icon">⚡</span>
                                        <span class="back-feature-text">Entrega em até 7 dias</span>
                                    </div>
                                    <div class="back-feature">
                                        <span class="back-feature-icon">🎨</span>
                                        <span class="back-feature-text">Revisões ilimitadas</span>
                                    </div>
                                    <div class="back-feature">
                                        <span class="back-feature-icon">💎</span>
                                        <span class="back-feature-text">Qualidade premium</span>
                                    </div>
                                    <div class="back-feature">
                                        <span class="back-feature-icon">📞</span>
                                        <span class="back-feature-text">Suporte dedicado</span>
                                    </div>
                                </div>
                                <div class="service-back-pricing">
                                    <span class="starting-from">A partir de</span>
                                    <span class="price">R$ 499</span>
                                </div>
                                <a href="#contact" class="btn btn-white" data-magnetic>
                                    Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                        
                        <div class="service-glow" style="background: <?php echo $service['color']; ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">
                    Nosso <span class="text-gradient">Processo</span>
                </h2>
                <p class="section-subtitle">Como transformamos suas ideias em realidade</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h3>Briefing & Planejamento</h3>
                        <p>Entendemos suas necessidades e criamos a estratégia perfeita</p>
                    </div>
                    <div class="step-connector"></div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h3>Produção & Criação</h3>
                        <p>Colocamos a mão na massa com criatividade e técnica</p>
                    </div>
                    <div class="step-connector"></div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="600">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h3>Revisão & Ajustes</h3>
                        <p>Seu feedback é essencial para perfeição do projeto</p>
                    </div>
                    <div class="step-connector"></div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="800">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h3>Entrega & Sucesso</h3>
                        <p>Projeto finalizado e pronto para impressionar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">
                    Nosso <span class="text-gradient">Portfólio</span>
                </h2>
                <p class="section-subtitle">Confira alguns dos nossos trabalhos recentes</p>
            </div>
            
            <div class="portfolio-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="marketing">Marketing</button>
                <button class="filter-btn" data-filter="edicao">Edição de Vídeo</button>
                <button class="filter-btn" data-filter="fotografia">Fotografia</button>
                <button class="filter-btn" data-filter="design">Design</button>
                <button class="filter-btn" data-filter="motion">Motion Graphics</button>
            </div>
            
            <div class="portfolio-grid">
                <?php foreach($portfolio as $index => $item): ?>
                <div class="portfolio-item" 
                     data-category="<?php echo $item['category']; ?>" 
                     data-aos="fade-up" 
                     data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="<?php echo $item['image']; ?>" 
                                 alt="<?php echo $item['title']; ?>" 
                                 class="portfolio-img">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><?php echo $item['title']; ?></h3>
                                    <p class="portfolio-category"><?php echo $item['category']; ?></p>
                                    <span class="portfolio-client"><?php echo $item['client']; ?></span>
                                    <span class="portfolio-year"><?php echo $item['year']; ?></span>
                                </div>
                                <div class="portfolio-actions">
                                    <button class="portfolio-btn view-btn" data-project="<?php echo $index; ?>">
                                        <span>👁️</span> Ver Projeto
                                    </button>
                                    <button class="portfolio-btn details-btn" data-project="<?php echo $index; ?>">
                                        <span>🔍</span> Detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="portfolio-cta" data-aos="fade-up">
                <a href="#contact" class="btn btn-primary" data-magnetic>
                    <span class="btn-icon">💼</span>
                    Quero um Projeto Similar
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">
                    O que <span class="text-gradient">dizem</span> sobre nós
                </h2>
                <p class="section-subtitle">Feedback de clientes satisfeitos</p>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonials-track">
                    <?php foreach($testimonials as $index => $testimonial): ?>
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 200; ?>">
                        <div class="testimonial-content">
                            <div class="testimonial-rating">
                                <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <span class="star">⭐</span>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><?php echo $testimonial['avatar']; ?></div>
                                <div class="author-info">
                                    <h4 class="author-name"><?php echo $testimonial['name']; ?></h4>
                                    <p class="author-company"><?php echo $testimonial['company']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-glow"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <div class="cta-text">
                    <h2 class="cta-title">Pronto para elevar sua presença digital?</h2>
                    <p class="cta-description">
                        Vamos criar conteúdo que engaja, converte e impressiona seu público. 
                        Transforme suas ideias em realidade com o Ramirez Studio.
                    </p>
                </div>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary btn-cta" data-magnetic>
                        <span class="btn-icon">🚀</span>
                        Iniciar Projeto
                    </a>
                    <a href="<?php echo WHATSAPP; ?>" class="btn btn-secondary btn-cta" target="_blank" data-magnetic>
                        <span class="btn-icon">💬</span>
                        Falar no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="section-title">
                            Vamos <span class="text-gradient">conversar</span>
                        </h2>
                        <p class="section-subtitle">Pronto para começar seu projeto?</p>
                    </div>
                    
                    <p class="contact-description">
                        Entre em contato e vamos discutir como podemos transformar 
                        suas ideias em conteúdo impactante.
                    </p>
                    
                    <div class="contact-details">
                        <div class="contact-item" data-aos="fade-right" data-aos-delay="200">
                            <div class="contact-icon">📧</div>
                            <div class="contact-text">
                                <h4>E-mail</h4>
                                <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
                            </div>
                        </div>
                        <div class="contact-item" data-aos="fade-right" data-aos-delay="300">
                            <div class="contact-icon">📞</div>
                            <div class="contact-text">
                                <h4>Telefone</h4>
                                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', PHONE); ?>"><?php echo PHONE; ?></a>
                            </div>
                        </div>
                        <div class="contact-item" data-aos="fade-right" data-aos-delay="400">
                            <div class="contact-icon">📍</div>
                            <div class="contact-text">
                                <h4>Localização</h4>
                                <span><?php echo ADDRESS; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-social" data-aos="fade-up" data-aos-delay="500">
                        <h4>Siga-nos</h4>
                        <div class="social-links">
                            <a href="<?php echo INSTAGRAM; ?>" class="social-link" target="_blank" data-magnetic>
                                <span class="social-icon">📷</span>
                                Instagram
                            </a>
                            <a href="<?php echo YOUTUBE; ?>" class="social-link" target="_blank" data-magnetic>
                                <span class="social-icon">🎬</span>
                                YouTube
                            </a>
                            <a href="<?php echo LINKEDIN; ?>" class="social-link" target="_blank" data-magnetic>
                                <span class="social-icon">💼</span>
                                LinkedIn
                            </a>
                            <a href="<?php echo BEHANCE; ?>" class="social-link" target="_blank" data-magnetic>
                                <span class="social-icon">🎨</span>
                                Behance
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper" data-aos="fade-left">
                    <div class="contact-form">
                        <form method="POST" action="process_contact.php" class="form" id="contactForm">
                            <div class="form-header">
                                <h3>Solicite seu Orçamento</h3>
                                <p>Preencha o formulário abaixo</p>
                            </div>
                            
                            <div class="form-grid">
                                <div class="form-group" data-aos="fade-up" data-aos-delay="200">
                                    <label for="name">Nome Completo *</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <div class="form-focus"></div>
                                </div>
                                
                                <div class="form-group" data-aos="fade-up" data-aos-delay="300">
                                    <label for="email">E-mail *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <div class="form-focus"></div>
                                </div>
                                
                                <div class="form-group" data-aos="fade-up" data-aos-delay="400">
                                    <label for="phone">Telefone/WhatsApp</label>
                                    <input type="tel" id="phone" name="phone" class="form-control">
                                    <div class="form-focus"></div>
                                </div>
                                
                                <div class="form-group" data-aos="fade-up" data-aos-delay="500">
                                    <label for="service">Serviço de Interesse *</label>
                                    <select id="service" name="service" class="form-control" required>
                                        <option value="">Selecione o serviço</option>
                                        <option value="edicao-video">Edição de Vídeo</option>
                                        <option value="fotografia">Fotografia</option>
                                        <option value="marketing">Marketing Digital</option>
                                        <option value="design">Design Gráfico</option>
                                        <option value="motion">Motion Graphics</option>
                                        <option value="audio">Produção Musical</option>
                                        <option value="completo">Pacote Completo</option>
                                    </select>
                                    <div class="form-focus"></div>
                                </div>
                                
                                <div class="form-group full-width" data-aos="fade-up" data-aos-delay="600">
                                    <label for="message">Conte-nos sobre seu projeto *</label>
                                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                                    <div class="form-focus"></div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block btn-submit" data-aos="fade-up" data-aos-delay="700">
                                <span class="btn-text">Enviar Proposta</span>
                                <span class="btn-loading">
                                    <div class="loading-spinner"></div>
                                </span>
                            </button>
                            
                            <?php if(isset($_GET['success'])): ?>
                                <div class="form-message success-message" data-aos="fade-up">
                                    ✅ Mensagem enviada com sucesso! Entraremos em contato em breve.
                                </div>
                            <?php endif; ?>
                            
                            <?php if(isset($_GET['error'])): ?>
                                <div class="form-message error-message" data-aos="fade-up">
                                    ❌ Erro ao enviar mensagem. Tente novamente ou entre em contato diretamente.
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>