<?php

/* blog.html.twig */
class __TwigTemplate_bf65f24bd04376c715fa86341fcdd675dec593b386183d6e3af635fa5ff12ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<style>
.top-bar {
display: none;
}

@media (max-width: 800px) {
    top-bar {
display: block;
}
}
</style>

";
        // line 14
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 14, "1057921635")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<style>
.top-bar {
display: none;
}

@media (max-width: 800px) {
    top-bar {
display: block;
}
}
</style>

{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
      <div class=\"infinite-scroll columns small-12 large-8\">
        {% for post in collection %}
          {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
      </div>



      <div class=\"sidebar columns large-4 show-for-large\">
        <div class=\"sidebar--inner\">
          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
      </div>


    {% endblock %}

{% endembed %}
", "blog.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_bf65f24bd04376c715fa86341fcdd675dec593b386183d6e3af635fa5ff12ea5_1057921635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 14);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 17
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array());
        // line 19
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 30
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => ($context["jscroll_init"] ?? null)), "method");
        // line 31
        echo "    ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "home_profile", array())) {
            // line 35
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "blog.html.twig", 35)->display($context);
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 39
        echo "    ";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "      <div class=\"infinite-scroll columns small-12 large-8\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "          ";
            $this->loadTemplate("partials/post-item.html.twig", "blog.html.twig", 44)->display($context);
            // line 45
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 47
            echo "            ";
            $this->loadTemplate("partials/load-more.html.twig", "blog.html.twig", 47)->display($context);
            // line 48
            echo "        ";
        }
        // line 49
        echo "      </div>



      <div class=\"sidebar columns large-4 show-for-large\">
        <div class=\"sidebar--inner\">
          ";
        // line 55
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 55)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
        // line 56
        echo "        </div>
      </div>


    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 56,  261 => 55,  253 => 49,  250 => 48,  247 => 47,  244 => 46,  230 => 45,  227 => 44,  210 => 43,  207 => 42,  204 => 41,  200 => 39,  194 => 37,  191 => 36,  188 => 35,  185 => 34,  182 => 33,  178 => 31,  176 => 30,  171 => 29,  168 => 28,  164 => 14,  156 => 19,  154 => 17,  152 => 16,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<style>
.top-bar {
display: none;
}

@media (max-width: 800px) {
    top-bar {
display: block;
}
}
</style>

{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
      <div class=\"infinite-scroll columns small-12 large-8\">
        {% for post in collection %}
          {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
      </div>



      <div class=\"sidebar columns large-4 show-for-large\">
        <div class=\"sidebar--inner\">
          {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
      </div>


    {% endblock %}

{% endembed %}
", "blog.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/blog.html.twig");
    }
}
