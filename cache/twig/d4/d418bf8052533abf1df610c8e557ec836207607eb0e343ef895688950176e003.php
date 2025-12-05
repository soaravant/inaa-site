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

/* @particles/contactSZ.html.twig */
class __TwigTemplate_a0a6cf3671668e0eca5420ba20a8a4499df8e79029a4866893fee3525ffd9e6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contactSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"sz-contact\" >
        <div class=\"g-grid 
            ";
        // line 7
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "style", []) == "vertical")) {
            echo " sz-vertical
            ";
        } elseif (($this->getAttribute(        // line 8
($context["particle"] ?? null), "style", []) == "horizontal")) {
            echo " sz-horizontal
            ";
        }
        // line 10
        echo "        \">

            ";
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "maintitle", [])) {
            // line 14
            echo "                    <h3>
                        ";
            // line 15
            echo $this->getAttribute(($context["particle"] ?? null), "maintitle", []);
            echo "
                    </h3>
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "contactinfo", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variations", []), "html", null, true);
            echo "\">
                    <div class=\"g-content\">
                        ";
            // line 23
            echo "                        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
            echo " contact-icons\"></i>

                        ";
            // line 26
            echo "                        <span class=\"contact-label\">";
            echo $this->getAttribute($context["item"], "label", []);
            echo "</span>

                        ";
            // line 29
            echo "                        ";
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 30
                echo "                            <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "linktarget", []), "_self")) : ("_self")));
                echo "\" 
                               class=\"item-link\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\">
                        ";
            }
            // line 33
            echo "
                        ";
            // line 35
            echo "                        <span class=\"item-link-text\">";
            echo $this->getAttribute($context["item"], "text", []);
            echo "</span>
                        
                        ";
            // line 38
            echo "                        ";
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 39
                echo "                            </a>
                        ";
            }
            // line 41
            echo "                        
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "@particles/contactSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  126 => 41,  122 => 39,  119 => 38,  113 => 35,  110 => 33,  105 => 31,  100 => 30,  97 => 29,  91 => 26,  85 => 23,  79 => 20,  75 => 19,  72 => 18,  66 => 15,  63 => 14,  60 => 13,  56 => 10,  51 => 8,  46 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}
    <div class=\"sz-contact\" >
        <div class=\"g-grid 
            {# styles #}
            {% if particle.style == 'vertical' %} sz-vertical
            {% elseif particle.style == 'horizontal' %} sz-horizontal
            {% endif %}
        \">

            {# PARTICLE TITLE#}
            {% if particle.maintitle %}
                    <h3>
                        {{ particle.maintitle|raw }}
                    </h3>
            {% endif %}

            {% for item in particle.contactinfo %}
                <div class=\"g-block {{ item.variations }}\">
                    <div class=\"g-content\">
                        {# icon #}
                        <i class=\"{{ item.icon }} contact-icons\"></i>

                        {# label #}
                        <span class=\"contact-label\">{{ item.label|raw }}</span>

                        {# link start #}
                        {% if item.link %}
                            <a target=\"{{ item.linktarget|default('_self')|e }}\" 
                               class=\"item-link\" href=\"{{ item.link|e }}\">
                        {% endif %}

                        {# info #}
                        <span class=\"item-link-text\">{{ item.text|raw }}</span>
                        
                        {# link end #}
                        {% if item.link %}
                            </a>
                        {% endif %}
                        
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    
{% endblock %}", "@particles/contactSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/contactSZ.html.twig");
    }
}
