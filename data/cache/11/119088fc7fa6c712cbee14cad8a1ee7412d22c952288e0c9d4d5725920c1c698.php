<?php

/* default/template/account/affiliate.twig */
class __TwigTemplate_c084cb0ce1bf406f514eeb6e3b8caf10d0b64e018fdba31762be5818e5fd33fb extends Twig_Template
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
<div id=\"account-affiliate\" class=\"container\">
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
      <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset>
          <legend>";
        // line 23
        echo ($context["text_my_affiliate"] ?? null);
        echo "</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-company\">";
        // line 25
        echo ($context["entry_company"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 27
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-website\">";
        // line 31
        echo ($context["entry_website"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"website\" value=\"";
        // line 33
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\"/>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 38
        echo ($context["text_payment"] ?? null);
        echo "</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-tax\">";
        // line 40
        echo ($context["entry_tax"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"tax\" value=\"";
        // line 42
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_payment"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label>";
        // line 49
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 50
            echo "                    <input type=\"radio\" name=\"payment\" value=\"cheque\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 52
            echo "                    <input type=\"radio\" name=\"payment\" value=\"cheque\" class=\"form-check-input\"/>
                  ";
        }
        // line 54
        echo "                  ";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check\">
                <label>";
        // line 57
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 58
            echo "                    <input type=\"radio\" name=\"payment\" value=\"paypal\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 60
            echo "                    <input type=\"radio\" name=\"payment\" value=\"paypal\" class=\"form-check-input\"/>
                  ";
        }
        // line 62
        echo "                  ";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check\">
                <label>";
        // line 65
        if ((($context["payment"] ?? null) == "bank")) {
            // line 66
            echo "                    <input type=\"radio\" name=\"payment\" value=\"bank\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 68
            echo "                    <input type=\"radio\" name=\"payment\" value=\"bank\" class=\"form-check-input\"/>
                  ";
        }
        // line 70
        echo "                  ";
        echo ($context["text_bank"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"form-group row required payment\" id=\"payment-cheque\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-cheque\">";
        // line 75
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 77
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\"/>
              ";
        // line 78
        if (($context["error_cheque"] ?? null)) {
            // line 79
            echo "                <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
              ";
        }
        // line 81
        echo "            </div>
          </div>
          <div class=\"form-group row required payment\" id=\"payment-paypal\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-paypal\">";
        // line 84
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"paypal\" value=\"";
        // line 86
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\"/>
              ";
        // line 87
        if (($context["error_paypal"] ?? null)) {
            // line 88
            echo "                <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
              ";
        }
        // line 90
        echo "            </div>
          </div>
          <div class=\"payment\" id=\"payment-bank\">
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-name\">";
        // line 94
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_name\" value=\"";
        // line 96
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-branch-number\">";
        // line 100
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 102
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-swift-code\">";
        // line 106
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 108
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group required row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-name\">";
        // line 112
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 114
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\"/>
                ";
        // line 115
        if (($context["error_bank_account_name"] ?? null)) {
            // line 116
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                ";
        }
        // line 118
        echo "              </div>
            </div>
            <div class=\"form-group required row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-number\">";
        // line 121
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 123
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\"/>
                ";
        // line 124
        if (($context["error_bank_account_number"] ?? null)) {
            // line 125
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                ";
        }
        // line 127
        echo "              </div>
            </div>
          </div>
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 131
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "affiliate")) {
                // line 132
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                    // line 133
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 137
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 139
                        echo "                        ";
                        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 140
                            echo "                          <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                        ";
                        } else {
                            // line 142
                            echo "                          <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                        ";
                        }
                        // line 144
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                    </select>
                    ";
                    // line 146
                    if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_custom_field"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 147
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 149
                    echo "                  </div>
                </div>
              ";
                }
                // line 152
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                    // line 153
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                    // line 157
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 158
                        echo "                        <div class=\"form-check\">
                          ";
                        // line 159
                        if (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 160
                            echo "                            <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                              ";
                            // line 161
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        } else {
                            // line 163
                            echo "                            <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                              ";
                            // line 164
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        }
                        // line 166
                        echo "                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                    </div>
                    ";
                    // line 169
                    if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["error_custom_field"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 170
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 172
                    echo "                  </div>
                </div>
              ";
                }
                // line 175
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                    // line 176
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 181
                        echo "                        <div class=\"form-check\">
                          ";
                        // line 182
                        if (((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()), (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 183
                            echo "                            <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                              ";
                            // line 184
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        } else {
                            // line 186
                            echo "                            <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                              ";
                            // line 187
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        }
                        // line 189
                        echo "                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "                    </div>
                    ";
                    // line 192
                    if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["error_custom_field"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 193
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 195
                    echo "                  </div>
                </div>
              ";
                }
                // line 198
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                    // line 199
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                    ";
                    // line 203
                    if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["error_custom_field"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 204
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["error_custom_field"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 206
                    echo "                  </div>
                </div>
              ";
                }
                // line 209
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                    // line 210
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "</textarea>
                    ";
                    // line 214
                    if ((($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 215
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 217
                    echo "                  </div>
                </div>
              ";
                }
                // line 220
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                    // line 221
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo " ";
                    }
                    echo "\"/>
                    ";
                    // line 226
                    if ((($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 227
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["error_custom_field"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 229
                    echo "                  </div>
                </div>
              ";
                }
                // line 232
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                    // line 233
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                    ";
                    // line 242
                    if ((($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["error_custom_field"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 243
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["error_custom_field"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 245
                    echo "                  </div>
                </div>
              ";
                }
                // line 248
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                    // line 249
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                    ";
                    // line 258
                    if ((($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["error_custom_field"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 259
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 261
                    echo "                  </div>
                </div>
              ";
                }
                // line 264
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                    // line 265
                    echo "                <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", array())) {
                        echo " required";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                    ";
                    // line 274
                    if ((($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 275
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 277
                    echo "                  </div>
                </div>
              ";
                }
                // line 280
                echo "            ";
            }
            // line 281
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "        </fieldset>
        ";
        // line 283
        if (($context["text_agree"] ?? null)) {
            // line 284
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-right\">";
            // line 285
            echo ($context["text_agree"] ?? null);
            echo "
              ";
            // line 286
            if (($context["agree"] ?? null)) {
                // line 287
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
              ";
            } else {
                // line 289
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            }
            // line 291
            echo "              &nbsp;
              <input type=\"submit\" value=\"";
            // line 292
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        } else {
            // line 296
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-right\">
              <input type=\"submit\" value=\"";
            // line 298
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        }
        // line 302
        echo "      </form>
      ";
        // line 303
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 304
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function() {
\t\$('.payment').hide();

\t\$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 391
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 397
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 403
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 407
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/affiliate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1064 => 407,  1057 => 403,  1048 => 397,  1039 => 391,  949 => 304,  945 => 303,  942 => 302,  935 => 298,  931 => 296,  924 => 292,  921 => 291,  917 => 289,  913 => 287,  911 => 286,  907 => 285,  904 => 284,  902 => 283,  899 => 282,  893 => 281,  890 => 280,  885 => 277,  879 => 275,  877 => 274,  857 => 269,  849 => 266,  840 => 265,  837 => 264,  832 => 261,  826 => 259,  824 => 258,  804 => 253,  796 => 250,  787 => 249,  784 => 248,  779 => 245,  773 => 243,  771 => 242,  751 => 237,  743 => 234,  734 => 233,  731 => 232,  726 => 229,  720 => 227,  718 => 226,  707 => 225,  699 => 224,  694 => 222,  685 => 221,  682 => 220,  677 => 217,  671 => 215,  669 => 214,  653 => 213,  646 => 211,  637 => 210,  634 => 209,  629 => 206,  623 => 204,  621 => 203,  605 => 202,  598 => 200,  589 => 199,  586 => 198,  581 => 195,  575 => 193,  573 => 192,  570 => 191,  563 => 189,  558 => 187,  549 => 186,  544 => 184,  535 => 183,  533 => 182,  530 => 181,  526 => 180,  520 => 177,  511 => 176,  508 => 175,  503 => 172,  497 => 170,  495 => 169,  492 => 168,  485 => 166,  480 => 164,  471 => 163,  466 => 161,  457 => 160,  455 => 159,  452 => 158,  448 => 157,  442 => 154,  433 => 153,  430 => 152,  425 => 149,  419 => 147,  417 => 146,  414 => 145,  408 => 144,  400 => 142,  392 => 140,  389 => 139,  385 => 138,  381 => 137,  373 => 136,  366 => 134,  357 => 133,  354 => 132,  351 => 131,  347 => 130,  342 => 127,  336 => 125,  334 => 124,  328 => 123,  323 => 121,  318 => 118,  312 => 116,  310 => 115,  304 => 114,  299 => 112,  290 => 108,  285 => 106,  276 => 102,  271 => 100,  262 => 96,  257 => 94,  251 => 90,  245 => 88,  243 => 87,  237 => 86,  232 => 84,  227 => 81,  221 => 79,  219 => 78,  213 => 77,  208 => 75,  199 => 70,  195 => 68,  191 => 66,  189 => 65,  182 => 62,  178 => 60,  174 => 58,  172 => 57,  165 => 54,  161 => 52,  157 => 50,  155 => 49,  149 => 46,  140 => 42,  135 => 40,  130 => 38,  120 => 33,  115 => 31,  106 => 27,  101 => 25,  96 => 23,  91 => 21,  87 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/affiliate.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/account/affiliate.twig");
    }
}
