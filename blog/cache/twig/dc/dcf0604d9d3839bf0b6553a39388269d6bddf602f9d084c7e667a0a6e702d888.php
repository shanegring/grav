<?php

/* blog.html.twig */
class __TwigTemplate_7068a8d0460605d5320bd5f26442b447ea4fd9ce767345acc45bc6bf8bcd229c extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "805805346")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

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
class __TwigTemplate_7068a8d0460605d5320bd5f26442b447ea4fd9ce767345acc45bc6bf8bcd229c_805805346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array());
        // line 6
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => ($context["jscroll_init"] ?? null)), "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "home_profile", array())) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "blog.html.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 26
        echo "    ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "      <div class=\"infinite-scroll columns small-12 large-8\">
        ";
        // line 30
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
            // line 31
            echo "          ";
            $this->loadTemplate("partials/post-item.html.twig", "blog.html.twig", 31)->display($context);
            // line 32
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
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/load-more.html.twig", "blog.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "      </div>



      <div class=\"sidebar columns large-4 show-for-large\">
        <div class=\"sidebar--inner\">
          ";
        // line 42
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 42)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
        // line 43
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
        return array (  230 => 43,  228 => 42,  220 => 36,  217 => 35,  214 => 34,  211 => 33,  197 => 32,  194 => 31,  177 => 30,  174 => 29,  171 => 28,  167 => 26,  161 => 24,  158 => 23,  155 => 22,  152 => 21,  149 => 20,  145 => 18,  143 => 17,  138 => 16,  135 => 15,  131 => 1,  123 => 6,  121 => 4,  119 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

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
