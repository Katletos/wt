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

/* base.html.twig */
class __TwigTemplate_359761c72ed3847ce3ccb816a9df0b8e extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<title>Keep</title>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"styles.css\"/>
\t</head>
\t<body>
\t\t<nav>
\t\t\t";
        // line 13
        $this->loadTemplate("nav.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</nav>

\t\t<main>
\t\t\t";
        // line 17
        $this->loadTemplate("form.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "\t\t\t";
        $this->loadTemplate("notes.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t";
        $this->loadTemplate("modal.html.twig", "base.html.twig", 19)->display($context);
        // line 20
        echo "\t\t</main>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  63 => 19,  60 => 18,  58 => 17,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/litvin/BSUIR/POIT/4-term/wt/templates/base.html.twig");
    }
}
