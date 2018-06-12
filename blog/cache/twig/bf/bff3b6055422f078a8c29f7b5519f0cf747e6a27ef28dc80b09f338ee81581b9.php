<?php

/* forms/fields/filteredparent/filteredparent.html.twig */
class __TwigTemplate_e6e26043e07c8dcf20350d40ad949015e0fdedd64f1f7007fddda8f292cc1912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/filteredparent/filteredparent.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["parent"] = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/filteredparent/filteredparent.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_input($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context["last_page_route"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", array()), "getLastPageRoute", array());
        // line 7
        echo "    ";
        $context["show_slug_val"] = true;
        // line 8
        echo "    ";
        $context["show_fullpath_val"] = false;
        // line 9
        echo "
    ";
        // line 10
        $context["show_parents"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.admin.pages.show_parents"), "method");
        // line 11
        echo "    ";
        if ((($context["show_parents"] ?? null) == "folder")) {
            // line 12
            echo "        ";
            $context["show_slug_val"] = false;
            // line 13
            echo "    ";
        } elseif ((($context["show_parents"] ?? null) == "fullpath")) {
            // line 14
            echo "        ";
            $context["show_fullpath_val"] = true;
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        $context["defaults"] = array("show_root" => true, "show_all" => true, "show_slug" => ($context["show_slug_val"] ?? null), "show_fullpath" => ($context["show_fullpath_val"] ?? null), "default" => ($context["last_page_route"] ?? null));
        // line 18
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 19
        echo "

    ";
        // line 21
        $context["start_page"] = (($this->getAttribute(($context["field"] ?? null), "start_route", array())) ? ($this->getAttribute(($context["pages"] ?? null), "find", array(0 => $this->getAttribute(($context["field"] ?? null), "start_route", array())), "method")) : (null));
        // line 22
        echo "    ";
        $context["show_all"] = ((($this->getAttribute(($context["field"] ?? null), "show_all", array()) === false)) ? (false) : (true));
        // line 23
        echo "    ";
        $context["show_fullpath"] = ((($this->getAttribute(($context["field"] ?? null), "show_fullpath", array()) === true)) ? (true) : (false));
        // line 24
        echo "    ";
        $context["show_slug"] = ((($this->getAttribute(($context["field"] ?? null), "show_slug", array()) === true)) ? (true) : (false));
        // line 25
        echo "    ";
        $context["show_modular"] = ((($this->getAttribute(($context["field"] ?? null), "show_modular", array()) === true)) ? (true) : (false));
        // line 26
        echo "    ";
        $context["limit_levels"] = (($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) ? ($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) : (false));
        // line 27
        echo "
    ";
        // line 28
        $context["page_list"] = $this->getAttribute(($context["ownerUtils"] ?? null), "parentsRawRoutes", array(0 => ($context["start_page"] ?? null), 1 => ($context["show_all"] ?? null), 2 => ($context["show_fullpath"] ?? null), 3 => ($context["show_slug"] ?? null), 4 => ($context["show_modular"] ?? null), 5 => ($context["limit_levels"] ?? null)), "method");
        // line 29
        echo "
    <div class=\"form-select-wrapper ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 32
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 33
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 34
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 35
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 36
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 37
        echo "                >
        ";
        // line 38
        if (($this->getAttribute(($context["field"] ?? null), "show_root", array()) && ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.canPostToRoot") || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")))) {
            // line 39
            echo "            <option value=\"/\">/ (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEFAULT_OPTION_ROOT"), "html", null, true);
            echo ")</option>
        ";
        }
        // line 41
        echo "        ";
        echo $context["parent"]->getpage_options($context, ($context["page_list"] ?? null));
        echo "
        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/filteredparent/filteredparent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 41,  141 => 39,  139 => 38,  136 => 37,  131 => 36,  126 => 35,  121 => 34,  116 => 33,  112 => 32,  106 => 31,  102 => 30,  99 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  77 => 21,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/pages/pages.html.twig\" %}
{% import \"forms/fields/pages/pages.html.twig\" as parent %}

{% block input %}

    {% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:true, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route} %}
    {% set field = field|merge(defaults) %}


    {% set start_page = field.start_route ? pages.find(field.start_route) : null %}
    {% set show_all = field.show_all is same as(false) ? false : true %}
    {% set show_fullpath = field.show_fullpath is same as(true) ? true : false %}
    {% set show_slug = field.show_slug is same as(true) ? true : false %}
    {% set show_modular = field.show_modular is same as(true) ? true : false %}
    {% set limit_levels = field.limit_levels ?: false %}

    {% set page_list = ownerUtils.parentsRawRoutes(start_page, show_all, show_fullpath, show_slug, show_modular, limit_levels) %}

    <div class=\"form-select-wrapper {{ field.size }}\">
        <select class=\"{{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                >
        {% if field.show_root and (authorize('users.canPostToRoot') or authorize('admin.super')) %}
            <option value=\"/\">/ ({{ \"PLUGIN_ADMIN.DEFAULT_OPTION_ROOT\"|tu }})</option>
        {% endif %}
        {{ parent.page_options(_context, page_list) }}
        </select>
    </div>
{% endblock %}

", "forms/fields/filteredparent/filteredparent.html.twig", "/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/templates/forms/fields/filteredparent/filteredparent.html.twig");
    }
}
