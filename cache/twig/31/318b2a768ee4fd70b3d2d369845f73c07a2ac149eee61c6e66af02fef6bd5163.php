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

/* @particles/headlineSZ.html.twig */
class __TwigTemplate_3e189b18ac29f3b5868816141b3087c02667504fe9d827920cacd9c74f20262a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/headlineSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"headlineSZ\" >
        <div class=\"g-grid\">
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div>
                        ";
        // line 10
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "maintitle", [])) {
            // line 11
            echo "                            ";
            // line 12
            echo "                            
                            ";
            // line 13
            if (($this->getAttribute(($context["particle"] ?? null), "tag", []) == "h1")) {
                echo " <h1 
                            ";
            } elseif (($this->getAttribute(            // line 14
($context["particle"] ?? null), "tag", []) == "h2")) {
                echo " <h2 
                            ";
            } elseif (($this->getAttribute(            // line 15
($context["particle"] ?? null), "tag", []) == "h3")) {
                echo " <h3 
                            ";
            } elseif (($this->getAttribute(            // line 16
($context["particle"] ?? null), "tag", []) == "h4")) {
                echo " <h4 
                            ";
            } elseif (($this->getAttribute(            // line 17
($context["particle"] ?? null), "tag", []) == "h5")) {
                echo " <h5 
                            ";
            } elseif (($this->getAttribute(            // line 18
($context["particle"] ?? null), "tag", []) == "h6")) {
                echo " <h6 
                            ";
            }
            // line 20
            echo "
                            class=\"sz-headline-main\"
                            style=\"
                                ";
            // line 23
            if ($this->getAttribute(($context["particle"] ?? null), "maintitlesize", [])) {
                echo " 
                                    font-size: ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "maintitlesize", []), "html", null, true);
                echo ";
                                ";
            }
            // line 26
            echo "                                ";
            if ($this->getAttribute(($context["particle"] ?? null), "maintitlecolor", [])) {
                echo " 
                                    color: ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "maintitlecolor", []), "html", null, true);
                echo ";
                                ";
            }
            // line 28
            echo "    

                                ";
            // line 31
            echo "                                ";
            if (($this->getAttribute(($context["particle"] ?? null), "maintitlealignment", []) == "left")) {
                echo " text-align: left; 
                                ";
            } elseif (($this->getAttribute(            // line 32
($context["particle"] ?? null), "maintitlealignment", []) == "center")) {
                echo " text-align: center; 
                                ";
            } elseif (($this->getAttribute(            // line 33
($context["particle"] ?? null), "maintitlealignment", []) == "right")) {
                echo " text-align: right; 
                                ";
            }
            // line 34
            echo "                                                            
                            \">

                                ";
            // line 37
            echo $this->getAttribute(($context["particle"] ?? null), "maintitle", []);
            echo "
                            
                                ";
            // line 39
            if (($this->getAttribute(($context["particle"] ?? null), "tag", []) == "h1")) {
                echo " </h1> 
                                ";
            } elseif (($this->getAttribute(            // line 40
($context["particle"] ?? null), "tag", []) == "h2")) {
                echo " </h2> 
                                ";
            } elseif (($this->getAttribute(            // line 41
($context["particle"] ?? null), "tag", []) == "h3")) {
                echo " </h3> 
                                ";
            } elseif (($this->getAttribute(            // line 42
($context["particle"] ?? null), "tag", []) == "h4")) {
                echo " </h4> 
                                ";
            } elseif (($this->getAttribute(            // line 43
($context["particle"] ?? null), "tag", []) == "h5")) {
                echo " </h5> 
                                ";
            } elseif (($this->getAttribute(            // line 44
($context["particle"] ?? null), "tag", []) == "h6")) {
                echo " </h6> 
                                ";
            }
            // line 46
            echo "                        ";
        }
        // line 47
        echo "
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@particles/headlineSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  159 => 46,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  129 => 37,  124 => 34,  119 => 33,  115 => 32,  110 => 31,  106 => 28,  101 => 27,  96 => 26,  91 => 24,  87 => 23,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  42 => 4,  39 => 3,  29 => 1,);
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
    <div class=\"headlineSZ\" >
        <div class=\"g-grid\">
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div>
                        {#HEADLINE#}
                        {% if particle.maintitle %}
                            {# TAG #}
                            
                            {% if particle.tag == 'h1' %} <h1 
                            {% elseif particle.tag == 'h2' %} <h2 
                            {% elseif particle.tag == 'h3' %} <h3 
                            {% elseif particle.tag == 'h4' %} <h4 
                            {% elseif particle.tag == 'h5' %} <h5 
                            {% elseif particle.tag == 'h6' %} <h6 
                            {% endif %}

                            class=\"sz-headline-main\"
                            style=\"
                                {% if particle.maintitlesize %} 
                                    font-size: {{ particle.maintitlesize }};
                                {% endif %}
                                {% if particle.maintitlecolor %} 
                                    color: {{ particle.maintitlecolor }};
                                {% endif %}    

                                {# ALIGNMENT #}
                                {% if particle.maintitlealignment == 'left' %} text-align: left; 
                                {% elseif particle.maintitlealignment == 'center' %} text-align: center; 
                                {% elseif particle.maintitlealignment == 'right' %} text-align: right; 
                                {% endif %}                                                            
                            \">

                                {{ particle.maintitle|raw }}
                            
                                {% if particle.tag == 'h1' %} </h1> 
                                {% elseif particle.tag == 'h2' %} </h2> 
                                {% elseif particle.tag == 'h3' %} </h3> 
                                {% elseif particle.tag == 'h4' %} </h4> 
                                {% elseif particle.tag == 'h5' %} </h5> 
                                {% elseif particle.tag == 'h6' %} </h6> 
                                {% endif %}
                        {% endif %}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
", "@particles/headlineSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/headlineSZ.html.twig");
    }
}
