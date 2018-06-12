<?php

/* forms/fields/filteredOrder/filteredOrder.html.twig */
class __TwigTemplate_e71ae8e28af4915b48e54009985786b7d5d0db0b6ad5838f004c187044e49ba9 extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 2
        $context["siblings"] = $this->getAttribute($this->getAttribute(($context["data"] ?? null), "parent", array()), "children", array());
        // line 3
        $context["canOrder"] = $this->getAttribute(($context["data"] ?? null), "order", array());
        // line 4
        echo "

";
        // line 55
        echo "
";
        // line 97
        echo "

<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            ";
        // line 102
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 103
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 105
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 107
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">

            <input
                type=\"hidden\"
                data-order
                ";
        // line 116
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 117
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
                value=\"\" />
            ";
        // line 119
        if ( !($context["canOrder"] ?? null)) {
            // line 120
            echo "                <div class=\"notice\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
            echo "</div>
            ";
        }
        // line 122
        echo "
            ";
        // line 123
        if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) < 200)) {
            // line 124
            echo "                ";
            $context["sortable_count"] = 0;
            // line 125
            echo "\t\t\t\t<ul id=\"ordering\" class=\"orderable ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\">
\t\t\t    ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                if ($this->getAttribute($context["page"], "order", array())) {
                    // line 127
                    echo "                    ";
                    $context["showPage"] = twig_trim_filter($this->getAttribute($this, "canViewPage", array(0 => $context["page"]), "method"));
                    // line 128
                    echo "                    ";
                    $context["editPage"] = twig_trim_filter($this->getAttribute($this, "canEditPage", array(0 => $context["page"]), "method"));
                    // line 129
                    echo "                    ";
                    if (($context["showPage"] ?? null)) {
                        // line 130
                        echo "                        <li class=\"drag-handle\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
                        echo "\" ";
                        echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                        echo "><span class=\"page-order\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "order", array()), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                        echo " ";
                        if (($context["editPage"] ?? null)) {
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                            echo "\"><i class=\"fa fa-external-link\"></i></a>";
                        }
                        echo "</li>
                    ";
                    }
                    // line 132
                    echo "                    ";
                    $context["sortable_count"] = $this->getAttribute($context["loop"], "index", array());
                    // line 133
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t\t\t</ul>
                ";
            // line 135
            if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                // line 136
                echo "                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    if ( !$this->getAttribute($context["page"], "order", array())) {
                        // line 139
                        echo "                        ";
                        $context["showPage"] = twig_trim_filter($this->getAttribute($this, "canViewPage", array(0 => $context["page"]), "method"));
                        // line 140
                        echo "                        ";
                        $context["editPage"] = twig_trim_filter($this->getAttribute($this, "canEditPage", array(0 => $context["page"]), "method"));
                        // line 141
                        echo "                        ";
                        if (($context["showPage"] ?? null)) {
                            // line 142
                            echo "                            <li ";
                            echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                            echo " ";
                            if (($context["editPage"] ?? null)) {
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                                echo "\"><i class=\"fa fa-external-link\"></i></a>";
                            }
                            echo "</li>
                        ";
                        }
                        // line 144
                        echo "                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                </ul>
                ";
            }
            // line 147
            echo "\t\t\t";
        } else {
            // line 148
            echo "                <div class=\"notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 150
        echo "        </div>
    </div>
</div>
";
    }

    // line 6
    public function getcanViewPage($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "
    ";
            // line 8
            $context["showPage"] = true;
            // line 9
            echo "
    ";
            // line 10
            if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) {
                // line 11
                echo "
        ";
                // line 12
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()))) {
                    // line 13
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.limitPagesToOwner") && ($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()) != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())))) {
                        // line 14
                        echo "                ";
                        $context["showPage"] = false;
                        // line 15
                        echo "            ";
                    }
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    if (( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.showPagesWithNoOwner") && twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array())))) {
                        // line 18
                        echo "                ";
                        $context["showPage"] = false;
                        // line 19
                        echo "            ";
                    }
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "
        ";
                // line 22
                if ( !($context["showPage"] ?? null)) {
                    // line 23
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "visibleToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 24
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 25
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 26
                            echo "                ";
                        }
                        // line 27
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "
        ";
                // line 30
                if ( !($context["showPage"] ?? null)) {
                    // line 31
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "editableToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 32
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 33
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 34
                            echo "                ";
                        }
                        // line 35
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "
        ";
                // line 38
                if ( !($context["showPage"] ?? null)) {
                    // line 39
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "shareWith", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 40
                        echo "                ";
                        if (($context["g"] == $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
                            // line 41
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 42
                            echo "                ";
                        }
                        // line 43
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "        ";
                }
                // line 45
                echo "
    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if (($context["showPage"] ?? null)) {
                // line 49
                echo "        ";
                echo true;
                echo "
    ";
            } else {
                // line 51
                echo "        ";
                echo null;
                echo "
    ";
            }
            // line 53
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function getcanEditPage($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "
    ";
            // line 58
            $context["editPage"] = true;
            // line 59
            echo "
    ";
            // line 60
            if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) {
                // line 61
                echo "
        ";
                // line 62
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()))) {
                    // line 63
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.limitPagesToOwner") && ($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()) != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())))) {
                        // line 64
                        echo "                ";
                        $context["editPage"] = false;
                        // line 65
                        echo "            ";
                    }
                    // line 66
                    echo "        ";
                } else {
                    // line 67
                    echo "            ";
                    if (( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.showPagesWithNoOwner") && twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array())))) {
                        // line 68
                        echo "                ";
                        $context["editPage"] = false;
                        // line 69
                        echo "            ";
                    }
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "
        ";
                // line 72
                if ( !($context["editPage"] ?? null)) {
                    // line 73
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "editableToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 74
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 75
                            echo "                    ";
                            $context["editPage"] = true;
                            // line 76
                            echo "                ";
                        }
                        // line 77
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "        ";
                }
                // line 79
                echo "
        ";
                // line 80
                if ( !($context["editPage"] ?? null)) {
                    // line 81
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "shareWith", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 82
                        echo "                ";
                        if (($context["g"] == $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
                            // line 83
                            echo "                    ";
                            $context["editPage"] = true;
                            // line 84
                            echo "                ";
                        }
                        // line 85
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "        ";
                }
                // line 87
                echo "
    ";
            }
            // line 89
            echo "
    ";
            // line 90
            if (($context["editPage"] ?? null)) {
                // line 91
                echo "        ";
                echo true;
                echo "
    ";
            } else {
                // line 93
                echo "        ";
                echo null;
                echo "
    ";
            }
            // line 95
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/filteredOrder/filteredOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 95,  511 => 93,  505 => 91,  503 => 90,  500 => 89,  496 => 87,  493 => 86,  487 => 85,  484 => 84,  481 => 83,  478 => 82,  473 => 81,  471 => 80,  468 => 79,  465 => 78,  459 => 77,  456 => 76,  453 => 75,  450 => 74,  445 => 73,  443 => 72,  440 => 71,  437 => 70,  434 => 69,  431 => 68,  428 => 67,  425 => 66,  422 => 65,  419 => 64,  416 => 63,  414 => 62,  411 => 61,  409 => 60,  406 => 59,  404 => 58,  401 => 57,  389 => 56,  373 => 53,  367 => 51,  361 => 49,  359 => 48,  356 => 47,  352 => 45,  349 => 44,  343 => 43,  340 => 42,  337 => 41,  334 => 40,  329 => 39,  327 => 38,  324 => 37,  321 => 36,  315 => 35,  312 => 34,  309 => 33,  306 => 32,  301 => 31,  299 => 30,  296 => 29,  293 => 28,  287 => 27,  284 => 26,  281 => 25,  278 => 24,  273 => 23,  271 => 22,  268 => 21,  265 => 20,  262 => 19,  259 => 18,  256 => 17,  253 => 16,  250 => 15,  247 => 14,  244 => 13,  242 => 12,  239 => 11,  237 => 10,  234 => 9,  232 => 8,  229 => 7,  217 => 6,  210 => 150,  204 => 148,  201 => 147,  197 => 145,  190 => 144,  176 => 142,  173 => 141,  170 => 140,  167 => 139,  162 => 138,  158 => 136,  156 => 135,  153 => 134,  143 => 133,  140 => 132,  122 => 130,  119 => 129,  116 => 128,  113 => 127,  102 => 126,  97 => 125,  94 => 124,  92 => 123,  89 => 122,  83 => 120,  81 => 119,  75 => 117,  71 => 116,  63 => 111,  55 => 107,  49 => 105,  41 => 103,  39 => 102,  32 => 97,  29 => 55,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}
{% set siblings = data.parent.children %}
{% set canOrder = data.order %}


{% macro canViewPage(p) %}

    {% set showPage = true %}

    {% if not authorize('admin.super') %}

        {% if p.header.creator is not empty %}
            {% if authorize('users.limitPagesToOwner') and p.header.creator != grav.user.username %}
                {% set showPage = false %}
            {% endif %}
        {% else %}
            {% if not authorize('users.showPagesWithNoOwner') and p.header.creator is empty %}
                {% set showPage = false %}
            {% endif %}
        {% endif %}

        {% if not showPage %}
            {% for g in p.header.visibleToGroups %}
                {% if g in grav.user.groups %}
                    {% set showPage = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {% if not showPage %}
            {% for g in p.header.editableToGroups %}
                {% if g in grav.user.groups %}
                    {% set showPage = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {% if not showPage %}
            {% for g in p.header.shareWith %}
                {% if g == grav.user.username %}
                    {% set showPage = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

    {% endif %}

    {% if showPage %}
        {{ true }}
    {% else %}
        {{ null }}
    {% endif %}

{% endmacro %}

{% macro canEditPage(p) %}

    {% set editPage = true %}

    {% if not authorize('admin.super') %}

        {% if p.header.creator is not empty %}
            {% if authorize('users.limitPagesToOwner') and p.header.creator != grav.user.username %}
                {% set editPage = false %}
            {% endif %}
        {% else %}
            {% if not authorize('users.showPagesWithNoOwner') and p.header.creator is empty %}
                {% set editPage = false %}
            {% endif %}
        {% endif %}

        {% if not editPage %}
            {% for g in p.header.editableToGroups %}
                {% if g in grav.user.groups %}
                    {% set editPage = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {% if not editPage %}
            {% for g in p.header.shareWith %}
                {% if g == grav.user.username %}
                    {% set editPage = true %}
                {% endif %}
            {% endfor %}
        {% endif %}

    {% endif %}

    {% if editPage %}
        {{ true }}
    {% else %}
        {{ null }}
    {% endif %}

{% endmacro %}


<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper {{ field.size }}\">

            <input
                type=\"hidden\"
                data-order
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"\" />
            {% if not canOrder %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|tu|raw }}</div>
            {% endif %}

            {% if siblings|length < 200 %}
                {% set sortable_count = 0 %}
\t\t\t\t<ul id=\"ordering\" class=\"orderable {{ field.classes }}\">
\t\t\t    {% for page in siblings if page.order %}
                    {% set showPage = _self.canViewPage(page)|trim %}
                    {% set editPage = _self.canEditPage(page)|trim %}
                    {% if showPage %}
                        <li class=\"drag-handle\" data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : ''}}><span class=\"page-order\">{{ page.order }}</span> {{ page.title|e }} {% if editPage %}<a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a>{% endif %}</li>
                    {% endif %}
                    {% set sortable_count = loop.index %}
                {% endfor %}
\t\t\t\t</ul>
                {% if sortable_count < siblings|length %}
                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    {% for page in siblings if not page.order %}
                        {% set showPage = _self.canViewPage(page)|trim %}
                        {% set editPage = _self.canEditPage(page)|trim %}
                        {% if showPage %}
                            <li {{ page.slug == data.slug ? 'data-active-id' : ''}}>{{ page.title|e }} {% if editPage %}<a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a>{% endif %}</li>
                        {% endif %}
                    {% endfor %}
                </ul>
                {% endif %}
\t\t\t{% else %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</div>
\t\t\t{% endif %}
        </div>
    </div>
</div>
", "forms/fields/filteredOrder/filteredOrder.html.twig", "/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/templates/forms/fields/filteredOrder/filteredOrder.html.twig");
    }
}
