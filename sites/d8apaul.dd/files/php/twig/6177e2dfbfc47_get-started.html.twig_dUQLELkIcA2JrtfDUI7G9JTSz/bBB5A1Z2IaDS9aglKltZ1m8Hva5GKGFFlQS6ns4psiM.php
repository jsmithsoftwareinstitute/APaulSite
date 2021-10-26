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

/* @olivero/includes/get-started.html.twig */
class __TwigTemplate_f6287963c312d9ef277b03413b223c1aaf7047613a83ec893ca540bcb12d92c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "trans" => 26];
        $filters = ["escape" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
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
        // line 13
        echo "
";
        // line 14
        $context["drupal_community"] = "https://www.drupal.org/community";
        // line 15
        $context["drupal_values"] = "https://www.drupal.org/about/values-and-principles";
        // line 16
        $context["drupal_user_guide"] = "https://www.drupal.org/docs/user_guide/en/index.html";
        // line 17
        $context["create_content"] = "/node/add";
        // line 18
        $context["drupal_extend"] = "https://www.drupal.org/docs/8/extending-drupal-8";
        // line 19
        $context["drupal_global_training_days"] = "https://groups.drupal.org/global-training-days";
        // line 20
        $context["drupal_events"] = "https://www.drupal.org/community/events";
        // line 21
        $context["drupal_slack"] = "https://www.drupal.org/slack";
        // line 22
        $context["drupal_chat"] = "https://www.drupal.org/drupalchat";
        // line 23
        $context["drupal_answers"] = "https://drupal.stackexchange.com/";
        // line 24
        echo "
<div class=\"text-content\">
  <p>";
        // line 26
        echo t("<em>You haven’t created any frontpage content yet.</em>", array());
        echo "</p>
  <h2>";
        // line 27
        echo t("Congratulations and welcome to the Drupal community!", array());
        echo "</h2>
  <p>";
        // line 28
        echo t("Drupal is an open source platform for building amazing digital experiences. It’s made, used, taught, documented, and marketed by the <a href=\"@drupal_community\">Drupal community</a>. Our community is made up of people from around the world with a shared set of <a href=\"@drupal_values\">values</a>, collaborating together in a respectful manner. As we like to say:", array("@drupal_community" => ($context["drupal_community"] ?? null), "@drupal_values" => ($context["drupal_values"] ?? null), ));
        echo "</p>
  <blockquote>";
        // line 29
        echo t("Come for the code, stay for the community.", array());
        echo "</blockquote>
  <h2>";
        // line 30
        echo t("Get Started", array());
        echo "</h2>
  <p>";
        // line 31
        echo t("There are a few ways to get started with Drupal:", array());
        echo "</p>
  <ol>
    <li>";
        // line 33
        echo t("<a href=\"@drupal_user_guide\">User Guide:</a> Includes installing, administering, site building, and maintaining the content of a Drupal website.", array("@drupal_user_guide" => ($context["drupal_user_guide"] ?? null), ));
        echo "</li>
    <li>";
        // line 34
        echo t("<a href=\"@create_content\">Create Content:</a> Want to get right to work? Start adding content. <strong>Note:</strong> the information on this page will go away once you add content to your site. Read on and bookmark resources of interest.", array("@create_content" => ($context["create_content"] ?? null), ));
        echo "</li>
    <li>";
        // line 35
        echo t("<a href=\"@drupal_extend\">Extend Drupal:</a> Drupal’s core software can be extended and customized in remarkable ways. Install additional functionality and change the look of your site using addons contributed by our community.", array("@drupal_extend" => ($context["drupal_extend"] ?? null), ));
        echo "</li>
  </ol>
  <h2>";
        // line 37
        echo t("Next Steps", array());
        echo "</h2>
  <p>";
        // line 38
        echo t("Bookmark these links to our active Drupal community groups and support resources.", array());
        echo "</p>
  <ul>
    <li>";
        // line 40
        echo t("<a href=\"@drupal_global_training_days\">Global Training Days:</a> Helpful information for evaluating Drupal as a framework and as a career path. Taught in your local language.", array("@drupal_global_training_days" => ($context["drupal_global_training_days"] ?? null), ));
        echo "</li>
    <li>";
        // line 41
        echo t("<a href=\"@drupal_events\">Upcoming Events:</a> Learn and connect with others at conferences and events held around the world.", array("@drupal_events" => ($context["drupal_events"] ?? null), ));
        echo "</li>
    <li>";
        // line 42
        echo t("<a href=\"@drupal_community\">Community Page:</a> List of key Drupal community groups with their own content.", array("@drupal_community" => ($context["drupal_community"] ?? null), ));
        echo "</li>
    <li>";
        // line 43
        echo t("Get support and chat with the Drupal community on <a href=\"@drupal_slack\">Slack</a> or <a href=\"@drupal_chat\">DrupalChat</a>. When you’re looking for a solution to a problem, go to <a href=\"@drupal_answers\">Drupal Answers on Stack Exchange</a>.", array("@drupal_slack" => ($context["drupal_slack"] ?? null), "@drupal_chat" => ($context["drupal_chat"] ?? null), "@drupal_answers" => ($context["drupal_answers"] ?? null), ));
        echo "</li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@olivero/includes/get-started.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  137 => 42,  133 => 41,  129 => 40,  124 => 38,  120 => 37,  115 => 35,  111 => 34,  107 => 33,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 24,  76 => 23,  74 => 22,  72 => 21,  70 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  58 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/includes/get-started.html.twig", "C:\\Users\\jcmsm\\Sites\\devdesktop\\d8apaul\\themes\\olivero\\templates\\includes\\get-started.html.twig");
    }
}
