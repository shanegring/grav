<?php

/* partials/navigation.html.twig */
class __TwigTemplate_c6f7ed76e4ba5deeb5db167ee17687bf81e232043064a84c1342d730815e3dc5 extends Twig_Template
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
        echo "<div class=\"top-bar\">
    <div class=\"top-bar-left top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"menu-text\">
                <a href=\"";
        // line 5
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</a>
            </li>
        </ul>
    </div>

    ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 11
            echo "    <div class=\"top-bar-right top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"simplesearch\">
              ";
            // line 14
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 14)->display($context);
            // line 15
            echo "            </li>
        </ul>
    </div>
    ";
        }
        // line 19
        echo "
    <div class=\"top-bar-left\">
        <ul class=\"menu\">

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 25
            echo "            <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
                <a href=\"";
            // line 26
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 30
            echo "            <li>
                <a class=\"cta\" href=\"";
            // line 31
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/blog"), "method"), "rawRoute", array());
            echo ".rss\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SUBSCRIBE");
            echo "</a>
            </li>
            ";
        }
        // line 34
        echo "
            ";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 36
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 36)->display($context);
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  102 => 37,  99 => 36,  97 => 35,  94 => 34,  85 => 31,  82 => 30,  79 => 29,  68 => 26,  63 => 25,  60 => 24,  56 => 23,  50 => 19,  44 => 15,  42 => 14,  37 => 11,  35 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top-bar\">
    <div class=\"top-bar-left top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"menu-text\">
                <a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
            </li>
        </ul>
    </div>

    {% if config.plugins.simplesearch.enabled %}
    <div class=\"top-bar-right top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"simplesearch\">
              {% include 'partials/simplesearch_searchbox.html.twig' %}
            </li>
        </ul>
    </div>
    {% endif %}

    <div class=\"top-bar-left\">
        <ul class=\"menu\">

            {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">{{ page.menu }}</a>
            </li>
            {% endfor %}
            {% if config.plugins.feed.enabled %}
            <li>
                <a class=\"cta\" href=\"{{ base_url }}{{ pages.find('/blog').rawRoute }}.rss\">{{ 'SUBSCRIBE'|t }}</a>
            </li>
            {% endif %}

            {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
            {% endif %}
        </ul>
    </div>
</div>
", "partials/navigation.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/navigation.html.twig");
    }
}
