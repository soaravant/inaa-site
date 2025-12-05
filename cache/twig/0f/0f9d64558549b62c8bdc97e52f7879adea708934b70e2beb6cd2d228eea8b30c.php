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

/* @particles/skillsbarSZ.html.twig */
class __TwigTemplate_c7db9d0d971b3123f46bad9b5ca0212a11017f734d1845082adbf1c284b68f95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascript_footer' => [$this, 'block_javascript_footer'],
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/skillsbarSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 5
            echo "\t\t    ";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
        ";
            // line 15
            echo "
        
            
\t";
        }
    }

    // line 22
    public function block_particle($context, array $blocks = [])
    {
        // line 23
        echo "
    <div class=\"skillbarSZ\" >
        <div class=\"g-grid\">
            
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div>
                        ";
        // line 31
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "maintitle", [])) {
            // line 32
            echo "                            <h2 class=\"sz-particles-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "maintitle", []);
            echo "</h2>
                        ";
        }
        // line 34
        echo "
                        ";
        // line 36
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "subtitle", [])) {
            // line 37
            echo "                            <div>
                                <h3 class=\"sz-particles-subtitle\">";
            // line 38
            echo $this->getAttribute(($context["particle"] ?? null), "subtitle", []);
            echo "</h3>
                            </div>
                        ";
        }
        // line 40
        echo "                          
                        
                        ";
        // line 43
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 44
            echo "                            <p class=\"sz-particles-description\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</p>
                        ";
        }
        // line 46
        echo "                        
                    </div>
                </div>
            </div>
        </div>





        ";
        // line 57
        echo "        <style>
            @keyframes expanddiv { 
                0%  { width:0px; } 
                100%{ width:";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bar"] ?? null), "percentance", []), "html", null, true);
        echo "% ;}  
            }
        </style>


        ";
        // line 67
        echo "                <div class=\"sz-skillbars  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", []), "html", null, true);
        echo "\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "bars", []));
        foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
            // line 69
            echo "                        <span class=\"sz-skillsbar-title\">";
            echo $this->getAttribute($context["bar"], "skillTitle", []);
            echo "</span>
                        <span class=\"sz-skillsbar-percentance\"> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percentance", []), "html", null, true);
            echo "%</span>
                        <div class=\"container\">
                            <div class=\"sz-skill-bar\" 
                                    style=\"width:";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percentance", []), "html", null, true);
            echo "%;
                                        background-color:";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "color", []), "html", null, true);
            echo ";
                                        transition: width 2s linear 1s;\">
                            
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </div>
            ";
        // line 83
        echo "        
    </div>


        <script>
            lazyLoad()

            function lazyLoad() {
                /* Animate the skill bar */
                
                console.log('starting lazy load');

                var lazyItems = [].slice.call(document.querySelectorAll('div.sz-skill-bar'))

                if ('IntersectionObserver' in window) {
                    console.log('IntersectionObserver activated for lazy items (skillbar)');

                    let lazyObserver = new IntersectionObserver(function (entries, observer) {
                        entries.forEach((entry) => {

                            if (entry.isIntersecting) {
                                let lzItem = entry.target;

                                // lzItem.classList.remove('mapHidden');
                                lzItem.classList.add('skills');

                                lazyObserver.unobserve(lzItem);
                                console.log('lzItem unobserved');
                            }
                        })
                    })
                    lazyItems.forEach(item => {
                        lazyObserver.observe(item)
                    })

                } else {
                    // Possibly fall back to a more compatible method here
                    console.log('lazy load script did not succeed');
                }
            } 
        </script>


";
    }

    public function getTemplateName()
    {
        return "@particles/skillsbarSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 83,  169 => 80,  157 => 74,  153 => 73,  147 => 70,  142 => 69,  138 => 68,  133 => 67,  125 => 60,  120 => 57,  108 => 46,  102 => 44,  99 => 43,  95 => 40,  89 => 38,  86 => 37,  83 => 36,  80 => 34,  74 => 32,  71 => 31,  62 => 23,  59 => 22,  51 => 15,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
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

{% block javascript_footer %}
\t{% if particle.enabled %}
\t\t    {{ parent() }}
        {#  
        <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" 
            integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" 
            crossorigin=\"anonymous\">
        </script>

        <script src=\"{{ url('gantry-theme://particles/semanticui/visibility.min.js') }}\"
            type=\"text/javascript\"></script>
        #}

        
            
\t{% endif %}
{% endblock %}


{% block particle %}

    <div class=\"skillbarSZ\" >
        <div class=\"g-grid\">
            
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div>
                        {#HEADLINE#}
                        {% if particle.maintitle %}
                            <h2 class=\"sz-particles-title\">{{ particle.maintitle|raw }}</h2>
                        {% endif %}

                        {#SUBTITLE#}
                        {% if particle.subtitle %}
                            <div>
                                <h3 class=\"sz-particles-subtitle\">{{ particle.subtitle|raw }}</h3>
                            </div>
                        {% endif %}                          
                        
                        {#DESCRIPTION#}
                        {% if particle.description %}
                            <p class=\"sz-particles-description\">{{ particle.description|raw }}</p>
                        {% endif %}
                        
                    </div>
                </div>
            </div>
        </div>





        {# it is activated by the class .skills #}
        <style>
            @keyframes expanddiv { 
                0%  { width:0px; } 
                100%{ width:{{ bar.percentance }}% ;}  
            }
        </style>


        {# <div class=\"g-block\">
            <div class=\"g-content\"> #}
                <div class=\"sz-skillbars  {{ particle.style }}\">
                    {% for bar in particle.bars %}
                        <span class=\"sz-skillsbar-title\">{{ bar.skillTitle|raw }}</span>
                        <span class=\"sz-skillsbar-percentance\"> {{ bar.percentance }}%</span>
                        <div class=\"container\">
                            <div class=\"sz-skill-bar\" 
                                    style=\"width:{{ bar.percentance }}%;
                                        background-color:{{ bar.color }};
                                        transition: width 2s linear 1s;\">
                            
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {# </div>
        </div>         #}
        
    </div>


        <script>
            lazyLoad()

            function lazyLoad() {
                /* Animate the skill bar */
                
                console.log('starting lazy load');

                var lazyItems = [].slice.call(document.querySelectorAll('div.sz-skill-bar'))

                if ('IntersectionObserver' in window) {
                    console.log('IntersectionObserver activated for lazy items (skillbar)');

                    let lazyObserver = new IntersectionObserver(function (entries, observer) {
                        entries.forEach((entry) => {

                            if (entry.isIntersecting) {
                                let lzItem = entry.target;

                                // lzItem.classList.remove('mapHidden');
                                lzItem.classList.add('skills');

                                lazyObserver.unobserve(lzItem);
                                console.log('lzItem unobserved');
                            }
                        })
                    })
                    lazyItems.forEach(item => {
                        lazyObserver.observe(item)
                    })

                } else {
                    // Possibly fall back to a more compatible method here
                    console.log('lazy load script did not succeed');
                }
            } 
        </script>


{% endblock %}
", "@particles/skillsbarSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/skillsbarSZ.html.twig");
    }
}
