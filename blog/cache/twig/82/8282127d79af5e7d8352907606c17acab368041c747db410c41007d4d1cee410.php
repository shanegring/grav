<?php

/* pages.html.twig */
class __TwigTemplate_81ea848f9076114494c18e323a4e7040a0f62f9148483393010b62098feb1462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
($context["context"] ?? null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute(($context["context"] ?? null), "exists", array())) {
                // line 16
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
        // line 45
        $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_pages_target", array());
        // line 46
        $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 296
    public function block_titlebar($context, array $blocks = array())
    {
        // line 297
        echo "    <div class=\"button-bar\">
        ";
        // line 298
        if ((($context["mode"] ?? null) == "list")) {
            // line 299
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 302
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 303
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a>
                ";
                }
                // line 305
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 316
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 317
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                // line 318
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 320
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 321
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 322
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 324
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            echo "                </ul>
            </div>

            ";
            // line 328
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", array())) {
                // line 329
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 332
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), ($context["admin_lang"] ?? null), array(), "array");
                // line 333
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 335
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", array())) > 1)) {
                    // line 336
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 340
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 341
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 342
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 343
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 345
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo "                    </ul>
                    ";
                }
                // line 348
                echo "                </div>
            ";
            }
            // line 350
            echo "
        ";
        } elseif ((        // line 351
($context["mode"] ?? null) == "edit")) {
            // line 352
            echo "
            ";
            // line 353
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 355
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 357
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", array(), "method"), "children", array(), "method");
            // line 358
            echo "            ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
                // line 360
                echo "                ";
                $context["editPage"] = twig_trim_filter($this->getAttribute($this, "canEditPage", array(0 => $context["sibling"]), "method"));
                // line 361
                echo "                ";
                if ( !($context["editPage"] ?? null)) {
                    // line 362
                    echo "                    ";
                    $context["siblings"] = $this->getAttribute(($context["siblings"] ?? null), "remove", array(), "method");
                    // line 363
                    echo "                ";
                }
                // line 364
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            echo "            ";
            // line 366
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 367
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 368
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 369
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 371
            echo "
            ";
            // line 372
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 373
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 374
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 375
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 377
            echo "
            ";
            // line 378
            if (($context["exists"] ?? null)) {
                // line 379
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 381
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 387
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 388
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 389
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                    // line 390
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 392
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 395
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 396
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 397
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 398
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 400
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 401
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 403
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 405
                echo "            ";
            }
            // line 406
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 408
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 409
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", array()))) {
                // line 410
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array())) {
                    // line 411
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 415
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 416
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 417
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 418
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 420
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 421
                    echo "                        </ul>
                    ";
                }
                // line 423
                echo "                ";
            }
            // line 424
            echo "            </div>


        ";
        }
        // line 428
        echo "    </div>
    ";
        // line 429
        if ((($context["mode"] ?? null) == "new")) {
            // line 430
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 431
($context["mode"] ?? null) == "edit")) {
            // line 432
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 436
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 440
    public function block_content($context, array $blocks = array())
    {
        // line 441
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 442
        if ((($context["mode"] ?? null) == "new")) {
            // line 443
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 443)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "pages/page"), "method"), "data" => ($context["context"] ?? null))));
            // line 444
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 445
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 448
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", array()) && ($context["page_lang"] ?? null))) {
                // line 449
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 451
                if (($context["exists"] ?? null)) {
                    // line 452
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 454
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 456
                echo "                        </button>
                        ";
                // line 457
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", array())) > 1))) {
                    // line 458
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 462
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 463
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 464
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 466
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 467
                    echo "                            </ul>
                        ";
                }
                // line 469
                echo "                    </div>
                ";
            }
            // line 471
            echo "
                ";
            // line 472
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array())) {
                // line 473
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 474
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 475
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))));
                // line 476
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["normalText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 477
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["expertText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 478
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 480
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 481
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 482
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 483
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 488
            echo "
            </div>

            ";
            // line 491
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0"))) {
                // line 492
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 492)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", array()), "data" => ($context["context"] ?? null))));
                // line 493
                echo "            ";
            } else {
                // line 494
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 494)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")), "method"), "data" => ($context["context"] ?? null))));
                // line 495
                echo "            ";
            }
            // line 496
            echo "        </div>
    ";
        } else {
            // line 498
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 500
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", array()), $this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 503
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 506
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 507
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 512
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 514
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 514)->display($context);
            // line 515
            echo "        </div>
    ";
        }
        // line 517
        echo "    </div>

    ";
        // line 519
        if (($context["context"] ?? null)) {
            // line 520
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 521
            echo "
        ";
            // line 522
            if ((($context["mode"] ?? null) == "edit")) {
                // line 523
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", array(0 => ""), "method");
                // line 524
                echo "        ";
            }
            // line 525
            echo "    ";
        }
        // line 526
        echo "
    ";
        // line 527
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 528
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 529
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 529)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 530
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 533
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 533)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 534
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 537
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 537)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => ($context["obj_data"] ?? null))));
            // line 538
            echo "    </div>

    ";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 541
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 542
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 542)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => ($context["context"] ?? null)), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 543
                echo "        </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 545
            echo "    ";
        }
        // line 546
        echo "

    ";
        // line 548
        if ((($context["mode"] ?? null) == "edit")) {
            // line 549
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 551
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 551)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => ($context["context"] ?? null))));
            // line 552
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 554
            $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 554)->display(array_merge($context, array("data" => ($context["context"] ?? null))));
            // line 555
            echo "    </div>
    ";
        }
        // line 557
        echo "
    ";
        // line 558
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 558)->display($context);
        // line 559
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 564
        if (($context["context"] ?? null)) {
            // line 565
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 567
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 579
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 579)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 580
        echo "
";
    }

    // line 583
    public function block_bottom($context, array $blocks = array())
    {
        // line 584
        echo "<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
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

    // line 50
    public function getcheckChildren($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "
    ";
            // line 52
            $context["flag"] = false;
            // line 53
            echo "    
    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 55
                echo "    
        ";
                // line 56
                $context["showPage"] = true;
                // line 57
                echo "        
        ";
                // line 58
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["p"], "header", array()), "creator", array()))) {
                    // line 59
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.limitPagesToOwner") && ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "creator", array()) != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())))) {
                        // line 60
                        echo "                ";
                        $context["showPage"] = false;
                        // line 61
                        echo "            ";
                    }
                    // line 62
                    echo "        ";
                } else {
                    // line 63
                    echo "            ";
                    if (( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.showPagesWithNoOwner") && twig_test_empty($this->getAttribute($this->getAttribute($context["p"], "header", array()), "creator", array())))) {
                        // line 64
                        echo "                ";
                        $context["showPage"] = false;
                        // line 65
                        echo "            ";
                    }
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "        
        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", array()), "visibleToGroups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    // line 69
                    echo "            ";
                    if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                        // line 70
                        echo "                ";
                        $context["showPage"] = true;
                        // line 71
                        echo "            ";
                    }
                    // line 72
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "        
        ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", array()), "editableToGroups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    // line 75
                    echo "            ";
                    if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                        // line 76
                        echo "                ";
                        $context["showPage"] = true;
                        // line 77
                        echo "            ";
                    }
                    // line 78
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
        ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", array()), "shareWith", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    // line 81
                    echo "            ";
                    if (($context["g"] == $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
                        // line 82
                        echo "                ";
                        $context["showPage"] = true;
                        // line 83
                        echo "            ";
                    }
                    // line 84
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "        
        ";
                // line 86
                if (( !($context["showPage"] ?? null) && ($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0))) {
                    // line 87
                    echo "            ";
                    if (twig_trim_filter($this->getAttribute($this, "checkChildren", array(0 => $context["p"]), "method"))) {
                        // line 88
                        echo "                ";
                        $context["showPage"] = true;
                        // line 89
                        echo "            ";
                    } else {
                        // line 90
                        echo "                ";
                        $context["showPage"] = false;
                        // line 91
                        echo "            ";
                    }
                    // line 92
                    echo "        ";
                }
                // line 93
                echo "        
        ";
                // line 94
                if (($context["showPage"] ?? null)) {
                    // line 95
                    echo "            ";
                    $context["flag"] = true;
                    // line 96
                    echo "        ";
                }
                // line 97
                echo "        
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    
    ";
            // line 100
            if (($context["flag"] ?? null)) {
                // line 101
                echo "        ";
                echo true;
                echo "
    ";
            } else {
                // line 103
                echo "        ";
                echo null;
                echo "
    ";
            }
            // line 105
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

    // line 108
    public function getcanViewPage($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 109
            echo "
    ";
            // line 110
            $context["showPage"] = true;
            // line 111
            echo "    
    ";
            // line 112
            if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) {
                // line 113
                echo "
        ";
                // line 114
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()))) {
                    // line 115
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.limitPagesToOwner") && ($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()) != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())))) {
                        // line 116
                        echo "                ";
                        $context["showPage"] = false;
                        // line 117
                        echo "            ";
                    }
                    // line 118
                    echo "        ";
                } else {
                    // line 119
                    echo "            ";
                    if (( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.showPagesWithNoOwner") && twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array())))) {
                        // line 120
                        echo "                ";
                        $context["showPage"] = false;
                        // line 121
                        echo "            ";
                    }
                    // line 122
                    echo "        ";
                }
                // line 123
                echo "
        ";
                // line 124
                if ( !($context["showPage"] ?? null)) {
                    // line 125
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "visibleToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 126
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 127
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 128
                            echo "                ";
                        }
                        // line 129
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "        ";
                }
                // line 131
                echo "
        ";
                // line 132
                if ( !($context["showPage"] ?? null)) {
                    // line 133
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "editableToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 134
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 135
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 136
                            echo "                ";
                        }
                        // line 137
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "        ";
                }
                // line 139
                echo "
        ";
                // line 140
                if ( !($context["showPage"] ?? null)) {
                    // line 141
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "shareWith", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 142
                        echo "                ";
                        if (($context["g"] == $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
                            // line 143
                            echo "                    ";
                            $context["showPage"] = true;
                            // line 144
                            echo "                ";
                        }
                        // line 145
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "        ";
                }
                // line 147
                echo "
        ";
                // line 148
                if ( !($context["showPage"] ?? null)) {
                    // line 149
                    echo "            ";
                    if (twig_trim_filter($this->getAttribute($this, "checkChildren", array(0 => ($context["p"] ?? null)), "method"))) {
                        // line 150
                        echo "                ";
                        $context["showPage"] = true;
                        // line 151
                        echo "            ";
                    }
                    // line 152
                    echo "        ";
                }
                // line 153
                echo "
    ";
            }
            // line 155
            echo "    
    ";
            // line 156
            if (($context["showPage"] ?? null)) {
                // line 157
                echo "        ";
                echo true;
                echo "
    ";
            } else {
                // line 159
                echo "        ";
                echo null;
                echo "
    ";
            }
            // line 161
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

    // line 164
    public function getcanEditPage($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 165
            echo "
    ";
            // line 166
            $context["editPage"] = true;
            // line 167
            echo "
    ";
            // line 168
            if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) {
                // line 169
                echo "
        ";
                // line 170
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()))) {
                    // line 171
                    echo "            ";
                    if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.limitPagesToOwner") && ($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array()) != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())))) {
                        // line 172
                        echo "                ";
                        $context["editPage"] = false;
                        // line 173
                        echo "            ";
                    }
                    // line 174
                    echo "        ";
                } else {
                    // line 175
                    echo "            ";
                    if (( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("users.showPagesWithNoOwner") && twig_test_empty($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "creator", array())))) {
                        // line 176
                        echo "                ";
                        $context["editPage"] = false;
                        // line 177
                        echo "            ";
                    }
                    // line 178
                    echo "        ";
                }
                // line 179
                echo "
        ";
                // line 180
                if ( !($context["editPage"] ?? null)) {
                    // line 181
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "editableToGroups", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 182
                        echo "                ";
                        if (twig_in_filter($context["g"], $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "groups", array()))) {
                            // line 183
                            echo "                    ";
                            $context["editPage"] = true;
                            // line 184
                            echo "                ";
                        }
                        // line 185
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "        ";
                }
                // line 187
                echo "
        ";
                // line 188
                if ( !($context["editPage"] ?? null)) {
                    // line 189
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", array()), "shareWith", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                        // line 190
                        echo "                ";
                        if (($context["g"] == $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
                            // line 191
                            echo "                    ";
                            $context["editPage"] = true;
                            // line 192
                            echo "                ";
                        }
                        // line 193
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "        ";
                }
                // line 195
                echo "
    ";
            }
            // line 197
            echo "    
    ";
            // line 198
            if (($context["editPage"] ?? null)) {
                // line 199
                echo "        ";
                echo true;
                echo "
    ";
            } else {
                // line 201
                echo "        ";
                echo null;
                echo "
    ";
            }
            // line 203
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

    // line 208
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 209
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 210
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 211
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 212
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 213
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 214
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 215
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", array(), "array");
            // line 216
            echo "
    ";
            // line 217
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 218
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                // line 219
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["pcol"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 221
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", array(), "method");
                // line 222
                echo "    ";
            }
            // line 223
            echo "
    ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 225
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 226
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 227
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 228
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 229
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 230
                echo "        ";
                // line 231
                echo "        ";
                // line 232
                echo "            ";
                // line 233
                echo "        ";
                // line 234
                echo "            ";
                // line 235
                echo "        ";
                // line 236
                echo "        
        ";
                // line 238
                $context["showPage"] = twig_trim_filter($this->getAttribute($this, "canViewPage", array(0 => $context["p"]), "method"));
                // line 239
                echo "        ";
                $context["editPage"] = twig_trim_filter($this->getAttribute($this, "canEditPage", array(0 => $context["p"]), "method"));
                // line 240
                echo "        
        ";
                // line 241
                if (($context["showPage"] ?? null)) {
                    // line 242
                    echo "        ";
                    // line 244
                    $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                    // line 245
                    echo "
            <li class=\"page-item\" data-nav-id=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                    echo "\">
                <div class=\"row page-item__row\">
                   ";
                    // line 249
                    echo "<span class=\"page-item__toggle\" ";
                    echo (((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0) && (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) ? (true) : (twig_trim_filter($this->getAttribute($this, "checkChildren", array(0 => $context["p"]), "method")))))) ? ("data-toggle=\"children\"") : (""));
                    echo ">
                        <i class=\"page-icon fa fa-fw fa-circle-o ";
                    // line 250
                    echo (((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0) && (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize("admin.super")) ? (true) : (twig_trim_filter($this->getAttribute($this, "checkChildren", array(0 => $context["p"]), "method")))))) ? ("children-closed") : (""));
                    echo " ";
                    echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                    echo "\"></i>
                    </span>
                    ";
                    // line 253
                    echo "<div class=\"page-item__content\">
                        <div class=\"page-item__content-name\">
                            <span data-hint=\"";
                    // line 255
                    echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                    echo "\" class=\"hint--top page-item__content-hint\">
                                ";
                    // line 257
                    if (($context["editPage"] ?? null)) {
                        // line 258
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                        echo "\" class=\"page-edit\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
                        echo "</a>
                                ";
                    } else {
                        // line 260
                        echo "                                    <a class=\"page-edit\" style=\"color:grey\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
                        echo "</a>
                                ";
                    }
                    // line 262
                    echo "                                ";
                    // line 263
                    echo "</span>
                            ";
                    // line 264
                    if ($this->getAttribute($context["p"], "language", array())) {
                        // line 265
                        echo "                                <span class=\"badge lang ";
                        if (($this->getAttribute($context["p"], "language", array()) == ($context["admin_lang"] ?? null))) {
                            echo "info";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 267
                    echo "                            ";
                    if ($this->getAttribute($context["p"], "home", array())) {
                        // line 268
                        echo "                                <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                            ";
                    }
                    // line 270
                    echo "                        </div>
                        <p class=\"page-route\">";
                    // line 271
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                    echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                    echo "</p>
                    </div>
                    <span class=\"page-item__tools\">
                        ";
                    // line 275
                    if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "users.canDeletePages", 1 => "admin.super"))) {
                        // line 276
                        echo "                            ";
                        if (($context["warn"] ?? null)) {
                            // line 277
                            echo "                                <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                            ";
                        } else {
                            // line 279
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                            ";
                        }
                        // line 281
                        echo "                        ";
                    }
                    // line 282
                    echo "                        ";
                    // line 283
                    echo "</span>
                </div>
                ";
                    // line 285
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                        // line 286
                        echo "                    <ul class=\"depth-";
                        echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                        echo "\" style=\"display:none;\">
                        ";
                        // line 287
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)), "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 290
                    echo "            </li>
        ";
                }
                // line 292
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1691 => 292,  1687 => 290,  1681 => 287,  1676 => 286,  1674 => 285,  1670 => 283,  1668 => 282,  1665 => 281,  1659 => 279,  1653 => 277,  1650 => 276,  1648 => 275,  1640 => 271,  1637 => 270,  1633 => 268,  1630 => 267,  1620 => 265,  1618 => 264,  1615 => 263,  1613 => 262,  1607 => 260,  1599 => 258,  1597 => 257,  1593 => 255,  1589 => 253,  1582 => 250,  1577 => 249,  1572 => 246,  1569 => 245,  1567 => 244,  1565 => 242,  1563 => 241,  1560 => 240,  1557 => 239,  1555 => 238,  1552 => 236,  1550 => 235,  1548 => 234,  1546 => 233,  1544 => 232,  1542 => 231,  1540 => 230,  1538 => 229,  1537 => 228,  1536 => 227,  1535 => 226,  1533 => 225,  1529 => 224,  1526 => 223,  1523 => 222,  1520 => 221,  1514 => 219,  1511 => 218,  1509 => 217,  1506 => 216,  1503 => 215,  1500 => 214,  1497 => 213,  1494 => 212,  1491 => 211,  1488 => 210,  1485 => 209,  1471 => 208,  1455 => 203,  1449 => 201,  1443 => 199,  1441 => 198,  1438 => 197,  1434 => 195,  1431 => 194,  1425 => 193,  1422 => 192,  1419 => 191,  1416 => 190,  1411 => 189,  1409 => 188,  1406 => 187,  1403 => 186,  1397 => 185,  1394 => 184,  1391 => 183,  1388 => 182,  1383 => 181,  1381 => 180,  1378 => 179,  1375 => 178,  1372 => 177,  1369 => 176,  1366 => 175,  1363 => 174,  1360 => 173,  1357 => 172,  1354 => 171,  1352 => 170,  1349 => 169,  1347 => 168,  1344 => 167,  1342 => 166,  1339 => 165,  1327 => 164,  1311 => 161,  1305 => 159,  1299 => 157,  1297 => 156,  1294 => 155,  1290 => 153,  1287 => 152,  1284 => 151,  1281 => 150,  1278 => 149,  1276 => 148,  1273 => 147,  1270 => 146,  1264 => 145,  1261 => 144,  1258 => 143,  1255 => 142,  1250 => 141,  1248 => 140,  1245 => 139,  1242 => 138,  1236 => 137,  1233 => 136,  1230 => 135,  1227 => 134,  1222 => 133,  1220 => 132,  1217 => 131,  1214 => 130,  1208 => 129,  1205 => 128,  1202 => 127,  1199 => 126,  1194 => 125,  1192 => 124,  1189 => 123,  1186 => 122,  1183 => 121,  1180 => 120,  1177 => 119,  1174 => 118,  1171 => 117,  1168 => 116,  1165 => 115,  1163 => 114,  1160 => 113,  1158 => 112,  1155 => 111,  1153 => 110,  1150 => 109,  1138 => 108,  1122 => 105,  1116 => 103,  1110 => 101,  1108 => 100,  1105 => 99,  1098 => 97,  1095 => 96,  1092 => 95,  1090 => 94,  1087 => 93,  1084 => 92,  1081 => 91,  1078 => 90,  1075 => 89,  1072 => 88,  1069 => 87,  1067 => 86,  1064 => 85,  1058 => 84,  1055 => 83,  1052 => 82,  1049 => 81,  1045 => 80,  1042 => 79,  1036 => 78,  1033 => 77,  1030 => 76,  1027 => 75,  1023 => 74,  1020 => 73,  1014 => 72,  1011 => 71,  1008 => 70,  1005 => 69,  1001 => 68,  998 => 67,  995 => 66,  992 => 65,  989 => 64,  986 => 63,  983 => 62,  980 => 61,  977 => 60,  974 => 59,  972 => 58,  969 => 57,  967 => 56,  964 => 55,  960 => 54,  957 => 53,  955 => 52,  952 => 51,  940 => 50,  922 => 4,  909 => 3,  902 => 584,  899 => 583,  894 => 580,  887 => 579,  879 => 574,  875 => 573,  868 => 569,  864 => 567,  856 => 565,  854 => 564,  849 => 562,  844 => 559,  842 => 558,  839 => 557,  835 => 555,  833 => 554,  829 => 552,  827 => 551,  823 => 549,  821 => 548,  817 => 546,  814 => 545,  799 => 543,  797 => 542,  790 => 541,  773 => 540,  769 => 538,  767 => 537,  762 => 534,  760 => 533,  755 => 530,  753 => 529,  750 => 528,  748 => 527,  745 => 526,  742 => 525,  739 => 524,  736 => 523,  734 => 522,  731 => 521,  728 => 520,  726 => 519,  722 => 517,  718 => 515,  716 => 514,  711 => 512,  703 => 507,  699 => 506,  693 => 503,  681 => 500,  677 => 498,  673 => 496,  670 => 495,  667 => 494,  664 => 493,  661 => 492,  659 => 491,  654 => 488,  646 => 483,  634 => 482,  630 => 481,  618 => 480,  614 => 478,  611 => 477,  608 => 476,  605 => 475,  602 => 474,  599 => 473,  597 => 472,  594 => 471,  590 => 469,  586 => 467,  580 => 466,  570 => 464,  567 => 463,  563 => 462,  557 => 458,  555 => 457,  552 => 456,  546 => 454,  540 => 452,  538 => 451,  534 => 449,  532 => 448,  527 => 445,  524 => 444,  521 => 443,  519 => 442,  516 => 441,  513 => 440,  505 => 436,  499 => 433,  496 => 432,  494 => 431,  489 => 430,  487 => 429,  484 => 428,  478 => 424,  475 => 423,  471 => 421,  465 => 420,  455 => 418,  452 => 417,  449 => 416,  445 => 415,  439 => 411,  436 => 410,  434 => 409,  430 => 408,  426 => 406,  423 => 405,  417 => 403,  409 => 401,  406 => 400,  400 => 398,  398 => 397,  394 => 396,  388 => 395,  383 => 392,  377 => 390,  375 => 389,  371 => 388,  367 => 387,  358 => 381,  354 => 379,  352 => 378,  349 => 377,  341 => 375,  338 => 374,  335 => 373,  333 => 372,  330 => 371,  322 => 369,  319 => 368,  316 => 367,  314 => 366,  312 => 365,  306 => 364,  303 => 363,  300 => 362,  297 => 361,  294 => 360,  290 => 359,  288 => 358,  286 => 357,  279 => 355,  274 => 353,  271 => 352,  269 => 351,  266 => 350,  262 => 348,  258 => 346,  252 => 345,  244 => 343,  241 => 342,  238 => 341,  234 => 340,  228 => 336,  226 => 335,  220 => 333,  218 => 332,  213 => 329,  211 => 328,  206 => 325,  200 => 324,  188 => 322,  185 => 321,  180 => 320,  174 => 318,  172 => 317,  168 => 316,  164 => 315,  155 => 309,  150 => 306,  144 => 305,  132 => 303,  129 => 302,  125 => 301,  117 => 299,  115 => 298,  112 => 297,  109 => 296,  102 => 41,  99 => 40,  92 => 37,  89 => 36,  86 => 35,  83 => 34,  80 => 33,  76 => 1,  74 => 46,  72 => 45,  70 => 44,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  57 => 24,  55 => 23,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  11 => 1,);
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

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
{% set preview_target = config.plugins.admin.frontend_pages_target %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}


{#  ----- ADDED -----#}
{% macro checkChildren(page) %}

    {% set flag = false %}
    
    {% for p in page.children() %}
    
        {% set showPage = true %}
        
        {% if p.header.creator is not empty %}
            {% if authorize('users.limitPagesToOwner') and p.header.creator != grav.user.username %}
                {% set showPage = false %}
            {% endif %}
        {% else %}
            {% if not authorize('users.showPagesWithNoOwner') and p.header.creator is empty %}
                {% set showPage = false %}
            {% endif %}
        {% endif %}
        
        {% for g in p.header.visibleToGroups %}
            {% if g in grav.user.groups %}
                {% set showPage = true %}
            {% endif %}
        {% endfor %}
        
        {% for g in p.header.editableToGroups %}
            {% if g in grav.user.groups %}
                {% set showPage = true %}
            {% endif %}
        {% endfor %}

        {% for g in p.header.shareWith %}
            {% if g == grav.user.username %}
                {% set showPage = true %}
            {% endif %}
        {% endfor %}
        
        {% if not showPage and p.children().count > 0 %}
            {% if _self.checkChildren(p)|trim %}
                {% set showPage = true %}
            {% else %}
                {% set showPage = false %}
            {% endif %}
        {% endif %}
        
        {% if showPage %}
            {% set flag = true %}
        {% endif %}
        
    {% endfor %}
    
    {% if flag %}
        {{ true }}
    {% else %}
        {{ null }}
    {% endif %}

{% endmacro %}

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

        {% if not showPage %}
            {% if _self.checkChildren(p)|trim %}
                {% set showPage = true %}
            {% endif %}
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
{#  ----- ADDED -----#}


{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {{ dump(pcol) }}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
                             (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
                             (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
                             (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
                             (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}
        {#{% set page_route =  p.rawRoute|trim('/') %}#}
        {#{% if p.language and p.language != admin_lang %}#}
            {#{% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}#}
        {#{% else %}#}
            {#{% set page_url = base_url ~ '/pages/' ~ page_route  %}#}
        {#{% endif %}#}
        
        {#  ----- ADDED -----#}
        {% set showPage = _self.canViewPage(p)|trim %}
        {% set editPage = _self.canEditPage(p)|trim %}
        
        {% if showPage %}
        {# ----- CHANGED -----#}
           
            {% set page_url = getPageUrl(p) %}

            <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
                <div class=\"row page-item__row\">
                   {# ----- CHANGED -----#}
                    <span class=\"page-item__toggle\" {{ p.children(0).count > 0 and (authorize('admin.super') ? true : _self.checkChildren(p)|trim) ? 'data-toggle=\"children\"' : ''}}>
                        <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 and (authorize('admin.super') ? true : _self.checkChildren(p)|trim) ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                    </span>
                    {# ----- CHANGED -----#}
                    <div class=\"page-item__content\">
                        <div class=\"page-item__content-name\">
                            <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                                {# ----- CHANGED -----#}
                                {% if editPage %}
                                    <a href=\"{{ page_url }}\" class=\"page-edit\">{{ p.title|e }}</a>
                                {% else %}
                                    <a class=\"page-edit\" style=\"color:grey\">{{ p.title|e }}</a>
                                {% endif %}
                                {# ----- CHANGED -----#}
                            </span>
                            {% if p.language %}
                                <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                            {% endif %}
                            {% if p.home %}
                                <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                            {% endif %}
                        </div>
                        <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                    </div>
                    <span class=\"page-item__tools\">
                        {# ----- CHANGED -----#}
                        {% if authorize(['users.canDeletePages', 'admin.super']) %}
                            {% if warn %}
                                <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                            {% else %}
                                <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                            {% endif %}
                        {% endif %}
                        {# ----- CHANGED -----#}
                    </span>
                </div>
                {% if p.children().count > 0 %}
                    <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                        {{ _self.loop(p, depth + 1, twig_vars) }}
                    </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label }}</a>
                {% endif %}
            {% endfor %}

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}
            {# ----- ADDED -----#}
            {% for sibling in siblings %}
                {% set editPage = _self.canEditPage(sibling)|trim %}
                {% if not editPage %}
                    {% set siblings = siblings.remove() %}
                {% endif %}
            {% endfor %}
            {# ----- ADDED -----#}
            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.menu }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = _self.spanToggle(normalText, maxLen) %}
                {% set expertText = _self.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ _self.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
    {% endif %}


    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
{% endblock %}

", "pages.html.twig", "/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/templates/pages.html.twig");
    }
}
