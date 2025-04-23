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

/* @PimcoreAdmin/admin/asset/get_preview_pdf_unsafe.html.twig */
class __TwigTemplate_852f2242acf971129bc88e6a1286c40a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/asset/get_preview_pdf_unsafe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/asset/get_preview_pdf_unsafe.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

    <style>

        /* hide from ie on mac \\*/
        html {
            height: 100%;
            overflow: hidden;
        }
        /* end hide */

        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #EEE;
        }

        #container {
            text-align: center;
            position: absolute;
            top:50%;
            margin-top: -200px;
            width: 100%;
        }

        #warning {
            position: relative;
            width: 40px;
            height: 40px;
            top: 13px;
        }

        #message {
            margin-left: 8px;
        }

    </style>

</head>

<body>

<div id=\"container\">
    <img alt=\"warning\" id=\"warning\" src=\"/bundles/pimcoreadmin/img/flat-color-icons/overlay-error.svg\" />
    <span id=\"message\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf_js_unsafe", [], "admin"), "html", null, true);
        yield "</span>
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
        return "@PimcoreAdmin/admin/asset/get_preview_pdf_unsafe.html.twig";
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
        return array (  100 => 49,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">

    <style>

        /* hide from ie on mac \\*/
        html {
            height: 100%;
            overflow: hidden;
        }
        /* end hide */

        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #EEE;
        }

        #container {
            text-align: center;
            position: absolute;
            top:50%;
            margin-top: -200px;
            width: 100%;
        }

        #warning {
            position: relative;
            width: 40px;
            height: 40px;
            top: 13px;
        }

        #message {
            margin-left: 8px;
        }

    </style>

</head>

<body>

<div id=\"container\">
    <img alt=\"warning\" id=\"warning\" src=\"/bundles/pimcoreadmin/img/flat-color-icons/overlay-error.svg\" />
    <span id=\"message\">{{ 'pdf_js_unsafe'|trans([], 'admin') }}</span>
</div>


</body>
</html>
", "@PimcoreAdmin/admin/asset/get_preview_pdf_unsafe.html.twig", "/var/www/html/vendor/pimcore/admin-ui-classic-bundle/templates/admin/asset/get_preview_pdf_unsafe.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 49, "trans" => 49];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
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
