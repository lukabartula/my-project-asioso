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
class __TwigTemplate_d598bdad507774b4fd475c245ebb0023 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "
<section id=\"services\" class=\"clear\">
    ";
        // line 30
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 30, $this->source); })())) {
            // line 31
            yield "      
        
            ";
            // line 33
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relations", "news", ["types" => ["object"], "subtypes" => ["object" => ["object"]], "classes" => ["News"]]);
            // line 40
            yield "
    
    ";
        }
        // line 43
        yield "    ";
        $context["news"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relations", "news");
        // line 44
        yield "    ";
        $context["lastIndex"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 44, $this->source); })()), "elementIds", [], "any", false, false, true, 44), 44, $this->source));
        // line 45
        yield "
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 46, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["element"]) {
            // line 47
            yield "        <article class=\"one_third ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 47) == (isset($context["lastIndex"]) || array_key_exists("lastIndex", $context) ? $context["lastIndex"] : (function () { throw new RuntimeError('Variable "lastIndex" does not exist.', 47, $this->source); })()))) {
                yield " lastbox  ";
            }
            yield "\">
            <figure>
                ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", true, true, true, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", false, false, true, 49)))) {
                // line 50
                yield "                    ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", false, false, true, 50), "thumbnail", ["news"], "method", false, false, true, 50), "html", [], "any", false, false, true, 50), 50, $this->source);
                yield "
                ";
            } else {
                // line 52
                yield "                    <img src=\"images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
                ";
            }
            // line 54
            yield "             
                <figcaption>
                    <h5 class=\"news-title\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            yield "</h5>
                    <p class='news-short-desc'>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "shortDescription", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            yield "</p>
                    <footer class=\"more\"><a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_details", ["id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "getId", [], "method", false, false, true, 58), 58, $this->source)]), "html", null, true);
            yield "\">Read More &raquo;</a></footer>
                </figcaption>
            </figure>
        </article>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "  
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        yield "<style>
    .news-title {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
        padding: 0.5rem 0;
    }

    article.one_third figure {
        position: relative;
        height: 100%;
    }

    article.one_third figcaption {
        position: relative;
        min-height: 140px;
        padding-bottom: 10px;
    }

    footer.more {
        position: absolute;
        bottom: 10px;
        right: 10px;
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
        return array (  172 => 2,  159 => 1,  147 => 63,  128 => 58,  124 => 57,  120 => 56,  116 => 54,  112 => 52,  106 => 50,  104 => 49,  96 => 47,  79 => 46,  76 => 45,  73 => 44,  70 => 43,  65 => 40,  63 => 33,  59 => 31,  57 => 30,  53 => 28,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
<style>
    .news-title {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        line-height: 1.3;
        padding: 0.5rem 0;
    }

    article.one_third figure {
        position: relative;
        height: 100%;
    }

    article.one_third figcaption {
        position: relative;
        min-height: 140px;
        padding-bottom: 10px;
    }

    footer.more {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>
{% endblock %}

<section id=\"services\" class=\"clear\">
    {% if editmode %}
      
        
            {{ pimcore_relations(\"news\",{\"types\": [\"object\"],
                    \"subtypes\": {
                        \"object\": [\"object\"]
                    },
                    \"classes\": [\"News\"] ,
                
                })
            }}
    
    {% endif %}
    {% set news =  pimcore_relations(\"news\") %}
    {% set lastIndex = news.elementIds|length %}

    {% for key,element in news %}
        <article class=\"one_third {% if loop.index == lastIndex %} lastbox  {% endif %}\">
            <figure>
                {% if element.media is defined and element.media is not empty %}
                    {{ element.media.thumbnail('news').html|raw }}
                {% else %}
                    <img src=\"images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
                {% endif %}
             
                <figcaption>
                    <h5 class=\"news-title\">{{element.title}}</h5>
                    <p class='news-short-desc'>{{element.shortDescription}}</p>
                    <footer class=\"more\"><a href=\"{{ path('news_details', {id: element.getId()}) }}\">Read More &raquo;</a></footer>
                </figcaption>
            </figure>
        </article>
    {% endfor %}
  
</section>", "areas/news/view.html.twig", "/var/www/html/templates/areas/news/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "if" => 30, "set" => 43, "for" => 46];
        static $filters = ["length" => 44, "raw" => 50, "escape" => 56];
        static $functions = ["pimcore_relations" => 33, "path" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'for'],
                ['length', 'raw', 'escape'],
                ['pimcore_relations', 'path'],
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
