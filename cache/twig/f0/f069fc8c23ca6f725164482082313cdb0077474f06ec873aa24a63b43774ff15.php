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

/* partials/item/children.html.twig */
class __TwigTemplate_281a1582f95194fc06ac370fc272b5ef7f8fc3867054737dcb6dc0c7b11277fb extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/item/children.html.twig"));

        // line 1
        $context["collection"] = (((twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "collection", [], "method")) > 0)) ? ($this->getAttribute(($context["page"] ?? null), "collection", [], "method")) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", [])));
        // line 2
        $context["child_style"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "style", []), "summary")) : ("summary"));
        // line 3
        echo "
";
        // line 5
        echo "
";
        // line 6
        if ((twig_length_filter($this->env, ($context["collection"] ?? null)) > 0)) {
            // line 7
            echo "  ";
            $context["collection"] = $this->getAttribute(($context["collection"] ?? null), "order", [0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "by", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "by", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "by", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "by", []))), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "dir", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "dir", [])))], "method");
            // line 9
            echo "
  ";
            // line 11
            echo "  ";
            if ((($context["child_style"] ?? null) == "table")) {
                echo " 
  ";
                // line 12
                $this->loadTemplate("partials/item/table.html.twig", "partials/item/children.html.twig", 12)->display(twig_array_merge($context, ["parent" => ($context["page"] ?? null), "collection" => ($context["collection"] ?? null)]));
                // line 13
                echo "
  ";
            } elseif ((            // line 14
($context["child_style"] ?? null) == "list")) {
                // line 15
                echo "
  ";
                // line 17
                echo "  <ol>
    ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 19
                    echo "      ";
                    if ($this->getAttribute($context["child"], "isPage", [], "method")) {
                        // line 20
                        echo "        ";
                        $this->loadTemplate("partials/item/list.html.twig", "partials/item/children.html.twig", 20)->display(twig_array_merge($context, ["page" => $context["child"], "parent" => ($context["page"] ?? null), "level" => 1]));
                        // line 21
                        echo "      ";
                    }
                    // line 22
                    echo "    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "  </ol>

  ";
            } else {
                // line 26
                echo "
  ";
                // line 28
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 29
                    echo "      ";
                    if ($this->getAttribute($context["child"], "isPage", [], "method")) {
                        // line 30
                        echo "        ";
                        $this->loadTemplate("partials/item/summary.html.twig", "partials/item/children.html.twig", 30)->display(twig_array_merge($context, ["page" => $context["child"], "parent" => ($context["page"] ?? null)]));
                        // line 31
                        echo "      ";
                    }
                    // line 32
                    echo "    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 37
                echo "    ";
                $this->loadTemplate("partials/page/pagination.html.twig", "partials/item/children.html.twig", 37)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 38
                echo "  ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/item/children.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 38,  168 => 37,  166 => 36,  163 => 35,  159 => 33,  145 => 32,  142 => 31,  139 => 30,  136 => 29,  118 => 28,  115 => 26,  110 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  70 => 18,  67 => 17,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  52 => 11,  49 => 9,  47 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set collection = page.collection()|length > 0 ? page.collection() : page.children.visible %}
{% set child_style = page.header.render.children.style|default('summary') %}

{# ------------------------------------------------------------------------ #}

{% if collection|length > 0 %}
  {% set collection = collection.order(page.header.content.order.by|default(system.pages.order.by), 
                                       page.header.content.order.dir|default(system.pages.order.dir)) %}

  {# TABLE #}
  {% if child_style == 'table' %} 
  {% include 'partials/item/table.html.twig' with {'parent': page, 'collection': collection} %}

  {% elseif child_style == 'list' %}

  {# LIST #}
  <ol>
    {% for child in collection %}
      {% if child.isPage() %}
        {% include 'partials/item/list.html.twig' with {'page':child, parent:page, level:1} %}
      {% endif %}
    {% endfor %}
  </ol>

  {% else %}

  {# SUMMARY #}
    {% for child in collection %}
      {% if child.isPage() %}
        {% include 'partials/item/summary.html.twig' with {'page':child, parent:page} %}
      {% endif %}
    {% endfor %}

  {% endif %}

  {% if config.plugins.pagination.enabled and collection.params.pagination %}
    {% include 'partials/page/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
  {% endif %}
{% endif %}", "partials/item/children.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/item/children.html.twig");
    }
}
