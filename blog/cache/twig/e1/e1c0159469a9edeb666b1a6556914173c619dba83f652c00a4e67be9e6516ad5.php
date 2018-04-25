<?php

/* error.html.twig */
class __TwigTemplate_871725ceaf8a1f98deef47c82c32eb0556dea227d99745aaa6876ccbb8224855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"error\" class=\"columns small-12\">
        <div>
            <h1>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h1>
            <p>
                ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <div id=\"error\" class=\"columns small-12\">
        <div>
            <h1>Error {{ page.header.http_response_code }}</h1>
            <p>
                {{ page.content }}
            </p>
        </div>
    </div>
{% endblock %}
", "error.html.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/error.html.twig");
    }
}
