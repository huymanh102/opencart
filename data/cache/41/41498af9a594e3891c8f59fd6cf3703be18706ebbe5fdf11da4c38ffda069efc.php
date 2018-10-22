<?php

/* design/theme_history.twig */
class __TwigTemplate_ba44058734851273e415a539a90e2efb6876a479a9a11be61edc63d807659ef1 extends Twig_Template
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
        echo ($context["column_store"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_route"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_theme"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 9
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["histories"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 15
                echo "          <tr>
            <td class=\"text-left\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "store", array());
                echo "
              <input type=\"hidden\" name=\"store_id\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "store_id", array());
                echo "\"/></td>
            <td class=\"text-left\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["history"], "route", array());
                echo "
              <input type=\"hidden\" name=\"path\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["history"], "route", array());
                echo "\"/></td>
            <td class=\"text-left\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["history"], "theme", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", array());
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["history"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["history"], "delete", array());
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
        } else {
            // line 26
            echo "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 27
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 30
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 34
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 35
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "design/theme_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  121 => 34,  115 => 30,  109 => 27,  106 => 26,  103 => 25,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/theme_history.twig", "/var/www/html/vncrafts.com/admin/view/template/design/theme_history.twig");
    }
}
