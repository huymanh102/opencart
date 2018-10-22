<?php

/* localisation/currency_form.twig */
class __TwigTemplate_4481e53a6bf65df8dc1519c5fc6e9230d40c9018b24c874b7e4b1d67d38e77a5 extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        echo ($context["text_iso"] ?? null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 28
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"";
        // line 30
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\"/>
              ";
        // line 31
        if (($context["error_title"] ?? null)) {
            // line 32
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
              ";
        }
        // line 34
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-code\">";
        // line 37
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 39
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
              <small class=\"form-text text-muted\">";
        // line 40
        echo ($context["help_code"] ?? null);
        echo "</small>
              ";
        // line 41
        if (($context["error_code"] ?? null)) {
            // line 42
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-symbol-left\">";
        // line 47
        echo ($context["entry_symbol_left"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 49
        echo ($context["symbol_left"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_left"] ?? null);
        echo "\" id=\"input-symbol-left\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-symbol-right\">";
        // line 53
        echo ($context["entry_symbol_right"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 55
        echo ($context["symbol_right"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_right"] ?? null);
        echo "\" id=\"input-symbol-right\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-decimal-place\">";
        // line 59
        echo ($context["entry_decimal_place"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 61
        echo ($context["decimal_place"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_decimal_place"] ?? null);
        echo "\" id=\"input-decimal-place\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-value\">";
        // line 65
        echo ($context["entry_value"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 67
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\"/>
              <small class=\"form-text text-muted\">";
        // line 68
        echo ($context["help_value"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 72
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 75
        if (($context["status"] ?? null)) {
            // line 76
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 77
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 79
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 82
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/currency_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 90,  234 => 82,  229 => 80,  224 => 79,  219 => 77,  214 => 76,  212 => 75,  206 => 72,  199 => 68,  193 => 67,  188 => 65,  179 => 61,  174 => 59,  165 => 55,  160 => 53,  151 => 49,  146 => 47,  141 => 44,  135 => 42,  133 => 41,  129 => 40,  123 => 39,  118 => 37,  113 => 34,  107 => 32,  105 => 31,  99 => 30,  94 => 28,  89 => 26,  84 => 24,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/currency_form.twig", "/var/www/html/vncrafts.com/admin/view/template/localisation/currency_form.twig");
    }
}
