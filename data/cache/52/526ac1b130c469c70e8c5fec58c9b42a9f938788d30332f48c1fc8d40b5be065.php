<?php

/* default/template/mail/review.twig */
class __TwigTemplate_665ae1bb2c32241d5877618a88ceffbc5698051ff6bef044dc56b9b974878ac1 extends Twig_Template
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
        echo ($context["text_waiting"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_product"] ?? null);
        echo " ";
        echo ($context["product"] ?? null);
        echo "
";
        // line 4
        echo ($context["text_reviewer"] ?? null);
        echo " ";
        echo ($context["reviewer"] ?? null);
        echo "
";
        // line 5
        echo ($context["text_rating"] ?? null);
        echo " ";
        echo ($context["rating"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_review"] ?? null);
        echo "

";
        // line 9
        echo ($context["text"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  47 => 7,  40 => 5,  34 => 4,  28 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/mail/review.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/mail/review.twig");
    }
}
