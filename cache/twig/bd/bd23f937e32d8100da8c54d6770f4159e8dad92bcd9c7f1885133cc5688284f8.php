<?php

/* forms/fields/list/list.html.twig */
class __TwigTemplate_587208e2dd4994f2fa814fc0400dd04ed952216aab859ab7e7359af6a2a26dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            '__internal_5751278fb2ecd79a8e142abbd22cc9d846376f522f9b6bb9d3b71f45a3c041b2' => array($this, 'block___internal_5751278fb2ecd79a8e142abbd22cc9d846376f522f9b6bb9d3b71f45a3c041b2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 4
        $context["name"] = $this->getAttribute(($context["field"] ?? null), "name", array());
        // line 5
        $context["btnLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnLabel", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnLabel", array())) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnSortLabel", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnSortLabel", array())) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute(($context["field"] ?? null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "controls", array()), "bottom")) : ("bottom"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"
                       ";
            // line 15
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", array())) . "\"")) : (""));
        echo ">
            ";
        // line 23
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 24
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 31
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\" data-type=\"collection\"
             ";
        // line 40
        if ($this->getAttribute(($context["field"] ?? null), "selectunique", array())) {
            // line 41
            echo "                 data-select-unique=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectunique", array())), "html_attr");
            echo "\"
                 data-max=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "selectunique", array())), "html", null, true);
            echo "\"
             ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "min", array(), "any", true, true)) {
            echo "data-min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min", array()), "html", null, true);
            echo "\"";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["field"] ?? null), "max", array(), "any", true, true) &&  !$this->getAttribute(($context["field"] ?? null), "selectunique", array()))) {
            echo "data-max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "max", array()), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "        >
            ";
        // line 47
        if (twig_in_filter(($context["fieldControls"] ?? null), array(0 => "top", 1 => "both"))) {
            // line 48
            echo "                <div class=\"collection-actions";
            echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
            echo "\">
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
            // line 50
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
            echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
            // line 52
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
            echo "</button>
                    ";
            // line 53
            if ($this->getAttribute(($context["field"] ?? null), "sortby", array())) {
                // line 54
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 55
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 57
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"top\"
                            ";
            // line 58
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 61
        echo "            <ul  ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\"";
        }
        echo " data-collection-holder=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 62
        if (($this->getAttribute(($context["field"] ?? null), "sort", array()) === false)) {
            // line 63
            echo "                    data-collection-nosort
                ";
        }
        // line 64
        echo ">
                ";
        // line 65
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 66
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 67
                echo "                    ";
                $context["itemName"] = ((($context["name"] ?? null)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 68
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"";
                echo (((( !$this->getAttribute(($context["field"] ?? null), "collapsible", array(), "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", array())) && $this->getAttribute(($context["field"] ?? null), "collapsed", array()))) ? ("collection-collapsed") : (""));
                echo "\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
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
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 71
                    echo "                            ";
                    if ((is_string($__internal_3c03a8a1a853ba1f304979b83fd49440043bccc211bec38c5255448d3a4af227 = $context["childName"]) && is_string($__internal_52823cc31f85f76e58e9414dbfb9cc6c6667331add63a581103f799d937e705b = ".") && ('' === $__internal_52823cc31f85f76e58e9414dbfb9cc6c6667331add63a581103f799d937e705b || 0 === strpos($__internal_3c03a8a1a853ba1f304979b83fd49440043bccc211bec38c5255448d3a4af227, $__internal_52823cc31f85f76e58e9414dbfb9cc6c6667331add63a581103f799d937e705b)))) {
                        // line 72
                        echo "                                ";
                        $context["childKey"] = twig_trim_filter($context["childName"], ".");
                        // line 73
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute($context["val"], twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                        // line 74
                        echo "                                ";
                        $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                        // line 75
                        echo "                            ";
                    } else {
                        // line 76
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 77
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $context["childName"])), "method");
                        // line 78
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], array("*" => $context["key"]));
                        // line 79
                        echo "                            ";
                    }
                    // line 80
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                    // line 81
                    echo "
                            ";
                    // line 82
                    if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                        // line 83
                        echo "                                ";
                        // line 84
                        $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 84)->display(array_merge($context, array("field" =>                         // line 85
$context["child"], "value" => $context["key"])));
                        // line 87
                        echo "                            ";
                    } elseif (($this->getAttribute($context["child"], "key", array()) == true)) {
                        // line 88
                        echo "                                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 89
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"), "forms/fields/list/list.html.twig", 88)->display(array_merge($context, array("field" =>                         // line 91
$context["child"], "value" => $context["key"])));
                        // line 93
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", array())) {
                        // line 94
                        echo "                                ";
                        $context["originalValue"] = ($context["childValue"] ?? null);
                        // line 95
                        echo "                                ";
                        // line 96
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 97
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 96)->display(array_merge($context, array("field" =>                         // line 99
$context["child"], "value" => ($context["childValue"] ?? null))));
                        // line 101
                        echo "                            ";
                    }
                    // line 102
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                        <div class=\"item-actions\">
                            ";
                // line 104
                if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", array(), "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", array()))) {
                    // line 105
                    echo "                                <i class=\"fa fa-chevron-circle-";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", array())) ? ("right") : ("down"));
                    echo "\" data-action=\"";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", array())) ? ("expand") : ("collapse"));
                    echo "\"></i>
                                <br />
                            ";
                }
                // line 108
                echo "                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                ";
        }
        // line 113
        echo "            </ul>
            ";
        // line 114
        if (twig_in_filter(($context["fieldControls"] ?? null), array(0 => "bottom", 1 => "both"))) {
            // line 115
            echo "            <div class=\"collection-actions\">
                ";
            // line 116
            if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", array(), "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", array()))) {
                // line 117
                echo "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 118
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
                echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 120
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
                echo "</button>
                ";
            }
            // line 122
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", array())) {
                // line 123
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 124
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "'</button>
                ";
            }
            // line 126
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        ";
            // line 127
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 131
        $context["itemName"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
        // line 132
        echo "<div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(        $this->renderBlock("__internal_5751278fb2ecd79a8e142abbd22cc9d846376f522f9b6bb9d3b71f45a3c041b2", $context, $blocks), array("   " => " ", "
" => " ")), "html_attr");
        // line 178
        echo "\"></div>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 180
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
        ";
    }

    // line 132
    public function block___internal_5751278fb2ecd79a8e142abbd22cc9d846376f522f9b6bb9d3b71f45a3c041b2($context, array $blocks = array())
    {
        // line 133
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 134
        if ( !($this->getAttribute(($context["field"] ?? null), "sort", array()) === false)) {
            // line 135
            echo "                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 137
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 139
                if ((is_string($__internal_5b1761a97bcff5da1fc9cffea086dd862eef1d196b0ca5902f8e8d26b1731932 = $context["childName"]) && is_string($__internal_496ed10966e4e43960dea312afe99ae1338b78c5c2c20069b3553c0db02b99c1 = ".") && ('' === $__internal_496ed10966e4e43960dea312afe99ae1338b78c5c2c20069b3553c0db02b99c1 || 0 === strpos($__internal_5b1761a97bcff5da1fc9cffea086dd862eef1d196b0ca5902f8e8d26b1731932, $__internal_496ed10966e4e43960dea312afe99ae1338b78c5c2c20069b3553c0db02b99c1)))) {
                    // line 140
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 141
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                } else {
                    // line 143
                    $context["childKey"] = $context["childName"];
                    // line 144
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => ($context["key"] ?? null)));
                }
                // line 146
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 148
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 150
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 150)->display(array_merge($context, array("field" =>                     // line 151
$context["child"], "value" => null)));
                } elseif (($this->getAttribute(                // line 153
$context["child"], "key", array()) == true)) {
                    // line 155
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 156
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"), "forms/fields/list/list.html.twig", 155)->display(array_merge($context, array("field" =>                     // line 158
$context["child"], "value" => null)));
                } elseif ($this->getAttribute(                // line 160
$context["child"], "type", array())) {
                    // line 162
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 163
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 162)->display(array_merge($context, array("field" =>                     // line 165
$context["child"], "value" => null)));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                    <div class=\"item-actions\">
                        ";
            // line 170
            if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", array(), "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", array()))) {
                // line 171
                echo "                            <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                            <br />
                        ";
            }
            // line 174
            echo "                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>";
        }
        // line 177
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 177,  593 => 174,  588 => 171,  586 => 170,  583 => 169,  568 => 165,  567 => 163,  566 => 162,  564 => 160,  562 => 158,  561 => 156,  560 => 155,  558 => 153,  556 => 151,  555 => 150,  553 => 148,  551 => 146,  548 => 144,  546 => 143,  543 => 141,  541 => 140,  539 => 139,  522 => 138,  520 => 137,  516 => 135,  514 => 134,  509 => 133,  506 => 132,  500 => 35,  496 => 34,  491 => 33,  488 => 32,  480 => 180,  476 => 178,  472 => 132,  470 => 131,  460 => 127,  457 => 126,  444 => 124,  435 => 123,  432 => 122,  423 => 120,  414 => 118,  411 => 117,  409 => 116,  406 => 115,  404 => 114,  401 => 113,  398 => 112,  381 => 108,  372 => 105,  370 => 104,  367 => 103,  353 => 102,  350 => 101,  348 => 99,  347 => 97,  346 => 96,  344 => 95,  341 => 94,  338 => 93,  336 => 91,  335 => 89,  333 => 88,  330 => 87,  328 => 85,  327 => 84,  325 => 83,  323 => 82,  320 => 81,  317 => 80,  314 => 79,  311 => 78,  308 => 77,  305 => 76,  302 => 75,  299 => 74,  296 => 73,  293 => 72,  290 => 71,  273 => 70,  263 => 68,  260 => 67,  242 => 66,  240 => 65,  237 => 64,  233 => 63,  231 => 62,  220 => 61,  210 => 58,  207 => 57,  194 => 55,  185 => 54,  183 => 53,  175 => 52,  166 => 50,  160 => 48,  158 => 47,  155 => 46,  148 => 45,  141 => 44,  136 => 42,  131 => 41,  129 => 40,  125 => 39,  121 => 37,  119 => 32,  113 => 31,  106 => 28,  100 => 26,  92 => 24,  90 => 23,  85 => 22,  79 => 19,  76 => 18,  72 => 17,  67 => 16,  63 => 15,  59 => 14,  53 => 12,  51 => 11,  44 => 10,  41 => 9,  37 => 1,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/list/list.html.twig", "/Users/shanegring/GitHub/r00t/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}