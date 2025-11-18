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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig */
class __TwigTemplate_00d1889f53afcfe8d3bf359ea8d4197a extends Template
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
            'paragraph_content' => [$this, 'block_paragraph_content'],
            'tiles_content' => [$this, 'block_tiles_content'],
            'paragraph_cta_content' => [$this, 'block_paragraph_cta_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", "d-p-group-of-text-blocks", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 47
        yield "
";
        // line 48
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_d_long_text", [], "any", false, false, true, 48))) {
            // line 49
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["with-long-text"]);
        }
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content", "wrapper_attributes", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "  <section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
    <div";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54), "html", null, true);
        yield ">
      ";
        // line 55
        yield from $this->unwrap()->yieldBlock('paragraph_content', $context, $blocks);
        // line 60
        yield "      ";
        yield from $this->unwrap()->yieldBlock('tiles_content', $context, $blocks);
        // line 67
        yield "      ";
        yield from $this->unwrap()->yieldBlock('paragraph_cta_content', $context, $blocks);
        // line 74
        yield "    </div>
  </section>
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "        <div class=\"container d-p-group-of-text-blocks-header-wrapper\">
          ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_text_blocks_content", [], "any", false, false, true, 57), "html", null, true);
        yield "
        </div>
      ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tiles_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_d_p_tb_block_reference", [], "any", false, false, true, 61), "isEmpty", [], "method", false, false, true, 61) == false)) {
            // line 62
            yield "          <div class=\"d-p-tiles-wrapper container expandable-content\">
            ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_d_p_tb_block_reference", [], "any", false, false, true, 63), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 66
        yield "      ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph_cta_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_text_blocks_cta", [], "any", false, false, true, 68)) {
            // line 69
            yield "          <div class=\"container mt-4\">
            ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_text_blocks_cta", [], "any", false, false, true, 70), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 73
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig";
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
        return array (  161 => 73,  155 => 70,  152 => 69,  149 => 68,  142 => 67,  137 => 66,  131 => 63,  128 => 62,  125 => 61,  118 => 60,  110 => 57,  107 => 56,  100 => 55,  93 => 74,  90 => 67,  87 => 60,  85 => 55,  81 => 54,  76 => 53,  64 => 52,  61 => 51,  57 => 49,  55 => 48,  52 => 47,  50 => 45,  49 => 44,  48 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "if" => 48, "block" => 52];
        static $filters = ["clean_class" => 44, "render" => 48, "merge" => 49, "escape" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'merge', 'escape'],
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
