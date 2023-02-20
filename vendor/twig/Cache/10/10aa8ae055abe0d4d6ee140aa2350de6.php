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

/* notes.html.twig */
class __TwigTemplate_fe53c9a5863ced75b11756edd3c4f9fa extends Template
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
        echo "<div class=\"notes\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 3
            echo "\t\t<div
\t\t\tclass=\"note\">
\t\t\t";
            // line 6
            echo "\t\t\t<div class=\"title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
\t\t\t<div class=\"text\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "text", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
\t\t\t<div class=\"note-footer\">
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "date", [], "any", false, false, false, 9), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  58 => 9,  53 => 7,  48 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "notes.html.twig", "/home/litvin/BSUIR/POIT/4-term/wt/templates/notes.html.twig");
    }
}
