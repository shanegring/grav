<?php

/* partials/navigation.html.twig */
class __TwigTemplate_7dc5b0f0690b78fd25a58d0cabae2aa1b309da913612bddae67eede07dad8b16 extends Twig_Template
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
        echo "<div style=\"position: fixed; width: 100%; box-shadow: 0 2px 4px 0 rgba(207,207,207,0.50);\">
<div class=\"top-bar\">
    <div class=\"top-bar-left top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"menu-text\">
                <a style=\"font-size: 50px; display: inline\" href=\"";
        // line 6
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</a>
            </li>
        </ul>
    </div>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 12
            echo "    <div class=\"top-bar-right top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"simplesearch\">
              ";
            // line 15
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 15)->display($context);
            // line 16
            echo "            </li>
        </ul>
    </div>
    ";
        }
        // line 20
        echo "
    <div class=\"top-bar-left\">
        <ul class=\"menu\">

            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 25
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 26
            echo "            <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
                <a href=\"";
            // line 27
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
        // line 30
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 31
            echo "            <li>
                <a class=\"cta\" href=\"";
            // line 32
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/blog"), "method"), "rawRoute", array());
            echo ".rss\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SUBSCRIBE");
            echo "</a>
            </li>
            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 37
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 37)->display($context);
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </ul>
    </div>
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
        return array (  106 => 39,  103 => 38,  100 => 37,  98 => 36,  95 => 35,  86 => 32,  83 => 31,  80 => 30,  69 => 27,  64 => 26,  61 => 25,  57 => 24,  51 => 20,  45 => 16,  43 => 15,  38 => 12,  36 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"position: fixed; width: 100%; box-shadow: 0 2px 4px 0 rgba(207,207,207,0.50);\">
<div class=\"top-bar\">
    <div class=\"top-bar-left top-bar-inline\">
        <ul class=\"menu\">
            <li class=\"menu-text\">
                <a style=\"font-size: 50px; display: inline\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
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
</div>
", "partials/navigation.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/navigation.html.twig");
    }
}
