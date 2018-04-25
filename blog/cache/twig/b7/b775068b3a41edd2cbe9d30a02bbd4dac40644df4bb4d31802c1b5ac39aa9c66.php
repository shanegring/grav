<?php

/* partials/post-item.html.twig */
class __TwigTemplate_ff4ebe563180b9a9e79ec7d9e7f59f33a47fd78c25eb0da61317a0fcd1050bce extends Twig_Template
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
        echo "<div class=\"post-list\">
  <div class=\"post-list--data\">
      <a href=\"";
        // line 3
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\"><h1 class=\"dark\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", array());
        echo "</h1></a>
      <a href=\"";
        // line 4
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\"><date>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc($this->getAttribute(($context["post"] ?? null), "date", array()), true);
        echo "</date></a>
      <p>";
        // line 5
        echo $this->getAttribute(($context["post"] ?? null), "summary", array());
        echo "</p><a href=\"";
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "\"><span class=\"read-more\">Read more...</span></a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post-list\">
  <div class=\"post-list--data\">
      <a href=\"{{ post.url }}\"><h1 class=\"dark\">{{ post.title }}</h1></a>
      <a href=\"{{ post.url }}\"><date>{{ post.date|nicetime(true) }}</date></a>
      <p>{{ post.summary }}</p><a href=\"{{ post.url }}\"><span class=\"read-more\">Read more...</span></a>
  </div>
</div>
", "partials/post-item.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/post-item.html.twig");
    }
}
