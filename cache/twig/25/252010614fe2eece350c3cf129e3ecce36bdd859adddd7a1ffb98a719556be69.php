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

/* partials/item/summary.html.twig */
class __TwigTemplate_3e404c8879a511d0b76abe6b8bc3a4ced002e0e91d003c1e72577d361ddc0bba extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/item/summary.html.twig"));

        // line 1
        $context["show_image"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "image", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "image", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "image", [])) : (true));
        // line 2
        echo "  ";
        $context["thumbnail_filename"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "thumbnail_image_file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "thumbnail_image_file", []), "thumbnail.png")) : ("thumbnail.png"));
        // line 3
        echo "  ";
        $context["thumbnail_image"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["thumbnail_filename"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["thumbnail_filename"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["thumbnail_filename"] ?? null), [], "array")) : (((($this->getAttribute(        // line 4
($context["media"] ?? null), ("image://" . ($context["thumbnail_filename"] ?? null)), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), ("image://" . ($context["thumbnail_filename"] ?? null)), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), ("image://" . ($context["thumbnail_filename"] ?? null)), [], "array")) : (((($this->getAttribute(        // line 5
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.png"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.png"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.png"), [], "array")) : (((($this->getAttribute(        // line 6
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.jpg"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.jpg"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.jpg"), [], "array")) : (((($this->getAttribute(        // line 7
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.gif"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.gif"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . "_thumbnail.gif"), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(        // line 8
($context["page"] ?? null), "media", []), "images", []))))))))))));
        // line 9
        echo "  ";
        $context["use_image_crop"] = (($this->getAttribute(($context["style"] ?? null), "image_cropping", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["style"] ?? null), "image_cropping", []), false)) : (false));
        // line 10
        echo "  ";
        $context["image_width"] = ((($context["use_image_crop"] ?? null)) ? (($this->getAttribute(($context["style"] ?? null), "width", []) / 7)) : ($this->getAttribute(($context["thumbnail_image"] ?? null), "width", [])));
        // line 11
        echo "  ";
        $context["image_height"] = ((($context["use_image_crop"] ?? null)) ? (($this->getAttribute(($context["style"] ?? null), "width", []) / 7)) : ($this->getAttribute(($context["thumbnail_image"] ?? null), "height", [])));
        // line 12
        echo "  ";
        $context["header_image_url"] = ((($context["use_image_crop"] ?? null)) ? ($this->getAttribute($this->getAttribute(($context["thumbnail_image"] ?? null), "cropZoom", [0 => ($context["image_width"] ?? null), 1 => ($context["image_height"] ?? null)], "method"), "url", [])) : ($this->getAttribute(($context["thumbnail_image"] ?? null), "url", [])));
        // line 13
        echo "
";
        // line 14
        $context["show_subtitle"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "subtitle", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "subtitle", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "subtitle", [])) : (true));
        // line 15
        $context["show_cat"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "category", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "category", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "category", [])) : (true));
        // line 16
        $context["show_date"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "date", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "date", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "date", [])) : (false));
        // line 17
        $context["show_children"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "nested_children", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "nested_children", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "header", [], "any", false, true), "render", [], "any", false, true), "children", [], "any", false, true), "nested_children", [])) : (true));
        // line 18
        $context["inner_children"] = (((twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "collection", [], "method")) > 0)) ? ($this->getAttribute(($context["page"] ?? null), "collection", [], "method")) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", [])));
        // line 19
        echo "
";
        // line 21
        echo "
<hr/>
";
        // line 23
        if (($context["html5"] ?? null)) {
            // line 24
            echo "  <section class=\"snippet";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    echo " cat_";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["cat"]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "\">
";
        } else {
            // line 26
            echo "  <div class=\"snippet";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    echo " cat_";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["cat"]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "\">
";
        }
        // line 28
        echo "
";
        // line 30
        echo "<h3>
  <a href=\"";
        // line 31
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</a>
  ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []) && ($context["show_subtitle"] ?? null))) {
            echo " - <small>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "</small>";
        }
        // line 33
        echo "</h3>

<p> ";
        // line 36
        echo "
";
        // line 39
        if ((($context["show_image"] ?? null) && ($context["thumbnail_image"] ?? null))) {
            // line 40
            echo "  <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\"><img src=\"";
            echo ($context["header_image_url"] ?? null);
            echo "\" width=\"";
            echo ($context["header_image_width"] ?? null);
            echo "\" height=\"";
            echo ($context["header_image_height"] ?? null);
            echo "\"></a>
";
        }
        // line 42
        echo "
";
        // line 44
        if (($context["show_date"] ?? null)) {
            // line 45
            echo (((($context["show_image"] ?? null) && ($context["thumbnail_image"] ?? null))) ? ("<br>") : (""));
            echo "
<sub>
  ";
            // line 47
            if (($context["html5"] ?? null)) {
                // line 48
                echo "    <time datetime=\"";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "</time>
  ";
            } else {
                // line 50
                echo "    <span class=\"datetime\">";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "</span>
  ";
            }
            // line 52
            echo "</sub>
";
        }
        // line 54
        echo "
";
        // line 56
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []) && ($context["show_cat"] ?? null))) {
            // line 57
            echo "<br>
  Categories: <small>
  ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 60
                echo "    ";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("[") : (""));
                echo "<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "/");
                echo "/category";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["category"];
                echo "\">";
                echo $context["category"];
                echo "</a>";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("]") : (""));
                echo (( !$this->getAttribute($context["loop"], "last", [])) ? (",") : (""));
                echo "
  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</small></p>
";
        } else {
        }
        // line 64
        echo "
</p>

";
        // line 68
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) == $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 69
            echo "  ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
";
        } else {
            // line 71
            echo "  ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "  
  ";
            // line 72
            if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_clickthrough", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_clickthrough", [])))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_clickthrough", [])) : (true))) {
                echo "<p><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">Continue Reading...</a></p> ";
            }
        }
        // line 74
        echo "
";
        // line 76
        if ((($context["show_children"] ?? null) && (twig_length_filter($this->env, ($context["inner_children"] ?? null)) > 0))) {
            // line 77
            $context["inner_children"] = $this->getAttribute(($context["inner_children"] ?? null), "order", [0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "by", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "by", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "by", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "by", []))), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 78
($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "dir", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "order", []), "dir", [])))], "method");
            // line 79
            echo "<p>Sub-Pages:
<ol class=\"nested-children\">
  ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inner_children"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 82
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["child"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["child"], "title", []);
                echo "</a>";
                echo ((($this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", []) && ($context["show_subtitle"] ?? null))) ? (((" - <span>" . $this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", [])) . "</span>")) : (""));
                echo "</li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "</ol>
</p>
";
        }
        // line 86
        echo " ";
        // line 87
        echo "
";
        // line 88
        echo ((($context["html5"] ?? null)) ? ("</section>") : ("</div>"));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/item/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 88,  300 => 87,  298 => 86,  293 => 84,  280 => 82,  276 => 81,  272 => 79,  270 => 78,  269 => 77,  267 => 76,  264 => 74,  257 => 72,  252 => 71,  246 => 69,  244 => 68,  239 => 64,  234 => 61,  207 => 60,  190 => 59,  186 => 57,  184 => 56,  181 => 54,  177 => 52,  171 => 50,  163 => 48,  161 => 47,  156 => 45,  154 => 44,  151 => 42,  139 => 40,  137 => 39,  134 => 36,  130 => 33,  124 => 32,  118 => 31,  115 => 30,  112 => 28,  96 => 26,  80 => 24,  78 => 23,  74 => 21,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set show_image = parent.header.render.children.image ?? true %}
  {% set thumbnail_filename = page.header.thumbnail_image_file|default('thumbnail.png') %}
  {% set thumbnail_image = page.media.images[thumbnail_filename] ??
                      media['image://' ~ thumbnail_filename] ??
                      media['image://' ~ page.slug()~'_thumbnail.png'] ??
                      media['image://' ~ page.slug()~'_thumbnail.jpg'] ??
                      media['image://' ~ page.slug()~'_thumbnail.gif'] ??
                      page.media.images|first %}
  {% set use_image_crop = style.image_cropping|default(false) %}
  {% set image_width = use_image_crop ? style.width / 7 : thumbnail_image.width %}
  {% set image_height = use_image_crop ? style.width / 7 : thumbnail_image.height %}
  {% set header_image_url = use_image_crop ? thumbnail_image.cropZoom(image_width, image_height).url : thumbnail_image.url %}

{% set show_subtitle = parent.header.render.children.subtitle ?? true %}
{% set show_cat = parent.header.render.children.category ?? true %}
{% set show_date = parent.header.render.children.date ?? false %}
{% set show_children = parent.header.render.children.nested_children ?? true %}
{% set inner_children = page.collection()|length > 0 ? page.collection() : page.children.visible %}

{# ------------------------------------------------------------------------ #}

<hr/>
{% if html5 %}
  <section class=\"snippet{% if page.taxonomy.category %}{% for cat in page.taxonomy.category %} cat_{{ cat|hyphenize }}{% endfor %}{% endif %}\">
{% else %}
  <div class=\"snippet{% if page.taxonomy.category %}{% for cat in page.taxonomy.category %} cat_{{ cat|hyphenize }}{% endfor %}{% endif %}\">
{% endif %}

{# Title & Subtitle #}
<h3>
  <a href=\"{{ page.url }}\">{{ page.title }}</a>
  {% if page.header.subtitle and show_subtitle %} - <small>{{ page.header.subtitle }}</small>{% endif %}
</h3>

<p> {# The next set of items should be somewhat close together. #}

{# Image #}
{# Must be one line to avoid dangling, clickable space #}
{% if show_image and thumbnail_image %}
  <a href=\"{{ page.url }}\"><img src=\"{{ header_image_url }}\" width=\"{{ header_image_width }}\" height=\"{{ header_image_height }}\"></a>
{% endif %}

{# Date #}
{% if show_date %}
{{ show_image and thumbnail_image ? '<br>' : '' }}
<sub>
  {% if html5 %}
    <time datetime=\"{{ page.date|date(\"c\") }}\">{{ page.date|date(system.pages.dateformat.short) }}</time>
  {% else %}
    <span class=\"datetime\">{{ page.date|date(system.pages.dateformat.short) }}</span>
  {% endif %}
</sub>
{% endif %}

{# Categories #}
{% if page.taxonomy.category and show_cat %}
<br>
  Categories: <small>
  {% for category in page.taxonomy.category %}
    {{ structure.use_decorators ? '[' : '' }}<a href=\"{{ page.parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>{{ structure.use_decorators ? ']' : '' }}{{ not loop.last ? ',' : '' }}
  {% endfor %}</small></p>
{% else %}
{% endif %}

</p>

{# Text #}
{% if page.summary == page.content %}
  {{ page.summary|raw }}
{% else %}
  {{ page.summary }}  
  {% if page.header.show_clickthrough ?? true %}<p><a href=\"{{ page.url }}\">Continue Reading...</a></p> {% endif %}
{% endif %}

{# Children #}
{% if show_children and inner_children|length > 0 %}
{% set inner_children = inner_children.order(page.header.content.order.by|default(system.pages.order.by), 
                                             page.header.content.order.dir|default(system.pages.order.dir)) %}
<p>Sub-Pages:
<ol class=\"nested-children\">
  {% for child in inner_children %}
  <li><a href=\"{{ child.url }}\">{{ child.title }}</a>{{ child.header.subtitle and show_subtitle ? ' - <span>'~child.header.subtitle~'</span>' : '' }}</li>
  {% endfor %}
</ol>
</p>
{% endif %} {# End render nested children #}

{{ html5 ? '</section>' : '</div>' }}", "partials/item/summary.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/hypertext/templates/partials/item/summary.html.twig");
    }
}
