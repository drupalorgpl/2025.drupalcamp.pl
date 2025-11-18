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

/* @droopler_theme/misc/listing-header.html.twig */
class __TwigTemplate_f7fb1a281fdc57b979b94736f7e3e25d extends Template
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
        // line 11
        yield "
";
        // line 12
        $context["header_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 13
        yield "
<div";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", [($context["header_class"] ?? null)], "method", false, false, true, 14), "html", null, true);
        yield ">
  <div class=\"container\">
    <div class=\"row clearfix\">
      <div class=\"col-12\">
        <h1 class=\"main-header\">";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield " </h1>
      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_class", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@droopler_theme/misc/listing-header.html.twig";
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
        return array (  59 => 18,  52 => 14,  49 => 13,  47 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@droopler_theme/misc/listing-header.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/misc/listing-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 12];
        static $filters = ["escape" => 14];
        static $functions = ["create_attribute" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['create_attribute'],
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
