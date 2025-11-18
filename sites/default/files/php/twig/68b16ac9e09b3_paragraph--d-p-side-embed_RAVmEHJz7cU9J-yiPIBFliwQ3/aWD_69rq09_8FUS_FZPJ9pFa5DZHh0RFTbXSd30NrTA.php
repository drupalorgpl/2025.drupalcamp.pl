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

/* profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig */
class __TwigTemplate_c8d081db8c0ba4bb3f7fe1c0b65e3343 extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", "container-fluid", "d-p-side-embed", "content-moved-inside", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 46))), ((        // line 47
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 49
        $context["d_p_side_embed_wrapper_classes"] = ["clearfix", "d-p-side-embed-wrapper", "row", ("embed-side-" .         // line 53
($context["embed_side"] ?? null))];
        // line 55
        yield "
";
        // line 56
        $context["embed_side_classes"] = ["d-p-side-embed-embed", (((        // line 58
($context["embed_side"] ?? null) == "full")) ? ("col-12") : ("col-md-6"))];
        // line 60
        $context["content_side_classes"] = ["d-p-side-embed-content", "content-inside-wrapper", (((        // line 63
($context["embed_side"] ?? null) == "full")) ? ("col-md-6 col-12 d-flex justify-content-end") : ("col-md-6"))];
        // line 65
        $context["content_fields_classes"] = ["d-p-side-embed-content-fields", (((        // line 67
($context["embed_side"] ?? null) == "full")) ? ("d-flex flex-column container-half") : (""))];
        // line 69
        yield "
";
        // line 70
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "embed_side", "wrapper_attributes", "attributes", "d_p_side_embed_wrapper_attributes", "embed_side_attributes", "embed", "content_side_attributes", "content_fields_attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "<section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
  <div";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 72), "html", null, true);
        yield ">
    <div ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["d_p_side_embed_wrapper_attributes"] ?? null), "addClass", [($context["d_p_side_embed_wrapper_classes"] ?? null)], "method", false, false, true, 73), "html", null, true);
        yield ">
      <div ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["embed_side_attributes"] ?? null), "addClass", [($context["embed_side_classes"] ?? null)], "method", false, false, true, 74), "html", null, true);
        yield ">
        ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["embed"] ?? null));
        yield "
      </div>
      <div ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_side_attributes"] ?? null), "addClass", [($context["content_side_classes"] ?? null)], "method", false, false, true, 77), "html", null, true);
        yield ">
        <div ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_fields_attributes"] ?? null), "addClass", [($context["content_fields_classes"] ?? null)], "method", false, false, true, 78), "html", null, true);
        yield ">
          ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_d_embed", "field_d_cta_link"), "html", null, true);
        yield "
          ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_d_cta_link", [], "any", false, false, true, 80), 0, [], "any", false, false, true, 80)) {
            // line 81
            yield "            <div class=\"mt-4\">
              ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_d_cta_link", [], "any", false, false, true, 82), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 85
        yield "        </div>
      </div>
    </div>
  </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig";
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
        return array (  124 => 85,  118 => 82,  115 => 81,  113 => 80,  109 => 79,  105 => 78,  101 => 77,  96 => 75,  92 => 74,  88 => 73,  84 => 72,  79 => 71,  67 => 70,  64 => 69,  62 => 67,  61 => 65,  59 => 63,  58 => 60,  56 => 58,  55 => 56,  52 => 55,  50 => 53,  49 => 49,  47 => 47,  46 => 46,  45 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "block" => 70, "if" => 80];
        static $filters = ["clean_class" => 46, "escape" => 71, "raw" => 75, "without" => 79];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'without'],
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
