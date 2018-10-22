<?php

/* customer/customer_history.twig */
class __TwigTemplate_4f34af5584307f94490866306134ef957e4a5487c3d55e6f8a10275fcfce3654 extends Twig_Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_comment"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["histories"] ?? null)) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 12
                echo "          <tr>
            <td class=\"text-left\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", array());
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      ";
        } else {
            // line 18
            echo "        <tr>
          <td class=\"text-center\" colspan=\"2\">";
            // line 19
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 22
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 26
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 27
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  81 => 26,  75 => 22,  69 => 19,  66 => 18,  63 => 17,  54 => 14,  50 => 13,  47 => 12,  42 => 11,  40 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customer/customer_history.twig", "/var/www/html/vncrafts.com/admin/view/template/customer/customer_history.twig");
    }
}
