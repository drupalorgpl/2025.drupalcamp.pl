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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/navigation/views-mini-pager.html.twig */
class __TwigTemplate_89b42fca8e72639554ac6ce1d0d37f67 extends Template
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
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 14) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 14))) {
            // line 15
            yield "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"visually-hidden\">";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h4>
    <ul class=\"js-pager__items pagination\">
      ";
            // line 18
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18)) {
                // line 19
                yield "        <li>
          <a href=\"";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "href", [], "any", false, false, true, 20), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "attributes", [], "any", false, false, true, 20), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 22), "text", [], "any", true, true, true, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 22), "text", [], "any", false, false, true, 22), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 26
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 26)) {
                // line 27
                yield "        <li class=\"pager__item--current disabled\">
          ";
                // line 28
                yield t("Page @items.current", array("@items.current" => CoreExtension::getAttribute($this->env, $this->source,                 // line 29
($context["items"] ?? null), "current", [], "any", false, false, true, 29), ));
                // line 31
                yield "        </li>
      ";
            }
            // line 33
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 33)) {
                // line 34
                yield "        <li>
          <a href=\"";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 35), "href", [], "any", false, false, true, 35), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 35), "attributes", [], "any", false, false, true, 35), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 36
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 37), "text", [], "any", true, true, true, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 37), "text", [], "any", false, false, true, 37), t("››"))) : (t("››"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 41
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/navigation/views-mini-pager.html.twig";
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
        return array (  116 => 41,  109 => 37,  105 => 36,  97 => 35,  94 => 34,  91 => 33,  87 => 31,  85 => 29,  84 => 28,  81 => 27,  78 => 26,  71 => 22,  67 => 21,  59 => 20,  56 => 19,  54 => 18,  49 => 16,  46 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/navigation/views-mini-pager.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/navigation/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "trans" => 28];
        static $filters = ["t" => 16, "escape" => 20, "without" => 20, "default" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['t', 'escape', 'without', 'default'],
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
