<?php

/* customer/customer_ip.twig */
class __TwigTemplate_99a030df6ce220e8c846588a16098b934bebe7c3232b381eb6ae9d6db998f32e extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_ip"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 6
        echo ($context["column_account"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_store"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_country"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["ips"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ips"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 15
                echo "          <tr>
            <td class=\"text-left\"><a href=\"http://www.geoiptool.com/en/?IP=";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", array());
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", array());
                echo "</a></td>
            <td class=\"text-right\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "filter_ip", array());
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "account", array());
                echo "</a></td>
            <td class=\"text-left\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "store", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "country", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "date_added", array());
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      ";
        } else {
            // line 24
            echo "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 28
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 32
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 33
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  109 => 32,  103 => 28,  97 => 25,  94 => 24,  91 => 23,  82 => 20,  78 => 19,  74 => 18,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customer/customer_ip.twig", "/var/www/html/vncrafts.com/admin/view/template/customer/customer_ip.twig");
    }
}
