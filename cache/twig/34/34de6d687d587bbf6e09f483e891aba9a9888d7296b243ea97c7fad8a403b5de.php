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

/* partials/page/footer.html.twig */
class __TwigTemplate_3881e5a88e7493c57d8c978035aa6b9a3301cbfaee0e832c5b5e62f5ae7a079b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/page/footer.html.twig"));

        // line 1
        echo "<hr/>
";
        // line 3
        if (((($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer", []), "")) : ("")) != "")) {
            // line 4
            echo "    ";
            if (((($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer_type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer_type", []), "markdown")) : ("markdown")) == "markdown")) {
                // line 5
                echo "        ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", []), "custom_footer", []));
                echo "
    ";
            } else {
                // line 7
                echo "        ";
                echo $this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", []), "custom_footer", []);
                echo "
    ";
            }
        }
        // line 10
        echo "
";
        // line 12
        echo "<p>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_HYPERTEXT.FOOTER.BY_LINE");
        echo "</p>

";
        // line 14
        $this->displayBlock('bottom', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 15
        if (($context["allowJS"] ?? null)) {
            // line 16
            echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
            echo "
";
        }
        // line 18
        echo "
";
        // line 19
        if (($context["allowCSS"] ?? null)) {
            // line 20
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "bottom"], "method");
            echo "
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  86 => 19,  83 => 18,  78 => 16,  76 => 15,  64 => 14,  58 => 12,  55 => 10,  48 => 7,  42 => 5,  39 => 4,  37 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<hr/>
{# Write the custom footer, if available. #}
{% if partials.footer.custom_footer|default('') != '' %}
    {% if partials.footer.custom_footer_type|default('markdown') == 'markdown' %}
        {{ partials.footer.custom_footer|markdown }}
    {% else %}
        {{ partials.footer.custom_footer|raw }}
    {% endif %}
{% endif %}

{# Be cool; please leave the attribution in unless you really need to remove it. ;) #}
<p>{{ 'THEME_HYPERTEXT.FOOTER.BY_LINE'|t }}</p>

{% block bottom %}
{% if allowJS %}
{{ assets.js('bottom')|raw }}
{% endif %}

{% if allowCSS %}
{{ assets.css('bottom')|raw }}
{% endif %}
{% endblock %}
", "partials/page/footer.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/page/footer.html.twig");
    }
}
