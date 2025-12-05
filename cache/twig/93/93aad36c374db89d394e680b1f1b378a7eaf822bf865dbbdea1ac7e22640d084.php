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

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_dc632d629eac3330ebc65999f3028badaaa1eebabf91eaf6d420fc7c36c0349a extends \Twig\Template
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
        // line 1
        echo "
";
        // line 2
        $context["tag_type"] = (($this->getAttribute(($context["segment"] ?? null), "subtype", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "subtype", []), "section")) : ("section"));
        // line 3
        $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
        // line 4
        $context["attr_class"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []);
        // line 5
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
        // line 6
        $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
        // line 7
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
        }
        // line 10
        echo "

";
        // line 12
        $context["attr_background"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "background", [])) ? (twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "background", [])))) : (false));
        // line 13
        $context["attr_backgroundOverlay"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundOverlay", []);
        // line 14
        if ((($context["attr_backgroundOverlay"] ?? null) == "")) {
            // line 15
            echo "    ";
            $context["attr_backgroundOverlay"] = "rgba(0, 0, 0, 0)";
        }
        // line 17
        echo "
";
        // line 19
        $context["attr_blockHeight"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "blockHeight", []);
        // line 20
        echo "

";
        // line 23
        $context["attr_backgroundAttachment"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundAttachment", []);
        // line 24
        $context["attr_backgroundRepeat"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundRepeat", []);
        // line 25
        $context["attr_backgroundPosition"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundPosition", []);
        // line 26
        $context["attr_backgroundSize"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "backgroundSize", []);
        // line 27
        echo "
";
        // line 29
        $context["attr_paddingTop"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "paddingTop", []);
        // line 30
        $context["attr_paddingBottom"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "paddingBottom", []);
        // line 31
        $context["attr_paddingLeft"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "paddingLeft", []);
        // line 32
        $context["attr_paddingRight"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "paddingRight", []);
        // line 33
        echo "

";
        // line 36
        $context["attr_marginTop"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "marginTop", []);
        // line 37
        $context["attr_marginBottom"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "marginBottom", []);
        // line 38
        $context["attr_marginLeft"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "marginLeft", []);
        // line 39
        $context["attr_marginRight"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "marginRight", []);
        // line 40
        echo "

";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", [])) {
            // line 43
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 44
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 45
                    echo "        ";
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                    // line 46
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 50
        ob_start();
        // line 51
        echo "    ";
        if ($this->getAttribute(($context["segment"] ?? null), "children", [])) {
            // line 52
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 53
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/section.html.twig", 53)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
                // line 54
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 59
            if (( !(null === ($context["boxed"] ?? null)) && ((($context["boxed"] ?? null) == 0) || (($context["boxed"] ?? null) == 2)))) {
                // line 60
                echo "        ";
                ob_start();
                // line 61
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 63
                echo "    ";
            }
            // line 64
            echo "
    ";
            // line 65
            ob_start();
            // line 66
            echo "    ";
            if ((($context["boxed"] ?? null) == 2)) {
                $context["attr_class"] = (($context["attr_class"] ?? null) . " g-flushed");
            }
            // line 67
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 68
            echo "<";
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 69
            if (($context["attr_background"] ?? null)) {
                // line 70
                echo "            <div class=\"section-background\" 
                style=\"
                    background-image: 
                    linear-gradient( ";
                // line 73
                echo twig_escape_filter($this->env, ($context["attr_backgroundOverlay"] ?? null), "html", null, true);
                echo ", 
                                    ";
                // line 74
                echo twig_escape_filter($this->env, ($context["attr_backgroundOverlay"] ?? null), "html", null, true);
                echo " 
                    ), 
                    url(";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["attr_background"] ?? null)), "html", null, true);
                echo "); 

                ";
                // line 78
                if (($context["attr_backgroundAttachment"] ?? null)) {
                    echo " background-attachment: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundAttachment"] ?? null), "html", null, true);
                    echo ";  ";
                }
                echo "            
                ";
                // line 79
                if (($context["attr_backgroundRepeat"] ?? null)) {
                    echo " background-repeat: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundRepeat"] ?? null), "html", null, true);
                    echo ";  ";
                }
                // line 80
                echo "                ";
                if (($context["attr_backgroundPosition"] ?? null)) {
                    echo " background-position: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundPosition"] ?? null), "html", null, true);
                    echo ";  ";
                }
                echo "            
                ";
                // line 81
                if (($context["attr_backgroundSize"] ?? null)) {
                    echo " background-size: ";
                    echo twig_escape_filter($this->env, ($context["attr_backgroundSize"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 82
                echo "                ";
                // line 83
                echo "                ";
                if (($context["attr_paddingTop"] ?? null)) {
                    echo " padding-top: ";
                    echo twig_escape_filter($this->env, ($context["attr_paddingTop"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 84
                echo "                ";
                if (($context["attr_paddingBottom"] ?? null)) {
                    echo " padding-bottom: ";
                    echo twig_escape_filter($this->env, ($context["attr_paddingBottom"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 85
                echo "                ";
                if (($context["attr_paddingLeft"] ?? null)) {
                    echo " padding-left: ";
                    echo twig_escape_filter($this->env, ($context["attr_paddingLeft"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 86
                echo "                ";
                if (($context["attr_paddingRight"] ?? null)) {
                    echo " padding-right: ";
                    echo twig_escape_filter($this->env, ($context["attr_paddingRight"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 87
                echo "                
                ";
                // line 89
                echo "                ";
                if (($context["attr_marginTop"] ?? null)) {
                    echo " margin-top: ";
                    echo twig_escape_filter($this->env, ($context["attr_marginTop"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 90
                echo "                ";
                if (($context["attr_marginBottom"] ?? null)) {
                    echo " margin-bottom: ";
                    echo twig_escape_filter($this->env, ($context["attr_marginBottom"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 91
                echo "                ";
                if (($context["attr_marginLeft"] ?? null)) {
                    echo " margin-left: ";
                    echo twig_escape_filter($this->env, ($context["attr_marginLeft"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 92
                echo "                ";
                if (($context["attr_marginRight"] ?? null)) {
                    echo " margin-right: ";
                    echo twig_escape_filter($this->env, ($context["attr_marginRight"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 93
                echo "
                ";
                // line 95
                echo "                ";
                if (($context["attr_blockHeight"] ?? null)) {
                    echo " min-height: ";
                    echo twig_escape_filter($this->env, ($context["attr_blockHeight"] ?? null), "html", null, true);
                    echo "; ";
                }
                // line 96
                echo "            \">
        ";
            }
            // line 97
            echo "   
        ";
            // line 98
            echo ($context["html"] ?? null);
            echo "
        ";
            // line 99
            if (($context["attr_background"] ?? null)) {
                // line 100
                echo "            </div>
        ";
            }
            // line 101
            echo "    
    </";
            // line 102
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            if ((($context["boxed"] ?? null) == 1)) {
                // line 106
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 108
                echo "        ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
        // line 111
        echo "

";
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 111,  371 => 108,  365 => 106,  363 => 105,  359 => 102,  356 => 101,  352 => 100,  350 => 99,  346 => 98,  343 => 97,  339 => 96,  332 => 95,  329 => 93,  322 => 92,  315 => 91,  308 => 90,  301 => 89,  298 => 87,  291 => 86,  284 => 85,  277 => 84,  270 => 83,  268 => 82,  262 => 81,  253 => 80,  247 => 79,  239 => 78,  234 => 76,  229 => 74,  225 => 73,  220 => 70,  218 => 69,  208 => 68,  205 => 67,  200 => 66,  198 => 65,  195 => 64,  192 => 63,  186 => 61,  183 => 60,  181 => 59,  179 => 58,  175 => 55,  161 => 54,  158 => 53,  140 => 52,  137 => 51,  135 => 50,  128 => 47,  122 => 46,  119 => 45,  114 => 44,  109 => 43,  107 => 42,  103 => 40,  101 => 39,  99 => 38,  97 => 37,  95 => 36,  91 => 33,  89 => 32,  87 => 31,  85 => 30,  83 => 29,  80 => 27,  78 => 26,  76 => 25,  74 => 24,  72 => 23,  68 => 20,  66 => 19,  63 => 17,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  49 => 10,  45 => 8,  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% set tag_type = segment.subtype|default('section') %}
{% set attr_id = segment.attributes.id ?: 'g-' ~ segment.id %}
{% set attr_class = segment.attributes.class %}
{% set attr_extra = segment.attributes.extra|attribute_array %}
{% set boxed = segment.attributes.boxed %}
{% if boxed is not null %}
    {% set boxed = boxed|trim == '' ? gantry.config.page.body.layout.sections : boxed %}
{% endif %}


{% set attr_background = segment.attributes.background ? segment.attributes.background|trim|e : false %}
{% set attr_backgroundOverlay = segment.attributes.backgroundOverlay %}
{% if attr_backgroundOverlay == '' %}
    {% set attr_backgroundOverlay = \"rgba(0, 0, 0, 0)\" %}
{% endif %}

{# block height #}
{% set attr_blockHeight = segment.attributes.blockHeight %}


{# background #}
{% set attr_backgroundAttachment = segment.attributes.backgroundAttachment %}
{% set attr_backgroundRepeat = segment.attributes.backgroundRepeat %}
{% set attr_backgroundPosition = segment.attributes.backgroundPosition %}
{% set attr_backgroundSize = segment.attributes.backgroundSize %}

{# padding #}
{% set attr_paddingTop = segment.attributes.paddingTop %}
{% set attr_paddingBottom = segment.attributes.paddingBottom %}
{% set attr_paddingLeft = segment.attributes.paddingLeft %}
{% set attr_paddingRight = segment.attributes.paddingRight %}


{# margin #}
{% set attr_marginTop = segment.attributes.marginTop %}
{% set attr_marginBottom = segment.attributes.marginBottom %}
{% set attr_marginLeft = segment.attributes.marginLeft %}
{% set attr_marginRight = segment.attributes.marginRight %}


{% if segment.attributes.extra %}
    {% for attributes in segment.attributes.extra %}
        {% for key, value in attributes %}
        {% set attr_extra = attr_extra ~ ' ' ~ key|e ~ '=\"' ~ value|e('html_attr') ~ '\"' %}
        {% endfor %}
    {% endfor %}
{% endif %}

{%- set html %}
    {% if segment.children %}
        {% for segment in segments %}
            {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments':segment.children } %}
        {% endfor %}
    {% endif %}
{% endset %}

{%- if segment.attributes.sticky or html|trim %}
    {%- if boxed is not null and (boxed == 0 or boxed == 2) %}
        {% set html %}
        <div class=\"g-container\">{{ html|raw }}</div>
        {% endset %}
    {% endif %}

    {% set html %}
    {% if boxed == 2 %}{% set attr_class = attr_class ~ ' g-flushed' %}{% endif %}
    {% set attr_class = attr_class ? ' class=\"' ~ attr_class|trim ~ '\"' -%}
    <{{ tag_type }} id=\"{{ attr_id }}\"{{ attr_class|raw }}{{- attr_extra|raw }}>
        {% if attr_background %}
            <div class=\"section-background\" 
                style=\"
                    background-image: 
                    linear-gradient( {{ attr_backgroundOverlay }}, 
                                    {{ attr_backgroundOverlay }} 
                    ), 
                    url({{ url(attr_background) }}); 

                {% if attr_backgroundAttachment %} background-attachment: {{ attr_backgroundAttachment }};  {% endif %}            
                {% if attr_backgroundRepeat %} background-repeat: {{ attr_backgroundRepeat }};  {% endif %}
                {% if attr_backgroundPosition %} background-position: {{ attr_backgroundPosition }};  {% endif %}            
                {% if attr_backgroundSize %} background-size: {{ attr_backgroundSize }}; {% endif %}
                {# padding #}
                {% if attr_paddingTop %} padding-top: {{ attr_paddingTop }}; {% endif %}
                {% if attr_paddingBottom %} padding-bottom: {{ attr_paddingBottom }}; {% endif %}
                {% if attr_paddingLeft %} padding-left: {{ attr_paddingLeft }}; {% endif %}
                {% if attr_paddingRight %} padding-right: {{ attr_paddingRight }}; {% endif %}
                
                {# margin #}
                {% if attr_marginTop %} margin-top: {{ attr_marginTop }}; {% endif %}
                {% if attr_marginBottom %} margin-bottom: {{ attr_marginBottom }}; {% endif %}
                {% if attr_marginLeft %} margin-left: {{ attr_marginLeft }}; {% endif %}
                {% if attr_marginRight %} margin-right: {{ attr_marginRight }}; {% endif %}

                {# height #}
                {% if attr_blockHeight %} min-height: {{ attr_blockHeight }}; {% endif %}
            \">
        {% endif %}   
        {{ html|raw }}
        {% if attr_background %}
            </div>
        {% endif %}    
    </{{ tag_type }}>
    {%- endset %}

    {%- if boxed == 1 %}
        <div class=\"g-container\">{{ html|raw }}</div>
    {% else %}
        {{ html|raw }}
    {% endif %}
{% endif %}


{# SET VARIABLES#}
{# in conjuction with /custom/admin/blueprints/layout/section.yaml #}
{# Original:  /media/gantry5/engines/nucleus/teplates/layout/section #}", "@nucleus/layout/section.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/engine/templates/layout/section.html.twig");
    }
}
