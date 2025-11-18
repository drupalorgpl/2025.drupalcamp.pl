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

/* profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig */
class __TwigTemplate_728dcc40481a185f3f0b53c67c6deccf extends Template
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
        // line 10
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "main_attributes"]);    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "  ";
        yield from $this->loadTemplate("@droopler_theme/misc/listing-header.html.twig", "profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["header_class" => "blog-header-wrapper", "title" => (($_v0 =         // line 15
($context["page"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "#title", [], "array", false, false, true, 15))]));
        // line 17
        yield "
  <div";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_attributes"] ?? null), "html", null, true);
        yield ">
    <div class=\"row clearfix\">
      ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 20), "html", null, true);
        yield "
      <main class=\"main-content\">
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), "droopler_subtheme_pagetitle"), "html", null, true);
        yield "
        </section>
      </main>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig";
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
        return array (  80 => 24,  73 => 20,  68 => 18,  65 => 17,  63 => 15,  61 => 13,  54 => 12,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_blog/templates/page--blog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 10, "include" => 13];
        static $filters = ["escape" => 18, "without" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'include'],
                ['escape', 'without'],
                [],
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
