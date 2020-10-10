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

/* partials/dashboard-pages.html.twig */
class __TwigTemplate_f691ab2e90ada2ed7a21f3905a10d9baa33f529c670cfa3b550b00506cf31189 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/dashboard-pages.html.twig"));

        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.pages", 1 => "admin.super"])) {
            // line 2
            echo "    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/pages"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</a>
        </div>
        <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LATEST_PAGE_UPDATES"), "html", null, true);
            echo "</h1>
        <table>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "latestPages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                if ($this->getAttribute(($context["admin"] ?? null), "latestPages", [])) {
                    // line 9
                    echo "            ";
                    $context["route"] = $this->getAttribute($context["latest"], "rawRoute", []);
                    // line 10
                    echo "            <tr>
                <td class=\"triple page-title\">
                    <a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/pages/" . twig_trim_filter(($context["route"] ?? null), "/"))), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "title", []), "html", null, true);
                    echo "</a></td>
                <td class=\"triple page-route\">";
                    // line 13
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminNicetimeFilter($this->getAttribute($context["latest"], "modified", [])), "html", null, true);
                    echo "</td>
            </tr>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </table>
    </div>
";
        } else {
            // line 19
            echo "    <div class=\"padding\">You don't have sufficient access to view the dashboard...</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/dashboard-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  81 => 16,  69 => 13,  63 => 12,  59 => 10,  56 => 9,  51 => 8,  46 => 6,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.pages', 'admin.super']) %}
    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/pages') }}\"><i class=\"fa fa-fw fa-file-text-o\"></i>{{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</a>
        </div>
        <h1>{{ \"PLUGIN_ADMIN.LATEST_PAGE_UPDATES\"|tu }}</h1>
        <table>
        {% for latest in admin.latestPages if admin.latestPages %}
            {% set route = latest.rawRoute %}
            <tr>
                <td class=\"triple page-title\">
                    <a href=\"{{ admin_route('/pages/' ~ route|trim('/')) }}\"><i class=\"fa fa-fw fa-file-text-o\"></i> {{ latest.title }}</a></td>
                <td class=\"triple page-route\">{{ route }}</td><td>{{ latest.modified|adminNicetime }}</td>
            </tr>
        {% endfor %}
        </table>
    </div>
{% else %}
    <div class=\"padding\">You don't have sufficient access to view the dashboard...</div>
{% endif %}
", "partials/dashboard-pages.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/partials/dashboard-pages.html.twig");
    }
}
