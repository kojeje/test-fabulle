<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/components/save.hbs */
class __TwigTemplate_4b2232d588f1b91979a551984238a0ec5f44b8eec3be7d6f9f3eb809269cd061 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"mailpoet_save_wrapper {{ wrapperClass }}\">
    <input type=\"button\" name=\"next\" value=\"";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next");
        echo "\" class=\"button button-primary mailpoet_save_next\" />
    <div class=\"mailpoet_button_group mailpoet_save_button_group\">
        <input type=\"button\" name=\"save\" value=\"";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save");
        echo "\" class=\"button button-primary mailpoet_save_button\" /><button class=\"button button-primary mailpoet_save_show_options\" data-automation-id=\"newsletter_save_options_toggle\" ><span class=\"dashicons mailpoet_save_show_options_icon\"></span></button>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"mailpoet_editor_messages\">    
        <div class=\"mailpoet_save_error\"></div>
        <div class=\"mailpoet_editor_last_saved mailpoet_hidden\">";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Autosaved");
        echo " <span class=\"mailpoet_autosaved_at\"></span></div>
    </div>
    <ul class=\"mailpoet_save_options mailpoet_hidden\">
        <li class=\"mailpoet_save_option\"><a href=\"javascript:;\" class=\"mailpoet_save_template\" data-automation-id=\"newsletter_save_as_template_option\">";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save as template");
        echo "</a></li>
        <li class=\"mailpoet_save_option\"><a href=\"javascript:;\" class=\"mailpoet_save_export\">";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export as template");
        echo "</a></li>
    </ul>
    <div class=\"clearfix\"></div>
    <div class=\"mailpoet_save_as_template_container mailpoet_hidden\">
        <p><b class=\"mailpoet_save_as_template_title\">";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save as template");
        echo "</b></p>
        <p><input type=\"text\" name=\"template_name\" value=\"\" placeholder=\"";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert template name");
        echo "\" class=\"mailpoet_input mailpoet_save_as_template_name\" /></p>
        <p><input type=\"text\" name=\"template_description\" value=\"\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert template description");
        echo "\" class=\"mailpoet_input mailpoet_save_as_template_description\" /></p>
        <p><input type=\"button\" name=\"save_as_template\" value=\"";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save as template");
        echo "\" class=\"button button-primary mailpoet_button_full mailpoet_save_as_template\" data-automation-id=\"newsletter_save_as_template_button\" /></p>
    </div>
    <div class=\"mailpoet_export_template_container mailpoet_hidden\">
        <p><b class=\"mailpoet_export_template_title\">";
        // line 23
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export template");
        echo "</b></p>
        <p><input type=\"text\" name=\"export_template_name\" value=\"\" placeholder=\"";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template name");
        echo "\" class=\"mailpoet_input mailpoet_export_template_name\" /></p>
        <p><input type=\"button\" name=\"export_template\" value=\"";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export template");
        echo "\" class=\"button button-primary mailpoet_button_full mailpoet_export_template\" /></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/save.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  85 => 24,  81 => 23,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  56 => 13,  52 => 12,  46 => 9,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/save.hbs", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/newsletter/templates/components/save.hbs");
    }
}
