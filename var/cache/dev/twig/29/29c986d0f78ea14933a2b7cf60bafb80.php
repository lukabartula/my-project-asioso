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
class __TwigTemplate_70d0fe6ef343267b97b0d54824a7cc9a extends Template
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
        yield "<section id=\"services\" class=\"clear\">
    ";
        // line 2
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "      
        
            ";
            // line 5
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relations", "news", ["types" => ["object"], "subtypes" => ["object" => ["object"]], "classes" => ["News"]]);
            // line 12
            yield "
    
    ";
        }
        // line 15
        yield "    ";
        $context["news"] = $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "relations", "news");
        // line 16
        yield "    ";
        $context["lastIndex"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 16, $this->source); })()), "elementIds", [], "any", false, false, true, 16), 16, $this->source));
        // line 17
        yield "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 18, $this->source); })()));
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
            // line 19
            yield "        <article class=\"one_third ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 19) == (isset($context["lastIndex"]) || array_key_exists("lastIndex", $context) ? $context["lastIndex"] : (function () { throw new RuntimeError('Variable "lastIndex" does not exist.', 19, $this->source); })()))) {
                yield " lastbox  ";
            }
            yield "\">
            <figure>
                ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", true, true, true, 21) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", false, false, true, 21)))) {
                // line 22
                yield "                    ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "media", [], "any", false, false, true, 22), "thumbnail", [["width" => 290, "height" => 180]], "method", false, false, true, 22), "html", [], "any", false, false, true, 22), 22, $this->source);
                yield "
                ";
            } else {
                // line 24
                yield "                    <img src=\"images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
                ";
            }
            // line 26
            yield "             
                <figcaption>
                    <h2 class='news-head'>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            yield "</h2>
                    <p class='news-short-desc'>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "shortDescription", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            yield "</p>
                    <footer class=\"more\"><a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('pimcore_url')->getCallable()(["id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "getId", [], "method", false, false, true, 30), 30, $this->source)], "news-detail"), "html", null, true);
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
        // line 35
        yield "  
</section>";
        
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
        return array (  143 => 35,  124 => 30,  120 => 29,  116 => 28,  112 => 26,  108 => 24,  102 => 22,  100 => 21,  92 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  61 => 12,  59 => 5,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"services\" class=\"clear\">
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
                    {{ element.media.thumbnail({'width':290,'height':180}).html|raw }}
                {% else %}
                    <img src=\"images/demo/290x180.gif\" width=\"290\" height=\"180\" alt=\"\">
                {% endif %}
             
                <figcaption>
                    <h2 class='news-head'>{{element.title}}</h2>
                    <p class='news-short-desc'>{{element.shortDescription}}</p>
                    <footer class=\"more\"><a href=\"{{pimcore_url({'id':element.getId()},'news-detail')}}\">Read More &raquo;</a></footer>
                </figcaption>
            </figure>
        </article>
    {% endfor %}
  
</section>", "areas/news/view.html.twig", "/var/www/html/templates/areas/news/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "set" => 15, "for" => 18];
        static $filters = ["length" => 16, "raw" => 22, "escape" => 28];
        static $functions = ["pimcore_relations" => 5, "pimcore_url" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'raw', 'escape'],
                ['pimcore_relations', 'pimcore_url'],
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
