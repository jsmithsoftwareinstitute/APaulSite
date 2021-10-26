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

/* themes/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_87bda7e4412ee4a8ce57388b5806cdf42774f09033903563da1d76574377b786 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33, "apply" => 39, "include" => 43, "for" => 67, "set" => 71];
        $filters = ["escape" => 34, "t" => 35, "without" => 41, "spaceless" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'include', 'for', 'set'],
                ['escape', 't', 'without', 'spaceless'],
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 38
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 39
                echo "        ";
                ob_start(function () { return ''; });
                // line 40
                echo "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
              ";
                // line 43
                $this->loadTemplate("@olivero/../images/pager-first.svg", "themes/olivero/templates/navigation/pager.html.twig", 43)->display($context);
                // line 44
                echo "            </a>
          </li>
        ";
                $___internal_cb1cfc3f3c793673edb6362f418b349ae71198e8f58726133d289f509a6160ff_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_cb1cfc3f3c793673edb6362f418b349ae71198e8f58726133d289f509a6160ff_));
                // line 47
                echo "      ";
            }
            // line 48
            echo "
      ";
            // line 50
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 51
                echo "        ";
                ob_start(function () { return ''; });
                // line 52
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
              ";
                // line 55
                $this->loadTemplate("@olivero/../images/pager-previous.svg", "themes/olivero/templates/navigation/pager.html.twig", 55)->display($context);
                // line 56
                echo "            </a>
          </li>
        ";
                $___internal_6c9bae6dc076064ef162d29666f554161861dc1d1d090800966caea8507fea4b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_6c9bae6dc076064ef162d29666f554161861dc1d1d090800966caea8507fea4b_));
                // line 59
                echo "      ";
            }
            // line 60
            echo "
      ";
            // line 62
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 63
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 65
            echo "
      ";
            // line 67
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 68
                echo "        ";
                ob_start(function () { return ''; });
                // line 69
                echo "          <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
            ";
                // line 70
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 71
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 72
                    echo "            ";
                } else {
                    // line 73
                    echo "              ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "            ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 76
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                    echo "\" class=\"pager__link";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                    echo "\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title", "class"), "html", null, true);
                    echo ">
            ";
                }
                // line 78
                echo "            <span class=\"visually-hidden\">
              ";
                // line 79
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "
            ";
                // line 82
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 83
                    echo "              </a>
            ";
                }
                // line 85
                echo "          </li>
        ";
                $___internal_3178d461ce1ca3e32ea81a2a6bc25a59b10edee38be49379084e2788bfe7a1c8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 68
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_3178d461ce1ca3e32ea81a2a6bc25a59b10edee38be49379084e2788bfe7a1c8_));
                // line 87
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
      ";
            // line 90
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 91
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 93
            echo "
      ";
            // line 95
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 96
                echo "        ";
                ob_start(function () { return ''; });
                // line 97
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 98
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
              ";
                // line 100
                $this->loadTemplate("@olivero/../images/pager-previous.svg", "themes/olivero/templates/navigation/pager.html.twig", 100)->display($context);
                // line 101
                echo "            </a>
          </li>
        ";
                $___internal_42f9d11ebd1aa309c08f9e5bee1b3e34a08b069a62f8871b3b069b9f81004307_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 96
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_42f9d11ebd1aa309c08f9e5bee1b3e34a08b069a62f8871b3b069b9f81004307_));
                // line 104
                echo "      ";
            }
            // line 105
            echo "
      ";
            // line 107
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 108
                echo "        ";
                ob_start(function () { return ''; });
                // line 109
                echo "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
              ";
                // line 112
                $this->loadTemplate("@olivero/../images/pager-first.svg", "themes/olivero/templates/navigation/pager.html.twig", 112)->display($context);
                // line 113
                echo "            </a>
          </li>
        ";
                $___internal_125ce1bf1eb958ab416ba8ff5eb980d9b78eead8e779b835660c370d65463efc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_125ce1bf1eb958ab416ba8ff5eb980d9b78eead8e779b835660c370d65463efc_));
                // line 116
                echo "      ";
            }
            // line 117
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 117,  302 => 116,  300 => 108,  295 => 113,  293 => 112,  289 => 111,  281 => 110,  278 => 109,  275 => 108,  272 => 107,  269 => 105,  266 => 104,  264 => 96,  259 => 101,  257 => 100,  253 => 99,  245 => 98,  242 => 97,  239 => 96,  236 => 95,  233 => 93,  229 => 91,  226 => 90,  223 => 88,  217 => 87,  215 => 68,  211 => 85,  207 => 83,  205 => 82,  201 => 81,  196 => 79,  193 => 78,  181 => 76,  178 => 75,  175 => 74,  172 => 73,  169 => 72,  166 => 71,  164 => 70,  159 => 69,  156 => 68,  151 => 67,  148 => 65,  144 => 63,  141 => 62,  138 => 60,  135 => 59,  133 => 51,  128 => 56,  126 => 55,  122 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  102 => 48,  99 => 47,  97 => 39,  92 => 44,  90 => 43,  86 => 42,  78 => 41,  75 => 40,  72 => 39,  69 => 38,  62 => 35,  57 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/olivero/templates/navigation/pager.html.twig", "C:\\Users\\jcmsm\\Sites\\devdesktop\\d8apaul\\themes\\olivero\\templates\\navigation\\pager.html.twig");
    }
}
