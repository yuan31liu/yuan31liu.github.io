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

/* flex-objects/types/default/list/list.html.twig */
class __TwigTemplate_203c4c23085a3ed5249da84abf9ea532070f944c4204f3059d34818cc9a55a76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'directory' => [$this, 'block_directory'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/list/list.html.twig"));

        // line 1
        $this->displayBlock('directory', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_directory($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "directory"));

        // line 2
        echo "<div id=\"directory\">
    ";
        // line 3
        if ( !($context["fields"] ?? null)) {
            // line 4
            echo "        <div class=\"no-entries\">
            <p>Blueprint for '";
            // line 5
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "' does not define displayed fields or list page override.</p>
            <ul>
                <li>
                    Please add list of fields to blueprints file.
                </li>
                <li>
                    Please create template file for the type in <strong>flex-objects/types/";
            // line 11
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "/list.html.twig</strong>
                </li>
            </ul>
        </div>
        ";
        } elseif ( !$this->getAttribute(        // line 15
($context["collection"] ?? null), "count", [])) {
            // line 16
            echo "        <div class=\"no-entries\">
            ";
            // line 17
            if ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) {
                // line 18
                echo "                There are currently no entries, click the <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => ($context["collection"] ?? null), 1 => ["action" => "add"]], "method")), "html", null, true);
                echo "\">Add</a> button to create a new one...
            ";
            } else {
                // line 20
                echo "                There are currently no entries.
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            echo "        ";
            $context["per_page"] = (($context["per_page"]) ?? ($this->getAttribute(($context["directory_config"] ?? null), "per_page", [])));
            // line 25
            echo "
        ";
            // line 26
            $context["tableFields"] = [];
            // line 27
            echo "        ";
            $context["searchFields"] = [];
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["options"]) {
                // line 29
                echo "            ";
                $context["name"] = $context["key"];
                // line 30
                echo "            ";
                $context["sortField"] = ((($this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [])))) ? ($this->getAttribute($this->getAttribute($context["options"], "sort", [], "any", false, true), "field", [])) : ($context["key"]));
                // line 31
                echo "            ";
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(((($this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [])))) ? ($this->getAttribute($this->getAttribute($context["options"], "field", [], "any", false, true), "label", [])) : ($this->getAttribute($this->getAttribute(($context["schema"] ?? null), "get", [0 => ((($this->getAttribute($context["options"], "alias", [], "any", true, true) &&  !(null === $this->getAttribute($context["options"], "alias", [])))) ? ($this->getAttribute($context["options"], "alias", [])) : ($context["key"]))], "method"), "label", []))));
                // line 32
                echo "            ";
                $context["width"] = (($this->getAttribute($context["options"], "width", [])) ? ($this->getAttribute($context["options"], "width", [])) : (twig_round(((100 - ($context["fields_width"] ?? null)) / (((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) ? ((($context["fields_count"] ?? null) - ($context["fields_set"] ?? null))) : (1))), 3)));
                // line 33
                echo "            ";
                $context["title_class"] = (($this->getAttribute($context["options"], "title_class", [])) ? ($this->getAttribute($context["options"], "title_class", [])) : (""));
                // line 34
                echo "            ";
                $context["data_class"] = (($this->getAttribute($context["options"], "data_class", [])) ? ($this->getAttribute($context["options"], "data_class", [])) : (""));
                // line 35
                echo "
            ";
                // line 37
                echo "            ";
                $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => twig_replace_filter(                // line 39
($context["name"] ?? null), ["." => "_"]), "sortField" =>                 // line 40
($context["sortField"] ?? null), "title" => ((                // line 41
$context["title"]) ?? ("N/A")), "width" => (                // line 42
($context["width"] ?? null) . "%"), "titleClass" =>                 // line 43
($context["title_class"] ?? null), "dataClass" =>                 // line 44
($context["data_class"] ?? null)]]);
                // line 47
                echo "
            ";
                // line 49
                echo "            ";
                $context["searchFields"] = twig_array_merge(($context["searchFields"] ?? null), [0 => twig_replace_filter($context["key"], ["." => "_"])]);
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
            $context["tableFields"] = twig_array_merge(($context["tableFields"] ?? null), [0 => ["name" => "_actions_", "title" => "Actions", "titleClass" => "right"]]);
            // line 52
            echo "

        ";
            // line 54
            $context["list"] = $this->getAttribute(($context["table"] ?? null), "jsonSerialize", []);
            // line 55
            echo "
        <div
            id=\"flex-objects-list\"
            data-initial-store=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["data" =>             // line 60
($context["list"] ?? null), "api" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
($context["grav"] ?? null), "uri", []), "currentRoute", [], "method"), "withExtension", [0 => "json"], "method"), "uri", [], "method")), "perPage" =>             // line 62
($context["per_page"] ?? null), "fields" =>             // line 63
($context["tableFields"] ?? null), "searchFields" =>             // line 64
($context["searchFields"] ?? null), "sortOrder" => [0 => ["field" => $this->getAttribute($this->getAttribute(            // line 65
($context["directory_config"] ?? null), "order", []), "by", []), "direction" => $this->getAttribute($this->getAttribute(($context["directory_config"] ?? null), "order", []), "dir", [])]], "searchPlaceholder" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "paginationInfo" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LIST_INFO"), "emptyResult" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.EMPTY_RESULT")]), "html_attr");
            // line 70
            echo "\">
            <svg viewBox=\"0 0 1060 ";
            // line 71
            echo twig_escape_filter($this->env, (31 * (min(($context["per_page"] ?? null), count($this->getAttribute(($context["list"] ?? null), "data", []))) + 2)), "html", null, true);
            echo "\">
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((min(($context["per_page"] ?? null), count($this->getAttribute(($context["list"] ?? null), "data", []))) + 3) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                <rect clip-path=\"url(#clip-path-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ")\" x=\"0\" y=\"0\" width=\"1060\" height=\"";
                echo twig_escape_filter($this->env, (31 * ($context["per_page"] ?? null)), "html", null, true);
                echo "\" style=\"fill: url(#linear-gradient-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ")\"></rect>
                <defs>
                    <clipPath id=\"clip-path-";
                // line 75
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                        <rect x=\"13\" y=\"";
                // line 76
                echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"";
                echo twig_escape_filter($this->env, (200 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
                echo "\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"";
                // line 77
                echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"";
                echo twig_escape_filter($this->env, (63 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
                echo "\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"";
                // line 78
                echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"";
                echo twig_escape_filter($this->env, (78 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
                echo "\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"";
                // line 79
                echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"";
                echo twig_escape_filter($this->env, (117 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
                echo "\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"";
                // line 80
                echo twig_escape_filter($this->env, ((31 * $context["i"]) + 10), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"";
                echo twig_escape_filter($this->env, (83 * twig_random($this->env, [0 => 0.7, 1 => 0.8, 2 => 0.9, 3 => 1])), "html", null, true);
                echo "\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"";
                // line 82
                echo twig_escape_filter($this->env, (31 * $context["i"]), "html", null, true);
                echo "\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-";
                // line 84
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            </svg></div>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        $this->loadTemplate("flex-objects/types/default/modals/remove.html.twig", "flex-objects/types/default/list/list.html.twig", 100)->display(twig_array_merge($context, ["name" => ($context["target"] ?? null)]));
        // line 101
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 101,  258 => 100,  255 => 99,  251 => 97,  232 => 84,  227 => 82,  220 => 80,  214 => 79,  208 => 78,  202 => 77,  196 => 76,  192 => 75,  182 => 73,  178 => 72,  174 => 71,  171 => 70,  169 => 65,  168 => 64,  167 => 63,  166 => 62,  165 => 61,  164 => 60,  163 => 58,  158 => 55,  156 => 54,  152 => 52,  149 => 51,  143 => 50,  140 => 49,  137 => 47,  135 => 44,  134 => 43,  133 => 42,  132 => 41,  131 => 40,  130 => 39,  128 => 37,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  91 => 24,  87 => 22,  83 => 20,  77 => 18,  75 => 17,  72 => 16,  70 => 15,  63 => 11,  54 => 5,  51 => 4,  49 => 3,  46 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block directory %}
<div id=\"directory\">
    {% if not fields %}
        <div class=\"no-entries\">
            <p>Blueprint for '{{ target }}' does not define displayed fields or list page override.</p>
            <ul>
                <li>
                    Please add list of fields to blueprints file.
                </li>
                <li>
                    Please create template file for the type in <strong>flex-objects/types/{{ target }}/list.html.twig</strong>
                </li>
            </ul>
        </div>
        {% elseif not collection.count %}
        <div class=\"no-entries\">
            {% if directory.isAuthorized('create', 'admin', user) %}
                There are currently no entries, click the <a href=\"{{ admin_route(flex.adminRoute(collection, {action: 'add'})) }}\">Add</a> button to create a new one...
            {% else %}
                There are currently no entries.
            {% endif %}
        </div>
    {% else %}
        {% set per_page = per_page ?? directory_config.per_page %}

        {% set tableFields = [] %}
        {% set searchFields = [] %}
        {% for key, options in fields %}
            {% set name = key %}
            {% set sortField = options.sort.field ?? key %}
            {% set title = (options.field.label ?? schema.get(options.alias ?? key).label)|tu %}
            {% set width = options.width ?: ((100-fields_width) / ((fields_count-fields_set) ?: 1))|round(3) %}
            {% set title_class = options.title_class ?: '' %}
            {% set data_class = options.data_class ?: '' %}

            {# Vuetable doesn't like field names with `.` in them, so we convert name and sortField to `_` #}
            {% set tableFields = tableFields|merge([
                {
                    name: name|replace({'.': '_'}),
                    sortField: sortField,
                    title: title ?? 'N/A',
                    width: width ~ '%',
                    titleClass: title_class,
                    dataClass: data_class
                }
            ]) %}

            {# FIXME: Search fields should be passed and individually customizable, right now defaulting to all fields selected #}
            {% set searchFields = searchFields|merge([key|replace({'.': '_'})]) %}
        {% endfor %}
        {% set tableFields = tableFields|merge([{ name: '_actions_', title: 'Actions', titleClass: 'right' }]) %}


        {% set list = table.jsonSerialize %}

        <div
            id=\"flex-objects-list\"
            data-initial-store=\"{{
                {
                    data: list,
                    api: grav.uri.currentRoute().withExtension('json').uri()|string,
                    perPage: per_page,
                    fields: tableFields,
                    searchFields: searchFields,
                    sortOrder: [{ field: directory_config.order.by, direction: directory_config.order.dir }],
                    searchPlaceholder: \"PLUGIN_ADMIN.RESOURCE_FILTER\"|tu,
                    paginationInfo: \"PLUGIN_FLEX_OBJECTS.LIST_INFO\"|tu,
                    emptyResult: \"PLUGIN_FLEX_OBJECTS.EMPTY_RESULT\"|tu
                }|json_encode|e('html_attr')
            }}\">
            <svg viewBox=\"0 0 1060 {{ 31 * (min(per_page, list.data|count) + 2) }}\">
            {% for i in 0..((min(per_page, list.data|count) + 3) - 1) %}
                <rect clip-path=\"url(#clip-path-{{ i }})\" x=\"0\" y=\"0\" width=\"1060\" height=\"{{ 31 * per_page }}\" style=\"fill: url(#linear-gradient-{{ i }})\"></rect>
                <defs>
                    <clipPath id=\"clip-path-{{ i }}\">
                        <rect x=\"13\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 200 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"533\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 63 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"653\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 78 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"755\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 117 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>
                        <rect x=\"938\" y=\"{{ 31 * i + 10 }}\" rx=\"6\" ry=\"6\" width=\"{{ 83 * random([0.7, 0.8, 0.9, 1]) }}\" height=\"12\"></rect>

                        <rect x=\"0\" y=\"{{ 31 * i }}\" rx=\"6\" ry=\"6\" width=\"1060\" height=\".3\"></rect>
                    </clipPath>
                    <linearGradient id=\"linear-gradient-{{ i }}\">
                        <stop offset=\"-0.60016\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-3; 1\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"0.39984\" stop-color=\"#ecebeb\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-2; 2\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                        <stop offset=\"1.39984\" stop-color=\"#d9d9d9\" stop-opacity=\"1\">
                            <animate attributeName=\"offset\" values=\"-1; 3\" dur=\"2s\" repeatCount=\"indefinite\"></animate>
                        </stop>
                    </linearGradient>
                </defs>
            {% endfor %}
            </svg></div>
    {% endif %}

    {% include 'flex-objects/types/default/modals/remove.html.twig' with { name: target } %}
</div>
{% endblock %}
", "flex-objects/types/default/list/list.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/flex-objects/admin/templates/flex-objects/types/default/list/list.html.twig");
    }
}
