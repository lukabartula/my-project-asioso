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
class __TwigTemplate_ef2c3a3f89921e72f468141896fedd31 extends Template
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
            'nav_links' => [$this, 'block_nav_links'],
            'content' => [$this, 'block_content'],
            'footer_blocks' => [$this, 'block_footer_blocks'],
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
  <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/layout.css"), "html", null, true);
        yield "\" type=\"text/css\">
  <!--[if lt IE 9]><script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/html5shiv.js"), "html", null, true);
        yield "\"></script><![endif]-->
  ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
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
</head>
<body>
  <div class=\"wrapper row1\">
    <header id=\"header\" class=\"clear\">
      <div id=\"hgroup\">
        <h1><a href=\"#\">Company Logo</a></h1>
        <h2>HTML5 Website Template</h2>
      </div>
      <nav>
        <ul>
          ";
        // line 93
        yield from $this->unwrap()->yieldBlock('nav_links', $context, $blocks);
        // line 100
        yield "        </ul>
      </nav>
    </header>
  </div>

  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">
      ";
        // line 107
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 110
        yield "
      ";
        // line 112
        yield "      ";
        yield from $this->loadTemplate("include/footer.html.twig", "layout.html.twig", 112)->unwrap()->yield($context);
        // line 113
        yield "
    </div>
  </div>

  <div class=\"wrapper row3\">
    <div id=\"footer\" class=\"clear\">
      ";
        // line 119
        yield from $this->unwrap()->yieldBlock('footer_blocks', $context, $blocks);
        // line 124
        yield "    </div>
  </div>


  <div class=\"wrapper row4\">
    <footer id=\"copyright\" class=\"clear\">
      <p class=\"fl_left\">Copyright &copy; ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - All Rights Reserved - <a href=\"#\">Domain Name</a></p>
      <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\" title=\"Zaposlite se kod nas\">asioso</a></p>
    </footer>
  </div>

  ";
        // line 135
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 136
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

    // line 9
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

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_links"));

        // line 94
        yield "            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li class=\"last\"><a href=\"#\">Text Link</a></li>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "      
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_blocks(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_blocks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_blocks"));

        // line 120
        yield "        ";
        if (Pimcore\Model\Document::getById("/include/footer")) {
            // line 121
            yield "          ";
            yield $this->env->getFunction('pimcore_inc')->getCallable()(Pimcore\Model\Document::getById("/include/footer"));
            yield "
        ";
        }
        // line 123
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
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
        return array (  353 => 135,  342 => 123,  336 => 121,  333 => 120,  320 => 119,  308 => 108,  295 => 107,  279 => 94,  266 => 93,  244 => 9,  221 => 6,  208 => 136,  206 => 135,  198 => 130,  190 => 124,  188 => 119,  180 => 113,  177 => 112,  174 => 110,  172 => 107,  163 => 100,  161 => 93,  76 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  56 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layout.html.twig #}
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}asioso test template{% endblock %}</title>
  <link rel=\"stylesheet\" href=\"{{ asset('styles/layout.css') }}\" type=\"text/css\">
  <!--[if lt IE 9]><script src=\"{{ asset('scripts/html5shiv.js') }}\"></script><![endif]-->
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
</head>
<body>
  <div class=\"wrapper row1\">
    <header id=\"header\" class=\"clear\">
      <div id=\"hgroup\">
        <h1><a href=\"#\">Company Logo</a></h1>
        <h2>HTML5 Website Template</h2>
      </div>
      <nav>
        <ul>
          {% block nav_links %}
            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li><a href=\"#\">Text Link</a></li>
            <li class=\"last\"><a href=\"#\">Text Link</a></li>
          {% endblock %}
        </ul>
      </nav>
    </header>
  </div>

  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">
      {% block content %}
      
      {% endblock %}

      {# Include the dynamic footer #}
      {% include 'include/footer.html.twig' %}

    </div>
  </div>

  <div class=\"wrapper row3\">
    <div id=\"footer\" class=\"clear\">
      {% block footer_blocks %}
        {% if pimcore_document('/include/footer') %}
          {{ pimcore_inc(pimcore_document('/include/footer')) }}
        {% endif %}
      {% endblock %}
    </div>
  </div>


  <div class=\"wrapper row4\">
    <footer id=\"copyright\" class=\"clear\">
      <p class=\"fl_left\">Copyright &copy; {{ \"now\"|date(\"Y\") }} - All Rights Reserved - <a href=\"#\">Domain Name</a></p>
      <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\" title=\"Zaposlite se kod nas\">asioso</a></p>
    </footer>
  </div>

  {% block javascripts %}{% endblock %}
</body>
</html>
", "layout.html.twig", "/var/www/html/templates/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 6, "include" => 112, "if" => 120];
        static $filters = ["escape" => 7, "date" => 130];
        static $functions = ["asset" => 7, "pimcore_document" => 120, "pimcore_inc" => 121];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include', 'if'],
                ['escape', 'date'],
                ['asset', 'pimcore_document', 'pimcore_inc'],
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
