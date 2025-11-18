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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig */
class __TwigTemplate_3543bc7cd0c0aa739e3b41e0c265726c extends Template
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
        // line 8
        yield "
";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["dropdown-menu"], "method", false, false, true, 9)) {
            // line 10
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["dropdown-menu"], "method", false, false, true, 10), "addClass", ["with-submenu"], "method", false, false, true, 10);
        }
        // line 12
        yield "
";
        // line 13
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "description", [], "any", false, false, true, 13))) {
            // line 14
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", ["description"], "method", false, false, true, 14);
        }
        // line 16
        yield "
";
        // line 17
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hide", [], "any", false, false, true, 17) - ($context["sub"] ?? null)) - ($context["when"] ?? null)) - Twig\Extension\CoreExtension::testEmpty(($context["collapse"] ?? null)))) {
            // line 18
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", ["hide-sub-when-collapse"], "method", false, false, true, 18);
        }
        // line 20
        yield "
<li ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 22
        if (Twig\Extension\CoreExtension::testEmpty(($context["href"] ?? null))) {
            // line 23
            yield "    <span data-drupal-link-system-path=\"<front>\" class=\"we-megamenu-nolink\">
      ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "

      ";
            // line 26
            if (($context["content"] ?? null)) {
                // line 27
                yield "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 29
            yield "    </span>
  ";
        } else {
            // line 31
            yield "    <a class=\"we-mega-menu-li\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "description", [], "any", false, false, true, 31), "html", null, true);
            yield "\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\" ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-target", [], "any", false, false, true, 31))) {
                yield " target=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-target", [], "any", false, false, true, 31), "html", null, true);
                yield "\" ";
            }
            yield ">
      ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", true, true, true, 32) && Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 32)))) {
                // line 33
                yield "        <i class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 33), "html", null, true);
                yield "\"></i>
      ";
            }
            // line 35
            yield "
      ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "

      ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", true, true, true, 38) && Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 38)))) {
                // line 39
                yield "        <span class=\"we-mega-menu-caption\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 39), "html", null, true);
                yield "</span>
      ";
            }
            // line 41
            yield "
      ";
            // line 42
            if (($context["content"] ?? null)) {
                // line 43
                yield "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 45
            yield "    </a>
  ";
        }
        // line 47
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "sub", "when", "collapse", "href", "title", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig";
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
        return array (  148 => 47,  144 => 45,  140 => 43,  138 => 42,  135 => 41,  129 => 39,  127 => 38,  122 => 36,  119 => 35,  113 => 33,  111 => 32,  98 => 31,  94 => 29,  90 => 27,  88 => 26,  83 => 24,  80 => 23,  78 => 22,  74 => 21,  71 => 20,  67 => 18,  65 => 17,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  49 => 10,  47 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 9, "set" => 10];
        static $filters = ["escape" => 21, "trim" => 32];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trim'],
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
