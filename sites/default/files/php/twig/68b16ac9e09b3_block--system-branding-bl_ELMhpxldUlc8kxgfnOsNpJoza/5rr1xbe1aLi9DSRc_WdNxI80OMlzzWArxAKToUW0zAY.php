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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_f694be84c89615f861f3aa85f8ef2eef extends Template
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
        // line 15
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["site-branding"], "method", false, false, true, 15);
        // line 16
        yield "  ";
        if (($context["site_logo"] ?? null)) {
            // line 17
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to the home page"));
            yield "\" rel=\"home\" class=\"float-left site-logo logo-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_logo"] ?? null), ".")), "html", null, true);
            yield "\">
      <img src=\"";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to the home page"));
            yield "\" />
    </a>
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/block/block--system-branding-block.html.twig";
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
        return array (  58 => 18,  49 => 17,  46 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/block/block--system-branding-block.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 16];
        static $filters = ["t" => 17, "escape" => 17, "last" => 17, "split" => 17];
        static $functions = ["path" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'last', 'split'],
                ['path'],
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
