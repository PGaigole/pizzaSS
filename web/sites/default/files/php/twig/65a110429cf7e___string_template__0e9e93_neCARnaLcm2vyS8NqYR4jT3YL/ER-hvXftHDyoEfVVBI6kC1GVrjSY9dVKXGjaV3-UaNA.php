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

/* __string_template__0e9e938b4638197b318c44e77e3d8305 */
class __TwigTemplate_172b339cf13c42a5511040f7a65b32b0 extends Template
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
        echo ":root {
  --ssa-color-palette-alabaster: rgb(236, 240, 232);
  --ssa-color-palette-alabaster-dark: rgb(230, 240, 231);
  --ssa-color-palette-black: rgb(0, 0, 0);
  --ssa-color-palette-grey: rgb(136, 136, 136);
  --ssa-color-palette-linen: rgb(254, 241, 227);
  --ssa-color-palette-sandy-brown: rgb(251, 174, 97);
  --ssa-color-palette-sunset: rgb(255, 209, 157);
  --ssa-color-palette-white: rgb(255, 255, 255);
}
.coh-color-alabaster {
  color: rgb(236, 240, 232);
}
.coh-color-black {
  color: rgb(0, 0, 0);
}
.coh-color-grey {
  color: rgb(136, 136, 136);
}
.coh-color-linen {
  color: rgb(254, 241, 227);
}
.coh-color-sandy-brown {
  color: rgb(251, 174, 97);
}
.coh-color-sunset {
  color: rgb(255, 209, 157);
}
.coh-color-white {
  color: rgb(255, 255, 255);
}
[data-icon-fontello] {
  font-family: \"Fontello\", serif;
}
[data-icon-fontello]:after {
  font-family: \"Fontello\", serif;
  content: attr(data-icon-fontello);
}
@font-face {
  font-family: \"Fontello\";
  src: url(\"/sites/default/files/cohesion/call.eot\");
  src: url(\"/sites/default/files/cohesion/call.eot?#iefix\") format(\"embedded-opentype\"), url(\"/sites/default/files/cohesion/call.woff2\") format(\"woff2\"), url(\"/sites/default/files/cohesion/call.woff\") format(\"woff\"), url(\"/sites/default/files/cohesion/call.ttf\") format(\"truetype\");
}
:root {
  --ssa-font-stacks-roboto: 'Roboto', sans-serif;
}
:root {
  --ssa-responsive-grid-settings-width: 87.5rem;
  --ssa-responsive-grid-settings-boxed-width: 75rem;
  --ssa-responsive-grid-settings-inner-gutter: 3.125rem;
  --ssa-responsive-grid-settings-outer-gutter: 6.25rem;
}
@media (max-width: 1399px) {
  :root {
    --ssa-responsive-grid-settings-width: 73.125rem;
    --ssa-responsive-grid-settings-boxed-width: 60.625rem;
    --ssa-responsive-grid-settings-inner-gutter: 3.125rem;
    --ssa-responsive-grid-settings-outer-gutter: 6.25rem;
  }
}
@media (max-width: 1169px) {
  :root {
    --ssa-responsive-grid-settings-width: 64rem;
    --ssa-responsive-grid-settings-boxed-width: 51.5rem;
    --ssa-responsive-grid-settings-inner-gutter: 3.125rem;
    --ssa-responsive-grid-settings-outer-gutter: 6.25rem;
  }
}
@media (max-width: 1023px) {
  :root {
    --ssa-responsive-grid-settings-width: 48rem;
    --ssa-responsive-grid-settings-boxed-width: 41.75rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.5625rem;
    --ssa-responsive-grid-settings-outer-gutter: 3.125rem;
  }
}
@media (max-width: 767px) {
  :root {
    --ssa-responsive-grid-settings-width: 35.3125rem;
    --ssa-responsive-grid-settings-boxed-width: 31.5625rem;
    --ssa-responsive-grid-settings-inner-gutter: 0.9375rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.875rem;
  }
}
@media (max-width: 564px) {
  :root {
    --ssa-responsive-grid-settings-width: 20rem;
    --ssa-responsive-grid-settings-boxed-width: 17.5rem;
    --ssa-responsive-grid-settings-inner-gutter: 0.625rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.25rem;
  }
}
.coh-row-inner {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-left: -1.5625rem;
  margin-right: -1.5625rem;
}
@media (max-width: 1399px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -1.5625rem;
    margin-right: -1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -1.5625rem;
    margin-right: -1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.78125rem;
    margin-right: -0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.46875rem;
    margin-right: -0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.3125rem;
    margin-right: -0.3125rem;
  }
}
.coh-column {
  position: relative;
  width: 100%;
  min-height: 1px;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.coh-column {
  padding-left: 1.5625rem;
  padding-right: 1.5625rem;
}
@media (max-width: 1399px) {
  .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-column {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
.coh-col-xl {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
}
.coh-layout-col-xl {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
  opacity: 1;
}
.coh-col-xl-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: none;
}
.coh-layout-col-xl-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: 200px;
  opacity: 1;
}
.coh-layout-col-xl-hidden {
  max-width: 200px;
  opacity: 0.5;
}
.coh-col-xl-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.coh-layout-col-xl-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
      -ms-flex: 0 0 calc(8.3333333333% - 10px);
          flex: 0 0 calc(8.3333333333% - 10px);
  max-width: -webkit-calc(8.3333333333% - 10px);
  max-width: calc(8.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-1.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.coh-col-xl-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.coh-layout-col-xl-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
      -ms-flex: 0 0 calc(16.6666666667% - 10px);
          flex: 0 0 calc(16.6666666667% - 10px);
  max-width: -webkit-calc(16.6666666667% - 10px);
  max-width: calc(16.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-2.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.coh-col-xl-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.coh-layout-col-xl-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(25% - 10px);
      -ms-flex: 0 0 calc(25% - 10px);
          flex: 0 0 calc(25% - 10px);
  max-width: -webkit-calc(25% - 10px);
  max-width: calc(25% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-3.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.coh-col-xl-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.coh-layout-col-xl-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
      -ms-flex: 0 0 calc(33.3333333333% - 10px);
          flex: 0 0 calc(33.3333333333% - 10px);
  max-width: -webkit-calc(33.3333333333% - 10px);
  max-width: calc(33.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-4.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.coh-col-xl-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.coh-layout-col-xl-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
      -ms-flex: 0 0 calc(41.6666666667% - 10px);
          flex: 0 0 calc(41.6666666667% - 10px);
  max-width: -webkit-calc(41.6666666667% - 10px);
  max-width: calc(41.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.coh-col-xl-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.coh-layout-col-xl-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(50% - 10px);
      -ms-flex: 0 0 calc(50% - 10px);
          flex: 0 0 calc(50% - 10px);
  max-width: -webkit-calc(50% - 10px);
  max-width: calc(50% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-6.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.coh-col-xl-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.coh-layout-col-xl-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
      -ms-flex: 0 0 calc(58.3333333333% - 10px);
          flex: 0 0 calc(58.3333333333% - 10px);
  max-width: -webkit-calc(58.3333333333% - 10px);
  max-width: calc(58.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-7.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.coh-col-xl-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.coh-layout-col-xl-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
      -ms-flex: 0 0 calc(66.6666666667% - 10px);
          flex: 0 0 calc(66.6666666667% - 10px);
  max-width: -webkit-calc(66.6666666667% - 10px);
  max-width: calc(66.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-8.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.coh-col-xl-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.coh-layout-col-xl-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(75% - 10px);
      -ms-flex: 0 0 calc(75% - 10px);
          flex: 0 0 calc(75% - 10px);
  max-width: -webkit-calc(75% - 10px);
  max-width: calc(75% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-9.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.coh-col-xl-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.coh-layout-col-xl-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
      -ms-flex: 0 0 calc(83.3333333333% - 10px);
          flex: 0 0 calc(83.3333333333% - 10px);
  max-width: -webkit-calc(83.3333333333% - 10px);
  max-width: calc(83.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-10.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.coh-col-xl-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.coh-layout-col-xl-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
      -ms-flex: 0 0 calc(91.6666666667% - 10px);
          flex: 0 0 calc(91.6666666667% - 10px);
  max-width: -webkit-calc(91.6666666667% - 10px);
  max-width: calc(91.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-11.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.coh-col-xl-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-layout-col-xl-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(100% - 10px);
      -ms-flex: 0 0 calc(100% - 10px);
          flex: 0 0 calc(100% - 10px);
  max-width: -webkit-calc(100% - 10px);
  max-width: calc(100% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-12.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-col-xl-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.coh-layout-col-xl-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(20% - 10px);
      -ms-flex: 0 0 calc(20% - 10px);
          flex: 0 0 calc(20% - 10px);
  max-width: -webkit-calc(20% - 10px);
  max-width: calc(20% - 10px);
  opacity: 1;
}
.coh-layout-col-xl-1-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.coh-col-xl-push-12 {
  left: 100%;
}
.coh-col-xl-pull-12 {
  right: 100%;
}
.coh-col-xl-offset-12 {
  margin-left: 100%;
}
.coh-col-xl-push-11 {
  left: 91.6666666667%;
}
.coh-col-xl-pull-11 {
  right: 91.6666666667%;
}
.coh-col-xl-offset-11 {
  margin-left: 91.6666666667%;
}
.coh-col-xl-push-10 {
  left: 83.3333333333%;
}
.coh-col-xl-pull-10 {
  right: 83.3333333333%;
}
.coh-col-xl-offset-10 {
  margin-left: 83.3333333333%;
}
.coh-col-xl-push-9 {
  left: 75%;
}
.coh-col-xl-pull-9 {
  right: 75%;
}
.coh-col-xl-offset-9 {
  margin-left: 75%;
}
.coh-col-xl-push-8 {
  left: 66.6666666667%;
}
.coh-col-xl-pull-8 {
  right: 66.6666666667%;
}
.coh-col-xl-offset-8 {
  margin-left: 66.6666666667%;
}
.coh-col-xl-push-7 {
  left: 58.3333333333%;
}
.coh-col-xl-pull-7 {
  right: 58.3333333333%;
}
.coh-col-xl-offset-7 {
  margin-left: 58.3333333333%;
}
.coh-col-xl-push-6 {
  left: 50%;
}
.coh-col-xl-pull-6 {
  right: 50%;
}
.coh-col-xl-offset-6 {
  margin-left: 50%;
}
.coh-col-xl-push-5 {
  left: 41.6666666667%;
}
.coh-col-xl-pull-5 {
  right: 41.6666666667%;
}
.coh-col-xl-offset-5 {
  margin-left: 41.6666666667%;
}
.coh-col-xl-push-4 {
  left: 33.3333333333%;
}
.coh-col-xl-pull-4 {
  right: 33.3333333333%;
}
.coh-col-xl-offset-4 {
  margin-left: 33.3333333333%;
}
.coh-col-xl-push-3 {
  left: 25%;
}
.coh-col-xl-pull-3 {
  right: 25%;
}
.coh-col-xl-offset-3 {
  margin-left: 25%;
}
.coh-col-xl-push-2 {
  left: 16.6666666667%;
}
.coh-col-xl-pull-2 {
  right: 16.6666666667%;
}
.coh-col-xl-offset-2 {
  margin-left: 16.6666666667%;
}
.coh-visible-xl {
  display: block;
}
.coh-col-xl-push-1 {
  left: 8.3333333333%;
}
.coh-col-xl-pull-1 {
  right: 8.3333333333%;
}
.coh-col-xl-offset-1 {
  margin-left: 8.3333333333%;
}
.coh-hidden-xl {
  display: none;
}
.coh-col-xl-push-0 {
  left: auto;
}
.coh-col-xl-pull-0 {
  right: auto;
}
.coh-col-xl-offset-0 {
  margin-left: 0;
}
.coh-col-xl-push-1-5 {
  left: 20%;
}
.coh-col-xl-pull-1-5 {
  right: 20%;
}
.coh-col-xl-offset-1-5 {
  margin-left: 20%;
}
@media (max-width: 1399px) {
  .coh-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-lg-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-lg-push-12 {
    left: 100%;
  }
  .coh-col-lg-pull-12 {
    right: 100%;
  }
  .coh-col-lg-offset-12 {
    margin-left: 100%;
  }
  .coh-col-lg-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-lg-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-lg-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-lg-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-lg-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-lg-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-lg-push-9 {
    left: 75%;
  }
  .coh-col-lg-pull-9 {
    right: 75%;
  }
  .coh-col-lg-offset-9 {
    margin-left: 75%;
  }
  .coh-col-lg-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-lg-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-lg-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-lg-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-lg-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-lg-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-lg-push-6 {
    left: 50%;
  }
  .coh-col-lg-pull-6 {
    right: 50%;
  }
  .coh-col-lg-offset-6 {
    margin-left: 50%;
  }
  .coh-col-lg-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-lg-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-lg-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-lg-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-lg-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-lg-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-lg-push-3 {
    left: 25%;
  }
  .coh-col-lg-pull-3 {
    right: 25%;
  }
  .coh-col-lg-offset-3 {
    margin-left: 25%;
  }
  .coh-col-lg-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-lg-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-lg-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-lg {
    display: block;
  }
  .coh-col-lg-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-lg-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-lg-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-lg {
    display: none;
  }
  .coh-col-lg-push-0 {
    left: auto;
  }
  .coh-col-lg-pull-0 {
    right: auto;
  }
  .coh-col-lg-offset-0 {
    margin-left: 0;
  }
  .coh-col-lg-push-1-5 {
    left: 20%;
  }
  .coh-col-lg-pull-1-5 {
    right: 20%;
  }
  .coh-col-lg-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 1169px) {
  .coh-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-md-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-md-push-12 {
    left: 100%;
  }
  .coh-col-md-pull-12 {
    right: 100%;
  }
  .coh-col-md-offset-12 {
    margin-left: 100%;
  }
  .coh-col-md-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-md-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-md-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-md-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-md-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-md-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-md-push-9 {
    left: 75%;
  }
  .coh-col-md-pull-9 {
    right: 75%;
  }
  .coh-col-md-offset-9 {
    margin-left: 75%;
  }
  .coh-col-md-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-md-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-md-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-md-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-md-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-md-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-md-push-6 {
    left: 50%;
  }
  .coh-col-md-pull-6 {
    right: 50%;
  }
  .coh-col-md-offset-6 {
    margin-left: 50%;
  }
  .coh-col-md-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-md-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-md-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-md-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-md-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-md-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-md-push-3 {
    left: 25%;
  }
  .coh-col-md-pull-3 {
    right: 25%;
  }
  .coh-col-md-offset-3 {
    margin-left: 25%;
  }
  .coh-col-md-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-md-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-md-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-md {
    display: block;
  }
  .coh-col-md-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-md-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-md-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-md {
    display: none;
  }
  .coh-col-md-push-0 {
    left: auto;
  }
  .coh-col-md-pull-0 {
    right: auto;
  }
  .coh-col-md-offset-0 {
    margin-left: 0;
  }
  .coh-col-md-push-1-5 {
    left: 20%;
  }
  .coh-col-md-pull-1-5 {
    right: 20%;
  }
  .coh-col-md-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 1023px) {
  .coh-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-sm-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-sm-push-12 {
    left: 100%;
  }
  .coh-col-sm-pull-12 {
    right: 100%;
  }
  .coh-col-sm-offset-12 {
    margin-left: 100%;
  }
  .coh-col-sm-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-sm-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-sm-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-sm-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-sm-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-sm-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-sm-push-9 {
    left: 75%;
  }
  .coh-col-sm-pull-9 {
    right: 75%;
  }
  .coh-col-sm-offset-9 {
    margin-left: 75%;
  }
  .coh-col-sm-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-sm-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-sm-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-sm-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-sm-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-sm-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-sm-push-6 {
    left: 50%;
  }
  .coh-col-sm-pull-6 {
    right: 50%;
  }
  .coh-col-sm-offset-6 {
    margin-left: 50%;
  }
  .coh-col-sm-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-sm-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-sm-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-sm-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-sm-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-sm-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-sm-push-3 {
    left: 25%;
  }
  .coh-col-sm-pull-3 {
    right: 25%;
  }
  .coh-col-sm-offset-3 {
    margin-left: 25%;
  }
  .coh-col-sm-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-sm-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-sm-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-sm {
    display: block;
  }
  .coh-col-sm-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-sm-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-sm-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-sm {
    display: none;
  }
  .coh-col-sm-push-0 {
    left: auto;
  }
  .coh-col-sm-pull-0 {
    right: auto;
  }
  .coh-col-sm-offset-0 {
    margin-left: 0;
  }
  .coh-col-sm-push-1-5 {
    left: 20%;
  }
  .coh-col-sm-pull-1-5 {
    right: 20%;
  }
  .coh-col-sm-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 767px) {
  .coh-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-ps-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-ps-push-12 {
    left: 100%;
  }
  .coh-col-ps-pull-12 {
    right: 100%;
  }
  .coh-col-ps-offset-12 {
    margin-left: 100%;
  }
  .coh-col-ps-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-ps-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-ps-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-ps-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-ps-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-ps-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-ps-push-9 {
    left: 75%;
  }
  .coh-col-ps-pull-9 {
    right: 75%;
  }
  .coh-col-ps-offset-9 {
    margin-left: 75%;
  }
  .coh-col-ps-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-ps-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-ps-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-ps-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-ps-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-ps-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-ps-push-6 {
    left: 50%;
  }
  .coh-col-ps-pull-6 {
    right: 50%;
  }
  .coh-col-ps-offset-6 {
    margin-left: 50%;
  }
  .coh-col-ps-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-ps-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-ps-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-ps-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-ps-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-ps-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-ps-push-3 {
    left: 25%;
  }
  .coh-col-ps-pull-3 {
    right: 25%;
  }
  .coh-col-ps-offset-3 {
    margin-left: 25%;
  }
  .coh-col-ps-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-ps-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-ps-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-ps {
    display: block;
  }
  .coh-col-ps-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-ps-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-ps-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-ps {
    display: none;
  }
  .coh-col-ps-push-0 {
    left: auto;
  }
  .coh-col-ps-pull-0 {
    right: auto;
  }
  .coh-col-ps-offset-0 {
    margin-left: 0;
  }
  .coh-col-ps-push-1-5 {
    left: 20%;
  }
  .coh-col-ps-pull-1-5 {
    right: 20%;
  }
  .coh-col-ps-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 564px) {
  .coh-col-xs {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-xs {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-xs-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-xs-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-xs-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-xs-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-xs-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-xs-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-xs-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-xs-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-xs-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-xs-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-xs-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-xs-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-xs-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-xs-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-xs-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-xs-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-xs-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-xs-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-xs-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-xs-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-xs-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-xs-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-xs-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-xs-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-xs-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-xs-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-xs-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-xs-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-xs-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xs-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-xs-push-12 {
    left: 100%;
  }
  .coh-col-xs-pull-12 {
    right: 100%;
  }
  .coh-col-xs-offset-12 {
    margin-left: 100%;
  }
  .coh-col-xs-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-xs-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-xs-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-xs-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-xs-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-xs-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-xs-push-9 {
    left: 75%;
  }
  .coh-col-xs-pull-9 {
    right: 75%;
  }
  .coh-col-xs-offset-9 {
    margin-left: 75%;
  }
  .coh-col-xs-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-xs-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-xs-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-xs-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-xs-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-xs-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-xs-push-6 {
    left: 50%;
  }
  .coh-col-xs-pull-6 {
    right: 50%;
  }
  .coh-col-xs-offset-6 {
    margin-left: 50%;
  }
  .coh-col-xs-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-xs-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-xs-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-xs-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-xs-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-xs-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-xs-push-3 {
    left: 25%;
  }
  .coh-col-xs-pull-3 {
    right: 25%;
  }
  .coh-col-xs-offset-3 {
    margin-left: 25%;
  }
  .coh-col-xs-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-xs-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-xs-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-xs {
    display: block;
  }
  .coh-col-xs-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-xs-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-xs-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-xs {
    display: none;
  }
  .coh-col-xs-push-0 {
    left: auto;
  }
  .coh-col-xs-pull-0 {
    right: auto;
  }
  .coh-col-xs-offset-0 {
    margin-left: 0;
  }
  .coh-col-xs-push-1-5 {
    left: 20%;
  }
  .coh-col-xs-pull-1-5 {
    right: 20%;
  }
  .coh-col-xs-offset-1-5 {
    margin-left: 20%;
  }
}
.coh-row-bleed-xl > .coh-row-inner {
  margin-right: 0;
  margin-left: 0;
}
.coh-row-bleed-xl > .coh-row-inner > .coh-column {
  padding-right: 0;
  padding-left: 0;
}
.coh-row-visible-xl {
  overflow: visible;
}
.coh-row-hidden-xl {
  overflow-x: hidden;
  overflow-y: auto;
}
.coh-row-xl > .coh-row-inner {
  margin-right: -1.5625rem;
  margin-left: -1.5625rem;
}
.coh-row-xl > .coh-row-inner > .coh-column {
  padding-left: 1.5625rem;
  padding-right: 1.5625rem;
}
@media (max-width: 1399px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1399px) {
  .coh-row-bleed-lg > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-lg > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-lg {
    overflow: visible;
  }
  .coh-row-hidden-lg {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1399px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1169px) {
  .coh-row-bleed-md > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-md > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-md {
    overflow: visible;
  }
  .coh-row-hidden-md {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1169px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1023px) {
  .coh-row-bleed-sm > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-sm > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-sm {
    overflow: visible;
  }
  .coh-row-hidden-sm {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1023px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 767px) {
  .coh-row-bleed-ps > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-ps > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-ps {
    overflow: visible;
  }
  .coh-row-hidden-ps {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 767px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 564px) {
  .coh-row-bleed-xs > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-xs > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-xs {
    overflow: visible;
  }
  .coh-row-hidden-xs {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 564px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
:root {
  --ssa-default-font-settings-font-family: 'Roboto', sans-serif;
  --ssa-default-font-settings-color: rgb(0, 0, 0);
}
body {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: rgb(0, 0, 0);
}
:root {
  --ssa-base-unit-settings-font-size: 16px;
}
body {
  font-size: 16px;
}
h6 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.125rem;
}
h1 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 3.75rem;
  line-height: 5.625rem;
}
button {
  color: rgb(0, 0, 0);
  background-color: rgb(251, 174, 97);
  padding-top: 0.75rem;
  padding-right: 1.5rem;
  padding-bottom: 0.75rem;
  padding-left: 1.5rem;
  font-style: normal;
  font-size: 0.875rem;
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
}
h1 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 900;
  color: rgb(0, 0, 0);
  font-size: 2.125rem;
}
h2 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  font-size: 2.5rem;
  line-height: 3.75rem;
  color: rgb(0, 0, 0);
}
h3 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.75rem;
  line-height: 1.25rem;
}
.coh-accordion-tabs:before, .coh-accordion-tabs:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-accordion-tabs-nav {
  margin: 0;
  padding-bottom: 0;
  list-style: none;
  display: none;
}
.coh-accordion-tabs-nav > li {
  display: inline-block;
  vertical-align: top;
}
.coh-accordion-tabs-nav > li a {
  display: block;
}
.coh-accordion-tabs-nav > li.is-hidden {
  display: none;
}
.coh-accordion-tabs-content {
  display: none;
}
.coh-accordion-tabs-horizontal-left > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav {
  text-align: left;
  padding: 0;
}
.coh-accordion-tabs-horizontal-center > .coh-accordion-tabs-nav {
  text-align: center;
  padding: 0;
}
.coh-accordion-tabs-horizontal-right > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav {
  text-align: right;
  padding: 0;
}
.coh-accordion-tabs-horizontal-justify > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
  margin: 0 auto;
  padding: 0;
}
.coh-accordion-tabs-horizontal-justify > .coh-accordion-tabs-nav > li, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav > li {
  display: table-cell;
  width: 1%;
  text-align: center;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-nav > li, .coh-accordion-tabs-vertical-right > .coh-accordion-tabs-nav > li {
  display: block;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-nav {
  -webkit-box-ordinal-group: 1;
  -webkit-order: 0;
      -ms-flex-order: 0;
          order: 0;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-content-wrapper {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}
.coh-accordion-tabs-vertical-right > .coh-accordion-tabs-nav {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}
.coh-accordion-tabs-vertical-right > .coh-accordion-tabs-content-wrapper {
  -webkit-box-ordinal-group: 1;
  -webkit-order: 0;
      -ms-flex-order: 0;
          order: 0;
}
.coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
  max-width: none;
  margin-left: 6.25rem;
  margin-right: 6.25rem;
}
@media (max-width: 1399px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1169px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1023px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 3.125rem;
    margin-right: 3.125rem;
  }
}
@media (max-width: 767px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 1.875rem;
    margin-right: 1.875rem;
  }
}
@media (max-width: 564px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }
}
.coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-content-wrapper, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-content-wrapper, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-content-wrapper {
  clear: both;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-nav {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-nav {
  display: none;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: block;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: block;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-xl {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-nav {
  display: block;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-nav {
  display: block;
}
.coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: none;
}
@media (max-width: 1399px) {
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-lg {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 1169px) {
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-md {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 1023px) {
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-sm {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 767px) {
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-ps {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 564px) {
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-xs {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}




.coh-container {
  display: block;
}
.coh-container:before, .coh-container:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-container-boxed {
  max-width: none;
  margin-left: 6.25rem;
  margin-right: 6.25rem;
}
@media (max-width: 1399px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1169px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1023px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 3.125rem;
    margin-right: 3.125rem;
  }
}
@media (max-width: 767px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.875rem;
    margin-right: 1.875rem;
  }
}
@media (max-width: 564px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }
}
.coh-container-boxed .coh-container-boxed {
  margin-right: auto;
  margin-left: auto;
}
.dx8-aov {
  visibility: hidden;
}


.coh-menu-item-child-hidden > ul {
  display: none;
}




.coh-google-map-1by1 {
  padding-bottom: 100%;
}
.coh-google-map-4by3 {
  padding-bottom: 75%;
}
.coh-google-map-3by2 {
  padding-bottom: 66.67%;
}
.coh-google-map-8by5 {
  padding-bottom: 62.5%;
}
.coh-google-map-16by9 {
  padding-bottom: 56.25%;
}


.coh-image {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  /*fix Edge for lazy-loading https://github.com/verlok/lazyload/issues/152 */
}
.coh-image[data-src], .coh-image[data-srcset] {
  min-height: 1px;
}
.coh-image-xl {
  display: block;
  width: auto;
  max-width: 100%;
  height: auto;
}
.coh-image-responsive-xl {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  float: none;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-float-left-xl {
  float: left;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-float-right-xl {
  float: right;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-align-left-xl {
  float: none;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-align-centre-xl {
  float: none;
  margin-left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
.coh-image-align-right-xl {
  float: none;
  margin-left: 100%;
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}
@media (max-width: 1399px) {
  .coh-image-lg {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-lg {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-lg {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-lg {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-lg {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-lg {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-lg {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (max-width: 1169px) {
  .coh-image-md {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-md {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-md {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-md {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-md {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-md {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-md {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (max-width: 1023px) {
  .coh-image-sm {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-sm {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-sm {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-sm {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-sm {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-sm {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-sm {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (max-width: 767px) {
  .coh-image-ps {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-ps {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-ps {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-ps {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-ps {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-ps {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-ps {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (max-width: 564px) {
  .coh-image-xs {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-xs {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-xs {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-xs {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-xs {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-xs {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-xs {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
.coh-link {
  display: inline-block;
}



body.modal-open {
  overflow: visible;
}
body.modal-open.coh-modal-overlay-open {
  overflow: hidden;
}
.coh-modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
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
  z-index: 999;
  pointer-events: none;
}
.coh-modal > * {
  pointer-events: auto;
}
.coh-modal-top-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-top-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-top-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-center-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-center-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-bottom-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-bottom-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-bottom-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-inner {
  position: relative;
  overflow: auto;
  z-index: 1;
  -webkit-overflow-scrolling: touch;
}
.coh-modal-close-wrapper {
  position: absolute;
  z-index: 1;
}
.coh-modal-close-top-left .coh-modal-close-wrapper {
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-top-center .coh-modal-close-wrapper {
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.coh-modal-close-top-right .coh-modal-close-wrapper {
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-center-left .coh-modal-close-wrapper {
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
.coh-modal-close-center-right .coh-modal-close-wrapper {
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
.coh-modal-close-bottom-left .coh-modal-close-wrapper {
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-bottom-center .coh-modal-close-wrapper {
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.coh-modal-close-bottom-right .coh-modal-close-wrapper {
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-button[hidden] {
  display: none;
}
.coh-modal-overlay {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.25);
}



.coh-slider-item {
  display: block;
}
.slick-slider {
  position: relative;
  display: block;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -ms-touch-action: pan-y;
      touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}
.slick-sr-only {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  white-space: nowrap;
}
.slick-list {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
}
.slick-list:focus {
  outline: none;
}
.slick-list.dragging {
  cursor: hand;
}
.slick-slider .slick-track,
.slick-slider .slick-list {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.slick-track {
  position: relative;
  top: 0;
  left: 0;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.slick-track:before, .slick-track:after {
  content: \"\";
  display: table;
}
.slick-track:after {
  clear: both;
}
.slick-loading .slick-track {
  visibility: hidden;
}
.slick-slide {
  float: left;
  display: none;
}
[dir=rtl] .slick-slide {
  float: right;
}
.slick-slide.slick-loading img {
  display: none;
}
.slick-slide.dragging img {
  pointer-events: none;
}
.slick-initialized .slick-slide {
  display: block;
}
.slick-loading .slick-slide {
  visibility: hidden;
}
.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
  display: none;
}
.coh-slider-container {
  position: relative;
}
.coh-slider-container-mid {
  overflow: hidden;
  position: relative;
}
.coh-slider-container-inner {
  overflow: hidden;
  visibility: hidden;
}
.coh-slider-container-inner.slick-initialized {
  visibility: visible;
}
.coh-slider-container-boxed {
  max-width: none;
  margin-left: 6.25rem;
  margin-right: 6.25rem;
}
@media (max-width: 1399px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 6.25rem;
    margin-right: 6.25rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 3.125rem;
    margin-right: 3.125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 1.875rem;
    margin-right: 1.875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }
}
.coh-slider-container-inner > .slick-list {
  margin-right: -1.5625rem;
  margin-left: -1.5625rem;
}
@media (max-width: 1399px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
}
.coh-slider-container > .coh-slider-nav-top:before, .coh-slider-container > .coh-slider-nav-top:after,
.coh-slider-container > .coh-slider-nav-bottom:before,
.coh-slider-container > .coh-slider-nav-bottom:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-slider-container .coh-slider-item {
  display: block;
}
.coh-slider-container .coh-slider-item {
  padding-left: 1.5625rem;
  padding-right: 1.5625rem;
}
@media (max-width: 1399px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
.coh-slider-container-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
  margin-right: 0;
  margin-left: 0;
}
.coh-slider-container-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
  padding-right: 0;
  padding-left: 0;
}
.coh-slider-container-overflow-visible-xl .coh-slider-container-inner,
.coh-slider-container-overflow-visible-xl .slick-list {
  overflow: visible;
}
.coh-slider-container-overflow-hidden-xl .coh-slider-container-inner,
.coh-slider-container-overflow-hidden-xl .slick-list {
  overflow: hidden;
}
.coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
  margin-right: -1.5625rem;
  margin-left: -1.5625rem;
}
.coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
  padding-left: 1.5625rem;
  padding-right: 1.5625rem;
}
@media (max-width: 1399px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1399px) {
  .coh-slider-container-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-lg .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-lg .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-lg .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-lg .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1399px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-md .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-md .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-md .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-md .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1.5625rem;
    margin-left: -1.5625rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1.5625rem;
    padding-right: 1.5625rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-sm .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-sm .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-sm .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-sm .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.78125rem;
    margin-left: -0.78125rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.78125rem;
    padding-right: 0.78125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-ps .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-ps .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-ps .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-ps .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.46875rem;
    margin-left: -0.46875rem;
  }
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.46875rem;
    padding-right: 0.46875rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-xs .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-xs .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-xs .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-xs .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.3125rem;
    margin-left: -0.3125rem;
  }
  .coh-slider-container-no-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}
.coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-prev {
  float: left;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-prev {
  float: right;
}
.coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-next {
  float: right;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-next {
  float: left;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-arrow {
  position: absolute;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 1;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-prev {
  float: left;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-prev {
  float: right;
}
.coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-next {
  float: right;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-next {
  float: left;
}
.coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  position: relative;
}
.coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 100%;
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}
[dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 100%;
  left: auto;
}
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top .slick-next {
  float: none;
}
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top {
  text-align: left;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top {
  text-align: right;
}
.coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top {
  text-align: center;
}
.coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top {
  text-align: right;
}
[dir=rtl] .coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top {
  text-align: left;
}
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-next {
  float: none;
}
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom {
  text-align: left;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom {
  text-align: right;
}
.coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  text-align: center;
}
.coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom {
  text-align: right;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom {
  text-align: left;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  width: 100%;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: absolute;
  top: 0;
  bottom: auto;
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
  z-index: 1;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  width: 100%;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
  position: absolute;
  top: auto;
  bottom: 0;
  z-index: 1;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  position: absolute;
  z-index: 1;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
  top: 0;
  bottom: auto;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
  top: auto;
  bottom: 0;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 0;
  left: 0;
}
.coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  position: absolute;
  top: 0;
  bottom: auto;
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  position: absolute;
  top: auto;
  bottom: 0;
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  position: absolute;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
@media (max-width: 1399px) {
  .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-pager-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-pager-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-pager-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-top-left-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-left-xl > .coh-slider-nav-top .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-top-middle-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-middle-xl > .coh-slider-nav-top .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-outside-top-right-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-right-xl > .coh-slider-nav-top .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-middle-left-xl > .coh-slider-container-mid .slick-dots {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-middle-left-xl > .coh-slider-container-mid .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-middle-right-xl > .coh-slider-container-mid .slick-dots {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-middle-right-xl > .coh-slider-container-mid .slick-dots {
  right: auto;
  left: 0;
}
@media (max-width: 1399px) {
  .coh-slider-container-pager-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-lg > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-lg > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-lg > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-lg > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-lg > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-lg > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-lg > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-pager-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-md > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-md > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-md > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-md > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-md > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-md > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-md > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-pager-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-sm > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-sm > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-sm > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-sm > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-sm > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-sm > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-sm > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-pager-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-ps > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-ps > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-ps > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-ps > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-ps > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-ps > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-ps > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-pager-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-xs > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-xs > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-xs > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-xs > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-xs > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-xs > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-xs > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-playpause-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-playpause-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-playpause-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-top-left-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-left-xl > .coh-slider-nav-top .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-top-middle-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-middle-xl > .coh-slider-nav-top .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-outside-top-right-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-right-xl > .coh-slider-nav-top .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-middle-left-xl > .coh-slider-container-mid .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-middle-left-xl > .coh-slider-container-mid .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-middle-right-xl > .coh-slider-container-mid .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-middle-right-xl > .coh-slider-container-mid .slick-playpause-button {
  right: auto;
  left: 0;
}
@media (max-width: 1399px) {
  .coh-slider-container-playpause-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-lg > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-lg > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-lg > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-lg > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-lg > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-lg > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-lg > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-playpause-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-md > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-md > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-md > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-md > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-md > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-md > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-md > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-playpause-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-sm > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-sm > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-sm > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-sm > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-sm > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-sm > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-sm > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-playpause-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-ps > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-ps > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-ps > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-ps > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-ps > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-ps > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-ps > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-playpause-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-xs > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-xs > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-xs > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-xs > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-xs > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-xs > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-xs > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-counter-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-counter-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-counter-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-top-left-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-left-xl > .coh-slider-nav-top .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-top-middle-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-middle-xl > .coh-slider-nav-top .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-outside-top-right-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-right-xl > .coh-slider-nav-top .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-middle-left-xl > .coh-slider-container-mid .coh-slide-count {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-middle-left-xl > .coh-slider-container-mid .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-middle-right-xl > .coh-slider-container-mid .coh-slide-count {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-middle-right-xl > .coh-slider-container-mid .coh-slide-count {
  right: auto;
  left: 0;
}
@media (max-width: 1399px) {
  .coh-slider-container-counter-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-lg > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-lg > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-lg > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-lg > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-lg > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-lg > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-lg > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-counter-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-md > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-md > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-md > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-md > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-md > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-md > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-md > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-counter-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-sm > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-sm > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-sm > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-sm > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-sm > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-sm > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-sm > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-counter-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-ps > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-ps > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-ps > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-ps > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-ps > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-ps > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-ps > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-counter-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-xs > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-xs > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-xs > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-xs > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-xs > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-xs > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-xs > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
.mejs__offscreen {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
          clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  word-wrap: normal;
}
.mejs__container {
  background: #000;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: \"Helvetica\", Arial, serif;
  position: relative;
  text-align: left;
  text-indent: 0;
  vertical-align: top;
}
.mejs__container * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.mejs__container video::-webkit-media-controls,
.mejs__container video::-webkit-media-controls-panel,
.mejs__container video::-webkit-media-controls-panel-container,
.mejs__container video::-webkit-media-controls-start-playback-button {
  -webkit-appearance: none;
          appearance: none;
  display: none !important;
}
.mejs__fill-container,
.mejs__fill-container .mejs__container {
  width: 100%;
  height: 100%;
}
.mejs__fill-container {
  background: transparent;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
}
.mejs__container:focus {
  outline: none;
}
.mejs__iframe-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
}
.mejs__embed,
.mejs__embed body {
  background: #000;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  overflow: hidden;
}
.mejs__fullscreen {
  overflow: hidden !important;
}
.mejs__container-fullscreen {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: 1000;
}
.mejs__container-fullscreen .mejs__mediaelement,
.mejs__container-fullscreen video {
  width: 100% !important;
  height: 100% !important;
}
.mejs__background {
  position: absolute;
  top: 0;
  left: 0;
}
.mejs__mediaelement {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
.mejs__poster {
  position: absolute;
  top: 0;
  left: 0;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 1;
}
:root .mejs__poster-img {
  display: none;
}
.mejs__poster-img {
  border: 0;
  padding: 0;
}
.mejs__overlay {
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
  position: absolute;
  top: 0;
  left: 0;
}
.mejs__layer {
  z-index: 1;
}
.mejs__overlay-play {
  cursor: pointer;
}
.mejs__overlay-button {
  background: url(../../assets/video/mejs-controls.svg) no-repeat;
  background-position: 0 -39px;
  height: 80px;
  width: 80px;
}
.mejs__overlay:hover > .mejs__overlay-button {
  background-position: -80px -39px;
}
.mejs__overlay-loading {
  height: 80px;
  width: 80px;
}
.mejs__overlay-loading-bg-img {
  -webkit-animation: mejs__loading-spinner 1s linear infinite;
          animation: mejs__loading-spinner 1s linear infinite;
  background: transparent url(../../assets/video/mejs-controls.svg) -160px -40px no-repeat;
  display: block;
  width: 80px;
  height: 80px;
  z-index: 1;
}
@-webkit-keyframes mejs__loading-spinner {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes mejs__loading-spinner {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.mejs__controls {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40px;
  list-style-type: none;
  margin: 0;
  padding: 0 10px;
  z-index: 3;
}
.mejs__controls:not([style*=\"display: none\"]) {
  background: rgba(255, 0, 0, 0.7);
  background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.35)));
  background: -webkit-linear-gradient(transparent, rgba(0, 0, 0, 0.35));
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.35));
}
.mejs__button,
.mejs__time,
.mejs__time-rail {
  font-size: 10px;
  height: 40px;
  line-height: 10px;
  margin: 0;
  width: 32px;
}
.mejs__button > button {
  background: transparent url(../../assets/video/mejs-controls.svg);
  border: 0;
  cursor: pointer;
  display: block;
  font-size: 0;
  height: 20px;
  line-height: 0;
  margin: 10px 6px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  text-decoration: none;
  width: 20px;
}
.mejs__button > button:focus {
  outline: dotted 1px #999;
}
.mejs__container-keyboard-inactive a,
.mejs__container-keyboard-inactive a:focus,
.mejs__container-keyboard-inactive button,
.mejs__container-keyboard-inactive button:focus,
.mejs__container-keyboard-inactive [role=slider],
.mejs__container-keyboard-inactive [role=slider]:focus {
  outline: 0;
}
.mejs__time {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  color: #fff;
  font-size: 11px;
  font-weight: bold;
  height: 24px;
  overflow: hidden;
  padding: 16px 6px 0;
  text-align: center;
  width: auto;
}
.mejs__play > button {
  background-position: 0 0;
}
.mejs__pause > button {
  background-position: -20px 0;
}
.mejs__replay > button {
  background-position: -160px 0;
}
.mejs__time-rail {
  direction: ltr;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  height: 40px;
  margin: 0 10px;
  padding-top: 10px;
  position: relative;
}
.mejs__time-total,
.mejs__time-buffering,
.mejs__time-loaded,
.mejs__time-current,
.mejs__time-float,
.mejs__time-hovered,
.mejs__time-float-current,
.mejs__time-float-corner,
.mejs__time-marker {
  -webkit-border-radius: 2px;
          border-radius: 2px;
  cursor: pointer;
  display: block;
  height: 10px;
  position: absolute;
}
.mejs__time-total {
  background: rgba(255, 255, 255, 0.3);
  margin: 5px 0 0;
  width: 100%;
}
.mejs__time-buffering {
  -webkit-animation: buffering-stripes 2s linear infinite;
          animation: buffering-stripes 2s linear infinite;
  background: -webkit-linear-gradient(135deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
  background: linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
  background-size: 15px 15px;
  width: 100%;
}
@-webkit-keyframes buffering-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 30px 0;
  }
}
@keyframes buffering-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 30px 0;
  }
}
.mejs__time-loaded {
  background: rgba(255, 255, 255, 0.3);
}
.mejs__time-current,
.mejs__time-handle-content {
  background: rgba(255, 255, 255, 0.9);
}
.mejs__time-hovered {
  background: rgba(255, 255, 255, 0.5);
  z-index: 10;
}
.mejs__time-hovered.negative {
  background: rgba(0, 0, 0, 0.2);
}
.mejs__time-current,
.mejs__time-buffering,
.mejs__time-loaded,
.mejs__time-hovered {
  left: 0;
  -webkit-transform: scaleX(0);
      -ms-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transition: 0.15s ease-in all;
  transition: 0.15s ease-in all;
  width: 100%;
}
.mejs__time-buffering {
  -webkit-transform: scaleX(1);
      -ms-transform: scaleX(1);
          transform: scaleX(1);
}
.mejs__time-hovered {
  -webkit-transition: height 0.1s cubic-bezier(0.44, 0, 1, 1);
  transition: height 0.1s cubic-bezier(0.44, 0, 1, 1);
}
.mejs__time-hovered.no-hover {
  -webkit-transform: scaleX(0) !important;
      -ms-transform: scaleX(0) !important;
          transform: scaleX(0) !important;
}
.mejs__time-handle,
.mejs__time-handle-content {
  border: 4px solid transparent;
  cursor: pointer;
  left: 0;
  position: absolute;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
  z-index: 11;
}
.mejs__time-handle-content {
  border: 4px solid rgba(255, 255, 255, 0.9);
  -webkit-border-radius: 50%;
          border-radius: 50%;
  height: 10px;
  left: -7px;
  top: -4px;
  -webkit-transform: scale(0);
      -ms-transform: scale(0);
          transform: scale(0);
  width: 10px;
}
.mejs__time-rail:hover .mejs__time-handle-content,
.mejs__time-rail .mejs__time-handle-content:focus,
.mejs__time-rail .mejs__time-handle-content:active {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
.mejs__time-float {
  background: #eee;
  border: solid 1px #333;
  bottom: 100%;
  color: #111;
  display: none;
  height: 17px;
  margin-bottom: 9px;
  position: absolute;
  text-align: center;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 36px;
}
.mejs__time-float-current {
  display: block;
  left: 0;
  margin: 2px;
  text-align: center;
  width: 30px;
}
.mejs__time-float-corner {
  border: solid 5px #eee;
  border-color: #eee transparent transparent;
  -webkit-border-radius: 0;
          border-radius: 0;
  display: block;
  height: 0;
  left: 50%;
  line-height: 0;
  position: absolute;
  top: 100%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 0;
}
.mejs__long-video .mejs__time-float {
  margin-left: -23px;
  width: 64px;
}
.mejs__long-video .mejs__time-float-current {
  width: 60px;
}
.mejs__broadcast {
  color: #fff;
  height: 10px;
  position: absolute;
  top: 15px;
  width: 100%;
}
.mejs__fullscreen-button > button {
  background-position: -80px 0;
}
.mejs__unfullscreen > button {
  background-position: -100px 0;
}
.mejs__mute > button {
  background-position: -60px 0;
}
.mejs__unmute > button {
  background-position: -40px 0;
}
.mejs__volume-button {
  position: relative;
}
.mejs__volume-button > .mejs__volume-slider {
  -webkit-backface-visibility: hidden;
  background: rgba(50, 50, 50, 0.7);
  -webkit-border-radius: 0;
          border-radius: 0;
  bottom: 100%;
  display: none;
  height: 115px;
  left: 50%;
  margin: 0;
  position: absolute;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 25px;
  z-index: 1;
}
.mejs__volume-button:hover {
  -webkit-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}
.mejs__volume-total {
  background: rgba(255, 255, 255, 0.5);
  height: 100px;
  left: 50%;
  margin: 0;
  position: absolute;
  top: 8px;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 2px;
}
.mejs__volume-current {
  background: rgba(255, 255, 255, 0.9);
  left: 0;
  margin: 0;
  position: absolute;
  width: 100%;
}
.mejs__volume-handle {
  background: rgba(255, 255, 255, 0.9);
  -webkit-border-radius: 1px;
          border-radius: 1px;
  cursor: ns-resize;
  height: 6px;
  left: 50%;
  position: absolute;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 16px;
}
.mejs__horizontal-volume-slider {
  display: block;
  height: 36px;
  position: relative;
  vertical-align: middle;
  width: 56px;
}
.mejs__horizontal-volume-total {
  background: rgba(50, 50, 50, 0.8);
  -webkit-border-radius: 2px;
          border-radius: 2px;
  font-size: 1px;
  height: 8px;
  left: 0;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 16px;
  width: 50px;
}
.mejs__horizontal-volume-current {
  background: rgba(255, 255, 255, 0.8);
  -webkit-border-radius: 2px;
          border-radius: 2px;
  font-size: 1px;
  height: 100%;
  left: 0;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.mejs__horizontal-volume-handle {
  display: none;
}
.mejs__captions-button,
.mejs__chapters-button {
  position: relative;
}
.mejs__captions-button > button {
  background-position: -140px 0;
}
.mejs__chapters-button > button {
  background-position: -180px 0;
}
.mejs__captions-button > .mejs__captions-selector,
.mejs__chapters-button > .mejs__chapters-selector {
  background: rgba(50, 50, 50, 0.7);
  border: solid 1px transparent;
  -webkit-border-radius: 0;
          border-radius: 0;
  bottom: 100%;
  margin-right: -43px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  right: 50%;
  visibility: visible;
  width: 86px;
}
.mejs__chapters-button > .mejs__chapters-selector {
  margin-right: -55px;
  width: 110px;
}
.mejs__captions-selector-list,
.mejs__chapters-selector-list {
  list-style-type: none !important;
  margin: 0;
  overflow: hidden;
  padding: 0;
}
.mejs__captions-selector-list-item,
.mejs__chapters-selector-list-item {
  color: #fff;
  cursor: pointer;
  display: block;
  list-style-type: none !important;
  margin: 0 0 6px;
  overflow: hidden;
  padding: 0;
}
.mejs__captions-selector-list-item:hover,
.mejs__chapters-selector-list-item:hover {
  background-color: rgb(200, 200, 200) !important;
  background-color: rgba(255, 255, 255, 0.4) !important;
}
.mejs__captions-selector-input,
.mejs__chapters-selector-input {
  clear: both;
  float: left;
  left: -1000px;
  margin: 3px 3px 0 5px;
  position: absolute;
}
.mejs__captions-selector-label,
.mejs__chapters-selector-label {
  cursor: pointer;
  float: left;
  font-size: 10px;
  line-height: 15px;
  padding: 4px 10px 0;
  width: 100%;
}
.mejs__captions-selected,
.mejs__chapters-selected {
  color: rgb(33, 248, 248);
}
.mejs__captions-translations {
  font-size: 10px;
  margin: 0 0 5px;
}
.mejs__captions-layer {
  bottom: 0;
  color: #fff;
  font-size: 16px;
  left: 0;
  line-height: 20px;
  position: absolute;
  text-align: center;
}
.mejs__captions-layer a {
  color: #fff;
  text-decoration: underline;
}
.mejs__captions-layer[lang=ar] {
  font-size: 20px;
  font-weight: normal;
}
.mejs__captions-position {
  bottom: 15px;
  left: 0;
  position: absolute;
  width: 100%;
}
.mejs__captions-position-hover {
  bottom: 35px;
}
.mejs__captions-text,
.mejs__captions-text * {
  background: rgba(20, 20, 20, 0.5);
  -webkit-box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
          box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
  padding: 0;
  white-space: pre-wrap;
}
.mejs__container.mejs__hide-cues video::-webkit-media-text-track-container {
  display: none;
}
.mejs__overlay-error {
  position: relative;
}
.mejs__overlay-error > img {
  left: 0;
  max-width: 100%;
  position: absolute;
  top: 0;
  z-index: -1;
}
.mejs__cannotplay,
.mejs__cannotplay a {
  color: #fff;
  font-size: 0.8em;
}
.mejs__cannotplay {
  position: relative;
}
.mejs__cannotplay p,
.mejs__cannotplay a {
  display: inline-block;
  padding: 0 15px;
  width: 100%;
}
.coh-video iframe,
.coh-video video {
  width: 100%;
  height: 100%;
}
.coh-video .mejs__container:not(.mejs__container-fullscreen) video {
  -o-object-fit: cover;
     object-fit: cover;
}
.coh-video-hide-controls .mejs__controls {
  display: none;
}
.coh-video-hide-center-play .mejs__overlay-play .mejs__overlay-button,
.coh-video-hide-center-play .mejs__overlay-loading-bg-img {
  display: none;
}
.coh-video-vimeo_iframe .mejs__iframe-overlay,
.coh-video-vimeo_iframe .mejs__poster,
.coh-video-vimeo_iframe .mejs__overlay-play, .coh-video-youtube_iframe .mejs__iframe-overlay,
.coh-video-youtube_iframe .mejs__poster,
.coh-video-youtube_iframe .mejs__overlay-play {
  display: none;
}
.coh-video-background {
  position: relative;
  overflow: hidden;
}
.coh-video-background-inner {
  position: absolute;
  width: 100%;
  min-height: 100%;
  z-index: -100;
  -o-object-fit: cover;
     object-fit: cover;
}
.coh-video-background-top .coh-video-background-inner {
  top: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-video-background-center .coh-video-background-inner {
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.coh-video-background-bottom .coh-video-background-inner {
  top: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-wysiwyg:before, .coh-wysiwyg:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-youtube-embed-inner {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.coh-youtube-embed-inner .coh-youtube-embed-item,
.coh-youtube-embed-inner iframe,
.coh-youtube-embed-inner embed,
.coh-youtube-embed-inner object,
.coh-youtube-embed-inner video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.coh-youtube-embed-16by9 {
  padding-bottom: 56.25%;
}
.coh-youtube-embed-4by3 {
  padding-bottom: 75%;
}
.mb_YTPBar,
.mb_YTPBar span.mb_YTPUrl a {
  color: #fff;
}
.coh-youtube-video-background:before, .coh-youtube-video-background:after {
  clear: both;
  content: \" \";
  display: table;
}
.mb_YTPlayer:focus {
  outline: 0;
}
.YTPWrapper {
  display: block;
  -webkit-transform: translateZ(0) translate3d(0, 0, 0);
          transform: translateZ(0) translate3d(0, 0, 0);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-perspective: 1000;
          perspective: 1000;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.mb_YTPlayer .loading {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
  color: #fff;
  background: rgba(0, 0, 0, 0.51);
  text-align: center;
  padding: 2px 4px;
  -webkit-border-radius: 5px;
          border-radius: 5px;
  font-family: \"Droid Sans\", sans-serif;
  -webkit-animation: fade 0.1s infinite alternate;
  animation: fade 0.1s infinite alternate;
}
@-webkit-keyframes fade {
  0% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fade {
  0% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}
.YTPFullscreen {
  display: block !important;
  position: fixed !important;
  width: 100% !important;
  height: 100% !important;
  top: 0 !important;
  left: 0 !important;
  margin: 0 !important;
  border: none !important;
  opacity: 1 !important;
  background-color: #000;
}
.mbYTP_wrapper iframe {
  max-width: 4000px !important;
}
.inline_YTPlayer {
  margin-bottom: 20px;
  vertical-align: top;
  position: relative;
  left: 0;
  overflow: hidden;
  -webkit-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
  background: rgba(0, 0, 0, 0.5);
}
.inline_YTPlayer img {
  border: none !important;
  margin: 0 !important;
  padding: 0 !important;
  -webkit-transform: none !important;
      -ms-transform: none !important;
          transform: none !important;
}
.mb_YTPBar,
.mb_YTPBar .buttonBar {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  left: 0;
  padding: 5px;
  width: 100%;
}
.mb_YTPBar .mb_YTPUrl.ytpicon {
  font-size: 30px;
}
.mb_YTPBar {
  -webkit-transition: opacity 0.5s;
  transition: opacity 0.5s;
  display: block;
  height: 10px;
  background: #333;
  position: fixed;
  bottom: 0;
  text-align: left;
  z-index: 1000;
  font: 14px/16px sans-serif;
  opacity: 0.1;
}
.mb_YTPBar.visible,
.mb_YTPBar:hover {
  opacity: 1;
}
.mb_YTPBar .buttonBar {
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  background: 0 0;
  font: 12px/14px Calibri, sans-serif;
  position: absolute;
  top: -30px;
  height: 40px;
}
.mb_YTPBar:hover .buttonBar {
  background: rgba(0, 0, 0, 0.4);
}
.mb_YTPBar span {
  display: inline-block;
  font: 16px/20px Calibri, sans-serif;
  position: relative;
  width: 30px;
  height: 25px;
  vertical-align: middle;
}
.mb_YTPBar span.mb_YTPTime {
  width: 130px;
}
.mb_YTPBar span.mb_OnlyYT,
.mb_YTPBar span.mb_YTPUrl {
  position: absolute;
  width: auto;
  display: block;
  top: 6px;
  right: 10px;
  cursor: pointer;
}
.mb_YTPBar span.mb_YTPUrl img {
  width: 60px;
}
.mb_YTPBar span.mb_OnlyYT {
  left: 300px;
  right: auto;
}
.mb_YTPBar span.mb_OnlyYT img {
  width: 25px;
}
.mb_YTPBar .mb_YTPMuteUnmute,
.mb_YTPBar .mb_YTPPlaypause,
.mb_YTPlayer .mb_YTPBar .mb_YTPPlaypause img {
  cursor: pointer;
}
.mb_YTPBar .mb_YTPProgress {
  height: 10px;
  width: 100%;
  background: #222;
  bottom: 0;
  left: 0;
}
.mb_YTPBar .mb_YTPLoaded {
  height: 10px;
  width: 0;
  background: #444;
  left: 0;
}
.mb_YTPBar .mb_YTPseekbar {
  height: 10px;
  width: 0;
  background: #bb110e;
  bottom: 0;
  left: 0;
  -webkit-box-shadow: rgba(82, 82, 82, 0.47) 1px 1px 3px;
          box-shadow: rgba(82, 82, 82, 0.47) 1px 1px 3px;
}
.mb_YTPBar .YTPOverlay {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transform-style: \"flat\";
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.YTPOverlay.raster {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAOSURBVHgBY8ACjGkhAAAzNgEAjHSwTQAAAABJRU5ErkJggg==);
}
.YTPOverlay.raster.retina {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAOSURBVHgBY8ACjGkhAAAzNgEAjHSwTQAAAABJRU5ErkJggg==);
}
.YTPOverlay.raster-dot {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGUlEQVR4AWP4//8/URhMAEEDIZo6Jo6aCABdUuyg/lDoOwAAAABJRU5ErkJggg==);
}
.YTPOverlay.raster-dot.retina {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAAG0lEQVR4AWP4//8/XgwC6jAMEUDwqaNgMLgBAOadWSnhHBoRAAAAAElFTkSuQmCC);
}
.mb_YTPBar .simpleSlider {
  position: relative;
  width: 100px;
  height: 10px;
  border: 1px solid #fff;
  overflow: hidden;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  margin-right: 10px;
  cursor: pointer !important;
  -webkit-border-radius: 3px;
          border-radius: 3px;
}
.mb_YTPBar.compact .simpleSlider {
  width: 40px;
}
.mb_YTPBar .simpleSlider.muted {
  opacity: 0.3;
}
.mb_YTPBar .level {
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: #fff;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.mb_YTPBar .level.horizontal {
  height: 100%;
  width: 0;
}
.mb_YTPBar .level.vertical {
  height: auto;
  width: 100%;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__0e9e938b4638197b318c44e77e3d8305";
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
        return new Source("", "__string_template__0e9e938b4638197b318c44e77e3d8305", "");
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
