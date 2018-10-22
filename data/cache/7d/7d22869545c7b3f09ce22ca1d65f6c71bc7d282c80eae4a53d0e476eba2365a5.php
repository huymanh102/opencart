<?php

/* default/template/account/return_form.twig */
class __TwigTemplate_17cad1d1bb7b1473e8a7291e997d43fc48a51ae3cf1a63f179b672134164114f extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\"> ";
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
        echo "  <div class=\"row\"> ";
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
        echo "\"> ";
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
        <fieldset>
          <legend>";
        // line 24
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 26
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              ";
        // line 29
        if (($context["error_firstname"] ?? null)) {
            // line 30
            echo "                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 32
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 35
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 37
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              ";
        // line 38
        if (($context["error_lastname"] ?? null)) {
            // line 39
            echo "                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 44
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 46
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 47
        if (($context["error_email"] ?? null)) {
            // line 48
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 50
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 53
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 55
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
              ";
        // line 56
        if (($context["error_telephone"] ?? null)) {
            // line 57
            echo "                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 59
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-order-id\">";
        // line 62
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 64
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
              ";
        // line 65
        if (($context["error_order_id"] ?? null)) {
            // line 66
            echo "                <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 68
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-date-ordered\">";
        // line 71
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 col-md-4\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 74
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" id=\"input-date-ordered\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 83
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-product\">";
        // line 85
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 87
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
              ";
        // line 88
        if (($context["error_product"] ?? null)) {
            // line 89
            echo "                <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 91
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-model\">";
        // line 94
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 96
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
              ";
        // line 97
        if (($context["error_model"] ?? null)) {
            // line 98
            echo "                <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 100
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-quantity\">";
        // line 103
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 105
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 111
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", array()) == ($context["return_reason_id"] ?? null))) {
                // line 112
                echo "                  <div class=\"form-check\">
                    <label> <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", array());
                echo "\" class=\"form-check-input\" checked=\"checked\"/>
                      ";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", array());
                echo "</label>
                  </div>
                ";
            } else {
                // line 117
                echo "                  <div class=\"form-check\">
                    <label><input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", array());
                echo "\" class=\"form-check-input\"/>
                      ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", array());
                echo "</label>
                  </div>
                ";
            }
            // line 122
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 124
            echo "                <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 126
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 129
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-check-inline\">
                <label>
                  ";
        // line 133
        if (($context["opened"] ?? null)) {
            // line 134
            echo "                    <input type=\"radio\" name=\"opened\" value=\"1\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 136
            echo "                    <input type=\"radio\" name=\"opened\" value=\"1\" class=\"form-check-input\"/>
                  ";
        }
        // line 138
        echo "                  ";
        echo ($context["text_yes"] ?? null);
        echo "
                </label>
              </div>
              <div class=\"form-check form-check-inline\">
                <label>
                  ";
        // line 143
        if ( !($context["opened"] ?? null)) {
            // line 144
            echo "                    <input type=\"radio\" name=\"opened\" value=\"0\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 146
            echo "                    <input type=\"radio\" name=\"opened\" value=\"0\" class=\"form-check-input\"/>
                  ";
        }
        // line 148
        echo "                  ";
        echo ($context["text_no"] ?? null);
        echo "
                </label>
              </div>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
        // line 154
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 156
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 159
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 161
        if (($context["text_agree"] ?? null)) {
            // line 162
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-left\"><a href=\"";
            // line 163
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
            <div class=\"float-right\">";
            // line 164
            echo ($context["text_agree"] ?? null);
            echo "
              ";
            // line 165
            if (($context["agree"] ?? null)) {
                // line 166
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
              ";
            } else {
                // line 168
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            }
            // line 170
            echo "              <input type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        } else {
            // line 174
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-left\"><a href=\"";
            // line 175
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-light\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
            <div class=\"float-right\">
              <input type=\"submit\" value=\"";
            // line 177
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        }
        // line 181
        echo "      </form>
      ";
        // line 182
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 184
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 190
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 194
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 194,  500 => 190,  491 => 184,  486 => 182,  483 => 181,  476 => 177,  469 => 175,  466 => 174,  458 => 170,  454 => 168,  450 => 166,  448 => 165,  444 => 164,  438 => 163,  435 => 162,  433 => 161,  428 => 159,  420 => 156,  415 => 154,  405 => 148,  401 => 146,  397 => 144,  395 => 143,  386 => 138,  382 => 136,  378 => 134,  376 => 133,  369 => 129,  364 => 126,  358 => 124,  355 => 123,  349 => 122,  343 => 119,  339 => 118,  336 => 117,  330 => 114,  326 => 113,  323 => 112,  320 => 111,  316 => 110,  312 => 109,  303 => 105,  298 => 103,  293 => 100,  287 => 98,  285 => 97,  279 => 96,  274 => 94,  269 => 91,  263 => 89,  261 => 88,  255 => 87,  250 => 85,  245 => 83,  231 => 74,  225 => 71,  220 => 68,  214 => 66,  212 => 65,  206 => 64,  201 => 62,  196 => 59,  190 => 57,  188 => 56,  182 => 55,  177 => 53,  172 => 50,  166 => 48,  164 => 47,  158 => 46,  153 => 44,  148 => 41,  142 => 39,  140 => 38,  134 => 37,  129 => 35,  124 => 32,  118 => 30,  116 => 29,  110 => 28,  105 => 26,  100 => 24,  95 => 22,  91 => 21,  87 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/return_form.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/account/return_form.twig");
    }
}
