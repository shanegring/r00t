<?php

/* docs.html.twig */
class __TwigTemplate_7fd62bfd071c9562cfb4b3ed80daa5433555e0420106bc77b2f917fb3e04461c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("partials/base.html.twig", "docs.html.twig", 11);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array());
        // line 13
        if (($context["tags"] ?? null)) {
            // line 14
            $context["progress"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs", "tag" => ($context["tags"] ?? null))), "order" => array("by" => "default", "dir" => "asc"))), "method");
        } else {
            // line 16
            $context["progress"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs")), "order" => array("by" => "default", "dir" => "asc"))), "method");
        }
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://use.typekit.net/zcy3uha.css", 1 => 101), "method");
        // line 3
        echo "     ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://build/css/main.css", 1 => 103), "method");
        // line 4
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://build/css/theme.css", 1 => 102), "method");
        // line 5
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://build/css/custom.css", 1 => 100), "method");
        // line 6
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 7
        echo "
        ";
        // line 8
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
 ";
    }

    // line 19
    public function block_navigation($context, array $blocks = array())
    {
        // line 20
        echo "\t<div id=\"navigation\">
\t";
        // line 21
        if (( !$this->getAttribute(($context["progress"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method") &&  !($this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array()) == $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array())))) {
            // line 22
            echo "\t    <a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array());
            echo "\"> <i class=\"fa fa-chevron-left\"></i></a>
\t";
        }
        // line 24
        echo "
\t";
        // line 25
        if (( !$this->getAttribute(($context["progress"] ?? null), "isLast", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method") &&  !($this->getAttribute($this->getAttribute(($context["progress"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array()) == $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array())))) {
            // line 26
            echo "\t    <a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["progress"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"fa fa-chevron-right\"></i></a>
\t";
        }
        // line 28
        echo "\t</div>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->loadTemplate("partials/page.html.twig", "docs.html.twig", 32)->display($context);
    }

    public function getTemplateName()
    {
        return "docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  98 => 31,  93 => 28,  87 => 26,  85 => 25,  82 => 24,  76 => 22,  74 => 21,  71 => 20,  68 => 19,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  41 => 1,  37 => 11,  34 => 16,  31 => 14,  29 => 13,  27 => 12,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "docs.html.twig", "/Users/shanegring/GitHub/r00t-documentation/user/themes/r00t/templates/docs.html.twig");
    }
}
