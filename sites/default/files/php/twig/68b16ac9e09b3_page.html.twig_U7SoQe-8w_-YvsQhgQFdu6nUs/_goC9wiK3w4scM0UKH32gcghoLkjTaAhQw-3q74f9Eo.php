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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig */
class __TwigTemplate_9fb3fca0cf7f2b169aa36e3e70ac818e extends Template
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
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        $context["classes"] = ["navbar-wrapper"];
        // line 72
        yield "
<div";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_attributes"] ?? null), "html", null, true);
        yield ">

  ";
        // line 75
        if (( !($context["is_disabled_header"] ?? null) &&  !($context["is_cta_header"] ?? null))) {
            // line 76
            yield "    ";
            yield from $this->loadTemplate("@droopler_theme/includes/header.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 76)->unwrap()->yield($context);
            // line 77
            yield "  ";
        }
        // line 78
        yield "
  ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 79)) {
            // line 80
            yield "    <div class=\"highlighted\">
      <aside class=\"container section clearfix\" role=\"complementary\">
        ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 82), "html", null, true);
            yield "
      </aside>
    </div>
  ";
        }
        // line 86
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 86)) {
            // line 87
            yield "    ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 95
            yield "  ";
        }
        // line 96
        yield "
  ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 97)) {
            // line 98
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 98), "html", null, true);
            yield "
  ";
        }
        // line 100
        yield "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 101
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 124
        yield "  </div>
  ";
        // line 125
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 125) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 125)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 125))) {
            // line 126
            yield "    <div class=\"featured-bottom\">
      <aside class=\"container clearfix\" role=\"complementary\">
        ";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 128), "html", null, true);
            yield "
        ";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 129), "html", null, true);
            yield "
        ";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 130), "html", null, true);
            yield "
      </aside>
    </div>
  ";
        }
        // line 134
        yield "
  ";
        // line 135
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 138
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page_attributes", "is_disabled_header", "is_cta_header", "page", "main_attributes", "main_content_attributes", "section_attributes"]);        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_featured(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\"
               role=\"complementary\">
          ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 91), "html", null, true);
        yield "
        </aside>
      </div>
    ";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_top_content", [], "any", false, false, true, 102), "html", null, true);
        yield "
      <div";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_attributes"] ?? null), "html", null, true);
        yield ">
        <div class=\"row clearfix\">
          ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 105), "html", null, true);
        yield "
          <main";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_attributes"] ?? null), "html", null, true);
        yield ">
            <section";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_attributes"] ?? null), "html", null, true);
        yield ">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 109
        if (($context["is_cta_header"] ?? null)) {
            // line 110
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 110), "messages", [], "any", false, false, true, 110), "html", null, true);
            yield "
                <div class=\"position-relative\">
                  ";
            // line 112
            yield from $this->loadTemplate("@droopler_theme/includes/header.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 112)->unwrap()->yield($context);
            // line 113
            yield "                  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), "messages"), "html", null, true);
            yield "
                </div>
              ";
        } else {
            // line 116
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 116), "html", null, true);
            yield "
              ";
        }
        // line 118
        yield "            </section>
          </main>
        </div>
      </div>
      ";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom_content", [], "any", false, false, true, 122), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "    ";
        yield from $this->loadTemplate("@droopler_theme/includes/footer.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 136)->unwrap()->yield($context);
        // line 137
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig";
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
        return array (  239 => 137,  236 => 136,  229 => 135,  222 => 122,  216 => 118,  210 => 116,  203 => 113,  201 => 112,  195 => 110,  193 => 109,  188 => 107,  184 => 106,  180 => 105,  175 => 103,  170 => 102,  163 => 101,  154 => 91,  149 => 88,  142 => 87,  135 => 138,  133 => 135,  130 => 134,  123 => 130,  119 => 129,  115 => 128,  111 => 126,  109 => 125,  106 => 124,  104 => 101,  101 => 100,  95 => 98,  93 => 97,  90 => 96,  87 => 95,  84 => 87,  81 => 86,  74 => 82,  70 => 80,  68 => 79,  65 => 78,  62 => 77,  59 => 76,  57 => 75,  52 => 73,  49 => 72,  47 => 69,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 69, "if" => 75, "include" => 76, "block" => 87];
        static $filters = ["escape" => 73, "without" => 113];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
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
