<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig */
class __TwigTemplate_7e61fd6ae5a80158431239cd848c26f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.responsiveJs"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.windowscroll"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.langcode"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries._core"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " <article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 1, $this->source), "html", null, true);
        echo " <div class=\"coh-container\" > <div class=\"coh-container coh-ce-26e2cedf coh-container-boxed\" > ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[node:field_banner_text]", ["node" => ($context["node"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_1e6627d2_db7a_414b_8dff_ab5d1b2c4449"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[node:field_image_upload:wide]", ["node" => ($context["node"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_040df618_33bb_453a_84c2_de711039cf47"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_hero_background_with_text", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["1e6627d2-db7a-414b-8dff-ab5d1b2c4449" => "component_variable_1e6627d2_db7a_414b_8dff_ab5d1b2c4449", "040df618-33bb-453a-84c2-de711039cf47" => "component_variable_040df618_33bb_453a_84c2_de711039cf47"], "2e8a6f53-8826-436b-8188-d456b953a4c4", ""), "html", null, true);
        echo " ";
        $context["thisField"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_layout_canvas", [], "any", false, false, true, 1);
        echo " ";
        $context["hasChildren"] = false;
        echo " ";
        if (((twig_get_attribute($this->env, $this->source, ($context["thisField"] ?? null), "#is_multiple", [], "array", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["thisField"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "isempty", [], "any", false, false, true, 1) != true)) && ($context["hasChildren"] ?? null))) {
            echo " ";
            $context["fieldValues"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["thisField"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "getiterator", [], "any", false, false, true, 1);
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fieldValues"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 1)) && twig_get_attribute($this->env, $this->source, ($context["thisField"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 1), [], "array", true, true, true, 1))) {
                    echo " ";
                    echo " ";
                    ob_start(function () { return ''; });
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["thisField"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 1)] ?? null) : null), 1, $this->source), "html", null, true);
                    $context["fieldItem"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    echo " ";
                    echo " ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_layout_canvas", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
            echo " ";
        }
        echo " </div> </div> </article> 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_suffix", "node", "_context", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 1, "for" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "processtoken" => 1, "renderComponent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['attach_library', 'processtoken', 'renderComponent']
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
