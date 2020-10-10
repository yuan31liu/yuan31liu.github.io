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

/* partials/page/js-css.html.twig */
class __TwigTemplate_c19e4864e4a6a29f08ccff25d4a848b867accee5fe723223bf4c5e8593fa7d3f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylehseets' => [$this, 'block_stylehseets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/page/js-css.html.twig"));

        // line 1
        $this->displayBlock('stylehseets', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        $this->displayBlock('assets', $context, $blocks);
        // line 28
        echo "


";
        // line 32
        if (((($this->getAttribute(($context["style"] ?? null), "width", []) != "default") || ($this->getAttribute(        // line 33
($context["style"] ?? null), "configuration", []) != "default")) || ($this->getAttribute(        // line 34
($context["style"] ?? null), "customCSS", []) != ""))) {
            // line 35
            echo "<style>
body {
";
            // line 37
            echo ((($this->getAttribute(($context["style"] ?? null), "width", []) != "default")) ? ((("max-width: " . $this->getAttribute(($context["style"] ?? null), "width", [])) . "px;")) : (""));
            echo "
";
            // line 40
            if (($this->getAttribute(($context["style"] ?? null), "configuration", []) == "default")) {
                // line 41
                echo "    margin-left: 8px;
    margin-right: 8px;
";
            } else {
                // line 44
                echo "    margin-left: auto;
    margin-right: auto;
";
            }
            // line 47
            echo "}

";
            // line 50
            echo "img { max-width: 100%; }

";
            // line 58
            echo "
";
            // line 60
            echo ((($this->getAttribute(($context["style"] ?? null), "customCSS", []) != "")) ? ($this->getAttribute(($context["style"] ?? null), "customCSS", [])) : (""));
            echo "
</style>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 1
    public function block_stylehseets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylehseets"));

        // line 2
        echo "
";
        // line 5
        if ((($context["stylesheet"] ?? null) != "default")) {
            // line 6
            echo "  ";
            if (($this->getAttribute(($context["style"] ?? null), "include_type", []) == "inline")) {
                // line 7
                echo "    ";
                // line 8
                echo "    <style>";
                echo twig_include($this->env, $context, (("css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "</style>
  ";
            } elseif ( !$this->getAttribute(            // line 9
($context["style"] ?? null), "allowCSS", [])) {
                // line 10
                echo "    ";
                // line 11
                echo "    <link href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("theme://css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 13
                echo "    ";
                // line 14
                echo "    ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/" . ($context["stylesheet"] ?? null)) . ".css")], "method");
                // line 15
                echo "  ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "  ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 24
    public function block_assets_deferred($context, array $blocks = array())
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "assets"));

        // line 25
        echo "  ";
        if (($context["allowCSS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        }
        // line 26
        echo "  ";
        if (($context["allowJS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page/js-css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 26,  169 => 25,  163 => 24,  151 => 20,  145 => 19,  136 => 15,  133 => 14,  131 => 13,  125 => 11,  123 => 10,  121 => 9,  116 => 8,  114 => 7,  111 => 6,  109 => 5,  106 => 2,  100 => 1,  88 => 60,  85 => 58,  81 => 50,  77 => 47,  72 => 44,  67 => 41,  65 => 40,  61 => 37,  57 => 35,  55 => 34,  54 => 33,  53 => 32,  48 => 28,  46 => 24,  43 => 22,  41 => 19,  38 => 18,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block stylehseets %}

{# Add the stylesheet #}
{# TODO: Add sourcing options from unpkg rather than locally #}
{% if stylesheet != 'default' %}
  {% if style.include_type == 'inline' %}
    {# User *explicitly* wants it imported in style tags #}
    <style>{{ include('css/' ~ stylesheet ~ '.css') }}</style>
  {% elseif not style.allowCSS %}
    {# User wants it via href, but doesn't have CSS pipeline running #}
    <link href=\"{{ url('theme://css/'~stylesheet~'.css') }}\" rel=\"stylesheet\" />
  {% else %}
    {# User wants it href and is allowing CSS #}
    {% do assets.addCss('theme://css/'~stylesheet~'.css') %}
  {% endif %}
{% endif %}
{% endblock %}

{% block javascripts %}
  {# Hypertext doesn't add any JS, but if it did it would go here. #}
{% endblock %}

{# Regular CSS/JS includes #}
{% block assets deferred %}
  {% if allowCSS %}{{ assets.css()|raw }}{% endif %}
  {% if allowJS %}{{ assets.js()|raw }}{% endif %}
{% endblock %}



{# Add custom styles (if needed) #}
{% if style.width != 'default' or 
      style.configuration != 'default' or
      style.customCSS != '' %}
<style>
body {
{{ style.width != 'default' ? \"max-width: #{style.width}px;\" : \"\"}}
{# Set only left and right margins because some stylesheets set vertical. #}
{# Also reset to 8px, the Chrome default (`unset` doesn't work). #}
{% if style.configuration == 'default' %}
    margin-left: 8px;
    margin-right: 8px;
{% else %}
    margin-left: auto;
    margin-right: auto;
{% endif %}
}

{# This is the one piece of style that is unavoidable. See documentation for details. #}
img { max-width: 100%; }

{# This was a bad idea.
{% if style.header_image_align|default('default') == 'left' %}
.snippet img { float: left; margin: 0 1em; }
section { clear: both; }
{% endif %} 
#}

{# User's styles #}
{{ style.customCSS != '' ? style.customCSS : \"\" }}
</style>
{% endif %}", "partials/page/js-css.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/page/js-css.html.twig");
    }
}
