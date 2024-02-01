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

/* __string_template__a35b1c609cb4af1850ebf50c7045f3b4 */
class __TwigTemplate_4b5f78b5f6b6482a5ce0c44fc3300826 extends Template
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
        echo ".ssa-ck-content h6 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.125rem;
}
.ssa-ck-content h1 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 3.75rem;
  line-height: 5.625rem;
}
.ssa-ck-content button, .ssa-ck-content .button--primary {
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
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
}
.ssa-ck-content h2 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  font-size: 2.5rem;
  line-height: 3.75rem;
  color: rgb(0, 0, 0);
}
.ssa-ck-content h3 {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 1.75rem;
  line-height: 1.25rem;
  line-height: 45px;
  margin-bottom: 3.125rem;
  text-align: center;
}
.ssa-ck-content p {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(0, 0, 0);
  font-size: 0.875rem;
}
.ssa-ck-content label {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(136, 136, 136);
  font-size: 0.75rem;
}
.ssa-ck-content input {
  padding-top: 0.75rem;
  padding-right: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 0.75rem;
  border-width: 0;
  background-color: rgb(255, 255, 255);
  font-weight: 700;
  font-size: 0.875rem;
  color: rgb(0, 0, 0);
}
.ssa-ck-content :root {
  --ssa-color-palette-alabaster: rgb(236, 240, 232);
  --ssa-color-palette-alabaster-dark: rgb(230, 240, 231);
  --ssa-color-palette-black: rgb(0, 0, 0);
  --ssa-color-palette-grey: rgb(136, 136, 136);
  --ssa-color-palette-linen: rgb(254, 241, 227);
  --ssa-color-palette-sandy-brown: rgb(251, 174, 97);
  --ssa-color-palette-sunset: rgb(255, 209, 157);
  --ssa-color-palette-white: rgb(255, 255, 255);
}
.ssa-ck-content .coh-color-alabaster {
  color: rgb(236, 240, 232);
}
.ssa-ck-content .coh-color-black {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-color-grey {
  color: rgb(136, 136, 136);
}
.ssa-ck-content .coh-color-linen {
  color: rgb(254, 241, 227);
}
.ssa-ck-content .coh-color-sandy-brown {
  color: rgb(251, 174, 97);
}
.ssa-ck-content .coh-color-sunset {
  color: rgb(255, 209, 157);
}
.ssa-ck-content .coh-color-white {
  color: rgb(255, 255, 255);
}
.ssa-ck-content :root {
  --ssa-default-font-settings-font-family: 'Roboto', sans-serif;
  --ssa-default-font-settings-color: rgb(0, 0, 0);
}
.ssa-ck-content {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: rgb(0, 0, 0);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__a35b1c609cb4af1850ebf50c7045f3b4";
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
        return new Source("", "__string_template__a35b1c609cb4af1850ebf50c7045f3b4", "");
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
