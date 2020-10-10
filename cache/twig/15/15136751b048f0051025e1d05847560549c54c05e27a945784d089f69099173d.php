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

/* partials/stylesheets.html.twig */
class __TwigTemplate_8e087d67a5837f988fe0015dd18a10999595275d5a09f479fc2f0db21c7fb67d extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/stylesheets.html.twig"));

        // line 1
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/nucleus.css")], "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/template.css")], "method");
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["base_url_frontend"] ?? null) . "/assets/admin-preset.css")], "method");
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/simple-fonts.css")], "method");
        // line 5
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/fork-awesome.min.css")], "method");
        // line 6
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/chartist.min.css")], "method");
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/selectize.min.css")], "method");
        // line 8
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/hint.base.min.css")], "method");
        // line 9
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/iconpicker.css")], "method");
        // line 10
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 11
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/nucleus-ie9.css")], "method");
            // line 12
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/pure-0.5.0/grids-min.css")], "method");
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.addCss(theme_url~'/css-compiled/nucleus.css') %}
{% do assets.addCss(theme_url~'/css-compiled/template.css') %}
{% do assets.addCss(base_url_frontend~'/assets/admin-preset.css') %}
{% do assets.addCss(theme_url~'/css-compiled/simple-fonts.css') %}
{% do assets.addCss(theme_url~'/css/fork-awesome.min.css') %}
{% do assets.addCss(theme_url~'/css/chartist.min.css') %}
{% do assets.addCss(theme_url~'/css/selectize.min.css') %}
{% do assets.addCss(theme_url~'/css/hint.base.min.css') %}
{% do assets.addCss(theme_url~'/css/iconpicker.css') %}
{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
    {% do assets.addCss(theme_url~'/css/nucleus-ie9.css') %}
    {% do assets.addCss(theme_url~'/css/pure-0.5.0/grids-min.css') %}
{% endif %}
", "partials/stylesheets.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/partials/stylesheets.html.twig");
    }
}
