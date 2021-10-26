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

/* themes/olivero/templates/views/views-view--frontpage.html.twig */
class __TwigTemplate_4008b41771a755d4abc2081c59cf5686f80f2da3b5ba7a2071d2558cce35c7a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 37, "if" => 49, "include" => 74];
        $filters = ["clean_class" => 39, "escape" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape'],
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
        // line 35
        echo "
";
        // line 37
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 41
($context["display_id"] ?? null))), 4 => "grid-full", 5 => "layout--pass--content-narrow", 6 => "ie11-autorow"];
        // line 47
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 49
        if (($context["title"] ?? null)) {
            // line 50
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 52
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 53
        if (($context["header"] ?? null)) {
            // line 54
            echo "    <div class=\"view-header\">
      ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 58
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 59
            echo "    <div class=\"view-filters\">
      ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 63
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 64
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if (($context["rows"] ?? null)) {
            // line 70
            echo "    <div class=\"view-content\">
      ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 73
($context["empty"] ?? null)) {
            // line 74
            echo "    ";
            $this->loadTemplate("@olivero/includes/get-started.html.twig", "themes/olivero/templates/views/views-view--frontpage.html.twig", 74)->display($context);
            // line 75
            echo "  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (($context["pager"] ?? null)) {
            // line 78
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 81
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 85
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 86
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 88
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 89
            echo "    <div class=\"view-footer\">
      ";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 93
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/views/views-view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 93,  179 => 90,  176 => 89,  173 => 88,  167 => 86,  164 => 85,  158 => 82,  155 => 81,  152 => 80,  146 => 78,  144 => 77,  141 => 76,  138 => 75,  135 => 74,  133 => 73,  128 => 71,  125 => 70,  123 => 69,  120 => 68,  114 => 65,  111 => 64,  108 => 63,  102 => 60,  99 => 59,  96 => 58,  90 => 55,  87 => 54,  85 => 53,  80 => 52,  74 => 50,  72 => 49,  68 => 48,  63 => 47,  61 => 41,  60 => 40,  59 => 39,  58 => 37,  55 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/olivero/templates/views/views-view--frontpage.html.twig", "C:\\Users\\jcmsm\\Sites\\devdesktop\\d8apaul\\themes\\olivero\\templates\\views\\views-view--frontpage.html.twig");
    }
}
