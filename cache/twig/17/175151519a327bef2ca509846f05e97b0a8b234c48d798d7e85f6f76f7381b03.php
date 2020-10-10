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

/* partials/page/header.html.twig */
class __TwigTemplate_638de49d4e89811334e809c47f795fe18421683179cf28df19610aa62c28f761 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/page/header.html.twig"));

        // line 1
        echo "<h1><a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a></h1>

";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", [])) {
            // line 4
            echo ((($context["html5"] ?? null)) ? ("<aside>") : ("<p class=\"subtitle\">"));
            echo "
  ";
            // line 5
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
            echo "
";
            // line 6
            echo ((($context["html5"] ?? null)) ? ("</aside>") : ("</p>"));
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 14
            echo "    ";
            $this->loadTemplate("partials/page/messages.html.twig", "partials/page/header.html.twig", 14)->display($context);
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_header_navigation($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navigation"));

        // line 10
        echo "    ";
        $this->loadTemplate("partials/page/navigation.html.twig", "partials/page/header.html.twig", 10)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  76 => 9,  67 => 14,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 6,  48 => 5,  44 => 4,  42 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1><a href=\"{{ home_url }}\">{{ site.title|e('html') }}</a></h1>

{% if site.metadata.description %}
{{ html5 ? '<aside>' : '<p class=\"subtitle\">' }}
  {{ site.metadata.description }}
{{ html5 ? '</aside>' : '</p>' }}
{% endif %}

{% block header_navigation %}
    {% include 'partials/page/navigation.html.twig' %}
{% endblock %}

{% if grav.messages.all %}
    {% include 'partials/page/messages.html.twig' %}
{% endif %}", "partials/page/header.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/page/header.html.twig");
    }
}
