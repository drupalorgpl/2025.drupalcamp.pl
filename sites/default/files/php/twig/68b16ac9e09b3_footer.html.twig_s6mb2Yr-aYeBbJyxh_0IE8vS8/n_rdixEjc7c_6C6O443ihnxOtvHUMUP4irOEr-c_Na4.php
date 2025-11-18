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

/* @droopler_theme/includes/footer.html.twig */
class __TwigTemplate_cd1d8cf5ade7be185f2722643dc1c696 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<footer class=\"site-footer\">
  ";
        // line 38
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 58
        yield "  <div class=\"bottom-footer\">
    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_main", [], "any", false, false, true, 59), "html", null, true);
        yield "
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "filled_regions"]);        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"container\">
      ";
        // line 40
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 40) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 40)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 40)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 40))) {
            // line 41
            yield "        <div class=\"site-footer-blocks row\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filled_regions"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["region"]) {
                // line 43
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filled_regions"] ?? null)) == ($context["i"] + 1))) {
                    // line 44
                    yield "              ";
                    $context["classes"] = (((($context["i"] == 0) || ($context["i"] % 2 != 0))) ? ("col") : (["col-6", "col-xl"]));
                    // line 45
                    yield "            ";
                } else {
                    // line 46
                    yield "              ";
                    $context["classes"] = ["col-6", "col-xl-2"];
                    // line 47
                    yield "            ";
                }
                // line 48
                yield "
            ";
                // line 49
                $context["footer_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 50
                yield "            <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), "html", null, true);
                yield ">
              ";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["page"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["region"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), $context["region"], [], "array", false, false, true, 51)), "html", null, true);
                yield "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['i'], $context['region'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "        </div>
      ";
        }
        // line 56
        yield "    </div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@droopler_theme/includes/footer.html.twig";
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
        return array (  120 => 56,  116 => 54,  107 => 51,  102 => 50,  100 => 49,  97 => 48,  94 => 47,  91 => 46,  88 => 45,  85 => 44,  82 => 43,  78 => 42,  75 => 41,  73 => 40,  70 => 39,  63 => 38,  53 => 59,  50 => 58,  48 => 38,  45 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@droopler_theme/includes/footer.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/includes/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 38, "if" => 40, "for" => 42, "set" => 44];
        static $filters = ["escape" => 59, "length" => 43];
        static $functions = ["create_attribute" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'length'],
                ['create_attribute'],
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
