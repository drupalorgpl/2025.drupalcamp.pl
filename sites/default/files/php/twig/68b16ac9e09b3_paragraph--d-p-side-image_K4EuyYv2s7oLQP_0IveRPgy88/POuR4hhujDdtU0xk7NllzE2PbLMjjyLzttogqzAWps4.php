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

/* profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig */
class __TwigTemplate_00e4990691369dbcb64d58c3d2a0c2e0 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", "d-p-side-image-banner", "content-moved-inside", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45))), ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 48
        $context["paragraph_classes"] = ["d-image", "h-100"];
        // line 52
        $context["side_image_banner_wrapper_classes"] = ["d-p-side-image-banner-wrapper", "clearfix", "position-relative"];
        // line 57
        $context["content_side_classes"] = ["content-inside-wrapper"];
        // line 60
        $context["content_side_classes"] = Twig\Extension\CoreExtension::merge(($context["content_side_classes"] ?? null), [($context["text_class"] ?? null)]);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "text_class", "wrapper_attributes", "attributes", "d_p_side_image_attributes", "paragraph_attributes", "image_class", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "<section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_attributes"] ?? null), "html", null, true);
        yield ">
  <div";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 64), "html", null, true);
        yield ">
    <div ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["d_p_side_image_attributes"] ?? null), "addClass", [($context["side_image_banner_wrapper_classes"] ?? null)], "method", false, false, true, 65), "html", null, true);
        yield ">
      <div ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [($context["paragraph_classes"] ?? null), ($context["image_class"] ?? null)], "method", false, false, true, 66), "html", null, true);
        yield ">
        ";
        // line 67
        yield from $this->unwrap()->yieldBlock('background', $context, $blocks);
        // line 72
        yield "      </div>
      <div class=\"";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["content_side_classes"] ?? null), " "), "html", null, true);
        yield "\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"container-half\">
              ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_content", [], "any", false, false, true, 77), "html", null, true);
        yield "
              ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_cta", [], "any", false, false, true, 78)) {
            // line 79
            yield "                <div class=\"mt-4\">
                  ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_cta", [], "any", false, false, true, 80), "html", null, true);
            yield "
                </div>
              ";
        }
        // line 83
        yield "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "          ";
        yield from $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", 68)->unwrap()->yield(CoreExtension::toArray(["content" => CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["content"] ?? null), "group_d_side_image_background", [], "any", false, false, true, 69)]));
        // line 71
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig";
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
        return array (  140 => 71,  138 => 69,  136 => 68,  129 => 67,  117 => 83,  111 => 80,  108 => 79,  106 => 78,  102 => 77,  95 => 73,  92 => 72,  90 => 67,  86 => 66,  82 => 65,  78 => 64,  73 => 63,  61 => 62,  58 => 61,  56 => 60,  54 => 57,  52 => 52,  50 => 48,  48 => 46,  47 => 45,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "block" => 62, "if" => 78, "include" => 68];
        static $filters = ["clean_class" => 45, "merge" => 60, "escape" => 63, "join" => 73];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['clean_class', 'merge', 'escape', 'join'],
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
