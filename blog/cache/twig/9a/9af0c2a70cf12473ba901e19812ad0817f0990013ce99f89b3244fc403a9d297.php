<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_275bdea99a899e2ecc5dba6865ab02b186849021a04dd745462f93006071f8ff extends Twig_Template
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
";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 10
            echo "<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Featured tags</h6>
    <hr class=\"hr--small\">
    ";
            // line 13
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 13)->display(array_merge($context, array("base_url" => ($context["base_url_relative"] ?? null), "taxonomy" => "tag")));
            // line 14
            echo "</div>
";
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 18
            echo "<div class=\"sidebar-content\">
    <h6 class=\"sidebar--heading\">Archives</h6>
    <hr class=\"hr--small\">
\t";
            // line 21
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 21)->display(array_merge($context, array("base_url" => ($context["base_url_relative"] ?? null))));
            // line 22
            echo "</div>
";
        }
        // line 24
        echo "
<footer>
  <hr>
  <p class=\"footer--text\">&copy; ";
        // line 27
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
        return array (  69 => 27,  64 => 24,  60 => 22,  58 => 21,  53 => 18,  51 => 17,  48 => 16,  44 => 14,  42 => 13,  37 => 10,  35 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
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
