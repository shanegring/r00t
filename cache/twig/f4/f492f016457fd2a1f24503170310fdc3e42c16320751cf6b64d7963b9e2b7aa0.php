<?php

/* partials/base.html.twig */
class __TwigTemplate_b55ca8338bc05ab3d33c4c0efff5595f40c73918e1a19d83b07b9a5704b3dd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    ";
        // line 34
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 89
        echo " </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://use.typekit.net/zcy3uha.css", 1 => 101), "method");
        // line 16
        echo "     ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://build/css/main.css", 1 => 100), "method");
        // line 17
        echo "
        ";
        // line 18
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 28
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        // line 35
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 38
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 38)->display($context);
        echo "</a>
                <div class=\"searchbox\">
                    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
                    <input id=\"search-by\" type=\"text\" placeholder=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_SEARCH_DOCUMENTATION");
        echo "\"
                           data-search-input=\"";
        // line 42
        echo ($context["base_url_relative"] ?? null);
        echo "/search.json/query\"/>
                    <span data-search-clear><i class=\"fa fa-close\"></i></span>
                </div>
            </div>
        </div>
        ";
        // line 47
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "    </nav>
    ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 58
        $this->displayBlock('topbar', $context, $blocks);
        // line 71
        echo "
            ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
            ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "
        </div>
        ";
        // line 81
        $this->displayBlock('navigation', $context, $blocks);
        // line 82
        echo "    </section>
    ";
    }

    // line 58
    public function block_topbar($context, array $blocks = array())
    {
        if ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 59
            echo "            <div id=\"top-bar\">
                ";
            // line 60
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "top")) {
                // line 61
                echo "                <div id=\"top-github-link\">
                ";
                // line 62
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 62)->display($context);
                // line 63
                echo "                </div>
                ";
            }
            // line 65
            echo "
                ";
            // line 66
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 67
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 67)->display($context);
                // line 68
                echo "                ";
            }
            // line 69
            echo "            </div>
            ";
        }
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "                ";
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "bottom")) {
            // line 76
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 76)->display($context);
            // line 77
            echo "                ";
        }
        // line 78
        echo "            ";
    }

    // line 81
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 84
    public function block_analytics($context, array $blocks = array())
    {
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 86
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 86)->display($context);
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
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
        return array (  298 => 88,  295 => 87,  292 => 86,  289 => 85,  286 => 84,  281 => 81,  277 => 78,  274 => 77,  271 => 76,  268 => 75,  265 => 74,  260 => 72,  254 => 69,  251 => 68,  248 => 67,  246 => 66,  243 => 65,  239 => 63,  237 => 62,  234 => 61,  232 => 60,  229 => 59,  225 => 58,  220 => 82,  218 => 81,  214 => 79,  212 => 74,  209 => 73,  207 => 72,  204 => 71,  202 => 58,  194 => 52,  191 => 51,  186 => 48,  184 => 47,  176 => 42,  172 => 41,  164 => 38,  159 => 35,  156 => 34,  149 => 28,  146 => 27,  143 => 26,  140 => 25,  137 => 24,  134 => 23,  131 => 22,  128 => 21,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  105 => 30,  103 => 21,  100 => 20,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  82 => 9,  80 => 8,  72 => 7,  69 => 6,  66 => 5,  60 => 89,  57 => 84,  55 => 51,  52 => 50,  50 => 34,  44 => 33,  41 => 32,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "/Users/shanegring/GitHub/r00t-documentation/user/themes/r00t/templates/partials/base.html.twig");
    }
}
