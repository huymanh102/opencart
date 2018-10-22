<?php

/* customer/customer_reward.twig */
class __TwigTemplate_295df5c4dacf61c9d3a117d8bd7b3164f7d1115d335f1fc061c183873346ebaf extends Twig_Template
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
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_description"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 7
        echo ($context["column_points"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["rewards"] ?? null)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 13
                echo "          <tr>
            <td class=\"text-left\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", array());
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        <tr>
          <td></td>
          <td class=\"text-right\"><b>";
            // line 21
            echo ($context["text_balance"] ?? null);
            echo "</b></td>
          <td class=\"text-right\">";
            // line 22
            echo ($context["balance"] ?? null);
            echo "</td>
        </tr>
      ";
        } else {
            // line 25
            echo "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 26
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 29
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 33
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 34
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "customer/customer_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  100 => 33,  94 => 29,  88 => 26,  85 => 25,  79 => 22,  75 => 21,  71 => 19,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  46 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customer/customer_reward.twig", "/var/www/html/vncrafts.com/admin/view/template/customer/customer_reward.twig");
    }
}
