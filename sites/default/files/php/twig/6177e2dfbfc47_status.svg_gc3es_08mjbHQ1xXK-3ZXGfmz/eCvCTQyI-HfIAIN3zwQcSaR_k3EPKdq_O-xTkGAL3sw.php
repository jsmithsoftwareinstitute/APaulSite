<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @olivero/../images/status.svg */
class __TwigTemplate_627d60a774e248013a0594fec6de854d3e46ecd59f0e0c5442ac8ba3c1428f4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32px\" height=\"32px\" viewBox=\"0 0 32 32\">
  <path d=\"M26.8,12.6c0,0.4-0.1,0.7-0.4,0.9L15.1,24.9c-0.2,0.2-0.6,0.4-1,0.4c-0.3,0-0.7-0.1-0.9-0.4l-7.5-7.5c-0.2-0.2-0.4-0.6-0.4-0.9c0-0.4,0.1-0.7,0.4-1l1.9-1.9c0.2-0.2,0.6-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4l4.7,4.7l8.5-8.5c0.2-0.2,0.6-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4l1.9,1.9C26.6,11.9,26.8,12.3,26.8,12.6z M32,16c0-8.8-7.2-16-16-16C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16C24.8,32,32,24.8,32,16z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@olivero/../images/status.svg";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/../images/status.svg", "C:\\Users\\jcmsm\\Sites\\devdesktop\\d8apaul\\themes\\olivero\\images\\status.svg");
    }
}
