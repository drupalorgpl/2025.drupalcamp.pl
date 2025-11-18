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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig */
class __TwigTemplate_ccf5eebe26c187d3185758d177f7c37c extends Template
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
            'background' => [$this, 'block_background'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", "d-p-text-block", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "wrapper_attributes", "attributes", "with_price", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "  <section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
    <div";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), "html", null, true);
        yield ">
      ";
        // line 51
        yield from $this->unwrap()->yieldBlock('background', $context, $blocks);
        // line 56
        yield "      <div class=\"content-wrapper\">
        ";
        // line 57
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 65
        yield "      </div>

      ";
        // line 67
        if (($context["with_price"] ?? null)) {
            // line 68
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("d_p/d_p_with_price"), "html", null, true);
            yield "
        <div class=\"with-price-stripe\">
          <div class=\"with-price-wrapper\">
            <div class=\"with-price-data d-flex justify-content-center\">
          <span class=\"with-price-value\">
            <div class=\"spinner-border text-danger\" role=\"status\"><span class=\"sr-only\">Loading...</span></div>
          </span>&nbsp;
              <span class=\"with-price-currency\"></span>
            </div>
            <div class=\"change d-flex align-items-baseline justify-content-center\">
              <span class=\"with-price-arrow\"></span>
              <span class=\"with-price-percentage\"></span>
            </div>
            <div class=\"with-price-timestamp\"></div>
          </div>
        </div>
      ";
        }
        // line 85
        yield "    </div>
  </section>
";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "        ";
        yield from $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", 52)->unwrap()->yield(CoreExtension::toArray(["content" => CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["content"] ?? null), "group_d_block_background", [], "any", false, false, true, 53)]));
        // line 55
        yield "      ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 58), "html", null, true);
        yield "
          ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 59)) {
            // line 60
            yield "            <div class=\"mt-4\">
              ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 61), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 64
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig";
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
        return array (  155 => 64,  149 => 61,  146 => 60,  144 => 59,  139 => 58,  132 => 57,  127 => 55,  125 => 53,  123 => 52,  116 => 51,  109 => 85,  88 => 68,  86 => 67,  82 => 65,  80 => 57,  77 => 56,  75 => 51,  71 => 50,  66 => 49,  54 => 48,  51 => 47,  49 => 45,  48 => 44,  47 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "block" => 48, "if" => 67, "include" => 52];
        static $filters = ["clean_class" => 44, "escape" => 49];
        static $functions = ["attach_library" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['clean_class', 'escape'],
                ['attach_library'],
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
