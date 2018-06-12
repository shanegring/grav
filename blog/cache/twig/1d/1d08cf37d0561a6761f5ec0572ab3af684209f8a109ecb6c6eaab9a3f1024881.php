<?php

/* user-manager.html.twig */
class __TwigTemplate_90899d78e9502de71881765e3529d7d06beb65eb17ced9b41837ed034632f1b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user-manager.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("user-manager-macros.html.twig", "user-manager.html.twig", 2);
        // line 24
        $context["ps"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        // line 25
        $context["appendUrl"] = ("?filter=" . twig_urlencode_filter(($context["filter"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titlebar($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if ( !($context["user"] ?? null)) {
            // line 6
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER"), "html", null, true);
            echo "</h1>
  ";
        } else {
            // line 12
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user-manager\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    ";
            // line 14
            if (($context["exists"] ?? null)) {
                // line 15
                echo "    <a class=\"button disable-after-click\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . ($context["ps"] ?? null)) . "userDelete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                echo "</a>
    <a class=\"button disable-after-click\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . ($context["ps"] ?? null)) . "userLoginAs"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\"><i class=\"fa fa-sign-in\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.LOGIN_AS"), "html", null, true);
                echo "</a>
    ";
            }
            // line 18
            echo "    <button class=\"button\" type=\"submit\" name=\"task\" value=\"admin-addon-user-manager-save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()));
            echo "</h1>
  ";
        }
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        if ( !($context["user"] ?? null)) {
            // line 29
            echo "  ";
            $context["style"] = ((array_key_exists("listStyle", $context)) ? (_twig_default_filter(($context["listStyle"] ?? null), "grid")) : ("grid"));
            // line 30
            echo "
  <h1>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USERS"), "html", null, true);
            echo "</h1>

  ";
            // line 33
            if (($context["filterException"] ?? null)) {
                // line 34
                echo "  <div class=\"notices red\"><h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR"), "html", null, true);
                echo "</h2><p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["filterException"] ?? null), "message", array()), "html", null, true);
                echo "</p></div>
  ";
            }
            // line 36
            echo "
  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_USERS"), "html", null, true);
            echo "\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP"), "html", null, true);
            echo "</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    ";
            // line 58
            if ((($context["style"] ?? null) != "grid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ((((((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/listStyle") . ($context["ps"] ?? null)) . "grid") . "/page") . ($context["ps"] ?? null)) . $this->getAttribute(($context["pagination"] ?? null), "current", array())) . ($context["appendUrl"] ?? null)), "html", null, true);
                echo "\"><i class=\"fa fa-th\"></i></a>";
            } else {
                echo "<i class=\"fa fa-th\"></i>";
            }
            // line 59
            echo "    ";
            if ((($context["style"] ?? null) != "list")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ((((((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/listStyle") . ($context["ps"] ?? null)) . "list") . "/page") . ($context["ps"] ?? null)) . $this->getAttribute(($context["pagination"] ?? null), "current", array())) . ($context["appendUrl"] ?? null)), "html", null, true);
                echo "\"><i class=\"fa fa-list\"></i></a>";
            } else {
                echo "<i class=\"fa fa-list\"></i>";
            }
            // line 60
            echo "  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--";
            // line 63
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 64
            if (twig_test_empty(($context["users"] ?? null))) {
                // line 65
                echo "        <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS"), "html", null, true);
                echo "</h2>
      ";
            } else {
                // line 67
                echo "          ";
                if ((($context["style"] ?? null) == "list")) {
                    // line 68
                    echo "          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERNAME"), "html", null, true);
                    echo "</div>
              <div class=\"user__email\">";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EMAIL"), "html", null, true);
                    echo "</div>
              <div class=\"user__actions\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS"), "html", null, true);
                    echo "</div>
            </div>
          </div>
          ";
                }
                // line 77
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 78
                    echo "          <div class=\"cell\">
            <div class=\"user\">
              ";
                    // line 80
                    if ((($context["style"] ?? null) == "grid")) {
                        // line 81
                        echo "              <div class=\"user__avatar\"><a href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                        echo "/user-manager/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatarUrl", array()), "html", null, true);
                        echo "\" /></a></div>
              ";
                    } else {
                        // line 83
                        echo "              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                        echo "\" /></div>
              ";
                    }
                    // line 85
                    echo "              <div class=\"user__username\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/user-manager/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</a></div>
              <div class=\"user__email\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                    echo "</div>
              <div class=\"user__actions\">
                <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/user-expert/") . $this->getAttribute($context["user"], "username", array())), "html", null, true);
                    echo "\" class=\"expert\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.EXPERT"), "html", null, true);
                    echo "</a>
                <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((((($context["base_url"] ?? null) . "/user-manager/") . $this->getAttribute($context["user"], "username", array())) . "/task") . ($context["ps"] ?? null)) . "userDelete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"delete\" onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_CONFIRM_DELETE"), "html", null, true);
                    echo "');\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
              </div>
            </div>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "      ";
            }
            // line 95
            echo "    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION"), "html", null, true);
            echo "</a>
    </div>
  </form>

  ";
            // line 102
            echo $context["macros"]->getpagination(($context["pagination"] ?? null), ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/listStyle") . ($context["ps"] ?? null)) . ($context["listStyle"] ?? null)), ($context["ps"] ?? null), ($context["appendUrl"] ?? null));
            echo "

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 107
                echo "        ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 108
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", array()) == "username")) {
                        // line 109
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], array("validate" => twig_array_merge($this->getAttribute($context["field"], "validate", array()), array("pattern" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "system", array()), "username_regex", array())))));
                        // line 110
                        echo "          ";
                    }
                    // line 111
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo "\">
            ";
                    // line 112
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "user-manager.html.twig", 112)->display($context);
                    // line 113
                    echo "          </div>
        ";
                }
                // line 115
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bulkFields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 126
                echo "        ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 127
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", array()) == "groups")) {
                        // line 128
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], array("options" => ($context["groupnames"] ?? null)));
                        // line 129
                        echo "          ";
                    }
                    // line 130
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", array()) == "permissions")) {
                        // line 131
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], array("selectize" => array("options" => ($context["permissions"] ?? null))));
                        // line 132
                        echo "          ";
                    }
                    // line 133
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo "\">
            ";
                    // line 134
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "user-manager.html.twig", 134)->display($context);
                    // line 135
                    echo "          </div>
        ";
                }
                // line 137
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '";
            // line 148
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user-manager/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  ";
        } else {
            // line 166
            echo "  <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
            echo "</h1>

  ";
            // line 168
            $this->loadTemplate("partials/blueprints.html.twig", "user-manager.html.twig", 168)->display(array_merge($context, array("data" => ($context["user"] ?? null), "blueprints" => ($context["blueprints"] ?? null))));
            // line 169
            echo "
  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
            echo "</h1>
      <p class=\"bigger\">
        ";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
            echo "
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
      </div>
    </form>
  </div>

  <script>
    \$('[name=\"task\"][value\$=\"save\"]').on('click._grav', function(event) {
      \$(global).off('beforeunload');
    });
  </script>

  <!-- Temporary fix: https://github.com/getgrav/grav-plugin-admin/pull/1379 -->
  <style>
    .permission-container {
      overflow: hidden;
    }
  </style>
  ";
        }
    }

    public function getTemplateName()
    {
        return "user-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 179,  491 => 178,  484 => 174,  479 => 172,  474 => 169,  472 => 168,  466 => 166,  445 => 148,  434 => 140,  430 => 138,  416 => 137,  412 => 135,  410 => 134,  405 => 133,  402 => 132,  399 => 131,  396 => 130,  393 => 129,  390 => 128,  387 => 127,  384 => 126,  367 => 125,  357 => 118,  353 => 116,  339 => 115,  335 => 113,  333 => 112,  328 => 111,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  299 => 106,  292 => 102,  285 => 98,  280 => 95,  277 => 94,  262 => 89,  256 => 88,  251 => 86,  242 => 85,  236 => 83,  226 => 81,  224 => 80,  220 => 78,  215 => 77,  208 => 73,  204 => 72,  200 => 71,  195 => 68,  192 => 67,  186 => 65,  184 => 64,  180 => 63,  175 => 60,  166 => 59,  158 => 58,  150 => 53,  136 => 44,  131 => 42,  123 => 36,  115 => 34,  113 => 33,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  87 => 20,  81 => 18,  74 => 16,  67 => 15,  65 => 14,  59 => 13,  56 => 12,  51 => 10,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  32 => 1,  30 => 25,  28 => 24,  26 => 2,  11 => 1,);
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
{% import 'user-manager-macros.html.twig' as macros %}

{% block titlebar %}
  {% if not user %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER\"|tu }}</h1>
  {% else %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"{{ base_url }}/user-manager\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
    {% if exists %}
    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ ps ~ 'userDelete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ ps ~ 'userLoginAs', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-sign-in\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.LOGIN_AS\"|tu }}</a>
    {% endif %}
    <button class=\"button\" type=\"submit\" name=\"task\" value=\"admin-addon-user-manager-save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> {{ \"PLUGIN_ADMIN.USER\"|tu }}: {{ user.username|e }}</h1>
  {% endif %}
{% endblock %}

{% set ps = config.system.param_sep %}
{% set appendUrl = '?filter=' ~ filter|url_encode %}

{% block content %}
  {% if not user %}
  {% set style = listStyle|default('grid') %}

  <h1>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USERS\"|tu }}</h1>

  {% if filterException %}
  <div class=\"notices red\"><h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR\"|tu }}</h2><p>{{ filterException.message }}</p></div>
  {% endif %}

  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"{{ filter }}\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"{{ filter }}\" type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_USERS\"|tu }}\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP\"|tu }}</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    {% if style != 'grid' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'grid' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-th\"></i></a>{% else %}<i class=\"fa fa-th\"></i>{% endif %}
    {% if style != 'list' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'list' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-list\"></i></a>{% else %}<i class=\"fa fa-list\"></i>{% endif %}
  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--{{ style }}\">
      {% if users is empty %}
        <h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS\"|tu }}</h2>
      {% else %}
          {% if style == 'list' %}
          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">{{ \"PLUGIN_ADMIN.USERNAME\"|tu }}</div>
              <div class=\"user__email\">{{ \"PLUGIN_ADMIN.EMAIL\"|tu }}</div>
              <div class=\"user__actions\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS\"|tu }}</div>
            </div>
          </div>
          {% endif %}
          {% for user in users %}
          <div class=\"cell\">
            <div class=\"user\">
              {% if style == 'grid' %}
              <div class=\"user__avatar\"><a href=\"{{ base_url }}/user-manager/{{ user.username }}\"><img src=\"{{ user.avatarUrl }}\" /></a></div>
              {% else %}
              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ user.username }}\" /></div>
              {% endif %}
              <div class=\"user__username\"><a href=\"{{ base_url }}/user-manager/{{ user.username }}\">{{ user.username }}</a></div>
              <div class=\"user__email\">{{ user.email }}</div>
              <div class=\"user__actions\">
                <a href=\"{{ base_url ~ '/user-expert/' ~ user.username }}\" class=\"expert\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.EXPERT\"|tu }}</a>
                <a href=\"{{ uri.addNonce(base_url ~ '/user-manager/' ~ user.username ~ '/task' ~ ps ~ 'userDelete', 'admin-form', 'admin-nonce') }}\" class=\"delete\" onclick=\"return confirm('{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_CONFIRM_DELETE\"|tu }}');\">{{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
              </div>
            </div>
          </div>
          {% endfor %}
      {% endif %}
    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION\"|tu }}</a>
    </div>
  </form>

  {{ macros.pagination(pagination, uri.route(true) ~ '/listStyle' ~ ps ~ listStyle, ps, appendUrl) }}

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      {% for field in fields %}
        {% if field.type %}
          {% if field.name == 'username' %}
          {% set field = field|merge({ validate: field.validate|merge({ pattern: grav.config.system.username_regex })}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      {% for field in bulkFields %}
        {% if field.type %}
          {% if field.name == 'groups' %}
          {% set field = field|merge({options: groupnames}) %}
          {% endif %}
          {% if field.name == 'permissions' %}
          {% set field = field|merge({selectize: { options: permissions }}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '{{ base_url }}/user-manager/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  {% else %}
  <h1>{{ user.username }}</h1>

  {% include 'partials/blueprints.html.twig' with { data: user, blueprints: blueprints } %}

  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>{{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE\"|tu }}</h1>
      <p class=\"bigger\">
        {{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC\"|tu }}
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
      </div>
    </form>
  </div>

  <script>
    \$('[name=\"task\"][value\$=\"save\"]').on('click._grav', function(event) {
      \$(global).off('beforeunload');
    });
  </script>

  <!-- Temporary fix: https://github.com/getgrav/grav-plugin-admin/pull/1379 -->
  <style>
    .permission-container {
      overflow: hidden;
    }
  </style>
  {% endif %}
{% endblock %}
", "user-manager.html.twig", "/Users/shanegring/GitHub/blog/user/plugins/admin-addon-user-manager/templates/user-manager.html.twig");
    }
}
