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

/* news/detail.html.twig */
class __TwigTemplate_d94c282f5c3cde0e765116fd9e4bebbb extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/detail.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "news/detail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"container news-detail\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 7, $this->source); })()), "getTitle", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        yield "</h1>
            
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 9, $this->source); })()), "getImage", [], "method", false, false, true, 9)) {
            // line 10
            yield "                <div class=\"news-image\">
                    ";
            // line 11
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 11, $this->source); })()), "getImage", [], "method", false, false, true, 11), "getThumbnail", ["newsDetail"], "method", false, false, true, 11), "getHTML", [["class" => "img-fluid", "imgAttributes" => ["width" => 450, "height" => 250]]], "method", false, false, true, 11), 11, $this->source);
            // line 17
            yield "
                </div>
            ";
        }
        // line 20
        yield "            
            <div class=\"news-summary\">
                ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 22, $this->source); })()), "getSummary", [], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        yield "
            </div>
            
            <div class=\"news-content\">
                ";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 26, $this->source); })()), "getArticle", [], "method", false, false, true, 26), 26, $this->source);
        yield "
            </div>
            
            <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('pimcore_url')->getCallable()(["document" => Pimcore\Model\Document::getById(1)]), "html", null, true);
        yield "\" class=\"btn btn-primary mt-4\">
                Back to Home
            </a>
        </div>
    </div>
</div>

<style>
.news-detail {
    padding: 2rem 0;
}
.news-image {
    margin: 2rem 0;
}
.news-summary {
    font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 2rem;
}
.news-content {
    line-height: 1.6;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "news/detail.html.twig";
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
        return array (  117 => 29,  111 => 26,  104 => 22,  100 => 20,  95 => 17,  93 => 11,  90 => 10,  88 => 9,  83 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block content %}
<div class=\"container news-detail\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>{{ news.getTitle() }}</h1>
            
            {% if news.getImage() %}
                <div class=\"news-image\">
                    {{ news.getImage().getThumbnail('newsDetail').getHTML({
                        class: 'img-fluid',
                        imgAttributes: {
                            width: 450,
                            height: 250
                        }
                    })|raw }}
                </div>
            {% endif %}
            
            <div class=\"news-summary\">
                {{ news.getSummary() }}
            </div>
            
            <div class=\"news-content\">
                {{ news.getArticle()|raw }}
            </div>
            
            <a href=\"{{ pimcore_url({document: pimcore_document(1)}) }}\" class=\"btn btn-primary mt-4\">
                Back to Home
            </a>
        </div>
    </div>
</div>

<style>
.news-detail {
    padding: 2rem 0;
}
.news-image {
    margin: 2rem 0;
}
.news-summary {
    font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 2rem;
}
.news-content {
    line-height: 1.6;
}
</style>
{% endblock %} ", "news/detail.html.twig", "/var/www/html/templates/news/detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 9];
        static $filters = ["escape" => 7, "raw" => 17];
        static $functions = ["pimcore_url" => 29, "pimcore_document" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape', 'raw'],
                ['pimcore_url', 'pimcore_document'],
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
