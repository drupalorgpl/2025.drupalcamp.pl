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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/field-group-html-element.html.twig */
class __TwigTemplate_54a7e0ad03b3aafae18fbc1cfb689bad extends Template
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
        // line 18
        if ((($context["wrapper_element"] ?? null) != "<none>")) {
            // line 19
            yield "  <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_element"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield ">
";
        }
        // line 21
        yield "  ";
        if (($context["title"] ?? null)) {
            // line 22
            yield "  <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true);
            yield ">
  ";
        }
        // line 24
        yield "  ";
        if (($context["collapsible"] ?? null)) {
            // line 25
            yield "  <div class=\"field-group-wrapper\">
  ";
        }
        // line 27
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        // line 28
        if (($context["collapsible"] ?? null)) {
            // line 29
            yield "  </div>
  ";
        }
        // line 31
        if ((($context["wrapper_element"] ?? null) != "<none>")) {
            // line 32
            yield "  </";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper_element"] ?? null), "html", null, true);
            yield ">
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["wrapper_element", "attributes", "title", "title_element", "title_attributes", "collapsible", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/field-group-html-element.html.twig";
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
        return array (  88 => 32,  86 => 31,  82 => 29,  80 => 28,  75 => 27,  71 => 25,  68 => 24,  57 => 22,  54 => 21,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/field-group-html-element.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/field/field-group-html-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18];
        static $filters = ["escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
