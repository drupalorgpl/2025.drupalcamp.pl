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

/* profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig */
class __TwigTemplate_0f9cbd21fa08e491f52c5b7e29dbff9b extends Template
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
        $context["classes"] = ["paragraph", "d-p-banner", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 47
        yield "
";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "hasClass", ["half-transparent"], "method", false, false, true, 48)) {
            // line 49
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["content-moved-inside"]);
        }
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "wrapper_attributes", "attributes", "content"]);        yield from [];
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
        yield from $this->unwrap()->yieldBlock('background', $context, $blocks);
        // line 60
        yield "      <div class=\"content-wrapper\">
        <div class=\"content content-inside-wrapper container\">
          ";
        // line 62
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 65
        yield "        </div>
      </div>
    </div>
  </section>
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "        ";
        yield from $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig", 56)->unwrap()->yield(CoreExtension::toArray(["content" => CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["content"] ?? null), "group_d_banner_background", [], "any", false, false, true, 57)]));
        // line 59
        yield "      ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "group_d_banner_content", [], "any", false, false, true, 63), "html", null, true);
        yield "
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig";
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
        return array (  124 => 63,  117 => 62,  112 => 59,  110 => 57,  108 => 56,  101 => 55,  92 => 65,  90 => 62,  86 => 60,  84 => 55,  80 => 54,  75 => 53,  63 => 52,  60 => 51,  56 => 49,  54 => 48,  51 => 47,  49 => 45,  48 => 44,  47 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "if" => 48, "block" => 52, "include" => 56];
        static $filters = ["clean_class" => 44, "merge" => 49, "escape" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'merge', 'escape'],
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
