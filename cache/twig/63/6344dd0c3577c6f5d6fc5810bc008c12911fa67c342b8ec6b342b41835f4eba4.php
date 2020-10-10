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

/* flex-objects.html.twig */
class __TwigTemplate_b67f60b67b14ad85dae72ff200b82fdaae702f2bf817fde17a4b976fb85ba2bc extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects.html.twig"));

        // line 1
        $context["user"] = $this->getAttribute(($context["admin"] ?? null), "user", []);
        // line 2
        $context["route"] = $this->getAttribute(($context["controller"] ?? null), "route", []);
        // line 3
        $context["type"] = ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method")) : (($context["target"] ?? null)));
        // line 6
        if ((($context["key"] ?? null) && $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "currentUri", [], "method"), "queryParam", [0 => "preview"], "method"))) {
            // line 7
            echo "    ";
            $context["action"] = "preview";
        }
        // line 10
        ob_start();
        // line 11
        if ((($context["action"] ?? null) == "add")) {
            // line 12
            echo "edit";
        } elseif ((        // line 13
($context["action"] ?? null) == "delete")) {
            // line 14
            echo "list";
        } else {
            // line 16
            echo twig_escape_filter($this->env, ((($context["action"] ?? null)) ? (($context["action"] ?? null)) : (((($context["task"] ?? null)) ? (($context["task"] ?? null)) : ("types")))), "html", null, true);
        }
        $context["template"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 22
        $this->loadTemplate(((($context["target"] ?? null)) ? ([0 => (((("flex-objects/types/" .         // line 23
($context["type"] ?? null)) . "/") . ($context["template"] ?? null)) . ".html.twig"), 1 => (("flex-objects/types/default/" .         // line 24
($context["template"] ?? null)) . ".html.twig"), 2 => "flex-objects/layouts/404.html.twig"]) : ([0 => (("flex-objects/types/default/" .         // line 27
($context["template"] ?? null)) . ".html.twig"), 1 => "flex-objects/layouts/404.html.twig"])), "flex-objects.html.twig", 22)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  64 => 24,  63 => 23,  62 => 22,  60 => 20,  56 => 16,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  41 => 7,  39 => 6,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- set user = admin.user -%}
{%- set route = controller.route -%}
{%- set type = directory.config('admin.template') ?? target -%}

{# Set action from ?preview=1 #}
{%- if key and uri.currentUri().queryParam('preview') %}
    {% set action = 'preview' %}
{% endif -%}

{%- set template -%}
    {%- if action == 'add' -%}
        edit
    {%- elseif action == 'delete' -%}
        list
    {%- else -%}
        {{- action ?: task ?: 'types' -}}
    {%- endif -%}
{%- endset -%}

{%- set separator = config.system.param_sep -%}

{%- include target ? [
        'flex-objects/types/' ~ type ~ '/' ~ template ~ '.html.twig',
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] : [
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] -%}
", "flex-objects.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/flex-objects/admin/templates/flex-objects.html.twig");
    }
}
