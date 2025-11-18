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

/* profiles/contrib/droopler/modules/custom/d_p/templates/field--field-d-main-title.html.twig */
class __TwigTemplate_07f0eab0e2a413133789273db158f945 extends Template
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
        // line 23
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 25
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 26
($context["field_type"] ?? null))), ("field--label-" .         // line 27
($context["label_display"] ?? null))];
        // line 30
        yield "<";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("heading_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_tag"] ?? null), "h2")) : ("h2")), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ($context["title_classes"] ?? null)], "method", false, false, true, 30), "html", null, true);
        yield ">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 32), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "</";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("heading_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_tag"] ?? null), "h2")) : ("h2")), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "heading_tag", "attributes", "title_classes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_p/templates/field--field-d-main-title.html.twig";
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
        return array (  64 => 34,  58 => 32,  54 => 31,  49 => 30,  47 => 27,  46 => 26,  45 => 25,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p/templates/field--field-d-main-title.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_p/templates/field--field-d-main-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "for" => 31];
        static $filters = ["clean_class" => 25, "escape" => 30, "default" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['clean_class', 'escape', 'default'],
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
