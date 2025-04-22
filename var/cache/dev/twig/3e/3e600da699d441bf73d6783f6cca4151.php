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
class __TwigTemplate_f2b2dafcb243c473448ed8cebf40bc85 extends Template
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

        // line 13
        yield "
<footer class=\"footer\">
    <div class=\"footer-content\">
        ";
        // line 16
        $macros["footer"] = $this->macros["footer"] = $this;
        // line 17
        yield "        
        <div class=\"footer-links\">
            ";
        // line 20
        yield "            ";
        yield $macros["footer"]->getTemplateForMacro("macro_linkBlock", $context, 20, $this->getSourceContext())->macro_linkBlock(...["Block 1"]);
        yield "
            ";
        // line 21
        yield $macros["footer"]->getTemplateForMacro("macro_linkBlock", $context, 21, $this->getSourceContext())->macro_linkBlock(...["Block 2"]);
        yield "
            ";
        // line 22
        yield $macros["footer"]->getTemplateForMacro("macro_linkBlock", $context, 22, $this->getSourceContext())->macro_linkBlock(...["Block 3"]);
        yield "
            ";
        // line 23
        yield $macros["footer"]->getTemplateForMacro("macro_linkBlock", $context, 23, $this->getSourceContext())->macro_linkBlock(...["Block 4"]);
        yield "
        </div>

        <div class=\"footer-bottom\">
            <div class=\"copyright\">
                ";
        // line 28
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "copyright", ["placeholder" => "© 2024 - All Rights Reserved"]);
        yield "
            </div>
            <div class=\"footer-extra\">
                ";
        // line 31
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "privacy_policy", ["class" => "footer-link"]);
        yield "
                ";
        // line 32
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "terms", ["class" => "footer-link"]);
        yield "
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background: #333;
    color: #fff;
    padding: 40px 0 20px;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-links {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.link-block h4 {
    color: #fff;
    margin-bottom: 15px;
    font-size: 16px;
    text-transform: uppercase;
}

.link-item {
    margin-bottom: 10px;
}

.link-item a {
    color: #aaa;
    text-decoration: none;
    transition: color 0.3s;
}

.link-item a:hover {
    color: #fff;
}

.footer-bottom {
    border-top: 1px solid #444;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
}

.footer-link {
    color: #aaa;
    text-decoration: none;
    margin-left: 20px;
    transition: color 0.3s;
}

.footer-link:hover {
    color: #fff;
}

";
        // line 99
        if ((isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 99, $this->source); })())) {
            // line 100
            yield ".footer {
    background: #2a2a2a;
}

.link-block {
    background: #333;
    padding: 15px;
    border-radius: 4px;
}

.pimcore_block_entry {
    margin: 5px 0;
}

.pimcore_block_buttons {
    margin-top: 10px;
}

.pimcore_block_amount {
    color: #aaa;
    font-size: 12px;
}

.pimcore_block_plus,
.pimcore_block_minus,
.pimcore_block_up,
.pimcore_block_down {
    color: #fff;
    background: #444;
    padding: 3px 8px;
    margin: 0 2px;
    border-radius: 3px;
    cursor: pointer;
}

.pimcore_block_plus:hover,
.pimcore_block_minus:hover,
.pimcore_block_up:hover,
.pimcore_block_down:hover {
    background: #555;
}
";
        }
        // line 142
        yield "</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    public function macro_linkBlock($blockTitle = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "blockTitle" => $blockTitle,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "linkBlock"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "linkBlock"));

            // line 3
            yield "    ";
            $context["blockName"] = ("links_" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["blockTitle"]) || array_key_exists("blockTitle", $context) ? $context["blockTitle"] : (function () { throw new RuntimeError('Variable "blockTitle" does not exist.', 3, $this->source); })()), 3, $this->source)), [" " => "_"]));
            // line 4
            yield "    <div class=\"link-block\">
        <h4>";
            // line 5
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", ("block_title_" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["blockTitle"]) || array_key_exists("blockTitle", $context) ? $context["blockTitle"] : (function () { throw new RuntimeError('Variable "blockTitle" does not exist.', 5, $this->source); })()), 5, $this->source)), [" " => "_"])));
            yield "</h4>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", (isset($context["blockName"]) || array_key_exists("blockName", $context) ? $context["blockName"] : (function () { throw new RuntimeError('Variable "blockName" does not exist.', 6, $this->source); })()))));
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
                // line 7
                yield "            <div class=\"link-item\">
                ";
                // line 8
                yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", ((("link_" . $this->sandbox->ensureToStringAllowed((isset($context["blockName"]) || array_key_exists("blockName", $context) ? $context["blockName"] : (function () { throw new RuntimeError('Variable "blockName" does not exist.', 8, $this->source); })()), 8, $this->source)) . "_") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 8), 8, $this->source)));
                yield "
            </div>
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
            // line 11
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
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
        return array (  285 => 11,  268 => 8,  265 => 7,  248 => 6,  244 => 5,  241 => 4,  238 => 3,  220 => 2,  208 => 142,  164 => 100,  162 => 99,  92 => 32,  88 => 31,  82 => 28,  74 => 23,  70 => 22,  66 => 21,  61 => 20,  57 => 17,  55 => 16,  50 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Footer Link Block Template #}
{% macro linkBlock(blockTitle) %}
    {% set blockName = 'links_' ~ blockTitle|lower|replace({' ': '_'}) %}
    <div class=\"link-block\">
        <h4>{{ pimcore_input('block_title_' ~ blockTitle|lower|replace({' ': '_'})) }}</h4>
        {% for i in pimcore_iterate_block(pimcore_block(blockName)) %}
            <div class=\"link-item\">
                {{ pimcore_link('link_' ~ blockName ~ '_' ~ loop.index) }}
            </div>
        {% endfor %}
    </div>
{% endmacro %}

<footer class=\"footer\">
    <div class=\"footer-content\">
        {% import _self as footer %}
        
        <div class=\"footer-links\">
            {# Create 4 link blocks #}
            {{ footer.linkBlock('Block 1') }}
            {{ footer.linkBlock('Block 2') }}
            {{ footer.linkBlock('Block 3') }}
            {{ footer.linkBlock('Block 4') }}
        </div>

        <div class=\"footer-bottom\">
            <div class=\"copyright\">
                {{ pimcore_input('copyright', {'placeholder': '© 2024 - All Rights Reserved'}) }}
            </div>
            <div class=\"footer-extra\">
                {{ pimcore_link('privacy_policy', {'class': 'footer-link'}) }}
                {{ pimcore_link('terms', {'class': 'footer-link'}) }}
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background: #333;
    color: #fff;
    padding: 40px 0 20px;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-links {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.link-block h4 {
    color: #fff;
    margin-bottom: 15px;
    font-size: 16px;
    text-transform: uppercase;
}

.link-item {
    margin-bottom: 10px;
}

.link-item a {
    color: #aaa;
    text-decoration: none;
    transition: color 0.3s;
}

.link-item a:hover {
    color: #fff;
}

.footer-bottom {
    border-top: 1px solid #444;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
}

.footer-link {
    color: #aaa;
    text-decoration: none;
    margin-left: 20px;
    transition: color 0.3s;
}

.footer-link:hover {
    color: #fff;
}

{% if editmode %}
.footer {
    background: #2a2a2a;
}

.link-block {
    background: #333;
    padding: 15px;
    border-radius: 4px;
}

.pimcore_block_entry {
    margin: 5px 0;
}

.pimcore_block_buttons {
    margin-top: 10px;
}

.pimcore_block_amount {
    color: #aaa;
    font-size: 12px;
}

.pimcore_block_plus,
.pimcore_block_minus,
.pimcore_block_up,
.pimcore_block_down {
    color: #fff;
    background: #444;
    padding: 3px 8px;
    margin: 0 2px;
    border-radius: 3px;
    cursor: pointer;
}

.pimcore_block_plus:hover,
.pimcore_block_minus:hover,
.pimcore_block_up:hover,
.pimcore_block_down:hover {
    background: #555;
}
{% endif %}
</style>
", "include/footer.html.twig", "/var/www/html/templates/include/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 2, "import" => 16, "if" => 99, "set" => 3, "for" => 6];
        static $filters = ["replace" => 3, "lower" => 3];
        static $functions = ["pimcore_input" => 28, "pimcore_link" => 31, "pimcore_iterate_block" => 6, "pimcore_block" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'import', 'if', 'set', 'for'],
                ['replace', 'lower'],
                ['pimcore_input', 'pimcore_link', 'pimcore_iterate_block', 'pimcore_block'],
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
