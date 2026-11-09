<?php

return [

    // Page metadata
    'meta_title' => 'Iker Latorre — Back-End | Full-Stack Developer',
    'meta_description' => 'Portfolio of Iker Latorre, a software developer specialized in PHP (Symfony, Laravel) with more than 8 years of experience.',

    // Navigation
    'nav' => [
        'home' => 'Home',
        'experience' => 'Experience',
        'skills' => 'Skills',
        'education' => 'Education',
        'languages' => 'Languages',
        'stack' => 'Stack',
        'contact' => 'Contact',
    ],

    // UI / language selector
    'ui' => [
        'select_language' => 'Language',
        'scroll_down' => 'Discover more',
    ],

    // Header / Hero
    'hero' => [
        'first_name' => 'Iker',
        'last_name' => 'Latorre',
        'role' => 'Back-End | Full-Stack Developer',
        'summary' => 'Software developer with more than 8 years of experience, specialized in PHP (Symfony, Laravel) and relational databases. Progressive evolution from support and QA to core development and leadership as Scrum Master. I bring autonomy under pressure, critical thinking, product vision and a strong ability to audit complex code. Patient, disciplined and used to aligning criteria across heterogeneous teams.',
        'cta_contact' => 'Let’s talk',
        'cta_experience' => 'View experience',
        'cta_download_cv' => 'Download CV',
        'short_location' => 'Barcelona, Spain',
    ],

    // Section: Professional Experience
    'experience' => [
        'title' => 'Professional Experience',
        'subtitle' => 'My career path, from technical support to leading development teams.',
        'items' => [
            [
                'role' => 'Back-End Developer & Scrum Master',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2024 — 2026',
                'description' => 'Maintenance and development of the core platform (official documents and regulatory calculations, among others) and technical product definition. As Scrum Master, I managed the Compliance team, aligning criteria and ensuring agile deliveries.',
            ],
            [
                'role' => 'Back-End Developer',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2021 — 2024',
                'description' => 'Development of new features and bug fixing, specializing in the accounting module and critical official documentation (records, bulletins).',
            ],
            [
                'role' => 'Quality Assurance (QA) & Support Technician',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2019 — 2021',
                'description' => 'Auditing and validation of third-party code. Autonomous resolution of complex incidents under high pressure.',
            ],
            [
                'role' => 'DUAL Internship Technician',
                'company' => 'Clickedu',
                'location' => 'Barcelona',
                'period' => '2018 — 2019',
                'description' => 'Incident support and assimilation of the system architecture.',
            ],
            [
                'role' => 'Microcomputer Systems and Networks Technician (internship)',
                'company' => 'Institut El Calamot',
                'location' => 'Gavà',
                'period' => '2017 — 2018',
                'description' => 'Equipment maintenance, local network management and IT support.',
            ],
            [
                'role' => 'Martial Arts Instructor',
                'company' => 'Mugendo',
                'location' => 'Castelldefels',
                'period' => '2014 — 2016',
                'description' => 'Group management and teaching for students ranging from 3 years old to adults. Fostering transversal skills such as discipline, patience, respect and teamwork, qualities I apply daily to stress management, technical conflict resolution and dealing with diverse profiles.',
                'photo' => 'images/black-belt.jpg',
                'photo_alt' => 'Iker Latorre wearing his black belt as a martial arts instructor',
            ],
        ],
    ],

    // Section: Technical Skills
    'skills' => [
        'title' => 'Technical Skills',
        'subtitle' => 'Technologies and tools I master and use on a daily basis.',
        'groups' => [
            [
                'title' => 'Development',
                'description' => 'PHP (Laravel, Symfony), JavaScript (jQuery), Python, basic C++/C#. Familiar with the React, Angular and Java ecosystems.',
            ],
            [
                'title' => 'Databases & Infrastructure',
                'description' => 'MySQL, Amazon Web Services (AWS), Cloudflare, Docker.',
            ],
            [
                'title' => 'Environments & Tools',
                'description' => 'Linux, Windows, macOS, VS Code, Git, agile methodologies (Scrum).',
            ],
            [
                'title' => 'Innovation & Homelab',
                'description' => 'Management of virtual servers with Proxmox, advanced home automation with HomeAssistant and development of Skills for Amazon Alexa. Practical understanding of AI tools applied to development.',
            ],
        ],
    ],

    // Section: Education
    'education' => [
        'title' => 'Education',
        'subtitle' => 'Academic and technical training.',
        'items' => [
            [
                'degree' => 'Computer Engineering',
                'institution' => 'Universitat Oberta de Catalunya',
                'period' => '2019 — Present',
            ],
            [
                'degree' => 'Higher Technician in Multiplatform Application Development',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2018 — 2019',
            ],
            [
                'degree' => 'Technician in Microcomputer Systems and Networks',
                'institution' => 'Institut El Calamot, Gavà',
                'period' => '2017 — 2018',
            ],
        ],
    ],

    // Section: Languages
    'languages' => [
        'title' => 'Languages',
        'subtitle' => 'Language proficiency and international immersion experience.',
        'items' => [
            [
                'name' => 'Spanish',
                'level' => 'Native',
            ],
            [
                'name' => 'Catalan',
                'level' => 'Native',
            ],
            [
                'name' => 'English',
                'level' => 'B2 → C1',
                'note' => 'Currently training towards C1 level at Oxford House, Barcelona.',
            ],
        ],
        'immersion_title' => 'International language immersion experience in:',
        'immersion_photo_alt' => 'Iker Latorre during his language immersion stay in New York',
        'immersion' => [
            ['place' => 'BSC Dublin', 'period' => '08/2019'],
            ['place' => 'EF Brighton', 'period' => '08/2022'],
            ['place' => 'EF New York', 'period' => '07/2023 → 08/2023'],
            ['place' => 'ELC Bristol', 'period' => '09/2026 → 10/2026'],
        ],
    ],

    // Section: Behind the Stack (technical architecture)
    'behind_stack' => [
        'title' => 'Behind the Stack',
        'subtitle' => 'The architecture and tools behind this website.',
        'items' => [
            [
                'name' => 'Laravel 13',
                'description' => 'Main PHP framework, handling routing, business logic and Blade view rendering.',
            ],
            [
                'name' => 'Tailwind CSS v4',
                'description' => 'Utility-first design system with a custom olive green / dark charcoal color palette.',
            ],
            [
                'name' => 'Dynamic i18n (ES/CA/EN)',
                'description' => 'Real-time locale detection and switching via middleware and session, without reloading the architecture.',
            ],
            [
                'name' => 'Proxmox (LXC Debian)',
                'description' => 'Hosted on a Debian LXC container on top of a self-managed Proxmox hypervisor.',
            ],
            [
                'name' => 'Cloudflare IPv6 Proxy',
                'description' => 'Traffic served through a Cloudflare proxy, with IPv6 support and DDoS protection.',
            ],
            [
                'name' => 'AI-assisted development',
                'description' => 'Code and architecture iteration with Claude 3.5 Sonnet through Cline, using the MCP protocol.',
            ],
        ],
    ],

    // Section: Contact
    'contact' => [
        'title' => 'Contact',
        'subtitle' => 'Let’s talk?',
        'phone_label' => 'Phone',
        'phone' => '655 311 468',
        'email_label' => 'Email',
        'email' => 'iker.latorre@proton.me',
        'location_label' => 'Location',
        'location' => 'Viladecans, Barcelona',
        'linkedin_label' => 'LinkedIn',
        'linkedin' => 'linkedin.com/in/iker-latorre',
        'linkedin_url' => 'https://www.linkedin.com/in/iker-latorre',
    ],

    // Footer
    'footer' => [
        'rights' => 'All rights reserved.',
    ],

];
