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

/* @droopler_theme/includes/header.html.twig */
class __TwigTemplate_7b56d4e8773e2fd9018375f2dd128326 extends Template
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
        // line 42
        $context["header_classes"] = ["container", "no-padding-md", ((        // line 45
($context["is_cta_header"] ?? null)) ? ("hanging-header") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 46)) ? ("alert-ladning-header") : (""))];
        // line 48
        yield "
<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\">
  <nav";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), "html", null, true);
        yield ">
    <div class=\"";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["header_classes"] ?? null), " "), "html", null, true);
        yield "\">
      <div class=\"navbar-brand d-flex align-items-center\">
        ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), "html", null, true);
        yield "
      </div>
      ";
        // line 55
        if (($context["is_cta_header"] ?? null)) {
            // line 56
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["cta_button"] ?? null))) {
                // line 57
                yield "          <div class=\"d-content-cta-wrapper\">
            ";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["cta_button"] ?? null)), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 61
            yield "      ";
        } else {
            // line 62
            yield "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-nav\" aria-controls=\"navbar-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <nav class=\"navbar navbar-expand-lg main-navbar px-0 collapse ml-auto flex-column d-lg-flex\" id=\"navbar-nav\">
          <div class=\"navbar-inner d-flex\">
            ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 67)) {
                // line 68
                yield "              <div class=\"secondary-menu-region\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 68), "html", null, true);
                yield "</div>
            ";
            }
            // line 70
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 70)) {
                // line 71
                yield "              <div class=\"menu-region\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 71), "html", null, true);
                yield "</div>
            ";
            }
            // line 73
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "lang_menu", [], "any", false, false, true, 73)) {
                // line 74
                yield "              <div class=\"lang-region\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "lang_menu", [], "any", false, false, true, 74), "html", null, true);
                yield "</div>
            ";
            }
            // line 76
            yield "          </div>
        </nav>
      ";
        }
        // line 79
        yield "    </div>
  </nav>
</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_cta_header", "page", "navbar_attributes", "classes", "cta_button"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@droopler_theme/includes/header.html.twig";
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
        return array (  124 => 79,  119 => 76,  113 => 74,  110 => 73,  104 => 71,  101 => 70,  95 => 68,  93 => 67,  86 => 62,  83 => 61,  77 => 58,  74 => 57,  71 => 56,  69 => 55,  64 => 53,  59 => 51,  55 => 50,  51 => 49,  48 => 48,  46 => 46,  45 => 45,  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@droopler_theme/includes/header.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "if" => 55];
        static $filters = ["t" => 49, "escape" => 50, "join" => 51, "render" => 58];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'join', 'render'],
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
