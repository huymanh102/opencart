<?php

/* default/template/product/product.twig */
class __TwigTemplate_cf1242543b07db0856507cf593685d63dca59e23df0a10e57e0cb5cbee6e957d extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            echo "            <ul class=\"thumbnails\">
              ";
            // line 24
            if (($context["thumb"] ?? null)) {
                // line 25
                echo "                <li class=\"text-center\"><a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"> <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid\"/></a></li>
              ";
            }
            // line 27
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 28
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "                  <li class=\"image-additional\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", array());
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-fluid\"/></a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "              ";
            }
            // line 32
            echo "            </ul>
          ";
        }
        // line 34
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" id=\"description-tab\" data-toggle=\"tab\" href=\"#tab-description\" role=\"tab\" aria-controls=\"tab-description\" aria-selected=\"true\">
                ";
        // line 37
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 38
        if (($context["attribute_groups"] ?? null)) {
            // line 39
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"specification-tab\" data-toggle=\"tab\" href=\"#tab-specification\" role=\"tab\" aria-controls=\"tab-specification\" aria-selected=\"true\">
                  ";
            // line 41
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 43
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 44
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"review-tab\" data-toggle=\"tab\" href=\"#tab-review\" role=\"tab\" aria-controls=\"tab-review\" aria-selected=\"true\">
                  ";
            // line 46
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 48
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
              ";
        // line 51
        echo ($context["description"] ?? null);
        echo "
            </div>

            ";
        // line 54
        if (($context["attribute_groups"] ?? null)) {
            // line 55
            echo "              <div class=\"tab-pane fade\" id=\"tab-specification\" role=\"tabpanel\" aria-labelledby=\"specification-tab\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered\">
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 59
                echo "                      <thead>
                        <tr>
                          <td colspan=\"2\"><strong>";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", array());
                echo "</strong></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 66
                    echo "                          <tr>
                            <td>";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", array());
                    echo "</td>
                            <td>";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", array());
                    echo "</td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                      </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                  </table>
                </div>
              </div>
            ";
        }
        // line 77
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 78
            echo "              <div class=\"tab-pane fade\" id=\"tab-review\" role=\"tabpanel\" aria-labelledby=\"review-tab\">

                <form id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 82
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 83
            if (($context["review_guest"] ?? null)) {
                // line 84
                echo "                    <div class=\"form-group required\">
                      <label class=\"col-form-label\" for=\"input-name\">";
                // line 85
                echo ($context["entry_name"] ?? null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-form-label\" for=\"input-review\">";
                // line 88
                echo ($context["entry_review"] ?? null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                      <div class=\"help-block\">";
                // line 89
                echo ($context["text_note"] ?? null);
                echo "</div>
                    </div>
                    <div class=\"form-group row required\">
                      <div class=\"col-sm-12\">
                        <label class=\"col-form-label\">";
                // line 93
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                        &nbsp;&nbsp;&nbsp; ";
                // line 94
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"1\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"2\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"3\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"4\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"5\"/>
                        &nbsp;";
                // line 104
                echo ($context["entry_good"] ?? null);
                echo "</div>
                    </div>
                    ";
                // line 106
                echo ($context["captcha"] ?? null);
                echo "
                    <div class=\"buttons clearfix\">
                      <div class=\"float-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 109
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                      </div>
                    </div>
                  ";
            } else {
                // line 113
                echo "                    ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 115
            echo "                </form>
              </div>
            ";
        }
        // line 117
        echo "</div>
        </div>
        ";
        // line 119
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 120
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 121
            echo "        ";
        } else {
            // line 122
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 123
            echo "        ";
        }
        // line 124
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 126
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 127
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <h1>";
        // line 129
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 131
        if (($context["manufacturer"] ?? null)) {
            // line 132
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 134
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 135
        if (($context["reward"] ?? null)) {
            // line 136
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 138
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 140
        if (($context["price"] ?? null)) {
            // line 141
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 142
            if ( !($context["special"] ?? null)) {
                // line 143
                echo "                <li>
                  <h2>";
                // line 144
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
              ";
            } else {
                // line 147
                echo "                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li>
                  <h2>";
                // line 149
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
              ";
            }
            // line 152
            echo "              ";
            if (($context["tax"] ?? null)) {
                // line 153
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 155
            echo "              ";
            if (($context["points"] ?? null)) {
                // line 156
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 158
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 159
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 163
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", array());
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", array());
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "              ";
            }
            // line 166
            echo "            </ul>
          ";
        }
        // line 168
        echo "          <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 169
            echo "              <hr>
              <h3>";
            // line 170
            echo ($context["text_option"] ?? null);
            echo "</h3>
              ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 172
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "select")) {
                    // line 173
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 175
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 177
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", array());
                        echo "
                          ";
                        // line 178
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array())) {
                            // line 179
                            echo "                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", array());
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array());
                            echo ")
                          ";
                        }
                        // line 180
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                    </select>
                  </div>
                ";
                }
                // line 185
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "radio")) {
                    // line 186
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">
                      ";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 190
                        echo "                        <div class=\"form-check\">
                          <label><input type=\"radio\" name=\"option[";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", array());
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", array())) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", array());
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array())) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", array());
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 193
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", array());
                        echo "
                            ";
                        // line 194
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array())) {
                            // line 195
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", array());
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 197
                        echo "                          </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "                    </div>
                  </div>
                ";
                }
                // line 203
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "checkbox")) {
                    // line 204
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 207
                        echo "                        <div class=\"form-check\">
                          <label><input type=\"checkbox\" name=\"option[";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", array());
                        echo "\" class=\"form-check-input\"/>
                            ";
                        // line 209
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", array());
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array())) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", array());
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 210
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", array());
                        echo "
                            ";
                        // line 211
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array())) {
                            // line 212
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", array());
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 213
                        echo "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                    </div>
                  </div>
                ";
                }
                // line 219
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "text")) {
                    // line 220
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 224
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "textarea")) {
                    // line 225
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "</textarea>
                  </div>
                ";
                }
                // line 229
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "file")) {
                    // line 230
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\">";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\"/>
                  </div>
                ";
                }
                // line 236
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "date")) {
                    // line 237
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 247
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "datetime")) {
                    // line 248
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 258
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", array()) == "time")) {
                    // line 259
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"col-form-label\" for=\"input-option";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <span class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></span>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 269
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "            ";
        }
        // line 271
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 272
            echo "              <hr/>
              <h3>";
            // line 273
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 276
            echo ($context["text_select"] ?? null);
            echo "</option>
                  ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 278
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 284
        echo "            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-quantity\">";
        // line 285
        echo ($context["entry_qty"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 287
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 289
        if ((($context["minimum"] ?? null) > 1)) {
            // line 290
            echo "              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 291
        echo "</div>
          ";
        // line 292
        if (($context["review_status"] ?? null)) {
            // line 293
            echo "            <div class=\"rating\">
              <p>";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 295
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 296
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
              <hr/>
              <!-- AddThis Button BEGIN -->
              <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 300
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
              <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
              <!-- AddThis Button END -->
            </div>
          ";
        }
        // line 305
        echo "        </div>
      </div>
      ";
        // line 307
        if (($context["products"] ?? null)) {
            // line 308
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row\">
          ";
            // line 310
            $context["i"] = 0;
            // line 311
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 312
                echo "            ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 313
                    echo "              ";
                    $context["class"] = "col-8 col-sm-6";
                    // line 314
                    echo "            ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 315
                    echo "              ";
                    $context["class"] = "col-6 col-md-4";
                    // line 316
                    echo "            ";
                } else {
                    // line 317
                    echo "              ";
                    $context["class"] = "col-6 col-sm-3";
                    // line 318
                    echo "            ";
                }
                // line 319
                echo "            <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
              <div class=\"product-thumb transition\">
                <div class=\"image\"><a href=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array());
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" class=\"img-fluid\"/></a></div>
                <div class=\"caption\">
                  <h4><a href=\"";
                // line 323
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></h4>
                  <p>";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</p>
                  ";
                // line 325
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", array())) {
                    // line 326
                    echo "                    <div class=\"rating\">
                      ";
                    // line 327
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 328
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 329
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    echo "                    </div>
                  ";
                }
                // line 332
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 333
                    echo "                    <p class=\"price\">
                      ";
                    // line 334
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 335
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                      ";
                    } else {
                        // line 337
                        echo "                        <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</span>
                      ";
                    }
                    // line 339
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", array())) {
                        // line 340
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", array());
                        echo "</span>
                      ";
                    }
                    // line 342
                    echo "                    </p>
                  ";
                }
                // line 344
                echo "                </div>
                <div class=\"button-group\">
                  <button type=\"button\" onclick=\"cart.add('";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 347
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 348
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                </div>
              </div>
            </div>
            ";
                // line 352
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 353
                    echo "              <div class=\"clearfix visible-md visible-sm\"></div>
            ";
                } elseif ((                // line 354
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 355
                    echo "              <div class=\"clearfix visible-md\"></div>
            ";
                } elseif ((((                // line 356
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 357
                    echo "              <div class=\"clearfix visible-md\"></div>
            ";
                }
                // line 359
                echo "            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 360
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "        </div>
      ";
        }
        // line 363
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 364
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 366
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 367
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["tags"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["i"]] ?? null) : null), "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["tags"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["i"]] ?? null) : null), "tag", array());
                    echo "</a>,
            ";
                } else {
                    // line 369
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["tags"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[$context["i"]] ?? null) : null), "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["tags"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[$context["i"]] ?? null) : null), "tag", array());
                    echo "</a>
            ";
                }
                // line 371
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "        </p>
      ";
        }
        // line 374
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 376
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {

\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['quantity']) {
\t\t\t\t\t\$('input[name=\\'quantity\\']').after('<div class=\"text-danger\">' + json['error']['quantity'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#alert-box').append('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#alert-box').addClass('open');

\t\t\t\t\$('#cart').parent().load('index.php?route=common/cart/info');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 459
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 465
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 471
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-upload\\']').on('click', function() {
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
\t\t\t\t\t\$('.text-danger').remove();

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
\$('#review').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#review').fadeOut('slow');

\t\$('#review').load(this.href);

\t\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 539
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 543
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$('#form-review').serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 581
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1452 => 581,  1411 => 543,  1404 => 539,  1333 => 471,  1324 => 465,  1315 => 459,  1229 => 376,  1223 => 374,  1219 => 372,  1213 => 371,  1205 => 369,  1197 => 367,  1194 => 366,  1190 => 365,  1185 => 364,  1182 => 363,  1178 => 361,  1172 => 360,  1169 => 359,  1165 => 357,  1163 => 356,  1160 => 355,  1158 => 354,  1155 => 353,  1153 => 352,  1144 => 348,  1138 => 347,  1130 => 346,  1126 => 344,  1122 => 342,  1114 => 340,  1111 => 339,  1103 => 337,  1097 => 335,  1095 => 334,  1092 => 333,  1089 => 332,  1085 => 330,  1079 => 329,  1072 => 328,  1068 => 327,  1065 => 326,  1063 => 325,  1059 => 324,  1053 => 323,  1042 => 321,  1036 => 319,  1033 => 318,  1030 => 317,  1027 => 316,  1024 => 315,  1021 => 314,  1018 => 313,  1015 => 312,  1010 => 311,  1008 => 310,  1002 => 308,  1000 => 307,  996 => 305,  988 => 300,  979 => 297,  973 => 296,  966 => 295,  962 => 294,  959 => 293,  957 => 292,  954 => 291,  948 => 290,  946 => 289,  939 => 287,  930 => 285,  927 => 284,  921 => 280,  910 => 278,  906 => 277,  902 => 276,  896 => 273,  893 => 272,  890 => 271,  887 => 270,  881 => 269,  867 => 262,  860 => 260,  853 => 259,  850 => 258,  836 => 251,  829 => 249,  822 => 248,  819 => 247,  805 => 240,  798 => 238,  791 => 237,  788 => 236,  780 => 233,  772 => 232,  768 => 231,  761 => 230,  758 => 229,  742 => 226,  735 => 225,  732 => 224,  716 => 221,  709 => 220,  706 => 219,  701 => 216,  693 => 213,  686 => 212,  684 => 211,  679 => 210,  663 => 209,  657 => 208,  654 => 207,  648 => 206,  644 => 205,  637 => 204,  634 => 203,  629 => 200,  621 => 197,  614 => 195,  612 => 194,  607 => 193,  591 => 192,  585 => 191,  582 => 190,  578 => 189,  574 => 188,  570 => 187,  563 => 186,  560 => 185,  555 => 182,  548 => 180,  541 => 179,  539 => 178,  532 => 177,  528 => 176,  524 => 175,  514 => 174,  507 => 173,  504 => 172,  500 => 171,  496 => 170,  493 => 169,  490 => 168,  486 => 166,  483 => 165,  472 => 163,  468 => 162,  463 => 159,  460 => 158,  452 => 156,  449 => 155,  441 => 153,  438 => 152,  432 => 149,  426 => 147,  420 => 144,  417 => 143,  415 => 142,  412 => 141,  410 => 140,  402 => 138,  394 => 136,  392 => 135,  385 => 134,  375 => 132,  373 => 131,  368 => 129,  361 => 127,  355 => 126,  349 => 124,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  335 => 119,  331 => 117,  326 => 115,  320 => 113,  311 => 109,  305 => 106,  300 => 104,  287 => 94,  283 => 93,  276 => 89,  272 => 88,  264 => 85,  261 => 84,  259 => 83,  255 => 82,  249 => 78,  246 => 77,  240 => 73,  233 => 71,  224 => 68,  220 => 67,  217 => 66,  213 => 65,  206 => 61,  202 => 59,  198 => 58,  193 => 55,  191 => 54,  185 => 51,  180 => 48,  175 => 46,  171 => 44,  168 => 43,  163 => 41,  159 => 39,  157 => 38,  153 => 37,  148 => 34,  144 => 32,  141 => 31,  124 => 29,  119 => 28,  116 => 27,  102 => 25,  100 => 24,  97 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/product.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/product.twig");
    }
}
