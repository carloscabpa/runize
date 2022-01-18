<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__25251daf8387fe75f93cd83df55b6c1c9c608570ab09062bd97b3d53ba845dfc */
class __TwigTemplate_9529d23eccf02a3eac2af7196740387f37b9c0976b3a72bdc1370efa7fd02520 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__25251daf8387fe75f93cd83df55b6c1c9c608570ab09062bd97b3d53ba845dfc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__25251daf8387fe75f93cd83df55b6c1c9c608570ab09062bd97b3d53ba845dfc"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Páginas • Runize</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.6.9';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'a2228cd429aeb46c65df43e08396e8cf';
    var token_admin_orders = '5e013d4c9ee7989dfdb985a458a1473e';
    var token_admin_customers = '053af3f0a0c20ecba1b58652d585d9c3';
    var token_admin_customer_threads = '94557965f639f8f7edec54852d050cae';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '31a59c067e0cd3e39a8f74c5f9e623bb';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin335be7cfm/index.php/improve/modules/catalog/recommended?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var admin_notification_get_link = '/admin335be7cfm/index.php/common/notifications?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var admin_notification_push_link = '/admin335be7cfm/index.php/common/notifications/ack?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var tab_modules_list = 'wic_pushproductcms,protectedshops,trustedshops,trustedshopsintegration,ebadgeletitbuy,etranslation,bablic';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin335be7cfm/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/revsliderprestashop/admin/assets/css/adminicon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/jscomposer/assets/css/adminjscomposericon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin335be7cfm/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var ad = \"\\/admin335be7cfm\";
var baseAdminDir = \"\\/admin335be7cfm\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin335be7cfm\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var pageType = \"cms\";
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/default/js/bundle/module/module_card.js?v=1.7.6.9\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin335be7cfm/index.php/common/notifications?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/desarrollo.runize.es\\/admin335be7cfm\\/index.php?controller=AdminGamification&token=6f06b12d69d8accec24ee6d3dcf846ff\";
            var current_id_tab = 57;
        </script><style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/modules/smartblog/views/css/bootstrap-grid.css\">
<script type=\"text/javascript\">
\t\t\t\t\tvar PS_ALLOW_ACCENTED_CHARS_URL = 0;
\t\t</script><script type=\"text/javascript\">
            if(typeof vc_ajaxurl == \"undefined\"){
                var vc_ajaxurl = \"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=VC_ajax&token=55553e4fcf5f13cc321baf0daf88a805\";
            }
            var ajaxurl = vc_ajaxurl;</script><script type=\"text/javascript\">
            if(typeof vc_ajaxurl == \"undefined\"){
                var vc_ajaxurl = \"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=VC_ajax&token=55553e4fcf5f13cc321baf0daf88a805\";
            }
            var ajaxurl = vc_ajaxurl;</script>

";
        // line 124
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-es admincmscontent\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\"></a>
      <span id=\"shop_version\">1.7.6.9</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=69375523ddf7de25ccb0d9be6ba0dc00\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/improve/modules/manage?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/sell/catalog/categories/new?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/sell/catalog/products/new?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d1710925e380c139027772a40b26ca15\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=8e9af69fa4570dec8ef7a9799eb67380\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"74\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?cms_page%5Boffset%5D=50&cms_page%5Blimit%5D=50&-Z_65TD0\"
        data-post-link=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminQuickAccesses&token=51b282f5158c85229c898d8e80b8d67d\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"P&aacute;ginas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminQuickAccesses&token=51b282f5158c85229c898d8e80b8d67d\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin335be7cfm/index.php?controller=AdminSearch&amp;token=854f3f74de925daf26ffbebb1b48b565\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\"
             href=\"/admin335be7cfm/index.php/configure/advanced/performance/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo depuración</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://desarrollo.runize.es/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Te has planteado vender en marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/carlos%40laniakea45.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Carlos</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin335be7cfm/index.php/configure/advanced/employees/1/edit?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminLogin&amp;logout=1&amp;token=b06237e66c9395e1d683ee9ab371a3e1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

    <input type=\"file\" name=\"import_vcc_anywhere\" data-url=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=Adminvccontentanywhere&token=ab753afc0cee2ab0c0bcd1e2e3bff854&ajax=1&action=ImportVccontent\" id=\"import_vcc_anywhere\" style=\"display:none;\" />  </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin335be7cfm/index.php/configure/advanced/employees/toggle-navigation?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin335be7cfm/index.php/sell/orders/invoices/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminSlip&amp;token=dba1173dc32d9176a725b983b1703c37\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin335be7cfm/index.php/sell/orders/delivery-slips/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarts&amp;token=33d20879c94efc60f596742db0e59243\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin335be7cfm/index.php/sell/catalog/products?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/products?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/categories?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminTracking&amp;token=3d8af6ac2cf4840749f8c7f9dbc4d88c\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAttributesGroups&amp;token=3b038ce4b12dc3a6c18c393e0d0ef813\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/brands/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAttachments&amp;token=574c75af8634414033a4e0b845fbb7e7\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCartRules&amp;token=d1710925e380c139027772a40b26ca15\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin335be7cfm/index.php/sell/stocks/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin335be7cfm/index.php/sell/customers/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin335be7cfm/index.php/sell/customers/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAddresses&amp;token=a96c91a6cfad9e68290266c7484f24d7\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCustomerThreads&amp;token=94557965f639f8f7edec54852d050cae\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCustomerThreads&amp;token=94557965f639f8f7edec54852d050cae\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrderMessage&amp;token=0be9bdcd1319fc1844f2d76f42889a97\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminReturn&amp;token=0d9a041f78dbc1b9fd6f7873144e1db7\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminMetricsStats&amp;token=c67edba395ceefa3fb6fc224583b2a67\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"144\" id=\"subtab-AdminMetricsStats\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminMetricsStats&amp;token=c67edba395ceefa3fb6fc224583b2a67\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminLegacyStatsMetrics\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminLegacyStatsMetrics&amp;token=9c7456a32ce5af37f9a95a7730cf2345\" class=\"link\"> Estadísticas
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin335be7cfm/index.php/improve/modules/manage?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin335be7cfm/index.php/improve/modules/manage?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin335be7cfm/index.php/modules/addons/modules/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin335be7cfm/index.php/improve/design/themes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/themes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin335be7cfm/index.php/modules/addons/themes/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/mail_theme/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/cms-pages/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/modules/positions/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminImages&amp;token=194ad8b3379db5687c2656ca94621dfa\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin335be7cfm/index.php/modules/link-widget/list?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarriers&amp;token=ab7da8d14485ca934b9ccad30a4a5409\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarriers&amp;token=ab7da8d14485ca934b9ccad30a4a5409\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin335be7cfm/index.php/improve/shipping/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin335be7cfm/index.php/improve/payment/payment_methods?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin335be7cfm/index.php/improve/payment/payment_methods?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin335be7cfm/index.php/improve/payment/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin335be7cfm/index.php/improve/international/localization/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/localization/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminZones&amp;token=cec0f98d8b39e478b6f657909ddf063d\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/taxes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/translations/settings?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"148\" id=\"subtab-Marketing\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminPsfacebookModule&amp;token=f2e853fed97fe179d5ce8f96230acaf3\" class=\"link\">
                    <i class=\"material-icons mi-campaign\">campaign</i>
                    <span>
                    Marketing
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-148\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminPsfacebookModule&amp;token=f2e853fed97fe179d5ce8f96230acaf3\" class=\"link\"> Facebook
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin335be7cfm/index.php/configure/shop/preferences/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/preferences/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/order-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/product-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/customer-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/contacts/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/seo-urls/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminSearchConf&amp;token=969ea2dc502f896228a17da5c6d3e9c0\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminGamification&amp;token=6f06b12d69d8accec24ee6d3dcf846ff\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin335be7cfm/index.php/configure/advanced/system-information/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/system-information/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/performance/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/administration/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/emails/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/import/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/employees/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/sql-requests/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/logs/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/webservice-keys/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-AdminParentPreferences\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminConfig&amp;token=8f1c1dcd96a0f3089b84eb65ec82cfe6\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Vinova Framework
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-NovAdminConfig\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminConfig&amp;token=8f1c1dcd96a0f3089b84eb65ec82cfe6\" class=\"link\"> Theme Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-NovAdminMegaMenu\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminMegaMenu&amp;token=516ee02c361040a5695b5c6054010fa3\" class=\"link\"> Mega Menu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-NovAdminVerticalMenu\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminVerticalMenu&amp;token=de6d0de7e6db5e537b7b529a1a8ab09e\" class=\"link\"> Vertical Menu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-NovAdminTestimonial\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminTestimonial&amp;token=f03b5372acfefb4aebb672bf989c20fe\" class=\"link\"> Manage Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-NovAdminWishlist\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminWishlist&amp;token=7a99ef2b86288058eee754ef27f7b1c6\" class=\"link\"> Wishlist
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-NovAdminComment\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminComment&amp;token=c73b172866c18a5d389a27e938cee1f6\" class=\"link\"> Product Comment
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-NovAdminTags\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminTags&amp;token=6e9f548e3165806dba9f91e308d5424e\" class=\"link\"> Block Tags
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"160\" id=\"tab-Adminjscomposer\">
              <span class=\"title\">Visual Composer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"164\" id=\"subtab-Adminvccontentanywhere\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=Adminvccontentanywhere&amp;token=ab753afc0cee2ab0c0bcd1e2e3bff854\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    VC Content Any Where
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"165\" id=\"subtab-AdminJsComposerSetting\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminJsComposerSetting&amp;token=8337f973835e3d3f466a2122e567b8bc\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    General Setting
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"167\" id=\"subtab-AdminVcImages\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminVcImages&amp;token=ad4f93761d6e10d282d4ea22ee819643\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Images Types
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"168\" id=\"subtab-AdminVcMediaManager\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminVcMediaManager&amp;token=72870751c98c93c4dcf2a61c91ee85a5\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Media Manager
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"171\" id=\"tab-AdminSmartBlog\">
              <span class=\"title\">Blog</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminBlogCategory\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogCategory&amp;token=55fa5d9043f88f6728d26a3654f979bf\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Category
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"173\" id=\"subtab-AdminBlogcomment\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogcomment&amp;token=dd8923fe023e45d452fea735f7f863e0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Comments
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"174\" id=\"subtab-AdminBlogPost\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogPost&amp;token=d10977f0cf0df7ab156c4f24e5166c07\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Post
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"175\" id=\"subtab-AdminImageType\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminImageType&amp;token=14ef5388920eb1a924cb4bd8e7ebf09c\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Image Type
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"176\" id=\"subtab-AdminAboutUs\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAboutUs&amp;token=22137d978674b9bc5e0815cfdb5241cc\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    AboutUs
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"178\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"179\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevsliderSliders&amp;token=b2ef5be72ac24852d5dfc6c0ac2ea672\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"180\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=cdc5bfddf5c1d07256cf6bd2d6ea152b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"181\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderAddons&amp;token=b1ce1502f7684bb7eb68391b3988fd4d\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"182\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderNavigation&amp;token=279e9c2365ba251db20dad1cefd2730e\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Diseño</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin335be7cfm/index.php/improve/design/cms-pages/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" aria-current=\"page\">Páginas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Páginas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/admin335be7cfm/index.php/improve/design/cms-pages/category/new?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                  title=\"Añadir una nueva categoría de página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir una nueva categoría de página
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/admin335be7cfm/index.php/improve/design/cms-pages/new?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                  title=\"Añadir nueva página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nueva página
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin335be7cfm/index.php/improve/modules/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin335be7cfm/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.6.9%2526country%253Des/Ayuda?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /homepages/34/d802225033/htdocs/runize.es/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos y Servicios recomendados',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/admin335be7cfm/index.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /homepages/34/d802225033/htdocs/runize.es/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            

";
        // line 1489
        $this->displayBlock('content_header', $context, $blocks);
        // line 1490
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1491
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1492
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1493
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <script type=\"text/javascript\" src=\"/modules/jscomposer/assets/js/backend/jquery.autocomplete.js\"></script>
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=carlos%40laniakea45.com&amp;firstname=Carlos&amp;lastname=Cabrera&amp;website=http%3A%2F%2Fdesarrollo.runize.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin335be7cfm/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=carlos%40laniakea45.com&amp;firstname=Carlos&amp;lastname=Cabrera&amp;website=http%3A%2F%2Fdesarrollo.runize.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1600
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1489
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1490
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1491
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1492
    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1600
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__25251daf8387fe75f93cd83df55b6c1c9c608570ab09062bd97b3d53ba845dfc";
    }

    public function getDebugInfo()
    {
        return array (  1774 => 1600,  1757 => 1492,  1740 => 1491,  1723 => 1490,  1706 => 1489,  1673 => 124,  1659 => 1600,  1550 => 1493,  1547 => 1492,  1544 => 1491,  1541 => 1490,  1539 => 1489,  170 => 124,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Páginas • Runize</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.6.9';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'a2228cd429aeb46c65df43e08396e8cf';
    var token_admin_orders = '5e013d4c9ee7989dfdb985a458a1473e';
    var token_admin_customers = '053af3f0a0c20ecba1b58652d585d9c3';
    var token_admin_customer_threads = '94557965f639f8f7edec54852d050cae';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '31a59c067e0cd3e39a8f74c5f9e623bb';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin335be7cfm/index.php/improve/modules/catalog/recommended?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var admin_notification_get_link = '/admin335be7cfm/index.php/common/notifications?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var admin_notification_push_link = '/admin335be7cfm/index.php/common/notifications/ack?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0';
    var tab_modules_list = 'wic_pushproductcms,protectedshops,trustedshops,trustedshopsintegration,ebadgeletitbuy,etranslation,bablic';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin335be7cfm/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/revsliderprestashop/admin/assets/css/adminicon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/jscomposer/assets/css/adminjscomposericon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin335be7cfm/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var ad = \"\\/admin335be7cfm\";
var baseAdminDir = \"\\/admin335be7cfm\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin335be7cfm\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var pageType = \"cms\";
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin335be7cfm/themes/default/js/bundle/module/module_card.js?v=1.7.6.9\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin335be7cfm/index.php/common/notifications?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/desarrollo.runize.es\\/admin335be7cfm\\/index.php?controller=AdminGamification&token=6f06b12d69d8accec24ee6d3dcf846ff\";
            var current_id_tab = 57;
        </script><style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/modules/smartblog/views/css/bootstrap-grid.css\">
<script type=\"text/javascript\">
\t\t\t\t\tvar PS_ALLOW_ACCENTED_CHARS_URL = 0;
\t\t</script><script type=\"text/javascript\">
            if(typeof vc_ajaxurl == \"undefined\"){
                var vc_ajaxurl = \"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=VC_ajax&token=55553e4fcf5f13cc321baf0daf88a805\";
            }
            var ajaxurl = vc_ajaxurl;</script><script type=\"text/javascript\">
            if(typeof vc_ajaxurl == \"undefined\"){
                var vc_ajaxurl = \"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=VC_ajax&token=55553e4fcf5f13cc321baf0daf88a805\";
            }
            var ajaxurl = vc_ajaxurl;</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>

<body class=\"lang-es admincmscontent\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\"></a>
      <span id=\"shop_version\">1.7.6.9</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=69375523ddf7de25ccb0d9be6ba0dc00\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/improve/modules/manage?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/sell/catalog/categories/new?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php/sell/catalog/products/new?token=372e928b9626ca6644870dade09b055f\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d1710925e380c139027772a40b26ca15\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=8e9af69fa4570dec8ef7a9799eb67380\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"74\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?cms_page%5Boffset%5D=50&cms_page%5Blimit%5D=50&-Z_65TD0\"
        data-post-link=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminQuickAccesses&token=51b282f5158c85229c898d8e80b8d67d\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"P&aacute;ginas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminQuickAccesses&token=51b282f5158c85229c898d8e80b8d67d\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin335be7cfm/index.php?controller=AdminSearch&amp;token=854f3f74de925daf26ffbebb1b48b565\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\"
             href=\"/admin335be7cfm/index.php/configure/advanced/performance/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo depuración</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://desarrollo.runize.es/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Te has planteado vender en marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/carlos%40laniakea45.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Carlos</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin335be7cfm/index.php/configure/advanced/employees/1/edit?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminLogin&amp;logout=1&amp;token=b06237e66c9395e1d683ee9ab371a3e1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

    <input type=\"file\" name=\"import_vcc_anywhere\" data-url=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=Adminvccontentanywhere&token=ab753afc0cee2ab0c0bcd1e2e3bff854&ajax=1&action=ImportVccontent\" id=\"import_vcc_anywhere\" style=\"display:none;\" />  </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin335be7cfm/index.php/configure/advanced/employees/toggle-navigation?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrders&amp;token=5e013d4c9ee7989dfdb985a458a1473e\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin335be7cfm/index.php/sell/orders/invoices/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminSlip&amp;token=dba1173dc32d9176a725b983b1703c37\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin335be7cfm/index.php/sell/orders/delivery-slips/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarts&amp;token=33d20879c94efc60f596742db0e59243\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin335be7cfm/index.php/sell/catalog/products?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/products?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/categories?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminTracking&amp;token=3d8af6ac2cf4840749f8c7f9dbc4d88c\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAttributesGroups&amp;token=3b038ce4b12dc3a6c18c393e0d0ef813\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin335be7cfm/index.php/sell/catalog/brands/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAttachments&amp;token=574c75af8634414033a4e0b845fbb7e7\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCartRules&amp;token=d1710925e380c139027772a40b26ca15\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin335be7cfm/index.php/sell/stocks/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin335be7cfm/index.php/sell/customers/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin335be7cfm/index.php/sell/customers/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAddresses&amp;token=a96c91a6cfad9e68290266c7484f24d7\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCustomerThreads&amp;token=94557965f639f8f7edec54852d050cae\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCustomerThreads&amp;token=94557965f639f8f7edec54852d050cae\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminOrderMessage&amp;token=0be9bdcd1319fc1844f2d76f42889a97\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminReturn&amp;token=0d9a041f78dbc1b9fd6f7873144e1db7\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminMetricsStats&amp;token=c67edba395ceefa3fb6fc224583b2a67\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"144\" id=\"subtab-AdminMetricsStats\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminMetricsStats&amp;token=c67edba395ceefa3fb6fc224583b2a67\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminLegacyStatsMetrics\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminLegacyStatsMetrics&amp;token=9c7456a32ce5af37f9a95a7730cf2345\" class=\"link\"> Estadísticas
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin335be7cfm/index.php/improve/modules/manage?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin335be7cfm/index.php/improve/modules/manage?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin335be7cfm/index.php/modules/addons/modules/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin335be7cfm/index.php/improve/design/themes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/themes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin335be7cfm/index.php/modules/addons/themes/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/mail_theme/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/cms-pages/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin335be7cfm/index.php/improve/design/modules/positions/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminImages&amp;token=194ad8b3379db5687c2656ca94621dfa\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin335be7cfm/index.php/modules/link-widget/list?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarriers&amp;token=ab7da8d14485ca934b9ccad30a4a5409\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminCarriers&amp;token=ab7da8d14485ca934b9ccad30a4a5409\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin335be7cfm/index.php/improve/shipping/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin335be7cfm/index.php/improve/payment/payment_methods?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin335be7cfm/index.php/improve/payment/payment_methods?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin335be7cfm/index.php/improve/payment/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin335be7cfm/index.php/improve/international/localization/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/localization/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminZones&amp;token=cec0f98d8b39e478b6f657909ddf063d\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/taxes/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin335be7cfm/index.php/improve/international/translations/settings?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"148\" id=\"subtab-Marketing\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminPsfacebookModule&amp;token=f2e853fed97fe179d5ce8f96230acaf3\" class=\"link\">
                    <i class=\"material-icons mi-campaign\">campaign</i>
                    <span>
                    Marketing
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-148\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminPsfacebookModule&amp;token=f2e853fed97fe179d5ce8f96230acaf3\" class=\"link\"> Facebook
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin335be7cfm/index.php/configure/shop/preferences/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/preferences/preferences?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/order-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/product-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/customer-preferences/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/contacts/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin335be7cfm/index.php/configure/shop/seo-urls/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminSearchConf&amp;token=969ea2dc502f896228a17da5c6d3e9c0\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminGamification&amp;token=6f06b12d69d8accec24ee6d3dcf846ff\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin335be7cfm/index.php/configure/advanced/system-information/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/system-information/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/performance/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/administration/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/emails/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/import/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/employees/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/sql-requests/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/logs/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin335be7cfm/index.php/configure/advanced/webservice-keys/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-AdminParentPreferences\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminConfig&amp;token=8f1c1dcd96a0f3089b84eb65ec82cfe6\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Vinova Framework
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-NovAdminConfig\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminConfig&amp;token=8f1c1dcd96a0f3089b84eb65ec82cfe6\" class=\"link\"> Theme Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-NovAdminMegaMenu\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminMegaMenu&amp;token=516ee02c361040a5695b5c6054010fa3\" class=\"link\"> Mega Menu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-NovAdminVerticalMenu\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminVerticalMenu&amp;token=de6d0de7e6db5e537b7b529a1a8ab09e\" class=\"link\"> Vertical Menu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-NovAdminTestimonial\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminTestimonial&amp;token=f03b5372acfefb4aebb672bf989c20fe\" class=\"link\"> Manage Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-NovAdminWishlist\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminWishlist&amp;token=7a99ef2b86288058eee754ef27f7b1c6\" class=\"link\"> Wishlist
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-NovAdminComment\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminComment&amp;token=c73b172866c18a5d389a27e938cee1f6\" class=\"link\"> Product Comment
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-NovAdminTags\">
                              <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=NovAdminTags&amp;token=6e9f548e3165806dba9f91e308d5424e\" class=\"link\"> Block Tags
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"160\" id=\"tab-Adminjscomposer\">
              <span class=\"title\">Visual Composer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"164\" id=\"subtab-Adminvccontentanywhere\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=Adminvccontentanywhere&amp;token=ab753afc0cee2ab0c0bcd1e2e3bff854\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    VC Content Any Where
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"165\" id=\"subtab-AdminJsComposerSetting\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminJsComposerSetting&amp;token=8337f973835e3d3f466a2122e567b8bc\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    General Setting
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"167\" id=\"subtab-AdminVcImages\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminVcImages&amp;token=ad4f93761d6e10d282d4ea22ee819643\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Images Types
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"168\" id=\"subtab-AdminVcMediaManager\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminVcMediaManager&amp;token=72870751c98c93c4dcf2a61c91ee85a5\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Media Manager
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"171\" id=\"tab-AdminSmartBlog\">
              <span class=\"title\">Blog</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminBlogCategory\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogCategory&amp;token=55fa5d9043f88f6728d26a3654f979bf\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Category
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"173\" id=\"subtab-AdminBlogcomment\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogcomment&amp;token=dd8923fe023e45d452fea735f7f863e0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Comments
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"174\" id=\"subtab-AdminBlogPost\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminBlogPost&amp;token=d10977f0cf0df7ab156c4f24e5166c07\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Post
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"175\" id=\"subtab-AdminImageType\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminImageType&amp;token=14ef5388920eb1a924cb4bd8e7ebf09c\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Image Type
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"176\" id=\"subtab-AdminAboutUs\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminAboutUs&amp;token=22137d978674b9bc5e0815cfdb5241cc\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    AboutUs
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"178\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"179\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevsliderSliders&amp;token=b2ef5be72ac24852d5dfc6c0ac2ea672\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"180\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=cdc5bfddf5c1d07256cf6bd2d6ea152b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"181\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderAddons&amp;token=b1ce1502f7684bb7eb68391b3988fd4d\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"182\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminRevolutionsliderNavigation&amp;token=279e9c2365ba251db20dad1cefd2730e\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Diseño</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin335be7cfm/index.php/improve/design/cms-pages/?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\" aria-current=\"page\">Páginas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Páginas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/admin335be7cfm/index.php/improve/design/cms-pages/category/new?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                  title=\"Añadir una nueva categoría de página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir una nueva categoría de página
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/admin335be7cfm/index.php/improve/design/cms-pages/new?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                  title=\"Añadir nueva página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nueva página
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin335be7cfm/index.php/improve/modules/catalog?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin335be7cfm/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.6.9%2526country%253Des/Ayuda?_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /homepages/34/d802225033/htdocs/runize.es/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos y Servicios recomendados',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/admin335be7cfm/index.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=8dps2smAS2Iq2F64o27NfcZ3Fl9b8cfTer5-Z_65TD0',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /homepages/34/d802225033/htdocs/runize.es/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            

{% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://desarrollo.runize.es/admin335be7cfm/index.php?controller=AdminDashboard&amp;token=92ab2cf1c2479fbbd7480a46e25f2af1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <script type=\"text/javascript\" src=\"/modules/jscomposer/assets/js/backend/jquery.autocomplete.js\"></script>
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=carlos%40laniakea45.com&amp;firstname=Carlos&amp;lastname=Cabrera&amp;website=http%3A%2F%2Fdesarrollo.runize.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin335be7cfm/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=carlos%40laniakea45.com&amp;firstname=Carlos&amp;lastname=Cabrera&amp;website=http%3A%2F%2Fdesarrollo.runize.es%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__25251daf8387fe75f93cd83df55b6c1c9c608570ab09062bd97b3d53ba845dfc", "");
    }
}
