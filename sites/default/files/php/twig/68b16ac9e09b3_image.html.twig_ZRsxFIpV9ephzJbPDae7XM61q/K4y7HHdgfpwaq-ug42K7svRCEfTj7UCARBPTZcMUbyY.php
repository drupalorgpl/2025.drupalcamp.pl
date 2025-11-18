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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/image.html.twig */
class __TwigTemplate_840857f9d44c7feea58d3351f1ec6235 extends Template
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
        $context["classes"] = [((        // line 15
($context["style_name"] ?? null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass(($context["style_name"] ?? null)))) : (""))];
        // line 18
        yield "
";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "width", [], "any", false, false, true, 19))) {
            // line 20
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", ["width"], "method", false, false, true, 20);
        }
        // line 22
        yield "
";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "height", [], "any", false, false, true, 23))) {
            // line 24
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", ["height"], "method", false, false, true, 24);
        }
        // line 26
        yield "
<img";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
        yield " />
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["style_name", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/image.html.twig";
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
        return array (  68 => 27,  65 => 26,  61 => 24,  59 => 23,  56 => 22,  52 => 20,  50 => 19,  47 => 18,  45 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/image.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "if" => 19];
        static $filters = ["clean_class" => 15, "escape" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
