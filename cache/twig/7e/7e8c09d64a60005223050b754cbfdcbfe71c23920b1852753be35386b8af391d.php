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

/* @particles/customcontentSZ.html.twig */
class __TwigTemplate_3bb35c26666cd465942bfe82eefae887dde443e70cf1c526dc2c21112a1fd1d5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/customcontentSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"sz-customcontentSZ\" >
        <div class=\"g-grid\" >
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div 
                        ";
        // line 10
        echo "                        ";
        if (($this->getAttribute(($context["particle"] ?? null), "height", []) || $this->getAttribute(($context["particle"] ?? null), "textalign", []))) {
            echo "     
                            style='
                                ";
            // line 12
            if ($this->getAttribute(($context["particle"] ?? null), "height", [])) {
                // line 13
                echo "                                    min-height: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "height", []), "html", null, true);
                echo ";
                                ";
            }
            // line 15
            echo "                                
                                ";
            // line 16
            if ($this->getAttribute(($context["particle"] ?? null), "textalign", [])) {
                // line 17
                echo "                                    text-align: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "textalign", []), "html", null, true);
                echo ";
                                ";
            }
            // line 19
            echo "                            '
                        ";
        }
        // line 21
        echo "                            >
                        ";
        // line 23
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 24
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://images/default.jpg"), "html", null, true);
            echo "\"
                                data-src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" 
                                alt=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "maintitle", []));
            echo "\" 
                                class=\"sz-lazy\"
                                />
                        ";
        }
        // line 30
        echo "                        
                        ";
        // line 32
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "mainicon", [])) {
            echo "  
                            <div>
                                <i class=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mainicon", []), "html", null, true);
            echo " sz-customcontent-icons\" 
                                    style=\"display:block; 
                                    ";
            // line 36
            if ($this->getAttribute(($context["particle"] ?? null), "textalign", [])) {
                echo " 
                                        text-align: ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "textalign", []), "html", null, true);
                echo "
                                    ";
            }
            // line 39
            echo "                                \">
                                </i>
                            </div>
                        ";
        }
        // line 43
        echo "                        
                        ";
        // line 45
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "maintitle", [])) {
            // line 46
            echo "                            <div>
                                <div class=\"sz-particles-title\" 
                                    style=\"
                                        ";
            // line 49
            if ($this->getAttribute(($context["particle"] ?? null), "textalign", [])) {
                echo " 
                                            text-align: ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "textalign", []), "html", null, true);
                echo "
                                        ";
            }
            // line 52
            echo "                                    \"
                                >
                                    ";
            // line 54
            echo $this->getAttribute(($context["particle"] ?? null), "maintitle", []);
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 58
        echo "
                        ";
        // line 60
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "subtitle", [])) {
            // line 61
            echo "                            <div>
                                <div class=\"sz-particles-subtitle\"
                                    style=\"
                                        ";
            // line 64
            if ($this->getAttribute(($context["particle"] ?? null), "textalign", [])) {
                echo " 
                                            text-align: ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "textalign", []), "html", null, true);
                echo "
                                        ";
            }
            // line 67
            echo "                                    \"
                                >
                                ";
            // line 69
            echo $this->getAttribute(($context["particle"] ?? null), "subtitle", []);
            echo "</div>
                            </div>
                        ";
        }
        // line 71
        echo "                        
                        
                        ";
        // line 74
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 75
            echo "                            <p class=\"sz-particles-description\"
                                style=\"
                                    ";
            // line 77
            if ($this->getAttribute(($context["particle"] ?? null), "textalign", [])) {
                echo " 
                                        text-align: ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "textalign", []), "html", null, true);
                echo "
                                    ";
            }
            // line 80
            echo "                                \"
                            >
                                ";
            // line 82
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "
                            </p>
                        ";
        }
        // line 85
        echo "                        
                        ";
        // line 87
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
            // line 88
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linkstyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linkstyle", []), "")) : ("")), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
            echo "</a>
                        ";
        }
        // line 90
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext2", [])) {
            // line 91
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link2", []));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linkstyle2", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linkstyle2", []), "")) : ("")), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext2", []));
            echo "</a>
                        ";
        }
        // line 93
        echo "                        ";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext3", [])) {
            // line 94
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link3", []));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linkstyle3", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linkstyle3", []), "")) : ("")), "html", null, true);
            echo "\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext3", []));
            echo "</a>
                        ";
        }
        // line 95
        echo "                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"g-grid sz-customcontent-subitem\">
            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subitems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
            // line 102
            echo "                <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subitem"], "class", []), "html", null, true);
            echo "\">
                    <div class=\"g-content\">
                        <i class=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["subitem"], "icon", []), "html", null, true);
            echo " subitem-icons\"></i>
                        <h2 class=\"sz-subitem-title\">";
            // line 105
            echo $this->getAttribute($context["subitem"], "title", []);
            echo "</h2>
                        <h3 class=\"sz-subitem-subtitle\">";
            // line 106
            echo $this->getAttribute($context["subitem"], "subtitle", []);
            echo "</h3>
                        <p>";
            // line 107
            echo $this->getAttribute($context["subitem"], "description", []);
            echo "</p>
                        
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </div>
    </div>


    <script>
        lazyLoadImages()
        function lazyLoadImages() {
            console.log('starting custom content lazy load');

            // arrays are iterable, so forEach can be used, but not Objects
            var lazyImages = [].slice.call(document.querySelectorAll('img[data-src].sz-lazy'));

            if ('IntersectionObserver' in window) {
                console.log('IntersectionObserver activated for custom content lazy images');

                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            console.log('IntersectionObserver changed src of lazy img: ' + lazyImage.dataset.src);

                            lazyImage.classList.remove('sz-lazy');
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function (lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Possibly fall back to a more compatible method here
                console.log('lazy load for images did not succeed');
            }
        }

    </script>
    
";
    }

    public function getTemplateName()
    {
        return "@particles/customcontentSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 112,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  274 => 102,  270 => 101,  262 => 95,  252 => 94,  249 => 93,  239 => 91,  236 => 90,  226 => 88,  223 => 87,  220 => 85,  214 => 82,  210 => 80,  205 => 78,  201 => 77,  197 => 75,  194 => 74,  190 => 71,  184 => 69,  180 => 67,  175 => 65,  171 => 64,  166 => 61,  163 => 60,  160 => 58,  153 => 54,  149 => 52,  144 => 50,  140 => 49,  135 => 46,  132 => 45,  129 => 43,  123 => 39,  118 => 37,  114 => 36,  109 => 34,  103 => 32,  100 => 30,  93 => 26,  89 => 25,  84 => 24,  81 => 23,  78 => 21,  74 => 19,  68 => 17,  66 => 16,  63 => 15,  57 => 13,  55 => 12,  49 => 10,  42 => 4,  39 => 3,  29 => 1,);
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
    <div class=\"sz-customcontentSZ\" >
        <div class=\"g-grid\" >
            <div class=\"g-block\">
                <div class=\"g-content\">
                    <div 
                        {#HEIGHT#}
                        {% if (particle.height or particle.textalign) %}     
                            style='
                                {% if particle.height %}
                                    min-height: {{ particle.height }};
                                {% endif %}
                                
                                {% if particle.textalign %}
                                    text-align: {{ particle.textalign }};
                                {% endif %}
                            '
                        {% endif %}
                            >
                        {#IMAGE#}
                        {% if particle.image %}
                            <img src=\"{{ url('gantry-theme://images/default.jpg') }}\"
                                data-src=\"{{ url(particle.image) }}\" 
                                alt=\"{{ particle.maintitle|e }}\" 
                                class=\"sz-lazy\"
                                />
                        {% endif %}
                        
                        {#ICON#}
                        {% if particle.mainicon %}  
                            <div>
                                <i class=\"{{ particle.mainicon }} sz-customcontent-icons\" 
                                    style=\"display:block; 
                                    {% if particle.textalign %} 
                                        text-align: {{ particle.textalign }}
                                    {% endif %}
                                \">
                                </i>
                            </div>
                        {% endif %}
                        
                        {#TITLE#}
                        {% if particle.maintitle %}
                            <div>
                                <div class=\"sz-particles-title\" 
                                    style=\"
                                        {% if particle.textalign %} 
                                            text-align: {{ particle.textalign }}
                                        {% endif %}
                                    \"
                                >
                                    {{ particle.maintitle|raw }}
                                </div>
                            </div>
                        {% endif %}

                        {#SUBTITLE#}
                        {% if particle.subtitle %}
                            <div>
                                <div class=\"sz-particles-subtitle\"
                                    style=\"
                                        {% if particle.textalign %} 
                                            text-align: {{ particle.textalign }}
                                        {% endif %}
                                    \"
                                >
                                {{ particle.subtitle|raw }}</div>
                            </div>
                        {% endif %}                        
                        
                        {#DESCRIPTION#}
                        {% if particle.description %}
                            <p class=\"sz-particles-description\"
                                style=\"
                                    {% if particle.textalign %} 
                                        text-align: {{ particle.textalign }}
                                    {% endif %}
                                \"
                            >
                                {{ particle.description|raw }}
                            </p>
                        {% endif %}
                        
                        {#BUTTONS-LINKS#}
                        {% if particle.linktext %}
                            <a href=\"{{ particle.link|e }}\" class=\"button {{ particle.linkstyle|default('') }}\" role=\"button\">{{ particle.linktext|e }}</a>
                        {% endif %}
                        {% if particle.linktext2 %}
                            <a href=\"{{ particle.link2|e }}\" class=\"button {{ particle.linkstyle2|default('') }}\" role=\"button\">{{ particle.linktext2|e }}</a>
                        {% endif %}
                        {% if particle.linktext3 %}
                            <a href=\"{{ particle.link3|e }}\" class=\"button {{ particle.linkstyle3|default('') }}\" role=\"button\">{{ particle.linktext3|e }}</a>
                        {% endif %}                        
                    </div>
                </div>
            </div>
        </div>
        <div class=\"g-grid sz-customcontent-subitem\">
            {% for subitem in particle.subitems %}
                <div class=\"g-block {{ subitem.class }}\">
                    <div class=\"g-content\">
                        <i class=\"{{ subitem.icon }} subitem-icons\"></i>
                        <h2 class=\"sz-subitem-title\">{{ subitem.title|raw }}</h2>
                        <h3 class=\"sz-subitem-subtitle\">{{ subitem.subtitle|raw }}</h3>
                        <p>{{ subitem.description|raw }}</p>
                        
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>


    <script>
        lazyLoadImages()
        function lazyLoadImages() {
            console.log('starting custom content lazy load');

            // arrays are iterable, so forEach can be used, but not Objects
            var lazyImages = [].slice.call(document.querySelectorAll('img[data-src].sz-lazy'));

            if ('IntersectionObserver' in window) {
                console.log('IntersectionObserver activated for custom content lazy images');

                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            console.log('IntersectionObserver changed src of lazy img: ' + lazyImage.dataset.src);

                            lazyImage.classList.remove('sz-lazy');
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function (lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Possibly fall back to a more compatible method here
                console.log('lazy load for images did not succeed');
            }
        }

    </script>
    
{% endblock %}", "@particles/customcontentSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/customcontentSZ.html.twig");
    }
}
