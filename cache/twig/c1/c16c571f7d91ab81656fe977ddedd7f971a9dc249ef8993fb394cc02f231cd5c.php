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

/* partials/notification-feed-block.html.twig */
class __TwigTemplate_32b8a4b0c84118b20934609913b34a4b7c5c954e1343041703dc4e33ed10f5a5 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/notification-feed-block.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "<li class=\"single-notification ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "type", []), "html", null, true);
            echo "-notification\"><span class=\"badge alert ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "type", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["entry"], "type", [])), "html", null, true);
            echo "</span><a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "link", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["entry"], "message", [])), "html_attr");
            echo "\">";
            echo $this->getAttribute($context["entry"], "message", []);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/notification-feed-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for entry in notifications %}
<li class=\"single-notification {{ entry.type }}-notification\"><span class=\"badge alert {{ entry.type }}\">{{ entry.type|capitalize }}</span><a target=\"_blank\" href=\"{{ entry.link }}\" title=\"{{ entry.message|striptags|e('html_attr') }}\">{{ entry.message|raw }}</a></li>
{% endfor %}
", "partials/notification-feed-block.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/partials/notification-feed-block.html.twig");
    }
}
