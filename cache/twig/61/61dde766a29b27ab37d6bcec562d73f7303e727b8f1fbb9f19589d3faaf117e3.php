<?php

/* partials/nav-quick-tray.html.twig */
class __TwigTemplate_8b001a4b96ba81172ed63f1aa99a51d750feb06c9787dcdd466869aa9ece86ae extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_quick_tray", array())) {
            // line 2
            echo "    <ul id=\"admin-nav-quick-tray\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_quick_tray", array()));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 4
                echo "        ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(((($this->getAttribute($context["item"], "authorize", array(), "any", true, true) && twig_test_iterable($this->getAttribute($context["item"], "authorize", array())))) ? ($this->getAttribute($context["item"], "authorize", array())) : (array(0 => (($this->getAttribute($context["item"], "authorize", array())) ? ($this->getAttribute($context["item"], "authorize", array())) : (("admin." . (($this->getAttribute($context["item"], "location", array())) ? ($this->getAttribute($context["item"], "location", array())) : ($this->getAttribute($context["item"], "route", array())))))), 1 => "admin.super"))))) {
                    // line 5
                    echo "            ";
                    $context["data_tags"] = "";
                    // line 6
                    echo "            ";
                    if ($this->getAttribute($context["item"], "data", array())) {
                        // line 7
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "data", array()));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 8
                            echo "                    ";
                            $context["data_tags"] = (((((($context["data_tags"] ?? null) . " data-") . $context["key"]) . "=\"") . $context["value"]) . "\"");
                            // line 9
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 10
                        echo "            ";
                    }
                    // line 11
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                    echo " hint--bottom\" data-hint=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hint", array()), "html", null, true);
                    echo "\" ";
                    echo ($context["data_tags"] ?? null);
                    echo ">
            ";
                    // line 12
                    if ($this->getAttribute($context["item"], "route", array())) {
                        // line 13
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "route", array())), "html", null, true);
                        echo "\">
                    <i class=\"fa fa-fw ";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
                </a>
            ";
                    } else {
                        // line 17
                        echo "                <i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
            ";
                    }
                    // line 19
                    echo "            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav-quick-tray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  86 => 21,  82 => 19,  76 => 17,  70 => 14,  65 => 13,  63 => 12,  54 => 11,  51 => 10,  45 => 9,  42 => 8,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/nav-quick-tray.html.twig", "/Users/shanegring/GitHub/r00t-documentation/user/plugins/admin/themes/grav/templates/partials/nav-quick-tray.html.twig");
    }
}
