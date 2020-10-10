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

/* flex-objects/layouts/accounts/partials/top.html.twig */
class __TwigTemplate_953f20e81fd21a836119cecd774404f8c3217f46fdf2cf3a532af22639d82502 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/layouts/accounts/partials/top.html.twig"));

        // line 1
        $context["active_html"] = "class=\"active\"";
        // line 2
        $context["is_configure"] = ($this->getAttribute(($context["route"] ?? null), "gravParam", [0 => ""], "method") === "configure");
        // line 3
        echo "
";
        // line 4
        if (($context["allowed"] ?? null)) {
            // line 5
            echo "<div class=\"form-tabs\">
    <div class=\"tabs-nav\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["user-accounts" => "PLUGIN_ADMIN.USERS", "user-groups" => "PLUGIN_ADMIN.GROUPS"]);
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 8
                echo "        ";
                $context["current"] = $this->getAttribute(($context["flex"] ?? null), "directory", [0 => $context["name"]], "method");
                // line 9
                echo "        ";
                if ((($context["current"] ?? null) && $this->getAttribute(($context["current"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))) {
                    // line 10
                    echo "        ";
                    $context["active"] = ( !($context["is_configure"] ?? null) && $this->env->getExtension('Grav\Common\Twig\TwigExtension')->startsWithFilter(($context["nav_route"] ?? null), (twig_trim_filter($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => ($context["current"] ?? null)], "method"), "/") . "/")));
                    // line 11
                    echo "        <a ";
                    echo ((($context["active"] ?? null)) ? (($context["active_html"] ?? null)) : (""));
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => ($context["current"] ?? null)], "method")), "html", null, true);
                    echo "\">
            <span>";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["title"]), "html", null, true);
                    echo "</span>
        </a>
        ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        ";
            // line 17
            if ($this->getAttribute(($context["user"] ?? null), "authorize", [0 => ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")) : ("admin.super"))], "method")) {
                // line 18
                echo "        <a ";
                echo ((($context["is_configure"] ?? null)) ? (($context["active_html"] ?? null)) : (""));
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/accounts/configure"), "html", null, true);
                echo "\">
            <span>";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
                echo "</span>
        </a>
        ";
            }
            // line 22
            echo "    </div>
</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/layouts/accounts/partials/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 19,  83 => 18,  81 => 17,  78 => 16,  72 => 15,  66 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set active_html = 'class=\"active\"' %}
{% set is_configure = route.gravParam('') is same as('configure') %}

{% if allowed %}
<div class=\"form-tabs\">
    <div class=\"tabs-nav\">
        {% for name,title in {'user-accounts': 'PLUGIN_ADMIN.USERS', 'user-groups': 'PLUGIN_ADMIN.GROUPS'} %}
        {% set current = flex.directory(name) %}
        {% if current and current.isAuthorized('list', 'admin', user) %}
        {% set active = not is_configure and nav_route|starts_with(flex.adminRoute(current)|trim('/') ~ '/') %}
        <a {{active ? active_html|raw }} href=\"{{ admin_route(flex.adminRoute(current)) }}\">
            <span>{{ title|tu }}</span>
        </a>
        {% endif %}
        {% endfor %}

        {% if user.authorize(directory.config('admin.configure.authorize') ?? 'admin.super') %}
        <a {{is_configure ? active_html|raw }} href=\"{{ admin_route('/accounts/configure') }}\">
            <span>{{ 'PLUGIN_ADMIN.CONFIGURATION'|tu }}</span>
        </a>
        {% endif %}
    </div>
</div>
{% endif %}
", "flex-objects/layouts/accounts/partials/top.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/flex-objects/admin/templates/flex-objects/layouts/accounts/partials/top.html.twig");
    }
}
