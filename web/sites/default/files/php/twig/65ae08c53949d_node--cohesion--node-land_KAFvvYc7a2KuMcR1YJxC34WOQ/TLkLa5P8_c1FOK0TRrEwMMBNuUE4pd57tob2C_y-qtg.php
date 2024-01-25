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
            'block856844755' => [$this, 'block_block856844755'],
            'block406994679' => [$this, 'block_block406994679'],
            'block3181553121' => [$this, 'block_block3181553121'],
            'block2512609331' => [$this, 'block_block2512609331'],
            'block207869363' => [$this, 'block_block207869363'],
            'block2568066525' => [$this, 'block_block2568066525'],
            'block2128916370' => [$this, 'block_block2128916370'],
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
        echo " <div class=\"coh-container\" > <div class=\"coh-container coh-ce-6a85aa41 coh-container-boxed\" > ";
        ob_start(function () { return ''; });
        echo t("Top 10 Most Popular Types of Pizzas", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1e6627d2_db7a_414b_8dff_ab5d1b2c4449"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:67c90a02-4b5a-4b3e-94cb-ec483fc9153e]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_040df618_33bb_453a_84c2_de711039cf47"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_hero_background_with_text", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["1e6627d2-db7a-414b-8dff-ab5d1b2c4449" => "component_variable_1e6627d2_db7a_414b_8dff_ab5d1b2c4449", "040df618-33bb-453a-84c2-de711039cf47" => "component_variable_040df618_33bb_453a_84c2_de711039cf47"], "2e8a6f53-8826-436b-8188-d456b953a4c4", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Today you can hardly find a person who is not familiar with pizza", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_21ab5a42_35e2_4790_a186_9216d5b543ef"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Very easy to prepare", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_0_6ba8e36e_f1db_499d_8d7b_0aebc5993a58"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:35831fa1-d7e4-4dda-9625-397c9f67eaf8]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_0_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Perfectly satisfies hunger", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_1_6ba8e36e_f1db_499d_8d7b_0aebc5993a58"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:b4429a20-cd64-4041-be70-68db3015375f]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_1_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Variety of toppings and sauces", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_2_6ba8e36e_f1db_499d_8d7b_0aebc5993a58"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:2bd5e684-753f-4c49-b778-b3342c10ce83]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_2_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Available to everyone", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_3_6ba8e36e_f1db_499d_8d7b_0aebc5993a58"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c6b49a92-598e-457d-9e94-a6b3de4c0522]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_3_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_service_component", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["21ab5a42-35e2-4790-a186-9216d5b543ef" => "component_variable_21ab5a42_35e2_4790_a186_9216d5b543ef", "115600fd-34b2-49df-a0a2-ba13dd0f3fd8" => [["6ba8e36e-f1db-499d-8d7b-0aebc5993a58" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_0_6ba8e36e_f1db_499d_8d7b_0aebc5993a58", "5a0e45d8-f372-4f62-ad0b-a3e28f3e8674" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_0_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"], ["6ba8e36e-f1db-499d-8d7b-0aebc5993a58" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_1_6ba8e36e_f1db_499d_8d7b_0aebc5993a58", "5a0e45d8-f372-4f62-ad0b-a3e28f3e8674" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_1_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"], ["6ba8e36e-f1db-499d-8d7b-0aebc5993a58" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_2_6ba8e36e_f1db_499d_8d7b_0aebc5993a58", "5a0e45d8-f372-4f62-ad0b-a3e28f3e8674" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_2_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"], ["6ba8e36e-f1db-499d-8d7b-0aebc5993a58" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_3_6ba8e36e_f1db_499d_8d7b_0aebc5993a58", "5a0e45d8-f372-4f62-ad0b-a3e28f3e8674" => "component_variable_115600fd_34b2_49df_a0a2_ba13dd0f3fd8_3_5a0e45d8_f372_4f62_ad0b_a3e28f3e8674"]]], "d5a09df3-f886-4c78-9dba-c21da256692b", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Top 10 most popular types of pizza in Russia and Ukraine", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_83b97f4a_f164_4d63_8ce7_3a98ff6f55bc"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block856844755', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["15ce11d5-3cb9-4fb9-9243-03203f1fb671" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_highlight_cards", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["83b97f4a-f164-4d63-8ce7-3a98ff6f55bc" => "component_variable_83b97f4a_f164_4d63_8ce7_3a98ff6f55bc"]), "b157133e-a6dd-48a5-828f-b80ebdfb0011", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("8th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5ffb52fb_88aa_4e51_ab86_1f29487aee4d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Capricciosa\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1b6b9977_5387_40ed_8cef_c6deded27902"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("It can be called a classic of Italian pizza. Pizza capricciosa includes champignons, pickled cherry tomatoes, olives, ham and two types of cheese: Parmesan and Ricotta.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_9c631b39_2db5_4296_ab24_b33178f93039"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:70889e81-730f-40d7-80ee-b0ab1fc88162]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_e58560a3_60d7_4380_ad18_0401911779d1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_7c23ba68_d649_40bc_88f4_9dd2573b1227"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(230, 240, 231, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_3e369250_8cf6_4170_92e1_34e078723b06"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_spread_card_left_bg", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["5ffb52fb-88aa-4e51-ab86-1f29487aee4d" => "component_variable_5ffb52fb_88aa_4e51_ab86_1f29487aee4d", "1b6b9977-5387-40ed-8cef-c6deded27902" => "component_variable_1b6b9977_5387_40ed_8cef_c6deded27902", "9c631b39-2db5-4296-ab24-b33178f93039" => "component_variable_9c631b39_2db5_4296_ab24_b33178f93039", "e58560a3-60d7-4380-ad18-0401911779d1" => "component_variable_e58560a3_60d7_4380_ad18_0401911779d1", "7c23ba68-d649-40bc-88f4-9dd2573b1227" => "component_variable_7c23ba68_d649_40bc_88f4_9dd2573b1227", "3e369250-8cf6-4170-92e1-34e078723b06" => "component_variable_3e369250_8cf6_4170_92e1_34e078723b06"], "813ec5d7-baa2-4523-ae6b-0c3489740f24", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza Capricciosa", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_87c02d4a_2181_46bd_a8a1_a24c8f82c98c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("means \"Caprice\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_da49d91a_818b_44d6_b745_278799362486"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("The quirk is that the number of ingredients for this pizza is always varied and varies depending on the region.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_78b71d7e_acd3_46af_a579_9c9a6a00aa19"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_428e7445_1fab_436c_9ebd_15252c78d372"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("0px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_3f3c2a2c_1b94_4aad_bc65_0a6eb7a21573"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_h1_underline_top", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["87c02d4a-2181-46bd-a8a1-a24c8f82c98c" => "component_variable_87c02d4a_2181_46bd_a8a1_a24c8f82c98c", "da49d91a-818b-44d6-b745-278799362486" => "component_variable_da49d91a_818b_44d6_b745_278799362486", "78b71d7e-acd3-46af-a579-9c9a6a00aa19" => "component_variable_78b71d7e_acd3_46af_a579_9c9a6a00aa19", "428e7445-1fab-436c-9ebd-15252c78d372" => "component_variable_428e7445_1fab_436c_9ebd_15252c78d372", "3f3c2a2c-1b94-4aad-bc65-0a6eb7a21573" => "component_variable_3f3c2a2c_1b94_4aad_bc65_0a6eb7a21573"], "b37841db-f510-4d11-ac75-37e2181aaec7", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("7th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e4527e99_b10f_48fe_b739_10e08f8efbee"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Drink Calzone", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_30653ba6_dca1_41d6_8357_43f878e4a75d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("50px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5e5fef49_bc84_4bcd_acc1_8e141387955a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block406994679', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["8ce3fc51-1581-4ea9-b5e9-8068cf406a82" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block3181553121', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["272e742c-1960-4c58-8782-32af1ee58d0d" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_feature_cards", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["e4527e99-b10f-48fe-b739-10e08f8efbee" => "component_variable_e4527e99_b10f_48fe_b739_10e08f8efbee", "30653ba6-dca1-41d6-8357-43f878e4a75d" => "component_variable_30653ba6_dca1_41d6_8357_43f878e4a75d", "5e5fef49-bc84-4bcd-acc1-8e141387955a" => "component_variable_5e5fef49_bc84_4bcd_acc1_8e141387955a"]), "18517ffb-6769-4722-ad65-58aa4bd74144", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2512609331', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["15e89cb9-25ac-454c-978e-f71c3a353191" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_cards", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "6d7f5153-89f4-4a2a-a255-34599c9cde4c", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("5th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8a4e1a9c_73c3_4657_9aef_ca799e0d112b"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza with seafood", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_284ec615_bec2_4fe1_8631_d1d28a823777"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("One of the most exquisite types of pizza. The freshest seafood is used as the main ingredients. Squid, shrimp, mussels and octopus combined with creamy sauce, mozzarella cheese and herbs, what could be tastier?", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_a56c863c_ea50_419e_8b49_b5d08d0d5664"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:a6a7e68d-fbf3-41e7-b6de-4508bffd7aac]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_767cbc0b_e819_424f_be7d_d14897d1376c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_86386a5e_fb60_40fc_a072_fdd1373d4253"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_00fc77b4_86fe_4674_bed9_b832457d596b"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(230, 240, 231, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_aff53de5_1db8_4255_b11a_32df815876da"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_stretch_card_right_bg", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["8a4e1a9c-73c3-4657-9aef-ca799e0d112b" => "component_variable_8a4e1a9c_73c3_4657_9aef_ca799e0d112b", "284ec615-bec2-4fe1-8631-d1d28a823777" => "component_variable_284ec615_bec2_4fe1_8631_d1d28a823777", "a56c863c-ea50-419e-8b49-b5d08d0d5664" => "component_variable_a56c863c_ea50_419e_8b49_b5d08d0d5664", "767cbc0b-e819-424f-be7d-d14897d1376c" => "component_variable_767cbc0b_e819_424f_be7d_d14897d1376c", "86386a5e-fb60-40fc-a072-fdd1373d4253" => "component_variable_86386a5e_fb60_40fc_a072_fdd1373d4253", "00fc77b4-86fe-4674-bed9-b832457d596b" => "component_variable_00fc77b4_86fe_4674_bed9_b832457d596b", "aff53de5-1db8-4255-b11a-32df815876da" => "component_variable_aff53de5_1db8_4255_b11a_32df815876da"], "5b3d796c-73ed-47cf-a825-6868cf8480a7", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("4th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_05e40ffb_a962_4d98_b0cf_63017da33d90"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Four Cheese\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_9c847f4b_193e_4fce_acd6_429cb1a2a2b4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("A real find for lovers of noble varieties of cheese. This type of pizza does not use tomato paste, which interrupts the delicate taste and aroma of melting Mozzarella, Parmesan, Dorblu and Fontina cheeses.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8dd2a70a_2277_4c5e_915c_10668c5156b0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:6c562a11-22ec-4660-904f-720c09cd3528]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_082b67c1_6a47_43d4_9407_009934b7ceff"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(255, 209, 157, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_9d4a657d_e7f9_46a3_a7ab_b433ac796732"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8e13954e_42d3_482f_bf3a_d7d6b9d455b6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_text_right_background_left", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["05e40ffb-a962-4d98-b0cf-63017da33d90" => "component_variable_05e40ffb_a962_4d98_b0cf_63017da33d90", "9c847f4b-193e-4fce-acd6-429cb1a2a2b4" => "component_variable_9c847f4b_193e_4fce_acd6_429cb1a2a2b4", "8dd2a70a-2277-4c5e-915c-10668c5156b0" => "component_variable_8dd2a70a_2277_4c5e_915c_10668c5156b0", "082b67c1-6a47-43d4-9407-009934b7ceff" => "component_variable_082b67c1_6a47_43d4_9407_009934b7ceff", "9d4a657d-e7f9-46a3-a7ab-b433ac796732" => "component_variable_9d4a657d_e7f9_46a3_a7ab_b433ac796732", "8e13954e-42d3-482f-bf3a-d7d6b9d455b6" => "component_variable_8e13954e_42d3_482f_bf3a_d7d6b9d455b6"], "b5683cc2-fd6b-4636-80c4-9af9cee72370", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("TOP 3 PIZZAS", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_87c02d4a_2181_46bd_a8a1_a24c8f82c98c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_da49d91a_818b_44d6_b745_278799362486"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("According to our website", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_78b71d7e_acd3_46af_a579_9c9a6a00aa19"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_428e7445_1fab_436c_9ebd_15252c78d372"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("75px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_3f3c2a2c_1b94_4aad_bc65_0a6eb7a21573"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_h1_underline_top", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["87c02d4a-2181-46bd-a8a1-a24c8f82c98c" => "component_variable_87c02d4a_2181_46bd_a8a1_a24c8f82c98c", "da49d91a-818b-44d6-b745-278799362486" => "component_variable_da49d91a_818b_44d6_b745_278799362486", "78b71d7e-acd3-46af-a579-9c9a6a00aa19" => "component_variable_78b71d7e_acd3_46af_a579_9c9a6a00aa19", "428e7445-1fab-436c-9ebd-15252c78d372" => "component_variable_428e7445_1fab_436c_9ebd_15252c78d372", "3f3c2a2c-1b94-4aad-bc65-0a6eb7a21573" => "component_variable_3f3c2a2c_1b94_4aad_bc65_0a6eb7a21573"], "6ce6f461-47dd-4cde-ace9-d7ed5299ad61", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block207869363', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["15e89cb9-25ac-454c-978e-f71c3a353191" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_cards", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "2acfd1f5-643f-46b2-9069-adacde35c444", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Want to order pizza?", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1a598f2f_5244_4804_b579_542c02610704"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("We have prepared for you a large list of resources where you can place an order and choose pizza of every taste. These are home delivery services. Each of these deliveries has been personally verified by us, now we offer you to check", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ede5b37a_61a1_42f6_ae26_85190c902510"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Order", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_0e9e2a59_865a_4e67_a456_eac889a81b62"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(236, 240, 232, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2b4c75d4_33a2_4b5e_b21b_7467fe58d28f"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2568066525', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["8b686ae7-82f6-4e20-a969-9ed00318626a" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_order", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["1a598f2f-5244-4804-b579-542c02610704" => "component_variable_1a598f2f_5244_4804_b579_542c02610704", "ede5b37a-61a1-42f6-ae26-85190c902510" => "component_variable_ede5b37a_61a1_42f6_ae26_85190c902510", "0e9e2a59-865a-4e67-a456-eac889a81b62" => "component_variable_0e9e2a59_865a_4e67_a456_eac889a81b62", "2b4c75d4-33a2-4b5e-b21b-7467fe58d28f" => "component_variable_2b4c75d4_33a2_4b5e_b21b_7467fe58d28f"]), "fbcbf6e2-a09d-45d4-805a-c365e7bedb6e", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Would you like to become our partner?", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_db2f0fb1_4c75_4bc0_9582_19c6ce542a14"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(254, 241, 227, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e3596509_eb1e_41f7_9ebe_3ee6948b9681"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_partnership", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["db2f0fb1-4c75-4bc0-9582-19c6ce542a14" => "component_variable_db2f0fb1_4c75_4bc0_9582_19c6ce542a14", "e3596509-eb1e-41f7-9ebe-3ee6948b9681" => "component_variable_e3596509_eb1e_41f7_9ebe_3ee6948b9681"], "36fa067b-eaf4-42c4-be94-faa54c032b3f", ""), "html", null, true);
        echo " ";
        $context["component_variable_729d0e4a_dc30_49ba_b230_4fea43c62f5a"] = 3;
        echo " ";
        $context["component_variable_86d18710_d04e_4c53_96f9_8c29dc4f39a9"] = 1;
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2128916370', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["951a6f33-ab3c-46ec-bdbd-1233e5580e1d" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_recipes", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["729d0e4a-dc30-49ba-b230-4fea43c62f5a" => "component_variable_729d0e4a_dc30_49ba_b230_4fea43c62f5a", "86d18710-d04e-4c53-96f9-8c29dc4f39a9" => "component_variable_86d18710_d04e_4c53_96f9_8c29dc4f39a9"]), "2126d2b2-0f44-4fc2-add9-e914dcaaf0ea", ""), "html", null, true);
        echo " </div> </div> </article> 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_suffix", "media_reference", "_context", "dropZones"]);    }

    public function block_block856844755($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "4e3fb235-1e99-4200-af79-add8b034f9d5", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("10th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_05e40ffb_a962_4d98_b0cf_63017da33d90"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Four Seasons\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_9c847f4b_193e_4fce_acd6_429cb1a2a2b4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Each of the four parts of the base contains completely different fillings, symbolising the seasons. An excellent option for lovers of variety and original design of dishes.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8dd2a70a_2277_4c5e_915c_10668c5156b0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:fcc42820-9738-4a63-b8fb-6ca983aa6079]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_082b67c1_6a47_43d4_9407_009934b7ceff"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8e13954e_42d3_482f_bf3a_d7d6b9d455b6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(230, 240, 231, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_9d4a657d_e7f9_46a3_a7ab_b433ac796732"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_text_right_background_left", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["05e40ffb-a962-4d98-b0cf-63017da33d90" => "component_variable_05e40ffb_a962_4d98_b0cf_63017da33d90", "9c847f4b-193e-4fce-acd6-429cb1a2a2b4" => "component_variable_9c847f4b_193e_4fce_acd6_429cb1a2a2b4", "8dd2a70a-2277-4c5e-915c-10668c5156b0" => "component_variable_8dd2a70a_2277_4c5e_915c_10668c5156b0", "082b67c1-6a47-43d4-9407-009934b7ceff" => "component_variable_082b67c1_6a47_43d4_9407_009934b7ceff", "8e13954e-42d3-482f-bf3a-d7d6b9d455b6" => "component_variable_8e13954e_42d3_482f_bf3a_d7d6b9d455b6", "9d4a657d-e7f9-46a3-a7ab-b433ac796732" => "component_variable_9d4a657d_e7f9_46a3_a7ab_b433ac796732"], "f3429fe6-2cac-48e8-908b-57a5648bbd8a", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("9th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_23e3d728_dbf6_4f98_8eb3_820612924208"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Hawaiian\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_f89e8c9e_ac12_4963_b9b7_35c3f1adc1a1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("This species got it's name, thanks to one of the main ingredients, which resembles the bright sun on the Hawaiian Islands - pineapple. In addition, the pizza includes cream sauce, ham, red onion and mozzarella cheese.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_f2096eae_f06b_4578_875e_16039d2c9d71"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:8b8a63ce-35bd-41dd-bf03-051fb4e0ca73]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_ad0b34fd_f795_41ec_826a_5f2bf80f07a6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5592e02c_f51b_4ee4_a8bb_e4953fb116e6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(254, 241, 227, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2ba71261_f58b_4b05_9b76_a8900b9e2cba"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_text_left_background_right", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["23e3d728-dbf6-4f98-8eb3-820612924208" => "component_variable_23e3d728_dbf6_4f98_8eb3_820612924208", "f89e8c9e-ac12-4963-b9b7-35c3f1adc1a1" => "component_variable_f89e8c9e_ac12_4963_b9b7_35c3f1adc1a1", "f2096eae-f06b-4578-875e-16039d2c9d71" => "component_variable_f2096eae_f06b_4578_875e_16039d2c9d71", "ad0b34fd-f795-41ec-826a-5f2bf80f07a6" => "component_variable_ad0b34fd_f795_41ec_826a_5f2bf80f07a6", "5592e02c-f51b-4ee4-a8bb-e4953fb116e6" => "component_variable_5592e02c_f51b_4ee4_a8bb_e4953fb116e6", "2ba71261-f58b-4b05-9b76-a8900b9e2cba" => "component_variable_2ba71261_f58b_4b05_9b76_a8900b9e2cba"], "a7137b6b-9cab-4db8-9bb6-69f2c1168769", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "4e3fb235-1e99-4200-af79-add8b034f9d5", "end"), "html", null, true);
    }

    public function block_block406994679($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0edb0620-55cb-4fe8-abac-bbb2feeec499", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(254, 241, 227, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_922c1687_abbc_485f_b950_c8833c08fc3d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:b115aeb3-2c4b-4f5d-8b01-3bc17b29ec5b]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_cb6bba42_dd42_4e28_80fa_9cd140a9419d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("The filling in this type of pizza is hidden inside the dough and it's shape resembles an envelope. In some areas of Italy, Calzone is used a snack.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_45c2025b_c2cb_4406_8c75_dae86344ac16"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_feature", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["922c1687-abbc-485f-b950-c8833c08fc3d" => "component_variable_922c1687_abbc_485f_b950_c8833c08fc3d", "cb6bba42-dd42-4e28-80fa-9cd140a9419d" => "component_variable_cb6bba42_dd42_4e28_80fa_9cd140a9419d", "45c2025b-c2cb-4406-8c75-dae86344ac16" => "component_variable_45c2025b_c2cb_4406_8c75_dae86344ac16"], "0e0921eb-242c-4b5e-9223-1dff92364961", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0edb0620-55cb-4fe8-abac-bbb2feeec499", "end"), "html", null, true);
    }

    public function block_block3181553121($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "9acb10a7-e245-4f73-ae21-9e4045cf0a24", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(230, 240, 231, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_922c1687_abbc_485f_b950_c8833c08fc3d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:62eb66f6-1010-42ef-8c7b-5ae156956c33]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_cb6bba42_dd42_4e28_80fa_9cd140a9419d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("It is prepared with both salty and sweet fillings. Calzone is considered a type of pizza; calzone dough is prepared in the same way as pizza dough.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_45c2025b_c2cb_4406_8c75_dae86344ac16"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_feature", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["922c1687-abbc-485f-b950-c8833c08fc3d" => "component_variable_922c1687_abbc_485f_b950_c8833c08fc3d", "cb6bba42-dd42-4e28-80fa-9cd140a9419d" => "component_variable_cb6bba42_dd42_4e28_80fa_9cd140a9419d", "45c2025b-c2cb-4406-8c75-dae86344ac16" => "component_variable_45c2025b_c2cb_4406_8c75_dae86344ac16"], "3001789a-3f92-4135-bbd9-450e3ad0f2ca", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "9acb10a7-e245-4f73-ae21-9e4045cf0a24", "end"), "html", null, true);
    }

    public function block_block2512609331($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "57c5114d-4d28-40b0-a83f-8a2ffde39583", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("6th place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_408edd3f_a192_4264_a222_cd6a06bab4b3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Neapolitan\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_18230d78_bdd5_4504_b7ce_e4e7655aa71d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("This particular pizza was on the menu of the very first pizzaria. She can be called the founder of this Italian dish. It's recipe was legalised by the Minister of Agriculture of Italy, which is why it is not subject to change.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_6ea798ad_a14f_49c7_b52f_8a5642104145"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_4e7bc3fc_2e28_4e39_a0ac_c7dc77caad10"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:2d135daa-c66c-4f61-9b7c-7eb45820c052]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_949e05de_d6c7_42a3_be7d_a1a6b6bb6e51"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(255, 209, 157, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_dd3cf54a_d8c0_4a7a_a60d_40f39e4ac5e3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(255, 255, 255, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e0b3f7c7_8e62_4ca6_a2ac_a4b21cd415e6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_card", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["408edd3f-a192-4264-a222-cd6a06bab4b3" => "component_variable_408edd3f_a192_4264_a222_cd6a06bab4b3", "18230d78-bdd5-4504-b7ce-e4e7655aa71d" => "component_variable_18230d78_bdd5_4504_b7ce_e4e7655aa71d", "6ea798ad-a14f-49c7-b52f-8a5642104145" => "component_variable_6ea798ad_a14f_49c7_b52f_8a5642104145", "4e7bc3fc-2e28-4e39-a0ac-c7dc77caad10" => "component_variable_4e7bc3fc_2e28_4e39_a0ac_c7dc77caad10", "949e05de-d6c7-42a3-be7d-a1a6b6bb6e51" => "component_variable_949e05de_d6c7_42a3_be7d_a1a6b6bb6e51", "dd3cf54a-d8c0-4a7a-a60d-40f39e4ac5e3" => "component_variable_dd3cf54a_d8c0_4a7a_a60d_40f39e4ac5e3", "e0b3f7c7-8e62-4ca6-a2ac-a4b21cd415e6" => "component_variable_e0b3f7c7_8e62_4ca6_a2ac_a4b21cd415e6"], "38ce16cf-b7a1-42eb-9f10-5782bdbe7d06", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "57c5114d-4d28-40b0-a83f-8a2ffde39583", "end"), "html", null, true);
    }

    public function block_block207869363($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "2e1e7197-6d5a-466e-b410-c05c1dade5b8", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("3rd place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_742df1e9_d1b0_452c_9382_c55fdcb22bb9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza Diabola", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_86eeca36_9944_41df_ad9d_87568ab69376"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("This pizza is preferred by fans of spicy dishes. Thanks to pepperoni sausages, bacon, bell peppers, Mozzarella cheese and Shirachi sauce, it's taste is very rich and multifaceted.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ada58781_2587_4a64_8fab_66f580312e68"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5b511971_af48_49e8_9e84_10bd09d8516b"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:b71366db-ae5f-49cf-b3ea-9ff339560bb6]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_bebbbf47_9922_43ac_a1ee_a0e0180e5d7c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(254, 241, 227, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2ed01306_daf4_4ef5_91e1_39749e300234"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_910de41f_8696_4d8f_a0f3_2254c1b80723"] = true;
        echo " ";
        ob_start(function () { return ''; });
        echo t("Order", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8b5dcf46_a68a_44b0_aa54_5dc4baf76124"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_c2cdac00_d9cf_4ffe_a1c7_9ad43b21a4ac"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_card_right_image", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["742df1e9-d1b0-452c-9382-c55fdcb22bb9" => "component_variable_742df1e9_d1b0_452c_9382_c55fdcb22bb9", "86eeca36-9944-41df-ad9d-87568ab69376" => "component_variable_86eeca36_9944_41df_ad9d_87568ab69376", "ada58781-2587-4a64-8fab-66f580312e68" => "component_variable_ada58781_2587_4a64_8fab_66f580312e68", "5b511971-af48-49e8-9e84-10bd09d8516b" => "component_variable_5b511971_af48_49e8_9e84_10bd09d8516b", "bebbbf47-9922-43ac-a1ee-a0e0180e5d7c" => "component_variable_bebbbf47_9922_43ac_a1ee_a0e0180e5d7c", "2ed01306-daf4-4ef5-91e1-39749e300234" => "component_variable_2ed01306_daf4_4ef5_91e1_39749e300234", "910de41f-8696-4d8f-a0f3-2254c1b80723" => "component_variable_910de41f_8696_4d8f_a0f3_2254c1b80723", "8b5dcf46-a68a-44b0-aa54-5dc4baf76124" => "component_variable_8b5dcf46_a68a_44b0_aa54_5dc4baf76124", "c2cdac00-d9cf-4ffe-a1c7-9ad43b21a4ac" => "component_variable_c2cdac00_d9cf_4ffe_a1c7_9ad43b21a4ac"], "0b7dd8e1-5dfc-43f2-9521-9d4da2ea614f", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("2nd place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_408edd3f_a192_4264_a222_cd6a06bab4b3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Sicilian\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_18230d78_bdd5_4504_b7ce_e4e7655aa71d"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Soft, incredibly juicy pizza with an unusual square shape. It consists of three main ingredients: Pecorino cheese, anchovies and a lot of tomatoes. Onions, herbs, olives or mushrooms are added if desired.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_6ea798ad_a14f_49c7_b52f_8a5642104145"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_4e7bc3fc_2e28_4e39_a0ac_c7dc77caad10"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c34e715b-e8b0-4e52-9be3-b733514c31fd]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_949e05de_d6c7_42a3_be7d_a1a6b6bb6e51"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(230, 240, 231, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_dd3cf54a_d8c0_4a7a_a60d_40f39e4ac5e3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e0b3f7c7_8e62_4ca6_a2ac_a4b21cd415e6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_4732a1e4_543f_4bda_b4fd_b8624eecfe3d"] = true;
        echo " ";
        ob_start(function () { return ''; });
        echo t("Order", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_64f6ebb7_2297_412a_aec5_9e8f8471a7c8"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_card", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["408edd3f-a192-4264-a222-cd6a06bab4b3" => "component_variable_408edd3f_a192_4264_a222_cd6a06bab4b3", "18230d78-bdd5-4504-b7ce-e4e7655aa71d" => "component_variable_18230d78_bdd5_4504_b7ce_e4e7655aa71d", "6ea798ad-a14f-49c7-b52f-8a5642104145" => "component_variable_6ea798ad_a14f_49c7_b52f_8a5642104145", "4e7bc3fc-2e28-4e39-a0ac-c7dc77caad10" => "component_variable_4e7bc3fc_2e28_4e39_a0ac_c7dc77caad10", "949e05de-d6c7-42a3-be7d-a1a6b6bb6e51" => "component_variable_949e05de_d6c7_42a3_be7d_a1a6b6bb6e51", "dd3cf54a-d8c0-4a7a-a60d-40f39e4ac5e3" => "component_variable_dd3cf54a_d8c0_4a7a_a60d_40f39e4ac5e3", "e0b3f7c7-8e62-4ca6-a2ac-a4b21cd415e6" => "component_variable_e0b3f7c7_8e62_4ca6_a2ac_a4b21cd415e6", "4732a1e4-543f-4bda-b4fd-b8624eecfe3d" => "component_variable_4732a1e4_543f_4bda_b4fd_b8624eecfe3d", "64f6ebb7-2297-412a-aec5-9e8f8471a7c8" => "component_variable_64f6ebb7_2297_412a_aec5_9e8f8471a7c8"], "d4cc4eb4-2d16-4dee-8470-fd225f0c0824", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("1st place.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_742df1e9_d1b0_452c_9382_c55fdcb22bb9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza Margherita", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_86eeca36_9944_41df_ad9d_87568ab69376"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("The most popular pizza not only in Russia, but throughout the world. It's composition is extremely simple: tomato or cream sauce, tomatoes and a lot of Mozzarella cheese. A classic that is definitely worth trying.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ada58781_2587_4a64_8fab_66f580312e68"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5b511971_af48_49e8_9e84_10bd09d8516b"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:a2d5667a-163c-46b6-a2e5-17785fac47bb]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_bebbbf47_9922_43ac_a1ee_a0e0180e5d7c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(254, 241, 227, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2ed01306_daf4_4ef5_91e1_39749e300234"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_c2cdac00_d9cf_4ffe_a1c7_9ad43b21a4ac"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_910de41f_8696_4d8f_a0f3_2254c1b80723"] = true;
        echo " ";
        ob_start(function () { return ''; });
        echo t("Order", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8b5dcf46_a68a_44b0_aa54_5dc4baf76124"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_card_right_image", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["742df1e9-d1b0-452c-9382-c55fdcb22bb9" => "component_variable_742df1e9_d1b0_452c_9382_c55fdcb22bb9", "86eeca36-9944-41df-ad9d-87568ab69376" => "component_variable_86eeca36_9944_41df_ad9d_87568ab69376", "ada58781-2587-4a64-8fab-66f580312e68" => "component_variable_ada58781_2587_4a64_8fab_66f580312e68", "5b511971-af48-49e8-9e84-10bd09d8516b" => "component_variable_5b511971_af48_49e8_9e84_10bd09d8516b", "bebbbf47-9922-43ac-a1ee-a0e0180e5d7c" => "component_variable_bebbbf47_9922_43ac_a1ee_a0e0180e5d7c", "2ed01306-daf4-4ef5-91e1-39749e300234" => "component_variable_2ed01306_daf4_4ef5_91e1_39749e300234", "c2cdac00-d9cf-4ffe-a1c7-9ad43b21a4ac" => "component_variable_c2cdac00_d9cf_4ffe_a1c7_9ad43b21a4ac", "910de41f-8696-4d8f-a0f3-2254c1b80723" => "component_variable_910de41f_8696_4d8f_a0f3_2254c1b80723", "8b5dcf46-a68a-44b0-aa54-5dc4baf76124" => "component_variable_8b5dcf46_a68a_44b0_aa54_5dc4baf76124"], "14c95d19-bc80-4c9d-9fe9-add6e32c1ae1", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "2e1e7197-6d5a-466e-b410-c05c1dade5b8", "end"), "html", null, true);
    }

    public function block_block2568066525($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0412d116-cc19-4f0e-89ca-2ea7082635d5", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c6b49a92-598e-457d-9e94-a6b3de4c0522]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_ce82d640_d0d2_43f9_b043_c77d5cdcfde4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c27d9914-19d2-4ff2-a722-7734f0891fd7]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_7dddbbba_0282_458a_8bbc_e5f41bf46c5a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:eaf5616c-69f8-43ff-b0a8-bcd00828996e]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_afd4320d_ca43_417b_94c8_366bc5c06bc3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c6b49a92-598e-457d-9e94-a6b3de4c0522]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_ce82d640_d0d2_43f9_b043_c77d5cdcfde4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:818ec40c-bb1a-4b92-8327-f6cd4310ba4e]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_7dddbbba_0282_458a_8bbc_e5f41bf46c5a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:bd0bae54-0437-40fd-99cc-5b6f6f8beb55]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_afd4320d_ca43_417b_94c8_366bc5c06bc3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c6b49a92-598e-457d-9e94-a6b3de4c0522]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_ce82d640_d0d2_43f9_b043_c77d5cdcfde4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:88cb1ad6-87e1-4a24-aa81-d79d437f3508]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_7dddbbba_0282_458a_8bbc_e5f41bf46c5a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:754867ca-85c1-40f7-b9de-25966fd6c058]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_afd4320d_ca43_417b_94c8_366bc5c06bc3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:da0f2242-f5b9-49a9-9e08-96e53cb4e03d]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_ce82d640_d0d2_43f9_b043_c77d5cdcfde4"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:70d0317d-4d7b-4cac-8d99-df4f63d0983c]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_7dddbbba_0282_458a_8bbc_e5f41bf46c5a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:93f3c327-b42f-4ee1-a366-af094b1b53e3]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_afd4320d_ca43_417b_94c8_366bc5c06bc3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_brands", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["6342ed4c-f9bd-45c1-baa8-81a5a3e72806" => [["ce82d640-d0d2-43f9-b043-c77d5cdcfde4" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_ce82d640_d0d2_43f9_b043_c77d5cdcfde4", "7dddbbba-0282-458a-8bbc-e5f41bf46c5a" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_7dddbbba_0282_458a_8bbc_e5f41bf46c5a", "afd4320d-ca43-417b-94c8-366bc5c06bc3" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_0_afd4320d_ca43_417b_94c8_366bc5c06bc3"], ["ce82d640-d0d2-43f9-b043-c77d5cdcfde4" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_ce82d640_d0d2_43f9_b043_c77d5cdcfde4", "7dddbbba-0282-458a-8bbc-e5f41bf46c5a" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_7dddbbba_0282_458a_8bbc_e5f41bf46c5a", "afd4320d-ca43-417b-94c8-366bc5c06bc3" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_1_afd4320d_ca43_417b_94c8_366bc5c06bc3"], ["ce82d640-d0d2-43f9-b043-c77d5cdcfde4" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_ce82d640_d0d2_43f9_b043_c77d5cdcfde4", "7dddbbba-0282-458a-8bbc-e5f41bf46c5a" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_7dddbbba_0282_458a_8bbc_e5f41bf46c5a", "afd4320d-ca43-417b-94c8-366bc5c06bc3" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_2_afd4320d_ca43_417b_94c8_366bc5c06bc3"], ["ce82d640-d0d2-43f9-b043-c77d5cdcfde4" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_ce82d640_d0d2_43f9_b043_c77d5cdcfde4", "7dddbbba-0282-458a-8bbc-e5f41bf46c5a" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_7dddbbba_0282_458a_8bbc_e5f41bf46c5a", "afd4320d-ca43-417b-94c8-366bc5c06bc3" => "component_variable_6342ed4c_f9bd_45c1_baa8_81a5a3e72806_3_afd4320d_ca43_417b_94c8_366bc5c06bc3"]]], "bbce636f-b685-47d0-b4ae-e174b4a7a2a6", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0412d116-cc19-4f0e-89ca-2ea7082635d5", "end"), "html", null, true);
    }

    public function block_block2128916370($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "f7aa201c-c34f-49dc-96f8-a0a39670cf10", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Salami\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_8039ee51_a60f_4dbe_9831_06b1773d68d0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("This pizza turns out thin, just like in an Italian pizzeria. I don't like fully pizzas.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_85790fdc_3813_4040_a60d_96daafa8e5d3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("More details", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_dc3923c0_68c7_406a_8418_4e91770ce143"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:53214fde-68e6-4fdc-b7d4-266f8bfc5bea]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Regina\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_8039ee51_a60f_4dbe_9831_06b1773d68d0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza dough in a bread machine turns out excellent. It's a fact!", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_85790fdc_3813_4040_a60d_96daafa8e5d3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("More details", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_dc3923c0_68c7_406a_8418_4e91770ce143"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:c39e6db4-3ce8-4a50-9491-f922b336671d]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Diverdura\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_8039ee51_a60f_4dbe_9831_06b1773d68d0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Roll out the yeast dough. Grease a baking tray with oil and place the dough on it.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_85790fdc_3813_4040_a60d_96daafa8e5d3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("More details", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_dc3923c0_68c7_406a_8418_4e91770ce143"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:101b34cb-a9be-4892-af66-886c955f3f8a]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Pizza \"Diverdura\"", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_8039ee51_a60f_4dbe_9831_06b1773d68d0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Roll out the yeast dough. Grease a baking tray with oil and place the dough on it.", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_85790fdc_3813_4040_a60d_96daafa8e5d3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("More details", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_dc3923c0_68c7_406a_8418_4e91770ce143"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:101b34cb-a9be-4892-af66-886c955f3f8a]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("12px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_786a8a8d_ae32_4594_9482_ad4f3d2b84b2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("rgba(251, 174, 97, 1)", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ed362bf5_72ca_4586_a2c9_91a41482d940"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("25px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_016e31b8_417f_4150_8ca8_616158033124"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_recipe", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["644ca430-34b2-4c9a-8a11-3d1fd743d607" => [["8039ee51-a60f-4dbe-9831-06b1773d68d0" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_8039ee51_a60f_4dbe_9831_06b1773d68d0", "85790fdc-3813-4040-a60d-96daafa8e5d3" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_85790fdc_3813_4040_a60d_96daafa8e5d3", "dc3923c0-68c7-406a-8418-4e91770ce143" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_dc3923c0_68c7_406a_8418_4e91770ce143", "8daa74e8-4fce-4a27-9825-5fa7b62c9ed5" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_0_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"], ["8039ee51-a60f-4dbe-9831-06b1773d68d0" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_8039ee51_a60f_4dbe_9831_06b1773d68d0", "85790fdc-3813-4040-a60d-96daafa8e5d3" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_85790fdc_3813_4040_a60d_96daafa8e5d3", "dc3923c0-68c7-406a-8418-4e91770ce143" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_dc3923c0_68c7_406a_8418_4e91770ce143", "8daa74e8-4fce-4a27-9825-5fa7b62c9ed5" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_1_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"], ["8039ee51-a60f-4dbe-9831-06b1773d68d0" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_8039ee51_a60f_4dbe_9831_06b1773d68d0", "85790fdc-3813-4040-a60d-96daafa8e5d3" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_85790fdc_3813_4040_a60d_96daafa8e5d3", "dc3923c0-68c7-406a-8418-4e91770ce143" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_dc3923c0_68c7_406a_8418_4e91770ce143", "8daa74e8-4fce-4a27-9825-5fa7b62c9ed5" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_2_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"], ["8039ee51-a60f-4dbe-9831-06b1773d68d0" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_8039ee51_a60f_4dbe_9831_06b1773d68d0", "85790fdc-3813-4040-a60d-96daafa8e5d3" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_85790fdc_3813_4040_a60d_96daafa8e5d3", "dc3923c0-68c7-406a-8418-4e91770ce143" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_dc3923c0_68c7_406a_8418_4e91770ce143", "8daa74e8-4fce-4a27-9825-5fa7b62c9ed5" => "component_variable_644ca430_34b2_4c9a_8a11_3d1fd743d607_3_8daa74e8_4fce_4a27_9825_5fa7b62c9ed5"]], "786a8a8d-ae32-4594-9482-ad4f3d2b84b2" => "component_variable_786a8a8d_ae32_4594_9482_ad4f3d2b84b2", "ed362bf5-72ca-4586-a2c9-91a41482d940" => "component_variable_ed362bf5_72ca_4586_a2c9_91a41482d940", "016e31b8-417f-4150-8ca8-616158033124" => "component_variable_016e31b8_417f_4150_8ca8_616158033124"], "5955c91f-bbf6-44a1-b19b-a218fc099424", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "f7aa201c-c34f-49dc-96f8-a0a39670cf10", "end"), "html", null, true);
    }

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
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/node--cohesion--node-landing-page-full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "block" => 1, "if" => 1);
        static $filters = array("escape" => 1, "merge" => 1);
        static $functions = array("attach_library" => 1, "get_content_language" => 1, "processtoken" => 1, "renderComponent" => 1, "frontendBuilderDropzone" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if'],
                ['escape', 'merge'],
                ['attach_library', 'get_content_language', 'processtoken', 'renderComponent', 'frontendBuilderDropzone']
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
