<?php

/* customer/customer_form.twig */
class __TwigTemplate_eff0e8aec5263bf4459d79d570c37d4369a087b87e808a843293f9d918537b56 extends Twig_Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 27
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-address\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_address"] ?? null);
        echo "</a></li>
            ";
        // line 29
        if (($context["customer_id"] ?? null)) {
            // line 30
            echo "              <li class=\"nav-item\"><a href=\"#tab-history\" data-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-transaction\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 31
            echo ($context["tab_transaction"] ?? null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-reward\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 32
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-ip\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 33
            echo ($context["tab_ip"] ?? null);
            echo "</a></li>
            ";
        }
        // line 35
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <fieldset>
                <legend>";
        // line 39
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 41
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 45
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array()) == ($context["customer_group_id"] ?? null))) {
                // line 46
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 48
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", array());
                echo "</option>
                        ";
            }
            // line 50
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 55
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 57
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                    ";
        // line 58
        if (($context["error_firstname"] ?? null)) {
            // line 59
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                    ";
        }
        // line 60
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 63
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 65
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                    ";
        // line 66
        if (($context["error_lastname"] ?? null)) {
            // line 67
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                    ";
        }
        // line 68
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 71
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 73
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                    ";
        // line 74
        if (($context["error_email"] ?? null)) {
            // line 75
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                    ";
        }
        // line 76
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 79
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 81
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                    ";
        // line 82
        if (($context["error_telephone"] ?? null)) {
            // line 83
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                    ";
        }
        // line 84
        echo "</div>
                </div>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 87
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "account")) {
                // line 88
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                    // line 89
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                            <option value=\"\">";
                    // line 93
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                            ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 95
                        echo "                              ";
                        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["account_custom_field"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 96
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        } else {
                            // line 98
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        }
                        // line 100
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                          </select>
                          ";
                    // line 102
                    if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_custom_field"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 103
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 104
                    echo "</div>
                      </div>
                    ";
                }
                // line 107
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                    // line 108
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div>
                            ";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 113
                        echo "                              <label class=\"form-check\">
                                ";
                        // line 114
                        if (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["account_custom_field"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["account_custom_field"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 115
                            echo "                                  <input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                  ";
                            // line 116
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "
                                ";
                        } else {
                            // line 118
                            echo "                                  <input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/>
                                  ";
                            // line 119
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "
                                ";
                        }
                        // line 121
                        echo "                              </label>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                          </div>
                          ";
                    // line 124
                    if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["error_custom_field"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 125
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 126
                    echo "</div>
                      </div>
                    ";
                }
                // line 129
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                    // line 130
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div>
                            ";
                    // line 134
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 135
                        echo "                              <label class=\"form-check\">
                              ";
                        // line 136
                        if (((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()), (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["account_custom_field"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                            // line 137
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" class=\"form-check-input\"/> ";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "</label>
                              ";
                        } else {
                            // line 139
                            echo "                                <input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" class=\"form-check-input\"/> ";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                            echo "
                              ";
                        }
                        // line 141
                        echo "                              </label>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                          </div>
                          ";
                    // line 144
                    if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["error_custom_field"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 145
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 146
                    echo "</div>
                      </div>
                    ";
                }
                // line 149
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                    // line 150
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["account_custom_field"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                          ";
                    // line 154
                    if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["error_custom_field"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 155
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["error_custom_field"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 156
                    echo "</div>
                      </div>
                    ";
                }
                // line 159
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                    // line 160
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["account_custom_field"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                    echo "</textarea>
                          ";
                    // line 164
                    if ((($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 165
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["error_custom_field"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 166
                    echo "</div>
                      </div>
                    ";
                }
                // line 169
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                    // line 170
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-custom-field";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                          <input type=\"hidden\" name=\"custom_field[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (((($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["account_custom_field"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\"/>
                          ";
                    // line 175
                    if ((($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 176
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["error_custom_field"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 177
                    echo "</div>
                      </div>
                    ";
                }
                // line 180
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                    // line 181
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
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
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["account_custom_field"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["account_custom_field"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                          ";
                    // line 190
                    if ((($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["error_custom_field"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 191
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["error_custom_field"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 192
                    echo "</div>
                      </div>
                    ";
                }
                // line 195
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                    // line 196
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (((($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = ($context["account_custom_field"] ?? null)) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                          ";
                    // line 205
                    if ((($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["error_custom_field"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 206
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 207
                    echo "</div>
                      </div>
                    ";
                }
                // line 210
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                    // line 211
                    echo "                      <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array());
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (((($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["account_custom_field"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                          ";
                    // line 220
                    if ((($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                        // line 221
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 222
                    echo "</div>
                      </div>
                    ";
                }
                // line 225
                echo "                  ";
            }
            // line 226
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 229
        echo ($context["text_password"] ?? null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 231
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 233
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 234
        if (($context["error_password"] ?? null)) {
            // line 235
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                    ";
        }
        // line 236
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 239
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 241
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\"/>
                    ";
        // line 242
        if (($context["error_confirm"] ?? null)) {
            // line 243
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                    ";
        }
        // line 244
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 248
        echo ($context["text_other"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 250
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 253
        if (($context["newsletter"] ?? null)) {
            // line 254
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"newsletter\" value=\"0\"/> ";
            // line 255
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 257
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"newsletter\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/> ";
            // line 258
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 260
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 264
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 267
        if (($context["status"] ?? null)) {
            // line 268
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"status\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"status\" value=\"0\"/> ";
            // line 269
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 271
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"status\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"status\" value=\"0\" checked=\"checked\"/> ";
            // line 272
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 274
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 278
        echo ($context["entry_safe"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 281
        if (($context["safe"] ?? null)) {
            // line 282
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"safe\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"safe\" value=\"0\"/> ";
            // line 283
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 285
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"safe\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"safe\" value=\"0\" checked=\"checked\"/> ";
            // line 286
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 288
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 289
        echo ($context["help_safe"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-address\">
              ";
        // line 295
        $context["address_row"] = 0;
        // line 296
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 297
            echo "                <fieldset id=\"address-row";
            echo ($context["address_row"] ?? null);
            echo "\">
                  <legend>";
            // line 298
            echo ($context["text_address"] ?? null);
            echo " ";
            echo (($context["address_row"] ?? null) + 1);
            echo " <button type=\"button\" onclick=\"\$('#address-row";
            echo ($context["address_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger btn-sm float-right\"><i class=\"fas fa-minus-circle\"></i></button></legend>
                  <input type=\"hidden\" name=\"address[";
            // line 299
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", array());
            echo "\"/>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-firstname";
            // line 301
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 303
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", array());
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-firstname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                      ";
            // line 304
            if (twig_get_attribute($this->env, $this->source, (($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 = ($context["error_address"] ?? null)) && is_array($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47) || $__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 instanceof ArrayAccess ? ($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47[($context["address_row"] ?? null)] ?? null) : null), "firstname", array())) {
                // line 305
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 = ($context["error_address"] ?? null)) && is_array($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63) || $__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 instanceof ArrayAccess ? ($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63[($context["address_row"] ?? null)] ?? null) : null), "firstname", array());
                echo "</div>
                      ";
            }
            // line 306
            echo "</div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-lastname";
            // line 309
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 311
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", array());
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-lastname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                      ";
            // line 312
            if (twig_get_attribute($this->env, $this->source, (($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c = ($context["error_address"] ?? null)) && is_array($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c) || $__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c instanceof ArrayAccess ? ($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c[($context["address_row"] ?? null)] ?? null) : null), "lastname", array())) {
                // line 313
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 = ($context["error_address"] ?? null)) && is_array($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8) || $__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 instanceof ArrayAccess ? ($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8[($context["address_row"] ?? null)] ?? null) : null), "lastname", array());
                echo "</div>
                      ";
            }
            // line 314
            echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-company";
            // line 317
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 319
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", array());
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-company";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-address-1";
            // line 323
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 325
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", array());
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-1";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                      ";
            // line 326
            if (twig_get_attribute($this->env, $this->source, (($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 = ($context["error_address"] ?? null)) && is_array($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9) || $__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 instanceof ArrayAccess ? ($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9[($context["address_row"] ?? null)] ?? null) : null), "address_1", array())) {
                // line 327
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 = ($context["error_address"] ?? null)) && is_array($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7) || $__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 instanceof ArrayAccess ? ($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7[($context["address_row"] ?? null)] ?? null) : null), "address_1", array());
                echo "</div>
                      ";
            }
            // line 328
            echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-address-2";
            // line 331
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 333
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", array());
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-2";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-city";
            // line 337
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 339
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", array());
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-city";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                      ";
            // line 340
            if (twig_get_attribute($this->env, $this->source, (($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 = ($context["error_address"] ?? null)) && is_array($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6) || $__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 instanceof ArrayAccess ? ($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6[($context["address_row"] ?? null)] ?? null) : null), "city", array())) {
                // line 341
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca = ($context["error_address"] ?? null)) && is_array($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca) || $__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca instanceof ArrayAccess ? ($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca[($context["address_row"] ?? null)] ?? null) : null), "city", array());
                echo "</div>
                      ";
            }
            // line 342
            echo "</div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-postcode";
            // line 345
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 347
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", array());
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-postcode";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"/>
                      ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, (($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b = ($context["error_address"] ?? null)) && is_array($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b) || $__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b instanceof ArrayAccess ? ($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b[($context["address_row"] ?? null)] ?? null) : null), "postcode", array())) {
                // line 349
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 = ($context["error_address"] ?? null)) && is_array($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642) || $__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 instanceof ArrayAccess ? ($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642[($context["address_row"] ?? null)] ?? null) : null), "postcode", array());
                echo "</div>
                      ";
            }
            // line 350
            echo "</div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-country";
            // line 353
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 355
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-country";
            echo ($context["address_row"] ?? null);
            echo "\" onchange=\"country(this, '";
            echo ($context["address_row"] ?? null);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", array());
            echo "');\" class=\"form-control\">
                        <option value=\"\">";
            // line 356
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 358
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array()) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", array()))) {
                    // line 359
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 361
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                    echo "</option>
                          ";
                }
                // line 363
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "                      </select>
                      ";
            // line 365
            if (twig_get_attribute($this->env, $this->source, (($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 = ($context["error_address"] ?? null)) && is_array($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333) || $__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 instanceof ArrayAccess ? ($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333[($context["address_row"] ?? null)] ?? null) : null), "country", array())) {
                // line 366
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 = ($context["error_address"] ?? null)) && is_array($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923) || $__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 instanceof ArrayAccess ? ($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923[($context["address_row"] ?? null)] ?? null) : null), "country", array());
                echo "</div>
                      ";
            }
            // line 367
            echo "</div>
                  </div>
                  <div class=\"form-group row required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-zone";
            // line 370
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 372
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-zone";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\"> </select>
                      ";
            // line 373
            if (twig_get_attribute($this->env, $this->source, (($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e = ($context["error_address"] ?? null)) && is_array($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e) || $__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e instanceof ArrayAccess ? ($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e[($context["address_row"] ?? null)] ?? null) : null), "zone", array())) {
                // line 374
                echo "                        <div class=\"invalid-tooltip\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 = ($context["error_address"] ?? null)) && is_array($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646) || $__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 instanceof ArrayAccess ? ($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646[($context["address_row"] ?? null)] ?? null) : null), "zone", array());
                echo "</div>
                      ";
            }
            // line 375
            echo "</div>
                  </div>
                  ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 378
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "address")) {
                    // line 379
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                        // line 380
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 381
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
                        // line 383
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">
                              <option value=\"\">";
                        // line 384
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                              ";
                        // line 385
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 386
                            echo "                                ";
                            if (((($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3) || $__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 instanceof ArrayAccess ? ($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427) || $__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 instanceof ArrayAccess ? ($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                                // line 387
                                echo "                                  <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "</option>
                                ";
                            } else {
                                // line 389
                                echo "                                  <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "</option>
                                ";
                            }
                            // line 391
                            echo "                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 392
                        echo "                            </select>
                            ";
                        // line 393
                        if ((($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f = (($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 = (($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 = ($context["error_address"] ?? null)) && is_array($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48) || $__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 instanceof ArrayAccess ? ($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79) || $__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 instanceof ArrayAccess ? ($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79["custom_field"] ?? null) : null)) && is_array($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f) || $__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f instanceof ArrayAccess ? ($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 394
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 = twig_get_attribute($this->env, $this->source, (($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 = ($context["error_address"] ?? null)) && is_array($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776) || $__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 instanceof ArrayAccess ? ($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497) || $__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 instanceof ArrayAccess ? ($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 396
                        echo "                          </div>
                        </div>
                      ";
                    }
                    // line 399
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                        // line 400
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 401
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div>
                              ";
                        // line 404
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 405
                            echo "                                <label class=\"form-check\">
                                  ";
                            // line 406
                            if (((($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee) || $__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee instanceof ArrayAccess ? ($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()) == (($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096) || $__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 instanceof ArrayAccess ? ($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                                // line 407
                                echo "                                    <input type=\"radio\" name=\"address[";
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                    ";
                                // line 408
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "
                                  ";
                            } else {
                                // line 410
                                echo "                                    <input type=\"radio\" name=\"address[";
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" class=\"form-check-input\"/>
                                    ";
                                // line 411
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "
                                  ";
                            }
                            // line 413
                            echo "                                </label>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 415
                        echo "                            </div>
                            ";
                        // line 416
                        if ((($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 = twig_get_attribute($this->env, $this->source, (($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 = ($context["error_address"] ?? null)) && is_array($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92) || $__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 instanceof ArrayAccess ? ($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9) || $__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 instanceof ArrayAccess ? ($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 417
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 = twig_get_attribute($this->env, $this->source, (($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a = ($context["error_address"] ?? null)) && is_array($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a) || $__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a instanceof ArrayAccess ? ($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536) || $__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 instanceof ArrayAccess ? ($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 419
                        echo "                          </div>
                        </div>
                      ";
                    }
                    // line 422
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                        // line 423
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 424
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div>
                              ";
                        // line 427
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 428
                            echo "                                <label class=\"form-check\">
                                  ";
                            // line 429
                            if (((($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8) || $__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 instanceof ArrayAccess ? ($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array()), (($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc) || $__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc instanceof ArrayAccess ? ($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)))) {
                                // line 430
                                echo "                                    <input type=\"checkbox\" name=\"address[";
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                                    ";
                                // line 431
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "
                                  ";
                            } else {
                                // line 433
                                echo "                                    <input type=\"checkbox\" name=\"address[";
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" class=\"form-check-input\"/>
                                    ";
                                // line 434
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array());
                                echo "
                                  ";
                            }
                            // line 436
                            echo "                                </label>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 438
                        echo "                            </div>
                            ";
                        // line 439
                        if ((($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb = (($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 = (($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee = ($context["error_address"] ?? null)) && is_array($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee) || $__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee instanceof ArrayAccess ? ($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74) || $__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 instanceof ArrayAccess ? ($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74["custom_field"] ?? null) : null)) && is_array($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb) || $__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb instanceof ArrayAccess ? ($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 440
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d = twig_get_attribute($this->env, $this->source, (($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd = ($context["error_address"] ?? null)) && is_array($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd) || $__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd instanceof ArrayAccess ? ($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d) || $__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d instanceof ArrayAccess ? ($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 441
                        echo "</div>
                        </div>
                      ";
                    }
                    // line 444
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                        // line 445
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 446
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
                        // line 448
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (((($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4) || $__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 instanceof ArrayAccess ? ($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc) || $__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc instanceof ArrayAccess ? ($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                            ";
                        // line 449
                        if ((($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588 = (($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42 = (($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a = ($context["error_address"] ?? null)) && is_array($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a) || $__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a instanceof ArrayAccess ? ($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42) || $__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42 instanceof ArrayAccess ? ($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42["custom_field"] ?? null) : null)) && is_array($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588) || $__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588 instanceof ArrayAccess ? ($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 450
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954 = twig_get_attribute($this->env, $this->source, (($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905 = ($context["error_address"] ?? null)) && is_array($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905) || $__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905 instanceof ArrayAccess ? ($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954) || $__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954 instanceof ArrayAccess ? ($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 451
                        echo "</div>
                        </div>
                      ";
                    }
                    // line 454
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                        // line 455
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 456
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"address[";
                        // line 458
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306) || $__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306 instanceof ArrayAccess ? ($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf) || $__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf instanceof ArrayAccess ? ($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                        echo "</textarea>
                            ";
                        // line 459
                        if ((($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286 = (($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92 = (($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c = ($context["error_address"] ?? null)) && is_array($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c) || $__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c instanceof ArrayAccess ? ($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92) || $__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92 instanceof ArrayAccess ? ($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92["custom_field"] ?? null) : null)) && is_array($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286) || $__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286 instanceof ArrayAccess ? ($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 460
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de = twig_get_attribute($this->env, $this->source, (($__internal_47e3981d68461e01645742bd6ad091e73b0f32288ff0da04430a7cd04f8712d9 = ($context["error_address"] ?? null)) && is_array($__internal_47e3981d68461e01645742bd6ad091e73b0f32288ff0da04430a7cd04f8712d9) || $__internal_47e3981d68461e01645742bd6ad091e73b0f32288ff0da04430a7cd04f8712d9 instanceof ArrayAccess ? ($__internal_47e3981d68461e01645742bd6ad091e73b0f32288ff0da04430a7cd04f8712d9[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de) || $__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de instanceof ArrayAccess ? ($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 461
                        echo "</div>
                        </div>
                      ";
                    }
                    // line 464
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                        // line 465
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 466
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                        // line 468
                        echo ($context["address_row"] ?? null);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                            <input type=\"hidden\" name=\"address[";
                        // line 469
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (((($__internal_e947cab255c3f67e6bceb6ca009f65e6fbdba81d62e64de42db9e62feabb6024 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_e947cab255c3f67e6bceb6ca009f65e6fbdba81d62e64de42db9e62feabb6024) || $__internal_e947cab255c3f67e6bceb6ca009f65e6fbdba81d62e64de42db9e62feabb6024 instanceof ArrayAccess ? ($__internal_e947cab255c3f67e6bceb6ca009f65e6fbdba81d62e64de42db9e62feabb6024[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_c1b6ff035af0b92a5612cdf028228d1cb5cf42f729f7aff91ae23d9663b9d1dd = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_c1b6ff035af0b92a5612cdf028228d1cb5cf42f729f7aff91ae23d9663b9d1dd) || $__internal_c1b6ff035af0b92a5612cdf028228d1cb5cf42f729f7aff91ae23d9663b9d1dd instanceof ArrayAccess ? ($__internal_c1b6ff035af0b92a5612cdf028228d1cb5cf42f729f7aff91ae23d9663b9d1dd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (""));
                        echo "\"/>
                            ";
                        // line 470
                        if ((($__internal_afec35f2a4eed1b29b3a2a6943f64e27003e97334075f58ca7f36f4554a10498 = (($__internal_a7e65c643737f0bf2f602a6d4b93352d6338035578ee144e8e21c636ce68864f = (($__internal_3cdb7bf3268d55aa1cba77a3108934d751638df50fa507fcaae600ac796b01bf = ($context["error_address"] ?? null)) && is_array($__internal_3cdb7bf3268d55aa1cba77a3108934d751638df50fa507fcaae600ac796b01bf) || $__internal_3cdb7bf3268d55aa1cba77a3108934d751638df50fa507fcaae600ac796b01bf instanceof ArrayAccess ? ($__internal_3cdb7bf3268d55aa1cba77a3108934d751638df50fa507fcaae600ac796b01bf[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_a7e65c643737f0bf2f602a6d4b93352d6338035578ee144e8e21c636ce68864f) || $__internal_a7e65c643737f0bf2f602a6d4b93352d6338035578ee144e8e21c636ce68864f instanceof ArrayAccess ? ($__internal_a7e65c643737f0bf2f602a6d4b93352d6338035578ee144e8e21c636ce68864f["custom_field"] ?? null) : null)) && is_array($__internal_afec35f2a4eed1b29b3a2a6943f64e27003e97334075f58ca7f36f4554a10498) || $__internal_afec35f2a4eed1b29b3a2a6943f64e27003e97334075f58ca7f36f4554a10498 instanceof ArrayAccess ? ($__internal_afec35f2a4eed1b29b3a2a6943f64e27003e97334075f58ca7f36f4554a10498[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 471
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_1195252ab707b49892be4a5456efe22de708249fd5a3cb1d2211f96e85ddf734 = twig_get_attribute($this->env, $this->source, (($__internal_cd9b7de8618dc35567e7a4f21ee52a6091f78c72ceadf463397ac40657f15520 = ($context["error_address"] ?? null)) && is_array($__internal_cd9b7de8618dc35567e7a4f21ee52a6091f78c72ceadf463397ac40657f15520) || $__internal_cd9b7de8618dc35567e7a4f21ee52a6091f78c72ceadf463397ac40657f15520 instanceof ArrayAccess ? ($__internal_cd9b7de8618dc35567e7a4f21ee52a6091f78c72ceadf463397ac40657f15520[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_1195252ab707b49892be4a5456efe22de708249fd5a3cb1d2211f96e85ddf734) || $__internal_1195252ab707b49892be4a5456efe22de708249fd5a3cb1d2211f96e85ddf734 instanceof ArrayAccess ? ($__internal_1195252ab707b49892be4a5456efe22de708249fd5a3cb1d2211f96e85ddf734[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 473
                        echo "                          </div>
                        </div>
                      ";
                    }
                    // line 476
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                        // line 477
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 478
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"address[";
                        // line 481
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (((($__internal_056a8f706c60bddc9b0c1dde848ddb621629119a8028c60a116c44780a9e917b = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_056a8f706c60bddc9b0c1dde848ddb621629119a8028c60a116c44780a9e917b) || $__internal_056a8f706c60bddc9b0c1dde848ddb621629119a8028c60a116c44780a9e917b instanceof ArrayAccess ? ($__internal_056a8f706c60bddc9b0c1dde848ddb621629119a8028c60a116c44780a9e917b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_528570502eb29a5bd2fbc9d0a805a2fd10f05081bd85fdc2114f93e03af3860d = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_528570502eb29a5bd2fbc9d0a805a2fd10f05081bd85fdc2114f93e03af3860d) || $__internal_528570502eb29a5bd2fbc9d0a805a2fd10f05081bd85fdc2114f93e03af3860d instanceof ArrayAccess ? ($__internal_528570502eb29a5bd2fbc9d0a805a2fd10f05081bd85fdc2114f93e03af3860d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                              </div>
                            </div>
                            ";
                        // line 486
                        if ((($__internal_dda6d1075139a5c3815449b87feb71ed5ada21a37d4d03e08199d1fc263e4ac8 = (($__internal_af14c10bb92c006587fbd68ebc3c1b2111e9469fc56fafd8b8eddf97930154b1 = (($__internal_bb4560a60dfe668ebdbbad4e604af20783c44b24da95611dd900dfbc538847bb = ($context["error_address"] ?? null)) && is_array($__internal_bb4560a60dfe668ebdbbad4e604af20783c44b24da95611dd900dfbc538847bb) || $__internal_bb4560a60dfe668ebdbbad4e604af20783c44b24da95611dd900dfbc538847bb instanceof ArrayAccess ? ($__internal_bb4560a60dfe668ebdbbad4e604af20783c44b24da95611dd900dfbc538847bb[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_af14c10bb92c006587fbd68ebc3c1b2111e9469fc56fafd8b8eddf97930154b1) || $__internal_af14c10bb92c006587fbd68ebc3c1b2111e9469fc56fafd8b8eddf97930154b1 instanceof ArrayAccess ? ($__internal_af14c10bb92c006587fbd68ebc3c1b2111e9469fc56fafd8b8eddf97930154b1["custom_field"] ?? null) : null)) && is_array($__internal_dda6d1075139a5c3815449b87feb71ed5ada21a37d4d03e08199d1fc263e4ac8) || $__internal_dda6d1075139a5c3815449b87feb71ed5ada21a37d4d03e08199d1fc263e4ac8 instanceof ArrayAccess ? ($__internal_dda6d1075139a5c3815449b87feb71ed5ada21a37d4d03e08199d1fc263e4ac8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 487
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_874acd2e44391ca53af148a67e4a9bc9d992a6d0b56a4585934d04ba16142b5d = twig_get_attribute($this->env, $this->source, (($__internal_da4d136f8d4be1eae455b7748d83156be71a393736b079366dbdc991b8195df1 = ($context["error_address"] ?? null)) && is_array($__internal_da4d136f8d4be1eae455b7748d83156be71a393736b079366dbdc991b8195df1) || $__internal_da4d136f8d4be1eae455b7748d83156be71a393736b079366dbdc991b8195df1 instanceof ArrayAccess ? ($__internal_da4d136f8d4be1eae455b7748d83156be71a393736b079366dbdc991b8195df1[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_874acd2e44391ca53af148a67e4a9bc9d992a6d0b56a4585934d04ba16142b5d) || $__internal_874acd2e44391ca53af148a67e4a9bc9d992a6d0b56a4585934d04ba16142b5d instanceof ArrayAccess ? ($__internal_874acd2e44391ca53af148a67e4a9bc9d992a6d0b56a4585934d04ba16142b5d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 488
                        echo "</div>
                        </div>
                      ";
                    }
                    // line 491
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                        // line 492
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 493
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"address[";
                        // line 496
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (((($__internal_64604502ea9fc39748860630c91378926ca16cee081962866076128255817830 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_64604502ea9fc39748860630c91378926ca16cee081962866076128255817830) || $__internal_64604502ea9fc39748860630c91378926ca16cee081962866076128255817830 instanceof ArrayAccess ? ($__internal_64604502ea9fc39748860630c91378926ca16cee081962866076128255817830[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_bee684aa7d6fb51555bb3312770f3d43718fdbbf41c6a3f517df5a034b21bf2a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_bee684aa7d6fb51555bb3312770f3d43718fdbbf41c6a3f517df5a034b21bf2a) || $__internal_bee684aa7d6fb51555bb3312770f3d43718fdbbf41c6a3f517df5a034b21bf2a instanceof ArrayAccess ? ($__internal_bee684aa7d6fb51555bb3312770f3d43718fdbbf41c6a3f517df5a034b21bf2a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                              </div>
                            </div>
                            ";
                        // line 501
                        if ((($__internal_694f47d6c5ad702d9d8026bddab88f9602ecc9b918eb708781e1c537ac21f152 = (($__internal_7533e8b5683735b5357c5ba1e6d6530f742c8232d95ef89b3638a2e51f01ae79 = (($__internal_b6c33435a04da2c5091d126836a032fe21f243f4f81a4f74bd29fc27bb9f4a4d = ($context["error_address"] ?? null)) && is_array($__internal_b6c33435a04da2c5091d126836a032fe21f243f4f81a4f74bd29fc27bb9f4a4d) || $__internal_b6c33435a04da2c5091d126836a032fe21f243f4f81a4f74bd29fc27bb9f4a4d instanceof ArrayAccess ? ($__internal_b6c33435a04da2c5091d126836a032fe21f243f4f81a4f74bd29fc27bb9f4a4d[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_7533e8b5683735b5357c5ba1e6d6530f742c8232d95ef89b3638a2e51f01ae79) || $__internal_7533e8b5683735b5357c5ba1e6d6530f742c8232d95ef89b3638a2e51f01ae79 instanceof ArrayAccess ? ($__internal_7533e8b5683735b5357c5ba1e6d6530f742c8232d95ef89b3638a2e51f01ae79["custom_field"] ?? null) : null)) && is_array($__internal_694f47d6c5ad702d9d8026bddab88f9602ecc9b918eb708781e1c537ac21f152) || $__internal_694f47d6c5ad702d9d8026bddab88f9602ecc9b918eb708781e1c537ac21f152 instanceof ArrayAccess ? ($__internal_694f47d6c5ad702d9d8026bddab88f9602ecc9b918eb708781e1c537ac21f152[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 502
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_b140e96307b05e9618a1e0307551e08da2c264b623e268ae518470a21d49dfaa = twig_get_attribute($this->env, $this->source, (($__internal_b8f4d8886783b7303c3f1b6fc8a246f72ba03df4652120926fbf51bea9584fe9 = ($context["error_address"] ?? null)) && is_array($__internal_b8f4d8886783b7303c3f1b6fc8a246f72ba03df4652120926fbf51bea9584fe9) || $__internal_b8f4d8886783b7303c3f1b6fc8a246f72ba03df4652120926fbf51bea9584fe9 instanceof ArrayAccess ? ($__internal_b8f4d8886783b7303c3f1b6fc8a246f72ba03df4652120926fbf51bea9584fe9[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_b140e96307b05e9618a1e0307551e08da2c264b623e268ae518470a21d49dfaa) || $__internal_b140e96307b05e9618a1e0307551e08da2c264b623e268ae518470a21d49dfaa instanceof ArrayAccess ? ($__internal_b140e96307b05e9618a1e0307551e08da2c264b623e268ae518470a21d49dfaa[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 504
                        echo "                          </div>
                        </div>
                      ";
                    }
                    // line 507
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                        // line 508
                        echo "                        <div class=\"form-group row custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 509
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"address[";
                        // line 512
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (((($__internal_db742dc509f0f77c4257c141da35ec7ccb86e468f50a2c045d3b5ed320800b9a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_db742dc509f0f77c4257c141da35ec7ccb86e468f50a2c045d3b5ed320800b9a) || $__internal_db742dc509f0f77c4257c141da35ec7ccb86e468f50a2c045d3b5ed320800b9a instanceof ArrayAccess ? ($__internal_db742dc509f0f77c4257c141da35ec7ccb86e468f50a2c045d3b5ed320800b9a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) ? ((($__internal_b1382c8ecdfa15dde89bf1fe0efafe84417ad229baf90cb3693b004a430833b4 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", array())) && is_array($__internal_b1382c8ecdfa15dde89bf1fe0efafe84417ad229baf90cb3693b004a430833b4) || $__internal_b1382c8ecdfa15dde89bf1fe0efafe84417ad229baf90cb3693b004a430833b4 instanceof ArrayAccess ? ($__internal_b1382c8ecdfa15dde89bf1fe0efafe84417ad229baf90cb3693b004a430833b4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                              </div>
                            </div>
                            ";
                        // line 517
                        if ((($__internal_81fdcec8a9f761ec2383d9f3454ce36c0d9e97f974dc833ba4feccaa712dd824 = (($__internal_365e40754380f4727c71fd0bf42ce458d81dc8ce4038a0e1522737dcfe5d3cd0 = (($__internal_3d48c0e0599563a7c457843b7a4c7488097b6ebbe5662f553e2e098184f7608a = ($context["error_address"] ?? null)) && is_array($__internal_3d48c0e0599563a7c457843b7a4c7488097b6ebbe5662f553e2e098184f7608a) || $__internal_3d48c0e0599563a7c457843b7a4c7488097b6ebbe5662f553e2e098184f7608a instanceof ArrayAccess ? ($__internal_3d48c0e0599563a7c457843b7a4c7488097b6ebbe5662f553e2e098184f7608a[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_365e40754380f4727c71fd0bf42ce458d81dc8ce4038a0e1522737dcfe5d3cd0) || $__internal_365e40754380f4727c71fd0bf42ce458d81dc8ce4038a0e1522737dcfe5d3cd0 instanceof ArrayAccess ? ($__internal_365e40754380f4727c71fd0bf42ce458d81dc8ce4038a0e1522737dcfe5d3cd0["custom_field"] ?? null) : null)) && is_array($__internal_81fdcec8a9f761ec2383d9f3454ce36c0d9e97f974dc833ba4feccaa712dd824) || $__internal_81fdcec8a9f761ec2383d9f3454ce36c0d9e97f974dc833ba4feccaa712dd824 instanceof ArrayAccess ? ($__internal_81fdcec8a9f761ec2383d9f3454ce36c0d9e97f974dc833ba4feccaa712dd824[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null)) {
                            // line 518
                            echo "                              <div class=\"invalid-tooltip\">";
                            echo (($__internal_2dc5ca0fc5a8454f762598675ee8413e1839fafedb20eda41459f070d0c33f46 = twig_get_attribute($this->env, $this->source, (($__internal_37192d5ef75f2111c31d9b6ab972440868de60246e26dff2d9d9cc63e58e6f65 = ($context["error_address"] ?? null)) && is_array($__internal_37192d5ef75f2111c31d9b6ab972440868de60246e26dff2d9d9cc63e58e6f65) || $__internal_37192d5ef75f2111c31d9b6ab972440868de60246e26dff2d9d9cc63e58e6f65 instanceof ArrayAccess ? ($__internal_37192d5ef75f2111c31d9b6ab972440868de60246e26dff2d9d9cc63e58e6f65[($context["address_row"] ?? null)] ?? null) : null), "custom_field", array())) && is_array($__internal_2dc5ca0fc5a8454f762598675ee8413e1839fafedb20eda41459f070d0c33f46) || $__internal_2dc5ca0fc5a8454f762598675ee8413e1839fafedb20eda41459f070d0c33f46 instanceof ArrayAccess ? ($__internal_2dc5ca0fc5a8454f762598675ee8413e1839fafedb20eda41459f070d0c33f46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array())] ?? null) : null);
                            echo "</div>
                            ";
                        }
                        // line 519
                        echo "</div>
                        </div>
                      ";
                    }
                    // line 522
                    echo "                    ";
                }
                // line 523
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
            // line 525
            echo ($context["entry_default"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <label class=\"form-check\">
                        ";
            // line 528
            if ((($context["default"] ?? null) == ($context["address_row"] ?? null))) {
                // line 529
                echo "                          <input type=\"radio\" name=\"default\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                        ";
            } else {
                // line 531
                echo "                          <input type=\"radio\" name=\"default\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" class=\"form-check-input\"/>
                        ";
            }
            // line 533
            echo "                      </label>
                    </div>
                  </div>
                </fieldset>
                ";
            // line 537
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 538
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        echo "              <div class=\"text-right\">
                <button type=\"button\" id=\"button-address\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
        // line 540
        echo ($context["button_address_add"] ?? null);
        echo "</button>
              </div>
            </div>
            ";
        // line 543
        if (($context["customer_id"] ?? null)) {
            // line 544
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>";
            // line 546
            echo ($context["text_history"] ?? null);
            echo "</legend>
                  <div id=\"history\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 551
            echo ($context["text_history_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
            // line 553
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 555
            echo ($context["entry_comment"] ?? null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button id=\"button-history\" data-loading-text=\"";
            // line 560
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
            echo ($context["button_history_add"] ?? null);
            echo "</button>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-transaction\">
                <fieldset>
                  <legend>";
            // line 565
            echo ($context["text_transaction"] ?? null);
            echo "</legend>
                  <div id=\"transaction\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 570
            echo ($context["text_transaction_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-transaction-description\">";
            // line 572
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 574
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-amount\">";
            // line 578
            echo ($context["entry_amount"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 580
            echo ($context["entry_amount"] ?? null);
            echo "\" id=\"input-amount\" class=\"form-control\"/>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 585
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
            echo ($context["button_transaction_add"] ?? null);
            echo "</button>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-reward\">
                <fieldset>
                  <legend>";
            // line 590
            echo ($context["text_reward"] ?? null);
            echo "</legend>
                  <div id=\"reward\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 595
            echo ($context["text_reward_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-reward-description\">";
            // line 597
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 599
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-reward-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-points\">";
            // line 603
            echo ($context["entry_points"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 605
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-points\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
            // line 606
            echo ($context["help_points"] ?? null);
            echo "</small>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 611
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
            echo ($context["button_reward_add"] ?? null);
            echo "</button>
                </div>
              </div>
            ";
        }
        // line 615
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 617
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/customfield&user_token=";
        // line 630
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'customer_group_id\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
var address_row = ";
        // line 655
        echo ($context["address_row"] ?? null);
        echo ";

\$('#button-address').on('click', function(e) {
\te.preventDefault();

\thtml  = '<fieldset id=\"address-row' + address_row + '\">';
\thtml += '  <legend>";
        // line 661
        echo ($context["text_address"] ?? null);
        echo " ' + address_row + ' <button type=\"button\" onclick=\"\$(\\'#address-row' + address_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm float-right\"><i class=\"fas fa-minus-circle\"></i></button></legend></legend>';
\thtml += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-firstname' + address_row + '\">";
        // line 665
        echo ($context["entry_firstname"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 666
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-lastname' + address_row + '\">";
        // line 670
        echo ($context["entry_lastname"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 671
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-company' + address_row + '\">";
        // line 675
        echo ($context["entry_company"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 676
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-address-1' + address_row + '\">";
        // line 680
        echo ($context["entry_address_1"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 681
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-address-2' + address_row + '\">";
        // line 685
        echo ($context["entry_address_2"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 686
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-city' + address_row + '\">";
        // line 690
        echo ($context["entry_city"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 691
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-postcode' + address_row + '\">";
        // line 695
        echo ($context["entry_postcode"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 696
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-country' + address_row + '\">";
        // line 700
        echo ($context["entry_country"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
\thtml += '         <option value=\"\">";
        // line 702
        echo ($context["text_select"] ?? null);
        echo "</option>';
  ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 704
            echo "\thtml += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", array()), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo "\thtml += '      </select></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-zone' + address_row + '\">";
        // line 710
        echo ($context["entry_zone"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 711
        echo ($context["text_none"] ?? null);
        echo "</option></select></div>';
\thtml += '  </div>';

\t// Custom Fields
  ";
        // line 715
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 716
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", array()) == "address")) {
                // line 717
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "select")) {
                    // line 718
                    echo "
\thtml += '  <div class=\"form-group row custom-field custom-field";
                    // line 719
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 720
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 722
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
\thtml += '  \t\t\t<option value=\"\">";
                    // line 723
                    echo ($context["text_select"] ?? null);
                    echo "</option>';

  ";
                    // line 725
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 726
                        echo "\thtml += '  \t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                        echo "</option>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 728
                    echo "
\thtml += '  \t\t  </select>';
\thtml += '  \t\t</div>';
\thtml += '  \t  </div>';
  ";
                }
                // line 733
                echo "
  ";
                // line 734
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "radio")) {
                    // line 735
                    echo "\thtml += '  \t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 736
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <div>';

  ";
                    // line 740
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 741
                        echo "\thtml += '  \t\t\t<label class=\"form-check\"><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\" /> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array()), "js");
                        echo "</label>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 743
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 748
                echo "
  ";
                // line 749
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "checkbox")) {
                    // line 750
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 751
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div>';

  ";
                    // line 755
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 756
                        echo "\thtml += '\t\t\t<label class=\"form-check\"><input type=\"checkbox\" name=\"address[";
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" class=\"form-check-input\"/> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", array()), "js");
                        echo "</label>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 758
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 763
                echo "
  ";
                // line 764
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "text")) {
                    // line 765
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 766
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 772
                echo "
  ";
                // line 773
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "textarea")) {
                    // line 774
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 775
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 777
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 781
                echo "
  ";
                // line 782
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "file")) {
                    // line 783
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 784
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <button type=\"button\" id=\"button-custom-field' + address_row + '-";
                    // line 786
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>';
\thtml += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 787
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 791
                echo "
  ";
                // line 792
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "date")) {
                    // line 793
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 794
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 796
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 800
                echo "
  ";
                // line 801
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "time")) {
                    // line 802
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 803
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 805
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 809
                echo "
  ";
                // line 810
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", array()) == "datetime")) {
                    // line 811
                    echo "\thtml += '     <div class=\"form-group row custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '       <label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 812
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '       <div class=\"col-sm-10\">';
\thtml += '         <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 814
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div>';
\thtml += '       </div>';
\thtml += '     </div>';
  ";
                }
                // line 818
                echo "
  ";
            }
            // line 820
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 821
        echo "
\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\">";
        // line 823
        echo ($context["entry_default"] ?? null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><label class=\"form-check\"><input type=\"radio\" name=\"default\" value=\"' + address_row + '\" class=\"form-check-input\"/></label></div>';
\thtml += '  </div>';

\thtml += '</fieldset>';

\t\$(this).parent().before(html);

\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

\t\$('.date').datetimepicker({
\t\t'format': 'YYYY-MM-DD',
\t\t'locale': '";
        // line 837
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\t\$('.time').datetimepicker({
\t\t'format': 'HH:mm',
\t\t'locale': '";
        // line 843
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\t\$('.datetime').datetimepicker({
\t\t'format': 'YYYY-MM-DD HH:mm',
\t\t'locale': '";
        // line 849
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\t\$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#address-row' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}

\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#address-row' + address_row + ' .form-group:last').after(this);
\t\t}

\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#address-row' + address_row + ' .form-group:first').before(this);
\t\t}
\t});

\taddress_row++;
});

//--></script>
<script type=\"text/javascript\"><!--
function country(element, index, zone_id) {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 874
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 889
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 902
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

\$('select[name\$=\\'[country_id]\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('#history').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 922
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\$('#button-history').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 928
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 948
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\t\t\t\t\$('#tab-history textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#transaction').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#transaction').load(this.href);
});

\$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 966
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\$('#button-transaction').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 972
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-transaction').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-transaction').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 992
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\t\t\t\t\$('#tab-transaction input[name=\\'amount\\']').val('');
\t\t\t\t\$('#tab-transaction input[name=\\'description\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#reward').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#reward').load(this.href);
});

\$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1011
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\$('#button-reward').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1017
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1037
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\t\t\t\t\$('#tab-reward input[name=\\'points\\']').val('');
\t\t\t\t\$('#tab-reward input[name=\\'description\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#ip').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#ip').load(this.href);
});

\$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1055
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

\$('#content').on('click', 'button[id^=\\'button-custom-field\\']', function() {
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
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 1075
        echo ($context["user_token"] ?? null);
        echo "',
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
\t\t\t\t\t\$(element).parent().find('.invalid-tooltip').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 1113
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 1119
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 1125
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

// Sort the custom fields
";
        // line 1130
        $context["address_row"] = 1;
        // line 1131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1132
            echo "\$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo " .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1133
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1134
            echo ($context["address_row"] ?? null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1137
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1138
            echo ($context["address_row"] ?? null);
            echo " .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1141
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1142
            echo ($context["address_row"] ?? null);
            echo " .form-group:first').before(this);
\t}
});
";
            // line 1145
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1147
        echo "
\$('#tab-customer .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:first').before(this);
\t}
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
        // line 1171
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2958 => 1171,  2932 => 1147,  2926 => 1145,  2920 => 1142,  2916 => 1141,  2910 => 1138,  2906 => 1137,  2900 => 1134,  2896 => 1133,  2891 => 1132,  2887 => 1131,  2885 => 1130,  2877 => 1125,  2868 => 1119,  2859 => 1113,  2818 => 1075,  2793 => 1055,  2770 => 1037,  2745 => 1017,  2734 => 1011,  2710 => 992,  2685 => 972,  2674 => 966,  2651 => 948,  2626 => 928,  2615 => 922,  2592 => 902,  2576 => 889,  2558 => 874,  2530 => 849,  2521 => 843,  2512 => 837,  2495 => 823,  2491 => 821,  2485 => 820,  2481 => 818,  2468 => 814,  2461 => 812,  2454 => 811,  2452 => 810,  2449 => 809,  2436 => 805,  2429 => 803,  2422 => 802,  2420 => 801,  2417 => 800,  2404 => 796,  2397 => 794,  2390 => 793,  2388 => 792,  2385 => 791,  2376 => 787,  2368 => 786,  2363 => 784,  2356 => 783,  2354 => 782,  2351 => 781,  2338 => 777,  2331 => 775,  2324 => 774,  2322 => 773,  2319 => 772,  2306 => 768,  2299 => 766,  2292 => 765,  2290 => 764,  2287 => 763,  2280 => 758,  2265 => 756,  2261 => 755,  2254 => 751,  2247 => 750,  2245 => 749,  2242 => 748,  2235 => 743,  2222 => 741,  2218 => 740,  2211 => 736,  2206 => 735,  2204 => 734,  2201 => 733,  2194 => 728,  2183 => 726,  2179 => 725,  2174 => 723,  2168 => 722,  2161 => 720,  2155 => 719,  2152 => 718,  2149 => 717,  2146 => 716,  2142 => 715,  2135 => 711,  2131 => 710,  2125 => 706,  2114 => 704,  2110 => 703,  2106 => 702,  2101 => 700,  2094 => 696,  2090 => 695,  2083 => 691,  2079 => 690,  2072 => 686,  2068 => 685,  2061 => 681,  2057 => 680,  2050 => 676,  2046 => 675,  2039 => 671,  2035 => 670,  2028 => 666,  2024 => 665,  2015 => 661,  2006 => 655,  1978 => 630,  1962 => 617,  1958 => 615,  1949 => 611,  1941 => 606,  1937 => 605,  1932 => 603,  1925 => 599,  1920 => 597,  1915 => 595,  1907 => 590,  1897 => 585,  1889 => 580,  1884 => 578,  1877 => 574,  1872 => 572,  1867 => 570,  1859 => 565,  1849 => 560,  1841 => 555,  1836 => 553,  1831 => 551,  1823 => 546,  1819 => 544,  1817 => 543,  1811 => 540,  1808 => 539,  1802 => 538,  1800 => 537,  1794 => 533,  1788 => 531,  1782 => 529,  1780 => 528,  1774 => 525,  1771 => 524,  1765 => 523,  1762 => 522,  1757 => 519,  1751 => 518,  1749 => 517,  1731 => 512,  1721 => 509,  1714 => 508,  1711 => 507,  1706 => 504,  1700 => 502,  1698 => 501,  1680 => 496,  1670 => 493,  1663 => 492,  1660 => 491,  1655 => 488,  1649 => 487,  1647 => 486,  1629 => 481,  1619 => 478,  1612 => 477,  1609 => 476,  1604 => 473,  1598 => 471,  1596 => 470,  1588 => 469,  1578 => 468,  1573 => 466,  1566 => 465,  1563 => 464,  1558 => 461,  1552 => 460,  1550 => 459,  1536 => 458,  1527 => 456,  1520 => 455,  1517 => 454,  1512 => 451,  1506 => 450,  1504 => 449,  1490 => 448,  1481 => 446,  1474 => 445,  1471 => 444,  1466 => 441,  1460 => 440,  1458 => 439,  1455 => 438,  1448 => 436,  1443 => 434,  1434 => 433,  1429 => 431,  1420 => 430,  1418 => 429,  1415 => 428,  1411 => 427,  1405 => 424,  1398 => 423,  1395 => 422,  1390 => 419,  1384 => 417,  1382 => 416,  1379 => 415,  1372 => 413,  1367 => 411,  1358 => 410,  1353 => 408,  1344 => 407,  1342 => 406,  1339 => 405,  1335 => 404,  1329 => 401,  1322 => 400,  1319 => 399,  1314 => 396,  1308 => 394,  1306 => 393,  1303 => 392,  1297 => 391,  1289 => 389,  1281 => 387,  1278 => 386,  1274 => 385,  1270 => 384,  1260 => 383,  1251 => 381,  1244 => 380,  1241 => 379,  1238 => 378,  1234 => 377,  1230 => 375,  1224 => 374,  1222 => 373,  1216 => 372,  1209 => 370,  1204 => 367,  1198 => 366,  1196 => 365,  1193 => 364,  1187 => 363,  1179 => 361,  1171 => 359,  1168 => 358,  1164 => 357,  1160 => 356,  1150 => 355,  1143 => 353,  1138 => 350,  1132 => 349,  1130 => 348,  1120 => 347,  1113 => 345,  1108 => 342,  1102 => 341,  1100 => 340,  1090 => 339,  1083 => 337,  1070 => 333,  1063 => 331,  1058 => 328,  1052 => 327,  1050 => 326,  1040 => 325,  1033 => 323,  1020 => 319,  1013 => 317,  1008 => 314,  1002 => 313,  1000 => 312,  990 => 311,  983 => 309,  978 => 306,  972 => 305,  970 => 304,  960 => 303,  953 => 301,  946 => 299,  936 => 298,  931 => 297,  926 => 296,  924 => 295,  915 => 289,  912 => 288,  907 => 286,  902 => 285,  897 => 283,  892 => 282,  890 => 281,  884 => 278,  878 => 274,  873 => 272,  868 => 271,  863 => 269,  858 => 268,  856 => 267,  850 => 264,  844 => 260,  839 => 258,  834 => 257,  829 => 255,  824 => 254,  822 => 253,  816 => 250,  811 => 248,  805 => 244,  799 => 243,  797 => 242,  791 => 241,  786 => 239,  781 => 236,  775 => 235,  773 => 234,  767 => 233,  762 => 231,  757 => 229,  753 => 227,  747 => 226,  744 => 225,  739 => 222,  733 => 221,  731 => 220,  717 => 215,  709 => 212,  702 => 211,  699 => 210,  694 => 207,  688 => 206,  686 => 205,  672 => 200,  664 => 197,  657 => 196,  654 => 195,  649 => 192,  643 => 191,  641 => 190,  627 => 185,  619 => 182,  612 => 181,  609 => 180,  604 => 177,  598 => 176,  596 => 175,  588 => 174,  580 => 173,  575 => 171,  568 => 170,  565 => 169,  560 => 166,  554 => 165,  552 => 164,  542 => 163,  535 => 161,  528 => 160,  525 => 159,  520 => 156,  514 => 155,  512 => 154,  502 => 153,  495 => 151,  488 => 150,  485 => 149,  480 => 146,  474 => 145,  472 => 144,  469 => 143,  462 => 141,  452 => 139,  442 => 137,  440 => 136,  437 => 135,  433 => 134,  427 => 131,  420 => 130,  417 => 129,  412 => 126,  406 => 125,  404 => 124,  401 => 123,  394 => 121,  389 => 119,  382 => 118,  377 => 116,  370 => 115,  368 => 114,  365 => 113,  361 => 112,  355 => 109,  348 => 108,  345 => 107,  340 => 104,  334 => 103,  332 => 102,  329 => 101,  323 => 100,  315 => 98,  307 => 96,  304 => 95,  300 => 94,  296 => 93,  290 => 92,  283 => 90,  276 => 89,  273 => 88,  270 => 87,  266 => 86,  262 => 84,  256 => 83,  254 => 82,  248 => 81,  243 => 79,  238 => 76,  232 => 75,  230 => 74,  224 => 73,  219 => 71,  214 => 68,  208 => 67,  206 => 66,  200 => 65,  195 => 63,  190 => 60,  184 => 59,  182 => 58,  176 => 57,  171 => 55,  165 => 51,  159 => 50,  151 => 48,  143 => 46,  140 => 45,  136 => 44,  130 => 41,  125 => 39,  119 => 35,  114 => 33,  110 => 32,  106 => 31,  101 => 30,  99 => 29,  95 => 28,  91 => 27,  86 => 25,  81 => 23,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customer/customer_form.twig", "/var/www/html/vncrafts.com/admin/view/template/customer/customer_form.twig");
    }
}
