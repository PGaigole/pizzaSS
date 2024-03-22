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

/* __string_template__248828943943f381fdd8f7ee66e92e8a */
class __TwigTemplate_df29ec3c9569eda0c8cd208b4b886ef7 extends Template
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
        echo ".coh-style-button-link {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 0.875rem;
  font-style: normal;
  background-color: rgb(251, 174, 97);
  padding-top: 0.75rem;
  padding-right: 1.5rem;
  padding-bottom: 0.75rem;
  padding-left: 1.5rem;
  display: inline-block;
}
.coh-style-recipe-paragraph {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 500;
  color: rgb(0, 0, 0);
  font-size: 1rem;
  line-height: 1rem;
  text-align: center;
  margin-top: 1.25rem;
  margin-right: 0;
  margin-bottom: 1.25rem;
  margin-left: 0;
}
.coh-style-social-icons, .coh-style-facebook, .coh-style-vimeo, .coh-style-instagram {
  margin-bottom: 0;
  margin-left: 0;
  display: inline-block;
  list-style-type: none;
  font-size: 1.5rem;
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}
.coh-style-social-icons a, .coh-style-facebook a, .coh-style-vimeo a, .coh-style-instagram a {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-align-content: center;
      -ms-flex-line-pack: center;
          align-content: center;
  color: rgb(136, 136, 136);
}
.coh-style-instagram {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: rgb(136, 136, 136);
  font-size: 1.5rem;
}
.coh-style-instagram a:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f16d\";
  font-family: Fontello;
}
.coh-style-vimeo {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-size: 1.5rem;
  color: rgb(136, 136, 136);
}
.coh-style-vimeo a:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f189\";
  font-family: Fontello;
}
.coh-style-facebook {
  color: rgb(136, 136, 136);
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-size: 1.5rem;
}
.coh-style-facebook a:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f09a\";
  font-family: Fontello;
}
.coh-ce-cpt_blog-82a554bc {
  background-color: rgb(15, 224, 39);
}
.coh-ce-cpt_brands-265aa6e4 {
  gap: 24px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-align-content: center;
      -ms-flex-line-pack: center;
          align-content: center;
}
.coh-ce-cpt_brands-400c467a {
  gap: 12px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-align-content: center;
      -ms-flex-line-pack: center;
          align-content: center;
}
.coh-ce-cpt_feature-8c507962 {
  padding-top: 3.125rem;
  padding-right: 3.125rem;
  padding-bottom: 3.125rem;
  padding-left: 3.125rem;
  width: 70%;
}
.coh-ce-cpt_feature-cf78dd02 {
  width: 50%;
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
}
.coh-ce-cpt_feature_cards-f524e889 {
  margin-right: 12.5rem;
  margin-left: 12.5rem;
}
.coh-ce-cpt_feature_cards-c17283a {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 25px;
}
.coh-ce-cpt_footer-7bcecd39 {
  background-color: rgb(236, 240, 232);
}
.coh-ce-cpt_footer-e357fd7a {
  padding-top: 1.875rem;
  padding-bottom: 1.875rem;
}
.coh-ce-cpt_footer-dfdc568f {
  gap: 30px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.coh-ce-cpt_footer-81584222 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-ce-cpt_footer-812d31e6 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(136, 136, 136);
  font-size: 1rem;
  font-style: normal;
}
.coh-ce-cpt_h3_underline_center-2025b166 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.75rem;
  text-align: left;
  font-style: normal;
  margin-bottom: 0;
}
.coh-ce-cpt_h3_underline_left-3091f52f {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.75rem;
  font-style: normal;
  margin-bottom: 0;
  text-align: left;
}
.coh-ce-cpt_h6_underline_left-130610d7 {
  margin-bottom: 0;
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  text-align: left;
  font-size: 1rem;
  font-style: normal;
  font-weight: 700;
  color: rgb(0, 0, 0);
  line-height: 20px;
}
.coh-ce-cpt_highlight_cards-163b04bf {
  margin-top: 3.125rem;
  margin-bottom: 3.125rem;
  gap: 50px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.coh-ce-cpt_highlight_cards-52b71112 {
  margin-bottom: 0;
}
.coh-ce-cpt_order-4a241df4 {
  margin-bottom: 3.125rem;
}
.coh-ce-cpt_order-f41207a6 .slick-slider {
  margin-right: 4.375rem;
  margin-left: 4.375rem;
}
.coh-ce-cpt_order-f41207a6 .coh-slider-container-mid .slick-arrow {
  color: rgb(251, 174, 97);
  background-color: rgb(255, 209, 157);
  height: 2.8125rem;
  width: 2.8125rem;
  -webkit-border-radius: 50%;
          border-radius: 50%;
}

.coh-ce-cpt_promoted_card-6f9f435 {
  right: -100px;
  width: 80%;
  float: right;
  position: relative;
  z-index: 1;
}
.coh-ce-cpt_promoted_card-6f9f435:before, .coh-ce-cpt_promoted_card-6f9f435:after {
  clear: none;
  content: normal;
  display: inline;
}
.coh-ce-cpt_promoted_card-37cb6501 {
  margin-top: 3.125rem;
}
.coh-ce-cpt_promoted_card_right_image-37cb6501 {
  margin-top: 3.125rem;
}
.coh-ce-cpt_promoted_card_right_image-4bdd9d30 {
  left: -100px;
  width: 80%;
  position: relative;
  float: left;
}
.coh-ce-cpt_promoted_card_right_image-4bdd9d30:before, .coh-ce-cpt_promoted_card_right_image-4bdd9d30:after {
  clear: none;
  content: normal;
  display: inline;
}
.coh-ce-cpt_promoted_cards-699501f6 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 100px;
}
.coh-ce-cpt_recipe-5c7424df {
  gap: 12px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.coh-ce-cpt_recipe-a6e4c0ca {
  -o-object-fit: cover;
     object-fit: cover;
  aspect-ratio: 1;
}
.coh-ce-cpt_recipe-e640709e {
  width: 80%;
}
.coh-ce-cpt_recipe-b9ef1a51 {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}
.coh-ce-cpt_recipes-aa88f1f4 {
  margin-top: 6.25rem;
  margin-right: 10.625rem;
  margin-bottom: 6.25rem;
  margin-left: 10.625rem;
}
.coh-ce-cpt_recipes-3b44d206 {
  margin-right: 4.375rem;
  margin-left: 4.375rem;
}
.coh-ce-cpt_recipes-3b44d206 .coh-slider-container-mid > .coh-slider-container-inner > .slick-list.draggable {
  margin-right: 3.125rem;
  margin-left: 3.125rem;
}
.coh-ce-cpt_recipes-3b44d206 .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  height: 2.8125rem;
  width: 2.8125rem;
  -webkit-border-radius: 50%;
          border-radius: 50%;
  background-color: rgb(255, 209, 157);
  color: rgb(251, 174, 97);
}
.coh-ce-cpt_service-7b96fd3d {
  background-color: rgb(255, 209, 157);
  padding-top: 2.1875rem;
  padding-right: 2.1875rem;
  padding-bottom: 2.1875rem;
  padding-left: 2.1875rem;
  -webkit-border-radius: 50%;
          border-radius: 50%;
}
.coh-ce-cpt_service-d0dc19a5 {
  min-width: 2.1875rem;
  max-width: 4.6875rem;
}
.coh-ce-cpt_service-9bf9b60b {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 0.875rem;
  font-style: normal;
}
.coh-ce-cpt_service_component-24823d48 {
  margin-top: 3.125rem;
  margin-bottom: 3.125rem;
  padding-right: 9.375rem;
  padding-left: 9.375rem;
}
@media (max-width: 1023px) {
  .coh-ce-cpt_service_component-24823d48 {
    padding-right: 3.125rem;
    padding-left: 3.125rem;
  }
}
.coh-ce-cpt_service_component-56698409 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 30px;
}
.coh-ce-cpt_spread_card_left_bg-9c9f8786 {
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-ce-cpt_spread_card_left_bg-619dc40c {
  padding-top: 3.125rem;
  padding-right: 0;
  padding-bottom: 3.125rem;
  padding-left: 0;
  margin-left: -6.25rem;
}
@media (max-width: 1399px) {
  .coh-ce-cpt_spread_card_left_bg-619dc40c {
    margin-left: -6.25rem;
  }
}
@media (max-width: 1169px) {
  .coh-ce-cpt_spread_card_left_bg-619dc40c {
    margin-left: -6.25rem;
  }
}
@media (max-width: 1023px) {
  .coh-ce-cpt_spread_card_left_bg-619dc40c {
    margin-left: -3.125rem;
  }
}
@media (max-width: 767px) {
  .coh-ce-cpt_spread_card_left_bg-619dc40c {
    margin-left: -1.875rem;
  }
}
@media (max-width: 564px) {
  .coh-ce-cpt_spread_card_left_bg-619dc40c {
    margin-left: -1.25rem;
  }
}
.coh-ce-cpt_spread_card_left_bg-69214f81 {
  margin-right: 12.5rem;
  margin-left: -6.25rem;
}
.coh-ce-cpt_spread_cards-e0090c98 {
  gap: 50px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.coh-ce-cpt_stretch_card_right_bg-a63fe5f4 {
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
}
.coh-ce-cpt_stretch_card_right_bg-c2bba0e4 {
  margin-right: -6.25rem;
  margin-left: 12.5rem;
}
.coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
  padding-top: 3.125rem;
  padding-bottom: 3.125rem;
  margin-left: 6.25rem;
}
@media (max-width: 1399px) {
  .coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
    margin-left: 6.25rem;
  }
}
@media (max-width: 1169px) {
  .coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
    margin-left: 6.25rem;
  }
}
@media (max-width: 1023px) {
  .coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
    margin-left: 3.125rem;
  }
}
@media (max-width: 767px) {
  .coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
    margin-left: 1.875rem;
  }
}
@media (max-width: 564px) {
  .coh-ce-cpt_stretch_card_right_bg-e266e4d4 {
    margin-left: 1.25rem;
  }
}
.coh-ce-cpt_text_left_background_right-bf114bdb {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-ce-cpt_text_left_background_right-ef1ad19 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.coh-ce-cpt_text_left_background_right-adc8896b {
  padding-left: 12.5rem;
}
.coh-ce-cpt_text_left_background_right-aa232bce {
  padding-top: 3.125rem;
  padding-right: 3.125rem;
  padding-bottom: 3.125rem;
}
.coh-ce-cpt_text_right_background_left-8e8ffac6 {
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-ce-cpt_text_right_background_left-c456aa63 {
  padding-top: 3.125rem;
  padding-bottom: 3.125rem;
  padding-left: 3.125rem;
  background-image: none;
}
.coh-ce-cpt_text_right_background_left-31a14708 {
  padding-right: 12.5rem;
}
.coh-ce-cpt_text_right_background_left-52217b35 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 0.875rem;
  font-style: normal;
}
.coh-ce-3b9b9980 {
  background-color: rgb(228, 24, 11);
}
.coh-ce-26e2cedf {
  gap: 50px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.coh-ce-26e2cedf:before {
  content: none;
}
.coh-ce-26e2cedf:last-child {
  gap: 50px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}

.coh-ce-a6e4c0ca {
  -o-object-fit: cover;
     object-fit: cover;
  aspect-ratio: 1;
}

.coh-ce-b864fc20 {
  background-color: rgb(0, 0, 0);
}
.coh-ce-8a4610ad {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-ce-ebaf915f {
  margin-right: 4.375rem;
  margin-left: 4.375rem;
}
.coh-ce-ebaf915f .coh-view-contents {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  gap: 10px;
}
.coh-ce-ebaf915f .coh-slider-container-mid > .coh-slider-container-inner > .slick-list.draggable {
  margin-right: 3.125rem;
  margin-left: 3.125rem;
}
.coh-ce-ebaf915f .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  color: rgb(251, 174, 97);
  background-color: rgb(255, 209, 157);
  height: 2.8125rem;
  width: 2.8125rem;
  -webkit-border-radius: 50%;
          border-radius: 50%;
}
.coh-ce-fb392b47 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-ce-73c2af38 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  list-style-type: none;
}
.coh-ce-c0b1486c {
  padding-right: 1.5rem;
}
.coh-ce-170efa6e {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(136, 136, 136);
  font-size: 1rem;
  font-style: normal;
  text-transform: uppercase;
  text-decoration: none;
  word-wrap: normal;
}
.coh-ce-dd2d2b42 {
  gap: 24px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  list-style-type: none;
}
.coh-ce-50a4b5f {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-size: 1.5rem;
}
.coh-ce-c0a0cd9e {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
}
@media (max-width: 1023px) {
  .coh-ce-c0a0cd9e {
    background-color: rgb(255, 209, 157);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
  }
}
.coh-ce-cd4bb6f8 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
@media (max-width: 1023px) {
  .coh-ce-cd4bb6f8 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 30px;
  }
}
@media (max-width: 564px) {
  .coh-ce-cd4bb6f8 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 30px;
  }
}
.coh-ce-bb5d088f {
  padding-right: 1.5rem;
}
.coh-ce-a6292528 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  font-size: 1rem;
  font-style: normal;
  text-transform: uppercase;
  text-decoration: none;
  word-wrap: normal;
  color: rgb(0, 0, 0);
}
.coh-ce-443cc08f {
  display: none;
}
.coh-ce-31be8468 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  z-index: 10;
  background-color: rgb(251, 174, 97);
  padding-top: 1.5rem;
  padding-right: 0.75rem;
  padding-bottom: 1.5rem;
  padding-left: 0.75rem;
  gap: 24px;
}
.coh-ce-21fcca1f:last-child {
  padding-bottom: 0;
}
.coh-ce-8bcc5c22 {
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
}
.coh-ce-94b35a72 {
  padding-top: 1.5rem;
}
.coh-ce-3aea93f4 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  text-transform: uppercase;
  font-size: 0.875rem;
}
.coh-ce-cpt_header-502bcbdb {
  display: none;
}
@media (max-width: 1399px) {
  .coh-ce-cpt_header-502bcbdb {
    display: none;
  }
}
@media (max-width: 1169px) {
  .coh-ce-cpt_header-502bcbdb {
    display: none;
  }
}
@media (max-width: 1023px) {
  .coh-ce-cpt_header-502bcbdb {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (max-width: 767px) {
  .coh-ce-cpt_header-502bcbdb {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (max-width: 564px) {
  .coh-ce-cpt_header-502bcbdb {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
.coh-ce-cpt_header-22fe95ce {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f0c9\";
  font-family: Fontello;
  background-color: rgba(0, 0, 0, 0);
}
.coh-ce-cpt_header-22fe95ce:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f0c9\";
  font-family: Fontello;
  font-size: 1.5rem;
}
.menu-visible.coh-ce-cpt_header-22fe95ce:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f2d3\";
  font-family: Fontello;
  position: absolute;
  z-index: 2;
}
.coh-ce-cpt_header-2a34baea {
  padding-top: 1.875rem;
  padding-bottom: 1.875rem;
  min-width: 6.25rem;
  max-width: 12.5rem;
}
.coh-ce-cpt_header-44857f2b {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: relative;
}
@media (max-width: 1399px) {
  .coh-ce-cpt_header-44857f2b {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (max-width: 1169px) {
  .coh-ce-cpt_header-44857f2b {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (max-width: 1023px) {
  .coh-ce-cpt_header-44857f2b {
    display: none;
    visibility: visible;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
  }
}
.coh-ce-cpt_header-3b555a1d {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-align-content: end;
      -ms-flex-line-pack: end;
          align-content: end;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
@media (max-width: 1023px) {
  .coh-ce-cpt_header-3b555a1d {
    display: none;
  }
}
.coh-ce-cpt_header-dc1afec6 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1rem;
  text-align: right;
  font-style: normal;
  text-transform: uppercase;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-ce-cpt_header-dc1afec6:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\e89e\";
  font-family: Fontello;
  padding-right: 0.625rem;
  font-size: 1.25rem;
}
.coh-ce-cpt_hero_background_with_text-fdf85165 {
  padding-top: 31.25rem;
  padding-right: 12.5rem;
  padding-bottom: 31.25rem;
  padding-left: 12.5rem;
}
@media (max-width: 1023px) {
  .coh-ce-cpt_hero_background_with_text-fdf85165 {
    padding-top: 18.75rem;
    padding-right: 6.25rem;
    padding-bottom: 18.75rem;
    padding-left: 6.25rem;
  }
}
@media (max-width: 564px) {
  .coh-ce-cpt_hero_background_with_text-fdf85165 {
    padding-top: 9.375rem;
    padding-right: 3.125rem;
    padding-bottom: 9.375rem;
    padding-left: 3.125rem;
  }
}
.coh-ce-cpt_hero_background_with_text-4929ecd8 {
  color: rgb(255, 255, 255);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__248828943943f381fdd8f7ee66e92e8a";
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
        return new Source("", "__string_template__248828943943f381fdd8f7ee66e92e8a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
