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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-order.html.twig */
class __TwigTemplate_b21e666ffbba3f2636bb7667ab256c19 extends Template
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
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohInstanceId($context), "html", null, true);
        $context["coh_instance_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.row-for-columns"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo "\" > <div class=\"coh-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_order-44f70e63 coh-container-boxed\" > <div class=\"coh-row coh-row-xl coh-row-visible-xl\" data-coh-row-match-heights=\"{&quot;xl&quot;:{&quot;target&quot;:&quot;none&quot;}}\"> <div class=\"coh-row-inner\"> <div class=\"coh-column coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0 coh-col-xl-offset-0\" > ";
        $context["component_variable_ad4cba10_5e1d_4205_9239_f0d2f55016b7"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1a598f2f-5244-4804-b579-542c02610704");
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_0bd4ba6c_2240_4bd1_8e43_65e0c7f27acc"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_d04b1cfc_6809_44f1_9776_e6a88a6067fd"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_4aa20f1b_ef0c_49f1_b022_ade71c38244a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_h3_underline_left", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ad4cba10-5e1d-4205-9239-f0d2f55016b7" => "component_variable_ad4cba10_5e1d_4205_9239_f0d2f55016b7", "0bd4ba6c-2240-4bd1-8e43-65e0c7f27acc" => "component_variable_0bd4ba6c_2240_4bd1_8e43_65e0c7f27acc", "d04b1cfc-6809-44f1-9776-e6a88a6067fd" => "component_variable_d04b1cfc_6809_44f1_9776_e6a88a6067fd", "4aa20f1b-ef0c-49f1-b022-ade71c38244a" => "component_variable_4aa20f1b_ef0c_49f1_b022_ade71c38244a"], "66059362-2885-4a41-8d06-4b88fbd94d17", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ede5b37a-61a1-42f6-ae26-85190c902510"));
        $context["paragraphContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " <p class=\"coh-paragraph coh-ce-cpt_order-4a241df4\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", ["access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "ede5b37a-61a1-42f6-ae26-85190c902510", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-textarea\"";
        }
        echo " >";
        echo twig_nl2br($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraphContent"] ?? null), 1, $this->source), "html", null, true));
        echo "</p> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
        echo " <button class=\"coh-button coh-interaction\" data-interaction-modifiers=\"[{&quot;modifierType&quot;:&quot;&quot;}]\" data-coh-settings='{ \"xl\":{\"buttonAnimation\":[{\"animationType\":\"none\"}]} }' type=\"button\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e9e2a59-865a-4e67-a456-eac889a81b62"));
        echo "</button> </div> <div class=\"coh-column coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0 coh-col-xl-offset-0\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " <div class=\"coh-slider-container coh-slider-container-no-bleed-xl coh-slider-container-overflow-hidden-xl coh-slider-container-nav-outside-middle-left-right-xl coh-ce-cpt_order-873e5118\"   role=\"region\"> <div class=\"coh-slider-nav-top\"></div> <div class=\"coh-slider-container-mid\"> <div class=\"coh-slider-container-inner \" data-coh-slider='{ \"arrows\" : false, \"counter\" : false, \"counterClass\" : \"coh-slide-count \", \"dots\" : false, \"dotsClass\" : \"slick-dots \", \"dotsNumbers\" : true, \"draggable\" : true, \"edgeFriction\" : 0.15, \"keyboardNavigation\" : true, \"mobileFirst\" : false, \"pauseOnFocus\" : false, \"pauseOnHover\" : false, \"respondTo\" : \"window\", \"responsive\" : {\"xl\":{\"slidesToShow\":3,\"slidesToScroll\":1,\"adaptiveHeight\":false,\"matchHeights\":{\"target\":\"none\"},\"arrows\":true,\"prevArrow\":\"<button type=\\\"button\\\" class=\\\"slick-prev\\\">";
        echo t("&lt;", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "</button>\",\"nextArrow\":\"<button type=\\\"button\\\" class=\\\"slick-next\\\">";
        echo t("&gt;", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "</button>\",\"appendArrows\":\".coh-slider-container-mid\",\"dots\":false,\"draggable\":true,\"swipe\":true,\"fade\":false,\"vertical\":false,\"infinite\":true,\"speed\":700,\"cssEase\":\"ease\",\"pauseOnHover\":false,\"pauseOnDotsHover\":false,\"autoplay\":false,\"rows\":0}}, \"rows\" : 0, \"slide\" : \".coh-slider-item\", \"slidesPerRow\" : 0, \"touchMove\" : true, \"touchThreshold\" : 5, \"useCSS\" : true, \"useTransform\" : true, \"centerPadding\":\"0px\", \"infinite\" : false }'> <div class=\"coh-slider-nav-inner-top\"></div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8b686ae7-82f6-4e20-a969-9ed00318626a"), "html", null, true);
        echo " <div class=\"coh-slider-nav-inner-bottom\"></div> </div> </div> <div class=\"coh-slider-nav-bottom\"></div> </div> </div> </div> </div> </div> </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_order-44f70e63 {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2b4c75d4-33a2-4b5e-b21b-7467fe58d28f"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2b4c75d4-33a2-4b5e-b21b-7467fe58d28f"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2b4c75d4-33a2-4b5e-b21b-7467fe58d28f"));
                echo ";";
            }
        }
        // line 4
        echo "  padding-top: 5rem;
  padding-right: 5rem;
  padding-bottom: 6.25rem;
  padding-left: 9.375rem;
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 9, $this->source)));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["componentUuid", "_context", "user", "component_content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-order.html.twig";
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
        return array (  134 => 9,  126 => 4,  117 => 3,  111 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-order.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-order.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "nl2br" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "get_content_language" => 1, "renderComponent" => 1, "render_field_uuid" => 1, "renderInlineStyle" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape', 'raw', 'nl2br'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'get_content_language', 'renderComponent', 'render_field_uuid', 'renderInlineStyle']
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
