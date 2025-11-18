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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/misc/status-messages.html.twig */
class __TwigTemplate_60aae143082914e3b7ce2eeb3c2e0c90 extends Template
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            yield "  ";
            // line 30
            $context["classes"] = ["alert", "alert-dismissible", (((            // line 33
$context["type"] == "status")) ? ("alert-success") : ("")), (((            // line 34
$context["type"] == "warning")) ? ("alert-warning") : ("")), (((            // line 35
$context["type"] == "error")) ? ("alert-danger") : (""))];
            // line 38
            yield "  <div class=\"container\">
    <div role=\"alert\" aria-label=\"";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 39)), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "role", "aria-label"), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
            yield ">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        <span class=\"sr-only\">Close</span>
      </button>
      ";
            // line 44
            if ((($_v1 = ($context["status_headings"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 44))) {
                // line 45
                yield "        <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["status_headings"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 45)), "html", null, true);
                yield "</h2>
      ";
            }
            // line 47
            yield "      ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 48
                yield "        <ul>
          ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 50
                    yield "            <li>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "        </ul>
      ";
            } else {
                // line 54
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true);
                yield "
      ";
            }
            // line 56
            yield "    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/misc/status-messages.html.twig";
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
        return array (  105 => 56,  99 => 54,  95 => 52,  86 => 50,  82 => 49,  79 => 48,  76 => 47,  70 => 45,  68 => 44,  58 => 39,  55 => 38,  53 => 35,  52 => 34,  51 => 33,  50 => 30,  48 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/misc/status-messages.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 28, "set" => 30, "if" => 44];
        static $filters = ["escape" => 39, "without" => 39, "length" => 47, "first" => 54];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
