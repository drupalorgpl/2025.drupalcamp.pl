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

/* profiles/contrib/droopler/modules/custom/d_blog/templates/pager--blog-listing--page.html.twig */
class __TwigTemplate_aac71965ca91fbc34190e6ed81242062 extends Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            yield "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h4>
    <ul class=\"pagination\">
      ";
            // line 37
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 37)) {
                // line 38
                yield "        <li class=\"page-item pager__item--first\">
          <a href=\"";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39), "href", [], "any", false, false, true, 39), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39), "attributes", [], "any", false, false, true, 39), "href", "title"), "html", null, true);
                yield ">
            <span aria-hidden=\"true\">«</span>
            <span class=\"sr-only\">";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 41), "text", [], "any", true, true, true, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "text", [], "any", false, false, true, 41), t("First"))) : (t("First"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 45
            yield "      ";
            // line 46
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 46)) {
                // line 47
                yield "        <li class=\"page-item pager__item--previous\">
          <a href=\"";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48), "href", [], "any", false, false, true, 48), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48), "attributes", [], "any", false, false, true, 48), "href", "title", "rel"), "html", null, true);
                yield ">
            <span aria-hidden=\"true\">‹</span>
            <span class=\"sr-only\">";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 50), "text", [], "any", true, true, true, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "text", [], "any", false, false, true, 50), t("Previous"))) : (t("Previous"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 54
            yield "      ";
            // line 55
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 55)) {
                // line 56
                yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 58
            yield "      ";
            // line 59
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 59));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 60
                yield "        <li class=\"page-item ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                yield "\">
          ";
                // line 61
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 62
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 63
                    yield "          ";
                } else {
                    // line 64
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 65
                    yield "          ";
                }
                // line 66
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 66), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">
              ";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                yield "
            </span>";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 71
                yield "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      ";
            // line 75
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 75)) {
                // line 76
                yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 78
            yield "      ";
            // line 79
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79)) {
                // line 80
                yield "        <li class=\"page-item pager__item--next\">
          <a href=\"";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 81), "href", [], "any", false, false, true, 81), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 81), "attributes", [], "any", false, false, true, 81), "href", "title", "rel"), "html", null, true);
                yield ">
            <span aria-hidden=\"true\">›</span>
            <span class=\"sr-only\">";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 83), "text", [], "any", true, true, true, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 83), "text", [], "any", false, false, true, 83), t("Next"))) : (t("Next"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 87
            yield "      ";
            // line 88
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 88)) {
                // line 89
                yield "        <li class=\"page-item pager__item--last\">
          <a href=\"";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 90), "href", [], "any", false, false, true, 90), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 90), "attributes", [], "any", false, false, true, 90), "href", "title"), "html", null, true);
                yield ">
            <span aria-hidden=\"true\">»</span>
            <span class=\"sr-only\">";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 92), "text", [], "any", true, true, true, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 92), "text", [], "any", false, false, true, 92), t("Last"))) : (t("Last"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 96
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/pager--blog-listing--page.html.twig";
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
        return array (  216 => 96,  209 => 92,  200 => 90,  197 => 89,  194 => 88,  192 => 87,  185 => 83,  176 => 81,  173 => 80,  170 => 79,  168 => 78,  164 => 76,  161 => 75,  159 => 74,  151 => 71,  149 => 70,  145 => 68,  135 => 66,  132 => 65,  129 => 64,  126 => 63,  123 => 62,  121 => 61,  116 => 60,  111 => 59,  109 => 58,  105 => 56,  102 => 55,  100 => 54,  93 => 50,  84 => 48,  81 => 47,  78 => 46,  76 => 45,  69 => 41,  60 => 39,  57 => 38,  54 => 37,  49 => 34,  46 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/pager--blog-listing--page.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_blog/templates/pager--blog-listing--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 32, "for" => 59, "set" => 62];
        static $filters = ["t" => 34, "escape" => 39, "without" => 39, "default" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
