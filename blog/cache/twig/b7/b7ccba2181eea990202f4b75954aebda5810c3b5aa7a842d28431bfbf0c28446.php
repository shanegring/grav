<?php

/* macros/dates.twig */
class __TwigTemplate_a0daed9db5f59a2ce34c58d6fbf6cd70fcc21d7d67c120d88bb3d0a67970ca34 extends Twig_Template
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
        // line 5
        echo "
";
        // line 10
        echo "
";
    }

    // line 1
    public function gettranslateMonths($__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["months"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "translate", array(0 => array(0 => "MONTHS_OF_THE_YEAR")), "method"), ",");
            // line 3
            echo $this->getAttribute(($context["months"] ?? null), (($context["index"] ?? null) - 1), array(), "array");
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

    // line 6
    public function gettranslateDays($__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            $context["days"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "translate", array(0 => array(0 => "DAYS_OF_THE_WEEK")), "method"), ",");
            // line 8
            echo $this->getAttribute(($context["days"] ?? null), (($context["index"] ?? null) - 1), array(), "array");
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
        return "macros/dates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  70 => 7,  58 => 6,  41 => 3,  39 => 2,  27 => 1,  22 => 10,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro translateMonths(index) %}
{% set months = grav.language.translate(['MONTHS_OF_THE_YEAR'])|split(',') %}
{{ months[index - 1]}}
{% endmacro %}

{% macro translateDays(index) %}
{% set days = grav.language.translate(['DAYS_OF_THE_WEEK'])|split(',') %}
{{ days[index - 1]}}
{% endmacro %}

", "macros/dates.twig", "/Users/shanegring/GitHub/blog/user/themes/medium/templates/macros/dates.twig");
    }
}
