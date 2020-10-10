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

/* partials/themes-list.html.twig */
class __TwigTemplate_7edbd84557b1650f9e1cd7ba18f3a726627a8c99d5f6a7a2baa9db0f621c3db6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/themes-list.html.twig"));

        // line 1
        echo "<div class=\"grav-update themes\"></div>
";
        // line 2
        if (($context["installing"] ?? null)) {
            // line 3
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/themes-list.html.twig", 3)->display($context);
        }
        // line 5
        $this->loadTemplate("partials/list-sort.html.twig", "partials/themes-list.html.twig", 5)->display(twig_array_merge($context, ["list_view" => "themes"]));
        // line 6
        echo "<h1>
    ";
        // line 7
        echo twig_escape_filter($this->env, ((($context["installing"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_THEMES")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_THEMES"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "themes", [0 =>  !($context["installing"] ?? null)], "method"), "toArray", [])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["slug"] => $context["theme"]) {
            // line 17
            echo "        ";
            $context["state"] = "inactive";
            // line 18
            echo "        ";
            if (($context["installing"] ?? null)) {
                $context["state"] = "installing";
            }
            // line 19
            echo "        ";
            if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "system.pages.theme"], "method") == $context["slug"])) {
                $context["state"] = "active";
            }
            // line 20
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "isTestingRelease", [0 => $context["slug"]], "method");
            // line 21
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["theme"], "date", [])) ? ($this->getAttribute($context["theme"], "date", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "findPackage", [0 => $context["slug"], 1 => true], "method"), "date", [])));
            // line 22
            echo "
        <div class=\"theme card-item pure-u-1-3 ";
            // line 23
            echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
            echo "-theme\" data-gpm-theme=\"";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", []), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, ($context["releaseDate"] ?? null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "author", []), "name", []), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => $context["theme"]], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "isUpdatable", [0 => $context["slug"]], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo ((($context["isTestingRelease"] ?? null)) ? ("1") : ("2"));
            echo "\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "icon", []), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/themes/" . twig_urlencode_filter($context["slug"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", []), "html", null, true);
            echo "</a>
                ";
            // line 27
            if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => $context["theme"]], "method")) {
                // line 28
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 30
            echo "                ";
            if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => $context["theme"]], "method")) {
                // line 31
                echo "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                echo "</span></small>
                ";
            }
            // line 33
            echo "                ";
            if ($this->getAttribute($context["theme"], "symlink", [])) {
                // line 34
                echo "                    <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 38
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", []), "html", null, true);
            echo "</span>
                ";
            // line 39
            if (($context["isTestingRelease"] ?? null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 40
            echo "            </div>
            <div class=\"gpm-screenshot\">
                ";
            // line 42
            $context["thumb"] = ((($context["installing"] ?? null)) ? (("//getgrav.org/images/" . $this->getAttribute($context["theme"], "screenshot", []))) : ($this->getAttribute($context["theme"], "thumbnail", [])));
            // line 43
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/themes/" . twig_urlencode_filter($context["slug"]))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "html", null, true);
            echo "\" /></a>
            </div>
            ";
            // line 45
            if ((($context["state"] ?? null) == "installing")) {
                // line 46
                echo "                <div class=\"gpm-actions\">
                    ";
                // line 47
                if (($this->getAttribute($context["theme"], "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute($context["theme"], "slug", [])], "method"))) {
                    // line 48
                    echo "                        ";
                    if ( !($context["gumroad_loaded"] ?? null)) {
                        // line 49
                        echo "                            ";
                        $context["gumroad_loaded"] = true;
                        // line 50
                        echo "                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        ";
                    }
                    // line 52
                    echo "                        <a class=\"gumroad-button button\" href=\"https://gum.co/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "premium", []), "permalink", []), "html", null, true);
                    echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["theme"], "premium", [], "any", false, true), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["theme"], "premium", [], "any", false, true), "button", []), "Purchase")) : ("Purchase")), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 54
                    echo "                        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                    echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                    echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 56
                echo "
                </div>
            ";
            } elseif ((            // line 58
($context["state"] ?? null) == "active")) {
                // line 59
                echo "                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVE_THEME"), "html", null, true);
                echo "
                </div>
            ";
            } else {
                // line 63
                echo "                <a data-remodal-target=\"theme-switch-warn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/themes/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "activate"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"gpm-actions\">
                    ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 67
            echo "        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OFFLINE_WARNING"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO"), "html", null, true);
        echo " <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION"), "html", null, true);
        echo "
        </p>
        <p class=\"bigger\">
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION"), "html", null, true);
        echo " <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
        </div>
    </form>
</div>

";
        // line 90
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-list.html.twig", 90)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 91
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-list.html.twig", 91)->display(twig_array_merge($context, ["type" => "theme"]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/themes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 91,  281 => 90,  273 => 85,  269 => 84,  262 => 80,  256 => 77,  251 => 75,  245 => 71,  236 => 69,  230 => 67,  224 => 64,  219 => 63,  213 => 60,  210 => 59,  208 => 58,  204 => 56,  196 => 54,  188 => 52,  184 => 50,  181 => 49,  178 => 48,  176 => 47,  173 => 46,  171 => 45,  163 => 43,  161 => 42,  157 => 40,  153 => 39,  148 => 38,  140 => 34,  137 => 33,  131 => 31,  128 => 30,  122 => 28,  120 => 27,  114 => 26,  110 => 25,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  75 => 19,  70 => 18,  67 => 17,  62 => 16,  54 => 11,  47 => 7,  44 => 6,  42 => 5,  38 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grav-update themes\"></div>
{% if installing %}
    {% include 'partials/release-toggle.html.twig' %}
{% endif %}
{% include 'partials/list-sort.html.twig' with { list_view: 'themes' } %}
<h1>
    {{ installing ? \"PLUGIN_ADMIN.AVAILABLE_THEMES\"|tu : \"PLUGIN_ADMIN.INSTALLED_THEMES\"|tu }}
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu }}\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    {% for slug, theme in admin.themes(not installing).toArray|ksort %}
        {% set state = 'inactive' %}
        {% if (installing) %}{% set state = 'installing' %}{% endif %}
        {% if (config.get('system.pages.theme') == slug) %}{% set state = 'active' %}{% endif %}
        {% set isTestingRelease = admin.gpm.isTestingRelease(slug) %}
        {% set releaseDate = theme.date ?: admin.gpm.findPackage(slug, true).date %}

        <div class=\"theme card-item pure-u-1-3 {{ state }}-theme\" data-gpm-theme=\"{{ slug|url_encode }}\" data-gpm-name=\"{{ theme.name }}\" data-gpm-release-date=\"{{ releaseDate }}\" data-gpm-author=\"{{ theme.author.name }}\" data-gpm-official=\"{{ admin.isTeamGrav(theme) ? '1' : '2' }}\" data-gpm-updatable=\"{{ admin.gpm.isUpdatable(slug) ? '1' : '2' }}\" data-gpm-enabled=\"{{ data.get('enabled') ? '1' : '2' }}\" data-gpm-testing=\"{{ isTestingRelease ? '1' : '2' }}\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-{{ theme.icon }}\"></i>
                <a href=\"{{ admin_route('/themes/' ~ slug|url_encode) }}\">{{ theme.name }}</a>
                {% if admin.isTeamGrav(theme) %}
                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|tu }}\"></i></span></small>
                {% endif %}
                {% if admin.isPremiumProduct(theme) %}
                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
                {% endif %}
                {% if theme.symlink %}
                    <span class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                {% endif %}
                <span class=\"gpm-version\">v{{ theme.version }}</span>
                {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
            </div>
            <div class=\"gpm-screenshot\">
                {% set thumb = installing ? '//getgrav.org/images/' ~ theme.screenshot : theme.thumbnail %}
                <a href=\"{{ admin_route('/themes/' ~ slug|url_encode) }}\"><img src=\"{{ thumb }}\" /></a>
            </div>
            {% if (state == 'installing') %}
                <div class=\"gpm-actions\">
                    {% if (theme.premium and not admin.license(theme.slug)) %}
                        {% if not gumroad_loaded %}
                            {% set gumroad_loaded = true %}
                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        {% endif %}
                        <a class=\"gumroad-button button\" href=\"https://gum.co/{{ theme.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ theme.premium.button|default('Purchase') }}</a>
                    {% else %}
                        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|tu }}</a>
                    {% endif %}

                </div>
            {% elseif state == 'active' %}
                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> {{ \"PLUGIN_ADMIN.ACTIVE_THEME\"|tu }}
                </div>
            {% else %}
                <a data-remodal-target=\"theme-switch-warn\" href=\"{{ uri.addNonce(base_url_relative ~ '/themes/' ~ slug ~ '/task' ~ config.system.param_sep ~ 'activate', 'admin-form', 'admin-nonce') }}\" class=\"gpm-actions\">
                    {{ \"PLUGIN_ADMIN.ACTIVATE\"|tu }}
                </a>
            {% endif %}
        </div>
    {% else %}
        <tr><td>{{ \"PLUGIN_ADMIN.OFFLINE_WARNING\"|tu }}</td></tr>
    {% endfor %}
</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>{{ \"PLUGIN_ADMIN.SWITCHING_TO\"|tu }} <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            {{ \"PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION\"|tu }}
        </p>
        <p class=\"bigger\">
            {{ \"PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION\"|tu }} <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
        </div>
    </form>
</div>

{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
", "partials/themes-list.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/partials/themes-list.html.twig");
    }
}
