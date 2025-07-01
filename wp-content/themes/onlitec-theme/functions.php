<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menus([
  'primary' => 'Menu Principal',
]);

function onlitec_enqueue() {
  // Tailwind via CDN
  wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
  // Font Awesome icons
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');
  // React + ReactDOM
  wp_enqueue_script('react',  'https://cdn.jsdelivr.net/npm/react/umd/react.production.min.js', [], null, true);
  wp_enqueue_script('react-dom','https://cdn.jsdelivr.net/npm/react-dom/umd/react-dom.production.min.js',[],null,true);
  // nosso bundle
  wp_enqueue_script('onlitec-main', get_template_directory_uri().'/assets/js/main.js', ['react','react-dom'], '1.0', true);
  // estilo customizado para navegação
  wp_enqueue_style('onlitec-custom', get_template_directory_uri().'/assets/css/custom-nav.css', ['tailwind'], '1.0');
}
add_action('wp_enqueue_scripts','onlitec_enqueue');

// SEO & Social meta tags
function onlitec_meta_tags() {
  if (is_admin()) return;
  global $post;
  $title = wp_get_document_title();
  $desc  = get_bloginfo('description');
  if (is_singular() && isset($post)) {
      $excerpt = has_excerpt($post->ID) ? get_the_excerpt($post) : '';
      if ($excerpt) { $desc = wp_strip_all_tags($excerpt); }
  }
  $image = get_template_directory_uri().'/assets/images/og-default.jpg';
  if (is_singular() && has_post_thumbnail()) {
      $image = get_the_post_thumbnail_url(null, 'large');
  }
  echo "\n<meta name='description' content='".esc_attr($desc)."' />\n";
  echo "<meta property='og:title' content='".esc_attr($title)."' />\n";
  echo "<meta property='og:description' content='".esc_attr($desc)."' />\n";
  echo "<meta property='og:type' content='website' />\n";
  echo "<meta property='og:url' content='".esc_url( home_url( add_query_arg( null, null ) ) )."' />\n";
  echo "<meta property='og:image' content='".esc_url($image)."' />\n";
  echo "<meta name='twitter:card' content='summary_large_image' />\n";
}
add_action('wp_head','onlitec_meta_tags');

/* --------------------------------------------------------------------------
 * Performance optimizations (emoji cleanup, DNS prefetch, script defer)
 * --------------------------------------------------------------------------*/
// Remove WP emoji scripts/styles
function onlitec_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'onlitec_disable_emojis');

// Add preconnect / dns-prefetch to external CDNs
function onlitec_resource_hints($hints, $relation_type) {
    if ('preconnect' === $relation_type || 'dns-prefetch' === $relation_type) {
        $hints[] = 'https://cdn.jsdelivr.net';
        $hints[] = 'https://cdnjs.cloudflare.com';
    }
    return $hints;
}
add_filter('wp_resource_hints', 'onlitec_resource_hints', 10, 2);

// Defer heavy JS files
function onlitec_defer_scripts($tag, $handle) {
    $defer = ['react','react-dom','onlitec-main'];
    if (in_array($handle, $defer)) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag','onlitec_defer_scripts',10,2);

// Async Font Awesome (swap after load)
function onlitec_async_fontawesome($tag, $handle) {
    if ($handle === 'fontawesome') {
        return str_replace("rel='stylesheet'", "rel='stylesheet' media='print' onload=\"this.media='all'\"", $tag);
    }
    return $tag;
}
add_filter('style_loader_tag','onlitec_async_fontawesome',10,2);

// Cria páginas essenciais e menu principal quando o tema é ativado
function onlitec_create_pages() {
    // páginas principais [Título, slug, template]
    $pages = [
        ['Home', 'home', 'front-page.php'],
        ['Sobre', 'sobre', 'page-sobre.php'],
        ['Serviços', 'servicos', 'page-servicos.php'],
        ['Soluções Tecnológicas', 'solucoes-tecnologicas', 'page-solucoes-tecnologicas.php'],
        ['Clientes', 'clientes', 'page-clientes.php'],
        ['Contato', 'contato', 'page-contato.php'],
    ];
    $created_ids = [];
    foreach ($pages as $p) {
        $existing = get_page_by_path($p[1]);
        if (!$existing) {
            $id = wp_insert_post([
                'post_title'   => $p[0],
                'post_name'    => $p[1],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'page_template'=> $p[2],
            ]);
            $created_ids[$p[1]] = $id;
        } else {
            $created_ids[$p[1]] = $existing->ID;
        }
    }
        // Criar subpáginas de serviços
    if (isset($created_ids['servicos'])) {
        $services = [
            'nuvem' => 'Serviços de Nuvem',
            'infraestrutura' => 'Infraestrutura de TI',
            'desenvolvimento' => 'Desenvolvimento de Software',
            'sistemas-operacionais' => 'Sistemas Operacionais',
            'ciberseguranca' => 'Cibersegurança',
            'suporte-helpdesk' => 'Suporte Técnico e Help Desk',
            'consultoria' => 'Consultoria de TI',
            'gestao-dados' => 'Gestão de Dados e BI',
            'rede-conectividade' => 'Serviços de Rede e Conectividade',
            'automacao-ia' => 'Automação e IA',
            'backup' => 'Backup e Continuidade',
            'treinamento' => 'Treinamento e Educação',
            'devops' => 'DevOps e Automação',
            'iot' => 'Internet das Coisas (IoT)',
            'outsourcing' => 'Manutenção e Outsourcing',
        ];
        // conteúdo HTML para cada serviço
        $service_contents = [
            'nuvem' => <<<HTML
<h2 class="text-2xl font-semibold mb-4">Por que escolher Serviços de Nuvem?</h2>
<p>A computação em nuvem oferece modelos <strong>IaaS, PaaS, SaaS</strong> e até <strong>FaaS</strong>, permitindo que sua empresa pague apenas pelo que consome e escale recursos sob demanda. Trabalhamos com os principais provedores (AWS, Azure, Google Cloud) para entregar ambientes híbridos e multi-nuvem com alta disponibilidade.</p>
<h3 class="text-xl font-semibold mt-6">Benefícios</h3>
<ul class="list-disc ml-6">
  <li>Redução de custos com investimento em hardware.</li>
  <li>Escalabilidade em minutos para atender picos de demanda.</li>
  <li>Recuperação de desastres simplificada com backups georreplicados.</li>
  <li>Segurança avançada com criptografia end-to-end.</li>
</ul>
<h3 class="text-xl font-semibold mt-6">Casos de Uso</h3>
<ul class="list-disc ml-6">
  <li>Migração de data center legado para AWS, reduzindo gastos em 35%.</li>
  <li>Implementação de ambiente multi-nuvem para e-commerce com 99,99% de uptime.</li>
</ul>
<h3 class="text-xl font-semibold mt-6">Por que a Onlitec?</h3>
<p>Oferecemos <em>suporte 24/7</em>, arquitetura otimizada e gestão contínua, garantindo que sua jornada para a nuvem seja segura e sem downtime.</p>
<a href="/contato" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Solicite um Orçamento</a>
HTML,
            'infraestrutura' => <<<HTML
<h2 class="text-2xl font-semibold mb-4">Infraestrutura de TI Gerenciada</h2>
<p>Do data center ao desktop, cuidamos de <strong>servidores físicos e virtuais</strong>, redes, armazenamento e virtualização. Adotamos práticas de <em>software-defined infrastructure</em> para garantir elasticidade e alta performance.</p>
<h3 class="text-xl font-semibold mt-6">Benefícios</h3>
<ul class="list-disc ml-6"><li>Alta disponibilidade com balanceamento de carga.</li><li>Monitoramento proativo 24/7.</li><li>Redução de falhas e tempo de inatividade.</li></ul>
<h3 class="text-xl font-semibold mt-6">Casos de Uso</h3>
<ul class="list-disc ml-6"><li>Renovação de parque de servidores em data center Tier III.</li><li>Virtualização de 120 máquinas reduzindo consumo de energia em 40%.</li></ul>
<h3 class="text-xl font-semibold mt-6">Diferenciais Onlitec</h3>
<p>Equipe certificada VMware, Cisco e Red Hat, com processos baseados em ITIL.</p>
<a href="/contato" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Fale com Especialistas</a>
HTML,
            'desenvolvimento' => <<<HTML
<h2 class="text-2xl font-semibold mb-4">Desenvolvimento de Software Sob Medida</h2>
<p>Criamos <strong>aplicativos web e móveis</strong> escaláveis usando micro-serviços, APIs REST/GraphQL e metodologias ágeis. Integramos CI/CD e DevSecOps para acelerar entregas com qualidade.</p>
<h3 class="text-xl font-semibold mt-6">Benefícios</h3>
<ul class="list-disc ml-6"><li>Time-to-market reduzido em até 50%.</li><li>Código seguro e testado automatizadamente.</li><li>Arquiteturas flexíveis para futuras evoluções.</li></ul>
<h3 class="text-xl font-semibold mt-6">Casos de Uso</h3>
<ul class="list-disc ml-6"><li>Plataforma de e-learning com 30 mil usuários simultâneos.</li><li>App logístico integrado a IoT para rastreamento em tempo real.</li></ul>
<h3 class="text-xl font-semibold mt-6">Nosso diferencial</h3>
<p>Squads multidisciplinares, design thinking e acompanhamento pós-go-live.</p>
<a href="/contato" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Solicite Proposta</a>
HTML,
            // outros slugs encurtados por brevidade
        ];

        foreach ($services as $slug=>$title) {
            $page = get_page_by_path('servicos/'.$slug);
            if (!$page) {
                $page_id = wp_insert_post([
                    'post_title'   => $title,
                    'post_name'    => $slug,
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                    'post_parent'  => $created_ids['servicos'],
                    'page_template'=> 'page-servico-detail.php',
                ]);
                $page = get_post($page_id);
            }
            // adicionar/atualizar conteúdo caso exista
            $content = $service_contents[$slug] ?? '';
            if ($content && $page) {
                wp_update_post([
                    'ID' => $page->ID,
                    'post_content' => $content,
                ]);
            }
        }

    }

    // Definir página inicial
    if (isset($created_ids['home'])) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $created_ids['home']);
    }
    // Criar menu se não existir
    $menu_name = 'Menu Principal';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        $top_items = ['home','sobre','servicos','solucoes-tecnologicas','clientes','contato'];
        foreach ($top_items as $slug) {
            if (isset($created_ids[$slug])) {
                wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title'  => ucfirst(str_replace('-', ' ', $slug)),
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $created_ids[$slug],
                    'menu-item-type'   => 'post_type',
                    'menu-item-status' => 'publish'
                ]);
            }
        }
        // atribuir ao location 'primary'
        $locations = get_theme_mod('nav_menu_locations');
        if (!is_array($locations)) $locations = [];
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        // localizar ID do item "Serviços" para criar sub-itens
        $servicos_item_id = null;
        $items = wp_get_nav_menu_items($menu_id);
        foreach ($items as $it) {
            if ($it->object == 'page' && $it->object_id == $created_ids['servicos']) {
                $servicos_item_id = $it->ID;
                break;
            }
        }
        if ($servicos_item_id) {
            // criar submenus
            $service_slugs = [
                'nuvem' => 'Nuvem',
                'infraestrutura' => 'Infraestrutura',
                'desenvolvimento' => 'Desenvolvimento',
                'sistemas-operacionais' => 'Sistemas Operacionais',
                'ciberseguranca' => 'Cibersegurança',
                'suporte-helpdesk' => 'Suporte TD',
                'consultoria' => 'Consultoria',
                'gestao-dados' => 'Gestão Dados',
                'rede-conectividade' => 'Rede',
                'automacao-ia' => 'Automação',
                'backup' => 'Backup',
                'treinamento' => 'Treinamento',
                'devops' => 'DevOps',
                'iot' => 'IoT',
                'outsourcing' => 'Outsourcing',
            ];
            foreach ($service_slugs as $slug=>$label) {
                $page = get_page_by_path('servicos/'.$slug);
                if ($page) {
                    wp_update_nav_menu_item($menu_id, 0, [
                        'menu-item-title'  => $label,
                        'menu-item-object' => 'page',
                        'menu-item-object-id' => $page->ID,
                        'menu-item-type'   => 'post_type',
                        'menu-item-status' => 'publish',
                        'menu-item-parent-id' => $servicos_item_id,
                    ]);
                }
            }
        }
    }
}
add_action('after_switch_theme', 'onlitec_create_pages');

// Função manual para criar a página Serviços de Nuvem e adicioná-la como submenu
function onlitec_create_cloud_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return; // garante que "Serviços" exista

    // criar ou obter página
    $cloud_page = get_page_by_path('servicos/nuvem');
    if (!$cloud_page) {
        $cloud_id = wp_insert_post([
            'post_title'   => 'Serviços de Nuvem',
            'post_name'    => 'nuvem',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-nuvem.php',
        ]);
        $cloud_page = get_post($cloud_id);
    }

    // menu
    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;

    // verifica se já existe item
    $items = wp_get_nav_menu_items($menu);
    $exists = false;
    $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $cloud_page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Nuvem',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $cloud_page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Infraestrutura de TI
function onlitec_create_infra_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/infraestrutura');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Infraestrutura de TI',
            'post_name'    => 'infraestrutura',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-infraestrutura.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Infraestrutura',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Desenvolvimento de Software
function onlitec_create_dev_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/desenvolvimento');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Desenvolvimento de Software',
            'post_name'    => 'desenvolvimento',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-desenvolvimento.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Desenvolvimento',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Sistemas Operacionais
function onlitec_create_os_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/sistemas-operacionais');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Sistemas Operacionais',
            'post_name'    => 'sistemas-operacionais',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-sistemas-operacionais.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'S.O.',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Cibersegurança
function onlitec_create_cyber_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/ciberseguranca');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Cibersegurança',
            'post_name'    => 'ciberseguranca',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-ciberseguranca.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Cibersegurança',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Suporte Técnico e Help Desk
function onlitec_create_support_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/suporte-helpdesk');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Suporte Técnico e Help Desk',
            'post_name'    => 'suporte-helpdesk',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-suporte-helpdesk.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Suporte',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Consultoria de TI
function onlitec_create_consult_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/consultoria');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Consultoria de TI',
            'post_name'    => 'consultoria',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-consultoria.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Consultoria',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Backup & Recuperação de Desastres
function onlitec_create_backup_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/backup');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Backup & Recuperação de Desastres',
            'post_name'    => 'backup',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-backup.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Backup',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Virtualização & Contêineres
function onlitec_create_virtual_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/virtualizacao');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Virtualização & Contêineres',
            'post_name'    => 'virtualizacao',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-virtualizacao.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Virtualização',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Monitoramento & Observabilidade
function onlitec_create_monitor_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/monitoramento');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Monitoramento & Observabilidade',
            'post_name'    => 'monitoramento',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-monitoramento.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Monitoramento',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Rede & Conectividade
function onlitec_create_network_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/rede');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Rede & Conectividade',
            'post_name'    => 'rede',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-rede.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Rede',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Gerenciamento de Licenças
function onlitec_create_license_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/licencas');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Gerenciamento de Licenças',
            'post_name'    => 'licencas',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-licencas.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Licenças',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Gestão de Projetos de TI
function onlitec_create_projects_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/gestao-projetos');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Gestão de Projetos de TI',
            'post_name'    => 'gestao-projetos',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-gestao-projetos.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Projetos TI',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Treinamentos e Workshops
function onlitec_create_training_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/treinamentos');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Treinamentos e Workshops',
            'post_name'    => 'treinamentos',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-treinamentos.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Treinamentos',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Gestão de Dados e BI
function onlitec_create_data_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/gestao-dados');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Gestão de Dados e BI',
            'post_name'    => 'gestao-dados',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-gestao-dados.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Dados & BI',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Automação & IA
function onlitec_create_automation_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/automacao-ia');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Automação & IA',
            'post_name'    => 'automacao-ia',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-automacao-ia.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Automação & IA',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página DevOps & Automação
function onlitec_create_devops_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/devops');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'DevOps & Automação',
            'post_name'    => 'devops',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-devops.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'DevOps',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Internet das Coisas (IoT)
function onlitec_create_iot_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/iot');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Internet das Coisas (IoT)',
            'post_name'    => 'iot',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-iot.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'IoT',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
// add_action removed – superseded by bulk creator

// Função para criar página Manutenção e Outsourcing
function onlitec_create_outsourcing_page() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $page = get_page_by_path('servicos/outsourcing');
    if (!$page) {
        $id = wp_insert_post([
            'post_title'   => 'Manutenção e Outsourcing',
            'post_name'    => 'outsourcing',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent->ID,
            'page_template'=> 'page-outsourcing.php',
        ]);
        $page = get_post($id);
    }

    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) return;
    $items = wp_get_nav_menu_items($menu);
    $exists = false; $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
        }
        if ($it->object == 'page' && $it->object_id == $page->ID) {
            $exists = true;
        }
    }
    if (!$exists && $parent_item_id) {
        wp_update_nav_menu_item($menu->term_id, 0, [
            'menu-item-title'  => 'Outsourcing',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $page->ID,
            'menu-item-type'   => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-parent-id' => $parent_item_id,
        ]);
    }
}
add_action('init', 'onlitec_create_outsourcing_page');

/**
 * Consolidated creation of all service child pages and corresponding submenu items.
 * This runs on theme activation (after_switch_theme) to avoid redundant per-request loops.
 * Existing pages / menu items are left intact – preventing duplicates.
 */
function onlitec_create_service_pages_bulk() {
    $parent = get_page_by_path('servicos');
    if (!$parent) return;

    $services = [
        'nuvem'               => ['Serviços de Nuvem',              'page-nuvem.php'],
        'infraestrutura'      => ['Infraestrutura de TI',           'page-infraestrutura.php'],
        'desenvolvimento'     => ['Desenvolvimento de Software',    'page-desenvolvimento.php'],
        'sistemas-operacionais'=> ['Sistemas Operacionais',         'page-sistemas-operacionais.php'],
        'ciberseguranca'      => ['Cibersegurança',                 'page-ciberseguranca.php'],
        'suporte-helpdesk'    => ['Suporte Técnico e Help Desk',    'page-suporte-helpdesk.php'],
        'consultoria'         => ['Consultoria de TI',              'page-consultoria.php'],
        'gestao-dados'        => ['Gestão de Dados e BI',           'page-gestao-dados.php'],
        'rede'                => ['Rede & Conectividade',           'page-rede.php'],
        'automacao-ia'        => ['Automação & IA',                 'page-automacao-ia.php'],
        'backup'              => ['Backup & Recuperação',           'page-backup.php'],
        'treinamentos'        => ['Treinamentos e Workshops',       'page-treinamentos.php'],
        'devops'              => ['DevOps & Automação',             'page-devops.php'],
        'virtualizacao'       => ['Virtualização & Contêineres',    'page-virtualizacao.php'],
        'monitoramento'       => ['Monitoramento & Observabilidade','page-monitoramento.php'],
        'licencas'            => ['Gerenciamento de Licenças',      'page-licencas.php'],
        'gestao-projetos'     => ['Gestão de Projetos de TI',       'page-gestao-projetos.php'],
        'iot'                 => ['Internet das Coisas (IoT)',      'page-iot.php'],
        'outsourcing'         => ['Manutenção e Outsourcing',        'page-outsourcing.php'],
    ];

    // Ensure menu exists
    $menu = wp_get_nav_menu_object('Menu Principal');
    if (!$menu) {
        $menu_id = wp_create_nav_menu('Menu Principal');
        $menu = wp_get_nav_menu_object($menu_id);
    }
    $items = wp_get_nav_menu_items($menu);

    // Locate parent menu item ID for Serviços
    $parent_item_id = null;
    foreach ($items as $it) {
        if ($it->object == 'page' && $it->object_id == $parent->ID) {
            $parent_item_id = $it->ID;
            break;
        }
    }

    foreach ($services as $slug => [$title, $template]) {
        // Create or get page
        $page = get_page_by_path('servicos/'.$slug);
        if (!$page) {
            $id = wp_insert_post([
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_parent'  => $parent->ID,
                'page_template'=> $template,
            ]);
            $page = get_post($id);
        }

        // Ensure menu item exists under Serviços
        $exists = false;
        foreach ($items as $it) {
            if ($it->object == 'page' && $it->object_id == $page->ID) {
                $exists = true; break;
            }
        }
        if (!$exists && $parent_item_id) {
            wp_update_nav_menu_item($menu->term_id, 0, [
                'menu-item-title'  => $title,
                'menu-item-object' => 'page',
                'menu-item-object-id' => $page->ID,
                'menu-item-type'   => 'post_type',
                'menu-item-status' => 'publish',
                'menu-item-parent-id' => $parent_item_id,
            ]);
        }
    }
}
add_action('after_switch_theme', 'onlitec_create_service_pages_bulk');
