<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_de649da1c66298147e73a27a2577fa4492d09423db71ffd05820740bce5071a8 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 2
            echo "<div class=\"sidebar-content\">
\t<h6 class=\"sidebar--heading\">Random Article</h6>
  <hr class=\"hr--small\">
\t<a class=\"button random\" href=\"";
            // line 5
            echo ($context["base_url"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 8
        echo "

<div class=\"sidebar-content\">
<h1 style=\"font-size: 60px\">W</h1>
<p style=\"margin-bottom: 0\">the design journal of the</p>
<p>International WELL Building Institute</p>
</div>


";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 18
            echo "<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Featured tags</h6>
    <hr class=\"hr--small\">
    ";
            // line 21
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 21)->display(array_merge($context, array("base_url" => ($context["base_url_relative"] ?? null), "taxonomy" => "tag")));
            // line 22
            echo "</div>
";
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 26
            echo "<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Archives</h6>
    <hr class=\"hr--small\">
\t";
            // line 29
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 29)->display(array_merge($context, array("base_url" => ($context["base_url_relative"] ?? null))));
            // line 30
            echo "</div>
";
        }
        // line 32
        echo "
<footer>
  <hr>
  <p class=\"footer--text\">&copy; ";
        // line 35
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo " ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_date_format_filter($this->env, "now", "Y"));
        echo "</p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  72 => 32,  68 => 30,  66 => 29,  61 => 26,  59 => 25,  56 => 24,  52 => 22,  50 => 21,  45 => 18,  43 => 17,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h6 class=\"sidebar--heading\">Random Article</h6>
  <hr class=\"hr--small\">
\t<a class=\"button random\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
{% endif %}


<div class=\"sidebar-content\">
<h1 style=\"font-size: 60px\">W</h1>
<p style=\"margin-bottom: 0\">the design journal of the</p>
<p>International WELL Building Institute</p>
</div>


{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Featured tags</h6>
    <hr class=\"hr--small\">
    {% include 'partials/taxonomylist.html.twig' with {'base_url':base_url_relative, 'taxonomy':'tag'} %}
</div>
{% endif %}

{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Archives</h6>
    <hr class=\"hr--small\">
\t{% include 'partials/archives.html.twig' with {'base_url':base_url_relative} %}
</div>
{% endif %}

<footer>
  <hr>
  <p class=\"footer--text\">&copy; {{ site.title }} {{ t(\"now\"|date('Y')) }}</p>
</footer>
", "partials/sidebar.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/sidebar.html.twig");
    }
}
