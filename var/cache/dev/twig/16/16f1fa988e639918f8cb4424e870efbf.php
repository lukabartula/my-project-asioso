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

/* areas/hero-image/view.html.twig */
class __TwigTemplate_6ae997dc24d95000804a24587b205f20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-image/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "areas/hero-image/view.html.twig"));

        // line 1
        yield "

<section id=\"slider\" style=\"position: relative; text-align: center;\">

  ";
        // line 5
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "heroImage", ["class" => "hero-image", "alt" => "Hero Image", "thumbnail" => ["width" => 960, "height" => 360], "default" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/demo/centenario960x360.jpg")]);
        // line 13
        yield "

  <div class=\"hero-overlay-text\"
       style=\"position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
              color: white;  padding: 20px; border-radius: 10px;\">
    <h1>";
        // line 18
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heroTitle", ["width" => 400]);
        yield "</h1>
    <p>";
        // line 19
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heroSubtitle", ["width" => 600]);
        yield "</p>


  </div>

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
        return "areas/hero-image/view.html.twig";
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
        return array (  69 => 19,  65 => 18,  58 => 13,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<section id=\"slider\" style=\"position: relative; text-align: center;\">

  {{ pimcore_image('heroImage', {
    class: 'hero-image',
    alt: 'Hero Image',
    thumbnail:  {
            \"width\": 960,
            \"height\": 360,
        },
    default: asset('images/demo/centenario960x360.jpg')
  }) }}

  <div class=\"hero-overlay-text\"
       style=\"position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);
              color: white;  padding: 20px; border-radius: 10px;\">
    <h1>{{ pimcore_input('heroTitle', { width: 400 }) }}</h1>
    <p>{{ pimcore_input('heroSubtitle', { width: 600 }) }}</p>


  </div>

</section>", "areas/hero-image/view.html.twig", "/var/www/html/templates/areas/hero-image/view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["pimcore_image" => 5, "asset" => 12, "pimcore_input" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['pimcore_image', 'asset', 'pimcore_input'],
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
