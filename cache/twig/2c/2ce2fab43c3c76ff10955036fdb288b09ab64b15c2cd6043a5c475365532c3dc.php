<?php

/* forms/fields/git-wizard/git-wizard.html.twig */
class __TwigTemplate_4b30329d04898d3341f8cc95e8b389443be6478da17b2f97756c1ea35f597b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/field.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
    }

    // line 5
    public function block_input($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">
        GitSync = {
            'first_time': ";
        // line 8
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "first_time", array()));
        echo ",
            'git_installed': ";
        // line 9
        echo twig_jsonencode_filter($this->getAttribute(($context["git_sync"] ?? null), "git_installed", array()));
        echo "
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    ";
        // line 15
        $this->loadTemplate("partials/modal-wizard.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("partials/modal-reset.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/git-wizard/git-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  45 => 9,  41 => 8,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/git-wizard/git-wizard.html.twig", "/Users/shanegring/GitHub/r00t/user/plugins/git-sync/templates/forms/fields/git-wizard/git-wizard.html.twig");
    }
}
