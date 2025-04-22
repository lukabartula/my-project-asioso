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

/* include/footer.html.twig */
class __TwigTemplate_efdd6808c2d9d47d09f34165325dd2fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "<div class=\"wrapperCentered\">
    <div class=\"wrapperRow\">
        <section class=\"one_quarter first\">
            <h2 class=\"title\">";
        // line 7
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "footer_block1_title", ["placeholder" => "LINK BLOCK"]);
        yield "</h2>
            <nav>
                <ul>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            yield "                        <li";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 11)) {
                yield " class=\"last\"";
            }
            yield ">
                            ";
            // line 12
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("footer_link1_" . $this->sandbox->ensureToStringAllowed($context["i"], 12, $this->source)), ["class" => "", "text" => "Lorem ipsum dolor sit"]);
            // line 15
            yield "
                        </li>
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                </ul>
            </nav>
        </section>
    
        ";
        // line 23
        yield "        <section class=\"one_quarter\">
            <h2 class=\"title\">";
        // line 24
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "footer_block2_title", ["placeholder" => "LINK BLOCK"]);
        yield "</h2>
            <nav>
                <ul>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            yield "                        <li";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 28)) {
                yield " class=\"last\"";
            }
            yield ">
                            ";
            // line 29
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("footer_link2_" . $this->sandbox->ensureToStringAllowed($context["i"], 29, $this->source)), ["class" => "", "text" => "Lorem ipsum dolor sit"]);
            // line 32
            yield "
                        </li>
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                </ul>
            </nav>
        </section>
    
        ";
        // line 40
        yield "        <section class=\"one_quarter\">
            <h2 class=\"title\">";
        // line 41
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "footer_block3_title", ["placeholder" => "LINK BLOCK"]);
        yield "</h2>
            <nav>
                <ul>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            yield "                        <li";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 45)) {
                yield " class=\"last\"";
            }
            yield ">
                            ";
            // line 46
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("footer_link3_" . $this->sandbox->ensureToStringAllowed($context["i"], 46, $this->source)), ["class" => "", "text" => "Lorem ipsum dolor sit"]);
            // line 49
            yield "
                        </li>
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                </ul>
            </nav>
        </section>
    
        ";
        // line 57
        yield "        <section class=\"one_quarter lastbox\">
            <h2 class=\"title\">";
        // line 58
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "footer_block4_title", ["placeholder" => "LINK BLOCK"]);
        yield "</h2>
            <nav>
                <ul>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            yield "                        <li";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 62)) {
                yield " class=\"last\"";
            }
            yield ">
                            ";
            // line 63
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ("footer_link4_" . $this->sandbox->ensureToStringAllowed($context["i"], 63, $this->source)), ["class" => "", "text" => "Lorem ipsum dolor sit"]);
            // line 66
            yield "
                        </li>
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
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                </ul>
            </nav>
        </section>
    </div>
    
    
    <div>
        <footer id=\"copyright\" class=\"clear\">
            <p class=\"fl_left\">Copyright &copy; ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - All Rights Reserved - Domain Name</p>
            <p class=\"fl_right\">Posao kod asioso</p>
        </footer>
    </div>
</div>

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
        return "include/footer.html.twig";
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
        return array (  287 => 77,  277 => 69,  261 => 66,  259 => 63,  252 => 62,  235 => 61,  229 => 58,  226 => 57,  220 => 52,  204 => 49,  202 => 46,  195 => 45,  178 => 44,  172 => 41,  169 => 40,  163 => 35,  147 => 32,  145 => 29,  138 => 28,  121 => 27,  115 => 24,  112 => 23,  106 => 18,  90 => 15,  88 => 12,  81 => 11,  64 => 10,  58 => 7,  53 => 4,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/include/footer.html.twig #}

{# Section 1 - First Link Block #}
<div class=\"wrapperCentered\">
    <div class=\"wrapperRow\">
        <section class=\"one_quarter first\">
            <h2 class=\"title\">{{ pimcore_input('footer_block1_title', {'placeholder': 'LINK BLOCK'}) }}</h2>
            <nav>
                <ul>
                    {% for i in range(1, 5) %}
                        <li{% if loop.last %} class=\"last\"{% endif %}>
                            {{ pimcore_link('footer_link1_' ~ i, {
                                'class': '',
                                'text': 'Lorem ipsum dolor sit'
                            }) }}
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
    
        {# Section 2 - Second Link Block #}
        <section class=\"one_quarter\">
            <h2 class=\"title\">{{ pimcore_input('footer_block2_title', {'placeholder': 'LINK BLOCK'}) }}</h2>
            <nav>
                <ul>
                    {% for i in range(1, 5) %}
                        <li{% if loop.last %} class=\"last\"{% endif %}>
                            {{ pimcore_link('footer_link2_' ~ i, {
                                'class': '',
                                'text': 'Lorem ipsum dolor sit'
                            }) }}
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
    
        {# Section 3 - Third Link Block #}
        <section class=\"one_quarter\">
            <h2 class=\"title\">{{ pimcore_input('footer_block3_title', {'placeholder': 'LINK BLOCK'}) }}</h2>
            <nav>
                <ul>
                    {% for i in range(1, 5) %}
                        <li{% if loop.last %} class=\"last\"{% endif %}>
                            {{ pimcore_link('footer_link3_' ~ i, {
                                'class': '',
                                'text': 'Lorem ipsum dolor sit'
                            }) }}
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
    
        {# Section 4 - Fourth Link Block #}
        <section class=\"one_quarter lastbox\">
            <h2 class=\"title\">{{ pimcore_input('footer_block4_title', {'placeholder': 'LINK BLOCK'}) }}</h2>
            <nav>
                <ul>
                    {% for i in range(1, 5) %}
                        <li{% if loop.last %} class=\"last\"{% endif %}>
                            {{ pimcore_link('footer_link4_' ~ i, {
                                'class': '',
                                'text': 'Lorem ipsum dolor sit'
                            }) }}
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
    </div>
    
    
    <div>
        <footer id=\"copyright\" class=\"clear\">
            <p class=\"fl_left\">Copyright &copy; {{ \"now\"|date(\"Y\") }} - All Rights Reserved - Domain Name</p>
            <p class=\"fl_right\">Posao kod asioso</p>
        </footer>
    </div>
</div>

", "include/footer.html.twig", "/var/www/html/templates/include/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 10, "if" => 11];
        static $filters = ["escape" => 77, "date" => 77];
        static $functions = ["pimcore_input" => 7, "range" => 10, "pimcore_link" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date'],
                ['pimcore_input', 'range', 'pimcore_link'],
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
