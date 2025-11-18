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

/* profiles/contrib/droopler/modules/custom/d_p_gallery/templates/paragraph--d-p-gallery.html.twig */
class __TwigTemplate_0bac0b87e87ba792f693afdf4c3c9fb1 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", "gallery", "clearfix", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45))), ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 48
        $context["paragraph_classes"] = ["d-p-gallery"];
        // line 51
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
        // line 52
        yield "<section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
  <div";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 53), "html", null, true);
        yield ">
    <div ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [($context["paragraph_classes"] ?? null)], "method", false, false, true, 54), "html", null, true);
        yield ">
      <div class=\"content-wrapper\">
        <div class=\"container\">
          ";
        // line 57
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 65
        yield "        </div>
      </div>
    </div>
  </div>
</section>
";
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
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_gallery_content", [], "any", false, false, true, 58), "html", null, true);
        yield "
            ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_gallery_cta", [], "any", false, false, true, 59)) {
            // line 60
            yield "              <div class=\"container mt-4\">
                ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_gallery_cta", [], "any", false, false, true, 61), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 64
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_gallery/templates/paragraph--d-p-gallery.html.twig";
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
        return array (  114 => 64,  108 => 61,  105 => 60,  103 => 59,  98 => 58,  91 => 57,  81 => 65,  79 => 57,  73 => 54,  69 => 53,  64 => 52,  52 => 51,  50 => 48,  48 => 46,  47 => 45,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_gallery/templates/paragraph--d-p-gallery.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_gallery/templates/paragraph--d-p-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "block" => 51, "if" => 59];
        static $filters = ["clean_class" => 45, "escape" => 52];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
