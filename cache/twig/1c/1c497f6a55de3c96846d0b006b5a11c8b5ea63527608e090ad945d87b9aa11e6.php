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

/* @particles/imageSZ.html.twig */
class __TwigTemplate_c210a1f4b59adcf7be9b8d662c42be0223ca0d254454b789e2ad99855fb550ae extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/imageSZ.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 5
        echo "    ";
        $context["image"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", []));
        // line 6
        echo "    
    ";
        // line 7
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) == true)) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")), "html", null, true);
            echo "\" 
                    title=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\" ";
            echo ((array_key_exists("rel", $context)) ? (_twig_default_filter(($context["rel"] ?? null), "")) : (""));
            echo " >
    ";
        } else {
            // line 11
            echo "        <div>
    ";
        }
        // line 13
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "svg", []))) {
            // line 14
            echo "            ";
            echo $this->getAttribute(($context["particle"] ?? null), "svg", []);
            echo "
        ";
        } elseif (        // line 15
($context["image"] ?? null)) {
            // line 16
            echo "            <img 
                src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://images/default.jpg"), "html", null, true);
            echo "\"
                data-src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" 
                class=\"sz-lazy\"
                alt=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\" 
                style=\"
                    ";
            // line 23
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "paddingTop", [])) {
                echo " padding-top: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "paddingTop", []), "html", null, true);
                echo "; ";
            }
            // line 24
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "paddingBottom", [])) {
                echo " padding-bottom: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "paddingBottom", []), "html", null, true);
                echo "; ";
            }
            // line 25
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "paddingLeft", [])) {
                echo " padding-left: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "paddingLeft", []), "html", null, true);
                echo "; ";
            }
            // line 26
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "paddingRight", [])) {
                echo " padding-right: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "paddingRight", []), "html", null, true);
                echo "; ";
            }
            // line 27
            echo "                    ";
            // line 28
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "marginTop", [])) {
                echo " margin-top: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "marginTop", []), "html", null, true);
                echo "; ";
            }
            // line 29
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "marginBottom", [])) {
                echo " margin-bottom: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "marginBottom", []), "html", null, true);
                echo "; ";
            }
            // line 30
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "marginLeft", [])) {
                echo " margin-left: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "marginLeft", []), "html", null, true);
                echo "; ";
            }
            // line 31
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "marginRight", [])) {
                echo " margin-right: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "marginRight", []), "html", null, true);
                echo "; ";
            }
            // line 32
            echo "
                \"
            />
        ";
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "text", []), "")) : ("")), "html", null, true);
            echo "
        ";
        }
        // line 38
        echo "    ";
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) == true)) {
            // line 39
            echo "        </a>
    ";
        } else {
            // line 41
            echo "        </div>
    ";
        }
        // line 43
        echo "
    <script>
        lazyLoadImages()
        function lazyLoadImages() {
            console.log('starting lazy load');

            // arrays are iterable, so forEach can be used, but not Objects
            var lazyImages = [].slice.call(document.querySelectorAll('img[data-src].sz-lazy'));

            if ('IntersectionObserver' in window) {
                console.log('IntersectionObserver activated for lazy images');

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
                var images = document.getElementsByTagName('img');
                for(var i = 0; i < images.length ; i++) {
                    images[i].src = images[i].dataset.src;
                    console.log(' images src fell back to original: ' + images[i].dataset.src);
                };
                


            }
        }

    </script>


";
    }

    public function getTemplateName()
    {
        return "@particles/imageSZ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  175 => 41,  171 => 39,  168 => 38,  162 => 36,  156 => 32,  149 => 31,  142 => 30,  135 => 29,  128 => 28,  126 => 27,  119 => 26,  112 => 25,  105 => 24,  98 => 23,  93 => 20,  88 => 18,  84 => 17,  81 => 16,  79 => 15,  74 => 14,  71 => 13,  67 => 11,  60 => 9,  53 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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
    {% set url = url(particle.url)|default(gantry.siteUrl()) %}
    {% set image = url(particle.image) %}
    
    {% if particle.link == true %}
        <a href=\"{{ url }}\" target=\"{{ particle.target|default('_self') }}\" 
                    title=\"{{ particle.text }}\" {{ rel|default('')|raw }} >
    {% else %}
        <div>
    {% endif %}
        {% if particle.svg is not empty %}
            {{ particle.svg|raw }}
        {% elseif image %}
            <img 
                src=\"{{ url('gantry-theme://images/default.jpg') }}\"
                data-src=\"{{ url(particle.image) }}\" 
                class=\"sz-lazy\"
                alt=\"{{ particle.text }}\" 
                style=\"
                    {# padding #}
                    {% if particle.paddingTop %} padding-top: {{ particle.paddingTop }}; {% endif %}
                    {% if particle.paddingBottom %} padding-bottom: {{ particle.paddingBottom }}; {% endif %}
                    {% if particle.paddingLeft %} padding-left: {{ particle.paddingLeft }}; {% endif %}
                    {% if particle.paddingRight %} padding-right: {{ particle.paddingRight }}; {% endif %}
                    {# margin #}
                    {% if particle.marginTop %} margin-top: {{ particle.marginTop }}; {% endif %}
                    {% if particle.marginBottom %} margin-bottom: {{ particle.marginBottom }}; {% endif %}
                    {% if particle.marginLeft %} margin-left: {{ particle.marginLeft }}; {% endif %}
                    {% if particle.marginRight %} margin-right: {{ particle.marginRight }}; {% endif %}

                \"
            />
        {% else %}
            {{ particle.text|default('') }}
        {% endif %}
    {% if particle.link == true %}
        </a>
    {% else %}
        </div>
    {% endif %}

    <script>
        lazyLoadImages()
        function lazyLoadImages() {
            console.log('starting lazy load');

            // arrays are iterable, so forEach can be used, but not Objects
            var lazyImages = [].slice.call(document.querySelectorAll('img[data-src].sz-lazy'));

            if ('IntersectionObserver' in window) {
                console.log('IntersectionObserver activated for lazy images');

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
                var images = document.getElementsByTagName('img');
                for(var i = 0; i < images.length ; i++) {
                    images[i].src = images[i].dataset.src;
                    console.log(' images src fell back to original: ' + images[i].dataset.src);
                };
                


            }
        }

    </script>


{% endblock %}
", "@particles/imageSZ.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/imageSZ.html.twig");
    }
}
