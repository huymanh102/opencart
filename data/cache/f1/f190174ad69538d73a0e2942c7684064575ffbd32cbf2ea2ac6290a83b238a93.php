<?php

/* default/template/mail/register_alert.twig */
class __TwigTemplate_3f9ff43f18d8fb8c5ceca83eb9693dde9066f6dfe43035fb17b0574ddb602619 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ($context["text_signup"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_firstname"] ?? null);
        echo " ";
        echo ($context["firstname"] ?? null);
        echo "
";
        // line 4
        echo ($context["text_lastname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "
";
        // line 5
        if (($context["customer_group"] ?? null)) {
            // line 6
            echo ($context["text_customer_group"] ?? null);
            echo " ";
            echo ($context["customer_group"] ?? null);
            echo "
";
        }
        // line 8
        echo ($context["text_email"] ?? null);
        echo " ";
        echo ($context["email"] ?? null);
        echo "
";
        // line 9
        echo ($context["text_telephone"] ?? null);
        echo " ";
        echo ($context["telephone"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  42 => 6,  40 => 5,  34 => 4,  28 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/mail/register_alert.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/mail/register_alert.twig");
    }
}
