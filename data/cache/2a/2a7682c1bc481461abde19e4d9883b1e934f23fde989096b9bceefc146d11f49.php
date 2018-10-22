<?php

/* default/template/account/register.twig */
class __TwigTemplate_785e3d9c5f6d85f14dd478b3b91c1f80f540efa8aa435a03dff41810b7ebfb14 extends Twig_Template
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
<div id=\"account-register\" class=\"container\">
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
        echo "\">
      ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 22
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 23
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset id=\"account\">
          <legend>";
        // line 25
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\" style=\"display: ";
        // line 26
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 27
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 29
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array()) == ($context["customer_group_id"] ?? null))) {
                // line 30
                echo "                  <div class=\"form-check\">
                    <label><input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" class=\"form-check-input\" checked=\"checked\"/>
                      ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</label>
                  </div>
                ";
            } else {
                // line 35
                echo "                  <div class=\"form-check\">
                    <label><input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" class=\"form-check-input\"/>
                      ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</label>
                  </div>
                ";
            }
            // line 40
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 43
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 45
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 49
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 52
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 54
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              ";
        // line 55
        if (($context["error_lastname"] ?? null)) {
            // line 56
            echo "                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 61
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 63
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 64
        if (($context["error_email"] ?? null)) {
            // line 65
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 67
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 70
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 72
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
              ";
        // line 73
        if (($context["error_telephone"] ?? null)) {
            // line 74
            echo "                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 76
        echo "            </div>
          </div>
          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 79
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                // line 80
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                    <option value=\"\">";
                // line 84
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 86
                    echo "                      ";
                    if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["register_custom_field"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array())] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["register_custom_field"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                        // line 87
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</option>
                      ";
                    } else {
                        // line 89
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</option>
                      ";
                    }
                    // line 91
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                  </select>
                  ";
                // line 93
                if ((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 94
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["error_custom_field"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 96
                echo "                </div>
              </div>
            ";
            }
            // line 99
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                // line 100
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <div>
                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "                      <div class=\"form-check\">";
                    if (((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["register_custom_field"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["register_custom_field"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                        // line 106
                        echo "                          <label><input type=\"radio\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\" checked=\"checked\"/>
                            ";
                        // line 107
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</label>
                        ";
                    } else {
                        // line 109
                        echo "                          <label><input type=\"radio\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</label>
                        ";
                    }
                    // line 112
                    echo "                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                  </div>
                  ";
                // line 115
                if ((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 116
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 118
                echo "                </div>
              </div>
            ";
            }
            // line 121
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                // line 122
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <div> ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 126
                    echo "                      <div class=\"form-check\">";
                    if (((($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["register_custom_field"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()), (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["register_custom_field"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                        // line 127
                        echo "                          <label><input type=\"checkbox\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\" checked=\"checked\"/>
                            ";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</label>
                        ";
                    } else {
                        // line 130
                        echo "                          <label><input type=\"checkbox\" name=\"custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                        echo "</label>
                        ";
                    }
                    // line 132
                    echo "</div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "</div>
                  ";
                // line 134
                if ((($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 135
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["error_custom_field"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 137
                echo "                </div>
              </div>
            ";
            }
            // line 140
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                // line 141
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ((($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["register_custom_field"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                  ";
                // line 145
                if ((($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["error_custom_field"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 146
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 148
                echo "                </div>
              </div>
            ";
            }
            // line 151
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                // line 152
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ((($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["register_custom_field"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                }
                echo "</textarea>
                  ";
                // line 156
                if ((($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 157
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["error_custom_field"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 159
                echo "                </div>
              </div>
            ";
            }
            // line 162
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                // line 163
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-custom-field";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ((($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["register_custom_field"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                  ";
                // line 168
                if ((($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["error_custom_field"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 169
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["error_custom_field"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 171
                echo "                </div>
              </div>
            ";
            }
            // line 174
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                // line 175
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ((($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["register_custom_field"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo (($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["register_custom_field"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                // line 184
                if ((($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["error_custom_field"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 185
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 187
                echo "                </div>
              </div>
            ";
            }
            // line 190
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                // line 191
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ((($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo (($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["register_custom_field"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                // line 200
                if ((($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 201
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["error_custom_field"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 203
                echo "                </div>
              </div>
            ";
            }
            // line 206
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                // line 207
                echo "              <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                echo "\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ((($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = ($context["register_custom_field"] ?? null)) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    echo (($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                // line 216
                if ((($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                    // line 217
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47) || $__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 instanceof ArrayAccess ? ($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 219
                echo "                </div>
              </div>
            ";
            }
            // line 222
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 225
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 227
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 229
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              ";
        // line 230
        if (($context["error_password"] ?? null)) {
            // line 231
            echo "                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 233
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 236
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 238
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
              ";
        // line 239
        if (($context["error_confirm"] ?? null)) {
            // line 240
            echo "                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 242
        echo "            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 246
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 248
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 249
        if (($context["newsletter"] ?? null)) {
            // line 250
            echo "                <div class=\"form-check form-check-inline\">
                  <label><input type=\"radio\" name=\"newsletter\" value=\"1\" class=\"form-check-input\" checked=\"checked\"/>
                    ";
            // line 252
            echo ($context["text_yes"] ?? null);
            echo "</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <label><input type=\"radio\" name=\"newsletter\" value=\"0\" class=\"form-check-input\"/>
                    ";
            // line 256
            echo ($context["text_no"] ?? null);
            echo "</label>
                </div>
              ";
        } else {
            // line 259
            echo "                <div class=\"form-check form-check-inline\">
                  <label><input type=\"radio\" name=\"newsletter\" value=\"1\" class=\"form-check-input\"/>
                    ";
            // line 261
            echo ($context["text_yes"] ?? null);
            echo "</label>
                </div>
                <div class=\"form-check form-check-inline\">
                  <label><input type=\"radio\" name=\"newsletter\" value=\"0\" class=\"form-check-input\" checked=\"checked\"/>
                    ";
            // line 265
            echo ($context["text_no"] ?? null);
            echo "</label>
                </div>
              ";
        }
        // line 268
        echo "            </div>
          </div>
        </fieldset>
        ";
        // line 271
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 272
        if (($context["text_agree"] ?? null)) {
            // line 273
            echo "          <div class=\"buttons\">
            <div class=\"float-right\">";
            // line 274
            echo ($context["text_agree"] ?? null);
            echo "
              ";
            // line 275
            if (($context["agree"] ?? null)) {
                // line 276
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
              ";
            } else {
                // line 278
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            }
            // line 280
            echo "              &nbsp;
              <input type=\"submit\" value=\"";
            // line 281
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        } else {
            // line 285
            echo "          <div class=\"buttons\">
            <div class=\"float-right\">
              <input type=\"submit\" value=\"";
            // line 287
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        }
        // line 291
        echo "      </form>
      ";
        // line 292
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 293
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
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
        // line 397
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 403
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 409
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
";
        // line 413
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 413,  1064 => 409,  1055 => 403,  1046 => 397,  939 => 293,  935 => 292,  932 => 291,  925 => 287,  921 => 285,  914 => 281,  911 => 280,  907 => 278,  903 => 276,  901 => 275,  897 => 274,  894 => 273,  892 => 272,  888 => 271,  883 => 268,  877 => 265,  870 => 261,  866 => 259,  860 => 256,  853 => 252,  849 => 250,  847 => 249,  843 => 248,  838 => 246,  832 => 242,  826 => 240,  824 => 239,  818 => 238,  813 => 236,  808 => 233,  802 => 231,  800 => 230,  794 => 229,  789 => 227,  784 => 225,  780 => 223,  774 => 222,  769 => 219,  763 => 217,  761 => 216,  741 => 211,  733 => 208,  726 => 207,  723 => 206,  718 => 203,  712 => 201,  710 => 200,  690 => 195,  682 => 192,  675 => 191,  672 => 190,  667 => 187,  661 => 185,  659 => 184,  639 => 179,  631 => 176,  624 => 175,  621 => 174,  616 => 171,  610 => 169,  608 => 168,  596 => 167,  588 => 166,  583 => 164,  576 => 163,  573 => 162,  568 => 159,  562 => 157,  560 => 156,  544 => 155,  537 => 153,  530 => 152,  527 => 151,  522 => 148,  516 => 146,  514 => 145,  498 => 144,  491 => 142,  484 => 141,  481 => 140,  476 => 137,  470 => 135,  468 => 134,  465 => 133,  458 => 132,  453 => 131,  444 => 130,  439 => 128,  430 => 127,  427 => 126,  423 => 125,  418 => 123,  411 => 122,  408 => 121,  403 => 118,  397 => 116,  395 => 115,  392 => 114,  385 => 112,  380 => 110,  371 => 109,  366 => 107,  357 => 106,  354 => 105,  350 => 104,  344 => 101,  337 => 100,  334 => 99,  329 => 96,  323 => 94,  321 => 93,  318 => 92,  312 => 91,  304 => 89,  296 => 87,  293 => 86,  289 => 85,  285 => 84,  277 => 83,  270 => 81,  263 => 80,  260 => 79,  256 => 78,  252 => 76,  246 => 74,  244 => 73,  238 => 72,  233 => 70,  228 => 67,  222 => 65,  220 => 64,  214 => 63,  209 => 61,  204 => 58,  198 => 56,  196 => 55,  190 => 54,  185 => 52,  180 => 49,  174 => 47,  172 => 46,  166 => 45,  161 => 43,  151 => 40,  145 => 37,  141 => 36,  138 => 35,  132 => 32,  128 => 31,  125 => 30,  122 => 29,  118 => 28,  114 => 27,  106 => 26,  102 => 25,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/register.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/account/register.twig");
    }
}
