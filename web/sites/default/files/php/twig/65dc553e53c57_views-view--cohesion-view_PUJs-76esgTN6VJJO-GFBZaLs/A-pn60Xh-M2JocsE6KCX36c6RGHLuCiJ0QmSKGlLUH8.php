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

/* sites/default/files/cohesion/templates/views-view--cohesion-view-tpl-recipes-view-template.html.twig */
class __TwigTemplate_d93508f8db089c7ad934fc0cdb19a58d extends Template
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
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-view"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        $context["elementClasses"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["extraClasses"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "id", [], "any", false, false, true, 1), 1, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "id", [], "any", false, false, true, 1), 1, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "display_id", [], "any", false, false, true, 1), 1, $this->source)), ((twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 1)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 1), 1, $this->source))) : ("")), "coh-view", ($context["elementClasses"] ?? null), ($context["extraClasses"] ?? null)];
        echo " <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "  > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->setViewIterate($context), "html", null, true);
        echo " ";
        $context["view_rows"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "result", [], "any", false, false, true, 1), 1, $this->source));
        echo " <div> <div class=\"coh-view-contents views-infinite-scroll-content-wrapper clearfix\" data-drupal-views-infinite-scroll-content-wrapper> <ul class=\"coh-view-filter\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionViewsExposed($this->sandbox->ensureToStringAllowed(($context["view"] ?? null), 1, $this->source), "", "", "", ""), "html", null, true);
        echo " </ul> <h1 class=\"coh-heading\" > </h1> ";
        $context["patterncount"] = 1000;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["patterncount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (( !array_key_exists("view_rows", $context) || ($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getViewIterate($context) < ($context["view_rows"] ?? null)))) {
                echo " ";
                $context["pass"] = true;
                echo " ";
                if ((((array_key_exists("patternOperand", $context) && array_key_exists("patternOperator", $context)) && array_key_exists("patternValue", $context)) && array_key_exists("current_page", $context))) {
                    echo " ";
                    if ((($context["patternOperator"] ?? null) == "eq")) {
                        echo " ";
                        if ((($context["current_page"] ?? null) == ($context["patternValue"] ?? null))) {
                            $context["pass"] = true;
                        } else {
                            $context["pass"] = false;
                        }
                        echo " ";
                    }
                    echo " ";
                    if ((($context["patternOperator"] ?? null) == "lt")) {
                        echo " ";
                        if ((($context["current_page"] ?? null) < ($context["patternValue"] ?? null))) {
                            $context["pass"] = true;
                        } else {
                            $context["pass"] = false;
                        }
                        echo " ";
                    }
                    echo " ";
                    if ((($context["patternOperator"] ?? null) == "gt")) {
                        echo " ";
                        if ((($context["current_page"] ?? null) > ($context["patternValue"] ?? null))) {
                            $context["pass"] = true;
                        } else {
                            $context["pass"] = false;
                        }
                        echo " ";
                    }
                    echo " ";
                }
                echo " ";
                if ((($context["pass"] ?? null) == true)) {
                    echo " ";
                    if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getViewIterate($context) < ($context["view_rows"] ?? null))) {
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["rows"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getViewIterate($context)] ?? null) : null), 1, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->incrementViewIterate($context), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                }
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        if (($context["pager"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 1, $this->source), "html", null, true);
            echo " ";
        }
        echo " </div> ";
        if ((($context["exposed"] ?? null) &&  !($context["exposedAsVar"] ?? null))) {
            echo " <div class=\"hidden\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 1, $this->source), "html", null, true);
            echo " </div> ";
        }
        echo " </div> </div> 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["view", "attributes", "patternOperand", "patternOperator", "patternValue", "current_page", "rows", "pager", "exposed", "exposedAsVar"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/views-view--cohesion-view-tpl-recipes-view-template.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/views-view--cohesion-view-tpl-recipes-view-template.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/views-view--cohesion-view-tpl-recipes-view-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 1, "if" => 1);
        static $filters = array("escape" => 1, "clean_class" => 1, "length" => 1);
        static $functions = array("attach_library" => 1, "setViewIterate" => 1, "cohesion_views_exposed" => 1, "range" => 1, "getViewIterate" => 1, "incrementViewIterate" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'clean_class', 'length'],
                ['attach_library', 'setViewIterate', 'cohesion_views_exposed', 'range', 'getViewIterate', 'incrementViewIterate']
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
