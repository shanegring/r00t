<?php

/* partials/github_link.html.twig */
class __TwigTemplate_e4c6b76268eeb8288e9a94574982474e00b4a613de1c7083be989678d3479ff8 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "tree", array())) {
            // line 2
            echo "  ";
            $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "tree", array());
            // line 3
            echo "  ";
            if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                // line 4
                echo "    ";
                $context["git_repo_link_icon"] = "github";
                // line 5
                echo "  ";
            } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                // line 6
                echo "    ";
                $context["git_repo_link_icon"] = "gitlab";
                // line 7
                echo "  ";
            } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                // line 8
                echo "    ";
                $context["git_repo_link_icon"] = "bitbucket";
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "   ";
                $context["git_repo_link_icon"] = "git";
                // line 11
                echo "  ";
            }
            // line 12
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "icon", array())) {
                // line 13
                echo "    ";
                $context["git_repo_link_icon"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "icon", array());
                // line 14
                echo "  ";
            }
            // line 15
            echo "  ";
            $context["git_repo_edit_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", array())), array("/user/" => "/")));
            // line 16
            echo "  <a class=\"github-link\" href=\"";
            echo ($context["git_repo_edit_link_url"] ?? null);
            echo " \" target=\"_blank\">
  <i class=\"fa fa-";
            // line 17
            echo ($context["git_repo_link_icon"] ?? null);
            echo "\"></i>
  ";
            // line 18
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_EDIT_THIS_PAGE");
            echo "</a>
";
        } else {
            // line 20
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "enabled", array())) {
                // line 21
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", array()) . "/admin/plugins/");
                // line 22
                echo "    <a class=\"github-link\" href=\"";
                echo ($context["admin_panel_appearance_url"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN");
                echo "\">
    <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    ";
                // line 24
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN");
                echo "</a>
  ";
            } else {
                // line 26
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "enabled", array()) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "repository", array())))) {
                    // line 27
                    echo "      ";
                    $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", array()) . "/admin/plugins/git-sync");
                    // line 28
                    echo "      <a class=\"github-link\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN");
                    echo "\">
      <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
      ";
                    // line 30
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN");
                    echo "</a>
    ";
                } else {
                    // line 32
                    echo "      ";
                    $context["git_sync_repo_link"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "repository", array());
                    // line 33
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 34
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 35
                        echo "        ";
                        $context["git_repo_edit_link_url"] = ((twig_trim_filter(twig_replace_filter(($context["git_sync_repo_link"] ?? null), array(".git" => "")), "/", "right") . "/blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 36
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 37
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 38
                        echo "        ";
                        $context["git_repo_edit_link_url"] = ((twig_trim_filter(twig_replace_filter(($context["git_sync_repo_link"] ?? null), array(".git" => "")), "/", "right") . "/blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 39
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 40
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 41
                        echo "        ";
                        $context["git_repo_edit_link_url"] = ((twig_trim_filter(twig_replace_filter(($context["git_sync_repo_link"] ?? null), array(".git" => "")), "/", "right") . "/src/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 42
                        echo "      ";
                    } else {
                        // line 43
                        echo "  \t    ";
                        $context["git_repo_link_icon"] = "git";
                        // line 44
                        echo "        ";
                        $context["git_repo_edit_link_url"] = ((twig_trim_filter(twig_replace_filter(($context["git_sync_repo_link"] ?? null), array(".git" => "")), "/", "right") . "/blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 45
                        echo "  \t  ";
                    }
                    // line 46
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "icon", array())) {
                        // line 47
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "icon", array());
                        // line 48
                        echo "      ";
                    }
                    // line 49
                    echo "      <a class=\"github-link\" href=\"";
                    echo ($context["git_repo_edit_link_url"] ?? null);
                    echo " \" title=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_EDIT_THIS_PAGE");
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 50
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\"></i>
      ";
                    // line 51
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_GIT_EDIT_THIS_PAGE");
                    echo "</a>
    ";
                }
                // line 53
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/github_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 53,  177 => 51,  173 => 50,  166 => 49,  163 => 48,  160 => 47,  157 => 46,  154 => 45,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  110 => 30,  102 => 28,  99 => 27,  96 => 26,  91 => 24,  83 => 22,  80 => 21,  77 => 20,  72 => 18,  68 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/github_link.html.twig", "/Users/shanegring/GitHub/r00t-documentation/user/themes/r00t/templates/partials/github_link.html.twig");
    }
}
