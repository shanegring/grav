<?php

/* partials/base.html.twig */
class __TwigTemplate_2511616cecec85ce21011f0a7c46b151012a365090bd8f2dd9fff4b0aa27d188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://dist/images/avatar.png")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3);
        // line 4
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <title>";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", array()), "description", array());
        echo "\">
  <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://dist/images/favicon.png");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 14
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "\" href=\"/rss.xml\">

  ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

  <link rel=\"stylesheet\" href=\"https://use.typekit.net/fwx7fax.css\">

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>

<body class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "--body\">

    ";
        // line 38
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "
    ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header", array())) {
            // line 41
            echo "        ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 41)->display($context);
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "profile", array())) {
            // line 45
            echo "        ";
            $this->loadTemplate("partials/profile.html.twig", "partials/base.html.twig", 45)->display($context);
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    <div class=\"row\">
      ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
      <div class=\"";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
      ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "      </div>
    </div>

    ";
        // line 57
        if ($this->getAttribute(($context["site"] ?? null), "analytics", array())) {
            // line 58
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 58)->display($context);
            // line 59
            echo "    ";
        }
        // line 60
        echo "
</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://dist/styles/app.min.css", 1 => 100), "method");
        // line 18
        echo "  ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://bower_components/jquery/dist/jquery.min.js"), "method");
        // line 23
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://bower_components/what-input/what-input.min.js"), "method");
        // line 24
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://bower_components/foundation-sites/dist/foundation.min.js"), "method");
        // line 25
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://dist/scripts/main.min.js"), "method");
        // line 26
        echo "  ";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "      ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  181 => 50,  178 => 49,  174 => 26,  171 => 25,  168 => 24,  165 => 23,  162 => 22,  159 => 21,  155 => 18,  152 => 17,  149 => 16,  142 => 60,  139 => 59,  136 => 58,  134 => 57,  129 => 54,  127 => 53,  123 => 52,  120 => 51,  118 => 49,  114 => 47,  111 => 46,  108 => 45,  106 => 44,  103 => 43,  100 => 42,  97 => 41,  95 => 40,  92 => 39,  90 => 38,  85 => 36,  72 => 27,  70 => 21,  64 => 19,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  41 => 11,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://dist/images/avatar.png') %}
{% import 'macros/dates.twig' as dates %}
<!DOCTYPE html>
<html class=\"no-js\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.title }}</title>
  <meta name=\"description\" content=\"{{ site.metadata.description }}\">
  <link rel=\"shortcut icon\" href=\"{{ url('theme://dist/images/favicon.png') }}\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ site.title }}\" href=\"/rss.xml\">

  {% block stylesheets %}
    {% do assets.addCss('theme://dist/styles/app.min.css',100) %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
      {% do assets.addJs('theme://bower_components/jquery/dist/jquery.min.js') %}
      {% do assets.addJs('theme://bower_components/what-input/what-input.min.js') %}
      {% do assets.addJs('theme://bower_components/foundation-sites/dist/foundation.min.js') %}
      {% do assets.addJs('theme://dist/scripts/main.min.js') %}
  {% endblock %}
  {{ assets.js() }}

  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

  <link rel=\"stylesheet\" href=\"https://use.typekit.net/fwx7fax.css\">

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>

<body class=\"{{ page.header.class }}--body\">

    {% include 'partials/navigation.html.twig' %}

    {% if page.header.header %}
        {% include 'partials/header.html.twig' %}
    {% endif %}

    {% if page.header.profile %}
        {% include 'partials/profile.html.twig' %}
    {% endif %}

    <div class=\"row\">
      {% block header %}
      {% endblock %}

      <div class=\"{{ page.header.class }}\">
      {% block content %}{% endblock %}
      </div>
    </div>

    {% if site.analytics %}
    {% include 'partials/analytics.html.twig' %}
    {% endif %}

</body>
</html>
", "partials/base.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/partials/base.html.twig");
    }
}
