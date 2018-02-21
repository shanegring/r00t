<?php

/* partials/logo.html.twig */
class __TwigTemplate_10446e6a21c2344f1950fd8476fc6962ec9dc1b7dcf69c5b0637dcb68873feec extends Twig_Template
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
        echo "<p><div style=\"margin-bottom: -5rem;\">&nbsp;</div></p>
<h2 style=\"padding-bottom: 1rem\"><span style=\"color:white\">";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</span></h2>
<p><div style=\"margin-top: -4rem;\">&nbsp;</div></p>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/logo.html.twig", "/Users/shanegring/GitHub/r00t-documentation/user/themes/r00t/templates/partials/logo.html.twig");
    }
}
