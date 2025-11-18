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

/* profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig */
class __TwigTemplate_5e50e5b8a1b5ae42a7ea75127d9c1756 extends Template
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
        // line 69
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "bundle", [], "any", false, false, true, 71))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 72)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 73)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 74)) ? ("node--unpublished") : ("")), ((        // line 75
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix", "container"];
        // line 79
        $context["date"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), "d.m.Y");
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("starterkit_theme/node"), "html", null, true);
        yield "
<div class=\"article-wrapper\">
  <article";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 82), "html", null, true);
        yield ">
    <div class=\"row article-row \">
      <div class=\"title-row-for-mobile col-sm-12\">
        ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            yield "          <div class=\"node__meta\">
            ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "

            <div";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
            yield ">
              ";
            // line 90
            yield t("@date", array("@date" => ($context["date"] ?? null), ));
            // line 91
            yield "
              ";
            // line 92
            if ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 92)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#object"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 92), "#object", [], "array", false, false, true, 92))) {
                // line 93
                yield "                / ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 93), "html", null, true);
                yield "
              ";
            }
            // line 95
            yield "            </div>
            ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 99
        yield "
        ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "

        ";
        // line 102
        if ( !($context["page"] ?? null)) {
            // line 103
            yield "          <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node_blog_post_title"], "method", false, false, true, 103), "html", null, true);
            yield ">
            <a href=\"";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
          </h2>
        ";
        }
        // line 107
        yield "
        ";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
      </div>

      <div class=\"col-md-7 col-xl-6 blog-main-image-row\">
        <div>
          ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_media_main_image", [], "any", false, false, true, 113), "html", null, true);
        yield "
        </div>
      </div>

      <div class=\"col-md-5 col-xl-5 offset-xl-1\">
        <div class=\"title-row\">
          ";
        // line 119
        if (($context["display_submitted"] ?? null)) {
            // line 120
            yield "            <div class=\"node__meta col-10\">
              ";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "

              <div";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
            yield ">
                ";
            // line 124
            yield t("@date", array("@date" => ($context["date"] ?? null), ));
            // line 125
            yield "
                ";
            // line 126
            if ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 126)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#object"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 126), "#object", [], "array", false, false, true, 126))) {
                // line 127
                yield "                  / ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 127), "html", null, true);
                yield "
                ";
            }
            // line 129
            yield "              </div>
              ";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 133
        yield "
          ";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "

          ";
        // line 136
        if ( !($context["page"] ?? null)) {
            // line 137
            yield "            <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node_blog_post_title"], "method", false, false, true, 137), "html", null, true);
            yield ">
              <a href=\"";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
            </h2>
          ";
        }
        // line 141
        yield "
          ";
        // line 142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
        </div>

        <div";
        // line 145
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 145), "html", null, true);
        yield ">
          ";
        // line 146
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_blog_media_main_image", "field_blog_category"), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  </article>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "display_submitted", "author_picture", "author_attributes", "content", "metadata", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig";
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
        return array (  215 => 146,  211 => 145,  205 => 142,  202 => 141,  194 => 138,  189 => 137,  187 => 136,  182 => 134,  179 => 133,  173 => 130,  170 => 129,  164 => 127,  162 => 126,  159 => 125,  157 => 124,  153 => 123,  148 => 121,  145 => 120,  143 => 119,  134 => 113,  126 => 108,  123 => 107,  115 => 104,  110 => 103,  108 => 102,  103 => 100,  100 => 99,  94 => 96,  91 => 95,  85 => 93,  83 => 92,  80 => 91,  78 => 90,  74 => 89,  69 => 87,  66 => 86,  64 => 85,  58 => 82,  53 => 80,  51 => 79,  49 => 75,  48 => 74,  47 => 73,  46 => 72,  45 => 71,  44 => 69,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig", "/home/dropticainternal/drupalcamp/web/profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 69, "if" => 85, "trans" => 90];
        static $filters = ["clean_class" => 71, "date" => 79, "escape" => 80, "without" => 146];
        static $functions = ["attach_library" => 80];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'date', 'escape', 'without'],
                ['attach_library'],
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
