<?php

/* partials/profile.html.twig */
class __TwigTemplate_b1ca5591ba5b2c5a07fa5796bc80346cb5d82e99e7d2a5823229bc19a9cc17ee extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"columns profile\">
      <div class=\"columns small-8\">
          <a href=\"http://twitter.com/";
        // line 4
        echo twig_trim_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array()), "@");
        echo "\">
            <h1 class=\"dark\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
        echo "</h1>
          </a>
          <p>";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</p>
          <button class=\"button default hollow\">
              <a href=\"http://twitter.com/";
        // line 9
        echo twig_trim_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array()), "@");
        echo "\"><i class=\"fa fa-twitter\"></i> Follow</a>
          </button>
      </div>
      <div class=\"columns small-4\">
        <a href=\"http://twitter.com/";
        // line 13
        echo twig_trim_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array()), "@");
        echo "\">
            <img class=\"profile--avatar\" src=\"";
        // line 14
        echo ($context["avatar_url"] ?? null);
        echo "\">
        </a>
      </div>
  </div>
  <div class=\"columns small-12\">
    <hr>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  38 => 9,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"columns profile\">
      <div class=\"columns small-8\">
          <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <h1 class=\"dark\">{{ site.author.name }}</h1>
          </a>
          <p>{{ 'SITE.DESCRIPTION'|t }}</p>
          <button class=\"button default hollow\">
              <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\"><i class=\"fa fa-twitter\"></i> Follow</a>
          </button>
      </div>
      <div class=\"columns small-4\">
        <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <img class=\"profile--avatar\" src=\"{{ avatar_url}}\">
        </a>
      </div>
  </div>
  <div class=\"columns small-12\">
    <hr>
  </div>
</div>
", "partials/profile.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/profile.html.twig");
    }
}
