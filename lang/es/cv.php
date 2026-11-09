<?php

return [

    // Metadatos de la página
    'meta_title' => 'Iker Latorre — Desarrollador Back-End | Full-Stack',
    'meta_description' => 'Portfolio de Iker Latorre, desarrollador de software especializado en PHP (Symfony, Laravel) con más de 8 años de experiencia.',

    // Navegación
    'nav' => [
        'home' => 'Inicio',
        'experience' => 'Experiencia',
        'skills' => 'Habilidades',
        'education' => 'Educación',
        'languages' => 'Idiomas',
        'stack' => 'Stack',
        'contact' => 'Contacto',
    ],

    // Interfaz / selector de idioma
    'ui' => [
        'select_language' => 'Idioma',
        'scroll_down' => 'Descubre más',
        'theme_light' => 'Modo claro',
        'theme_dark' => 'Modo oscuro',
        'theme_system' => 'Sistema',
        'theme_toggle' => 'Cambiar tema',
    ],

    // Cabecera / Hero
    'hero' => [
        'first_name' => 'Iker',
        'last_name' => 'Latorre',
        'role' => 'Desarrollador Back-End | Full-Stack',
        'summary' => 'Desarrollador de software con más de 8 años de experiencia, especializado en PHP (Symfony, Laravel) y bases de datos relacionales. Evolución progresiva desde soporte y QA hasta desarrollo core y liderazgo como Scrum Master. Aporto autonomía bajo presión, pensamiento crítico, visión de producto y gran capacidad para auditar código complejo. Paciente, disciplinado y acostumbrado a unificar criterios en equipos heterogéneos.',
        'cta_contact' => 'Hablemos',
        'cta_experience' => 'Ver experiencia',
        'cta_download_cv' => 'Descargar CV',
        'short_location' => 'Barcelona',
    ],

    // Sección: Experiencia Profesional
    'experience' => [
        'title' => 'Experiencia Profesional',
        'subtitle' => 'Mi trayectoria, desde el soporte técnico hasta el liderazgo de equipos de desarrollo.',
        'items' => [
            [
                'role' => 'Desarrollador Back-End & Scrum Master',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2024 — 2026',
                'description' => 'Mantenimiento y desarrollo del core (documentos oficiales y cálculos normativos, entre otros) y definición técnica de producto. Como Scrum Master, gestioné el equipo de Compliance, unificando criterios y asegurando entregas ágiles.',
            ],
            [
                'role' => 'Desarrollador Back-End',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2021 — 2024',
                'description' => 'Desarrollo de nuevas funcionalidades y corrección de bugs, especializándome en el módulo de contabilidad y en documentación oficial crítica (expedientes, boletines).',
            ],
            [
                'role' => 'Técnico de Calidad (QA) y Soporte',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2019 — 2021',
                'description' => 'Auditoría y validación de código ajeno. Resolución autónoma de incidencias complejas bajo alta presión.',
            ],
            [
                'role' => 'Técnico en Prácticas DUAL',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2018 — 2019',
                'description' => 'Soporte en incidencias y asimilación de la arquitectura del sistema.',
            ],
            [
                'role' => 'Técnico en Sistemas Microinformáticos y Redes (prácticas)',
                'company' => 'Escola Oficial d\'Idiomes de Viladecans',
                'location' => 'Viladecans',
                'period' => '2017 — 2018',
                'description' => 'Mantenimiento de equipos, gestión de redes locales y soporte informático.',
                'photo' => 'images/logo-eoi.jpg',
                'photo_alt' => 'Logo EOI',
            ],
            [
                'role' => 'Instructor de Artes Marciales',
                'company' => 'Mugendo',
                'location' => 'Castelldefels',
                'period' => '2014 — 2016',
                'description' => 'Gestión de grupos y enseñanza desde niños de 3 años hasta adultos. Fomento de habilidades transversales como la disciplina, la paciencia, el respeto y el trabajo en equipo, cualidades que aplico diariamente en la gestión del estrés, la resolución de conflictos técnicos y el trato con perfiles diversos.',
                'photo' => 'images/black-belt.jpg',
                'photo_alt' => 'Iker Latorre con su cinturón negro como instructor de artes marciales',
            ],
        ],
    ],

    // Sección: Habilidades Técnicas
    'skills' => [
        'title' => 'Habilidades Técnicas',
        'subtitle' => 'Tecnologías y herramientas que domino y utilizo en mi día a día.',
        'groups' => [
            [
                'title' => 'Desarrollo',
                'description' => 'PHP (Laravel, Symfony), JavaScript (jQuery), Python, nociones de C++/C#. Familiarizado con ecosistemas React, Angular y Java.',
            ],
            [
                'title' => 'Bases de Datos & Infraestructura',
                'description' => 'MySQL, Amazon Web Services (AWS), Cloudflare, Docker.',
            ],
            [
                'title' => 'Entornos & Herramientas',
                'description' => 'Linux, Windows, macOS, VS Code, Git, metodologías ágiles (Scrum).',
            ],
            [
                'title' => 'Innovación & Homelab',
                'description' => 'Gestión de servidores virtuales con Proxmox, automatización domótica avanzada con HomeAssistant y desarrollo de Skills para Amazon Alexa. Entendimiento práctico de herramientas de IA aplicadas al desarrollo.',
            ],
        ],
    ],

    // Sección: Educación
    'education' => [
        'title' => 'Educación',
        'subtitle' => 'Formación académica y técnica.',
        'items' => [
            [
                'degree' => 'Ingeniería Informática',
                'institution' => 'Universitat Oberta de Catalunya',
                'period' => '2019 — Actualidad',
            ],
            [
                'degree' => 'Técnico superior en desarrollo de aplicaciones multiplataforma',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2018 — 2019',
            ],
            [
                'degree' => 'Técnico en sistemas microinformáticos y redes',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2017 — 2018',
            ],
        ],
    ],

    // Sección: Idiomas
    'languages' => [
        'title' => 'Idiomas',
        'subtitle' => 'Competencias lingüísticas y experiencia de inmersión internacional.',
        'items' => [
            [
                'name' => 'Castellano',
                'level' => 'Nativo',
            ],
            [
                'name' => 'Catalán',
                'level' => 'Nativo',
            ],
            [
                'name' => 'Inglés',
                'level' => 'B2 → C1',
                'note' => 'Actualmente en formación, cursando C1 en Oxford House, Barcelona.',
            ],
        ],
        'immersion_title' => 'Experiencia de inmersión lingüística internacional en:',
        'immersion_photo_alt' => 'Iker Latorre durante su estancia de inmersión lingüística en Nueva York',
        'immersion' => [
            ['place' => 'BSC Dublin', 'period' => '08/2019'],
            ['place' => 'EF Brighton', 'period' => '08/2022'],
            ['place' => 'EF New York', 'period' => '07/2023 → 08/2023'],
            ['place' => 'ELC Bristol', 'period' => '09/2026 → 10/2026'],
        ],
    ],

    // Sección: Behind the Stack (arquitectura técnica)
    'behind_stack' => [
        'title' => 'Behind the Stack',
        'subtitle' => 'La arquitectura y las herramientas detrás de esta web.',
        'items' => [
            [
                'name' => 'Laravel 13',
                'description' => 'Framework PHP principal, encargado del enrutado, la lógica de negocio y el renderizado de vistas Blade.',
            ],
            [
                'name' => 'Tailwind CSS v4',
                'description' => 'Sistema de diseño utility-first con la paleta de colores personalizada verde oliva / gris oscuro.',
            ],
            [
                'name' => 'i18n dinámico (ES/CA/EN)',
                'description' => 'Detección e intercambio de idioma en tiempo real mediante middleware y sesión, sin recargar la arquitectura.',
            ],
            [
                'name' => 'Proxmox (LXC Debian)',
                'description' => 'Alojado en un contenedor LXC Debian sobre un hipervisor Proxmox autogestionado.',
            ],
            [
                'name' => 'Proxy Cloudflare IPv6',
                'description' => 'Tráfico servido a través de proxy Cloudflare, con soporte IPv6 y protección DDoS.',
            ],
            [
                'name' => 'Desarrollo asistido por IA',
                'description' => 'Iteración de código y arquitectura con Claude 3.5 Sonnet a través de Cline, usando el protocolo MCP.',
            ],
        ],
    ],

    // Sección: Contacto
    'contact' => [
        'title' => 'Contacto',
        'subtitle' => '¿Hablamos?',
        'phone_label' => 'Teléfono',
        'phone' => '655 311 468',
        'email_label' => 'Email',
        'email' => 'iker.latorre@proton.me',
        'location_label' => 'Población',
        'location' => 'Viladecans, BCN',
        'linkedin_label' => 'Linkedin',
        'linkedin' => 'linkedin.com/in/iker-latorre',
        'linkedin_url' => 'https://www.linkedin.com/in/iker-latorre',
    ],

    // Pie de página
    'footer' => [
        'rights' => 'Todos los derechos reservados.',
    ],

];
