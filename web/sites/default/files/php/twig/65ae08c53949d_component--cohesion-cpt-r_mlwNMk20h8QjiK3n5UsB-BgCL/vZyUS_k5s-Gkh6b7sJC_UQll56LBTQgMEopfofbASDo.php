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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-recipes.html.twig */
class __TwigTemplate_9f2ba95ddab09ec6e0910b6347521226 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo "\" > <div class=\"coh-container coh-ce-cpt_recipes-aa88f1f4 coh-container-boxed\" > <h3 class=\"coh-heading\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", ["access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "68a15e7d-e105-495b-8123-10cc05aeed2e", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-textarea\"";
        }
        echo " > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "68a15e7d-e105-495b-8123-10cc05aeed2e"));
        echo " </h3> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " <div class=\"coh-slider-container coh-slider-container-no-bleed-xl coh-slider-container-overflow-hidden-xl coh-slider-container-nav-inside-middle-left-right-xl coh-ce-cpt_recipes-3b44d206\"   role=\"region\"> <div class=\"coh-slider-nav-top\"></div> <div class=\"coh-slider-container-mid\"> <div class=\"coh-slider-container-inner \" data-coh-slider='{ \"arrows\" : false, \"counter\" : false, \"counterClass\" : \"coh-slide-count \", \"dots\" : false, \"dotsClass\" : \"slick-dots \", \"dotsNumbers\" : true, \"draggable\" : true, \"edgeFriction\" : 0.15, \"keyboardNavigation\" : true, \"mobileFirst\" : false, \"pauseOnFocus\" : false, \"pauseOnHover\" : false, \"respondTo\" : \"window\", \"responsive\" : {\"xl\":{\"slidesToShow\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "729d0e4a-dc30-49ba-b230-4fea43c62f5a")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "729d0e4a-dc30-49ba-b230-4fea43c62f5a")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"slidesToScroll\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "86d18710-d04e-4c53-96f9-8c29dc4f39a9")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "86d18710-d04e-4c53-96f9-8c29dc4f39a9")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"adaptiveHeight\":false,\"matchHeights\":{\"target\":\"none\"},\"arrows\":true,\"prevArrow\":\"<button type=\\\"button\\\" class=\\\"slick-prev\\\">";
        echo t("&lt;", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "</button>\",\"nextArrow\":\"<button type=\\\"button\\\" class=\\\"slick-next\\\">";
        echo t("&gt;", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "</button>\",\"appendArrows\":\".coh-slider-nav-inner-top\",\"dots\":false,\"draggable\":true,\"swipe\":true,\"fade\":false,\"vertical\":false,\"infinite\":true,\"speed\":700,\"cssEase\":\"ease\",\"pauseOnHover\":false,\"pauseOnDotsHover\":false,\"autoplay\":false,\"rows\":0}}, \"rows\" : 0, \"slide\" : \".coh-slider-item\", \"slidesPerRow\" : 0, \"touchMove\" : true, \"touchThreshold\" : 5, \"useCSS\" : true, \"useTransform\" : true, \"centerPadding\":\"0px\", \"infinite\" : false }'> <div class=\"coh-slider-nav-inner-top\"></div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "951a6f33-ab3c-46ec-bdbd-1233e5580e1d"), "html", null, true);
        echo " <div class=\"coh-slider-nav-inner-bottom\"></div> </div> </div> <div class=\"coh-slider-nav-bottom\"></div> </div> </div> </div> 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["componentUuid", "user", "component_content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-recipes.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-recipes.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-recipes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "trans" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "number_format" => 1);
        static $functions = array("attach_library" => 1, "render_field_uuid" => 1, "getComponentFieldValue" => 1, "get_content_language" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'raw', 'number_format'],
                ['attach_library', 'render_field_uuid', 'getComponentFieldValue', 'get_content_language']
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
