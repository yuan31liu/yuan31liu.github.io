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

/* partials/themes-details.html.twig */
class __TwigTemplate_a4249668bade43d6ae2123e94406dd6a5faaa2ed23a144e87ab18e9f38d4a23f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/themes-details.html.twig"));

        // line 1
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isThemeInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method");
        // line 4
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []));
        echo "
    ";
        // line 10
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["theme"] ?? null)], "method")) {
            // line 11
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["theme"] ?? null)], "method")) {
            // line 14
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
            // line 17
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 21
        echo "    <small>";
        (($this->getAttribute(($context["theme"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []))), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 22
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 23
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 27
        if ($this->getAttribute(($context["theme"] ?? null), "version", [])) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 33
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "author", [])) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", [])) {
                // line 38
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", [])) {
                // line 43
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "</a>
                    ";
            }
            // line 45
            echo "                </td>
            </tr>
        ";
        }
        // line 48
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "homepage", [])) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 54
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "demo", [])) {
            // line 55
            echo "        <tr>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 60
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "bugs", [])) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 66
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "keywords", [])) {
            // line 67
            echo "            <tr>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 70
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["theme"] ?? null), "keywords", []), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 74
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "license", [])) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 80
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "description", [])) {
            // line 81
            echo "            <tr>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 83
            echo $this->getAttribute(($context["theme"] ?? null), "description_html", []);
            echo "</td>
            </tr>
        ";
        }
        // line 86
        echo "
        ";
        // line 87
        if (($this->getAttribute(($context["theme"] ?? null), "readme", []) || $this->getAttribute(($context["theme"] ?? null), "homepage", []))) {
            // line 88
            echo "            ";
            $context["readme_link"] = (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->getAttribute(($context["theme"] ?? null), "readme", [])) : (($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md")));
            // line 89
            echo "            <tr>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "findPackage", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", [])], "method"), "changelog", [])) {
            // line 96
            echo "        <tr>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHANGELOG"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/changelog/slug:" . $this->getAttribute(($context["theme"] ?? null), "slug", []))), "html", null, true);
            echo "\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        ";
        }
        // line 101
        echo "    </table>
</div>

";
        // line 104
        if (($context["installed"] ?? null)) {
            // line 105
            echo "    ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("themes/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 106
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 106)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
            // line 107
            echo "
    ";
            // line 108
            if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "system.pages.theme"], "method") != $this->getAttribute(($context["admin"] ?? null), "route", []))) {
                // line 109
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        ";
                // line 111
                if ( !$this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
                    // line 112
                    echo "            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REINSTALL_THEME"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 114
                echo "        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 118
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "slug", []), "html", null, true);
            echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 122
        echo "
";
        // line 123
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 123)->display($context);
        // line 124
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 124)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 125
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 125)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 126
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 126)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 127
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/themes-details.html.twig", 127)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 128
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/themes-details.html.twig", 128)->display(twig_array_merge($context, ["package" => ($context["theme"] ?? null)]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 128,  362 => 127,  360 => 126,  358 => 125,  356 => 124,  354 => 123,  351 => 122,  343 => 119,  340 => 118,  332 => 114,  326 => 112,  324 => 111,  320 => 109,  318 => 108,  315 => 107,  312 => 106,  309 => 105,  307 => 104,  302 => 101,  296 => 98,  292 => 97,  289 => 96,  287 => 95,  284 => 94,  276 => 91,  272 => 90,  269 => 89,  266 => 88,  264 => 87,  261 => 86,  255 => 83,  251 => 82,  248 => 81,  245 => 80,  239 => 77,  235 => 76,  232 => 75,  229 => 74,  222 => 70,  217 => 68,  214 => 67,  211 => 66,  203 => 63,  199 => 62,  196 => 61,  193 => 60,  185 => 57,  181 => 56,  178 => 55,  175 => 54,  167 => 51,  163 => 50,  160 => 49,  157 => 48,  152 => 45,  144 => 43,  141 => 42,  135 => 40,  127 => 38,  125 => 37,  120 => 35,  117 => 34,  114 => 33,  108 => 30,  104 => 29,  101 => 28,  99 => 27,  94 => 25,  90 => 23,  86 => 22,  81 => 21,  73 => 17,  70 => 16,  64 => 14,  61 => 13,  55 => 11,  53 => 10,  49 => 9,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name|e }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|tu }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(theme) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|tu }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
                <td class=\"double\">{{ theme.license }}</td>
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.homepage ~ '/blob/master/README.md' %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.README\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}

        {% if admin.gpm.findPackage(theme.slug).changelog %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.CHANGELOG\"|tu }}:</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"{{ admin_route('/changelog/slug:' ~ theme.slug) }}\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        {% endif %}
    </table>
</div>

{% if (installed) %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (config.get('system.pages.theme') != admin.route) %}
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        {% if not theme.symlink %}
            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_THEME\"|tu }}</a>
        {% endif %}
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|tu }}</a>
    </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|tu }}</a>
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-changelog.html.twig' with { package: theme} %}
", "partials/themes-details.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/partials/themes-details.html.twig");
    }
}
