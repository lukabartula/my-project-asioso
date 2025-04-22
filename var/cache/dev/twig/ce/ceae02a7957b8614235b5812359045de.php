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

/* areas/text-with-image/view.html.twig */
class __TwigTemplate_cf9cffbe45f2d875f25b49dcdb15238b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/text-with-image/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/text-with-image/view.html.twig"));

        // line 1
        $context["layoutSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "layout", ["store" => [["left", "Left side Image"], ["right", "Right side Image"]], "defaultValue" => "left", "reload" => true]);
        // line 9
        yield "
";
        // line 10
        $context["imagePosition"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["layoutSelect"]) || array_key_exists("layoutSelect", $context) ? $context["layoutSelect"] : (function () { throw new RuntimeError('Variable "layoutSelect" does not exist.', 10, $this->source); })()), "getData", [], "method", false, false, true, 10);
        // line 11
        yield "
<section class=\"text-with-image ";
        // line 12
        if (((isset($context["imagePosition"]) || array_key_exists("imagePosition", $context) ? $context["imagePosition"] : (function () { throw new RuntimeError('Variable "imagePosition" does not exist.', 12, $this->source); })()) == "right")) {
            yield "image-right";
        } else {
            yield "image-left";
        }
        yield "\">
    ";
        // line 13
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "    <div class=\"layout-selector\">
        <label>Layout:</label>
        ";
            // line 16
            yield $this->sandbox->ensureToStringAllowed((isset($context["layoutSelect"]) || array_key_exists("layoutSelect", $context) ? $context["layoutSelect"] : (function () { throw new RuntimeError('Variable "layoutSelect" does not exist.', 16, $this->source); })()), 16, $this->source);
            yield "
    </div>
    ";
        }
        // line 19
        yield "
    <div class=\"content-wrapper\">
        ";
        // line 22
        yield "        <div class=\"image-column\">
            ";
        // line 23
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "content", "width" => 450, "height" => 250, "class" => "content-image"]);
        // line 28
        yield "
        </div>

        ";
        // line 32
        yield "        <div class=\"text-column\">
            <h2>";
        // line 33
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Enter headline here"]);
        yield "</h2>
            <div class=\"summary\">
                ";
        // line 35
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "text", ["height" => "200px", "placeholder" => "Enter your text here"]);
        // line 38
        yield "
            </div>
        </div>
    </div>
</section>

";
        // line 44
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "<style>
.text-with-image {
    padding: 20px;
    background: #f5f5f5;
    margin: 10px 0;
}

.layout-selector {
    margin-bottom: 15px;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
}

.content-wrapper {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.image-right .content-wrapper {
    flex-direction: row-reverse;
}

.image-column, .text-column {
    flex: 1;
}

.content-image {
    width: 100%;
    height: auto;
    background: #ddd;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-column h2 {
    margin-top: 0;
}

.pimcore_input_label {
    font-weight: bold;
    margin-right: 10px;
}
</style>
";
        } else {
            // line 93
            yield "<style>
.text-with-image {
    margin: 40px 0;
}

.content-wrapper {
    display: flex;
    gap: 30px;
    align-items: center;
}

.image-right .content-wrapper {
    flex-direction: row-reverse;
}

.image-column, .text-column {
    flex: 1;
}

.content-image {
    width: 100%;
    height: auto;
}

.text-column h2 {
    margin-top: 0;
    margin-bottom: 20px;
}

.summary {
    line-height: 1.6;
}
</style>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "areas/text-with-image/view.html.twig";
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
        return array (  164 => 93,  114 => 45,  112 => 44,  104 => 38,  102 => 35,  97 => 33,  94 => 32,  89 => 28,  87 => 23,  84 => 22,  80 => 19,  74 => 16,  70 => 14,  68 => 13,  60 => 12,  57 => 11,  55 => 10,  52 => 9,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set layoutSelect = pimcore_select('layout', {
    'store': [
        ['left', 'Left side Image'],
        ['right', 'Right side Image']
    ],
    'defaultValue': 'left',
    'reload': true
}) %}

{% set imagePosition = layoutSelect.getData() %}

<section class=\"text-with-image {% if imagePosition == 'right' %}image-right{% else %}image-left{% endif %}\">
    {% if editmode %}
    <div class=\"layout-selector\">
        <label>Layout:</label>
        {{ layoutSelect|raw }}
    </div>
    {% endif %}

    <div class=\"content-wrapper\">
        {# Image column #}
        <div class=\"image-column\">
            {{ pimcore_image('image', {
                'thumbnail': 'content',
                'width': 450,
                'height': 250,
                'class': 'content-image'
            }) }}
        </div>

        {# Text column #}
        <div class=\"text-column\">
            <h2>{{ pimcore_input('headline', {'placeholder': 'Enter headline here'}) }}</h2>
            <div class=\"summary\">
                {{ pimcore_wysiwyg('text', {
                    'height': '200px',
                    'placeholder': 'Enter your text here'
                }) }}
            </div>
        </div>
    </div>
</section>

{% if editmode %}
<style>
.text-with-image {
    padding: 20px;
    background: #f5f5f5;
    margin: 10px 0;
}

.layout-selector {
    margin-bottom: 15px;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
}

.content-wrapper {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.image-right .content-wrapper {
    flex-direction: row-reverse;
}

.image-column, .text-column {
    flex: 1;
}

.content-image {
    width: 100%;
    height: auto;
    background: #ddd;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-column h2 {
    margin-top: 0;
}

.pimcore_input_label {
    font-weight: bold;
    margin-right: 10px;
}
</style>
{% else %}
<style>
.text-with-image {
    margin: 40px 0;
}

.content-wrapper {
    display: flex;
    gap: 30px;
    align-items: center;
}

.image-right .content-wrapper {
    flex-direction: row-reverse;
}

.image-column, .text-column {
    flex: 1;
}

.content-image {
    width: 100%;
    height: auto;
}

.text-column h2 {
    margin-top: 0;
    margin-bottom: 20px;
}

.summary {
    line-height: 1.6;
}
</style>
{% endif %}", "areas/text-with-image/view.html.twig", "/var/www/html/templates/areas/text-with-image/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 12];
        static $filters = ["raw" => 16];
        static $functions = ["pimcore_select" => 1, "pimcore_image" => 23, "pimcore_input" => 33, "pimcore_wysiwyg" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['raw'],
                ['pimcore_select', 'pimcore_image', 'pimcore_input', 'pimcore_wysiwyg'],
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
