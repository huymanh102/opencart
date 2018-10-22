<?php

/* default/template/affiliate/register.twig */
class __TwigTemplate_6e9a3a88222bdac8ab2ed011aebb5902748c3790af00b98ed5f8fdf421d75acf extends Twig_Template
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
<div id=\"affiliate-register\" class=\"container\">
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
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <p>";
        // line 22
        echo ($context["text_signup"] ?? null);
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
          <div class=\"form-group required\" style=\"display: ";
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
              <input type=\"text\" name=\"email\" value=\"";
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
              <input type=\"text\" name=\"telephone\" value=\"";
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
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "account")) {
                // line 80
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                    // line 81
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 85
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 87
                        echo "                        ";
                        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["register_custom_field"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 88
                            echo "                          <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                        ";
                        } else {
                            // line 90
                            echo "                          <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                        ";
                        }
                        // line 92
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "                    </select>
                    ";
                    // line 94
                    if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_custom_field"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 95
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 97
                    echo "                  </div>
                </div>
              ";
                }
                // line 100
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                    // line 101
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 106
                        echo "                        <div class=\"form-check\">
                          ";
                        // line 107
                        if (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["register_custom_field"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["register_custom_field"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 108
                            echo "                            <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                              ";
                            // line 109
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        } else {
                            // line 111
                            echo "                            <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                              ";
                            // line 112
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        }
                        // line 114
                        echo "                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "                    </div>
                    ";
                    // line 117
                    if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["error_custom_field"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 118
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 120
                    echo "                  </div>
                </div>
              ";
                }
                // line 123
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                    // line 124
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                    // line 128
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 129
                        echo "                        <div class=\"form-check\">
                          ";
                        // line 130
                        if (((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()), (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["register_custom_field"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 131
                            echo "                            <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                              ";
                            // line 132
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        } else {
                            // line 134
                            echo "                            <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                              ";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                          ";
                        }
                        // line 137
                        echo "                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "                    </div>
                    ";
                    // line 140
                    if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["error_custom_field"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 141
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 143
                    echo "                  </div>
                </div>
              ";
                }
                // line 146
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                    // line 147
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["register_custom_field"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                    ";
                    // line 151
                    if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["error_custom_field"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 152
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["error_custom_field"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 154
                    echo "                  </div>
                </div>
              ";
                }
                // line 157
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                    // line 158
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["register_custom_field"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "</textarea>
                    ";
                    // line 162
                    if ((($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 163
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 165
                    echo "                  </div>
                </div>
              ";
                }
                // line 168
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                    // line 169
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo "  ";
                        echo (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["register_custom_field"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo " ";
                    }
                    echo "\"/>
                    ";
                    // line 174
                    if ((($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 175
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["error_custom_field"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 177
                    echo "                  </div>
                </div>
              ";
                }
                // line 180
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                    // line 181
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["register_custom_field"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["register_custom_field"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 190
                    if ((($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["error_custom_field"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 191
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["error_custom_field"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 193
                    echo "                  </div>
                </div>
              ";
                }
                // line 196
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                    // line 197
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 206
                    if ((($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["error_custom_field"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 207
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 209
                    echo "                  </div>
                </div>
              ";
                }
                // line 212
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                    // line 213
                    echo "                <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group row custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["register_custom_field"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = ($context["register_custom_field"] ?? null)) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 222
                    if ((($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 223
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 225
                    echo "                  </div>
                </div>
              ";
                }
                // line 228
                echo "            ";
            }
            // line 229
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "        </fieldset>
        <fieldset id=\"affiliate\">
          <legend>";
        // line 232
        echo ($context["text_your_affiliate"] ?? null);
        echo "</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-company\">";
        // line 234
        echo ($context["entry_company"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 236
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-website\">";
        // line 241
        echo ($context["entry_website"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"website\" value=\"";
        // line 243
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-tax\">";
        // line 247
        echo ($context["entry_tax"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"tax\" value=\"";
        // line 249
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 253
        echo ($context["entry_payment"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label>
                  ";
        // line 257
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 258
            echo "                    <input type=\"radio\" name=\"payment\" value=\"cheque\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 260
            echo "                    <input type=\"radio\" name=\"payment\" value=\"cheque\" class=\"form-check-input\"/>
                  ";
        }
        // line 262
        echo "                  ";
        echo ($context["text_cheque"] ?? null);
        echo "
                </label>
              </div>
              <div class=\"form-check\">
                <label>
                  ";
        // line 267
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 268
            echo "                    <input type=\"radio\" name=\"payment\" value=\"paypal\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 270
            echo "                    <input type=\"radio\" name=\"payment\" value=\"paypal\" class=\"form-check-input\"/>
                  ";
        }
        // line 272
        echo "                  ";
        echo ($context["text_paypal"] ?? null);
        echo "
                </label>
              </div>
              <div class=\"form-check\">
                <label>
                  ";
        // line 277
        if ((($context["payment"] ?? null) == "bank")) {
            // line 278
            echo "                    <input type=\"radio\" name=\"payment\" value=\"bank\" class=\"form-check-input\" checked=\"checked\"/>
                  ";
        } else {
            // line 280
            echo "                    <input type=\"radio\" name=\"payment\" value=\"bank\" class=\"form-check-input\"/>
                  ";
        }
        // line 282
        echo "                  ";
        echo ($context["text_bank"] ?? null);
        echo "
                </label>
              </div>
            </div>
          </div>
          <div class=\"form-group row payment required\" id=\"payment-cheque\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-cheque\">";
        // line 288
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 290
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\"/>
              ";
        // line 291
        if (($context["error_cheque"] ?? null)) {
            // line 292
            echo "                <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
              ";
        }
        // line 294
        echo "            </div>
          </div>
          <div class=\"form-group row payment required\" id=\"payment-paypal\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-paypal\">";
        // line 297
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"paypal\" value=\"";
        // line 299
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\"/>
              ";
        // line 300
        if (($context["error_paypal"] ?? null)) {
            // line 301
            echo "                <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
              ";
        }
        // line 303
        echo "            </div>
          </div>
          <div class=\"payment\" id=\"payment-bank\">
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-name\">";
        // line 307
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_name\" value=\"";
        // line 309
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-branch-number\">";
        // line 313
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 315
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-swift-code\">";
        // line 319
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 321
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-name\">";
        // line 325
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 327
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\"/>
                ";
        // line 328
        if (($context["error_bank_account_name"] ?? null)) {
            // line 329
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                ";
        }
        // line 331
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-number\">";
        // line 334
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 336
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\"/>
                ";
        // line 337
        if (($context["error_bank_account_number"] ?? null)) {
            // line 338
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                ";
        }
        // line 340
        echo "              </div>
            </div>
            ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 343
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "affiliate")) {
                // line 344
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                    // line 345
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"custom_field[";
                    // line 348
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 349
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 350
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 351
                        echo "                          ";
                        if (((($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 = ($context["register_custom_field"] ?? null)) && is_array($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47) || $__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 instanceof ArrayAccess ? ($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 = ($context["register_custom_field"] ?? null)) && is_array($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63) || $__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 instanceof ArrayAccess ? ($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 352
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                          ";
                        } else {
                            // line 354
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                          ";
                        }
                        // line 356
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 357
                    echo "                      </select>
                      ";
                    // line 358
                    if ((($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c = ($context["error_custom_field"] ?? null)) && is_array($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c) || $__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c instanceof ArrayAccess ? ($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 359
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8) || $__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 instanceof ArrayAccess ? ($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 361
                    echo "                    </div>
                  </div>
                ";
                }
                // line 364
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                    // line 365
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\">";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <div>
                        ";
                    // line 369
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 370
                        echo "                          <div class=\"form-check\"> ";
                        if (((($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9) || $__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 instanceof ArrayAccess ? ($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 = ($context["register_custom_field"] ?? null)) && is_array($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7) || $__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 instanceof ArrayAccess ? ($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 371
                            echo "                              <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                                ";
                            // line 372
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                            ";
                        } else {
                            // line 374
                            echo "                              <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 375
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                            ";
                        }
                        // line 377
                        echo "                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    echo "                      </div>
                      ";
                    // line 380
                    if ((($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6) || $__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 instanceof ArrayAccess ? ($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 381
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca = ($context["error_custom_field"] ?? null)) && is_array($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca) || $__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca instanceof ArrayAccess ? ($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 383
                    echo "                    </div>
                  </div>
                ";
                }
                // line 386
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                    // line 387
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\">";
                    // line 388
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <div>
                        ";
                    // line 391
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 392
                        echo "                          <div class=\"form-check\">
                            ";
                        // line 393
                        if (((($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b = ($context["register_custom_field"] ?? null)) && is_array($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b) || $__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b instanceof ArrayAccess ? ($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 = ($context["register_custom_field"] ?? null)) && is_array($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642) || $__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 instanceof ArrayAccess ? ($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 394
                            echo "                              <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>
                                ";
                            // line 395
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                            ";
                        } else {
                            // line 397
                            echo "                              <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                ";
                            // line 398
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                            ";
                        }
                        // line 400
                        echo "                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 402
                    echo "                      </div>
                      ";
                    // line 403
                    if ((($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 = ($context["error_custom_field"] ?? null)) && is_array($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333) || $__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 instanceof ArrayAccess ? ($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 404
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 = ($context["error_custom_field"] ?? null)) && is_array($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923) || $__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 instanceof ArrayAccess ? ($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 406
                    echo "                    </div>
                  </div>
                ";
                }
                // line 409
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                    // line 410
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 411
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 413
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e = ($context["register_custom_field"] ?? null)) && is_array($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e) || $__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e instanceof ArrayAccess ? ($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646) || $__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 instanceof ArrayAccess ? ($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                      ";
                    // line 414
                    if ((($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3) || $__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 instanceof ArrayAccess ? ($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 415
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 = ($context["error_custom_field"] ?? null)) && is_array($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427) || $__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 instanceof ArrayAccess ? ($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 417
                    echo "                    </div>
                  </div>
                ";
                }
                // line 420
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                    // line 421
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 422
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"custom_field[";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ((($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f) || $__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f instanceof ArrayAccess ? ($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 = ($context["register_custom_field"] ?? null)) && is_array($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79) || $__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 instanceof ArrayAccess ? ($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array());
                    }
                    echo "</textarea>
                      ";
                    // line 425
                    if ((($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 = ($context["error_custom_field"] ?? null)) && is_array($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48) || $__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 instanceof ArrayAccess ? ($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 426
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 = ($context["error_custom_field"] ?? null)) && is_array($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497) || $__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 instanceof ArrayAccess ? ($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 428
                    echo "                    </div>
                  </div>
                ";
                }
                // line 431
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                    // line 432
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\">";
                    // line 433
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <button type=\"button\" id=\"button-custom-field";
                    // line 435
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                      <input type=\"hidden\" name=\"custom_field[";
                    // line 436
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 = ($context["register_custom_field"] ?? null)) && is_array($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776) || $__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 instanceof ArrayAccess ? ($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo "  ";
                        echo (($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee = ($context["register_custom_field"] ?? null)) && is_array($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee) || $__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee instanceof ArrayAccess ? ($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo " ";
                    }
                    echo "\"/>
                      ";
                    // line 437
                    if ((($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 = ($context["error_custom_field"] ?? null)) && is_array($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096) || $__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 instanceof ArrayAccess ? ($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 438
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9) || $__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 instanceof ArrayAccess ? ($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 440
                    echo "                    </div>
                  </div>
                ";
                }
                // line 443
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                    // line 444
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 445
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 448
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 = ($context["register_custom_field"] ?? null)) && is_array($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92) || $__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 instanceof ArrayAccess ? ($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536) || $__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 instanceof ArrayAccess ? ($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 453
                    if ((($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a) || $__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a instanceof ArrayAccess ? ($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 454
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8) || $__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 instanceof ArrayAccess ? ($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 456
                    echo "                    </div>
                  </div>
                ";
                }
                // line 459
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                    // line 460
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 461
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group time\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 464
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc = ($context["register_custom_field"] ?? null)) && is_array($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc) || $__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc instanceof ArrayAccess ? ($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb = ($context["register_custom_field"] ?? null)) && is_array($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb) || $__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb instanceof ArrayAccess ? ($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 469
                    if ((($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 = ($context["error_custom_field"] ?? null)) && is_array($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74) || $__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 instanceof ArrayAccess ? ($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 470
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee = ($context["error_custom_field"] ?? null)) && is_array($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee) || $__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee instanceof ArrayAccess ? ($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 472
                    echo "                    </div>
                  </div>
                ";
                }
                // line 475
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                    // line 476
                    echo "                  <div id=\"custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 477
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 480
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array());
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ((($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d = ($context["register_custom_field"] ?? null)) && is_array($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d) || $__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d instanceof ArrayAccess ? ($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        echo (($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd) || $__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd instanceof ArrayAccess ? ($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
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
                    // line 485
                    if ((($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4) || $__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 instanceof ArrayAccess ? ($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 486
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc = ($context["error_custom_field"] ?? null)) && is_array($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc) || $__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc instanceof ArrayAccess ? ($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 488
                    echo "                    </div>
                  </div>
                ";
                }
                // line 491
                echo "              ";
            }
            // line 492
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 496
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 498
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 500
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              ";
        // line 501
        if (($context["error_password"] ?? null)) {
            // line 502
            echo "                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 504
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 507
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 509
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
              ";
        // line 510
        if (($context["error_confirm"] ?? null)) {
            // line 511
            echo "                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 513
        echo "            </div>
          </div>
        </fieldset>
        ";
        // line 516
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 517
        if (($context["text_agree"] ?? null)) {
            // line 518
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-right\">";
            // line 519
            echo ($context["text_agree"] ?? null);
            echo "
              ";
            // line 520
            if (($context["agree"] ?? null)) {
                // line 521
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
              ";
            } else {
                // line 523
                echo "                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            }
            // line 525
            echo "              &nbsp;
              <input type=\"submit\" value=\"";
            // line 526
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        } else {
            // line 530
            echo "          <div class=\"buttons clearfix\">
            <div class=\"float-right\">
              <input type=\"submit\" value=\"";
            // line 532
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        ";
        }
        // line 536
        echo "      </form>
      ";
        // line 537
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 539
        echo ($context["column_right"] ?? null);
        echo "
  </div>
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

\$('#affiliate .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:first').before(this);
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
        // line 662
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 668
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 674
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function() {
\t\$('.payment').hide();

\t\$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
";
        // line 687
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/affiliate/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1851 => 687,  1835 => 674,  1826 => 668,  1817 => 662,  1691 => 539,  1686 => 537,  1683 => 536,  1676 => 532,  1672 => 530,  1665 => 526,  1662 => 525,  1658 => 523,  1654 => 521,  1652 => 520,  1648 => 519,  1645 => 518,  1643 => 517,  1639 => 516,  1634 => 513,  1628 => 511,  1626 => 510,  1620 => 509,  1615 => 507,  1610 => 504,  1604 => 502,  1602 => 501,  1596 => 500,  1591 => 498,  1586 => 496,  1581 => 493,  1575 => 492,  1572 => 491,  1567 => 488,  1561 => 486,  1559 => 485,  1539 => 480,  1531 => 477,  1524 => 476,  1521 => 475,  1516 => 472,  1510 => 470,  1508 => 469,  1488 => 464,  1480 => 461,  1473 => 460,  1470 => 459,  1465 => 456,  1459 => 454,  1457 => 453,  1437 => 448,  1429 => 445,  1422 => 444,  1419 => 443,  1414 => 440,  1408 => 438,  1406 => 437,  1394 => 436,  1386 => 435,  1381 => 433,  1374 => 432,  1371 => 431,  1366 => 428,  1360 => 426,  1358 => 425,  1342 => 424,  1335 => 422,  1328 => 421,  1325 => 420,  1320 => 417,  1314 => 415,  1312 => 414,  1296 => 413,  1289 => 411,  1282 => 410,  1279 => 409,  1274 => 406,  1268 => 404,  1266 => 403,  1263 => 402,  1256 => 400,  1251 => 398,  1242 => 397,  1237 => 395,  1228 => 394,  1226 => 393,  1223 => 392,  1219 => 391,  1213 => 388,  1206 => 387,  1203 => 386,  1198 => 383,  1192 => 381,  1190 => 380,  1187 => 379,  1180 => 377,  1175 => 375,  1166 => 374,  1161 => 372,  1152 => 371,  1149 => 370,  1145 => 369,  1139 => 366,  1132 => 365,  1129 => 364,  1124 => 361,  1118 => 359,  1116 => 358,  1113 => 357,  1107 => 356,  1099 => 354,  1091 => 352,  1088 => 351,  1084 => 350,  1080 => 349,  1072 => 348,  1065 => 346,  1058 => 345,  1055 => 344,  1052 => 343,  1048 => 342,  1044 => 340,  1038 => 338,  1036 => 337,  1030 => 336,  1025 => 334,  1020 => 331,  1014 => 329,  1012 => 328,  1006 => 327,  1001 => 325,  992 => 321,  987 => 319,  978 => 315,  973 => 313,  964 => 309,  959 => 307,  953 => 303,  947 => 301,  945 => 300,  939 => 299,  934 => 297,  929 => 294,  923 => 292,  921 => 291,  915 => 290,  910 => 288,  900 => 282,  896 => 280,  892 => 278,  890 => 277,  881 => 272,  877 => 270,  873 => 268,  871 => 267,  862 => 262,  858 => 260,  854 => 258,  852 => 257,  845 => 253,  836 => 249,  831 => 247,  822 => 243,  817 => 241,  807 => 236,  802 => 234,  797 => 232,  793 => 230,  787 => 229,  784 => 228,  779 => 225,  773 => 223,  771 => 222,  751 => 217,  743 => 214,  736 => 213,  733 => 212,  728 => 209,  722 => 207,  720 => 206,  700 => 201,  692 => 198,  685 => 197,  682 => 196,  677 => 193,  671 => 191,  669 => 190,  649 => 185,  641 => 182,  634 => 181,  631 => 180,  626 => 177,  620 => 175,  618 => 174,  606 => 173,  598 => 172,  593 => 170,  586 => 169,  583 => 168,  578 => 165,  572 => 163,  570 => 162,  554 => 161,  547 => 159,  540 => 158,  537 => 157,  532 => 154,  526 => 152,  524 => 151,  508 => 150,  501 => 148,  494 => 147,  491 => 146,  486 => 143,  480 => 141,  478 => 140,  475 => 139,  468 => 137,  463 => 135,  454 => 134,  449 => 132,  440 => 131,  438 => 130,  435 => 129,  431 => 128,  425 => 125,  418 => 124,  415 => 123,  410 => 120,  404 => 118,  402 => 117,  399 => 116,  392 => 114,  387 => 112,  378 => 111,  373 => 109,  364 => 108,  362 => 107,  359 => 106,  355 => 105,  349 => 102,  342 => 101,  339 => 100,  334 => 97,  328 => 95,  326 => 94,  323 => 93,  317 => 92,  309 => 90,  301 => 88,  298 => 87,  294 => 86,  290 => 85,  282 => 84,  275 => 82,  268 => 81,  265 => 80,  262 => 79,  258 => 78,  254 => 76,  248 => 74,  246 => 73,  240 => 72,  235 => 70,  230 => 67,  224 => 65,  222 => 64,  216 => 63,  211 => 61,  206 => 58,  200 => 56,  198 => 55,  192 => 54,  187 => 52,  182 => 49,  176 => 47,  174 => 46,  168 => 45,  163 => 43,  153 => 40,  147 => 37,  143 => 36,  140 => 35,  134 => 32,  130 => 31,  127 => 30,  124 => 29,  120 => 28,  116 => 27,  108 => 26,  104 => 25,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/affiliate/register.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/affiliate/register.twig");
    }
}
