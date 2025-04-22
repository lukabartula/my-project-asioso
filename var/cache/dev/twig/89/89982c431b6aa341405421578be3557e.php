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

/* areas/news/view.html.twig */
class __TwigTemplate_fbdd4c6e8d2240808226cebe19ca80f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/news/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/news/view.html.twig"));

        // line 1
        $context["newsList"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "data_object_listing", "News");
        // line 2
        CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsList"]) || array_key_exists("newsList", $context) ? $context["newsList"] : (function () { throw new RuntimeError('Variable "newsList" does not exist.', 2, $this->source); })()), "setLimit", [3], "method", false, false, true, 2);
        // line 3
        CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsList"]) || array_key_exists("newsList", $context) ? $context["newsList"] : (function () { throw new RuntimeError('Variable "newsList" does not exist.', 3, $this->source); })()), "setOrderKey", ["o_creationDate"], "method", false, false, true, 3);
        // line 4
        CoreExtension::getAttribute($this->env, $this->source, (isset($context["newsList"]) || array_key_exists("newsList", $context) ? $context["newsList"] : (function () { throw new RuntimeError('Variable "newsList" does not exist.', 4, $this->source); })()), "setOrder", ["DESC"], "method", false, false, true, 4);
        // line 5
        yield "
<div class=\"news-grid\">
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newsList"]) || array_key_exists("newsList", $context) ? $context["newsList"] : (function () { throw new RuntimeError('Variable "newsList" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 9
            yield "            <div class=\"col-md-4\">
                <div class=\"news-item\">
                    ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, $context["news"], "getImage", [], "method", false, false, true, 11)) {
                // line 12
                yield "                        ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["news"], "getImage", [], "method", false, false, true, 12), "getThumbnail", ["newsGrid"], "method", false, false, true, 12), "getHTML", [["class" => "img-fluid", "imgAttributes" => ["width" => 290, "height" => 180]]], "method", false, false, true, 12), 12, $this->source);
                // line 18
                yield "
                    ";
            }
            // line 20
            yield "                    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "getTitle", [], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            yield "</h3>
                    <p>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "getSummary", [], "method", false, false, true, 21), 21, $this->source)), 0, 150) . "..."), "html", null, true);
            yield "</p>
                    <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('pimcore_url')->getCallable()(["prefix" => "/news", "id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["news"], "getId", [], "method", false, false, true, 24), 24, $this->source)]), "html", null, true);
            // line 25
            yield "\" class=\"read-more\">Read More >>></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['news'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    </div>
</div>

<style>
.news-grid {
    padding: 2rem 0;
}
.news-item {
    margin-bottom: 2rem;
    padding: 1rem;
    border: 1px solid #eee;
    border-radius: 4px;
}
.news-item h3 {
    margin: 1rem 0;
    font-size: 1.2rem;
}
.read-more {
    display: inline-block;
    margin-top: 1rem;
    color: #007bff;
    text-decoration: none;
}
</style> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "areas/news/view.html.twig";
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
        return array (  101 => 29,  92 => 25,  90 => 24,  89 => 22,  85 => 21,  80 => 20,  76 => 18,  73 => 12,  71 => 11,  67 => 9,  63 => 8,  58 => 5,  56 => 4,  54 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set newsList = pimcore_data_object_listing('News') %}
{% do newsList.setLimit(3) %}
{% do newsList.setOrderKey('o_creationDate') %}
{% do newsList.setOrder('DESC') %}

<div class=\"news-grid\">
    <div class=\"row\">
        {% for news in newsList %}
            <div class=\"col-md-4\">
                <div class=\"news-item\">
                    {% if news.getImage() %}
                        {{ news.getImage().getThumbnail('newsGrid').getHTML({
                            class: 'img-fluid',
                            imgAttributes: {
                                width: 290,
                                height: 180
                            }
                        })|raw }}
                    {% endif %}
                    <h3>{{ news.getTitle() }}</h3>
                    <p>{{ news.getSummary()|striptags|slice(0, 150) ~ '...' }}</p>
                    <a href=\"{{ pimcore_url({
                        prefix: '/news',
                        id: news.getId()
                    }) }}\" class=\"read-more\">Read More >>></a>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<style>
.news-grid {
    padding: 2rem 0;
}
.news-item {
    margin-bottom: 2rem;
    padding: 1rem;
    border: 1px solid #eee;
    border-radius: 4px;
}
.news-item h3 {
    margin: 1rem 0;
    font-size: 1.2rem;
}
.read-more {
    display: inline-block;
    margin-top: 1rem;
    color: #007bff;
    text-decoration: none;
}
</style> ", "areas/news/view.html.twig", "/var/www/html/templates/areas/news/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "do" => 2, "for" => 8, "if" => 11];
        static $filters = ["raw" => 18, "escape" => 20, "slice" => 21, "striptags" => 21];
        static $functions = ["pimcore_data_object_listing" => 1, "pimcore_url" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'do', 'for', 'if'],
                ['raw', 'escape', 'slice', 'striptags'],
                ['pimcore_data_object_listing', 'pimcore_url'],
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
