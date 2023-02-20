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

/* nav.html.twig */
class __TwigTemplate_bda324c28d5b8494c93fc15065a3b7df extends Template
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
        echo "<div class=\"logo-area\">
\t<img class=\"gb_uc gb_7d\" src=\"https://www.gstatic.com/images/branding/product/1x/keep_2020q4_48dp.png\" srcset=\"https://www.gstatic.com/images/branding/product/1x/keep_2020q4_48dp.png 1x,https://www.gstatic.com/images/branding/product/2x/keep_2020q4_48dp.png 2x\" alt=\"\" aria-hidden=\"true\" style=\"width: 40px; height: 40px;\"/>
\t<span class=\"logo-text\">Keep</span>
</div>

<div class=\"search-area\">
\t<div class=\"tooltip\">
\t\t<span class=\"material-icons-outlined hover\">search</span>
\t\t<span class=\"tooltip-text\">Search</span>
\t</div>
\t<input type=\"text\" placeholder=\"Search\"/>
</div>

<div class=\"settings-area\">
\t<a class=\"tooltip\">
\t\t<span class=\"material-icons-outlined hover\">lightbulb</span>
\t\t<span class=\"tooltip-text\">Notes</span>
\t</a>
\t<a class=\"tooltip\">
\t\t<span class=\"material-icons-outlined hover\">settings</span>
\t\t<span class=\"tooltip-text\">Settings</span>
\t</a>
\t<a class=\"tooltip\">
\t\t<span class=\"material-icons-outlined hover\">account_circle</span>
\t\t<span class=\"tooltip-text\">Account</span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html.twig", "/home/litvin/BSUIR/POIT/4-term/wt/templates/nav.html.twig");
    }
}
