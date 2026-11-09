<?php

return [

    // Metadades de la pàgina
    'meta_title' => 'Iker Latorre — Desenvolupador Back-End | Full-Stack',
    'meta_description' => 'Portfolio d’Iker Latorre, desenvolupador de programari especialitzat en PHP (Symfony, Laravel) amb més de 8 anys d’experiència.',

    // Navegació
    'nav' => [
        'home' => 'Inici',
        'experience' => 'Experiència',
        'skills' => 'Habilitats',
        'education' => 'Educació',
        'languages' => 'Idiomes',
        'stack' => 'Stack',
        'contact' => 'Contacte',
    ],

    // Interfície / selector d’idioma
    'ui' => [
        'select_language' => 'Idioma',
        'scroll_down' => 'Descobreix-ne més',
    ],

    // Capçalera / Hero
    'hero' => [
        'first_name' => 'Iker',
        'last_name' => 'Latorre',
        'role' => 'Desenvolupador Back-End | Full-Stack',
        'summary' => 'Desenvolupador de programari amb més de 8 anys d’experiència, especialitzat en PHP (Symfony, Laravel) i bases de dades relacionals. Evolució progressiva des de suport i QA fins a desenvolupament core i lideratge com a Scrum Master. Aporto autonomia sota pressió, pensament crític, visió de producte i gran capacitat per auditar codi complex. Pacient, disciplinat i acostumat a unificar criteris en equips heterogenis.',
        'cta_contact' => 'Parlem-ne',
        'cta_experience' => 'Veure experiència',
        'cta_download_cv' => 'Descarregar CV',
        'short_location' => 'Barcelona',
    ],

    // Secció: Experiència Professional
    'experience' => [
        'title' => 'Experiència Professional',
        'subtitle' => 'La meva trajectòria, des del suport tècnic fins al lideratge d’equips de desenvolupament.',
        'items' => [
            [
                'role' => 'Desenvolupador Back-End & Scrum Master',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2024 — 2026',
                'description' => 'Manteniment i desenvolupament del core (documents oficials i càlculs normatius, entre d’altres) i definició tècnica de producte. Com a Scrum Master, vaig gestionar l’equip de Compliance, unificant criteris i assegurant lliuraments àgils.',
            ],
            [
                'role' => 'Desenvolupador Back-End',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2021 — 2024',
                'description' => 'Desenvolupament de noves funcionalitats i correcció d’errors, especialitzant-me en el mòdul de comptabilitat i en documentació oficial crítica (expedients, butlletins).',
            ],
            [
                'role' => 'Tècnic de Qualitat (QA) i Suport',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2019 — 2021',
                'description' => 'Auditoria i validació de codi aliè. Resolució autònoma d’incidències complexes sota alta pressió.',
            ],
            [
                'role' => 'Tècnic en Pràctiques DUAL',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2018 — 2019',
                'description' => 'Suport en incidències i assimilació de l’arquitectura del sistema.',
            ],
            [
                'role' => 'Tècnic en Sistemes Microinformàtics i Xarxes (pràctiques)',
                'company' => 'Institut El Calamot',
                'location' => 'Gavà',
                'period' => '2017 — 2018',
                'description' => 'Manteniment d’equips, gestió de xarxes locals i suport informàtic.',
            ],
            [
                'role' => 'Instructor d’Arts Marcials',
                'company' => 'Mugendo',
                'location' => 'Castelldefels',
                'period' => '2014 — 2016',
                'description' => 'Gestió de grups i ensenyament des de nens de 3 anys fins a adults. Foment d’habilitats transversals com la disciplina, la paciència, el respecte i el treball en equip, qualitats que aplico diàriament en la gestió de l’estrès, la resolució de conflictes tècnics i el tracte amb perfils diversos.',
                'photo' => 'images/black-belt.jpg',
                'photo_alt' => 'Iker Latorre amb el seu cinturó negre com a instructor d’arts marcials',
            ],
        ],
    ],

    // Secció: Habilitats Tècniques
    'skills' => [
        'title' => 'Habilitats Tècniques',
        'subtitle' => 'Tecnologies i eines que domino i utilitzo en el meu dia a dia.',
        'groups' => [
            [
                'title' => 'Desenvolupament',
                'description' => 'PHP (Laravel, Symfony), JavaScript (jQuery), Python, nocions de C++/C#. Familiaritzat amb ecosistemes React, Angular i Java.',
            ],
            [
                'title' => 'Bases de Dades & Infraestructura',
                'description' => 'MySQL, Amazon Web Services (AWS), Cloudflare, Docker.',
            ],
            [
                'title' => 'Entorns & Eines',
                'description' => 'Linux, Windows, macOS, VS Code, Git, metodologies àgils (Scrum).',
            ],
            [
                'title' => 'Innovació & Homelab',
                'description' => 'Gestió de servidors virtuals amb Proxmox, automatització domòtica avançada amb HomeAssistant i desenvolupament de Skills per a Amazon Alexa. Comprensió pràctica d’eines d’IA aplicades al desenvolupament.',
            ],
        ],
    ],

    // Secció: Educació
    'education' => [
        'title' => 'Educació',
        'subtitle' => 'Formació acadèmica i tècnica.',
        'items' => [
            [
                'degree' => 'Enginyeria Informàtica',
                'institution' => 'Universitat Oberta de Catalunya',
                'period' => '2019 — Actualitat',
            ],
            [
                'degree' => 'Tècnic superior en desenvolupament d’aplicacions multiplataforma',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2018 — 2019',
            ],
            [
                'degree' => 'Tècnic en sistemes microinformàtics i xarxes',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2017 — 2018',
            ],
        ],
    ],

    // Secció: Idiomes
    'languages' => [
        'title' => 'Idiomes',
        'subtitle' => 'Competències lingüístiques i experiència d’immersió internacional.',
        'items' => [
            [
                'name' => 'Castellà',
                'level' => 'Natiu',
            ],
            [
                'name' => 'Català',
                'level' => 'Natiu',
            ],
            [
                'name' => 'Anglès',
                'level' => 'B2 → C1',
                'note' => 'Actualment en formació, cursant C1 a Oxford House, Barcelona.',
            ],
        ],
        'immersion_title' => 'Experiència d’immersió lingüística internacional a:',
        'immersion_photo_alt' => 'Iker Latorre durant la seva estada d’immersió lingüística a Nova York',
        'immersion' => [
            ['place' => 'BSC Dublin', 'period' => '08/2019'],
            ['place' => 'EF Brighton', 'period' => '08/2022'],
            ['place' => 'EF New York', 'period' => '07/2023 → 08/2023'],
            ['place' => 'ELC Bristol', 'period' => '09/2026 → 10/2026'],
        ],
    ],

    // Secció: Behind the Stack (arquitectura tècnica)
    'behind_stack' => [
        'title' => 'Behind the Stack',
        'subtitle' => 'L’arquitectura i les eines darrere d’aquesta web.',
        'items' => [
            [
                'name' => 'Laravel 13',
                'description' => 'Framework PHP principal, encarregat de l’enrutament, la lògica de negoci i el renderitzat de vistes Blade.',
            ],
            [
                'name' => 'Tailwind CSS v4',
                'description' => 'Sistema de disseny utility-first amb la paleta de colors personalitzada verd oliva / gris fosc.',
            ],
            [
                'name' => 'i18n dinàmic (ES/CA/EN)',
                'description' => 'Detecció i intercanvi d’idioma en temps real mitjançant middleware i sessió, sense recarregar l’arquitectura.',
            ],
            [
                'name' => 'Proxmox (LXC Debian)',
                'description' => 'Allotjat en un contenidor LXC Debian sobre un hipervisor Proxmox autogestionat.',
            ],
            [
                'name' => 'Proxy Cloudflare IPv6',
                'description' => 'Trànsit servit a través de proxy Cloudflare, amb suport IPv6 i protecció DDoS.',
            ],
            [
                'name' => 'Desenvolupament assistit per IA',
                'description' => 'Iteració de codi i arquitectura amb Claude 3.5 Sonnet a través de Cline, fent servir el protocol MCP.',
            ],
        ],
    ],

    // Secció: Contacte
    'contact' => [
        'title' => 'Contacte',
        'subtitle' => 'Parlem?',
        'phone_label' => 'Telèfon',
        'phone' => '655 311 468',
        'email_label' => 'Email',
        'email' => 'iker.latorre@proton.me',
        'location_label' => 'Població',
        'location' => 'Viladecans, BCN',
        'linkedin_label' => 'Linkedin',
        'linkedin' => 'linkedin.com/in/iker-latorre',
        'linkedin_url' => 'https://www.linkedin.com/in/iker-latorre',
    ],

    // Peu de pàgina
    'footer' => [
        'rights' => 'Tots els drets reservats.',
    ],

];
