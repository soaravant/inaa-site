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

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_2b44d2418e0c1f097aa46ead1606d3641c889115263dde6de5305c020263d370 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " custom-carousel-container\">
        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 7
        echo "
        <div id=\"g-custom-carousel-";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"custom-carousel-wrapper\">
            <button class=\"custom-carousel-nav prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></button>
            <div class=\"custom-carousel-track\">
                ";
        // line 12
        echo "            </div>
            <button class=\"custom-carousel-nav next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></button>
        </div>
    </div>

";
    }

    // line 19
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 20
        echo "    <script type=\"text/javascript\">
        (function() {
            var carouselId = 'g-custom-carousel-";
        // line 22
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "';
            var wrapper = document.getElementById(carouselId);
            if (!wrapper) return;

            var track = wrapper.querySelector('.custom-carousel-track');
            var prevBtn = wrapper.querySelector('.prev');
            var nextBtn = wrapper.querySelector('.next');

            // Collect items data
            var items = [
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                    ";
            if ( !$this->getAttribute($context["item"], "disable", [])) {
                // line 34
                echo "                    {
                        image: \"";
                // line 35
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "js"), "html", null, true);
                echo "\",
                        title: \"";
                // line 36
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "js"), "html", null, true);
                echo "\",
                        desc: \"";
                // line 37
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", []), "js"), "html", null, true);
                echo "\",
                        link: \"";
                // line 38
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []), "js"), "html", null, true);
                echo "\",
                        linktext: \"";
                // line 39
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "linktext", []), "js"), "html", null, true);
                echo "\"
                    },
                    ";
            }
            // line 42
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ];

            if (items.length === 0) return;

            // Configuration
            var visibleItems = 4;
            var totalItems = items.length;
            var itemWidthPercent = 100 / visibleItems; // 25%

            // We need clones at start and end for infinite loop.
            // Clones at start: last 'visibleItems' items.
            // Clones at end: first 'visibleItems' items.
            // Actually, to be safe and smooth, let's clone 'visibleItems' amount.
            
            var clonesBefore = items.slice(-visibleItems);
            var clonesAfter = items.slice(0, visibleItems);
            
            var allItems = clonesBefore.concat(items).concat(clonesAfter);
            
            // Render all items
            allItems.forEach(function(data) {
                var node = createItemNode(data);
                node.style.flex = '0 0 ' + itemWidthPercent + '%';
                node.style.width = itemWidthPercent + '%'; // Fallback
                track.appendChild(node);
            });

            function createItemNode(data) {
                var itemDiv = document.createElement('div');
                itemDiv.className = 'custom-carousel-item';
                
                var imgDiv = document.createElement('div');
                imgDiv.className = 'custom-carousel-img';
                imgDiv.style.backgroundImage = 'url(' + data.image + ')';
                
                var contentDiv = document.createElement('div');
                contentDiv.className = 'custom-carousel-content';
                
                if (data.title) {
                    var title = document.createElement('h3');
                    title.textContent = data.title;
                    contentDiv.appendChild(title);
                }
                
                itemDiv.appendChild(imgDiv);
                itemDiv.appendChild(contentDiv);
                
                return itemDiv;
            }

            // State
            // Index 0 corresponds to the first REAL item.
            // The track has 'visibleItems' clones at the start.
            // So the initial offset index is 'visibleItems'.
            var currentIndex = 0; 
            var offsetIndex = visibleItems; 
            var isAnimating = false;

            function updateTransform(enableTransition) {
                if (enableTransition) {
                    track.style.transition = 'transform 0.5s ease';
                } else {
                    track.style.transition = 'none';
                }
                
                var percentTranslate = -(offsetIndex * itemWidthPercent);
                track.style.transform = 'translateX(' + percentTranslate + '%)';
            }

            // Initial Position
            updateTransform(false);

            function moveNext() {
                if (isAnimating) return;
                isAnimating = true;
                
                offsetIndex++;
                updateTransform(true);
                
                setTimeout(function() {
                    // Check if we reached the end clones
                    // The real items end at index: visibleItems + totalItems - 1
                    // The first clone after real items is at: visibleItems + totalItems
                    if (offsetIndex >= visibleItems + totalItems) {
                        // Jump back to start of real items
                        offsetIndex = visibleItems;
                        updateTransform(false);
                    }
                    isAnimating = false;
                }, 500);
            }

            function movePrev() {
                if (isAnimating) return;
                isAnimating = true;
                
                offsetIndex--;
                updateTransform(true);
                
                setTimeout(function() {
                    // Check if we reached the start clones
                    // The real items start at index: visibleItems
                    // The last clone before real items is at: visibleItems - 1
                    if (offsetIndex < visibleItems) {
                        // Jump to end of real items
                        // The last real item is at: visibleItems + totalItems - 1
                        // We want to show the set ending at the last real item.
                        // Actually, if we are at index 'visibleItems - 1' (which is the last item of the 'before' clones),
                        // it corresponds to the last item of the real list.
                        // So we should jump to: visibleItems + totalItems - 1
                        
                        // Wait, if offsetIndex is the START of the view.
                        // If offsetIndex becomes visibleItems - 1.
                        // That means we are viewing [CloneLast, Item1, Item2, Item3].
                        // We want to jump to [ItemLast, Item1, Item2, Item3] ?? No.
                        // We want to jump to the position where ItemLast is the first visible item?
                        // No, 'clonesBefore' are the LAST items.
                        // So clonesBefore[0] is items[totalItems - visibleItems].
                        // clonesBefore[last] is items[totalItems - 1].
                        
                        // If offsetIndex drops below visibleItems (e.g. visibleItems - 1),
                        // We are looking at the last clone.
                        // We should jump to the corresponding real item position.
                        // The real item corresponding to (visibleItems - 1) is (visibleItems + totalItems - 1).
                        
                        offsetIndex = offsetIndex + totalItems;
                        updateTransform(false);
                    }
                    isAnimating = false;
                }, 500);
            }

            nextBtn.addEventListener('click', moveNext);
            prevBtn.addEventListener('click', movePrev);

        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  126 => 42,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  98 => 33,  94 => 32,  81 => 22,  77 => 20,  74 => 19,  65 => 12,  59 => 8,  56 => 7,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
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

    <div class=\"{{ particle.class|e }} custom-carousel-container\">
        {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

        <div id=\"g-custom-carousel-{{ id }}\" class=\"custom-carousel-wrapper\">
            <button class=\"custom-carousel-nav prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></button>
            <div class=\"custom-carousel-track\">
                {# Items will be injected here by JS #}
            </div>
            <button class=\"custom-carousel-nav next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></button>
        </div>
    </div>

{% endblock %}

{% block javascript_footer %}
    <script type=\"text/javascript\">
        (function() {
            var carouselId = 'g-custom-carousel-{{ id }}';
            var wrapper = document.getElementById(carouselId);
            if (!wrapper) return;

            var track = wrapper.querySelector('.custom-carousel-track');
            var prevBtn = wrapper.querySelector('.prev');
            var nextBtn = wrapper.querySelector('.next');

            // Collect items data
            var items = [
                {% for item in particle.items %}
                    {% if not item.disable %}
                    {
                        image: \"{{ url(item.image)|e('js') }}\",
                        title: \"{{ item.title|e('js') }}\",
                        desc: \"{{ item.desc|e('js') }}\",
                        link: \"{{ item.link|e('js') }}\",
                        linktext: \"{{ item.linktext|e('js') }}\"
                    },
                    {% endif %}
                {% endfor %}
            ];

            if (items.length === 0) return;

            // Configuration
            var visibleItems = 4;
            var totalItems = items.length;
            var itemWidthPercent = 100 / visibleItems; // 25%

            // We need clones at start and end for infinite loop.
            // Clones at start: last 'visibleItems' items.
            // Clones at end: first 'visibleItems' items.
            // Actually, to be safe and smooth, let's clone 'visibleItems' amount.
            
            var clonesBefore = items.slice(-visibleItems);
            var clonesAfter = items.slice(0, visibleItems);
            
            var allItems = clonesBefore.concat(items).concat(clonesAfter);
            
            // Render all items
            allItems.forEach(function(data) {
                var node = createItemNode(data);
                node.style.flex = '0 0 ' + itemWidthPercent + '%';
                node.style.width = itemWidthPercent + '%'; // Fallback
                track.appendChild(node);
            });

            function createItemNode(data) {
                var itemDiv = document.createElement('div');
                itemDiv.className = 'custom-carousel-item';
                
                var imgDiv = document.createElement('div');
                imgDiv.className = 'custom-carousel-img';
                imgDiv.style.backgroundImage = 'url(' + data.image + ')';
                
                var contentDiv = document.createElement('div');
                contentDiv.className = 'custom-carousel-content';
                
                if (data.title) {
                    var title = document.createElement('h3');
                    title.textContent = data.title;
                    contentDiv.appendChild(title);
                }
                
                itemDiv.appendChild(imgDiv);
                itemDiv.appendChild(contentDiv);
                
                return itemDiv;
            }

            // State
            // Index 0 corresponds to the first REAL item.
            // The track has 'visibleItems' clones at the start.
            // So the initial offset index is 'visibleItems'.
            var currentIndex = 0; 
            var offsetIndex = visibleItems; 
            var isAnimating = false;

            function updateTransform(enableTransition) {
                if (enableTransition) {
                    track.style.transition = 'transform 0.5s ease';
                } else {
                    track.style.transition = 'none';
                }
                
                var percentTranslate = -(offsetIndex * itemWidthPercent);
                track.style.transform = 'translateX(' + percentTranslate + '%)';
            }

            // Initial Position
            updateTransform(false);

            function moveNext() {
                if (isAnimating) return;
                isAnimating = true;
                
                offsetIndex++;
                updateTransform(true);
                
                setTimeout(function() {
                    // Check if we reached the end clones
                    // The real items end at index: visibleItems + totalItems - 1
                    // The first clone after real items is at: visibleItems + totalItems
                    if (offsetIndex >= visibleItems + totalItems) {
                        // Jump back to start of real items
                        offsetIndex = visibleItems;
                        updateTransform(false);
                    }
                    isAnimating = false;
                }, 500);
            }

            function movePrev() {
                if (isAnimating) return;
                isAnimating = true;
                
                offsetIndex--;
                updateTransform(true);
                
                setTimeout(function() {
                    // Check if we reached the start clones
                    // The real items start at index: visibleItems
                    // The last clone before real items is at: visibleItems - 1
                    if (offsetIndex < visibleItems) {
                        // Jump to end of real items
                        // The last real item is at: visibleItems + totalItems - 1
                        // We want to show the set ending at the last real item.
                        // Actually, if we are at index 'visibleItems - 1' (which is the last item of the 'before' clones),
                        // it corresponds to the last item of the real list.
                        // So we should jump to: visibleItems + totalItems - 1
                        
                        // Wait, if offsetIndex is the START of the view.
                        // If offsetIndex becomes visibleItems - 1.
                        // That means we are viewing [CloneLast, Item1, Item2, Item3].
                        // We want to jump to [ItemLast, Item1, Item2, Item3] ?? No.
                        // We want to jump to the position where ItemLast is the first visible item?
                        // No, 'clonesBefore' are the LAST items.
                        // So clonesBefore[0] is items[totalItems - visibleItems].
                        // clonesBefore[last] is items[totalItems - 1].
                        
                        // If offsetIndex drops below visibleItems (e.g. visibleItems - 1),
                        // We are looking at the last clone.
                        // We should jump to the corresponding real item position.
                        // The real item corresponding to (visibleItems - 1) is (visibleItems + totalItems - 1).
                        
                        offsetIndex = offsetIndex + totalItems;
                        updateTransform(false);
                    }
                    isAnimating = false;
                }, 500);
            }

            nextBtn.addEventListener('click', moveNext);
            prevBtn.addEventListener('click', movePrev);

        })();
    </script>
{% endblock %}
", "@particles/owlcarousel.html.twig", "/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/owlcarousel.html.twig");
    }
}
