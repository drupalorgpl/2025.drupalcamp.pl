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

/* themes/custom/droopler_subtheme/templates/node--session--full.html.twig */
class __TwigTemplate_f709303e8d7a88b3c825bc5d8f62dc92 extends Template
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
        // line 62
        yield "
";
        // line 64
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "bundle", [], "any", false, false, true, 66))), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 67)) ? ("node--unpublished") : ("")), ((        // line 68
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 72
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 72), "html", null, true);
        yield ">
  ";
        // line 74
        yield "  <header class=\"container-fluid\">
    <div class=\"container\">
      ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
      <h1";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 77), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
      ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_speaker", [], "any", false, false, true, 78), "html", null, true);
        yield "
      ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
    </div>
  </header>
  ";
        // line 83
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["container", "node__content", "clearfix"], "method", false, false, true, 83), "html", null, true);
        yield ">
    ";
        // line 85
        yield "    <div class=\"row\"><div class=\"col\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 85), "html", null, true);
        yield "</div></div>
    ";
        // line 87
        yield "    <div class=\"row details\">
      <div class=\"col-lg-3\"><div class=\"timeslot\">";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_timeslot", [], "any", false, false, true, 88), "html", null, true);
        yield "</div></div>
      ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_language", [], "any", false, false, true, 89)) {
            yield "<div class=\"col-lg-3\"><div class=\"language\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_language", [], "any", false, false, true, 89), "html", null, true);
            yield "</div></div>";
        }
        // line 90
        yield "      <div class=\"col-lg-3\"><div class=\"room\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_room", [], "any", false, false, true, 90), "html", null, true);
        yield "</div></div>
      ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_experience_level", [], "any", false, false, true, 91)) {
            yield "<div class=\"col-lg-3\"><div class=\"experience\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_experience_level", [], "any", false, false, true, 91), "html", null, true);
            yield "</div></div>";
        }
        // line 92
        yield "    </div>
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "title_attributes", "label", "content", "title_suffix", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/droopler_subtheme/templates/node--session--full.html.twig";
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
        return array (  115 => 92,  109 => 91,  104 => 90,  98 => 89,  94 => 88,  91 => 87,  86 => 85,  81 => 83,  75 => 79,  71 => 78,  65 => 77,  61 => 76,  57 => 74,  52 => 72,  50 => 68,  49 => 67,  48 => 66,  47 => 64,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/droopler_subtheme/templates/node--session--full.html.twig", "/home/dropticainternal/drupalcamp/web/themes/custom/droopler_subtheme/templates/node--session--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 64, "if" => 89];
        static $filters = ["clean_class" => 66, "escape" => 72];
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
