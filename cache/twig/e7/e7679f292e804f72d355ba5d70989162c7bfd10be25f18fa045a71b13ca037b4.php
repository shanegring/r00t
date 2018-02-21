<?php

/* forms/fields/enc-password/enc-password.html.twig */
class __TwigTemplate_33875755894d4e460b2c3c0f49f0d01caf61380e2bc09e445bfc93265e3d89cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/enc-password/enc-password.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["passwordStored"] = ((($context["value"] ?? null)) ? (1) : (0));
        // line 4
        $context["isEncrypted"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->startsWithFilter(($context["value"] ?? null), "gitsync-");
        // line 5
        $context["value"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 8
        echo "    type=\"password\"
    class=\"input\"
    placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, ((($context["passwordStored"] ?? null)) ? (((($context["isEncrypted"] ?? null)) ? ("Your password is securely stored.") : ("Your password is stored but not encrypted."))) : ($this->getAttribute(($context["field"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
    ";
        // line 11
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/enc-password/enc-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/enc-password/enc-password.html.twig", "/Users/shanegring/GitHub/r00t/user/plugins/git-sync/templates/forms/fields/enc-password/enc-password.html.twig");
    }
}
