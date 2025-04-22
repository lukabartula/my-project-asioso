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

/* layout.html.twig */
class __TwigTemplate_226eec22dce7003292e2bcd9ee147a83 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 8
        yield "  <style>
    html{overflow-y:scroll;}
    body{margin:0; padding:0; font-size:13px; font-family:Georgia, \"Times New Roman\", Times, serif; color:#919191; background-color:#232323;}
    .clear:after{content:\".\"; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
    .clear{display:block; clear:both;}
    html[xmlns] .clear{display:block;}
    * html .clear{height:1%;}
    a{outline:none; text-decoration:none;}
    code{font-weight:normal; font-style:normal; font-family:Georgia, \"Times New Roman\", Times, serif;}
    .fl_left{float:left;}
    .fl_right{float:right;}
    img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
    .imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
    .imgl{float:left; margin:0 15px 15px 0; clear:left;}
    .imgr{float:right; margin:0 0 15px 15px; clear:right;}
    address, article, aside, figcaption, figure, footer, header, nav, section{display:block; margin:0; padding:0;}
    q{display:block; padding:0 10px 8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
    q:before{content:'� '; font-size:26px;}
    q:after{content:' �'; font-size:26px; line-height:0;}
    div.wrapper{display:block; width:100%; margin:0; padding:0; text-align:left;}
    .wrapperCentered {display:flex; flex-direction:column; justify-content: center; align-items:center;}
    .wrapperRow{display:flex; flex-direction:row; place-content:center;}
    .row1, .row1 a{color:#C0BAB6; background-color:#333333;}
    .row2{color:#979797; background-color:#FFFFFF;}
    .row2 a{color:#93bd32; background-color:#FFFFFF;}
    .row3{color:#989898; background-color:#333333;}
    .row3 a{color:#93bd32; background-color:#333333;}
    .row4, .row4 a{color:#919191; background-color:#232323;}
    #header, #container, #footer, #copyright{display:block; width:960px; margin:0 auto;}
    nav ul{margin:0; padding:0; list-style:none;}
    h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:32px; font-weight:normal; font-style:italic; line-height:normal;}
    address{font-style:normal;}
    blockquote, q{display:block; padding:8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
    blockquote:before, q:before{content:'� '; font-size:26px;}
    blockquote:after, q:after{content:' �'; font-size:26px; line-height:0;}
    form, fieldset, legend{margin:0; padding:0; border:none;}
    legend{display:none;}
    input, textarea, select{font-size:12px; font-family:Georgia,\"Times New Roman\",Times,serif;}
    .one_quarter, .two_quarter, .three_quarter, .four_quarter{display:block; float:left; margin:0 20px 0 0;}
    .one_quarter{width:225px;}
    .two_quarter{width:470px;}
    .three_quarter{width:715px;}
    .four_quarter{width:960px; float:none; margin-right:0; clear:both;}
    .one_third, .two_third, .three_third{display:block; float:left; margin:0 30px 0 0;}
    .one_third{width:300px;}
    .two_third{width:630px;}
    .three_third{width:960px; float:none; margin-right:0; clear:both;}
    .lastbox{margin-right:0;}
    #header{padding:20px 0;}
    #header #hgroup{float:left; margin:0 0 20px 0;}
    #header #hgroup h1, #header #hgroup h2{font-weight:normal; font-style:normal; text-transform:none;}
    #header #hgroup h1{font-size:36px;}
    #header #hgroup h2{font-size:13px;}
    #header nav{display:block; float:right; margin:10px 0 0 0; padding:20px 0; color:#C0BAB6; background-color:#232323;}
    #header nav ul{padding:0 20px;}
    #header nav li{display:inline; margin-right:25px; text-transform:uppercase;}
    #header nav li.last{margin-right:0;}
    #header nav li a{color:#C0BAB6; background-color:#232323;}
    #header nav li a:hover{color:#93bd32; background-color:#232323;}
    #container{padding:30px 0;}
    #container section{display:block; width:100%; margin:0 0 30px 0; padding:0;}
    #container .last{margin:0;}
    #container .more{text-align:right;}
    #container #homepage{display:block; width:100%; line-height:1.8em;}
    #container #homepage #services article figure img{margin:0 0 15px 0; padding:4px; border:1px solid #D6D6D6;}
    #container #homepage #services article figure h2{font-size:14px; font-weight:bold;}
    #container #homepage #intro article figure img{float:right; margin:0 0 10px 0; padding:4px; border:1px solid #D6D6D6;}
    #container #homepage #intro article figure figcaption{float:left; width:460px;}
    #footer{padding:30px 0; font-size:12px; line-height:1.4em;}
    #footer section h2.title{margin:0 0 25px 0; padding:0; color:#FFFFFF; background-color:#333333; font-size:12px; font-weight:bold; text-transform:uppercase;}
    #footer section nav li{margin:0 0 5px 0; padding:0 0 5px 0; border-bottom:1px solid #555555;}
    #footer section nav li.last{margin:0;}
    #copyright{padding:20px 0;}
    #copyright p{margin:0; padding: 0;}
  </style>

";
        // line 84
        if (( !array_key_exists("document", $context) ||  !(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 84, $this->source); })()))) {
            // line 85
            yield "    ";
            $context["document"] = Pimcore\Model\Document::getById(1);
        }
        // line 87
        yield "
";
        // line 88
        $context["navStartNode"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 88, $this->source); })()), "getProperty", ["navigationRoot"], "method", false, false, true, 88);
        // line 89
        if ( !$this->env->getTest('instanceof')->getCallable()((isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 89, $this->source); })()), "\\Pimcore\\Model\\Document\\Page")) {
            // line 90
            yield "    ";
            $context["navStartNode"] = Pimcore\Model\Document::getById(1);
        }
        // line 92
        yield "
";
        // line 93
        $context["mainNavigation"] = $this->env->getFunction('pimcore_build_nav')->getCallable()(["active" => $this->sandbox->ensureToStringAllowed(        // line 94
(isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 94, $this->source); })()), 94, $this->source), "root" => $this->sandbox->ensureToStringAllowed(        // line 95
(isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 95, $this->source); })()), 95, $this->source)]);
        // line 97
        yield "


</head>
<body>
<div class=\"wrapper row1\">
  <header id=\"header\" class=\"clear\">
    <div id=\"hgroup\">
      <h1><a href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["navStartNode"]) || array_key_exists("navStartNode", $context) ? $context["navStartNode"] : (function () { throw new RuntimeError('Variable "navStartNode" does not exist.', 105, $this->source); })()), 105, $this->source), "html", null, true);
        yield "\">Company Logo</a></h1>
      <h2>HTML5 Website Template</h2>
    </div>
    <nav class='navigation'>
        ";
        // line 109
        yield $this->env->getFunction('pimcore_render_nav')->getCallable()($this->sandbox->ensureToStringAllowed(        // line 110
(isset($context["mainNavigation"]) || array_key_exists("mainNavigation", $context) ? $context["mainNavigation"] : (function () { throw new RuntimeError('Variable "mainNavigation" does not exist.', 110, $this->source); })()), 110, $this->source), "menu", "renderMenu", ["maxDepth" => 2, "ulClass" => ["", "dropdown dropdown-menu", "default" => "dropdown-menu dropdown-submenu"]]);
        // line 118
        yield "
    
    </nav>
  </header>
</div>


  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">
      ";
        // line 127
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 130
        yield "
    </div>
  </div>


  
";
        // line 136
        yield from $this->loadTemplate("include/footer.html.twig", "layout.html.twig", 136)->unwrap()->yield($context);
        // line 137
        yield "


  

  ";
        // line 142
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 143
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "asioso test template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
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

        // line 128
        yield "      
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.html.twig";
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
        return array (  303 => 142,  291 => 128,  278 => 127,  256 => 7,  233 => 6,  220 => 143,  218 => 142,  211 => 137,  209 => 136,  201 => 130,  199 => 127,  188 => 118,  186 => 110,  185 => 109,  178 => 105,  168 => 97,  166 => 95,  165 => 94,  164 => 93,  161 => 92,  157 => 90,  155 => 89,  153 => 88,  150 => 87,  146 => 85,  144 => 84,  66 => 8,  64 => 7,  60 => 6,  54 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layout.html.twig #}
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}asioso test template{% endblock %}</title>
  {% block stylesheets %}{% endblock %}
  <style>
    html{overflow-y:scroll;}
    body{margin:0; padding:0; font-size:13px; font-family:Georgia, \"Times New Roman\", Times, serif; color:#919191; background-color:#232323;}
    .clear:after{content:\".\"; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
    .clear{display:block; clear:both;}
    html[xmlns] .clear{display:block;}
    * html .clear{height:1%;}
    a{outline:none; text-decoration:none;}
    code{font-weight:normal; font-style:normal; font-family:Georgia, \"Times New Roman\", Times, serif;}
    .fl_left{float:left;}
    .fl_right{float:right;}
    img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
    .imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
    .imgl{float:left; margin:0 15px 15px 0; clear:left;}
    .imgr{float:right; margin:0 0 15px 15px; clear:right;}
    address, article, aside, figcaption, figure, footer, header, nav, section{display:block; margin:0; padding:0;}
    q{display:block; padding:0 10px 8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
    q:before{content:'� '; font-size:26px;}
    q:after{content:' �'; font-size:26px; line-height:0;}
    div.wrapper{display:block; width:100%; margin:0; padding:0; text-align:left;}
    .wrapperCentered {display:flex; flex-direction:column; justify-content: center; align-items:center;}
    .wrapperRow{display:flex; flex-direction:row; place-content:center;}
    .row1, .row1 a{color:#C0BAB6; background-color:#333333;}
    .row2{color:#979797; background-color:#FFFFFF;}
    .row2 a{color:#93bd32; background-color:#FFFFFF;}
    .row3{color:#989898; background-color:#333333;}
    .row3 a{color:#93bd32; background-color:#333333;}
    .row4, .row4 a{color:#919191; background-color:#232323;}
    #header, #container, #footer, #copyright{display:block; width:960px; margin:0 auto;}
    nav ul{margin:0; padding:0; list-style:none;}
    h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:32px; font-weight:normal; font-style:italic; line-height:normal;}
    address{font-style:normal;}
    blockquote, q{display:block; padding:8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
    blockquote:before, q:before{content:'� '; font-size:26px;}
    blockquote:after, q:after{content:' �'; font-size:26px; line-height:0;}
    form, fieldset, legend{margin:0; padding:0; border:none;}
    legend{display:none;}
    input, textarea, select{font-size:12px; font-family:Georgia,\"Times New Roman\",Times,serif;}
    .one_quarter, .two_quarter, .three_quarter, .four_quarter{display:block; float:left; margin:0 20px 0 0;}
    .one_quarter{width:225px;}
    .two_quarter{width:470px;}
    .three_quarter{width:715px;}
    .four_quarter{width:960px; float:none; margin-right:0; clear:both;}
    .one_third, .two_third, .three_third{display:block; float:left; margin:0 30px 0 0;}
    .one_third{width:300px;}
    .two_third{width:630px;}
    .three_third{width:960px; float:none; margin-right:0; clear:both;}
    .lastbox{margin-right:0;}
    #header{padding:20px 0;}
    #header #hgroup{float:left; margin:0 0 20px 0;}
    #header #hgroup h1, #header #hgroup h2{font-weight:normal; font-style:normal; text-transform:none;}
    #header #hgroup h1{font-size:36px;}
    #header #hgroup h2{font-size:13px;}
    #header nav{display:block; float:right; margin:10px 0 0 0; padding:20px 0; color:#C0BAB6; background-color:#232323;}
    #header nav ul{padding:0 20px;}
    #header nav li{display:inline; margin-right:25px; text-transform:uppercase;}
    #header nav li.last{margin-right:0;}
    #header nav li a{color:#C0BAB6; background-color:#232323;}
    #header nav li a:hover{color:#93bd32; background-color:#232323;}
    #container{padding:30px 0;}
    #container section{display:block; width:100%; margin:0 0 30px 0; padding:0;}
    #container .last{margin:0;}
    #container .more{text-align:right;}
    #container #homepage{display:block; width:100%; line-height:1.8em;}
    #container #homepage #services article figure img{margin:0 0 15px 0; padding:4px; border:1px solid #D6D6D6;}
    #container #homepage #services article figure h2{font-size:14px; font-weight:bold;}
    #container #homepage #intro article figure img{float:right; margin:0 0 10px 0; padding:4px; border:1px solid #D6D6D6;}
    #container #homepage #intro article figure figcaption{float:left; width:460px;}
    #footer{padding:30px 0; font-size:12px; line-height:1.4em;}
    #footer section h2.title{margin:0 0 25px 0; padding:0; color:#FFFFFF; background-color:#333333; font-size:12px; font-weight:bold; text-transform:uppercase;}
    #footer section nav li{margin:0 0 5px 0; padding:0 0 5px 0; border-bottom:1px solid #555555;}
    #footer section nav li.last{margin:0;}
    #copyright{padding:20px 0;}
    #copyright p{margin:0; padding: 0;}
  </style>

{% if not document is defined or not document %}
    {% set document = pimcore_document(1) %}
{% endif %}

{% set navStartNode = document.getProperty('navigationRoot') %}
{% if not navStartNode is instanceof('\\\\Pimcore\\\\Model\\\\Document\\\\Page') %}
    {% set navStartNode = pimcore_document(1) %}
{% endif %}

{% set mainNavigation = pimcore_build_nav({
    active: document,
    root: navStartNode
}) %}



</head>
<body>
<div class=\"wrapper row1\">
  <header id=\"header\" class=\"clear\">
    <div id=\"hgroup\">
      <h1><a href=\"{{ navStartNode }}\">Company Logo</a></h1>
      <h2>HTML5 Website Template</h2>
    </div>
    <nav class='navigation'>
        {{
            pimcore_render_nav(mainNavigation, 'menu', 'renderMenu', {
                maxDepth: 2,
                ulClass: {
                    0: '',
                    1: 'dropdown dropdown-menu',
                    'default': 'dropdown-menu dropdown-submenu'
                }
            })
        }}
    
    </nav>
  </header>
</div>


  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">
      {% block content %}
      
      {% endblock %}

    </div>
  </div>


  
{% include 'include/footer.html.twig' %}



  

  {% block javascripts %}{% endblock %}
</body>
</html>
", "layout.html.twig", "/var/www/html/templates/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 6, "if" => 84, "set" => 85, "include" => 136];
        static $filters = ["escape" => 105];
        static $functions = ["pimcore_document" => 85, "pimcore_build_nav" => 93, "pimcore_render_nav" => 110];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'include'],
                ['escape'],
                ['pimcore_document', 'pimcore_build_nav', 'pimcore_render_nav'],
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
