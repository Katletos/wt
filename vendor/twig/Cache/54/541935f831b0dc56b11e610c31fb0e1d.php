<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modal.html.twig */
class __TwigTemplate_dd74c8b39e3a65b84437babc7923049d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal\">
\t<div class=\"modal-content\">
\t\t<div class=\"form-container active-form\">
\t\t\t<form>
\t\t\t\t<input type=\"text\" class=\"note-title\" placeholder=\"Title\"/>
\t\t\t\t<input class=\"note-text\" type=\"text\" placeholder=\"Take a note...\"/>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">add_alert</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Remind me</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">person_add</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Collaborator</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">palette</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Change Color</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">image</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Add Image</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">archive</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Archive</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">more_vert</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">More</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">undo</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Undo</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tooltip\">
\t\t\t\t\t\t\t<span class=\"material-icons-outlined hover small-icon\">redo</span>
\t\t\t\t\t\t\t<span class=\"tooltip-text\">Redo</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"close-btn\">Close</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modal.html.twig", "/home/litvin/BSUIR/POIT/4-term/wt/templates/modal.html.twig");
    }
}
