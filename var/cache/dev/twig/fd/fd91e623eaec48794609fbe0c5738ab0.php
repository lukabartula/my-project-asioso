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
class __TwigTemplate_c6da41b651a333cca6d1c0492ff39390 extends Template
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
        yield "
";
        // line 2
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 2, $this->source); })())) {
            // line 3
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
            // line 51
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
        // line 85
        yield "



";
        // line 89
        $context["layoutSelect"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "select", "layout", ["store" => [["left", "Left side Image"], ["right", "Right side Image"]], "defaultValue" => "left", "reload" => true]);
        // line 97
        yield "
";
        // line 98
        $context["imagePosition"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["layoutSelect"]) || array_key_exists("layoutSelect", $context) ? $context["layoutSelect"] : (function () { throw new RuntimeError('Variable "layoutSelect" does not exist.', 98, $this->source); })()), "getData", [], "method", false, false, true, 98);
        // line 99
        yield "
<section class=\"text-with-image ";
        // line 100
        if (((isset($context["imagePosition"]) || array_key_exists("imagePosition", $context) ? $context["imagePosition"] : (function () { throw new RuntimeError('Variable "imagePosition" does not exist.', 100, $this->source); })()) == "right")) {
            yield "image-right";
        } else {
            yield "image-left";
        }
        yield "\">
    ";
        // line 101
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 101, $this->source); })())) {
            // line 102
            yield "    <div class=\"layout-selector\">
        <label>Layout:</label>
        ";
            // line 104
            yield $this->sandbox->ensureToStringAllowed((isset($context["layoutSelect"]) || array_key_exists("layoutSelect", $context) ? $context["layoutSelect"] : (function () { throw new RuntimeError('Variable "layoutSelect" does not exist.', 104, $this->source); })()), 104, $this->source);
            yield "
    </div>
    ";
        }
        // line 107
        yield "
    <div class=\"content-wrapper\">
        <div class=\"image-column\">
            ";
        // line 110
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "image", ["thumbnail" => "content", "class" => "content-image"]);
        // line 113
        yield "
        </div>


        <div class=\"text-column\">
            <h2>";
        // line 118
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "headline", ["placeholder" => "Enter headline here"]);
        yield "</h2>
            <div class=\"summary\">
                ";
        // line 120
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "text", ["height" => "200px", "placeholder" => "Enter your text here"]);
        // line 123
        yield "
                <footer class=\"more\">
                    ";
        // line 125
        $context["link"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "link");
        // line 126
        yield "                    ";
        yield $this->sandbox->ensureToStringAllowed((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 126, $this->source); })()), 126, $this->source);
        yield "
                </footer>
            </div>
        </div>
    </div>
</section>

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
        return array (  204 => 126,  202 => 125,  198 => 123,  196 => 120,  191 => 118,  184 => 113,  182 => 110,  177 => 107,  171 => 104,  167 => 102,  165 => 101,  157 => 100,  154 => 99,  152 => 98,  149 => 97,  147 => 89,  141 => 85,  105 => 51,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
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
{% endif %}




{% set layoutSelect = pimcore_select('layout', {
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
        <div class=\"image-column\">
            {{ pimcore_image('image', {
                'thumbnail': 'content',
                'class': 'content-image'
            }) }}
        </div>


        <div class=\"text-column\">
            <h2>{{ pimcore_input('headline', {'placeholder': 'Enter headline here'}) }}</h2>
            <div class=\"summary\">
                {{ pimcore_wysiwyg('text', {
                    'height': '200px',
                    'placeholder': 'Enter your text here'
                }) }}
                <footer class=\"more\">
                    {% set link = pimcore_link('link') %}
                    {{ link|raw }}
                </footer>
            </div>
        </div>
    </div>
</section>

", "areas/text-with-image/view.html.twig", "/var/www/html/templates/areas/text-with-image/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "set" => 89];
        static $filters = ["raw" => 104];
        static $functions = ["pimcore_select" => 89, "pimcore_image" => 110, "pimcore_input" => 118, "pimcore_wysiwyg" => 120, "pimcore_link" => 125];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['raw'],
                ['pimcore_select', 'pimcore_image', 'pimcore_input', 'pimcore_wysiwyg', 'pimcore_link'],
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
