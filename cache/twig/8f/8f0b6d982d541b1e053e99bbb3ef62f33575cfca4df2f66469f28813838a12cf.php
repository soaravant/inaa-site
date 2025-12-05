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

/* @particles/lineSZ.html.twig */
class __TwigTemplate_2f7600394b4eec1f269e1674f0072c4873b96176cd4ec91208c9167cdf71c250 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/lineSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"lineSZ\" style=\" 

        ";
        // line 7
        echo "        ";
        if ($this->getAttribute(($context["particle"] ?? null), "width", [])) {
            echo " 
            width:";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", []), "html", null, true);
            echo ";
        ";
        }
        // line 10
        echo "
        ";
        // line 12
        echo "        ";
        if ($this->getAttribute(($context["particle"] ?? null), "height", [])) {
            echo " 
            height:";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "height", []), "html", null, true);
            echo ";
        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if ($this->getAttribute(($context["particle"] ?? null), "color", [])) {
            echo " 
            background-color:";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "color", []), "html", null, true);
            echo ";
        ";
        }
        // line 20
        echo "
        ";
        // line 22
        echo "        ";
        if (($this->getAttribute(($context["particle"] ?? null), "alignment", []) == "left")) {
            echo " margin-right: auto; 
        ";
        } elseif (($this->getAttribute(        // line 23
($context["particle"] ?? null), "alignment", []) == "center")) {
            echo " margin: auto; 
        ";
        } elseif (($this->getAttribute(        // line 24
($context["particle"] ?? null), "alignment", []) == "right")) {
            echo " margin-left: auto; 
        ";
        }
        // line 26
        echo "    
    \" >
                    ";
        // line 29
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "@particles/lineSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  99 => 26,  94 => 24,  90 => 23,  85 => 22,  82 => 20,  77 => 18,  72 => 17,  69 => 15,  64 => 13,  59 => 12,  56 => 10,  51 => 8,  46 => 7,  42 => 4,  39 => 3,  29 => 1,);
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
    <div class=\"lineSZ\" style=\" 

        {# WIDTH #}
        {% if particle.width %} 
            width:{{ particle.width }};
        {% endif %}

        {# HEIGHT #}
        {% if particle.height %} 
            height:{{ particle.height }};
        {% endif %}

        {# HEIGHT #}
        {% if particle.color %} 
            background-color:{{ particle.color }};
        {% endif %}

        {# ALIGNMENT #}
        {% if particle.alignment == 'left' %} margin-right: auto; 
        {% elseif particle.alignment == 'center' %} margin: auto; 
        {% elseif particle.alignment == 'right' %} margin-left: auto; 
        {% endif %}
    
    \" >
                    {#LINE#}
    </div>


{% endblock %}
", "@particles/lineSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/lineSZ.html.twig");
    }
}
