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

/* profiles/contrib/droopler/modules/custom/d_p_gallery/templates/field--paragraph--field-d-media-image--d-p-gallery.html.twig */
class __TwigTemplate_6d2f8d44db0db0b096d26e71dda715cd extends Template
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
        // line 40
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 42
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_type"] ?? null))), ("field--label-" .         // line 44
($context["label_display"] ?? null)), "text-center", "mt-4", "mb-n4"];
        // line 49
        yield "
";
        // line 51
        $context["item_classes"] = ["col-xl-3", "col-md-4", "col-sm-6", "mb-4", "field__item", "pr-0"];
        // line 59
        yield "
<div";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "field__items"], "method", false, false, true, 60), "html", null, true);
        yield ">
  <div class=\"row mr-0\">
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 63), "html", null, true);
            yield ">
        ";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64), "html", null, true);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_gallery/templates/field--paragraph--field-d-media-image--d-p-gallery.html.twig";
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
        return array (  80 => 67,  71 => 64,  66 => 63,  62 => 62,  57 => 60,  54 => 59,  52 => 51,  49 => 49,  47 => 44,  46 => 43,  45 => 42,  44 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_gallery/templates/field--paragraph--field-d-media-image--d-p-gallery.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_gallery/templates/field--paragraph--field-d-media-image--d-p-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 40, "for" => 62];
        static $filters = ["clean_class" => 42, "escape" => 60];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
