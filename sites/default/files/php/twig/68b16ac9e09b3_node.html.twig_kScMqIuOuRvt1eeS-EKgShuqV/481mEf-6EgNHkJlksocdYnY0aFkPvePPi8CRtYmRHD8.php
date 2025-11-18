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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/content/node.html.twig */
class __TwigTemplate_e5558e383b6a3a9fdf5dd3c7423e17fa extends Template
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
            'submitted' => [$this, 'block_submitted'],
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
($context["node"] ?? null), "bundle", [], "any", false, false, true, 66))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 67)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 68)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 69)) ? ("node--unpublished") : ("")), ((        // line 70
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 74
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 74), "html", null, true);
        yield ">
  <header>
    ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 77
        if ( !($context["page"] ?? null)) {
            // line 78
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 78), "html", null, true);
            yield ">
        <a href=\"";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 82
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
    ";
        // line 83
        if (($context["display_submitted"] ?? null)) {
            // line 84
            yield "      <div class=\"node__meta\">
        ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "
        ";
            // line 86
            yield from $this->unwrap()->yieldBlock('submitted', $context, $blocks);
            // line 91
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 94
        yield "  </header>
  <div";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 95), "html", null, true);
        yield ">
    ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "display_submitted", "author_picture", "metadata", "content_attributes", "content", "author_attributes", "author_name", "date"]);        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submitted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "          <span";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
        yield ">
            ";
        // line 88
        yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        // line 89
        yield "          </span>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/content/node.html.twig";
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
        return array (  134 => 89,  132 => 88,  127 => 87,  120 => 86,  110 => 96,  106 => 95,  103 => 94,  96 => 91,  94 => 86,  90 => 85,  87 => 84,  85 => 83,  80 => 82,  72 => 79,  67 => 78,  65 => 77,  61 => 76,  55 => 74,  53 => 70,  52 => 69,  51 => 68,  50 => 67,  49 => 66,  48 => 64,  45 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/content/node.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 64, "if" => 77, "block" => 86, "trans" => 88];
        static $filters = ["clean_class" => 66, "escape" => 74];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'trans'],
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
