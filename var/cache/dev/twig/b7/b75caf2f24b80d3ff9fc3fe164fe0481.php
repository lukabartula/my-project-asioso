<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* web2print/layout.html.twig */
class __TwigTemplate_332155b5fb5f2fa12d05bf1424e2cfdf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "web2print/layout.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"\">
<head>

    <style type=\"text/css\">

        @page {
            counter-increment: page;

            -ro-scale-content: none;
            hyphens: auto;

            size: A4 portrait;
            margin:15mm 14mm 14mm 14mm;

        }

    </style>

    <style type=\"text/css\" media=\"screen\">
        body {
            background:#CCC;
        }

        .site {
            margin:0 auto;
            width: 21cm;
            padding:1cm 0 1cm 0;
        }

        .page {
            width: 21cm;
            padding:0.5cm 0 0.5cm 0;
            background:#FFF;
            -webkit-box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);

            position: relative;
        }
    </style>


    ";
        // line 45
        if ((array_key_exists("printermarks", $context) && ((isset($context["printermarks"]) || array_key_exists("printermarks", $context) ? $context["printermarks"] : (function () { throw new RuntimeError('Variable "printermarks" does not exist.', 45, $this->source); })()) == true))) {
            // line 46
            yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/print/print-printermarks.css\" media=\"print\" />
    ";
        }
        // line 48
        yield "
</head>

<body>
<div class=\"site\">
    ";
        // line 53
        yield from         $this->unwrap()->yieldBlock("content", $context, $blocks);
        yield "
</div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "web2print/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  109 => 53,  102 => 48,  98 => 46,  96 => 45,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"\">
<head>

    <style type=\"text/css\">

        @page {
            counter-increment: page;

            -ro-scale-content: none;
            hyphens: auto;

            size: A4 portrait;
            margin:15mm 14mm 14mm 14mm;

        }

    </style>

    <style type=\"text/css\" media=\"screen\">
        body {
            background:#CCC;
        }

        .site {
            margin:0 auto;
            width: 21cm;
            padding:1cm 0 1cm 0;
        }

        .page {
            width: 21cm;
            padding:0.5cm 0 0.5cm 0;
            background:#FFF;
            -webkit-box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.2);

            position: relative;
        }
    </style>


    {% if printermarks is defined and printermarks == true %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/pimcoreadmin/css/print/print-printermarks.css\" media=\"print\" />
    {% endif %}

</head>

<body>
<div class=\"site\">
    {{ block('content') }}
</div>

</body>
</html>
", "web2print/layout.html.twig", "/var/www/html/templates/web2print/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 45];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
