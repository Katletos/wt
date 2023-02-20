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

/* form.html.twig */
class __TwigTemplate_c9c839a70bb646684b442778ccf3aa4e extends Template
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
        echo "<div class=\"form-container\">
\t<form>
\t\t<input class=\"note-text\" type=\"text\" placeholder=\"Take a note...\"/>
\t\t<div class=\"form-actions\">
\t\t\t<div class=\"tooltip\">
\t\t\t\t<span class=\"material-icons-outlined hover\">check_box</span>
\t\t\t\t<span class=\"tooltip-text\">New List</span>
\t\t\t</div>
\t\t\t<div class=\"tooltip\">
\t\t\t\t<span class=\"material-icons-outlined hover\">brush</span>
\t\t\t\t<span class=\"tooltip-text\">New Drawing</span>
\t\t\t</div>
\t\t\t<div class=\"tooltip\">
\t\t\t\t<span class=\"material-icons-outlined hover\">image</span>
\t\t\t\t<span class=\"tooltip-text\">New Image</span>
\t\t\t</div>
\t\t</div>
\t</form>
</div>

<div class=\"form-container active-form\">
\t<form>
\t\t<input type=\"text\" class=\"note-title\" placeholder=\"Title\"/>
\t\t<input class=\"note-text\" type=\"text\" placeholder=\"Take a note...\"/>
\t\t<div class=\"form-actions\"></div>
\t\t<button class=\"close-btn\">close</button>
\t</div>
</form></div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form.html.twig", "/home/litvin/BSUIR/POIT/4-term/wt/templates/form.html.twig");
    }
}
