<?php

/* tool/backup_history.twig */
class __TwigTemplate_f028e340bf713f27d4c83452cf17c3246d91294d237de751ffeb334a550108a4 extends Twig_Template
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
        <td>";
        // line 5
        echo ($context["column_filename"] ?? null);
        echo "</td>
        <td>";
        // line 6
        echo ($context["column_size"] ?? null);
        echo "</td>
        <td>";
        // line 7
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 8
        echo ($context["column_action"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["histories"] ?? null)) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "          <tr>
            <td>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", array());
                echo "</td>
            <td>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "size", array());
                echo "</td>
            <td>";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", array());
                echo "</td>
            <td class=\"text-right\">
              <button type=\"button\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", array());
                echo "\" data-loading=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_restore"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button>
              <button type=\"button\" onclick=\"location = '";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["history"], "download", array());
                echo "';\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_download"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fas fa-download\"></i></button>
              <button type=\"button\" value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", array());
                echo "\" onclick=\"\" data-loading=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
            </td>
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
          <td colspan=\"4\" class=\"text-center\">";
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
        return "tool/backup_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 34,  111 => 30,  105 => 27,  102 => 26,  99 => 25,  85 => 21,  79 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  50 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tool/backup_history.twig", "/var/www/html/vncrafts.com/admin/view/template/tool/backup_history.twig");
    }
}
