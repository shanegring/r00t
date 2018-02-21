<?php

/* partials/modal-reset.html.twig */
class __TwigTemplate_49d0c9ac22ab75efbbf983740a9595579870a024f6233f40e6c118c89cf641fb extends Twig_Template
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
        echo "<div class=\"remodal\" data-remodal-id=\"reset-local\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Reset Local Copy</h1>
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>By proceeding with the reset, all your local changes, if any, will be reverted to the repository state.</p>

            <p>
                Are you sure you want to continue?
            </p>
        </div>
    </div>
    <div class=\"button-bar\">
        <a class=\"button secondary\" data-remodal-action=\"cancel\" href=\"#\">No</a>
        <a class=\"button\" data-gitsync-action=\"reset-local\" href=\"#\"> Yes</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/modal-reset.html.twig", "/Users/shanegring/GitHub/r00t/user/plugins/git-sync/templates/partials/modal-reset.html.twig");
    }
}
