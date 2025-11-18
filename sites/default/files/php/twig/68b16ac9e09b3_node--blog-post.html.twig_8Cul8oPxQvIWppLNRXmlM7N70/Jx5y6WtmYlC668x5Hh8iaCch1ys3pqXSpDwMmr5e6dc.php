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

/* profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post.html.twig */
class __TwigTemplate_19d3f2b20fef6d1b6befb28bb6c7d388 extends Template
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
        // line 63
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["node"] ?? null), "bundle", [], "any", false, false, true, 65))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 66)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 67)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 68)) ? ("node--unpublished") : ("")), ((        // line 69
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 72
        $context["date"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), "d.m.Y");
        // line 73
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 73), "html", null, true);
        yield ">
  <header class=\"blog-post-header\">
    ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_media_main_image", [], "any", false, false, true, 75), "html", null, true);
        yield "

    <div class=\"blog-post-header-wrapper container\">
      <div class=\"node__meta\">
        ";
        // line 79
        if (($context["display_submitted"] ?? null)) {
            // line 80
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "

          ";
            // line 82
            yield from $this->unwrap()->yieldBlock('submitted', $context, $blocks);
            // line 87
            yield "        ";
        }
        // line 88
        yield "
        ";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
        yield "

        <h1";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 91), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
      </div>

      ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 94), "html", null, true);
        yield "
    </div>
  </header>
  <div";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 97), "html", null, true);
        yield ">
    ";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_blog_media_main_image", "field_blog_category"), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "display_submitted", "author_picture", "metadata", "title_attributes", "label", "content_attributes", "author_attributes", "author_name"]);        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submitted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "            <span";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
        yield " class=\"author_attributes\">
              ";
        // line 84
        yield t("@author_name /  @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        // line 85
        yield "            </span>
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post.html.twig";
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
        return array (  133 => 85,  131 => 84,  126 => 83,  119 => 82,  109 => 98,  105 => 97,  99 => 94,  91 => 91,  86 => 89,  83 => 88,  80 => 87,  78 => 82,  72 => 80,  70 => 79,  63 => 75,  57 => 73,  55 => 72,  53 => 69,  52 => 68,  51 => 67,  50 => 66,  49 => 65,  48 => 63,  45 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 63, "if" => 79, "block" => 82, "trans" => 84];
        static $filters = ["clean_class" => 65, "date" => 72, "escape" => 73, "without" => 98];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'trans'],
                ['clean_class', 'date', 'escape', 'without'],
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
