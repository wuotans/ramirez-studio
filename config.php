<?php
// Configurações do site Ramirez Studio
define('SITE_NAME', 'Ramirez Studio');
define('SITE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");
define('PHONE', '+55 (11) 99999-9999');
define('EMAIL', 'contato@ramirezstudio.com.br');
define('ADDRESS', 'São Paulo, Brasil');
define('INSTAGRAM', 'https://instagram.com/ramirezstudio');
define('YOUTUBE', 'https://youtube.com/ramirezstudio');
define('WHATSAPP', 'https://wa.me/5511999999999');
define('LINKEDIN', 'https://linkedin.com/company/ramirezstudio');
define('BEHANCE', 'https://behance.net/ramirezstudio');

// Dados dos serviços
$services = [
    [
        'icon' => '🎬',
        'title' => 'Edição de Vídeo Profissional',
        'description' => 'Edição criativa para YouTube, redes sociais, comerciais e conteúdos corporativos com efeitos visuais impactantes.',
        'color' => '#8b5cf6'
    ],
    [
        'icon' => '📸',
        'title' => 'Produção Fotográfica',
        'description' => 'Sessões fotográficas profissionais, ensaios corporativos e tratamento de imagens de alta qualidade.',
        'color' => '#ec4899'
    ],
    [
        'icon' => '📱',
        'title' => 'Marketing Digital',
        'description' => 'Gestão de redes sociais, criação de conteúdo e estratégias para engajar e converter seu público.',
        'color' => '#f59e0b'
    ],
    [
        'icon' => '🎨',
        'title' => 'Design Gráfico',
        'description' => 'Criação de identidade visual, logos, materiais promocionais e artes para redes sociais.',
        'color' => '#10b981'
    ],
    [
        'icon' => '💻',
        'title' => 'Motion Graphics',
        'description' => 'Animações e gráficos em movimento para vídeos explicativos, comerciais e apresentações.',
        'color' => '#3b82f6'
    ],
    [
        'icon' => '🎵',
        'title' => 'Trilhas Sonoras',
        'description' => 'Produção musical original e edição de áudio profissional para seus projetos audiovisuais.',
        'color' => '#ef4444'
    ]
];

// Dados do portfólio
$portfolio = [
    [
        'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Campanha Publicitária - Moda',
        'category' => 'marketing',
        'client' => 'Marca Fashion',
        'year' => '2024'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Documentário Corporativo',
        'category' => 'edicao',
        'client' => 'Tech Solutions',
        'year' => '2024'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Sessão de Produtos',
        'category' => 'fotografia',
        'client' => 'Beauty Cosmetics',
        'year' => '2023'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Identidade Visual Completa',
        'category' => 'design',
        'client' => 'StartUp Inovação',
        'year' => '2023'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Animação Corporativa',
        'category' => 'motion',
        'client' => 'Empresa XYZ',
        'year' => '2024'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
        'title' => 'Trilha Sonora Original',
        'category' => 'audio',
        'client' => 'Documentário Natureza',
        'year' => '2023'
    ]
];

// Estatísticas da empresa
$stats = [
    ['number' => '200+', 'label' => 'Projetos Entregues', 'icon' => '🚀'],
    ['number' => '80+', 'label' => 'Clientes Satisfeitos', 'icon' => '💎'],
    ['number' => '5+', 'label' => 'Anos de Experiência', 'icon' => '⭐'],
    ['number' => '15+', 'label' => 'Prêmios Conquistados', 'icon' => '🏆']
];

// Depoimentos
$testimonials = [
    [
        'name' => 'Ana Silva',
        'company' => 'Marca Fashion',
        'text' => 'O Ramirez Studio transformou completamente nossa presença digital. Os vídeos criados engajaram 3x mais que o conteúdo anterior!',
        'avatar' => '👩‍💼',
        'rating' => 5
    ],
    [
        'name' => 'Carlos Santos',
        'company' => 'Tech Solutions',
        'text' => 'Profissionalismo e criatividade excepcionais. O documentário corporativo superou todas as expectativas da diretoria.',
        'avatar' => '👨‍💼',
        'rating' => 5
    ],
    [
        'name' => 'Marina Oliveira',
        'company' => 'Beauty Cosmetics',
        'text' => 'As fotos dos produtos ficaram incríveis! As vendas online aumentaram 40% após a nova sessão fotográfica.',
        'avatar' => '👩‍🎨',
        'rating' => 5
    ]
];
?>