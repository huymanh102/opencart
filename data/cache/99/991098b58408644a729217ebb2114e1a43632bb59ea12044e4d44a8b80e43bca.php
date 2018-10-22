<?php

/* default/template/account/voucher.twig */
class __TwigTemplate_f3b03abbb2242866823d4c7fb19d7648f4dd2f868284db46c5e0236c397c1bf4 extends Twig_Template
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
        echo "
<div id=\"account-voucher\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 21
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group row required\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-to-name\">";
        // line 24
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 26
        echo ($context["to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
            ";
        // line 27
        if (($context["error_to_name"] ?? null)) {
            // line 28
            echo "              <div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>
            ";
        }
        // line 30
        echo "          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-to-email\">";
        // line 33
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 35
        echo ($context["to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
            ";
        // line 36
        if (($context["error_to_email"] ?? null)) {
            // line 37
            echo "              <div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>
            ";
        }
        // line 39
        echo "          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-from-name\">";
        // line 42
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 44
        echo ($context["from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
            ";
        // line 45
        if (($context["error_from_name"] ?? null)) {
            // line 46
            echo "              <div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>
            ";
        }
        // line 48
        echo "          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-from-email\">";
        // line 51
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 53
        echo ($context["from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
            ";
        // line 54
        if (($context["error_from_email"] ?? null)) {
            // line 55
            echo "              <div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>
            ";
        }
        // line 57
        echo "          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-2 col-form-label\">";
        // line 60
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 63
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", array()) == ($context["voucher_theme_id"] ?? null))) {
                // line 64
                echo "                <div class=\"form-check\">
                  <label> <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", array());
                echo "\" class=\"form-check-input\" checked=\"checked\"/>
                    ";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", array());
                echo "</label>
                </div>
              ";
            } else {
                // line 69
                echo "                <div class=\"form-check\">
                  <label><input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", array());
                echo "\" class=\"form-check-input\"/>
                    ";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", array());
                echo "</label>
                </div>
              ";
            }
            // line 74
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            ";
        if (($context["error_theme"] ?? null)) {
            // line 76
            echo "              <div class=\"text-danger\">";
            echo ($context["error_theme"] ?? null);
            echo "</div>
            ";
        }
        // line 78
        echo "          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo ($context["help_message"] ?? null);
        echo "\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 83
        echo ($context["message"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 89
        echo ($context["amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\"/>
            ";
        // line 90
        if (($context["error_amount"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>
            ";
        }
        // line 93
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"float-right\"> ";
        // line 96
        echo ($context["text_agree"] ?? null);
        echo "
            ";
        // line 97
        if (($context["agree"] ?? null)) {
            // line 98
            echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
            ";
        } else {
            // line 100
            echo "              <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
            ";
        }
        // line 102
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 103
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
      ";
        // line 107
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 108
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 110
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 110,  312 => 108,  308 => 107,  301 => 103,  298 => 102,  294 => 100,  290 => 98,  288 => 97,  284 => 96,  279 => 93,  273 => 91,  271 => 90,  267 => 89,  260 => 87,  253 => 83,  246 => 81,  241 => 78,  235 => 76,  232 => 75,  226 => 74,  220 => 71,  216 => 70,  213 => 69,  207 => 66,  203 => 65,  200 => 64,  197 => 63,  193 => 62,  188 => 60,  183 => 57,  177 => 55,  175 => 54,  171 => 53,  166 => 51,  161 => 48,  155 => 46,  153 => 45,  149 => 44,  144 => 42,  139 => 39,  133 => 37,  131 => 36,  127 => 35,  122 => 33,  117 => 30,  111 => 28,  109 => 27,  105 => 26,  100 => 24,  95 => 22,  91 => 21,  87 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/voucher.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/account/voucher.twig");
    }
}
