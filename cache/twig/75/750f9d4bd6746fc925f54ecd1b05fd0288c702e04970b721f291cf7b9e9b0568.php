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

/* partials/item/footer.html.twig */
class __TwigTemplate_8e9caf58d61304a83e023e93a9fb79599d0da9cf8713368b2c7343bf42909db9 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/item/footer.html.twig"));

        // line 3
        echo "
<p>
";
        // line 6
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "root", [], "method") && (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "content", [], "any", false, true), "sibling_links", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "content", [], "any", false, true), "sibling_links", []), false)) : (false)))) {
            // line 7
            echo "  <span class=\"pagination\">
  ";
            // line 8
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 9
                echo "    <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">&#xab; ";
                echo $this->getAttribute(($context["structure"] ?? null), "prevWord", []);
                echo "</a>
  ";
            }
            // line 11
            echo "  ";
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 12
                echo "    <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">";
                echo $this->getAttribute(($context["structure"] ?? null), "nextWord", []);
                echo " &raquo;</a>
  ";
            }
            // line 14
            echo "  </span>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/item/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  55 => 12,  52 => 11,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# If this isn't a top-level page, it has siblings under a `collection` page type. #}
{# Add the date, unless suppressed.  TODO: Build in suppression option.  #}

<p>
{# Render the next/prev buttons, unless suppressed. #}
{% if not page.parent.root() and page.parent.header.content.sibling_links|default(false) %}
  <span class=\"pagination\">
  {% if not page.isLast %}
    <a href=\"{{ page.prevSibling.url }}\">&#xab; {{ structure.prevWord }}</a>
  {% endif %}
  {% if not page.isFirst %}
    <a href=\"{{ page.nextSibling.url }}\">{{ structure.nextWord }} &raquo;</a>
  {% endif %}
  </span>
{% endif %}", "partials/item/footer.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/item/footer.html.twig");
    }
}
