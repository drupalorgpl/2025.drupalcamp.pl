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

/* profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig */
class __TwigTemplate_b5d41c7493413f77da7a15b0d5d816e1 extends Template
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
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 43))), ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 46
        $context["paragraph_classes"] = ["d-p-text-with-bckg"];
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "wrapper_attributes", "attributes", "paragraph_attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "  <section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
    <div";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
        yield ">
      <div ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [($context["paragraph_classes"] ?? null)], "method", false, false, true, 53), "html", null, true);
        yield ">
        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('background', $context, $blocks);
        // line 59
        yield "        <div class=\"content-wrapper\">
          <div class=\"content container\">
            ";
        // line 61
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 69
        yield "          </div>
        </div>
      </div>
    </div>
  </section>
";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "          ";
        yield from $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig", 55)->unwrap()->yield(CoreExtension::toArray(["content" => CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["content"] ?? null), "group_d_block_background", [], "any", false, false, true, 56)]));
        // line 58
        yield "        ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "              ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 62), "html", null, true);
        yield "
              ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 63)) {
            // line 64
            yield "                <div class=\"mt-4\">
                  ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 65), "html", null, true);
            yield "
                </div>
              ";
        }
        // line 68
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig";
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
        return array (  138 => 68,  132 => 65,  129 => 64,  127 => 63,  122 => 62,  115 => 61,  110 => 58,  108 => 56,  106 => 55,  99 => 54,  89 => 69,  87 => 61,  83 => 59,  81 => 54,  77 => 53,  73 => 52,  68 => 51,  56 => 50,  53 => 49,  51 => 46,  49 => 44,  48 => 43,  47 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "block" => 50, "include" => 55, "if" => 63];
        static $filters = ["clean_class" => 43, "escape" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include', 'if'],
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
