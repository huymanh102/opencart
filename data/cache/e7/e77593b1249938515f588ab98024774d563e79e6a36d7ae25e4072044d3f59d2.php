<?php

/* report/statistics.twig */
class __TwigTemplate_e122b65445f16e7611f01cb6934670011f1b64a82b216d64e0b801406b063cd9 extends Twig_Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 18
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 24
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 30
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 31
        echo ($context["column_value"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 32
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 36
        if (($context["statistics"] ?? null)) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statistics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 38
                echo "                  <tr>
                    <td class=\"text-left\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["statistic"], "name", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["statistic"], "value", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["statistic"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_refresh"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"3\">";
            // line 46
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 49
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "report/statistics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  145 => 49,  139 => 46,  136 => 45,  133 => 44,  122 => 41,  118 => 40,  114 => 39,  111 => 38,  106 => 37,  104 => 36,  97 => 32,  93 => 31,  89 => 30,  80 => 24,  77 => 23,  69 => 19,  66 => 18,  58 => 14,  56 => 13,  51 => 10,  40 => 8,  36 => 7,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "report/statistics.twig", "/var/www/html/vncrafts.com/admin/view/template/report/statistics.twig");
    }
}
