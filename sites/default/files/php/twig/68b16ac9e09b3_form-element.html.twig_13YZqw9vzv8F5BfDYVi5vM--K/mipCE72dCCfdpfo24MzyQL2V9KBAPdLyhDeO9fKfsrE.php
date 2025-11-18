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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/form/form-element.html.twig */
class __TwigTemplate_35517cf18aaeeed2d49f672042c311d2 extends Template
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
        // line 47
        yield "
";
        // line 49
        $context["classes"] = ["js-form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), ((CoreExtension::inFilter(        // line 52
($context["type"] ?? null), ["checkbox", "radio"])) ? (\Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))))), ((CoreExtension::inFilter(        // line 53
($context["type"] ?? null), ["checkbox", "radio"])) ? ("form-check") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 56
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), ((        // line 58
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 62
        $context["description_classes"] = ["description", (((        // line 64
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 67
        if (CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"])) {
            // line 68
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 68), "html", null, true);
            yield ">
    ";
            // line 69
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 70
                yield "      <span class=\"field-prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 72
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72))) {
                // line 73
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 73), "html", null, true);
                yield ">
        ";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 77
            yield "    <label class=\"form-check-label\">
      ";
            // line 78
            if ((($context["label_display"] ?? null) == "before")) {
                // line 79
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "&nbsp;
      ";
            }
            // line 81
            yield "      <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", ["form-check-input"], "method", false, false, true, 81), "html", null, true);
            yield ">
      ";
            // line 82
            if ((($context["label_display"] ?? null) == "after")) {
                // line 83
                yield "        &nbsp;";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "
      ";
            }
            // line 85
            yield "    </label>
    ";
            // line 86
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 87
                yield "      <span class=\"field-suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 89
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 90
                yield "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "</strong>
      </div>
    ";
            }
            // line 94
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 94))) {
                // line 95
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 95), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 95), "html", null, true);
                yield ">
        ";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 99
            yield "  </div>
";
        } else {
            // line 101
            yield "  <fieldset";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "form-group"], "method", false, false, true, 101), "html", null, true);
            yield ">
    ";
            // line 102
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 103
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 105
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 106
                yield "      <span class=\"field-prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 108
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 108))) {
                // line 109
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 109), "html", null, true);
                yield ">
        ";
                // line 110
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 110), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 113
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
    ";
            // line 114
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 115
                yield "      <span class=\"field-suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 117
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 118
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 120
            yield "    ";
            if (($context["errors"] ?? null)) {
                // line 121
                yield "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
                // line 122
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "</strong>
      </div>
    ";
            }
            // line 125
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 125))) {
                // line 126
                yield "      <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 126), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 126), "html", null, true);
                yield ">
        ";
                // line 127
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 127), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 130
            yield "  </fieldset>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "prefix", "description", "label_display", "input_title", "input_attributes", "suffix", "label", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/form/form-element.html.twig";
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
        return array (  238 => 130,  232 => 127,  227 => 126,  224 => 125,  218 => 122,  215 => 121,  212 => 120,  206 => 118,  203 => 117,  197 => 115,  195 => 114,  190 => 113,  184 => 110,  179 => 109,  176 => 108,  170 => 106,  167 => 105,  161 => 103,  159 => 102,  154 => 101,  150 => 99,  144 => 96,  139 => 95,  136 => 94,  130 => 91,  127 => 90,  124 => 89,  118 => 87,  116 => 86,  113 => 85,  107 => 83,  105 => 82,  100 => 81,  94 => 79,  92 => 78,  89 => 77,  83 => 74,  78 => 73,  75 => 72,  69 => 70,  67 => 69,  62 => 68,  60 => 67,  58 => 64,  57 => 62,  55 => 58,  54 => 57,  53 => 56,  52 => 55,  51 => 54,  50 => 53,  49 => 52,  48 => 51,  47 => 49,  44 => 47,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/form/form-element.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 49, "if" => 67];
        static $filters = ["clean_class" => 51, "escape" => 68, "raw" => 79];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
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
